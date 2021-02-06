<?php

namespace App\Http\Controllers\DemoGenealogy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use DB; //CONECTAR A  LA BD SQL SERVER

class PageController extends Controller
{


     public function ejemplotem(Request $request){

        return view('demoGenealogy.template.index');

     }


     public function login(Request $request){

        return view('demoGenealogy.template.login');

     }


    public function genealogy(Request $request){
    	
    	   $id=$request->abiID;

        

           $conection = \DB::connection('sqlsrv4');


			$queryPoints = DB::connection('sqlsrv4')->table('volume_calctest')
                ->join('Associate_gen_test', 'volume_calctest.AssociateId', '=', 'Associate_gen_test.AssociateId')
                ->select('Associate_gen_test.ApFirstName','volume_calctest.VP','volume_calctest.VGP','volume_calctest.VO','volume_calctest.VoLDP','volume_calctest.VoLDPyS')
                ->where('volume_calctest.associateid','=', $id)
                ->get();

            $queryUpline = $conection->select('exec spUplinePerId ?',array($id));


            \DB::disconnect('sqlsrv4');     

        return view('demoGenealogy.layout.index',['queryPoints' => $queryPoints, 'queryUpline' => $queryUpline ]);

    }


  public function consulta(Request $request) 
   {
        
        $abi = $request->abi;
         


           try {


            $conection = \DB::connection('sqlsrv4');

            $q01= $conection ->table('Associate_gen_test')
            ->select('ApFirstName')
            ->where('AssociateID','=', $abi)
            ->first(); 

            \DB::disconnect('sqlsrv4'); 


           
            $Name = $q01->ApFirstName;

            return \Response::json($Name);
               
           } catch (Exception $e) {

           
            return 0;
               
           }
          
    } 



    public function consultaItem(Request $request) 
   {
        
        $iditem = $request->iditem;
         


           try {

            if ($iditem=="001") {
                    $ItemName ="DEMO 001";
                   // $Points=100;
                } else if ($iditem=="002") {
                    $ItemName ="DEMO 002";
                   // $Points=200;
                } else if ($iditem=="003") {
                    $ItemName ="DEMO 003";
                   // $Points=300;
                } else if ($iditem=="004") {
                    $ItemName ="DEMO 004";
                   // $Points=400;
            }
         
            return \Response::json($ItemName);
               
           } catch (Exception $e) {

           
            return 0;
               
           }
          
    } 


     public function consultaItemPoints(Request $request) 
   {
        
        $iditem = $request->iditem;
         


           try {

            if ($iditem=="001") {
                    $Points=100;
                } else if ($iditem=="002") {
                    $Points=200;
                } else if ($iditem=="003") {
                    $Points=300;
                } else if ($iditem=="004") {
                    $Points=400;
            }
         
            return \Response::json($Points);
               
           } catch (Exception $e) {

           
            return 0;
               
           }
          
    } 

   public function consultaTotalPoints(Request $request) 
   {
        $Points = $request->itempoints;
        $qty = $request->qty;
    
        try {

        $TotalPoints= $qty * $Points;
         
            return \Response::json($TotalPoints);
               
           } catch (Exception $e) {

           
            return 0;
               
           }
          
    }  






 /*   public function home(Request $request) 
   {
        //Mostramos la vista con los datos obtenidos
        return view('layout.index');
    } */

    public function signup(Request $request) 
   {
        //Mostramos la vista con los datos obtenidos
        return view('demoGenealogy.SignUp.Genealogy_create');
    }

    public function order(Request $request) 
   {
        //Mostramos la vista con los datos obtenidos
        return view('demoGenealogy.OrderCreate.save');
    }

     public function genealogyreport(Request $request) 
   {
        //Mostramos la vista con los datos obtenidos
        $id=$request->abiID;

        $conection = \DB::connection('sqlsrv4');
        $queryGenealogy = $conection->select('exec spGenealogyPerId ?',array($id));
        return view('demoGenealogy.Genealogy.Genealogy_genealogyreport',['queryGenealogy' => $queryGenealogy]);
        \DB::disconnect('sqlsrv4');

    }

    public function upline(Request $request) 
   {
        //Mostramos la vista con los datos obtenidos
        $id=$request->abiID;

        $conection = \DB::connection('sqlsrv4');
        $queryUpline = $conection->select('exec spUplinePerId ?',array($id));
        \DB::disconnect('sqlsrv4');     
        return view('demoGenealogy.UplineView.upline',['queryUpline' => $queryUpline]);

    }


    public function show(){

    }



    public function saveAssociateGenTest(Request $request){
       
        //Store data
        $tablaAssociateGenTest = new \App\AssociateGenTest();
        $tablaVolume_calcTest = new \App\Volume_calcTest();

        // VALIDATION
        $conection = \DB::connection('sqlsrv4');
        $q01= $conection ->table('Associate_gen_test')
            ->select('AssociateID')
            ->where('AssociateID','=', $request->abi)
            ->first(); 
 

                if (isset($q01)) {
                    echo '<script type="text/javascript">alert("This ID already exists");</script>';
                    return view('demoGenealogy.SignUp.Genealogy_create');
                } else {
                    
        // END VALIDATION

 
        // Asignamos los datos  generales
        $tablaAssociateGenTest->AssociateId = $request->abi;
        $tablaAssociateGenTest->SponsorID = $request->abiID;
        $tablaAssociateGenTest->ApFirstName = $request->nameabi;
        $tablaAssociateGenTest->AssociateType = $request->type;
        $tablaAssociateGenTest->Status = 'N';
        $tablaAssociateGenTest->Pais = $request->country;
        $tablaAssociateGenTest->Nivel = '0';
        $tablaAssociateGenTest->linea = '0';
        $tablaAssociateGenTest->GenOwner = '6626400';

        // Asignamos los datos  generales a Volume_calcTest
        $tablaVolume_calcTest->associateId = $request->abi;
        $tablaVolume_calcTest->sponsorID = $request->abiID;
        $tablaVolume_calcTest->ApfirstName = $request->nameabi;
        $tablaVolume_calcTest->AssociateType = $request->type;
        $tablaVolume_calcTest->Status = 'N';
        $tablaVolume_calcTest->pais = $request->country;
        $tablaVolume_calcTest->Nivel = '0';
        $tablaVolume_calcTest->linea = '0';
        $tablaVolume_calcTest->GenOwner = '6626400';
        $tablaVolume_calcTest->VP = '0';
        $tablaVolume_calcTest->VGP = '0';
        $tablaVolume_calcTest->VO = '0';
        $tablaVolume_calcTest->VOLDP = '0';
        $tablaVolume_calcTest->VoLDPyS = '0';
             
        if ( $tablaAssociateGenTest->save() && $tablaVolume_calcTest->save())
        {

            //ejecuta sp para el nivel

            $conection = \DB::connection('sqlsrv4');
            $queryUpdate = $conection->update('exec SignupDemo ?',array($request->abi));
            \DB::disconnect('sqlsrv4');
            
         
            return \Redirect::to('signup')
                ->with('notice', 'The sign up has been completed successfully, Associate ID: '.$request->abi)
                ->with('alertClass', 'alert-success');
        }
        else
        {
            return \Redirect::to('signup')
                ->with('notice', 'An error occurred, try again.')
                ->with('alertClass', 'alert-danger');
        }

        //VALIDATION
        }

        //END VALIDATION

    }



    /*    */
    public function saveOrderheader1_Demo(Request $request){
       
        //Store data
        $tablaOrderheader1_Demo = new \App\Orderheader1_Demo();  /****CAMBIAR NOMBRE AZUL ***/
        $tablaOrderline1_Demo = new \App\Orderline1_Demo();

 
        // Asignamos los datos  generales  /*** CAMBIAR CAMPOS DE LA TABLA****/ 
        $tablaOrderheader1_Demo->OrderNum = $request->ordernum;
        $tablaOrderheader1_Demo->AssociateId = $request->abiID;
        $tablaOrderheader1_Demo->OrderDate = date('Y-m-d');
        $tablaOrderheader1_Demo->Period = '201905';
        $tablaOrderheader1_Demo->TotalAmount = '0';
        $tablaOrderheader1_Demo->TaxAmount = '0';
        $tablaOrderheader1_Demo->PaidAmount = '0';
        $tablaOrderheader1_Demo->Currency = '0';
        if ($request->pais == 'CAN') {
            $tablaOrderheader1_Demo->Country = 'CA';
        } else if ($request->pais == 'USA') {
            $tablaOrderheader1_Demo->Country = 'US';
        }
        $tablaOrderheader1_Demo->OrderType = '';
        $tablaOrderheader1_Demo->OrderSource = '';
        $tablaOrderheader1_Demo->Status = '';
        $tablaOrderheader1_Demo->Usr = '';
        $tablaOrderheader1_Demo->Pais = $request->pais;
        $tablaOrderheader1_Demo->Tipdoc = '';
        $tablaOrderheader1_Demo->PriceList = '';
        $tablaOrderheader1_Demo->Entered = '';
        $tablaOrderheader1_Demo->Procesado = '';



        $tablaOrderline1_Demo->OrderNum = $request->ordernum;
        $tablaOrderline1_Demo->ItemCode = $request->item;
        $tablaOrderline1_Demo->OrderLine = '';
        $tablaOrderline1_Demo->Qty = $request->qty;
        $tablaOrderline1_Demo->UnitPrice = '0';
        $tablaOrderline1_Demo->Price = '0';
        $tablaOrderline1_Demo->Tax = '0';
        $tablaOrderline1_Demo->BV= $request->total;
        $tablaOrderline1_Demo->BaseAmt = '0';
        $tablaOrderline1_Demo->DateLine = date('Y-m-d');
        $tablaOrderline1_Demo->Pais = $request->pais;


             
        if ( $tablaOrderheader1_Demo->save() && $tablaOrderline1_Demo->save() )
        {
            

            //ejecuta sp para puntos

            $conection = \DB::connection('sqlsrv4');
            $queryPoints = $conection->update('exec NewOrdersDemo ?,?,?',array($request->abiID,$request->total,$request->ordernum));
            \DB::disconnect('sqlsrv4');

         
            return \Redirect::to('order')
                ->with('notice', 'The sign up has been completed successfully, Associate ID: '.$request->abi)
                ->with('alertClass', 'alert-success');
        }
        else
        {
            return \Redirect::to('order')
                ->with('notice', 'An error occurred, try again.')
                ->with('alertClass', 'alert-danger');
        }

    }
    /*  */






}
