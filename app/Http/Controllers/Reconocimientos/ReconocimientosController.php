<?php

namespace App\Http\Controllers\Reconocimientos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ReconocimientosController extends Controller{
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

    public function reconocimientos(){
        return view('Reconocimientos.index');
    }

    public function recAvances(){
        return view('Reconocimientos.avances');
    }

    public function getReportReconocimientos(Request $request){
        $reporte = $request->reporte;
        $periodo = $request->periodo;
        $periodo2 = $request->periodo2;
        switch($reporte){
            case 'Kintai':
                return $this->Kintai($periodo);
            break;
            case 'kinya':
                return $this->kinya($periodo, $periodo2);
            break;
            case 'kinya2':
                return $this->kinya($periodo, $periodo2);
            break;
            case 'sponsorsr':
                return $this->sponsorsr($periodo);
            break;
            case 'consolidado':
                return $this->consolidado($periodo);
            break;
            case 'avances':
                return $this->avances($periodo);
            break;
        }
    }

    public function kinya($periodo, $periodo2){
        $fileName='Reconocimientos | KinYa!';
        $conexion = DB::connection('sqlsrv5');
            $query = $conexion->select("EXEC Reporte_Kinya_Historico $periodo, $periodo2");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM [RETOS_ESPECIALES].[dbo].[Historico_Ejecucion] WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($query, $update) {
            $excel->sheet('Kintai', function($sheet) use ($query, $update) {
                $sheet->mergeCells('A1:U1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue('Reconocimientos | Kintai | Fecha de actualización: ' . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('Código');
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
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Teléfono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Estado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Fecha de incorporación');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('VP mes');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Unidades por venta directa');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Unidades por influencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Total de unidades');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('Incorporaciones por influencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O3', function($cell){
                    $cell->setValue('Cumple KinYa!');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('P3', function($cell){
                    $cell->setValue('KinYa por venta');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('Q3', function($cell){
                    $cell->setValue('KinYa por Influencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('R3', function($cell){
                    $cell->setValue('Código patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('S3', function($cell){
                    $cell->setValue('Nombre Patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('T3', function($cell){
                    $cell->setValue('País patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('U3', function($cell){
                    $cell->setValue('Estatus');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($query as $idx => $row){
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
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Telefono);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estado);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Fecha_Incorp);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP_Mes);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Periodo);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Unidades_VentaDirecta);
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Unidades_PorInfluencer);
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->TotalUnidades);
                    });

                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Incorpo_Influencer);
                    });

                    $sheet->cell('O'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Cumple_Kinya);
                    });

                    $sheet->cell('P'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->kinya_PorVenta);
                    });

                    $sheet->cell('Q'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->kinya_PorInfluencia);
                    });

                    $sheet->cell('R'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Sponsorid);
                    });

                    $sheet->cell('S'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->SponsorName);
                    });

                    $sheet->cell('T'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->SponsorPAis);
                    });

                    $sheet->cell('U'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estatus);
                    });
                }
            });
        })->export('xls');
    }

    public function Kintai($periodo){
        $fileName='Reconocimientos | Kintai';
        $conexion = DB::connection('sqlsrv2');
            $query = $conexion->select("SELECT DISTINCT a.owner AS 'Associateid', b.ApFirstName, b.Rango,b.E_mail,b.Phone1,CASE WHEN b.Pais='LAT' THEN 'MEX' ELSE b.Pais END AS Pais , a.periodo FROM [dbo].[Historico_EdoCta_NikkenChallenge_KinTai] a INNER JOIN LAT_MyNIKKEN.dbo.Associates1_C b ON a.Owner=b.Associateid WHERE a.Periodo>=202001 ORDER BY a.periodo");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM [RETOS_ESPECIALES].[dbo].[Historico_Ejecucion] WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv2');
        
        \Excel::create($fileName, function($excel) use ($query, $update) {
            $excel->sheet('KinYa', function($sheet) use ($query, $update) {
                $sheet->mergeCells('A1:N1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue('Reconocimientos | Kintai | Fecha de actualización: ' . $update[0]->Last_Update);
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
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('# Celular');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Periodo');
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
                        $cell->setValue(trim($row->ApFirstName, ' '));
                    });

                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->E_mail);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Phone1);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->periodo);
                    });
                }
            });
        })->export('xls');
    }

    public function sponsorsr($periodo){
        $fileName='Reconocimientos | Mejores Patrocinadores';
        $conexion = DB::connection('sqlsrv2');
            $query = $conexion->select("EXEC [RETOS_ESPECIALES].[dbo].[Reporte_MEjoresPatro_PI] $periodo");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM [RETOS_ESPECIALES].[dbo].[Historico_Ejecucion] WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv2');
        
        \Excel::create($fileName, function($excel) use ($query, $update) {
            $excel->sheet('Patrocinadores', function($sheet) use ($query, $update) {
                $sheet->mergeCells('A1:K1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue('Reconocimientos | Patrocinadores | Fecha de actualización: ' . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('# Ranking');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Código');
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
                    $cell->setValue('Estado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Teléfono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Incorporaciones por influencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Estatus');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($query as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Ranking);
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
                        $cell->setValue($row->Estado);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Telefono);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Incoporaciones_Influencer);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Periodo);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estatus);
                    });
                }
            });
        })->export('xls');
    }

    public function consolidado($periodo){
        $fileName='Reconocimientos | Consolidado';
        $conexion = DB::connection('sqlsrv5');
            $query = $conexion->select("EXEC Reporte_Consolidado_PI $periodo");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM [RETOS_ESPECIALES].[dbo].[Historico_Ejecucion] WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($query, $update) {
            $excel->sheet('Consolidado', function($sheet) use ($query, $update) {
                $sheet->mergeCells('A1:U1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue('Reconocimientos | Consolidado Patrocinadores PI | Fecha de actualización: ' . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('# Ranking');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Código');
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
                    $cell->setValue('Estado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Año');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Enero');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Febrero');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Marzo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Abril');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Mayo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N3', function($cell){
                    $cell->setValue('Junio');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O3', function($cell){
                    $cell->setValue('Julio');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('P3', function($cell){
                    $cell->setValue('Agosto');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('Q3', function($cell){
                    $cell->setValue('Septiembre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('R3', function($cell){
                    $cell->setValue('Octubre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('S3', function($cell){
                    $cell->setValue('Noviembre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('T3', function($cell){
                    $cell->setValue('Diciembre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('U3', function($cell){
                    $cell->setValue('Total_Incoporaciones_Influencer');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('V3', function($cell){
                    $cell->setValue('Estatus');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($query as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Ranking);
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
                        $cell->setValue($row->Estado);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Anio);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes1);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes2);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes3);
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes4);
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes5);
                    });

                    $sheet->cell('N'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes6);
                    });

                    $sheet->cell('O'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes7);
                    });

                    $sheet->cell('P'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes8);
                    });

                    $sheet->cell('Q'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes9);
                    });

                    $sheet->cell('R'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes10);
                    });

                    $sheet->cell('S'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes11);
                    });

                    $sheet->cell('T'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Mes12);
                    });

                    $sheet->cell('U'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Total_Incoporaciones_Influencer);
                    });

                    $sheet->cell('V'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estatus);
                    });
                }
            });
        })->export('csv');
    }

    public function avances($periodo){
        $fileName='Reconocimientos | Avances';
        $conexion = DB::connection('sqlsrv2');
            $query = $conexion->select("EXEC [RETOS_ESPECIALES].[dbo].[Reporte_AvancesRango] $periodo");
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM [RETOS_ESPECIALES].[dbo].[Historico_Ejecucion] WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv2');
        
        \Excel::create($fileName, function($excel) use ($query, $update) {
            $excel->sheet('Avances', function($sheet) use ($query, $update) {
                $sheet->mergeCells('A1:M1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue('Reconocimientos | Avances | Fecha de actualización: ' . $update[0]->Last_Update);
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '18',
                    ));
                });

                $sheet->cell('A3', function($cell){
                    $cell->setValue('#');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B3', function($cell){
                    $cell->setValue('Código');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C3', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D3', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E3', function($cell){
                    $cell->setValue('Teléfono');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F3', function($cell){
                    $cell->setValue('Estado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G3', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H3', function($cell){
                    $cell->setValue('Fecha de avance');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I3', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J3', function($cell){
                    $cell->setValue('Rango anterior');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K3', function($cell){
                    $cell->setValue('Rango final');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L3', function($cell){
                    $cell->setValue('Año');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M3', function($cell){
                    $cell->setValue('Estatus');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($query as $idx => $row){
                    $idx = ($idx  + 4);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->No);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });

                    $sheet->cell('C'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });
                    
                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Telefono);
                    });
                    
                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estado);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->FechaAvance);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Period);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->RangoAnterior);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->RangoFinal);
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Anio);
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Estatus);
                    });
                }
            });
        })->export('xls');
    }

    public function MyAlcacnia(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        return view('CMSMyNikken.myalcacnia', compact('associateid'));
    }

    public function MyAlcacniaData(Request $request){
        $associateid = $request->associateid;
        $conexion = \DB::connection('sqlsrv5');
            $genealogy = $conexion->select("SELECT * FROM Alcancia_Nikken($associateid)");
        \DB::disconnect('sqlsrv5');
        $data = [
			'data' => $genealogy,
		];
        return $data;
    }

    public function MyAlcacniaDataDetail(Request $request){
        $ordernum = $request->ordernum;
        $conexion = \DB::connection('sqlsrv5');
            $genealogy = $conexion->select("SELECT a.DocSale, a.ItemCode,b.ItemName, a.Quantity, a.UnitPrice, a.U_Puntos, a.U_vol_calc FROM [dbo].[DwnPOrderLines] a LEFT JOIN LAT_MyNIKKEN.[dbo].[Catalogo_Productos] b ON ltrim(rtrim(a.itemCode))=ltrim(rtrim(b.itemCode)) WHERE a.DocSale = $ordernum");
        \DB::disconnect('sqlsrv5');
        $data = [
			'data' => $genealogy,
		];
        return $data;
    }

    public function MyAlcacniaDataRed(Request $request){
        $associateid = $request->associateid;
        $type = $request->type;
        $conexion = \DB::connection('sqlsrv5');
            $genealogy = $conexion->select("SELECT Associateid,AssociateName, Pais, OrderNum,NumPlazos,PlazosPagados,PlazosPendientes,ValorTotal,ValorAbonos,ValorSaldo,Period_Inicio,Period_Cierre, Puntos,VC from Gen_AlcanciaNikken ($associateid,$type)");
        \DB::disconnect('sqlsrv5');
        $data = [
			'data' => $genealogy,
		];
        return $data;
    }
}
