<?php

namespace App\Http\Controllers\ProducstTV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use DB;

class ProducstTVController extends Controller
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
        
        //Mostramos la vista con los datos obtenidos
        return view('producstTv.index');


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
    public function updateItems(Request $request){

        //Obtenemos los datos para realizar la actualización.
        $country_id =  $id = $request->country_id;
        $status_id = $id = $request->status_id;
        $items = $id = $request->items;

        //convertimos los items en arreglo para poder recorrerlos
        $arrayItems = explode(",", $items);

        try {


            //Recorremos los abis para actualizar los datos.
            for ($i=0; $i <= count($arrayItems); $i++) { 
               
                //Obtenemos el modelo del producto
                $product = \App\Product::select(
                    'products.id'
                    
                )
                ->where('products.sku','=',$arrayItems)
                ->first();
                
                
                /*
                * Procedemos a actualizar el estatus.
                * si es 1 se activaran los productos
                * si es 0 se desactivaran
                */

                App\warehousesProduct::where('product_id', $product->id)
                    ->where('country_id', $country_id)
                    ->update(['applies_to_tv' =>  $status_id, 'active_status' => $status_id]);


                /**
                * Procedemos a actauizar el producto en el panel de markketing
                * si es 1 se activaran los productos
                * si es 0 se desactivaran
                */

                App\ControlArt::where('sku', $arrayItems)
                    ->where('pais', $country_id)
                    ->update(['aplica_tv' =>  $status_id]);

            }



            return \Redirect::to('products-tv')
                ->with('notice', 'Los productos fueron actualizados de manera correcta.')
                ->with('alertClass', 'alert-success');
            
        } catch (Exception $e) {

            return \Redirect::to('products-tv')
                ->with('notice', 'Ocurrio un error al procesar su solicitud, por favor intente nuevamente.')
                ->with('alertClass', 'alert-danger');
            
        }

     }


    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request){

        //Obtenemos los datos para realizar la actualización.
        $country_id =  $id = $request->rma;
        $status_id = $id = $request->rma;
        $items = $id = $request->rma;

        //convertimos los items en arreglo para poder recorrerlos
        $arrayItems = explode(",", $items);

        print_r($arrayItems);
        
        
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