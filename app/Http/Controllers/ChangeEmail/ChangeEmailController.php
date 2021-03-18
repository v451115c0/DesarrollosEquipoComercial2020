<?php

namespace App\Http\Controllers\ChangeEmail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use DB;
use Response;
use Mail;
use App\Staff;
use App\User;
use App\ControlCi;
use App\contracts;
use App\Usertest;
use App\BPInactive;
use App\Notifications\SMSNotification;

class ChangeEmailController extends Controller
{
    // Inicializamos la cadena original
    private $cadena_original = '||';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$user)
    {

      $userb64 = $user;
    	$user = base64_decode($user);
        
        try {

            //Obteneos los datos del usuario
            $staff =  Staff::select('id_staff','services','name','email')
                ->where('email','=', $user)
                ->first();


            if ($staff->services){

                return view('changeemail.index',array('staff' => $staff, 'user' => $userb64))
                        ->with('notice', 'Mensaje. ')
                        ->with('alertClass', 'alert-success');
                
            }
            else{

                  return view('changeemail.index',array('staff' => $staff, 'user' => $userb64));

            }
            
        } catch (Exception $e) {

             ///Avisamos al usuario que no tiene permisos
             return view('changeemail.index',array('staff' => $staff));
            
        }

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function generalData(Request $request){
        
        //Realizamos la busqueda de los datos generales del asesor
        $user =  User::select('id','sap_code','name','email')
                ->where('sap_code','=', $request->code)
                ->first();

        $controlCi = ControlCi::select('idcontrol_ci','nombre','correo','codigo')
                ->where('codigo','=', $request->code)
                ->first();

        $contracts =  contracts::select('id_contract','code','name','email')
                ->where('code','=', $request->code)
                ->first();

      $usuariobase = $request->email;

       return view('changeemail.detail_data',array('user' => $user,'controlCi' => $controlCi, 'contracts' => $contracts, 'sap_code' => $request->code, 'nameRequest' => $request->nameRequest, 'usuariobase' => $usuariobase));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function validateEmail(Request $request){

      //Recuperamos el email
      $email = $request->email;
       
      //Iniciamos con las validación 



        $user =  User::select('id','sap_code','name','email')
                ->where('email','=', $email)
                ->first();

        $controlCi = ControlCi::select('idcontrol_ci','nombre','correo','codigo')
                ->where('correo','=', $email)
                ->first();

        $contracts =  contracts::select('id_contract','code','name','email')
                ->where('email','=', $email)
                ->first();


        if (count($user) > 0 || count($controlCi) > 0 || count($contracts) > 0) {
          return 1;
        
        }else{

          return 0;

        }
      

       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function statusUpdate(Request $request){

        

    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
      
        
    }


    /**
    *  a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request){

        
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
      
    }


    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request){
        
     

      try {

        //======= Inicicódiamos el proceso para cambiar el estatus del c+odigo ======// 
        $sap_code = $request->sap_code;
        $emailRequest = $request->email;
        $nameRequest = $request->nameRequest;

             //Segundo cortamos el acceso a la OV
        $conexionMkt = \DB::connection('mysql4');
        $conexionIn = \DB::connection('mysqlsrv');
        $conexionTV = \DB::connection('mysql2');


        $user =  User::select('id','sap_code','name','email','country_id')
                ->where('sap_code','=', $sap_code)
                ->first();

        
        $control_ci = $conexionMkt->table('control_ci')
          ->where('codigo', '=',$sap_code)
          ->update([
            'correo' => $emailRequest
          ]);


        $contracts = $conexionIn->table('contracts')
          ->where('code', '=',$sap_code)
          ->update([
            'email' => $emailRequest
          ]);


        $users = $conexionTV->table('users')
          ->where('sap_code', '=',$sap_code)
          ->update([
            'email' => $emailRequest
          ]);





        //Evaluamos de que pais es
        switch ($user->country_id) {
          case 1:
           $country = 'COL';
            break;
          case 2:
           $country = 'MEX';
            break;
          case 3:
           $country = 'PER';
            break;
          case 4:
           $country = 'ECU';
            break;
          case 5:
           $country = 'PAN';
            break;
          case 6:
           $country = 'GTM';
            break;
          case 7:
           $country = 'SLV';
            break;
          case 8:
           $country = 'CRI';
            break;
          case 10:
           $country = 'CHL';
            break;
          
          default:
             $country = 'MEX';
            break;
        }

       
          //Insertamos en la bitacora para que el addon lo desactive en SAP.
          $bp = new BPInactive();
          $bp->CardType = ($user->client_type == 'CI') ? 'ab' : 'cb';
          $bp->CreateDate = date('Y-m-d h:m:s');
          $bp->CardCode = $sap_code;
          $bp->CardFirstName = $user->name;
          $bp->CardLastName = $user->last_name;
          $bp->CardCountry = $country;
          $bp->Email = $user->email;
          $bp->Email_Update = $emailRequest;
          $bp->SponsorId = $user->sap_code_sponsor;
          $bp->SponsorName = '';
          $bp->Status = 2;
          $bp->User = $nameRequest;
          $bp->save();


          if ($this->sendEmail($sap_code,$user->name.' '.$user->last_name,$nameRequest,$emailRequest)) {
            
            return \Redirect::back() 
              ->with('notice', 'El Código '.$sap_code.' fue actualizado de manera correcta!')
              ->with('alertClass', 'alert-success');

          }else{

              return \Redirect::back() 
                ->with('notice', 'El Código '.$sap_code.' fue actualizado de manera correcta, sin embargo no fue posible notificar por correo!')
                ->with('alertClass', 'alert-success');


          }

        
      } catch (Exception $e) {

        return \Redirect::back() 
          ->with('notice', 'No fue posible actualizar el Código '.$sap_code.', por favor intente nuevamente!')
          ->with('alertClass', 'alert-danger');
        
      }

     

    }
  

     public function sendEmail($code,$name,$nameRequest,$emailRequest){

        $data = array(
            'code' => $code,
            'name' => $name,
            'nameRequest' => $nameRequest,
            'emailRequest' => $emailRequest,
            'subject' => 'Transacción de Email TV - SAP'
        );
        
      

        try {

            Mail::send('Email.email_change', $data, function ($message) use ($emailRequest) {
                $message->from('servicio@nikkenlatam.com', 'Notificaciones NIKKEN LATAM');
                $message->to($emailRequest)->subject('Transacción de Email TV - SAP');
                $message->bcc('lmiros@nikkenlatam.com', 'Transacción de Email TV - SAP');
                 $message->bcc('carceva@nikkenlatam.com', 'Transacción de Email TV - SAP');
                $message->bcc('tserrano@nikkenlatam.com', 'Transacción de Email TV - SAP');
                
               
            });


            return true;
            
        } catch (Exception $e) {

            return false;
            
        }
    }

    public function destroy($id){
       

    }


    public function show($id){
       

    }


    /**
     * Export a listing of the resource.
     *
     * @param  string $type
     * @return Response xls
     */
    public function export(Request $request)
    {
            
        

    }

    public function requestRma(Request $request){

      

    }


    public function validateBill(Request $request){

        
       

    }


    public function requestProduct(Request $request){

    }


    public function requestDefect(Request $request){

        
    }

    public function saveRma(Request $request){
       
       


    }


    public function requestFiles(Request $request){

      
    }


}