<?php

namespace App\Http\Controllers\RegActivInf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class regActivInfController extends Controller{

    public function index(Request $request){
        date_default_timezone_set('America/Mexico_City');
        $associateid = base64_decode($request->associateid);
        //$associateid = $request->associateid;
        $totalUnidades = 0;
        $periodo = Date('Ym');
        $conexion = \DB::connection('sqlsrv2');
            $unaUnidad = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_UNA a 
                                            INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                            WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
            if(sizeof($unaUnidad) <= 0){
                $dosUnidades = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_DOS a
                                                  INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                                  WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
                if(sizeof($dosUnidades) <= 0){
                    $tresUnidades = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_TRESoMAS a
                                                       INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                                       WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
                }
            }
        \DB::disconnect('sqlsrv2');

        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->select("SELECT AssociateName, Rango, Pais, Vp FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');
        
        $username = "";
        $lastname = "";
        if(sizeof($abiInfo) > 0){
            $username = trim($abiInfo[0]->AssociateName, ' ');
            $lastname = $associateid . " | " . $abiInfo[0]->Rango;
        }
        return view('regactivinf.home', compact('totalUnidades', 'unaUnidad', 'dosUnidades', 'tresUnidades', 'abiInfo', 'username', 'lastname', 'associateid'));
    }

    public function index_(Request $request){
        //$associateid = base64_decode($request->associateid);
        $associateid = $request->associateid;
        $totalUnidades = 0;
        $periodo = Date('Ym');
        $conexion = \DB::connection('sqlsrv2');
            $unaUnidad = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_UNA a 
                                            INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                            WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
            if(sizeof($unaUnidad) <= 0){
                $dosUnidades = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_DOS a
                                                  INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                                  WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
                if(sizeof($dosUnidades) <= 0){
                    $tresUnidades = $conexion->select("
                                                        select 'Aya Marrero Segundo' as apfirstname, 10101003 as Associateid, 857733652 as Orderdate, 437738 as Ordernum, 202003 as Periodo, 5023 as itemcode, 'WaterFall' as Descripcion, 2 as Qty_Item, 1590.00 as Bono_Tres_Unidades_o_Mas, 729747103 as Owner_Influencer, 'LAT' as owner_country FROM Influencer_TRESoMAS
                                                        union
                                                        select 'Alejandro Batista' as apfirstname, 10101103 as Associateid, 861599652 as Orderdate, 857733 as Ordernum, 202003 as Periodo, 5024 as itemcode, 'PiWater' as Descripcion, 1 as Qty_Item, 800.00 as Bono_Tres_Unidades_o_Mas, 122974603 as Owner_Influencer, 'LAT' as owner_country FROM Influencer_TRESoMAS
                                                        union
                                                        select 'Andrea Olivárez Segundo' as apfirstname, 10101203 as Associateid, 877251652 as Orderdate, 877251 as Ordernum, 202003 as Periodo, 5025 as itemcode, 'PiWater_Optimizer' as Descripcion, 1 as Qty_Item, 800.00 as Bono_Tres_Unidades_o_Mas, 152974503 as Owner_Influencer, 'LAT' as owner_country FROM Influencer_TRESoMAS
                                                        union
                                                        select 'Natalia Álvarez' as apfirstname, 10101303 as Associateid, 861409652 as Orderdate, 861409 as Ordernum, 202003 as Periodo, 5024 as itemcode, 'WaterFall' as Descripcion, 1 as Qty_Item, 292.00 as Bono_Tres_Unidades_o_Mas, 202974303 as Owner_Influencer, 'LAT' as owner_country FROM Influencer_TRESoMAS
                                                        union
                                                        select 'Bruno Quiroz Segundo' as apfirstname, 10101403 as Associateid, 870700652 as Orderdate, 870700 as Ordernum, 202003 as Periodo, 5024 as itemcode, 'WaterFall_Optimizer' as Descripcion, 2 as Qty_Item, 1590.00 as Bono_Tres_Unidades_o_Mas, 272974103 as Owner_Influencer, 'LAT' as owner_country FROM Influencer_TRESoMAS

                                                     ");
                }
            }
        \DB::disconnect('sqlsrv2');

        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->select("SELECT AssociateName, Rango, Pais, Vp FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');
        
        $username = "";
        $lastname = "";
        if(sizeof($abiInfo) > 0){
            $username = trim($abiInfo[0]->AssociateName, ' ');
            $lastname = $associateid . " | " . $abiInfo[0]->Rango;
        }
        return view('regactivinf.home_', compact('totalUnidades', 'unaUnidad', 'dosUnidades', 'tresUnidades', 'abiInfo', 'username', 'lastname', 'associateid'));
    }
}
