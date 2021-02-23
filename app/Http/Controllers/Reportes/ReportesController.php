<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ReportesController extends Controller{
    public function viewReportes(){
        return view('inc1USD.reporte.index');
    }

    public function winViajeros(){
        $fileName='Ganadores Club Viajeros';
        $conexion = DB::connection('sqlsrv5');
            $timestreTres = $conexion->select("select a.associateid,b.AssociateName,b.Rango,a.NoTrimestre,a.Validacion from ResumenTrimestral a with(nolock) inner join Puntos2020 b with(nolock) on a.Associateid=b.Associateid where a.validacion='T' and a.notrimestre=3 and b.Periodo=202010");
            $timestreCuatro = $conexion->select("select a.associateid,b.AssociateName,b.Rango,a.NoTrimestre,a.Validacion from ResumenTrimestral a with(nolock) inner join Puntos2020 b with(nolock)on a.Associateid=b.Associateid where a.validacion='T' and a.notrimestre=4 and b.Periodo=202012");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($timestreTres, $timestreCuatro) {
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
}