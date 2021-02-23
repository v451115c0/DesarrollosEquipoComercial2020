<?php

namespace App\Http\Controllers\CMSMyNikken;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\control_ci;
use App\contracts;
use Mail;

date_default_timezone_set('America/Mexico_City');
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

    /*=== Depurar CLIENTES ===*/
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

    public function cmsdepuracliente(Request $request){ 
        $correo = $request->correo;
        $fecha_depuracion = Date('YmdHm');

        $update = User::Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->update(['status' => 0 ]);

        $update = User::Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->update(['locked' => 1 ]);

        $update = User::Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->update(['email' => $correo . '_' . $fecha_depuracion ]);
            
        return '1';
    }

    /*=== cambio país CLIENTES ===*/
    public function cmschangeCountryCliente(Request $request){ 
        $correo = $request->correo;
        $ncountry = $request->ncountry;

        $update = User::Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->update(['country_id' => $ncountry ]);
            
        return '1';
    }

    /*=== cambiar correo a CLIENTES ===*/
    public function cmschangeMailCliente(Request $request){
        $correo = $request->correo;
        $ncorreo = $request->ncorreo;
        $sap_code_sponsor = $request->sap_code_sponsor;

        $update = User::Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->where('sap_code_sponsor', '=', $sap_code_sponsor)
        ->where('locked', '=', 0)
        ->where('status', '=', 1)
        ->update(['email' => "$ncorreo" ]);
            
        return '1';
    }

    /* === Extrae datos de las bases para validar info ===*/
    public function validaCICBContracts(Request $request){
        $sap_code = $request->sap_code;
        $mail = $request->mail;
        if($sap_code == ''){
            $usuarios = contracts::select('*')
            ->Where('email', 'like', '%' . "$mail" . '%')
            ->get();
        }
        else{
            $usuarios = contracts::select('*')
            ->Where('code', '=', $sap_code)
            ->get();
        }

        $data = [
            'data' => $usuarios,
        ];
        return $data;
    }

    public function validaCICBControl_ci(Request $request){
        $sap_code = $request->sap_code;
        $mail = $request->mail;
        if($sap_code == ''){
            $usuarios = control_ci::select('*')
            ->Where('correo', 'like', '%' . "$mail" . '%')
            ->get();
        }
        else{
            $usuarios = control_ci::select('*')
            ->Where('codigo', '=', $sap_code)
            ->get();
        }

        $data = [
            'data' => $usuarios,
        ];
        return $data;
    }

    public function validaCICBUsers(Request $request){
        $sap_code = $request->sap_code;
        $mail = $request->mail;
        if($sap_code == ''){
            $usuarios = User::select('*')
            ->Where('email', 'like', '%' . "$mail" . '%')
            ->where('client_type', '<>', 'CLIENTE')
            ->get();
        }
        else{
            $usuarios = User::select('*')
            ->Where('sap_code', '=', $sap_code)
            ->get();
        }
        $data = [
            'data' => $usuarios,
        ];
        return $data;
    }

    /* === Cambio de correo CI / CLUB ===*/
    public function cmsCambiarMailCICLUB(Request $request){
        $sap_code = $request->sap_code;
        $correo = $request->correo;

        $exist = User::select('sap_code')
        ->Where('email', 'like', '%' . "$correo" . '%')
        ->where('status', '<>', 0)
        ->where('locked', '<>', 1)
        ->where('client_type', '<>', 'CLIENTE')
        ->get();
        if(sizeof($exist) > 0){
            return $exist[0]->sap_code;
        }

        $exist = contracts::select('code')
        ->Where('email', 'like', '%' . "$correo" . '%')
        ->where('status', '<>', 0)
        ->get();
        if(sizeof($exist) > 0){
            return $exist[0]->code;
        }

        $exist = control_ci::select('codigo')
        ->Where('correo', 'like', '%' . "$correo" . '%')
        ->where('estatus', '<>', 0)
        ->get();
        if(sizeof($exist) > 0){
            return $exist[0]->codigo;
        }

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['email' => "$correo" ]);

        $update = contracts::Where('code', '=', $sap_code)
        ->update(['email' => "$correo" ]);

        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['correo' => "$correo" ]);

        return 'change';
    }

    /*=== Activar CI ===*/
    public function cmsActivaCICB(Request $request){
        $sap_code = $request->sap_code;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['status' => 1 ]);
        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['locked' => 0 ]);

        $update = contracts::Where('code', '=', $sap_code)
        ->update(['status' => 1 ]);
        
        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['estatus' => 1 ]);

        return 'actived';
    }

    /*=== inactivar CI ===*/
    public function cmsInactivaCICB(Request $request){
        $sap_code = $request->sap_code;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['status' => 0 ]);
        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['locked' => 1 ]);

        $update = contracts::Where('code', '=', $sap_code)
        ->update(['status' => 0 ]);
        
        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['estatus' => 0 ]);

        return 'inactived';
    }

    /*=== Cambiar nombre CI / CLUB ===*/
    public function cmsCambiaNombreCICB(Request $request){
        $sap_code = $request->sap_code;
        $nombre = $request->nombre;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['last_name' => '' ]);
        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['name' => "$nombre" ]);

        $update = contracts::Where('code', '=', $sap_code)
        ->update(['name' => "$nombre" ]);
        
        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['nombre' => "$nombre" ]);

        return 'change';
    }

    /*=== Cambiar de sponsor CI / CLUB ===*/
    public function cmsCambiasponsorCICB(Request $request){
        $sap_code = $request->sap_code;
        $sponsor = $request->sponsor;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['sap_code_sponsor' => "$sponsor" ]);

        $update = contracts::Where('code', '=', $sap_code)
        ->update(['sponsor' => "$sponsor" ]);
        
        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['codigop' => "$sponsor" ]);

        return 'change';
    }

    /*=== Depuarar CI / CLUB ===*/
    public function cmsDepurarCICB(Request $request){
        $sap_code = $request->sap_code;
        $fecha_depuracion = Date('YmdHm');

        $usuarios = User::select('email')
        ->Where('sap_code', '=', $sap_code)
        ->get();
        $email = $usuarios[0]->email;
        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['email' => $email . '_' . $fecha_depuracion ]);
        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['status' => 0 ]);
        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['locked' => 1 ]);

        $usuarios = contracts::select('email')
        ->Where('code', '=', $sap_code)
        ->get();
        if(sizeof($usuarios) > 0){
            $email = $usuarios[0]->email;
            $update = contracts::Where('code', '=', $sap_code)
            ->update(['status' => 0 ]);
            $update = contracts::Where('code', '=', $sap_code)
            ->update(['email' => $email . '_' . $fecha_depuracion ]);
        }
        
        $usuarios = control_ci::select('correo')
        ->Where('codigo', '=', $sap_code)
        ->get();
        $email = $usuarios[0]->correo;
        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['estatus' => 0 ]);
        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['correo' => $email . '_' . $fecha_depuracion ]);

        return 'change';
    }

    /*=== Restaurar pass CLIENTE ===*/
    public function cmsRestPasswordCliente(Request $request){
        $correo = $request->correo;

        $update = User::Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->update(['secret_nikken' => '6cl4nHQECtM=' ]);

        $update = User::Where('email', 'like', '%' . "$correo" . '%')
        ->where('client_type', '=', 'CLIENTE')
        ->update(['password' => '$2y$10$WT4HYMVL32Ff3ALmaII58On2.XbdvKCzMAP79/G5Bo9VMCw2Ku85m' ]);
            
        return '1';
    }

    /*=== Restaurar pass CI / CLUB ===*/
    public function cmsresetPassCICB(Request $request){
        $sap_code = $request->sap_code;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['secret_nikken' => '6cl4nHQECtM=' ]);

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['password' => '$2y$10$WT4HYMVL32Ff3ALmaII58On2.XbdvKCzMAP79/G5Bo9VMCw2Ku85m' ]);

        $update = User::select('secret_nikken', 'password')
        ->where('sap_code', '=', $sap_code)
        ->get();

        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['clave' => '6cl4nHQECtM=' ]);

        return '1';
    }

    /*=== actualiza rango ===*/
    public function cmsChangeRango(Request $request){
        $sap_code = $request->sap_code;
        $nRango = $request->nRango;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['rank' => "$nRango" ]);

        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['rango' => "$nRango" ]);

        return '1';
    }
    
    /*=== actualiza telefono ===*/
    public function cmsChangeTel(Request $request){
        $sap_code = $request->sap_code;
        $nTel = $request->nTel;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['phone' => "$nTel" ]);

        $update = contracts::Where('code', '=', $sap_code)
        ->update(['cellular' => "$nTel" ]);

        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['celular' => "$nTel" ]);

        return '1';
    }

    /*=== cambio país ci / club ===*/
    public function cmschangeCountryCICB(Request $request){ 
        $sap_code = $request->sap_code;
        $ncountry = $request->ncountry;

        $update = User::Where('sap_code', '=', $sap_code)
        ->update(['country_id' => "$ncountry" ]);

        $update = contracts::Where('code', '=', $sap_code)
        ->update(['country' => "$ncountry" ]);

        $update = control_ci::Where('codigo', '=', $sap_code)
        ->update(['pais' => "$ncountry" ]);
            
        return '1';
    }

    public function cmsObtenerCodesSerPro(){
        $conexion = DB::connection('sqlsrv5');
            $codes = $conexion->select("SELECT numci as associateid, Rango from Rangos_Avance_SerPro where period=convert(char(6), EOMONTH(getdate(),-1),112)");
        \DB::disconnect('sqlsrv5');
        $codesFin = "";
        for($x = 0; $x < sizeof($codes); $x++){
            $codesFin .= trim($codes[$x]->associateid) . '|' . trim($codes[0]->Rango) . ',';
        }
        $codesFin = substr($codesFin, 0, -1);
        return $codesFin;
    }

    public function serProAvanceMailView(Request $request){
        return view('CMSMyNikken.mail');
    }

    public function cmsSendMailsSerPro(Request $request){
        $codigorango = $request->codigorango;
        $codigorango = explode('|', $codigorango);
        $code = base64_encode($codigorango[0]);
        $rango = $codigorango[1];
        $liga = "";
        $avance = "";
        $banner = "";
        if($rango == 5){
            $liga = "https://services.nikken.com.mx/cuestionarioSerProPLA/$code";
            $avance = "Felicidades por tu avance de rango a Plata";
            $banner ="https://services.nikken.com.mx/fpro/img/retos2021/plata-primer-mail.png";
        }
        else if($rango == 6){
            $liga = "https://services.nikken.com.mx/cuestionarioSerProORO/$code";
            $avance = "Felicidades por tu avance de rango a Oro";
            $banner ="https://services.nikken.com.mx/fpro/img/retos2021/oro-primer-mail.png";
        }

        $conexion = DB::connection('sqlsrv5');
            $email = $conexion->table("Rangos_Avance_SerPro")
            ->select('Email')
            ->where('numci', '=', $codigorango[0])
            ->get();
        \DB::disconnect('sqlsrv5');
        $email = $email[0]->Email;
        //return $email;
        $data = array(
            'avance' => "$avance",
            'liga' => "$liga",
            'banner' => "$banner",
        );

        Mail::send('CMSMyNikken.mail', $data, function ($message) use ($email) {
            $message->from("servicio.mex@nikkenlatam.com", 'Avance de Rango Reto Ser Pro NIKKEN');
            $message->to("$email")->subject('Avance de Rango Reto Ser Pro NIKKEN');
            $message->cc('fmelchor@nikkenlatam.com')->subject('Avance de Rango Reto Ser Pro NIKKEN');
        });

        return "sended";
    }

    public function cmsGetVentasClientes(Request $request){
        $fileName='Clientes TV';
        //$viajerosPro = User::select('*')->Where('email', 'not like', "%@delete%")->where('client_type', '=', 'CLIENTE')->where('status', '=', 1)->where('locked', '=', 0)->get();
        $viajerosPro = User::select('*')->Where('email', 'not like', "%@delete%")->where('client_type', '=', 'CLIENTE')->where('status', '=', 1)->where('locked', '=', 0)->get();
        return $viajerosPro;
        
        \Excel::create($fileName, function($excel) use ($viajerosPro) {
            $excel->sheet('Clientes', function($sheet) use ($viajerosPro) {

                $sheet->cell('A2', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B2', function($cell){
                    $cell->setValue('Apellido');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C2', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D2', function($cell){
                    $cell->setValue('Pais');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E2', function($cell){
                    $cell->setValue('Codigo patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($viajerosPro as $idx => $row){
                    $idx = ($idx  + 3);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->name);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->last_name);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->email);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->country_id);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->sap_code_sponsor);
                    });
                }
            });
        })->export('csv');
    }
}