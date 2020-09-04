<?php

namespace App\Http\Controllers\CalculadoraNK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CalculadoraNkController extends Controller{
    public function calculadoraNikken(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $conexion=DB::connection('sqlsrv5');
            $abiInfo = $conexion->select("SELECT TOP 1 Associateid, AssociateName, Pais, Rango from Puntos2020 WHERE Associateid = $associateid");
        DB::disconnect('sqlsrv5');
        
        return view('calculadora.index', compact('abiInfo'));
    }

    public function calcGetProducts(Request $request){
        $familias = ['kenko_light' => 'KENKO LIGHT', 'kenko_air' => 'KENKO AIR', 'pimag' => 'PI MAG', 'kenzen' => 'KENZEN', 'kenko_sleep' => 'KENKO SLEEP'];
        $producto = $familias[$request->familyProd];
        $pais = $request->pais;
        $conexion=DB::connection('sqlsrv2');
            $product = $conexion->select("SELECT * FROM NC_Sug_VC_Puntos WHERE country = '$pais' AND TypeProd = '$producto' AND itemCode NOT IN('136518', '136418', '136318', '5023','5024','5025','5026','5027','5028');");
        DB::disconnect('sqlsrv2');
        $data = [
            'data' => $product,
        ];
        return $data;
    }
    
    public function calcGetProductsInfluencia(Request $request){
        $producto = 'PI MAG';
        $pais = $request->pais;
        $conexion=DB::connection('sqlsrv2');
            $product = $conexion->select("SELECT * FROM NC_Sug_VC_Puntos WHERE country = '$pais' AND TypeProd = '$producto' AND itemCode IN('5023','5024','5025','5026','5027','5028');");
        DB::disconnect('sqlsrv2');
        $data = [
            'data' => $product,
        ];
        return $data;
    }

    public function calcGetBonos(Request $request){
        $rangosNum = ['DIR' => 1, 'EXE' => 3, 'PLA' => 5, 'ORO' => 6, 'PLO' => 7, 'DIA' => 8, 'DRL' => 9, 'Influencer' => 1, 'Cliente' => 0];
        /*== datos del Padre ==*/
        $rangoPadre = $rangosNum[$request->rangPadre];
        //return $rangoPadre;
        $paisPadre = $request->paisPadre;

        /*== datos del nodo 1 ==*/
        $nombreNodo1 = $request->nombreNodo1;
        $rangoNodo1 = $rangosNum[$request->rangoNodo1];
        $paisNodo1 = $request->paisNodo1;
        $influencerNodo1 = $request->influencerNodo1;
        $productoNodo1_1 = $request->productoNodo1_1 != '' ? $request->productoNodo1_1 : '0|0';
        $productoNodo1_1 = explode('|', $productoNodo1_1);
        $productoNodo1_1 = $this->quitarLetra($productoNodo1_1[0]);
        
        $productoNodo1_2 = $request->productoNodo1_2 != '' ? $request->productoNodo1_2 : '0|0';
        $productoNodo1_2 = explode('|', $productoNodo1_2);
        $productoNodo1_2 = $this->quitarLetra($productoNodo1_2[0]);
        
        $productoNodo1_3 = $request->productoNodo1_3 != '' ? $request->productoNodo1_3 : '0|0';
        $productoNodo1_3 = explode('|', $productoNodo1_3);
        $productoNodo1_3 = $this->quitarLetra($productoNodo1_3[0]);

        $piezasNodo1_1 = $request->piezasNodo1_1;
        $piezasNodo1_2 = $request->piezasNodo1_2;
        $piezasNodo1_3 = $request->piezasNodo1_3;

        /*== datos del nodo 2 ==*/
        $nombreNodo2 = $request->nombreNodo2;
        $rangoNodo2 = $rangosNum[$request->rangoNodo2];
        $paisNodo2 = $request->paisNodo2;
        $influencerNodo2 = $request->influencerNodo2;
        $productoNodo2_1 = $request->productoNodo2_1 != '' ? $request->productoNodo2_1 : '0|0';
        $productoNodo2_1 = explode('|', $productoNodo2_1);
        $productoNodo2_1 = $this->quitarLetra($productoNodo2_1[0]);

        $productoNodo2_2 = $request->productoNodo2_2 != '' ? $request->productoNodo2_2 : '0|0';
        $productoNodo2_2 = explode('|', $productoNodo2_2);
        $productoNodo2_2 = $this->quitarLetra($productoNodo2_2[0]);

        $productoNodo2_3 = $request->productoNodo2_3 != '' ? $request->productoNodo2_3 : '0|0';
        $productoNodo2_3 = explode('|', $productoNodo2_3);
        $productoNodo2_3 = $this->quitarLetra($productoNodo2_3[0]);

        $piezasNodo2_1 = $request->piezasNodo2_1;
        $piezasNodo2_2 = $request->piezasNodo2_2;
        $piezasNodo2_3 = $request->piezasNodo2_3;
    
        /*-------------------------------------------------------------------------------*/
        /*== datos del nodo 3 ==*/
        $nombreNodo3 = $request->nombreNodo3;
        $rangoNodo3 = $rangosNum[$request->rangoNodo3];
        $paisNodo3 = $request->paisNodo3;
        $influencerNodo3 = $request->influencerNodo3;
        $productoNodo3_1 = $request->productoNodo3_1 != '' ? $request->productoNodo3_1 : '0|0';
        $productoNodo3_1 = explode('|', $productoNodo3_1);
        $productoNodo3_1 = $this->quitarLetra($productoNodo3_1[0]);

        $productoNodo3_2 = $request->productoNodo3_2 != '' ? $request->productoNodo3_2 : '0|0';
        $productoNodo3_2 = explode('|', $productoNodo3_2);
        $productoNodo3_2 = $this->quitarLetra($productoNodo3_2[0]);

        $productoNodo3_3 = $request->productoNodo3_3 != '' ? $request->productoNodo3_3 : '0|0';
        $productoNodo3_3 = explode('|', $productoNodo3_3);
        $productoNodo3_3 = $this->quitarLetra($productoNodo3_3[0]);

        $piezasNodo3_1 = $request->piezasNodo3_1;
        $piezasNodo3_2 = $request->piezasNodo3_2;
        $piezasNodo3_3 = $request->piezasNodo3_3;

        /*== datos del nodo 4 ==*/
        $nombreNodo4 = $request->nombreNodo4;
        $rangoNodo4 = $rangosNum[$request->rangoNodo4];
        $paisNodo4 = $request->paisNodo4;
        $influencerNodo4 = $request->influencerNodo4;
        $productoNodo4_1 = $request->productoNodo4_1 != '' ? $request->productoNodo4_1 : '0|0';
        $productoNodo4_1 = explode('|', $productoNodo4_1);
        $productoNodo4_1 = $this->quitarLetra($productoNodo4_1[0]);

        $productoNodo4_2 = $request->productoNodo4_2 != '' ? $request->productoNodo4_2 : '0|0';
        $productoNodo4_2 = explode('|', $productoNodo4_2);
        $productoNodo4_2 = $this->quitarLetra($productoNodo4_2[0]);

        $productoNodo4_3 = $request->productoNodo4_3 != '' ? $request->productoNodo4_3 : '0|0';
        $productoNodo4_3 = explode('|', $productoNodo4_3);
        $productoNodo4_3 = $this->quitarLetra($productoNodo4_3[0]);

        $piezasNodo4_1 = $request->piezasNodo4_1;
        $piezasNodo4_2 = $request->piezasNodo4_2;
        $piezasNodo4_3 = $request->piezasNodo4_3;

        /*-------------------------------------------------------------------------------*/
        /*== datos del nodo 5 ==*/
        $nombreNodo5 = $request->nombreNodo5;
        $rangoNodo5 = $rangosNum[$request->rangoNodo5];
        $paisNodo5 = $request->paisNodo5;
        $influencerNodo5 = $request->influencerNodo5;
        $productoNodo5_1 = $request->productoNodo5_1 != '' ? $request->productoNodo5_1 : '0|0';
        $productoNodo5_1 = explode('|', $productoNodo5_1);
        $productoNodo5_1 = $this->quitarLetra($productoNodo5_1[0]);
        
        $productoNodo5_2 = $request->productoNodo5_2 != '' ? $request->productoNodo5_2 : '0|0';
        $productoNodo5_2 = explode('|', $productoNodo5_2);
        $productoNodo5_2 = $this->quitarLetra($productoNodo5_2[0]);
        
        $productoNodo5_3 = $request->productoNodo5_3 != '' ? $request->productoNodo5_3 : '0|0';
        $productoNodo5_3 = explode('|', $productoNodo5_3);
        $productoNodo5_3 = $this->quitarLetra($productoNodo5_3[0]);

        $piezasNodo5_1 = $request->piezasNodo5_1;
        $piezasNodo5_2 = $request->piezasNodo5_2;
        $piezasNodo5_3 = $request->piezasNodo5_3;

        /*== datos del nodo 6 ==*/
        $nombreNodo6 = $request->nombreNodo6;
        $rangoNodo6 = $rangosNum[$request->rangoNodo6];
        $paisNodo6 = $request->paisNodo6;
        $influencerNodo6 = $request->influencerNodo6;
        $productoNodo6_1 = $request->productoNodo6_1 != '' ? $request->productoNodo6_1 : '0|0';
        $productoNodo6_1 = explode('|', $productoNodo6_1);
        $productoNodo6_1 = $this->quitarLetra($productoNodo6_1[0]);

        $productoNodo6_2 = $request->productoNodo6_2 != '' ? $request->productoNodo6_2 : '0|0';
        $productoNodo6_2 = explode('|', $productoNodo6_2);
        $productoNodo6_2 = $this->quitarLetra($productoNodo6_2[0]);

        $productoNodo6_3 = $request->productoNodo6_3 != '' ? $request->productoNodo6_3 : '0|0';
        $productoNodo6_3 = explode('|', $productoNodo6_3);
        $productoNodo6_3 = $this->quitarLetra($productoNodo6_3[0]);

        $piezasNodo6_1 = $request->piezasNodo6_1;
        $piezasNodo6_2 = $request->piezasNodo6_2;
        $piezasNodo6_3 = $request->piezasNodo6_3;

        /*== Obitiene y arma la cadena de los productos ==*/
        $productosNodo1 = 1 . '=' . $productoNodo1_1 . '=' . $piezasNodo1_1 . ';';
        $productosNodo2 = 2 . '=' . $productoNodo2_1 . '=' . $piezasNodo2_1 . ';';
        $productosNodo3 = 3 . '=' . $productoNodo3_1 . '=' . $piezasNodo3_1 . ';';
        $productosNodo4 = 4 . '=' . $productoNodo4_1 . '=' . $piezasNodo4_1 . ';';
        $productosNodo5 = 5 . '=' . $productoNodo5_1 . '=' . $piezasNodo5_1 . ';';
        $productosNodo6 = 6 . '=' . $productoNodo6_1 . '=' . $piezasNodo6_1;

        $productosCadena1 = '0=0=0' . ';' . $productosNodo1 . $productosNodo2 . $productosNodo3 . $productosNodo4 . $productosNodo5 . $productosNodo6;
        //echo "'" . $productosCadena1 . "'<br>";
        $productosNodo1 = 1 . '=' . $productoNodo1_2 . '=' . $piezasNodo1_2 . ';';
        $productosNodo2 = 2 . '=' . $productoNodo2_2 . '=' . $piezasNodo2_2 . ';';
        $productosNodo3 = 3 . '=' . $productoNodo3_2 . '=' . $piezasNodo3_2 . ';';
        $productosNodo4 = 4 . '=' . $productoNodo4_2 . '=' . $piezasNodo4_2 . ';';
        $productosNodo5 = 5 . '=' . $productoNodo5_2 . '=' . $piezasNodo5_2 . ';';
        $productosNodo6 = 6 . '=' . $productoNodo6_2 . '=' . $piezasNodo6_2;

        $productosCadena2 = '0=0=0' . ';' . $productosNodo1 . $productosNodo2 . $productosNodo3 . $productosNodo4 . $productosNodo5 . $productosNodo6;
        //echo "'" . $productosCadena2 . "'<br>";
        $productosNodo1 = 1 . '=' . $productoNodo1_3 . '=' . $piezasNodo1_3 . ';';
        $productosNodo2 = 2 . '=' . $productoNodo2_3 . '=' . $piezasNodo2_3 . ';';
        $productosNodo3 = 3 . '=' . $productoNodo3_3 . '=' . $piezasNodo3_3 . ';';
        $productosNodo4 = 4 . '=' . $productoNodo4_3 . '=' . $piezasNodo4_3 . ';';
        $productosNodo5 = 5 . '=' . $productoNodo5_3 . '=' . $piezasNodo5_3 . ';';
        $productosNodo6 = 6 . '=' . $productoNodo6_3 . '=' . $piezasNodo6_3;

        $productosCadena3 = '0=0=0' . ';' . $productosNodo1 . $productosNodo2 . $productosNodo3 . $productosNodo4 . $productosNodo5 . $productosNodo6;
        //echo "'" . $productosCadena3 . "'<br>";
        /*== obtiene país de los nodos 'Solo importa el del nivel 0' ==*/
        $pais = 0 . '=' . $paisPadre . ';' . 1 . '=' . $paisPadre . ';' . 2 . '=' . $paisPadre . ';' . 3 . '=' . $paisPadre . ';' . 4 . '=' . $paisPadre . ';' . 5 . '=' . $paisPadre . ';' . 6 . '=' . $paisPadre;
        //echo "'" . $pais . "'<br>";
        /*== Obtener rangos de los nodos ==*/
        $rangos = 0 . '=' . $rangoPadre . ';' . 1 . '=' . $rangoNodo1 . ';' . 2 . '=' . $rangoNodo2 . ';' . 3 . '=' . $rangoNodo3 . ';' . 4 . '=' . $rangoNodo4 . ';' . 5 . '=' . $rangoNodo5 . ';' . 6 . '=' . $rangoNodo6;
        //echo "'" . $rangos . "'<br>";
        /*== obtiene nodos infleuncers ==*/
        $influencers = 0 . '=' . 0 . ';' . 1 . '=' . $influencerNodo1 . ';' . 2 . '=' . $influencerNodo2 . ';' . 3 . '=' . $influencerNodo3 . ';' . 4 . '=' . $influencerNodo4 . ';' . 5 . '=' . $influencerNodo5 . ';' . 6 . '=' . $influencerNodo6;
        //echo "'" . $influencers . "'<br>"; exit;
        /*== Ejecuta el SP para extraer las bonificaciones ==*/
        $conexion=DB::connection('sqlsrv2');
            $bonos = $conexion->select("EXEC SP_CalculadoraPlanInfluencia '$productosCadena1', '$productosCadena2', '$productosCadena3', '$pais', '$rangos', '$influencers';");
        DB::disconnect('sqlsrv2');
        
        return $bonos;
    }

    public function quitarLetra($code){
        $code = str_replace("a","", $code);
        return $code;
    }

    public function calcGetPDF(Request $request){
        $moneda = $request->moneda;

        $nodo0 = $request->nodo0;
        $nodo0 = explode('|', $nodo0);

        $nodo1 = $request->nodo1;
        $nodo1 = explode('|', $nodo1);

        $nodo2 = $request->nodo2;
        $nodo2 = explode('|', $nodo2);

        $nodo3 = $request->nodo3;
        $nodo3 = explode('|', $nodo3);

        $nodo4 = $request->nodo4;
        $nodo4 = explode('|', $nodo4);

        $nodo5 = $request->nodo5;
        $nodo5 = explode('|', $nodo5);

        $nodo6 = $request->nodo6;
        $nodo6 = explode('|', $nodo6);
        //return $nodo1;
        $nombre = $nodo0[2];
        $pdf = \PDF::loadView('calculadora.pdf', compact('nodo0', 'nodo1', 'nodo2', 'nodo3', 'nodo4', 'nodo5', 'nodo6', 'moneda'));
        return $pdf->stream('Simulación de ' . $nombre . '.pdf');
    }
}
