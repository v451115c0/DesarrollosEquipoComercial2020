<?php

namespace App\Http\Controllers\Rma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RmaController extends Controller
{
    // Inicializamos la cadena original
    private $cadena_original = '||';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $rmas = \App\TablaRma::select(
            'tabla_rma.num_rma',
            'tabla_rma.num_fact_compra',
            'tabla_rma.fecha_recibido',
            'tabla_rma.estatus'
        )
        ->where('tabla_rma.num_ci','=',21629703)
        ->orderBy('tabla_rma.num_rma', 'desc')
        ->paginate(25);

      

           //Seteamos el path para paginación y regresamos la vista con la información recuperada
        $rmas->setPath(url('rma'));


        //Mostramos la vista con los datos obtenidos
        return view('rma.index', 
            [
                'rmas' => $rmas
            ]);


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

        //Obtenemos el id a buscar.
        $id = $request->rma;
        

        try {
           $rma = \App\TablaRma::select(
                'tabla_rma.fecha_recibido',
                'tabla_rma.num_rma',
                'tabla_rma.num_fact_compra',
                'tabla_rma.fecha_fact',
                'tabla_rma.num_ci',
                'tabla_rma.nombre_ci',
                'tabla_rma.correoci',
                'tabla_rma.estatus',
                'tabla_rma.codigo',
                'items_clasif.descripcion',
                'tabla_rma.cantidad',
                'tipo_defecto.tipo_defecto'
            )
            /*->id($request->id)
            ->code($request->code)
            ->reward($request->reward)
            ->status($request->status)*/
            ->join('items_clasif','tabla_rma.codigo','=','items_clasif.codigo')
            ->join('tipo_defecto','tabla_rma.id_tipo','=','tipo_defecto.id_tipo')
            ->where('tabla_rma.num_rma','=',$id)
            ->orderBy('tabla_rma.num_rma', 'ASC')
            ->first();

            


            //Regresamos respuesta en formato json
            return \Response::json($rma);
                
        } catch (Exception $e) {

        
            echo($e->getMessage);
              echo('0');
            
        }

    }


    public function validateBill(Request $request){

        // Preparamos la consulta para devolver los registros a la petición
       
        $dataReturn = [];

       
        
        try {

            //dDeclaramos la conexion
            $conection = \DB::connection('sqlsrv');

            /**
            * Ejecutamos el SP para obtener y validar la factura (Sp en Sqlsrv)
            */
            $response = $conection->select('exec sp_found_lists_data_bill ?,?,?,?,?,?,?',array($request->country,$request->bill,null,null,null,null,null));
           
            //Obtenemos el número de día que han pasado desde que se creo la factura
           
            //obtenemos la fecha actual
            $dateNow = date('Y-m-d');
            $dateBill = $response[0]->docdate;

            $segundosFechaActual = strtotime($dateNow);
            $segundosFechaRegistro = strtotime($dateBill);
            $segundosTranscurridos = $segundosFechaActual - $segundosFechaRegistro;
            $diasFalt = (( ( $segundosTranscurridos / 60 ) / 60 ) / 24);
           

            \DB::disconnect('sqlsrv');

            
            $dataReturn[] = [
                'docnum_update' => $response[0]->docnum_update, 
                'docdate' => $response[0]->docdate,
                'cardcode' => $response[0]->cardcode,  
                'cardname' => $response[0]->cardname, 
                'email' => $response[0]->email,
                'diasFalt' => $diasFalt, 
                'message_error' => NULL
            ];

           
            
            

            if (!is_null($response[0]->docnum_update)) {
                //Regresamos respuesta en formato json
                return \Response::json($dataReturn);
            }else{
               return 0;
            }

            
            
        } catch (Exception $e) {
            
            echo('0');
            return 0;
        }
        
       

    }


    public function requestProduct(Request $request){

        $producsWarrency = [];
        $responseWarranty = [];
        $variables = array();

        //dDeclaramos la conexion
        $conection = \DB::connection('sqlsrv');

        //Iniciamos el control de excepciones
        try {

              //Ejecuamos el sp que traera todo el listado de items dentro de la factura
            $responseList = $conection->select('exec sp_found_lists_items ?,?',array($request->country,$request->bill));
            
            //recorremos el array para obtener los productos de la factura
                foreach ($responseList as $key => $value) {
                    

                    //Ejecutamos el sp que traera los datos del producto en garantia
                    $responseComplete =  $conection->select('exec sp_complete_product ?,?,?,?,?',array($request->country,$request->bill,$value->ItemCode,null,null));
                
                 
                    //Ejecutamos los sp del lado de Mysql
                    
                    //Recorremos el array para saber que productos pueden aplicar en garantia
                    foreach ($responseComplete as $key2 => $value2) {

                        $responseCodComp =  \DB::select('call sp_found_codcomp (?)',array($value2->ItemCode_send));
                    }

                   // print_r($responseCodComp);

                    foreach ($responseCodComp as $key3 => $value3) {
                     // echo($value->codigo.' ===== '.$value->codcomp);
                        $responseWarranty =  \DB::select('call sp_found_days_warranty (?,?,?)',array($value3->codigo,$value3->codcomp,null));

                        
                        foreach ($responseWarranty as $key4 => $valueW) {
                          
                            //array_push($producsWarrency, $value->codigo.'===='.$value->codcomp.'===N'.$valueW->num_days_warranty);
                            if ($request->diasFalt <= $valueW->num_days_warranty) {

                                //comparamos los items con el array principal y obtendremos solo los productos con garantia
                                $tags[] = array(
                                 "ItemCode" => $value->ItemCode,
                                 "Quantity" => $value->Quantity,
                                 "Dscription" => $value->Dscription,
                                 "TreeType" => $value->TreeType,
                                 "BaseEntry" => $value->BaseEntry,
                                 "diasFalt" => $valueW->num_days_warranty,
                                 "codComp" => $value3->codcomp,
                                );
                              
                               
                            }

                        }

                    }
                   
                }

            \DB::disconnect('sqlsrv');


            return \Response::json($tags);
            
        } catch (Exception $e) {

            echo('0');
            return 0;
            
        }
    }


    public function requestDefect(Request $request){

        try {

            $defectTypes = \App\ItemsClasif::select(
                'tipo_defecto.id_tipo',
                'tipo_defecto.tipo_defecto'
            )
            ->join('tipo_defecto','items_clasif.linea_item','=','tipo_defecto.linea_item')
            ->where('items_clasif.codigo','=',$request->codComp)
            ->where('tipo_defecto.procede_reclamo','=','Y')
            ->orderBy('tipo_defecto.id_tipo', 'ASC')
            ->get();

            return \Response::json($defectTypes);
            
        } catch (Exception $e) {

            echo('0');
            return 0;
            
        }
    }

    public function saveRma(Request $request){
       
       

        //Store data
        $tablaRma = new \App\TablaRma();

        //obtenemos el ultimo numero de rma guardado para el país
        $numberRam = \App\TablaRma::select(
                 \DB::raw('MAX(tabla_rma.id_rma) + 1 as rma')
            )
            ->where('tabla_rma.pais','=',$request->contry_save)
            ->first();

        // Asignamos los datos  generales
        $tablaRma->pais = $request->contry_save;
        $tablaRma->fecha_actual = Date('Y-m-d');
        $tablaRma->fecha_recibido = Date('Y-m-d');
        $tablaRma->num_rma = $request->contry_save.'-'.$numberRam->rma;
        $tablaRma->num_entrada_sap = $request->contry_save.'-'.$numberRam->rma;
        $tablaRma->codigo = $request->code;
        $tablaRma->cantidad = $request->amount;
        $tablaRma->num_lote = '001';
        $tablaRma->id_tipo = $request->defect_type;
        $tablaRma->num_fact_compra = $request->bill_save;
        $tablaRma->fecha_fact = date('Y-m-d', strtotime($request->date_save)) ;
        $tablaRma->num_ci = $request->num_ci;
        $tablaRma->nombre_ci = $request->name_ci;
        $tablaRma->estatus = "Recepcion";
        $tablaRma->usuario = "lmgmex";
        $tablaRma->correo_adic = $request->adtional_email;
        $tablaRma->coments = $request->comments;
        $tablaRma->correoci = $request->email_ci;
        $tablaRma->diasgarantia = $request->days;
        $tablaRma->linea_item = 7;

        
        //Creamos la arpeta donde se guardaran los archivos
        mkdir('C:/inetpub/wwwroot/services/public/img/rma_files/'.$request->contry_save.'-'.$numberRam->rma, 0777, true);
        // getting all of the post data
        $files = $request->file('uploadfile');
        $destinationPath = 'C:/inetpub/wwwroot/services/public/img/rma_files/'.$request->contry_save.'-'.$numberRam->rma;

            
        if ( $tablaRma->save() )
        {
            
            foreach($files as $file) {
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
            }
            
            return \Redirect::to('rma')
                ->with('notice', 'Estimado asesor ha finalizado el proceso existosamente, el número de RMA asignado es: '.$request->contry_save.'-'.$numberRam->rma)
                ->with('alertClass', 'alert-success');
        }
        else
        {
            return \Redirect::to('rma')
                ->with('notice', 'Estimado asesor ocurrio un error al procesar su solicitud, por favor intente nuevamente.')
                ->with('alertClass', 'alert-danger');
        }

    }


    public function requestFiles(Request $request){

        

        //Obtenemos los archivos que subieron con el rma
        $directorio = opendir("C:/inetpub/wwwroot/services/public/img/rma_files/".$request->rma); //ruta actual
            
        

        try {
            
            while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
            {
                if (!is_dir($archivo))//verificamos si es o no un directorio
                {
                    //comparamos los items con el array principal y obtendremos solo los productos con garantia
                    $files[] = array(
                        "file" => $archivo,
                    );
               }
                
            }

            return \Response::json($files);
        
        } catch (Exception $e) {
          
            echo('0');
            return 0;

        }

    }


}