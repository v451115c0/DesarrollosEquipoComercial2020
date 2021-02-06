<?php

namespace App\Http\Controllers\PointsNY;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use DB;

class PointstNyController extends Controller
{
    // Inicializamos la cadena original
    private $cadena_original = '||';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$abi)
    {


    }

    public function point(Request $request,$abi){


        $abi_encode = $abi;
        //$abi = base64_decode($abi);
        $abi = '20642503';
        //Abrimos la conexion
        $conexion = DB::connection('sqlsrv2');
        $conection = \DB::connection('sqlsrv4');
        $conexionMkt = \DB::connection('mysql3');
        $poitns = 0;

        //Obtenemos los datos del abi
        $personal_data= $conection->table('Associates1')
            ->select('ApFirstName as Name','AssociateID as associateid')
            ->where('AssociateID','=', $abi)
            ->first();



        //Recuperamos todos los puntos ganados por el asesor
        $pointsWinners = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points','Periodo')
                    ->where('associateid','=', $abi)
                    ->orderBy('Periodo','desc')
                    ->get();

        
        /*
        * Generamos el query que obtendra el primer punto viaje
        * Punto viaje Abril
        * Realizar un Kinya
        */
        $point1 = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points')
                    ->where('associateid','=', $abi)
                    ->where('Periodo','=', '201904')
                    ->first();

        $queryKinyaDetail = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYa')
            ->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
            ->where('Associateid','=', $abi)
            ->where('Periodo','=', '201904')
            ->get();


        if (count($point1)) {
          if ($point1->points != '0') {
            
             $poitns = $poitns + 1;
          }else{
              $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }


       

        /*
        * Generemos el query que obtendra el segundo punto viaje
        * Punto viaje Mayo
        * Reazliar in Kinya+ de primer Nivel
        */
        $point2 = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points')
                    ->where('associateid','=', $abi)
                    ->where('Periodo','=', '201905')
                    ->first();

        $queryKinyaDetailMayo = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYa')
                ->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
                ->where('Associateid','=', $abi)
                ->where('Periodo','=', '201905')
                ->get();  
                
        $queryKinyaMasMayo = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYaL1')
            ->join('Historico_Pata_NikkenChallenge', 'Historico_Pata_NikkenChallenge.associateid', '=', 'Historico_EdoCta_NikkenChallenge_KinYaL1.Associateid')
            ->select('Historico_EdoCta_NikkenChallenge_KinYaL1.*','Historico_Pata_NikkenChallenge.level', 'Historico_Pata_NikkenChallenge.pata')
            ->where('Historico_EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
            ->where('Historico_EdoCta_NikkenChallenge_KinYaL1.Periodo','=', '201905')
            ->get(); 

        if (count($point2)) {
          if ($point2->points != '0') {
            
             $poitns = $poitns + 1;
          }else{
              $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }        



        /* Generamos el query que obtendra el tercer punto viaje
        * Punto viaje Junio
        * Bases cambiadas
        */
        $point3 = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points')
                    ->where('associateid','=', $abi)
                    ->where('Periodo','=', '201906')
                    ->first();



        if (count($point3)) {
          if ($point3->points != '0') {
            
             $poitns = $poitns + $point3->points;
          }else{
              $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }      
        
        
        /**
        * Realizamos la lógica del cuarto punto viaje
        * Punto viaje Junio
        * Realizar kinya+ de segundo nivel
        */
        /**/

        $point4 = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points')
                    ->where('associateid','=', $abi)
                    ->where('Periodo','=', '201907')
                    ->first();

        if (count($point4)) {
          if ($point4->points != '0') {
            
             $poitns = $poitns + $point4->points;
          }else{
              $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }      
        
        

        //Obtenemos los datos de detalle del kinya del mes de Mayo
        $queryKinyaDetailJulio = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYa')
            ->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
            ->where('Associateid','=', $abi)
            ->where('Periodo','=', '201907')
            ->get();

        //Obtenemos los datos de detalle del kinya+ de primer nivel del mes de Abril
        $queryKinyaMasJulioL1 = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
            ->join('Pata_NikkenChallenge', 'Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.Associateid')
            ->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
            ->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
            ->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', '201907')
            ->get();

        $queryKinyaMasJulioL2 = $conexion->table('EdoCta_NikkenChallenge_KinYaL2')
            ->join('Pata_NikkenChallenge', 'Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL2.Associateid')
            ->select('EdoCta_NikkenChallenge_KinYaL2.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
            ->where('EdoCta_NikkenChallenge_KinYaL2.Owner','=', $abi)
            ->where('EdoCta_NikkenChallenge_KinYaL2.Periodo','=', '201907')
            ->get();
        

        /**
        * Generamos el quinto punto viaje 
        * Agosto
        * Medio punto si logra un kinya
        */

/*        $point_kinyamasAgosto = $conexion->table('Final_Result_NKChallenge')
            ->select('Final_Result_NKChallenge.Price_D1','Final_Result_NKChallenge.Kintai')
            ->where('Final_Result_NKChallenge.Associateid','=', $abi)
            ->where('Final_Result_NKChallenge.period','=', '201908')
            ->first();

        if (count($point_kinyamasAgosto)) {
          if ($point_kinyamasAgosto->Price_D1 != '0' || $point_kinyamasAgosto->Kintai != '0') {
            $poitns = $poitns + 0.5;
          }else{
            $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }   */ 

        $point5 = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points')
                    ->where('associateid','=', $abi)
                    ->where('Periodo','=', '201908')
                    ->first();

        if (count($point5)) {
          if ($point5->points != '0') {
            
             $poitns = $poitns + $point5->points;
          }else{
              $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }      



        $point6 = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points')
                    ->where('associateid','=', $abi)
                    ->where('Periodo','=', '201909')
                    ->first();

        if (count($point6)) {
          if ($point6->points != '0') {
            
             $poitns = $poitns + $point6->points;
          }else{
              $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }      



        $point7 = $conexion->table('TercerPuntoViaje')
                    ->select('puntos as points')
                    ->where('associateid','=', $abi)
                    ->where('Periodo','=', '201910')
                    ->first();

        if (count($point7)) {
          if ($point7->points != '0') {
            
             $poitns = $poitns + $point7->points;
          }else{
              $poitns = $poitns + 0;
          }
        }else{
            $poitns = $poitns + 0;
        }      



        \DB::disconnect('sqlsrv2'); 
        \DB::disconnect('sqlsrv4'); 



        //Mostramos la vista con los datos obtenidos
        return view('pointsNy.index',['personal_data'=> $personal_data,'point1' => $point1, 'point2' => $point2, 'queryKinyaDetail' => $queryKinyaDetail,'queryKinyaMas' => '$queryKinyaMas','queryKinyaMasMayo' => $queryKinyaMasMayo, 'queryKinyaDetailMayo' => $queryKinyaDetailMayo,'abi_encode' => $abi_encode,'poitns' => $poitns, 'point3' => $point3, 'queryKinyaDetailJulio' => $queryKinyaDetailJulio, 'queryKinyaMasJulioL1' => $queryKinyaMasJulioL1, 'queryKinyaMasJulioL2' => $queryKinyaMasJulioL2,'point4' => $point4, 'point5' => $point5, 'pointsWinners' => $pointsWinners,'point6' => $point6,'point7' => $point7]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
      
        //Mostramos la vista con los datos obtenidos
        return view('rma.save');
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
    public function update(Request $request, $id){
        
        
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