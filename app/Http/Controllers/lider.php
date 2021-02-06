<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;



class lider extends Controller
{
    //
    public function index($code){


        //$code_decode = base64_decode($code);
        $code_decode = $code;

    	//Generamos la conexion
    	$conexion = DB::connection('sqlsrv5');
        
        $detail = $conexion->table('ClubKiai')->where('Associateid','=', $code_decode)->orderBy('Periodo','ASC')->get();
        $summary = $conexion->table('ResumenTrimestral')->where('AssociateId','=', $code_decode)->orderBy('NoTrimestre','ASC') ->get();
        $genealogy = $conexion->select(DB::raw("exec SpGenPerId :Param1"),[':Param1' => $code_decode]);
        $getname = $conexion->select('select distinct AssociateName from ClubKiai where Associateid = ?',[$code_decode]);

         \DB::disconnect('sqlsrv5'); 
        return view('ClubKiai', ['query' => $detail , 'summary' => $summary , 'genealogy' => $genealogy, 'name' =>$getname ,'code'=>$code_decode]);
    }
}
