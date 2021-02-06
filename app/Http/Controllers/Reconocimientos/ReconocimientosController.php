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
        $conexion5 = \DB::connection('sqlsrv5');
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        $update = $this->fromatLastUpdate($lastUpdate);
        return view('Reconocimientos.index', compact('update'));
    }

    public function getReportReconocimientos(Request $request){
        $reporte = $request->reporte;
        $periodo = $request->periodo;
        switch($reporte){
            case 'Kintai':
                return $this->Kintai($periodo);
            break;
            case 'kinya':
                return $this->kinya($periodo);
            break;
            case 'sponsorsr':
                return $this->sponsorsr($periodo);
            break;
            case 'consolidado':
                return $this->consolidado($periodo);
            break;
        }
    }

    public function Kintai($periodo){
        $fileName='Reconocimientos | Kintai';
        $conexion = DB::connection('sqlsrv2');
            $query = $conexion->select("SELECT DISTINCT a.owner as 'Associateid', b.ApFirstName, b.Rango,b.E_mail,b.Phone1,CASE WHEN b.Pais='LAT' then 'MEX' else b.Pais END as Pais , a.periodo from [dbo].[Historico_EdoCta_NikkenChallenge_KinTai] a inner join LAT_MyNIKKEN.dbo.Associates1_C b on a.Owner=b.Associateid WHERE a.Periodo>=202001 order by a.periodo");
        \DB::disconnect('sqlsrv2');
        $conexion = DB::connection('sqlsrv5');
            $update = $conexion->select("SELECT TOP 1 Last_Update FROM [dbo].[Historico_Ejecucion] WHERE programa='Retos_Especiales' ORDER BY Last_Update DESC");
            if(sizeof($update) <= 0){
                $update[0]['Last_Update'] = Date('Y-m-d h:m:s');
            }
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($query, $update) {
            $excel->sheet('Kintai', function($sheet) use ($query, $update) {
                $sheet->mergeCells('A1:G1');

                $sheet->cell('A1', function($cell) use ($update){
                    $cell->setValue("Reconocimientos | Kintai | Fecha de actualización: " . $update[0]->Last_Update);
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

    public function kinya($periodo){
        $fileName='Reconocimientos | KinYa!';
        $conexion = DB::connection('sqlsrv2');
            $query = $conexion->select("SELECT DISTINCT a.owner AS 'Associateid', b.ApFirstName, b.Rango,b.E_mail,b.Phone1,CASE WHEN b.Pais='LAT' THEN 'MEX' ELSE b.Pais END AS Pais , a.periodo FROM [dbo].[Historico_EdoCta_NikkenChallenge_KinTai] a inner join LAT_MyNIKKEN.dbo.Associates1_C b ON a.Owner=b.Associateid WHERE a.Periodo>=$periodo ORDER BY a.periodo");
        \DB::disconnect('sqlsrv2');
        
        \Excel::create($fileName, function($excel) use ($query) {
            $excel->sheet('KinYa', function($sheet) use ($query) {
                $sheet->mergeCells('A1:N1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Reconocimientos | Kintai');
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
            $query = $conexion->select("SELECT DISTINCT a.owner AS 'Associateid', b.ApFirstName, b.Rango,b.E_mail,b.Phone1,CASE WHEN b.Pais='LAT' THEN 'MEX' ELSE b.Pais END AS Pais , a.periodo FROM [dbo].[Historico_EdoCta_NikkenChallenge_KinTai] a inner join LAT_MyNIKKEN.dbo.Associates1_C b ON a.Owner=b.Associateid WHERE a.Periodo>=$periodo ORDER BY a.periodo");
        \DB::disconnect('sqlsrv2');
        
        \Excel::create($fileName, function($excel) use ($query) {
            $excel->sheet('Patrocinadores', function($sheet) use ($query) {
                $sheet->mergeCells('A1:N1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Reconocimientos | Kintai');
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

    public function consolidado($periodo){
        $fileName='Reconocimientos | Avances';
        $periodo = $request->periodo;
        $conexion = DB::connection('sqlsrv5');
            $query = $conexion->select("SELECT DISTINCT a.owner AS 'Associateid', b.ApFirstName, b.Rango,b.E_mail,b.Phone1,CASE WHEN b.Pais='LAT' THEN 'MEX' ELSE b.Pais END AS Pais , a.periodo FROM [dbo].[Historico_EdoCta_NikkenChallenge_KinTai] a inner join LAT_MyNIKKEN.dbo.Associates1_C b ON a.Owner=b.Associateid WHERE a.Periodo>=$periodo ORDER BY a.periodo");
        \DB::disconnect('sqlsrv5');
        
        \Excel::create($fileName, function($excel) use ($query) {
            $excel->sheet('Transformacion', function($sheet) use ($query) {
                $sheet->mergeCells('A1:N1');

                $sheet->cell('A1', function($cell){
                    $cell->setValue('Reconocimientos | Kintai');
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
}
