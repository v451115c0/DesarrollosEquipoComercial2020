<?php

namespace App\Http\Controllers\inc1USD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

date_default_timezone_set('America/Mexico_City');
class inc1USDController extends Controller{
    public function inc1USD(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $periodo = Date('Ym');

        $conexion5 = DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('EstrategiaOct')
            ->select('AssociateName', 'Pais', 'Rango', 'Total_Incorpor')
            ->where('Associateid', '=', $associateid)
            ->where('Periodo', '=', $periodo)
            ->get();

            if(sizeof($abiInfo) < 0){
                $abiInfo = $conexion5->table('Puntos2020')
                ->select('AssociateName', 'Rango', 'Pais', '0 AS Total_Incorpor')
                ->where('Associateid', $associateid)
                ->where('Periodo', '=', $periodo)
                ->get();
            }

            $lastUpdate = $conexion5->table('Historico_Ejecucion')
            ->select('Last_Update')
            ->where('Programa', '=', 'Estrategia_Octubre')
            ->orderBy('Last_Update', 'desc')
            ->first();

            $asesor = $conexion5->table('Estatus_InicoPerfect')->select('Associateid')->where('Associateid', '=', $associateid)->get();
        \DB::disconnect('sqlsrv5');
        
        $flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'MEX' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png'];
        $meses = ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'];
        $lastUpdate = explode(' ', $lastUpdate->Last_Update);
        $mes = $lastUpdate[0];
        $mes = explode('-', $mes);
        $dia = $mes[2];
        $mes = $meses[$mes[1]];
        ($dia[0] == 0) ? $dia = str_replace("0", "", $dia): null;
        $lastUpdate = explode('.', $lastUpdate[1]);

        $lastUpdate = $lastUpdate[0];
        $hora = $lastUpdate;
        $fechaUpdate['dia'] = $dia;
        $fechaUpdate['mes'] = $mes;
        $fechaUpdate['hora'] = $hora;

        if(sizeof($asesor) > 0){
            $asesor = "nuevo";
        }
        else{
            $asesor = "antiguo";
        }
        //return $asesor;
        return view('inc1USD.inc1USD',  compact('associateid', 'fechaUpdate', 'abiInfo', 'asesor', 'flag'));
    }

    public function inc1USD_(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $periodo = Date('Ym');

        $conexion5 = DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('EstrategiaOct')
            ->select('AssociateName', 'Pais', 'Rango', 'Total_Incorpor')
            ->where('Associateid', '=', $associateid)
            ->where('Periodo', '=', $periodo)
            ->get();

            if(sizeof($abiInfo) < 0){
                $abiInfo = $conexion5->table('Puntos2020')
                ->select('AssociateName', 'Rango', 'Pais', '0 AS Total_Incorpor')
                ->where('Associateid', $associateid)
                ->where('Periodo', '=', $periodo)
                ->get();
            }

            $lastUpdate = $conexion5->table('Historico_Ejecucion')
            ->select('Last_Update')
            ->where('Programa', '=', 'Estrategia_Octubre')
            ->orderBy('Last_Update', 'desc')
            ->first();

            $asesor = $conexion5->table('Estatus_InicoPerfect')->select('Associateid')->where('Associateid', '=', $associateid)->get();
        \DB::disconnect('sqlsrv5');
        
        $flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'MEX' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png'];
        $meses = ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'];
        $lastUpdate = explode(' ', $lastUpdate->Last_Update);
        $mes = $lastUpdate[0];
        $mes = explode('-', $mes);
        $dia = $mes[2];
        $mes = $meses[$mes[1]];
        ($dia[0] == 0) ? $dia = str_replace("0", "", $dia): null;
        $lastUpdate = explode('.', $lastUpdate[1]);

        $lastUpdate = $lastUpdate[0];
        $hora = $lastUpdate;
        $fechaUpdate['dia'] = $dia;
        $fechaUpdate['mes'] = $mes;
        $fechaUpdate['hora'] = $hora;

        if(sizeof($asesor) > 0){
            $asesor = "nuevo";
        }
        else{
            $asesor = "antiguo";
        }
        //return $asesor;
        return view('inc1USD.inc1USD_',  compact('associateid', 'fechaUpdate', 'abiInfo', 'asesor', 'flag'));
    }

    public function inc1USDGetDetails(Request $request){
        $associateid = $request->associateid;
        $conexion5 = DB::connection('sqlsrv5');
            $datails = $conexion5->select("SELECT * FROM Incorporados_1USD WITH(nolock) WHERE Sponsorid = $associateid");
        \DB::disconnect('sqlsrv5');
        
        $data = [
            'data' => $datails,
        ];
        return $data;
    }

    public function iw(Request $request){
        $associateid = $request->associateid;
        $kit = $request->kit;
        $boleto = $request->boleto;
        return view('inc1USD.iw',  compact('associateid', 'kit', 'boleto'));
    }

    public function inc1USDGettickets(Request $request){
        $associateid = $request->associateid;
        //return $associateid;
        $conexion5 = DB::connection('sqlsrv5');
        $details = $conexion5->select("SELECT *, 0 AS 'payment', 0  AS 'status', 0 AS 'existe' FROM WinKit_1USD WHERE SponsorId = $associateid");
        $tamaño = 0;
        /*\DB::disconnect('sqlsrv5');
        return $details[0]->CodigoBoleto;*/
        for ($i=0; $i < sizeof($details); $i++) {
            $payment = 0;
            $status = 0;
            $nuevo_codigo = 0;
            $pais = 0;
            $created_at = '1900-01-01 00:00:00.000';
            $Updated_at = '1900-01-01 00:00:00.000';
            $boleto = $details[$i]->CodigoBoleto;
            $dataStatus = $this->inc1USDgetIntermedia($details[$i]->CodigoBoleto, $details[$i]->SponsorId);
            $nPaisLetras = [ 1 => 'COL', 2 => 'MEX', 3 => 'PER', 4 => 'ECU', 5 => 'PAN', 6 => 'GTM', 7 => 'SLV', 8 => 'CRI', 10 => 'CHL'];
            $existe = 0;

            if(sizeof($dataStatus) > 0){
                $payment = $dataStatus[0]->payment;
                $status = $dataStatus[0]->status;
                $nuevo_codigo = $dataStatus[0]->code_redeem;
                $pais = $dataStatus[0]->country_id;
                $created_at = $dataStatus[0]->created_at;
                $Updated_at = $dataStatus[0]->updated_at;
                $update = $conexion5->update("UPDATE WinKit_1USD SET CodigoInfluencer_1USD = '$nuevo_codigo', Estatus = '$status', Pais_Influencer1USD = '$nPaisLetras[$pais]', created_at = '$created_at', Updated_at = '$Updated_at' WHERE SponsorId = $associateid AND CodigoBoleto = '$boleto'");
                $existe = 1;
            }
            $details[$i]->payment = intval($payment);
            $details[$i]->status = intval($status);
            $details[$i]->existe = intval($existe);
        }
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $details,
        ];
        return $data;
    }

    public function inc1USDGetticketsIncorp(Request $request){
        $associateid = $request->associateid;
        //return $associateid;
        $conexion5 = DB::connection('sqlsrv5');
        $details = $conexion5->select("SELECT *, 0 AS 'payment', 0  AS 'status', 0 AS 'existe' FROM WinKit_1USD WHERE SponsorId = $associateid and TypeInflu <> 4");
        $tamaño = 0;
        /*\DB::disconnect('sqlsrv5');
        return $details[0]->CodigoBoleto;*/
        for ($i=0; $i < sizeof($details); $i++) {
            $payment = 0;
            $status = 0;
            $nuevo_codigo = 0;
            $pais = 0;
            $created_at = '1900-01-01 00:00:00.000';
            $Updated_at = '1900-01-01 00:00:00.000';
            $boleto = $details[$i]->CodigoBoleto;
            $dataStatus = $this->inc1USDgetIntermedia($details[$i]->CodigoBoleto, $details[$i]->SponsorId);
            $nPaisLetras = [ 1 => 'COL', 2 => 'MEX', 3 => 'PER', 4 => 'ECU', 5 => 'PAN', 6 => 'GTM', 7 => 'SLV', 8 => 'CRI', 10 => 'CHL'];
            $existe = 0;

            if(sizeof($dataStatus) > 0){
                $payment = $dataStatus[0]->payment;
                $status = $dataStatus[0]->status;
                $nuevo_codigo = $dataStatus[0]->code_redeem;
                $pais = $dataStatus[0]->country_id;
                $created_at = $dataStatus[0]->created_at;
                $Updated_at = $dataStatus[0]->updated_at;
                $update = $conexion5->update("UPDATE WinKit_1USD SET CodigoInfluencer_1USD = '$nuevo_codigo', Estatus = '$status', Pais_Influencer1USD = '$nPaisLetras[$pais]', created_at = '$created_at', Updated_at = '$Updated_at' WHERE SponsorId = $associateid AND CodigoBoleto = '$boleto'");
                $existe = 1;
            }
            $details[$i]->payment = intval($payment);
            $details[$i]->status = intval($status);
            $details[$i]->existe = intval($existe);
        }
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $details,
        ];
        return $data;
    }

    public function inc1USDGetticketsVenta(Request $request){
        $associateid = $request->associateid;
        //return $associateid;
        $conexion5 = DB::connection('sqlsrv5');
        $details = $conexion5->select("SELECT *, 0 AS 'payment', 0  AS 'status', 0 AS 'existe' FROM WinKit_1USD WHERE SponsorId = $associateid and TypeInflu = 4");
        $tamaño = 0;
        /*\DB::disconnect('sqlsrv5');
        return $details[0]->CodigoBoleto;*/
        for ($i=0; $i < sizeof($details); $i++) {
            $payment = 0;
            $status = 0;
            $nuevo_codigo = 0;
            $pais = 0;
            $created_at = '1900-01-01 00:00:00.000';
            $Updated_at = '1900-01-01 00:00:00.000';
            $boleto = $details[$i]->CodigoBoleto;
            $dataStatus = $this->inc1USDgetIntermedia($details[$i]->CodigoBoleto, $details[$i]->SponsorId);
            $nPaisLetras = [ 1 => 'COL', 2 => 'MEX', 3 => 'PER', 4 => 'ECU', 5 => 'PAN', 6 => 'GTM', 7 => 'SLV', 8 => 'CRI', 10 => 'CHL'];
            $existe = 0;

            if(sizeof($dataStatus) > 0){
                $payment = $dataStatus[0]->payment;
                $status = $dataStatus[0]->status;
                $nuevo_codigo = $dataStatus[0]->code_redeem;
                $pais = $dataStatus[0]->country_id;
                $created_at = $dataStatus[0]->created_at;
                $Updated_at = $dataStatus[0]->updated_at;
                $update = $conexion5->update("UPDATE WinKit_1USD SET CodigoInfluencer_1USD = '$nuevo_codigo', Estatus = '$status', Pais_Influencer1USD = '$nPaisLetras[$pais]', created_at = '$created_at', Updated_at = '$Updated_at' WHERE SponsorId = $associateid AND CodigoBoleto = '$boleto'");
                $existe = 1;
            }
            $details[$i]->payment = intval($payment);
            $details[$i]->status = intval($status);
            $details[$i]->existe = intval($existe);
        }
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $details,
        ];
        return $data;
    }

    public function inc1USDgetIntermedia($ticketCode, $sponsorid){
        $product = \App\Inc1USD::select('payment', 'status', 'country_id', 'code_redeem', 'updated_at', 'created_at')
        ->where('code_ticket', '=', $ticketCode)
        ->where('code_sponsor', '=', $sponsorid)
        ->get();
        return $product;
    }

    public function inc1USDGetGenealogy(Request $request){
        $associateid = $request->associateid;
        $type = $request->type;
        $conexion5 = DB::connection('sqlsrv5');
            $gen = $conexion5->select("EXEC Gen_EstrategiaOct $associateid, $type");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $gen,
        ];
        return $data;
    }

    public function inc1USDsegPerfectoPers(Request $request){
        $associateid = $request->associateid;
        $conexion5 = DB::connection('sqlsrv5');
            $seguimiento = $conexion5->table("Estatus_InicoPerfect")
            ->select('*')
            ->where('Associateid', '=', $associateid)
            ->get();
        \DB::disconnect('sqlsrv5');
        return $seguimiento;
    }

    public function inc1USDsegPerfectoGen(Request $request){
        $associateid = $request->associateid;
        $type = $request->type;
        $conexion5 = DB::connection('sqlsrv5');
            $seguimiento = $conexion5->select("EXEC Gen_InicioPerfecto $associateid,$type");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $seguimiento,
        ];
        return $data;
    }

    public function inc1USDdetallesMiInicio(Request $request){
        $associateid = $request->associateid;
        $conexion5 = DB::connection('sqlsrv5');
            $detalles = $conexion5->select("SELECT * FROM Details_InicioPerfect WHERE Owner = $associateid;");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $detalles,
        ];
        return $data;
    }

    public function pre($query){
		echo "<pre>"; print_r($query); echo "</pre>"; exit;
    }
    
    public function fidelizacion_kinya(Request $request){
        $fileName='Plan de Influencia';
        $conexion = DB::connection('sqlsrv2');
            $vDirecta = $conexion->select("SELECT associateid, SUM(Qty) AS Ventas_Directas,pais AS Pais, period FROM Detail_NKChallenge WITH(nolock) WHERE itemcode NOT LIKE '%Influencer' GROUP BY associateid, period, Pais");
            //$vInfluencia = $conexion->select("SELECT DISTINCT Influencer,No_Unidades AS Ventasx_Influencers, Pais, Periodo FROM [dbo].[Influencer_Bonus] WITH(nolock)");
            $vInfluencia = $conexion->select("SELECT  associateid AS Influencer, sum(Qty) as Ventasx_Influencers, pais as Pais, period as Periodo FROM [dbo].[Detail_NKChallenge] WITH(nolock) WHERE itemcode like '%Influencer' GROUP BY associateid,period,Pais");
            $detalle = $conexion->select("EXEC Reporte_KinyaVentaDir_Influencer;");
        \DB::disconnect('sqlsrv2');
        
        \Excel::create($fileName, function($excel) use ($vDirecta, $vInfluencia, $detalle) {
            $excel->sheet('Venta Directa', function($sheet) use ($vDirecta) {
                $sheet->mergeCells('A1:D1');
                $sheet->mergeCells('A2:D2');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('NIKKEN LATINOAMÉRICA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A2', function($cell){
                    $cell->setValue('REPORTE POR VENTAS DIRECTAS');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A4', function($cell){
                    $cell->setValue('Código Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B4', function($cell){
                    $cell->setValue('# Ventas Directas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C4', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D4', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($vDirecta as $idx => $row){
                    $idx = ($idx  + 5);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Ventas_Directas);
                    });

                    $pais = "";
                    if($row->Pais == 'LAT'){
                        $pais = "MEX";
                    }
                    else{
                        $pais = $row->Pais;
                    }
                    $sheet->cell('C'.$idx, function($cell) use ($pais) {
                        $cell->setValue($pais);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->period);
                    });
                }
            });

            $excel->sheet('Ventas Influencia', function($sheet) use ($vInfluencia) {
                $sheet->mergeCells('A1:D1');
                $sheet->mergeCells('A2:D2');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('NIKKEN LATINOAMÉRICA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A2', function($cell){
                    $cell->setValue('REPORTE DE VENTAS POR INFLUENCIA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A4', function($cell){
                    $cell->setValue('Código Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B4', function($cell){
                    $cell->setValue('# Ventas por Influencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C4', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D4', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($vInfluencia as $idx => $row){
                    $idx = ($idx  + 5);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Influencer);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Ventasx_Influencers);
                    });

                    $pais = "";
                    if($row->Pais == 'LAT'){
                        $pais = "MEX";
                    }
                    else{
                        $pais = $row->Pais;
                    }
                    $sheet->cell('C'.$idx, function($cell) use ($pais) {
                        $cell->setValue($pais);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Periodo);
                    });
                }
            });

            $excel->sheet('Resumen', function($sheet) use ($detalle) {
                $sheet->mergeCells('A1:N1');
                $sheet->mergeCells('A2:N2');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('NIKKEN LATINOAMÉRICA');
                    $cell->setAlignment('left'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A2', function($cell){
                    $cell->setValue('DETALLADO DE UNIDADES POR PLAN DE INFLUENCIA Y KINYA');
                    $cell->setAlignment('left'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A4', function($cell){
                    $cell->setValue('Código Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B4', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C4', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D4', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E4', function($cell){
                    $cell->setValue('Teléfono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F4', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G4', function($cell){
                    $cell->setValue('VP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H4', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I4', function($cell){
                    $cell->setValue('Unidades venta directa');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J4', function($cell){
                    $cell->setValue('Unidades por Influenca');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K4', function($cell){
                    $cell->setValue('Total unidades');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L4', function($cell){
                    $cell->setValue('Total incoporaciones');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M4', function($cell){
                    $cell->setValue('Cumple KinYa!');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N4', function($cell){
                    $cell->setValue('KinYa! por venta');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O4', function($cell){
                    $cell->setValue('KinYa! por Influencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($detalle as $idx => $row){
                    $idx = ($idx  + 5);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue(trim($row->AssociateName, ' '));
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue(trim($row->Email, ' '));
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Telefono);
                    });

                    $pais = "";
                    if($row->Pais == 'LAT'){
                        $pais = "MEX";
                    }
                    else{
                        $pais = $row->Pais;
                    }
                    $sheet->cell('F'.$idx, function($cell) use ($pais) {
                        $cell->setValue($pais);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Vp);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Periodo);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Unidades_VentaDirecta);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Unidades_PorInfluencer);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->TotalUnidades);
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Incorpo_Influencer);
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Cumple_Kinya);
                    });

                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->kinya_PorVenta);
                    });

                    $sheet->cell('O'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->kinya_PorInfluencia);
                    });
                }
            });

            
        })->export('xls');
    }

    public function getCountKits(Request $request){
        $associateid = $request->associateid;
        $pais = $request->Pais;
        $conexion5 = DB::connection('sqlsrv5');
            $nkitsDisp = $conexion5->select("SELECT COUNT(*) AS 'disponibles' FROM WinKit_1USD WHERE SponsorId = $associateid AND Estatus <> 1");
            $nkitsUsed = $conexion5->select("SELECT COUNT(*) AS 'usados' FROM WinKit_1USD WHERE SponsorId = $associateid AND Estatus = 1");
            if(trim($pais, ' ') == 'CHL' || trim($pais, ' ') == 'PAN'){
                $nkitsDispCHL = $conexion5->select("SELECT COUNT(*) AS 'DispKenkoAir' FROM EstrategiaOCt WHERE associateid = $associateid AND Venta_KenkoAir = 1");
            }
        \DB::disconnect('sqlsrv5');

        $data['nkitsDisp'] = $nkitsDisp;
        $data['nkitsUsed'] = $nkitsUsed;
        if(trim($pais, ' ') == 'CHL' || trim($pais, ' ') == 'PAN'){
            $data['nkitsDispCHL'] = $nkitsDispCHL;
        }
        return $data;
    }

    public function getuser_promotion_kit(){
        $product = \App\Inc1USD::select('id', 'code_sponsor', 'payment', 'code_redeem', 'kit', 'status', 'country_id', 'code_ticket', 'created_at', 'updated_at')->get();

        $conexion5 = DB::connection('sqlsrv5');
        $cantidad = $conexion5->select("SELECT COUNT(*) AS 'TOTAL_ANTES' FROM Promotion_kit");
        echo "Registros anteriores: " . $cantidad[0]->TOTAL_ANTES . " | ";
        $truncate = $conexion5->table('Promotion_kit')->truncate();
        for ($i=0; $i < sizeof($product); $i++) {
            $nPaisLetras = [ '0' => '0', 1 => 'COL', 2 => 'MEX', 3 => 'PER', 4 => 'ECU', 5 => 'PAN', 6 => 'GTM', 7 => 'SLV', 8 => 'CRI', 10 => 'CHL'];
            $id = $product[$i]->id;
            $code_sponsor = $product[$i]->code_sponsor;
            $payment = $product[$i]->payment;
            $code_redeem = $product[$i]->code_redeem;
            $kit = $product[$i]->kit;
            $status = $product[$i]->status;
            $country_id = $nPaisLetras[$product[$i]->country_id];
            $code_ticket = $product[$i]->code_ticket;
            $kit = $product[$i]->created_at;
            $Updated_at = $product[$i]->updated_at;

            $update = $conexion5->insert("INSERT INTO Promotion_kit
            VALUES ('$id', '$code_sponsor', '$payment', '$code_redeem', '$kit', '$status', '$country_id', '$code_ticket', '$kit', '$Updated_at')");
        }
        \DB::disconnect('sqlsrv5');
        
        return "Promotion_kit inserted | " . $i;
    }

    public function reporteMKTInc1USDInicioPerf(){
        $fileName='Inicio Perfecto 1 USD';
        $conexion = DB::connection('sqlsrv5');
            $inicioperfecto = $conexion->select("SELECT associateid, AssociateName, Pais,Rango, Incorp_Feb, Incorp_Mar, Fecha_Incorporacion, Incorp_Oct,Incorp_Nov,Incorp_Dic,Incorp_Ene,Total_Incorp, VP_Oct, VP_Nov, VP_Dic, VP_Ene, VP_Feb, VP_Mar, Win_Piwater, Email,Telefono,Sponsorid,associateNameSponsor FROM Estatus_InicoPerfect WITH(NOLOCK)");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($inicioperfecto) {
            $excel->sheet('Inicio perfecto temporal', function($sheet) use ($inicioperfecto) {
                $sheet->mergeCells('A1:T1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('INICIO PERFECTO TEMPORAL');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Fecha de incorporación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Incorporados Octubre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Incorporados Noviembre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Incorporados Diciembre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Incorporados Enero');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Incorporados Febrero');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Incorporados Marzo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Incorporaciones Totales');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('VP Octubre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('VP Noviembre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O3', function($cell){
                    $cell->setValue('VP Diciembre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('P3', function($cell){
                    $cell->setValue('VP Enero');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('Q3', function($cell){
                    $cell->setValue('VP Febrero');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('R3', function($cell){
                    $cell->setValue('VP Marzo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('S3', function($cell){
                    $cell->setValue('Gana Pi Water');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('T3', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('U3', function($cell){
                    $cell->setValue('Telefono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('V3', function($cell){
                    $cell->setValue('Código Sponsor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('W3', function($cell){
                    $cell->setValue('Nombre Sponsor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($inicioperfecto as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue(trim($row->AssociateName, ' '));
                    });

                    $pais = "";
                    if($row->Pais == 'LAT'){
                        $pais = "MEX";
                    }
                    else{
                        $pais = $row->Pais;
                    }
                    $sheet->cell('C'.$idx, function($cell) use ($pais) {
                        $cell->setValue($pais);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Fecha_Incorporacion);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorp_Oct);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorp_Nov);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorp_Dic);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorp_Ene);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorp_Feb);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorp_Mar);
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Incorp);
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP_Oct);
                    });

                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP_Nov);
                    });

                    $sheet->cell('O'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP_Dic);
                    });

                    $sheet->cell('P'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP_Ene);
                    });

                    $sheet->cell('Q'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP_Feb);
                    });

                    $sheet->cell('R'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP_Mar);
                    });

                    $gana = 'NO';
                    if($row->Win_Piwater == 1){
                        $gana = 'SI';
                    }
                    $sheet->cell('S'.$idx, function($cell) use ($gana) {
                        $cell->setValue($gana);
                    });

                    $sheet->cell('T'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('U'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Telefono);
                    });

                    $sheet->cell('V'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Sponsorid);
                    });

                    $sheet->cell('W'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateNameSponsor);
                    });
                }
            });
        })->export('xls');
    }

    public function reporteMKTInc1USDKits(){
        $fileName='Kits MOKUTEKI 1 USD';
        $conexion = DB::connection('sqlsrv5');
            $kitsMokuteki = $conexion->select("SELECT associateid, AssociateName, Pais,Rango,Total_Incorpor AS Total_Kit_Mokuteki, Incorpo_Redimidas,Incorpo_Pendientes, Email,Telefono, Sponsorid, Incorpo_Transformadas FROM [dbo].[EstrategiaOct] WITH(NOLOCK);");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($kitsMokuteki) {
            $excel->sheet('Detallado', function($sheet) use ($kitsMokuteki) {

                $sheet->cell('A1', function($cell){
                    $cell->setValue('INCORPORACIÓN A 1 USD (MOKUTEKI)');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A4', function($cell){
                    $cell->setValue('Código Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B4', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C4', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D4', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E4', function($cell){
                    $cell->setValue('Total kits MOKUTEKI');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F4', function($cell){
                    $cell->setValue('Kits Redimidos');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G4', function($cell){
                    $cell->setValue('Kits disponibles');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H4', function($cell){
                    $cell->setValue('Incorporaciones Transfromadas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I4', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J4', function($cell){
                    $cell->setValue('Télefono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K4', function($cell){
                    $cell->setValue('Código patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($kitsMokuteki as $idx => $row){
                    $idx = ($idx  + 5);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue(trim($row->AssociateName, ' '));
                    });

                    $pais = "";
                    if($row->Pais == 'LAT'){
                        $pais = "MEX";
                    }
                    else{
                        $pais = $row->Pais;
                    }
                    $sheet->cell('C'.$idx, function($cell) use ($pais) {
                        $cell->setValue($pais);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Kit_Mokuteki);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Redimidas);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Pendientes);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Transformadas);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Telefono);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Sponsorid);
                    });
                }
            });
        })->export('xls');
    }

    public function inc1USDValidaTicket(Request $request){
        $associateid = $request->associateid;
        $boleto = $request->boleto;
        $dataStatus = $this->inc1USDgetIntermedia($boleto, $associateid);
        if(sizeof($dataStatus) > 0){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function inc1USDGetGenealogyMkPlus(Request $request){
        $associateid = $request->associateid;
        $type = $request->type;
        $conexion5 = DB::connection('sqlsrv5');
            $gen = $conexion5->select("EXEC Gen_MokutekiPLUS $associateid, $type");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $gen,
        ];
        return $data;
    }
}
