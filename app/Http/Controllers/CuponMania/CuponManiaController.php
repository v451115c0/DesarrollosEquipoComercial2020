<?php

namespace App\Http\Controllers\CuponMania;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use DB;

class CuponManiaController extends Controller
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

    public function getwinners(Request $request,$country){

       
        //Realizamos la conexion 
        $conexion = DB::connection('sqlsrv2');

       //TEFUQU0=

        $country = base64_decode($country);

        $cupones =  $conexion->table('CuponManiaProd')
            ->select('AssociateName',
                'associateid',
                'pais',
                'Email',
                'Telefono',
                'rango',
                'Orden',
                'Fecha_Orden');

            if ($country != 'LATAM') {
                $cupones = $cupones->where('pais','=', $country);
            } 
            
            $cupones = $cupones->paginate(50);



        //Cerramos la conexion
        \DB::disconnect('sqlsrv2'); 


        return view('cuponmania.index',array('response' => $cupones,'country' => $country)); 
       


    }


    public function getwinnersExport(Request $request,$country){

       date_default_timezone_set("America/Mexico_City");
        //Realizamos la conexion 
        $conexion = DB::connection('sqlsrv2');
        $fileName='GanadoresCupomania-'.date("Y-m-d H:i:s");

        
        $cupones =  $conexion->table('CuponManiaProd')
            ->select('AssociateName',
                'associateid',
                'pais',
                'Email',
                'Telefono',
                'rango',
                'Orden',
                'Fecha_Orden');

        if ($country != 'LATAM') {
                $cupones = $cupones->where('pais','=', $country);
        } 
            
            $cupones = $cupones->get();

       
        //Cerramos la conexion
        \DB::disconnect('sqlsrv2'); 


           //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($cupones) {
         
            $excel->sheet('listado de ganadores', function($sheet) use ($cupones) {

               
                // === Definimos estilos base ===
                $sheet->setBorder('A1:H1', 'thin'); //Colocamos borde a los encabezados
                $sheet->setHeight(7, 25); //Especificamos el tamaño de los encabezados
                //$sheet->mergeCells('B3:E3'); //Combinamos las columnas del título de la hoja
                

                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('PAÍS');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });


                $sheet->cell('B1', function($cell){
                    $cell->setValue('COD. ASESOR');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('NOMBRE');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('# ORDEN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });



                $sheet->cell('E1', function($cell){
                    $cell->setValue('CORREO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                 $sheet->cell('F1', function($cell){
                    $cell->setValue('TELEFONO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('G1', function($cell){
                    $cell->setValue('RANGO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('H1', function($cell){
                    $cell->setValue('FECHA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                // Mostramos los registros
                foreach ($cupones as $idx => $item) 
                {
                    $idx = ($idx  + 2); // Indica la posición de la fila en el documento

                    // === Iniciamos asignación de celdas ===

                    // Asignamos el NOMBRE
                    $sheet->cell('A'.$idx, function($cell) use ($item) {
                      $cell->setValue($item->pais);
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('B'.$idx, function($cell) use ($item) {
                        
                        $cell->setValue($item->associateid);
                       
                    });

                    // Asignamos el status
                    $sheet->cell('C'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->AssociateName);
                    });

                     // Asignamos el status
                    $sheet->cell('D'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Orden);
                    });

                    // Asignamos el status
                    $sheet->cell('E'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Email);
                    });

                     // Asignamos el status
                    $sheet->cell('F'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Telefono);
                    });


                    // Asignamos el status
                    $sheet->cell('G'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->rango);
                    });


                    // Asignamos el status
                    $sheet->cell('H'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Fecha_Orden);
                    });
                }

            });

        })->export('xls');


       


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