<?php

namespace App\Http\Controllers\services_iw;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Rest\Client;
use Validator;
use App\Slide;
use App\VideosWebex;
use Illuminate\Support\Facades\Storage;

class S3Controller extends Controller
{
    
	const S3_SLIDERS_FOLDER = 'contracts';
    const S3_OPTIONS = ['disk' => 's3', 'visibility' => 'public'];


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function index(Request $request)
    {
        
        //Obtenemos los datos de la bd

         $videosWebex = VideosWebex::select('id',
                'link',
                'link_download',
                'title',
                'country',
                'status',
                'created_at')
            ->get();  



        //Mostramos la vista con los datos obtenidos
        return view('videosWebex.index',array('videosWebex' => $videosWebex));


    }


   public function create (Request $request){
        

        $videowebex = new VideosWebex();
        
        

        $countrys = array('-- Seleccionar País --' => '-- Seleccionar País --','COL' => 'COL','MEX' => 'MEX','PER' => 'PER','ECU' => 'ECU','PAN' => 'PAN','GTM' => 'GTM','SLV' => 'SLV','CRI' => 'CRI','LAT' => 'LAT');


        //Mostramos la vista con los datos obtenidos
        return view('videosWebex.save',array('videowebex' => $videowebex,'countrys' => $countrys));
   }
   

    /**
     * Create a new slides instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       


        //Inciamos la transacción
        try {


            //Obtenemos la ruta temporal del file
            $full_path = $request->files;
            $contrac = $request->id;

            //Validamos si existe el directorio

            $s3 = new S3();
            $info = $s3->getObjectInfo('contracts', $contrac);
           
            
            if ($info)
            {
                    
                //Evaluamos que el file no venga vació
                if ($request->hasFile('files') && $request->files) {
                   
                    $path = $request->file('files')->store(
                        S3Controller::S3_SLIDERS_FOLDER.'/'.$contrac,
                        S3Controller::S3_OPTIONS
                    );

                    $full_path = Storage::disk('s3')->url($path);
                }

            }
            else
            {

                //Creamos la carpeta 

                Storage::disk('contracts')->put($contrac);

                
                //Evaluamos que el file no venga vació
                if ($request->hasFile('files') && $request->files) {
                   
                    $path = $request->file('files')->store(
                        S3Controller::S3_SLIDERS_FOLDER.'/'.$contrac,
                        S3Controller::S3_OPTIONS
                    );

                    $full_path = Storage::disk('s3')->url($path);
                }

                return 0;

            }

        } catch (Exception $e) {

            return $e->getMessage();
         
        }
    }

    public function show(){
        
    }

    public function edit(Request $request, $id){

       
        $additional = new VideosWebex();
        
        $videowebex = $additional->findOrFail($id);

        $countrys = array('-- Seleccionar País --' => '-- Seleccionar País --','COL' => 'COL','MEX' => 'MEX','PER' => 'PER','ECU' => 'ECU','PAN' => 'PAN','GTM' => 'GTM','SLV' => 'SLV','CRI' => 'CRI','LAT' => 'LAT');


        //Mostramos la vista con los datos obtenidos
        return view('videosWebex.save',array('videowebex' => $videowebex,'countrys' => $countrys));

    }


    public function editStatus(Request $request, $id, $status){

       

        try {

            $additional = new VideosWebex();
            $videowebex = $additional->findOrFail($id);
            $videowebex->status = $status;
            $videowebex->save();


            return \Redirect::to('loading-video')
                ->with('notice', 'El video fue Actualizado de manera correcta.')
                ->with('alertClass', 'alert-success');
            
        } catch (Exception $e) {


            return \Redirect::to('loading-video')
                ->with('notice', 'Ocurrio un error al procesar su solicitud, por favor intente nuevamente.')
                ->with('alertClass', 'alert-danger');
            
        }


    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateFile(Request $request, $id)
    {
        
        try {



            
            $additional = new VideosWebex();
            $videowebex = $additional->findOrFail($id);
            $videowebex->title = $request->title;
            $videowebex->country = $request->country_id;
            $videowebex->status = $request->status_id;
            $videowebex->save();


            return \Redirect::to('loading-video')
                ->with('notice', 'El video fue Actualizado de manera correcta.')
                ->with('alertClass', 'alert-success');
            
        } catch (Exception $e) {


            return \Redirect::to('loading-video')
                ->with('notice', 'Ocurrio un error al procesar su solicitud, por favor intente nuevamente.')
                ->with('alertClass', 'alert-danger');
            
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function enableDisableSlide(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $orderSlide = OrderSlide::findOrFail($request->id);
        $orderSlide->active = $orderSlide->active ? 0 : 1;
        $orderSlide->save();

        return response()->json([
            'status' => 'The slide was updated'
        ], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $slide = Slide::findOrFail($request->id);
        $this->deleteFileFromAws($slide->url);
        $slide->order()->delete();
        $slide->trans()->delete();
        $slide->delete();

        return response()->json([
            'status' => 'The slides was deleted'
        ], 200);
    }

    /**
     * @param $url
     */
    private function deleteFileFromAws($url)
    {
        $pathExploded = explode('/' . SlideController::S3_SLIDERS_FOLDER . '/', $url);
        if (count($pathExploded) > 1) {
            $file =  SlideController::S3_SLIDERS_FOLDER . '/' . $pathExploded[1];
            Storage::disk('s3')->delete($file);
        }
    }


}




