<?php

namespace App\Http\Controllers\s3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Rest\Client;
use Validator;
use App\Slide;
use App\VideosWebex;
use Illuminate\Support\Facades\Storage;

class S3Controller extends Controller
{
    
	const S3_SLIDERS_FOLDER = 'Videos Webex';
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
       

        //Validamos que los campos estén completos
        $request->validate([
            'country_id' => 'required',
            'title' => 'required_without:video_url',
            'videowebex' => 'required_without:file'
        ]);

        //Inciamos la transacción
        try {


            //Obtenemos la ruta temporal del file
            //$full_path = $request->file('videowebex')->store( storage_path());
              //$full_path = $request->file('videowebex')->store('/temp')
             $full_path = $request->videowebex;


            //Evaluamos que el file no venga vació
            if ($request->hasFile('videowebex') && $request->videowebex) {
               
                $path = $request->file('videowebex')->store(
                    S3Controller::S3_SLIDERS_FOLDER.'/'.$request->country_id,
                    S3Controller::S3_OPTIONS
                );

                $full_path = Storage::disk('s3')->url($path);
            }


            //Insertamos el registro en la BD
            $videowebex = new VideosWebex();
            $videowebex->link = $full_path;
            $videowebex->link_download = $full_path;
            $videowebex->title = $request->title;
            $videowebex->country = $request->country_id;
            $videowebex->status = 'Activo';
            $videowebex->created_at = date('Y-m-d');
            $videowebex->save();

        


            return \Redirect::to('loading-video')
                ->with('notice', 'El video fue cargado de manera correcta. '.$full_path)
                ->with('alertClass', 'alert-success');
            
        } catch (Exception $e) {


            return \Redirect::to('loading-video')
                ->with('notice', 'Ocurrio un error al procesar su solicitud, por favor intente nuevamente.')
                ->with('alertClass', 'alert-danger');
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




