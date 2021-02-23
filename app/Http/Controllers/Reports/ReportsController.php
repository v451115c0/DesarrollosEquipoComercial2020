<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ReportsController extends Controller{
    public function login(Request $request){
        return view('Reports.Login.login');
    }

    public function reports(Request $request){
        return view('Reports.reports');
    }

    public function Ventas(Request $request){
        $period = $request->period;
        $dates = $request->dates;

        //$dates = "01/11/2021 - 01/19/2021.";
        $array_dates = explode("-",$dates);
        $array_have_two_dates = count($array_dates);
        $rangofech1="";
        $rangofech2="";
        $rangofech1=trim($array_dates[0]);
        $rangofech2=trim($array_dates[1]);

        $fech1= explode("/", $rangofech1);
        $dia1=$fech1[1];
        $mes1=$fech1[0];
        $anio1=$fech1[2];

        $fech2= explode("/", $rangofech2);
        $dia2=$fech2[1];
        $mes2=$fech2[0];
        $anio2=$fech2[2];

        $rangofecha1=$anio1."-".$mes1."-".$dia1;
        $rangofecha2=$anio2."-".$mes2."-".$dia2;

        if ($array_have_two_dates == 2) {
            $conection = \DB::connection('sqlsrv5');

            $ventas = $conection->select("SELECT * FROM Report_Sales($period)WHERE orderDate between('$rangofecha1') and('$rangofecha2') order by orderdate asc");
            //$ventas = $conection->select("SELECT * FROM nikkenla_incorporation.cat_shirts WHERE pais = 'CHL' AND genero = '$gender' ");
            //select *from Report_Sales(202012)WHERE ORderDate between('2020-12-14') and('2020-12-20') order by OrderDate,Pais
            \DB::disconnect('sqlsrv5');
            $data = [
                'data' => $ventas,
            ];
            return $data;
            //return $ventas;
        }
    }
}
