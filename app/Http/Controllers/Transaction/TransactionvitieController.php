<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use DB;
use Response;
use Mail;
use App\Staff;
use App\User;
use App\ControlCi;
use App\BPInactive;
use App\Notifications\SMSNotification;

class TransactionvitieController extends Controller
{
    // Inicializamos la cadena original
    private $cadena_original = '||';

    public function index(Request $request,$user)
    {

        $user = base64_decode($user);
        
        try {

            //Obteneos los datos del usuario
            $staff =  Staff::select('id_staff','services','name','email')
                ->where('email','=', $user)
                ->where('services','=', 1)
                ->first();


            if (count($staff)){


               
                return view('transaction.index',array('staff' => $staff))
                        ->with('notice', 'Lo sentimos, no cuentas con los permisos necesarios para acceder a esta opción!. ')
                        ->with('alertClass', 'alert-success');
                
            }
            else{

                  return view('transaction.index',array('staff' => $staff));

            }
            
        } catch (Exception $e) {

             ///Avisamos al usuario que no tiene permisos
             return view('transaction.index',array('staff' => $staff));
            
        }

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function generalData(Request $request){

        //Realizamos la busqueda de los datos generales del asesor
        $user =  User::select('id','sap_code','sap_code_sponsor','name','rank','client_type','status','email')
                ->where('sap_code','=', $request->code)
                ->first();



        return Response::Json($user);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function salesPending(Request $request){

        //Realizamos la busqueda de los datos generales del asesor
        $user =  User::select('id','sap_code','sap_code_sponsor','name','rank','client_type','status','email')
                ->where('sap_code','=', $request->code)
                ->first();



        return Response::Json($user);




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
    public function update(Request $request, $id,$code){
        
       echo("status: ".$request->statusHidden);


      try {

        //======= Inicicódiamos el proceso para cambiar el estatus del c+odigo ======// 
        $status = $request->statusHidden;
        $nameRequest = $request->nameRequest;
        $emailRequest = $request->emailRequest;
        
        //Primero cortamos el acceso a la TV
        $users = new User();
        $user = $users->findOrFail($id);

        //Seteamos los nuevos valores
        $user->status = $status;
        $user->locked = ($status == 0) ? 1 : 0;



        $usersCI =  ControlCi::select('idcontrol_ci','nombrep')
                ->where('codigo','=', $code)
                ->first();

        

        //Segundo cortamos el acceso a la OV
        $conexionMkt = \DB::connection('mysql4');
        
        $updates = $conexionMkt->table('control_ci')
          ->where('codigo', '=',$code)
          ->update([
            'estatus' => $status
           
          ]);

        //Cerramos la conexión

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
        $bp->CardCode = $code;
        $bp->CardFirstName = $user->name;
        $bp->CardLastName = $user->last_name;
        $bp->CardCountry = $country;
        $bp->Email = $user->email;
        $bp->SponsorId = $user->sap_code_sponsor;
        $bp->SponsorName = $usersCI->nombrep;
        $bp->Status = $status;
        $bp->User = $emailRequest;
        $bp->save();

        $name = $user->name.' '.$user->last_name;

        $user->save();

        if ($status == 0) {
          $statustext = "Desactivar";
        }
        else{
          $statustext = "Activar";
        }


        if ($this->sendEmail($code,$name,$nameRequest,$emailRequest,$statustext)) {
            
            return \Redirect::back() 
              ->with('notice', 'El Código '.$code.' fue actualizado de manera correcta!')
              ->with('alertClass', 'alert-success');

        }else{

            return \Redirect::back() 
              ->with('notice', 'El Código '.$code.' fue actualizado de manera correcta, sin embargo no fue posible notificar por correo!')
              ->with('alertClass', 'alert-success');


        }

        
      } catch (Exception $e) {

        return \Redirect::back() 
          ->with('notice', 'No fue posible actualizar el Código '.$code.', por favor intente nuevamente!')
          ->with('alertClass', 'alert-danger');
        
      }

     

    }

     public function sendEmail($code,$name,$nameRequest,$emailRequest,$statustext){

        $data = array(
            'code' => $code,
            'name' => $name,
            'nameRequest' => $nameRequest,
            'emailRequest' => $emailRequest,
            'statustext' => $statustext,
            'subject' => 'Transacción de Código TV - SAP'
        );
        
      

        try {

            Mail::send('Email.email', $data, function ($message) use ($emailRequest) {
                $message->from('servicio@nikkenlatam.com', 'Notificaciones NIKKEN LATAM');
                $message->to($emailRequest)->subject('Transacción de Código TV - SAP');
                $message->bcc('lmiros@nikkenlatam.com', 'Transacción de Código TV - SAP');
                $message->bcc('carceva@nikkenlatam.com', 'Transacción de Código TV - SAP');
                $message->bcc('tserrano@nikkenlatam.com', 'Transacción de Código TV - SAP');
               
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