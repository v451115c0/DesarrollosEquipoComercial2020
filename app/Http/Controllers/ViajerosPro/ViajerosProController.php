<?php

namespace App\Http\Controllers\ViajerosPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\control_ci;
use App\contracts;

date_default_timezone_set('America/Mexico_City');

class ViajerosProController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $periodo = 202101;

        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('Puntos2020')
                ->join('ViajerosPremium', 'Puntos2020.Associateid', '=', 'ViajerosPremium.Associateid')
                ->select('Puntos2020.associateid','Puntos2020.AssociateName','Puntos2020.Pais','Puntos2020.Rango','Puntos2020.VpAcumulado','Puntos2020.VGPacumulado','Puntos2020.kinya','Puntos2020.KinYaL1','Puntos2020.RangoN','Puntos2020.Rango_Pago','Puntos2020.Periodo', 'ViajerosPremium.NumRangoPagoCumplido', 'Puntos2020.VGPLatam', 'Puntos2020.VGPLatamAcumu')
                ->where('Puntos2020.associateid', '=', $associateid)
                ->where('Puntos2020.Periodo', '=', $periodo)
                ->get();
            $totalsKinya = $conexion5->select("SELECT SUM(kinya) AS totalKinya, SUM(KinYaL1) AS totalKinyalvl FROM Puntos2020 WHERE associateid = $associateid");
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Puntos2020' ORDER BY Last_Update DESC;");
            $rankLenght = $conexion5->table('ViajerosPremium')
            ->where('Validacion', '=', 'T')
            ->count();
        \DB::disconnect('sqlsrv5');
        $update = $this->fromatLastUpdate($lastUpdate);
        return view('ViajerosPro.index', compact('associateid', 'abiInfo', 'totalsKinya', 'update', 'rankLenght'));
    }

    public function vpGetMonts(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $meses = $conexion5->table('Puntos2020')
                ->select('associateid','Sponsorid','AssociateName','Pais','Rango','Email','VP','VGP','VpAcumulado','VGPacumulado','kinya','KinYaL1','RangoN','Rango_Pago','Periodo','Cumple_MesV', 'VGPLatam', 'VGPLatamAcumu')
                ->where('associateid', '=', $associateid)
                ->get();
        \DB::disconnect('sqlsrv5');

        $data = [
            'data' => $meses,
        ];
        return $data;
    }

    public function vpGetRank(Request $request){
        $periodo = Date('Ym');
        $conexion5 = \DB::connection('sqlsrv5');
            $ranking = $conexion5->select("SELECT Associateid, AssociateName, Pais, VGP_Acumulado, Rango, NumRangoPagoCumplido, KinyaAcumulado, KinyaFrontalAcumulado, Opcion FROM ViajerosPremium WHERE Validacion='T' ORDER BY VGP_Acumulado DESC");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $ranking,
        ];
        return $data;
    }

    public function getTicketsNAConvention(){
        $fileName='NA_CONVENTION';
        $conexion = DB::connection('sqlsrv2');
            $vDirecta = $conexion->select("SELECT * FROM [NA_CONVENTION].[dbo].[fnConventionTicket]('')");
        \DB::disconnect('sqlsrv2');
        
        \Excel::create($fileName, function($excel) use ($vDirecta) {
            $excel->sheet('Venta Directa', function($sheet) use ($vDirecta) {
                $sheet->mergeCells('A1:H1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('LISTA BOLETOS CONVENCIÓN NIKKEN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Fecha de Orden');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Código de Asociado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Item');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Cantidad');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Unidad de Mercado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($vDirecta as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->OrderDate);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->itemcode);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Qty);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->MarketUnit);
                    });
                }
            });
        })->export('xls');
    }

    public function reporteMKTViajerosPro(){
        $fileName='Viajeros Premium';
        $conexion = DB::connection('sqlsrv5');
            $viajerosPro = $conexion->select("SELECT a.associateid, a.AssociateName, CASE WHEN a.Pais='LAT' THEN 'MEX' ELSE a.Pais END as Pais, a.RangoN,a.Periodo, a.Vp,a.VGP,a.VGPLatamAcumu,a.Kinya, a.KinyaL1 AS KinyaFrontal, a.Rango_Pago, a.cumple_mesV AS Califica_RangoPagoMes, b.Validacion AS Participa, b.opcion AS Partipa_Por, a.AssociateType FROM puntos2020 a WITH(NOLOCK) INNER JOIN ViajerosPremium b WITH(NOLOCK) ON a.associateid=b.Associateid WHERE a.Rango in('PLO','DIA','DRL')");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($viajerosPro) {
            $excel->sheet('Viajeros Premium', function($sheet) use ($viajerosPro) {
                $sheet->mergeCells('A1:O1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Viajeros Premium');
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
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('VP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('VGP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('VGP Acumulado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('KinYa!');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('KinYa! Frontales');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Rango de pago');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Califica a rango pago mes');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Participa');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('Participa por');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O3', function($cell){
                    $cell->setValue('Tipo de asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($viajerosPro as $idx => $row){
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

                    $rangos = [0 => "DIR", 1 => "DIR", 3 => "EXE", 5 => "PLA", 6 => "ORO", 7 => "PLO", 8 => "DIA", 9 => "DRL"];
                    $rango = $rangos[$row->RangoN];
                    $sheet->cell('D'.$idx, function($cell) use ($rango) {
                        $cell->setValue($rango);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Periodo);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Vp);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VGP);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VGPLatamAcumu);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Kinya);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->KinyaFrontal);
                    });

                    $rangoPago = $rangos[$row->Rango_Pago];
                    $sheet->cell('K'.$idx, function($cell) use ($rangoPago) {
                        $cell->setValue($rangoPago);
                    });

                    $cumple = "NO";
                    if($row->Califica_RangoPagoMes == "YES"){
                        $cumple = "SI";
                    }
                    $sheet->cell('L'.$idx, function($cell) use ($cumple) {
                        $cell->setValue($cumple);
                    });

                    $part = "NO";
                    if($row->Participa == 'T'){
                        $part = "SI";
                    }
                    $sheet->cell('M'.$idx, function($cell) use ($part) {
                        $cell->setValue($part);
                    });

                    $opcion = "No participa";
                    if($row->Partipa_Por == 1){
                        $opcion = "Opción 1";
                    }
                    else if($row->Partipa_Por == 2){
                        $opcion = "Opción 2";
                    }
                    $sheet->cell('N'.$idx, function($cell) use ($opcion) {
                        $cell->setValue($opcion);
                    });

                    $tipo = "Cliente";
                    if($row->AssociateType == '100'){
                        $tipo = "Influencer";
                    }
                    $sheet->cell('O'.$idx, function($cell) use ($tipo) {
                        $cell->setValue($tipo);
                    });
                }
            });
        })->export('xls');
    }

    public function fidelizacionVolumen(){
        $fileName='Fidelización Volumenes';
        $conexion = DB::connection('sqlsrv5');
            //$actual = $conexion->select("SELECT associateid,PV AS VP,GV AS VGP,OV AS VO,QOVOPL,QOVOPSL,Period AS Periodo FROM [LAT_MyNIKKEN].[dbo].[VolumeHistory] with(nolock) WHERE Associateid like'%03' and Period=convert(char(6),getdate(),112)---Actual");
            $actual = "";
            //$anterior = $conexion->select("SELECT associateid,PV AS VP,GV AS VGP,OV AS VO,QOVOPL,QOVOPSL,Period AS Periodo FROM [LAT_MyNIKKEN].[dbo].[VolumeHistory] with(nolock) WHERE Associateid like'%03' and Period = CONVERT(char(6), EOMONTH(getdate(),-1),112)---Anterior");
            $anterior = $conexion->select("SELECT associateid,PV AS VP,GV AS VGP,OV AS VO,QOVOPL,QOVOPSL,Period AS Periodo FROM [LAT_MyNIKKEN].[dbo].[VolumeHistory] with(nolock) WHERE Associateid like'%03' and Period = 202102---Anterior");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($actual, $anterior) {
            

            $excel->sheet('Periodo Anterior', function($sheet) use ($anterior) {
                $sheet->cell('A2', function($cell){
                    $cell->setValue('Código Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B2', function($cell){
                    $cell->setValue('VP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C2', function($cell){
                    $cell->setValue('VGP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D2', function($cell){
                    $cell->setValue('VO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E2', function($cell){
                    $cell->setValue('QOVOPL');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F2', function($cell){
                    $cell->setValue('QOVOPSL');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G2', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($anterior as $idx => $row){
                    $idx = ($idx  + 3);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP);
                    });

                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VGP);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VO);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->QOVOPL);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->QOVOPSL);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Periodo);
                    });
                }
            });
        })->export('csv');
    }

    public function transformPlInf(){
        $fileName='Transformacion_PlanInfluencia';
        $conexion = DB::connection('sqlsrv5');
            $query = $conexion->select("SELECT Associateid, AssociateName, ItemCode, Descripcion, Qty, Pais, Period as 'Period_Transformacion', PeriodMokuteki as 'Periodo_Incorporacion_Mokuteki', OrderDate, AssociateType, Estatus, Sponsorid, SponsoridCountry,Transformacion FROM RETOS_ESPECIALES.dbo.Incorporados_1USD");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($query) {
            $excel->sheet('Transformacion', function($sheet) use ($query) {
                $sheet->mergeCells('A1:N1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Detalle de todos los kit mokuteki redimidos');
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
                    $cell->setValue('Item');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Descripción');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Cantidad');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Period Transformación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Periodo Incorporación Mokuteki');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Fecha incorporación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Tipo de asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Estatus');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });
                
                $sheet->cell('L3', function($cell){
                    $cell->setValue('Código Patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('País patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('Transformacion_PlanInfluencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($query as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue(trim($row->AssociateName, ' '));
                    });

                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->ItemCode);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Descripcion);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Qty);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Period_Transformacion);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Periodo_Incorporacion_Mokuteki);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->OrderDate);
                    });

                    $tipo = "Influencer";
                    if($row->AssociateType != 100){
                        $tipo = "Cliente";
                    }
                    $sheet->cell('J'.$idx, function($cell) use ($tipo) {
                        $cell->setValue($tipo);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estatus);
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Sponsorid);
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->SponsoridCountry);
                    });

                    $gana = "No";
                    if($row->Transformacion == 1){
                        $gana = "Si";
                    }
                    $sheet->cell('N'.$idx, function($cell) use ($gana) {
                        $cell->setValue($gana);
                    });
                }
            });
        })->export('xls');
    }

    /*=== Retos especiales 2021 ===*/
    public function menuRetos(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $conexion = \DB::connection('sqlsrv5');
            $abiInfo = $conexion->select("SELECT Rango FROM puntos2020 WHERE associateid = $associateid");
        \DB::disconnect('sqlsrv5');
        if(sizeof($abiInfo) > 0){
            $rango = trim($abiInfo[0]->Rango, ' ');
        }
        else{
            $rango = 'DIR';
        }
        return view('retosEspeciales.menu', compact('associateid', 'rango'));
    }

    public function clubViajeros_(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $periodo = 202012;

        $conexion5 = \DB::connection('sqlsrv5');
            //$abiInfo = $conexion5->select("SELECT top 1 * FROM [ClubKiai] WHERE [Associateid] = '$associateid' order by [Periodo] desc");
            $abiInfo = $conexion5->select("SELECT top 1 a.*, b.Validacion FROM ClubKiai a INNER JOIN ResumenTrimestral b ON a.Associateid=b.Associateid and a.NoTrimestre=b.NoTrimestre WHERE a.Associateid = '$associateid' order by Periodo desc");
            $trimestres = $conexion5->select("SELECT * FROM [ResumenTrimestral] WHERE [AssociateId] = '$associateid' order by [NoTrimestre] asc");
            $detalleTrimestre = $conexion5->select("SELECT * FROM [ClubKiai] where [Associateid] = '$associateid' order by [Periodo] asc");
            $totalsKinya = $conexion5->select("SELECT SUM(kinya) AS totalKinya, SUM(KinYaL1) AS totalKinyalvl FROM Puntos2020 WHERE associateid = $associateid");
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        //return $abiInfo;
        $update = $this->fromatLastUpdate($lastUpdate);
        return view('retosEspeciales.clubV', compact('associateid', 'abiInfo', 'totalsKinya', 'update', 'trimestres', 'detalleTrimestre'));
    }

    public function getGenViajeros(Request $request){
        $associateid = $request->associateid;
        $tipo = $request->tipo;
        $trimestreG = $request->trimestreG;
        $conexion5 = \DB::connection('sqlsrv5');
            $data = $conexion5->select("EXEC SpGenPerId $associateid, $tipo, $trimestreG;");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $data,
        ];
        return $data;
    }

    public function equipoTaishi(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }

        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('TotalKaizen')
                ->select('*')
                ->where('associateid', '=', $associateid)
                ->get();
            
            $response = $conexion5->select("SELECT SUM(VpTotal) AS vpTOTAL FROM Gen_KaizenIncorporados($associateid)");

            $totalsKinya = $conexion5->select("SELECT SUM(kinya) AS totalKinya, SUM(KinYaL1) AS totalKinyalvl FROM Puntos2020 WHERE associateid = $associateid");
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        $update = $this->fromatLastUpdate($lastUpdate);
        
        return view('retosEspeciales.taishi', compact('associateid', 'abiInfo', 'totalsKinya', 'update', 'response'));
    }

    public function getGenealgiTaishi(Request $request){
        $associateid = $request->associateid;
        $type = $request->type;
        $conexion = \DB::connection('sqlsrv5');
        if($type == 1){
            $genealogi = $conexion->select("SELECT RangoA AS Rango, * FROM Gen_KaizenIncorporados($associateid);");
        }
        else if($type == 2){
            $genealogi = $conexion->select("EXEC Gen_Kaizen $associateid, $type;");
        }
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $genealogi,
        ];
        return $data;
    }

    public function getMainPts(Request $request){
        $associateid = $request->associateid;
        $conexion = \DB::connection('sqlsrv5');
            $data = $conexion->select("SELECT Associateid, AssociateName,Pais, Rango, Periodo,Vp, VGP,VpAcumulado, VGPacumulado FROM Puntos2020 WHERE associateid = $associateid;");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $data,
        ];
        return $data;
    }

    public function getDetails(Request $request){
        $associateid = $request->id;
        $conexion5 = \DB::connection('sqlsrv5');
            $data = $conexion5->table('Kaizen_Incorp')
                ->select('*')
                ->where('associateid', '=', $associateid)
                ->get();
            $data = $conexion5->select("SELECT * FROM Kaizen_Incorp WHERE associateid = $associateid");
        \DB::disconnect('sqlsrv5');
        return $data;
    }

    public function equipoKaizen(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }

        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('TotalKaizen')
                ->select('*')
                ->where('associateid', '=', $associateid)
                ->get();
            
            $response = $conexion5->select("SELECT SUM(VpTotal) AS vpTOTAL FROM Gen_KaizenIncorporados($associateid)");

            $totalsKinya = $conexion5->select("SELECT SUM(kinya) AS totalKinya, SUM(KinYaL1) AS totalKinyalvl FROM Puntos2020 WHERE associateid = $associateid");
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        $update = $this->fromatLastUpdate($lastUpdate);
        return view('retosEspeciales.kaizen', compact('associateid', 'abiInfo', 'totalsKinya', 'update', 'response'));
    }

    public function restoSerPro(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $period = Date('Ym');
        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->select("SELECT AssociateName, Rango, Pais FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $period;");
            $total = $conexion5->select("SELECT TotalPlatas, TotalOros, TotalPlatasRangoP, TotalOrosRangoP, PeriodInicio, PeriodFin FROM TotalPro WHERE Associateid = $associateid");
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        $update = $this->fromatLastUpdate($lastUpdate);

        return view('retosEspeciales.serpro', compact('associateid', 'update', 'abiInfo', 'total'));
    }

    public function incorporacionesPlata(Request $request){
        $associateid = $request->associateid;
        $conexion = \DB::connection('sqlsrv5');
            $detail = $conexion->select("SELECT distinct Associateid,AssociateName,Pais,Rango_Registrado,Fecha_RegistroEstrategia,TotalRangoP,Period_Ascenso from Reto_SerPro2 where Sponsorid=$associateid and Rango_Registrado=5");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $detail,
        ];
        return $data;
    }

    public function incorporacionesOro(Request $request){
        $associateid = $request->associateid;
        $conexion = \DB::connection('sqlsrv5');
            $detail = $conexion->select("SELECT distinct Associateid,AssociateName,Pais,Rango_Registrado,Fecha_RegistroEstrategia,TotalRangoP,Period_Ascenso from Reto_SerPro2 where Sponsorid=$associateid and Rango_Registrado=6");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $detail,
        ];
        return $data;
    }

    public function cuestionarioSerProPLA(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        
        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('puntos2020')
            ->select('AssociateName', 'Associateid', 'Pais', 'Rango')
            ->where('associateid', '=', $associateid)
            ->where('Periodo', '=', Date('Ym'))
            ->take(1)
            ->get();
        \DB::disconnect('sqlsrv5');
        
        return view('retosEspeciales.cuestionarioPLA', compact('abiInfo'));
    }

    public function cuestionarioSerProORO(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('puntos2020')
            ->select('AssociateName', 'Associateid', 'Pais', 'Rango')
            ->where('associateid', '=', $associateid)
            ->where('Periodo', '=', Date('Ym'))
            ->take(1)
            ->get();
        \DB::disconnect('sqlsrv5');
        
        return view('retosEspeciales.cuestionarioORO', compact('abiInfo'));
    }

    public function loaduplineSerPro(Request $request){
        $associateid = $request->associateid;
        $conexion = \DB::connection('sqlsrv5');
            $response = $conexion->select("EXEC Sp_UplineTree_SerPro $associateid;");
        \DB::disconnect('sqlsrv5');
        $result = "";
        foreach ($response as $option) {
            $associateid = trim($option->associateid, " ");
            $Name = trim($option->AssociateName, " ");
            $result = $result . "<option value='$associateid'>$associateid - $Name</option>";
        }
        return $result;
    }

    public function saveQuestionnaireSerPro(Request $request){
        $associateid = $request->associateid;
        $mentor = $request->mentor;
        $pilar = $request->pilar;
        $q2 = $request->q2;
        $q3 = $request->q3;
        $q4 = $request->q4;
        $q5 = $request->q5;
        $q6 = $request->q6;
        $q7 = $request->q7;
        $comentario = $request->comentario;
        $prg9_1 = $request->q9_1;
        $prg9_2 = $request->q9_2;
        $fecha_reg = Date('Y-m-d h:m');
        $associateRank = $request->associateRank;
        $associatePais = $request->associatePais;
        $associatename = $request->associatename;
        $ip = $request->ip;
        
        $conexion5 = \DB::connection('sqlsrv5');
            $exist = $conexion5->select("SELECT Associateid FROM Cuestionario_PLA WHERE Associateid = $associateid");
            if(sizeof($exist) <=  0){
                $reg = $conexion5->insert("INSERT INTO Cuestionario_PLA VALUES('$associateid', '$associatename', '$mentor', '5', '$pilar', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$comentario', '$prg9_1', '$prg9_2', '$fecha_reg', '0', '0', '$associatePais', '$ip')");
                $update = $conexion5->update("UPDATE Rangos_Avance_SerPro SET Contestado = 1 WHERE numci = $associateid");
            }
        \DB::disconnect('sqlsrv5');
        
        if(sizeof($exist) >  0){
            return 2;
        }
        if($reg){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function saveQuestionnaireSerProOro(Request $request){
        $Associateid = $request->Associateid;
        $AssociateName = $request->AssociateName;
        $Mentor = $request->Mentor;
        $Avance_Rango = $request->Avance_Rango;
        $Pregunta1 = $request->Pregunta1;
        $Pregunta2 = $request->Pregunta2;
        $Pregunta3 = $request->Pregunta3;
        $Pregunta4 = $request->Pregunta4;
        $Pregunta5 = $request->Pregunta5;
        $Pregunta6 = $request->Pregunta6;
        $Pregunta7 = $request->Pregunta7;
        $Pregunta8 = $request->Pregunta8;
        $Pregunta9 = $request->Pregunta9;
        $Pregunta10_1 = $request->Pregunta10_1;
        $Pregunta10_2 = $request->Pregunta10_2;
        $Pregunta10_3 = $request->Pregunta10_3;
        $FechaRegistro = Date('Y-m-d h:m');
        $Aprobacion = $request->Aprobacion;
        $TotalPregunta = $request->TotalPregunta;
        $Pais = $request->Pais;
        $ip = $request->ip;
        
        $conexion5 = \DB::connection('sqlsrv5');
            $exist = $conexion5->select("SELECT Associateid FROM Cuestionario_ORO WHERE Associateid = $Associateid");
            if(sizeof($exist) <=  0){
                $reg = $conexion5->insert("INSERT INTO Cuestionario_ORO VALUES('$Associateid', '$AssociateName', '$Mentor', '$Avance_Rango', '$Pregunta1', '$Pregunta2', '$Pregunta3', '$Pregunta4', '$Pregunta5', '$Pregunta6', '$Pregunta7', '$Pregunta8', '$Pregunta9', '$Pregunta10_1', '$Pregunta10_2', '$Pregunta10_3', '$FechaRegistro', '$Aprobacion', '$TotalPregunta', '$Pais', '$ip')");
                $update = $conexion5->update("UPDATE Rangos_Avance_SerPro SET Contestado = 1 WHERE numci = $Associateid");
            }
        \DB::disconnect('sqlsrv5');
        if(sizeof($exist) >  0){
            return 2;
        }
        if($reg){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function fromatLastUpdate($lastUpdate){
        $lastUpdate = explode(' ', $lastUpdate[0]->Last_Update);
        $dia = $lastUpdate[0];
        $dia = explode('-', $dia);
        $dia = $dia[2];
        $mes = $lastUpdate[0];
        $mes = explode('-', $mes);
        $mes = $mes[1];
        $hora = $lastUpdate[1];
        $hora = explode(':', $hora);
        $hora = $hora[0] . ':' . $hora[1];
        $data['dia'] = $dia;
        $data['mes'] = $mes;
        $data['hora'] = $hora;
        return $data;
    }

    public function detailsAbiSerpro(Request $request){
        $associateid = $request->associateid;
        $rango = $request->rango;
        $conexion = \DB::connection('sqlsrv5');
            $detail = $conexion->select("select Associateid,Rango_Registrado,RangoPago,PeriodRangoP,CumpleRangoP from Reto_SerPro2 where associateid=$associateid and Rango_Registrado = $rango order by Associateid,Rango_Registrado,PeriodRangoP");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $detail,
        ];
        return $data;
    }

    public function valWinSerPro(Request $request){
        $associateid = $request->associateid;
        $conexion = \DB::connection('sqlsrv5');
            $detail = $conexion->select("SELECT * FROM WinSerPro WHERE sponsor = $associateid");
        \DB::disconnect('sqlsrv5');
        if(sizeof($detail) > 0){
            return 't';
        }
        else{
            return 'f';
        }
    }

    public function redirect(Request $request){
        $associateid = $request->associateid;
        return redirect('/retosEspeciales2021/' . $associateid);
    }

    /*=== test de encryptado ===*/
    public function encryptView(Request $request){
        $val = $request->val;
        return view('retosEspeciales.encrypt', compact('val'));
    }

    public function desEncriptphp(Request $request){
        $encoded = $request->txt;
        $encoded = base64_decode($encoded);
        $decoded = "";
        for( $i = 0; $i < strlen($encoded); $i++ ) {
            $b = ord($encoded[$i]);
            $a = $b ^ 10; 
            $decoded .= chr($a);
        }
        return base64_decode(base64_decode($decoded));
    }
}