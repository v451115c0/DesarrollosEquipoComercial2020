<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;

date_default_timezone_set('America/Mexico_City');

class ReportesController extends Controller{
    public function navigationTracking(Request $request){
        $associateid = $this->decriptData($request->associateid);
        $fecha = Date('Y-m-d H:i:s');
        $plataforma = $this->decriptData($request->plataforma);
        $accion = $this->decriptData($request->accion);
        $pais = "LAT";
        $rango = "DIR";
        $conexion = DB::connection('sqlsrv5');
            $abiInfo = $conexion->table('puntos2020')->select('Pais', 'Rango')->where('associateid', '=', $associateid)->where('Periodo', '=', Date('Ym'))->get();
            $pais = $abiInfo[0]->Pais;
            $rango = $abiInfo[0]->Rango;
            $saveNavigation = $conexion->table('Metricas_Nikken')->insert(
                [
                    'Associateid' => $associateid,
                    'Rango' => "$rango",
                    'Pais' => "$pais",
                    'Fecha' => "$fecha",
                    'Plataforma' => "$plataforma",
                    'Accion' => "$accion"
                ]
            );
        \DB::disconnect('sqlsrv5');
    }

    public function decriptData($encoded){
        $encoded = base64_decode($encoded);
        $decoded = "";
        for( $i = 0; $i < strlen($encoded); $i++ ) {
            $b = ord($encoded[$i]);
            $a = $b ^ 10; 
            $decoded .= chr($a);
        }
        return base64_decode(base64_decode($decoded));
    }

    public function viewReportes(){
        return view('inc1USD.reporte.index');
    }

    public function winViajeros(){
        $fileName='Ganadores Club Viajeros';
        $conexion = DB::connection('sqlsrv5');
            $timestreUno = $conexion->select("SELECT * FROM Win_ClubViajeros(1)");
            $timestreDos = $conexion->select("SELECT * FROM Win_ClubViajeros(2)");
            $timestreTres = $conexion->select("SELECT * FROM Win_ClubViajeros(3)");
            $timestreCuatro = $conexion->select("SELECT * FROM Win_ClubViajeros(4)");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($timestreUno, $timestreDos, $timestreTres, $timestreCuatro) {
            $excel->sheet('1er timerste', function($sheet) use ($timestreUno) {
                $sheet->mergeCells('A1:E1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Ganadores Club Viajeros 1er Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código de Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Gana?');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });
                				
                // Mostramos los registros
                foreach ($timestreUno as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->NoTrimestre);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue("si");
                    });
                }
            });

            $excel->sheet('2do timerste', function($sheet) use ($timestreDos) {
                $sheet->mergeCells('A1:E1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Ganadores Club Viajeros 2do Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código de Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Gana?');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });
                				
                // Mostramos los registros
                foreach ($timestreDos as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->NoTrimestre);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue("si");
                    });
                }
            });

            $excel->sheet('3er timerste', function($sheet) use ($timestreTres) {
                $sheet->mergeCells('A1:E1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Ganadores Club Viajeros 3er Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código de Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Gana?');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });
                				
                // Mostramos los registros
                foreach ($timestreTres as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->NoTrimestre);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue("si");
                    });
                }
            });

            $excel->sheet('4to timerste', function($sheet) use ($timestreCuatro) {
                $sheet->mergeCells('A1:E1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Ganadores Club Viajeros 4to Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código de Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Trimestre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Gana?');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });
                				
                // Mostramos los registros
                foreach ($timestreCuatro as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->NoTrimestre);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue("si");
                    });
                }
            });
        })->export('xls');
    }

    public function consViajerosPro(){
        $fileName='Viajeros Premium Consolidado';
        $conexion = DB::connection('sqlsrv5');
            $consolidado = $conexion->select("SELECT ROW_NUMBER() OVER (order by VGP_Acumulado DESC) AS 'ID', Associateid, AssociateName, Rango,CASE WHEN Pais='LAT' THEN 'MEX' ELSE Pais END AS 'Pais', VGP_Acumulado,NumRangoPagoCumplido, KinyaAcumulado, KinyaFrontalAcumulado,Opcion AS 'Participa_por_opcion' FROM ViajerosPremium WHERE validacion='T' ");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM [dbo].[Historico_Ejecucion] WHERE programa='PUNTOS2020' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($consolidado, $update) {
            $excel->sheet('consolidado', function($sheet) use ($consolidado, $update) {
                $sheet->mergeCells('A1:J1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue("Viajeros Premium Consolidado | Fecha de actualización: " . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Posición');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Código de Asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('VGP Acumulado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Rango de pago');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('KinYa! Acumulado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('KinYa! Fronlates Acumulados');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Participa por opción');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });
                				
                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->ID);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VGP_Acumulado);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->NumRangoPagoCumplido);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->KinyaAcumulado);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->KinyaFrontalAcumulado);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Participa_por_opcion);
                    });

                }
            });
        })->export('xls');
    }

    public function reportemokutekiPeriodo(Request $request){
        $periodo = $request->periodo;
        $fileName='Kits MOKUTEKI OC2BRE';
        $conexion = DB::connection('sqlsrv5');
            $consolidado = $conexion->select("SELECT associateid, AssociateName, CASE WHEN Pais='LAT' THEN 'MEX' ELSE Pais END as Pais, Rango, Period,Incorpo_Transformadas, Total_Incorpor, Incorpo_Redimidas,Incorpo_Pendientes as'Total_Incorpo_Pendientes_Acumuladas',AssociateType,Sponsorid,Email,Telefono From Estrategia_MokutekiPeriod with(nolock) where period = $periodo ---OCtubre 2020");
        \DB::disconnect('sqlsrv5');
        $mes = "";
        if($periodo == 202010){
            $mes = "OCTUBRE";
        }
        if($periodo == 202011){
            $mes = "NOVIEMBRE";
        }
        if($periodo == 202012){
            $mes = "DICIEMBRE";
        }

        \Excel::create($fileName, function($excel) use ($consolidado, $mes) {
            $excel->sheet('', function($sheet) use ($consolidado, $mes) {
                $sheet->mergeCells('A1:J1');

                $sheet->cell('A1', function($cell) use ($mes){
                    $cell->setValue("Consolidado MOKUTEKI | $mes");
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre de Influencer');
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
                    $cell->setValue('Incorporaciones Transformadas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Total de incorporaciones');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Incorporaciones Redimidas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Kits Disponibles');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Tipo de asesor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Código patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Teléfono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });
                				
                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Period);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Transformadas);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Incorpor);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Redimidas);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Incorpo_Pendientes_Acumuladas);
                    });

                    $type = "Influencer";
                    if($row->AssociateType != 100){
                        $type = "Miembro de la comunidad";
                    }
                    $sheet->cell('J'.$idx, function($cell) use ($type) {
                        $cell->setValue($type);
                    });
                    
                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Sponsorid);
                    });
                    
                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Telefono);
                    });
                }
            });
        })->export('csv');
    }

    public function reportemokutekiResumen(){
        $fileName='Resumen Kits MOKUTEKI OC2BRE';
        $conexion = DB::connection('sqlsrv5');
            $consolidado = $conexion->select("SELECT associateid, AssociateName, Pais,Rango,Total_Incorpor as Total_Kit_Mokuteki, Incorpo_Redimidas, Incorpo_Pendientes, Email,Telefono, Sponsorid, Incorpo_Transformadas from [dbo].[EstrategiaOct] with(nolock)");
        \DB::disconnect('sqlsrv5');

        \Excel::create($fileName, function($excel) use ($consolidado) {
            $excel->sheet('', function($sheet) use ($consolidado) {
                $sheet->mergeCells('A1:J1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue("Resumen MOKUTEKI");
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre de Influencer');
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
                    $cell->setValue('Incorporaciones transformadas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Total kits MOKUTEKI');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Incorporaciones Redimidas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Total Disponibles');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Teléfono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Código Sponsor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Transformadas);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Kit_Mokuteki);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Redimidas);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorpo_Pendientes);
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
        })->export('csv');
    }

    public function Incorporacion_Frontal(Request $request){
        $fileName='Incorporacion_Frontal';
        $periodo = $request->periodo;
        $conexion = DB::connection('sqlsrvMynikken');
            $consolidado = $conexion->select("SELECT * FROM [Incorporacion_Frontal]($periodo)");
        \DB::disconnect('sqlsrvMynikken');
        
        \Excel::create($fileName, function($excel) use ($consolidado) {
            $excel->sheet('A1', function($sheet) use ($consolidado) {
                $sheet->mergeCells('A1:F1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue("Incorporacion_Frontal");
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre de Influencer');
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
                    $cell->setValue('Incorporaciones totales');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Nombre);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->No_Incorporaciones);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });
                }
            });
        })->export('xls');
    }

    public function Grupo_Frontalidad(Request $request){
        $fileName='Grupo_Frontal';
        $periodo = $request->periodo;
        $conexion = DB::connection('sqlsrvMynikken');
            $consolidado = $conexion->select("SELECT * FROM [Grupo_Frontalidad]($periodo)");
        \DB::disconnect('sqlsrvMynikken');
        
        \Excel::create($fileName, function($excel) use ($consolidado) {
            $excel->sheet('', function($sheet) use ($consolidado) {
                $sheet->mergeCells('A1:I1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue("Grupo_Frontal");
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre de Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Fecha de incorporación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Kit de inicio');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Código patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Nombre patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Rango patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Nombre);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Fecha_Inscripcion);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Kit_Inicio);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->SponsorID);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Sponsor_Name);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango_Sponsor);
                    });
                }
            });
        })->export('xls');
    }

    public function avancesSerPro(Request $request){
        $fileName='Reporte Avances Ser Pro';
        $periodo = $request->periodo;
        $conexion = DB::connection('sqlsrv5');
            $consolidado = $conexion->select("SELECT numci, AssociateName, Pais, Rango AS Rango_Avance, FechaAvance, Period, FechaInicio AS FechaInicioCuestionario, FEchaFin AS FechaFinCuestionario, Contestado AS CuestionarioRepondido, ContestadoFinal AS CuestionarioFinal FROM Rangos_Avance_SerPro");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($consolidado, $update) {
            $excel->sheet('Avances', function($sheet) use ($consolidado, $update) {
                $sheet->mergeCells('A1:J1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue("Reporte Avances Ser Pro | Fecha de actualización: " . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre de Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Rango de Avance');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Fecha de avance');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Periodo de avance');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Primer Cuestionario respondido');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Segundo Cuestionario respondido');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->numci);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                    
                    $rangosCompletos = [1 => 'DIRECTO', 3 => 'EJECUTIVO', 5 => 'PLATA', 6 => 'ORO', 7 => 'PLATINO', 8 => 'DIAMANTE', 9 => 'DIAMANTE REAL'];
                    $sheet->cell('D'.$idx, function($cell) use ($row, $rangosCompletos) {
                        $cell->setValue($rangosCompletos[$row->Rango_Avance]);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->FechaAvance);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Period);
                    });

                    $text = 'NO';
                    if($row->CuestionarioRepondido == 1){
                        $text = 'SI';
                    }
                    $sheet->cell('G'.$idx, function($cell) use ($text) {
                        $cell->setValue($text);
                    });

                    $text2 = 'NO';
                    if($row->CuestionarioFinal == 1){
                        $text2 = 'SI';
                    }
                    $sheet->cell('H'.$idx, function($cell) use ($text2) {
                        $cell->setValue($text2);
                    });
                }
            });
        })->export('xls');
    }

    public function reportCuestionarioPlatas(Request $request){
        $fileName='Ser Pro - Cuestionarios PLATA';
        $periodo = $request->periodo;
        $conexion = DB::connection('sqlsrv5');
            $consolidado = $conexion->select("SELECT Associateid, AssociateName, Mentor, Avance_Rango, Pregunta1, Pregunta2, Pregunta3, Pregunta4, Pregunta5, Pregunta6, Pregunta7, Pregunta8, Pregunta9_1, Pregunta9_2, FechaRegistro, Aprobacion, Pais FROM Cuestionario_PLA");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($consolidado, $update) {
            $excel->sheet('PLATAS', function($sheet) use ($consolidado, $update) {
                $sheet->mergeCells('A1:Q1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue("Ser Pro - Cuestionarios PLATA | Fecha de actualización: " . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre de Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Código del Mentor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Rango de avance');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Pregunta 1');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Pregunta 2');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Pregunta 3');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Pregunta 4');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Pregunta 5');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Pregunta 6');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Pregunta 7');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Pregunta 8');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Pregunta 9_1');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('Pregunta 9_2');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O3', function($cell){
                    $cell->setValue('Fecha de registro');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('P3', function($cell){
                    $cell->setValue('Aprobación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('Q3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mentor);
                    });
                    
                    $avance = "PLATA";
                    if($row->Avance_Rango == 6){
                        $avance = "ORO";
                    }
                    $sheet->cell('D'.$idx, function($cell) use ($avance) {
                        $cell->setValue($avance);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta1);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta2 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta3 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta4 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta5 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta6 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta7 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta8);
                    });
                    
                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta9_1);
                    });
                    
                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta9_2);
                    });
                    
                    $sheet->cell('O'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->FechaRegistro);
                    });
                    
                    $sheet->cell('P'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Aprobacion == 1) ? "SI": "NO");
                    });
                    
                    $sheet->cell('Q'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                }
            });
        })->export('xls');
    }

    public function reportCuestionarioOros(Request $request){
        $fileName='Ser Pro - Cuestionarios ORO';
        $periodo = $request->periodo;
        $conexion = DB::connection('sqlsrv5');
            $consolidado = $conexion->select("SELECT Associateid,AssociateName, Mentor,Avance_Rango, Pregunta1,Pregunta2,Pregunta3,Pregunta4,Pregunta5,Pregunta6,Pregunta7,Pregunta8,Pregunta9,Pregunta10_1,Pregunta10_2,Pregunta10_3,FechaRegistro,Aprobacion,Pais FROM Cuestionario_ORO");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($consolidado, $update) {
            $excel->sheet('ORO', function($sheet) use ($consolidado, $update) {
                $sheet->mergeCells('A1:Q1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue("Ser Pro - Cuestionarios ORO | Fecha de actualización: " . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Nombre de Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Código del Mentor');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Rango de avance');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Pregunta 1');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Pregunta 2');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Pregunta 3');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Pregunta 4');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Pregunta 5');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Pregunta 6');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Pregunta 7');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Pregunta 8');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Pregunta 9');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('Pregunta 10_1');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O3', function($cell){
                    $cell->setValue('Pregunta 10_2');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('P3', function($cell){
                    $cell->setValue('Pregunta 10_3');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('Q3', function($cell){
                    $cell->setValue('Fecha de registro');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('R3', function($cell){
                    $cell->setValue('Aprobación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('S3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mentor);
                    });
                    
                    $avance = "PLATA";
                    if($row->Avance_Rango == 6){
                        $avance = "ORO";
                    }
                    $sheet->cell('D'.$idx, function($cell) use ($avance) {
                        $cell->setValue($avance);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta1);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta2 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta3 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta4 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta5 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta6 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta7 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Pregunta8 == 1) ? "SI" : 'NO');
                    });
                    
                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta9);
                    });
                    
                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta10_1);
                    });
                    
                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta10_2);
                    });
                    
                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pregunta10_3);
                    });
                    
                    $sheet->cell('O'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->FechaRegistro);
                    });
                    
                    $sheet->cell('P'.$idx, function($cell) use ($row) {
                        $cell->setValue(($row->Aprobacion == 1) ? "SI": "NO");
                    });
                    
                    $sheet->cell('Q'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                }
            });
        })->export('xls');
    }

    public function estrategiaOctReport(Request $request){
        $fileName='Comunicados MOKUTEKI PLUS';
        $conexion = DB::connection('sqlsrv5');
            $consolidado = $conexion->select("SELECT DISTINCT associateid, Email, Pais FROM EstrategiaOct");
        \DB::disconnect('sqlsrv5');

        \Excel::create($fileName, function($excel) use ($consolidado) {
            $excel->sheet('MKPLUS', function($sheet) use ($consolidado) {

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B1', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('Country');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('liga');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 2);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue('https://services.nikken.com.mx/inc1USD/' . base64_encode($row->associateid));
                    });
                }
            });
        })->export('csv');
    }

    public function reporteClientesTV(Request $request){
        $fileName='CLIENTES TV 2020 - Feb 2021';
        $consolidado = User::select('name', 'last_name', 'email', 'country_id', 'created_at', 'sap_code_sponsor')->where('client_type', '=','CLIENTE')->where('created_at', '>', '2020-01-01')->get();

        \Excel::create($fileName, function($excel) use ($consolidado) {
            $excel->sheet('MKPLUS', function($sheet) use ($consolidado) {

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B1', function($cell){
                    $cell->setValue('correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('país');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('fecha de creación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 2);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->name . ' ' . $row->last_name);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->email);
                    });
                    
                    $nPaisLetras = [ 1 => 'COL', 2 => 'MEX', 3 => 'PER', 4 => 'ECU', 5 => 'PAN', 6 => 'GTM', 7 => 'SLV', 8 => 'CRI', 9 => 'USA', 10 => 'CHL'];
                    $sheet->cell('C'.$idx, function($cell) use ($row, $nPaisLetras) {
                        $cell->setValue($nPaisLetras[$row->country_id]);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->created_at);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->sap_code_sponsor);
                    });
                }
            });
        })->export('csv');
    }

    public function reporteAlcanciasTV(Request $request){
        $fileName='Ventas por Alcancía en TV';
        $conexion = \DB::connection('mysql2');
            $consolidado = $conexion->select("SELECT 
            (SELECT code FROM countries WHERE id=sales.country_id) AS Venta_Pais,
            (SELECT dues FROM sales_in_dues WHERE sale_id=sales_dues.sale_id) AS Meses,
            CONCAT('WEB-',(SELECT code FROM countries WHERE id=sales.country_id),'-',sales_dues.sale_id) AS Orden,
            (SELECT total FROM sales WHERE id=sales_dues.sale_id) AS Total_Orden,
            (SELECT status FROM sales WHERE id=sales_dues.sale_id) AS Estatus_Orden,
            sales_dues.quota_sale_id AS Orden_Abono,
            sales_information_payments.payment_amount AS Total_Abono,
            sales.discount AS Descuento,
            sales.extra_perception_total AS Retenciones, 
            sales_information_payments.status AS Estatus_Abono,
            sales_information_payments.confirmation_code AS PaymentVoucherNum,
            sales_dues.dues_to_cover AS Num_Abono,
            sales_information_payments.payment_provider AS Pasarela,
            sales_information_payments.payment_method AS Forma_Pago,
            users.sap_code AS CardCode,
            users.client_type AS Tipo_Asesor,
            CONCAT(users.name,' ',users.last_name) AS Nom_Asesor
            FROM sales_dues
            LEFT JOIN sales_information_payments ON sales_dues.quota_sale_id=sales_information_payments.sale_id
            LEFT JOIN sales ON sales_information_payments.sale_id=sales.id
            LEFT JOIN users ON sales.user_id=users.id 
            GROUP BY sales_dues.quota_sale_id, sales.country_id, sales_dues.sale_id, sales_information_payments.payment_amount, sales.discount, sales.extra_perception_total, sales_information_payments.status,
            sales_information_payments.confirmation_code, sales_dues.dues_to_cover, sales_information_payments.payment_provider, sales_information_payments.payment_method, users.sap_code, users.client_type, users.name, users.last_name;");
        \DB::disconnect('mysql2');

        \Excel::create($fileName, function($excel) use ($consolidado) {
            $excel->sheet('MKPLUS', function($sheet) use ($consolidado) {
                $sheet->mergeCells('A1:Q1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue("Ventas por apartados | " . Date('Y-m-d'));
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '15',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('numero de meses');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Numero de orden');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Estatus de orden');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Estatus de orden');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Id de abono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Monto de abono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Descuento');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Retenciones');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Estaus de abono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Vaucher');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Numero de abono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Pasarela');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('Forma de pago');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O3', function($cell){
                    $cell->setValue('Código de influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('P3', function($cell){
                    $cell->setValue('Tipo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('Q3', function($cell){
                    $cell->setValue('Nombre de Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($consolidado as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Venta_Pais);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Meses);
                    });
                    
                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Orden);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Orden);
                    });
                    
                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estatus_Orden);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Orden_Abono);
                    });
                    
                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Abono);
                    });
                    
                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Descuento);
                    });
                    
                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Retenciones);
                    });
                    
                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estatus_Abono);
                    });
                    
                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->PaymentVoucherNum);
                    });
                    
                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Num_Abono);
                    });
                    
                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pasarela);
                    });
                    
                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Forma_Pago);
                    });
                    
                    $sheet->cell('O'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->CardCode);
                    });
                    
                    $sheet->cell('P'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Tipo_Asesor);
                    });
                    
                    $sheet->cell('Q'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Nom_Asesor);
                    });
                }
            });
        })->export('xls');
    }
}