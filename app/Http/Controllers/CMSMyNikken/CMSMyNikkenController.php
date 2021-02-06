<?php

namespace App\Http\Controllers\CMSMyNikken;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\control_ci;
use App\contracts;

class CMSMyNikkenController extends Controller{
    //Declaramos las configuraciones de amazon s3
    const S3_SLIDERS_FOLDER = 'alertsMyNikken';
    const S3_OPTIONS = ['disk' => 's3', 'visibility' => 'public'];

    public function index(){
        return view('CMSMyNikken.index');
    }

    public function depuraciones(){
        return view('CMSMyNikken.depurados');
    }

    public function addNotifyMyNikken(Request $request){
        return $request;
        $titulo = $request->alertTittle;
        $alertDate = $request->alertDate;
        $full_path = "";
        $mensaje = $request->alertMsg;
        $alertFile1 = "";
        $alertFile2 = "";
        $alertFile3 = "";
        $alertFile4 = "";
        $alertFile5 = "";
        $alertFile6 = "";
        $alertFile7 = "";
        $alertFile8 = "";
        $linkFinal = $request->linkFinal;
        $linkname = $request->linkname;
        $abicode = "off";
        ($request->abicode != '')? $abicode = 'on': null;

        $col = "off";
        ($request->chckCol != '')? $col = 'on': null;
        $mex = "off";
        ($request->chckMex != '')? $mex = 'on': null;
        $per = "off";
        ($request->chckPer != '')? $per = 'on': null;
        $cri = "off";
        ($request->chckCri != '')? $cri = 'on': null;
        $ecu = "off";
        ($request->chckEcu != '')? $ecu = 'on': null;
        $slv = "off";
        ($request->chckSlv != '')? $slv = 'on': null;
        $gtm = "off";
        ($request->chckGtm != '')? $gtm = 'on': null;
        $pan = "off";
        ($request->chckPan != '')? $pan = 'on': null;
        $chl = "off";
        ($request->chckChl != '')? $chl = 'on': null;

        // valida si el request contiene el archvio, si es así, hacec el proceso de subida a AWS y agrega la liga a la variable
        if ($request->has('alertImgFondo') && $request->alertImgFondo) {
            $path = $request->file('alertImgFondo')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $full_path = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile1') && $request->alertFile1) {
            $path = $request->file('alertFile1')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile1 = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile2') && $request->alertFile2) {
            $path = $request->file('alertFile2')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile2 = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile3') && $request->alertFile3) {
            $path = $request->file('alertFile3')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile3 = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile4') && $request->alertFile4) {
            $path = $request->file('alertFile4')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile4 = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile5') && $request->alertFile5) {
            $path = $request->file('alertFile5')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile5 = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile6') && $request->alertFile6) {
            $path = $request->file('alertFile6')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile6 = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile7') && $request->alertFile7) {
            $path = $request->file('alertFile7')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile7 = Storage::disk('s3')->url($path);
        }

        if ($request->has('alertFile8') && $request->alertFile8) {
            $path = $request->file('alertFile8')->store(
                CMSMyNikkenController::S3_SLIDERS_FOLDER,
                CMSMyNikkenController::S3_OPTIONS
            );
            $alertFile8 = Storage::disk('s3')->url($path);
        }
        
        $conexion = DB::connection('LAT_MyNIKKEN');
            $consolidado = $conexion->table("NotificationM")->insertGetId([
                'Mensaje' => "$mensaje",
                'Titulo' => "$titulo",
                'Subtitulo' => "$alertDate",
                'imagen' => "$full_path",
                'File1' => "$alertFile1",
                'File2' => "$alertFile2",
                'Link' => "$linkFinal",
                'LinkName' => "$linkname",
                'AbiCode' => "$abicode",
                'COL' => "$col",
                'MEX' => "$mex",
                'PER' => "$per",
                'CRI' => "$cri",
                'ECU' => "$ecu",
                'SLV' => "$slv",
                'GTM' => "$gtm",
                'PAN' => "$pan",
                'CHL' => "$chl",
                'File3' => "$alertFile3",
                'File4' => "$alertFile4",
                'File5' => "$alertFile5",
                'File6' => "$alertFile6",
                'File7' => "$alertFile7",
                'File8' => "$alertFile8",
            ]);
        \DB::disconnect('LAT_MyNIKKEN');
        if($consolidado){
            return 'add';
        }
        else{
            return 'error';
        }
    }

    public function validaClienteAntes(Request $request){
        $correo = $request->correo;

        $usuarios = User::select('*')
        ->Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->get();

        $data = [
            'data' => $usuarios,
        ];
        return $data;
    }
}