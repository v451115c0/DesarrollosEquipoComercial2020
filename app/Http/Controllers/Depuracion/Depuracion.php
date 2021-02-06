<?php

namespace App\Http\Controllers\Depuracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class Depuracion extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        return view('depuracion.index', compact('associateid'));
    }

    public function sendMail(Request $request){
        $email = $request->email;
        $nombre = $request->nombre;
        $dukTape = $request->dukTape;

        // Envio de correo a asesor propenso a ser depurado
        $data = array(
            'nombre' => "$nombre",
            'dukTape' => $dukTape,
        );
        Mail::send('depuracion.emails.email', $data, function ($message) use($email){
            $message->from('servicio.mex@nikkenlatam.com', 'Nikken Latinoamérica | Renovación 2021');
            $message->to("$email")->subject('Nikken Latinoamérica | Renovación 2021');
            $message->cc('fmelchor@nikkenlatam.com')->subject('Nikken Latinoamérica | Renovación 2021');
        });

        return "success"; 
    }

    public function getgenealogy(Request $request){
        $associateid = $request->associateid;
        $type = $request->tipo;
        // extrae la genealogia propensos a ser depurados
        $conection = \DB::connection('sqlsrv5');
            $response = $conection->select("EXEC Gen_Depurados $associateid, $type");
        \DB::disconnect('sqlsrv5');

        $data = [
            'data' => $response,
        ];
        return \Response::json($data);
    }

    public function email(){
        return \view('depuracion.emails.email');
    }
}
