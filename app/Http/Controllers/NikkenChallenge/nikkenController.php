<?php

namespace App\Http\Controllers\NikkenChallenge;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//USAR LA BD con la carpeta App
use App;
use DB; //CONECTAR A  LA BD SQL SERVER


/* PDF */   
use App\Note;
use Redirect;
use PDF;
/* END PDF */ 

/* EXCEL */
use \yidas\phpSpreadsheet\Helper;


class nikkenController extends Controller
{
 public function nikkenChallenge(Request $request,$abi){
		
 
		//try {
 			$contador= 1;
		    $contadorPata1=0;
		    $contadorPata2=0;
		    $hoy = getdate();
			$day=$hoy['mday'];
			$month=$hoy['month'];
			$period = '202008';
			$exponente='';
			$abi = base64_decode($abi);


			//QUERY GENEALOGY CALC
			$queryGenealogy = DB::connection('sqlsrv2')->table('Jugadores_Mi_Red')
			    ->join('Conteo_NKChallenge', 'Jugadores_Mi_Red.associateid', '=', 'Conteo_NKChallenge.associateid')
				->select('Jugadores_Mi_Red.sponsorid','Jugadores_Mi_Red.associateid','Jugadores_Mi_Red.level','Jugadores_Mi_Red.Name','Jugadores_Mi_Red.Owner','Jugadores_Mi_Red.e_mail','Conteo_NKChallenge.QTY')
				->where('Conteo_NKChallenge.QTY', '<' ,'3')
				->where('Jugadores_Mi_Red.Periodo','=', $period)
				->where('Jugadores_Mi_Red.Owner','=', $abi)
				->get();
			

			//Query Cantidad de articulos comprados por ABI
			$items=DB::connection('sqlsrv2')->table('Detail_NKCHallenge')
			->select(DB::raw('SUM(Qty) as qty'))
			->where('Associateid','=', $abi)
			->where('Period','=', $period)
		    ->first(); 
            
			$quantity = $items->qty;

			$conexion=DB::connection('sqlsrv2');
			//QUERY OBTENER FECHA DE ACTUALIZACIÓN
			$queryDateUpdate=$conexion->table('Last_Update_NikkenChallenge')
			->first(); 
			$update = $queryDateUpdate->Last_Update;

			

			//Condición evalua si no ha comprado ningún artículo
			if (!$quantity)
            {
            	$quantity = 0;
            	$queryKinyaDetail= [];
            	$queryKinyaLV1Detail= [];
            	$queryKinyaLV2Detail= [];
            	$queryKintai= [];
            	//$queryGenealogy= [];
  				$PriceKinya = 0;	
				$PriceKintai = 0;
				$Total=0;
				$PriceKinyaPlus= 0;
				$PriceKintaiCountry= 0;
				$exponente='';
				$simboloPrecio='$';
            } else {
		
			
		//} catch (Exception $e) {

		//	echo $e->getMessage();
			
		//}
	
		
			$conexion=DB::connection('sqlsrv2');


		//Condición evalua si compro 3 articulos o más
		if ($quantity >= 3) {
			$Kinya = $conexion->table('Final_Result_NKChallenge')
				->select('Price_D1','Price_GP','Price_Nl','Kintai','Pais','Total_Amount')
				->where('Associateid','=', $abi)
				->where('period','=', $period)
				->first();
			$PriceKinya = number_format($Kinya->Price_D1,2);	
			$PriceKinyaPlusFirst = $Kinya->Price_GP;
			$PriceKinyaPlusSecond = $Kinya->Price_Nl;
			$PriceKintai = number_format($Kinya->Kintai,2);
			$PriceKintaiExponent = $Kinya->Kintai;
			$Country=$Kinya->Pais;
			if ($Country== 'CRI') {
				$simboloPrecio='₡';
			} else {
				$simboloPrecio='$';
			}
			$Total=number_format($Kinya->Total_Amount,2);
			$PriceKinyaPlus= number_format($PriceKinyaPlusFirst + $PriceKinyaPlusSecond,2);
		} else {
			$Kinya = $conexion->table('Detail_NKCHallenge')
				->select('Pais')
				->where('Associateid','=', $abi)
				->where('Period','=', $period)
				->first();
			$PriceKinya = 0;	
			$PriceKintai = 0;
			$Country=$Kinya->Pais;
			$Total=0;
			$PriceKinyaPlus= 0;
			if ($Country== 'CRI') {
				$simboloPrecio='₡';
			} else {
				$simboloPrecio='$';
			}
		}

			//QUERY PRECIO KINTAI POR PAIS
			$queryPKCountry = $conexion->table('ItemNikkenChallenge')
				->distinct('Kintai')
				->where('Country','=', $Country)
				->first();
			$PriceKintaiCountry = number_format($queryPKCountry->Kintai,2);
			$PriceKintaiCountryExponent = $queryPKCountry->Kintai;
if ($quantity >= 3) {
			if ($PriceKintaiExponent == $PriceKintaiCountryExponent) {
				$exponente= 2;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 2) {
				$exponente= 3;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 3) {
				$exponente= 4;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 4) {
				$exponente= 5;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 5) {
				$exponente= 6;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 6) {
				$exponente= 7;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 7) {
				$exponente= 8;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 8) {
				$exponente= 9;
			} elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 9) {
				$exponente= 10;
			}
}

			//QUERY MINIMO DE CANTIDAD GANADA
			$queryKintai = $conexion->table('ItemNikkenChallenge')
				->select('Kinya')
				->where('ItemCode','=', '13651a')
				->where('Country','=', $Country)
				->first();
			$PriceKintaiPIW = $queryKintai->Kinya;
			$PriceKintaiPIW=number_format($PriceKintaiPIW * 3,2);

			//QUERY DATOS DETALLE KINYA
		/*	$queryKinyaDetail = $conexion->table('Detail_NKChallenge')
				->select('Associateid','Ordernum','Itemcode','TipDoc','Qty')
				//->where('TipDoc','=', 'OV')
				->where('Associateid','=', $abi)
				->get(); */

			//QUERY DATOS DETALLE KINYA
			$queryKinyaDetail = $conexion->table('EdoCta_NikkenChallenge_KinYa')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				//->where('TipDoc','=', 'OV')
				->where('Associateid','=', $abi)
				->where('Periodo','=', $period)
				->get();

			//QUERY DATOS DETALLE KINYA+ LV1
		/*	$queryKinyaLV1Detail = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
			    ->join('Pata_NikkenChallenge', 'Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.associateid')
				->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', $period)
				->get(); */

			$queryKinyaLV1Detail = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
               ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL1.owner');
               })
               ->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
			    ->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', $period)
              ->get(); 

			//QUERY DATOS DETALLE KINYA+ LV2
			$queryKinyaLV2Detail = $conexion->table('EdoCta_NikkenChallenge_KinYaL2')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL2.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL2.owner');
               })
				->select('EdoCta_NikkenChallenge_KinYaL2.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL2.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL2.Periodo','=', $period)
				->get();

			//QUERY DATOS DETALLE KINTAI
			if($PriceKintai == 0){


            	$postSubtitle = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL1.owner');
               })
				->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', $period);


			$queryKintai = $conexion->table('EdoCta_NikkenChallenge_KinYaL2')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL2.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL2.owner');
               })
				->select('EdoCta_NikkenChallenge_KinYaL2.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL2.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL2.Periodo','=', $period)
   				->union($postSubtitle)
   				->get();


			} else {


			$queryKintai = $conexion->table('EdoCta_NikkenChallenge_KinTai')
			    //->join('Pata_NikkenChallenge', 'Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinTai.owner')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinTai.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinTai.owner');
               })
				->select('EdoCta_NikkenChallenge_KinTai.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinTai.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinTai.Periodo','=', $period)
				->get();
			}



			//Ejecuta  para determinar si abi se encuentra 2 veces en NIVEL 1
			$queryKinyaPlusPataLevel1 = $conexion->table('Nivel1_NikkenChallenge')
				->select(DB::raw('COUNT(pata) as pata'))
				->where('owner','=', $abi)
				->where('periodo','=', $period)
				->first();
				$contadorPata1 = $queryKinyaPlusPataLevel1->pata;

			//Ejecuta  para determinar si abi se encuentra 2 veces en NIVEL 2
			$queryKinyaPlusPataLevel2 = $conexion->table('Nivel2_NikkenChallenge')
			   ->select(DB::raw('COUNT(pata) as pata'))
				->where('owner','=', $abi)
				->where('periodo','=', $period)
				->first();
				$contadorPata2 = $queryKinyaPlusPataLevel2->pata; 


	    }
       \DB::disconnect('sqlsrv2');
       

		//TODO validar que existan registros
		//	$validateitems = (!$items)?'No hay registros'

		$titleKinya = '../img/logo_kinya.png';
		$titleKinyaplus = '../img/logo_kinyaplus.png';
		$titleKintai = '../img/logo_kintai.png';

		//Condiciones que enviaran las variables correspondientes a index.blade, envia por escenarios (Kinya(1,2,3),Kinya+(1,2),Kintai)
		if ($quantity == 0) {
			$percentKinya= '0';
			$amountKinya= '0';
			$simulatorKinya= 'Puedes ver ganancias comprando 3 artículos o  más. ¡No te quedes fuera!.';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar.';
			$chartKinya='NikkenChallengeChart_Kinya_3_0';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		} elseif ($quantity == 1) {
			$percentKinya= '34';
			$amountKinya= '0';
			$simulatorKinya= 'Puedes ver mayores ganancias comprando 3 artículos o  más. ¡No te quedes fuera! Puedes ganar '.$simboloPrecio.$PriceKintaiPIW.' o más!!.';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
			$chartKinya='NikkenChallengeChart_Kinya_3_1';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		} elseif ($quantity == 2) {
			$percentKinya= '67';
			$amountKinya= '0';
			$simulatorKinya= 'Puedes ver mayores ganancias comprando 3 artículos o  más. ¡No te quedes fuera! Puedes ganar '.$simboloPrecio.$PriceKintaiPIW.' o más!!.';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
			$chartKinya='NikkenChallengeChart_Kinya_3_2';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		} elseif ($quantity >= 3) {
			$percentKinya= '100';
			$amountKinya= $PriceKinya;
			$simulatorKinya= '¡No te detengas! Sigue ganando, entre más unidades compres, más ganas.';
			$percentGP= '0';			
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
			$chartKinya='NikkenChallengeChart_Kinya_3_3';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
			
				//Condicion evalua primer escenario Kinya+(1 persona cumplio con la compra de 3 articulos)
				if ($PriceKinyaPlusFirst > '0') { 
					$percentGP= '50';
					$amountGP= $PriceKinyaPlus;
					$simulatorGP= '¡Las compras de tu red te dan ganancias! Invita a alguien más a comprar 3 o más productos y tú puedes ganar hasta '.$simboloPrecio.$PriceKintaiPIW.'.';
					$percentKintai= '0';
					$amountKintai= '0';
					$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
					$chartGP='NikkenChallengeChart_KinyaPlus_2_1';
					$chartKintai='NikkenChallengeChart_Kintai_3_0';
				} 
				
				//Condicion evalua segundo escenario Kinya+ y primer escenario de Kintai(1 línea cumplio con la compra de 3 articulos)
				if ($PriceKinyaPlusSecond > '0') { 
					$percentGP= '100';
					$amountGP= $PriceKinyaPlus;
					$simulatorGP= '¡Las compras de tu red te dan ganancias! Invita a alguien más a comprar 3 o más productos y tú puedes ganar hasta '.$simboloPrecio.$PriceKintaiPIW.'.';
					$percentKintai= '34';
					$amountKintai= '0';
					$simulatorKintai= 'Tienes una línea que ha logrado "KinYa+", si logras que otras dos líneas lo hagan, podrás obtener una ganancia de '.$simboloPrecio.$PriceKintaiCountry.'.';
					$chartGP='NikkenChallengeChart_KinyaPlus_2_2';
					$chartKintai='NikkenChallengeChart_Kintai_3_1';
				} 

				//Condicion evalua segundo escenario Kintai(2 líneas cumplieron con la compra de 3 articulos)
				if ($contadorPata1==2  && $contadorPata2==2) {
					$percentGP= '100';
					$amountGP= $PriceKinyaPlus;
					$simulatorGP= '¡No te detengas! Por cada nueva compra, ¡Tu ganancia incrementa!';
					$percentKintai= '67';
					$amountKintai= '0';
					$simulatorKintai= 'Tienes dos líneas que han logrado "KinYa+", si logras que otra línea lo haga, podrás obtener una ganancia de '.$simboloPrecio.$PriceKintaiCountry.'.';
					$chartGP='NikkenChallengeChart_KinyaPlus_2_2';
					$chartKintai='NikkenChallengeChart_Kintai_3_2';
				}
 
 				//Condicion evalua tercer escenario Kintai(3 líneas cumplieron con la compra de 3 articulos) GANADOR KINTAI
				if ($PriceKintai > '0') { 
					$percentGP= '100';
					$amountGP= $PriceKinyaPlus;
					$simulatorGP= '¡Las compras de tu red te dan ganancias! Invita a alguien más a comprar 3 o más productos.';
					$percentKintai= '100';
					$amountKintai= $PriceKintai;
					$simulatorKintai= '¡Has vencido en el NIKKEN Challenge! Aún puedes obtener más ganancias si continúas trabajando. Haz otro KinTai y gana hasta '.$simboloPrecio.$PriceKintaiCountry.'.';
					$chartGP='NikkenChallengeChart_KinyaPlus_2_2';
					$chartKintai='NikkenChallengeChart_Kintai_3_3';	
					$contador=$contador + 1;
					echo "<input type='hidden' id='winner' value='1'>";	
				}
		} else {
			$percentKinya= '0';
			$amountKinya= '0';
			$simulatorKinya= '';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= '';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '';
			$chartKinya='NikkenChallengeChart_Kinya_3_0';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		}

		echo "<input type='hidden' id='contador' value=$contador>";


		// $percentD1 = ($quantity == 0)?'0': ($quantity == 1) ?'34':($quantity == 2)?'67':($quantity >= 3)?'100':'0';
		// $amount = ($quantity == 0)?'0': ($quantity == 1) ?'0':($quantity == 2)?'0':($quantity >= 3)?'500':'0';
		// $image = ($quantity == 0)?'../img/3-0.png': ($quantity == 1) ?'../img/3-1.png':($quantity == 2)?'../img/3-2.png':($quantity >= 3)?'../img/3-3.png':'../img/3-0.png';

		$data['Section1'] = ['titulo' => $titleKinya, 'quantity'=>$quantity, 'percent' => $percentKinya, 'amount' => $amountKinya, 'simulator' => $simulatorKinya, 'chart' => $chartKinya, 'detail' => "btn peach-gradient btn-lg waves-effect waves-light",'id' => "DetailKinya",'click' => "DetailKinya()",'exponente'=> '','simboloPrecio' => $simboloPrecio];
		$data['Section2'] = ['titulo' => $titleKinyaplus, 'quantity'=>'', 'percent' => $percentGP, 'amount' => $amountGP, 'simulator' => $simulatorGP, 'chart' => $chartGP, 'detail' => "btn btn-light-green btn-lg waves-effect waves-light",'id' => "DetailKinyaPlus",'click' => "DetailKinyaPlus()",'exponente'=> $exponente, 'simboloPrecio' => $simboloPrecio ];
		$data['Section3'] = ['titulo' => $titleKintai, 'quantity'=>'', 'percent' => $percentKintai, 'amount' => $amountKintai, 'simulator' => $simulatorKintai, 'chart' => $chartKintai, 'detail' => "btn aqua-gradient btn-lg waves-effect waves-light",'id' => "DetailKintai",'exponente'=> $exponente, 'simboloPrecio' => $simboloPrecio ];


		return view('layouth.index',['data'=>$data,'queryKinyaDetail' => $queryKinyaDetail, 'queryKinyaLV1Detail' => $queryKinyaLV1Detail, 'queryKinyaLV2Detail' => $queryKinyaLV2Detail, 'queryKintai' => $queryKintai, 'queryGenealogy' => $queryGenealogy, 'Total'=> $Total, 'day'=> $day,'PriceKintaiCountry'=> $PriceKintaiCountry,'PriceKintai'=> $PriceKintai,'PriceKinyaPlus'=>$PriceKinyaPlus, 'PriceKinya'=>$PriceKinya,'quantity'=> $quantity, 'update'=> $update, 'abi' => $abi,'exponente'=> $exponente, 'simboloPrecio' => $simboloPrecio]);


	}


	public function printPDF(Request $request,$abi){  
				$conexion=DB::connection('sqlsrv2');
		        $quantity = 0;
            	$queryKinyaDetail= [];
            	$queryKinyaLV1Detail= [];
            	$queryKinyaLV2Detail= [];
            	$queryKintai= [];
            	//$queryGenealogy= [];
  				$PriceKinya = 0;	
				$PriceKintai = 0;
				$Total=0;
				$PriceKinyaPlus= 0;
				$PriceKintaiCountry= 0;
				$abi = base64_decode($abi);
				//$abi='2599203';
				//$period = '201903';
				$period=$_GET["period"];
				$year = substr($period,0,4);   
	            $mes = intval(substr($period, 4,6));
	            if ($mes == '01') {
					$mes='ENERO';
				} elseif ($mes == '02') {
					$mes='FEBRERO';
				} elseif ($mes == '03') {
					$mes='MARZO';
				} elseif ($mes == '04') {
					$mes='ABRIL';
				} elseif ($mes == '05') {
					$mes='MAYO';
				} elseif ($mes == '06') {
					$mes='JUNIO';
				} elseif ($mes == '07') {
					$mes='JULIO';
				} elseif ($mes == '08') {
					$mes='AGOSTO';
				} elseif ($mes == '09') {
					$mes='SEPTIEMBRE';
				} elseif ($mes == '10') {
					$mes='OCTUBRE';
				} elseif ($mes == '11') {
					$mes='NOVIEMBRE';
				} elseif ($mes == '12') {
					$mes='DICIEMBRE';
				} 

		        //echo "GIGA";
		
		$Datos = $conexion->table('Historico_Result_NKChallenge')
				->select('Price_D1','Price_GP','Price_Nl','Kintai','Pais','Total_Amount')
				->where('Associateid','=', $abi)
				->where('period','=', $period)
				->first();

			if (!$Datos) {
				$quantity = 0;
            	$queryKinyaDetail= [];
            	$queryKinyaLV1Detail= [];
            	$queryKinyaLV2Detail= [];
            	$queryKintai= [];
            	//$queryGenealogy= [];
  				$PriceKinya = 0;	
				$PriceKintai = 0;
				$Total=0;
				$PriceKinyaPlus= 0;
				$PriceKintaiCountry= 0;
				$abi='12634003';
				$period = '201903';
				$year = substr($period,0,4);   
	            $mes = intval(substr($period, 4,6));
	            $Country="";
	            $CountryName="";
	            $name="";
	            $simboloPrecio="";
			}else{
			
				
			$PriceKinya = number_format($Datos->Price_D1,2);	
			$PriceKinyaPlusFirst = $Datos->Price_GP;
			$PriceKinyaPlusSecond = $Datos->Price_Nl;
			$PriceKintai = number_format($Datos->Kintai,2);
			$Country=$Datos->Pais;
			$Total=number_format($Datos->Total_Amount,2);
			$PriceKinyaPlus= number_format($PriceKinyaPlusFirst + $PriceKinyaPlusSecond,2);

			switch ($Country)
						{
   					 case 'COL': 
   					     $CountryName='COLOMBIA';
   					     $simboloPrecio='$';
   					     break;
					
   					 case 'CRI': 
   					     $CountryName='COSTA RICA';
   					     $simboloPrecio='¢';
   					     break;
					
   					 case 'ECU': 
   					     $CountryName='ECUADOR';
   					     $simboloPrecio='$';
       					break;
					
   					 case 'GTM': 
   					     $CountryName='GUATEMALA';
   					     $simboloPrecio='$';
   					     break;
					
  					  case 'LAT': 
  					      $CountryName='MÉXICO';
  					      $simboloPrecio='$';
  					      break;
					
  					  case 'PAN': 
  					      $CountryName='PANAMÁ';
  					      $simboloPrecio='$';
  					      break;
					
  					  case 'PER': 
   					      $CountryName='PERÚ';
   					      $simboloPrecio='$';
   					     break;
   					  case 'SLV': 
					  	  $CountryName='SALVADOR';
					  	  $simboloPrecio='$';
   					     break;	
   					   case 'CHL': 
					  	  $CountryName='CHILE';
					  	  $simboloPrecio='$';
   					     break;				
   					 default:
   					 	  $CountryName=' ';
   					     break;
						}

			

		//QUERY DATOS DETALLE KINYA
			$queryKinyaDetail = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYa')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				//->where('TipDoc','=', 'OV')
				->where('Associateid','=', $abi)
				->where('Periodo','=', $period)
				->get();


			//QUERY DATOS DETALLE KINYA+ LV1
			$queryKinyaLV1Detail = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYaL1')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				->where('Owner','=', $abi)
				->where('Periodo','=', $period)
				->get();

			//QUERY DATOS DETALLE KINYA+ LV2
			$queryKinyaLV2Detail = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYaL2')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				->where('Owner','=', $abi)
				->where('Periodo','=', $period)
				->get();

			//QUERY DATOS DETALLE KINTAI
			$queryKintai = $conexion->table('Historico_EdoCta_NikkenChallenge_KinTai')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				->where('Owner','=', $abi)
				->where('Periodo','=', $period)
				->get();

			//QUERY PRECIO KINTAI POR PAIS
			$queryPKCountry = $conexion->table('ItemNikkenChallenge')
				->distinct('Kintai')
				->where('Country','=', $Country)
				->first();
			$PriceKintaiCountry = number_format($queryPKCountry->Kintai,2);

			//NOMBRE DE ASESOR
			$queryName = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYa')
				->select('Nombre')
				->where('Associateid','=', $abi)
				->where('Periodo','=', $period)
				->first();
			
			$name = $queryName->Nombre;

			}

			$pdf = \PDF::loadView('estadocuenta.portada', [
			'year' => $year,
			'mes' => $mes,	
			'abi' => $abi,
			'PriceKinya' => $PriceKinya,
			'PriceKinyaPlus' => $PriceKinyaPlus,
		    'PriceKintai' => $PriceKintai,
		    'queryKinyaDetail' => $queryKinyaDetail,
		    'queryKinyaLV1Detail' => $queryKinyaLV1Detail,
		    'queryKinyaLV2Detail' => $queryKinyaLV2Detail,
		    'queryKintai' => $queryKintai,
		    'Total'=> $Total,
		    'Country'=> $Country,
		    'CountryName'=> $CountryName,
		    'PriceKintaiCountry' => $PriceKintaiCountry,
		    'name' => $name,
		    'simboloPrecio' => $simboloPrecio
			]);

			return $pdf->stream();


	}




	public function ExcelKinya(Request $request,$abi){
		$fileName='Kinya-'.$abi;
		$conexion=DB::connection('sqlsrv2');
		$period = '202008';


        //$abi = '12999403';
		

		//QUERY DATOS DETALLE KINYA
		$queryKinyaDetail = $conexion->table('EdoCta_NikkenChallenge_KinYa')
		->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
		->where('Associateid','=', $abi)
		->where('Periodo','=', $period)
		->get();

		   //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryKinyaDetail) {
         
            $excel->sheet('listado', function($sheet) use ($queryKinyaDetail) {

               
                // === Definimos estilos base ===
                $sheet->setBorder('A1:J1', 'thin'); //Colocamos borde a los encabezados
                $sheet->setHeight(7, 25); //Especificamos el tamaño de los encabezados
                //$sheet->mergeCells('B3:E3'); //Combinamos las columnas del título de la hoja
                

                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('CÓD. ASESOR');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });


                $sheet->cell('B1', function($cell){
                    $cell->setValue('NOMBRE');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('# DE DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });


                $sheet->cell('D1', function($cell){
                    $cell->setValue('DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('FECHA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });

                $sheet->cell('F1', function($cell){
                    $cell->setValue('ITEM');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });



                $sheet->cell('G1', function($cell){
                    $cell->setValue('DESCRIPCIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });



                $sheet->cell('H1', function($cell){
                    $cell->setValue('CANTIDAD');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });


                $sheet->cell('I1', function($cell){
                    $cell->setValue('BONIFICACIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });



                $sheet->cell('J1', function($cell){
                    $cell->setValue('TOTAL BONIFICACIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#FDB45C');
                });


              // Mostramos los registros
                foreach ($queryKinyaDetail as $idx => $item) 
                {
                    $idx = ($idx  + 2); // Indica la posición de la fila en el documento

                    // === Iniciamos asignación de celdas ===

                    // Asignamos el NOMBRE
                    $sheet->cell('A'.$idx, function($cell) use ($item) {
                      $cell->setValue($item->Associateid);
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('B'.$idx, function($cell) use ($item) {
                        
                        $cell->setValue($item->Nombre);
                       
                    });

                    // Asignamos el status
                    $sheet->cell('C'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->OrderNum);
                    });

                    // Asignamos el status
                    $sheet->cell('D'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->TipDoc);
                    });


                    // Asignamos el status
                    $sheet->cell('E'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->OrderDate);
                    });


					// Asignamos el status
                    $sheet->cell('F'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Itemcode);
                    });


                    // Asignamos el status
                    $sheet->cell('G'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Descripcion);
                    });


					// Asignamos el status
                    $sheet->cell('H'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Qty);
                    });


					// Asignamos el status
                    $sheet->cell('I'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->Bonificacion);
                    });


					// Asignamos el status
                    $sheet->cell('J'.$idx, function($cell) use ($item) {
                        $cell->setValue($item->TotalBonificacion);
                    });

                    

                    
                }

            });

        })->export('xls');


	}




	public function ExcelKinyaPlus(Request $request,$abi){
		$fileName='Kinya+'.$abi;
		$conexion=DB::connection('sqlsrv2');
		$period = '202008';


        //$abi = '12999403';
		

		//QUERY DATOS DETALLE KINYA+ LV1
		$queryKinyaLV1Detail = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
               ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL1.owner');
               })
               ->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
			    ->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', $period)
              ->get();

		//QUERY DATOS DETALLE KINYA+ LV2

			$queryKinyaLV2Detail = $conexion->table('EdoCta_NikkenChallenge_KinYaL2')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL2.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL2.owner');
               })
				->select('EdoCta_NikkenChallenge_KinYaL2.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL2.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL2.Periodo','=', $period)
				->get();

		   //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryKinyaLV1Detail,$queryKinyaLV2Detail) {
         
            $excel->sheet('listado', function($sheet) use ($queryKinyaLV1Detail,$queryKinyaLV2Detail) {

               
                // === Definimos estilos base ===
                $sheet->setBorder('A1:J1', 'thin'); //Colocamos borde a los encabezados
                $sheet->setHeight(7, 25); //Especificamos el tamaño de los encabezados
                //$sheet->mergeCells('B3:E3'); //Combinamos las columnas del título de la hoja
                

                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('CÓD. ASESOR');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });


                $sheet->cell('B1', function($cell){
                    $cell->setValue('NOMBRE');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('LÍNEA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('NIVEL');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('# DE DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('F1', function($cell){
                    $cell->setValue('DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('G1', function($cell){
                    $cell->setValue('FECHA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('H1', function($cell){
                    $cell->setValue('ITEM');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('I1', function($cell){
                    $cell->setValue('DESCRIPCIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('J1', function($cell){
                    $cell->setValue('CANTIDAD');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('K1', function($cell){
                    $cell->setValue('BONIFICACIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('L1', function($cell){
                    $cell->setValue('TOTAL BONIFICACIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $idx = 0;

              // Mostramos los registros
                foreach ($queryKinyaLV1Detail as $idx => $iteml1) 
                {
                    $idx = ($idx  + 2); // Indica la posición de la fila en el documento

                    // === Iniciamos asignación de celdas ===

                    // Asignamos el NOMBRE
                    $sheet->cell('A'.$idx, function($cell) use ($iteml1) {
                      $cell->setValue($iteml1->Associateid);
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('B'.$idx, function($cell) use ($iteml1) {
                        
                        $cell->setValue($iteml1->Nombre);
                       
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('C'.$idx, function($cell) use ($iteml1) {
                        
                        $cell->setValue($iteml1->pata);
                       
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('D'.$idx, function($cell) use ($iteml1) {
                        
                        $cell->setValue($iteml1->level);
                       
                    });

                    // Asignamos el status
                    $sheet->cell('E'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->OrderNum);
                    });

                    // Asignamos el status
                    $sheet->cell('F'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->TipDoc);
                    });


                    // Asignamos el status
                    $sheet->cell('G'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->OrderDate);
                    });


					// Asignamos el status
                    $sheet->cell('H'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->Itemcode);
                    });


                    // Asignamos el status
                    $sheet->cell('I'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->Descripcion);
                    });


					// Asignamos el status
                    $sheet->cell('J'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->Qty);
                    });


					// Asignamos el status
                    $sheet->cell('K'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->Bonificacion);
                    });


					// Asignamos el status
                    $sheet->cell('L'.$idx, function($cell) use ($iteml1) {
                        $cell->setValue($iteml1->TotalBonificacion);
                    });
                      
                }

                	$idx = $idx + 2;

                	// Especificamos los encabezados del documento LV2
                $sheet->cell('A'.$idx, function($cell){
                    $cell->setValue('CÓD. ASESOR');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });


                $sheet->cell('B'.$idx, function($cell){
                    $cell->setValue('NOMBRE');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('C'.$idx, function($cell){
                    $cell->setValue('LÍNEA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('D'.$idx, function($cell){
                    $cell->setValue('NIVEL');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('E'.$idx, function($cell){
                    $cell->setValue('# DE DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('F'.$idx, function($cell){
                    $cell->setValue('DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('G'.$idx, function($cell){
                    $cell->setValue('FECHA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('H'.$idx, function($cell){
                    $cell->setValue('ITEM');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('I'.$idx, function($cell){
                    $cell->setValue('DESCRIPCIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('J'.$idx, function($cell){
                    $cell->setValue('CANTIDAD');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('K'.$idx, function($cell){
                    $cell->setValue('BONIFICACIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $sheet->cell('L'.$idx, function($cell){
                    $cell->setValue('TOTAL BONIFICACIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#9CD634');
                });

                $idxn =  count($queryKinyaLV1Detail) + 3;

                // Mostramos los registros L2
                foreach ($queryKinyaLV2Detail as $idx2 => $iteml2) 
                {
                    $idxn = ($idxn + 1); // Indica la posición de la fila en el documento

                    // === Iniciamos asignación de celdas ===

                    // Asignamos el NOMBRE
                    $sheet->cell('A'.$idxn, function($cell) use ($iteml2) {
                      $cell->setValue($iteml2->Associateid);
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('B'.$idxn, function($cell) use ($iteml2) {
                        
                        $cell->setValue($iteml2->Nombre);
                       
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('C'.$idxn, function($cell) use ($iteml2) {
                        
                        $cell->setValue($iteml2->pata);
                       
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('D'.$idxn, function($cell) use ($iteml2) {
                        
                        $cell->setValue($iteml2->level);
                       
                    });

                    // Asignamos el status
                    $sheet->cell('E'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->OrderNum);
                    });

                    // Asignamos el status
                    $sheet->cell('F'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->TipDoc);
                    });


                    // Asignamos el status
                    $sheet->cell('G'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->OrderDate);
                    });


					// Asignamos el status
                    $sheet->cell('H'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->Itemcode);
                    });


                    // Asignamos el status
                    $sheet->cell('I'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->Descripcion);
                    });


					// Asignamos el status
                    $sheet->cell('J'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->Qty);
                    });


					// Asignamos el status
                    $sheet->cell('K'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->Bonificacion);
                    });


					// Asignamos el status
                    $sheet->cell('L'.$idxn, function($cell) use ($iteml2) {
                        $cell->setValue($iteml2->TotalBonificacion);
                    });

                      
                }



            });

        })->export('xls');


	}



	public function ExcelKintai(Request $request,$abi){
		$fileName='Kintai-'.$abi;
		$conexion=DB::connection('sqlsrv2');
		$period = '202008';


        //$abi = '12999403';
		

		$Kintai = $conexion->table('Final_Result_NKChallenge')
				->select('Kintai')
				->where('Associateid','=', $abi)
				->where('period','=', $period)
				->first();
			$PriceKintai = $Kintai->Kintai;


		//QUERY DATOS DETALLE KINTAI
		

			if($PriceKintai == 0){


            	$postSubtitle = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL1.owner');
               })
				->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', $period);


			$queryKintai = $conexion->table('EdoCta_NikkenChallenge_KinYaL2')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL2.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL2.owner');
               })
				->select('EdoCta_NikkenChallenge_KinYaL2.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL2.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL2.Periodo','=', $period)
   				->union($postSubtitle)
   				->get();


			} else {


			$queryKintai = $conexion->table('EdoCta_NikkenChallenge_KinTai')
			    //->join('Pata_NikkenChallenge', 'Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinTai.owner')
			    ->join('Pata_NikkenChallenge', function ($join) {
               $join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinTai.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinTai.owner');
               })
				->select('EdoCta_NikkenChallenge_KinTai.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinTai.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinTai.Periodo','=', $period)
				->get();
			}


		   //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryKintai) {
         
            $excel->sheet('listado', function($sheet) use ($queryKintai) {

               
                // === Definimos estilos base ===
                $sheet->setBorder('A1:J1', 'thin'); //Colocamos borde a los encabezados
                $sheet->setHeight(7, 25); //Especificamos el tamaño de los encabezados
                //$sheet->mergeCells('B3:E3'); //Combinamos las columnas del título de la hoja
                

                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('CÓD. ASESOR');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });


                $sheet->cell('B1', function($cell){
                    $cell->setValue('NOMBRE');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('LÍNEA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('NIVEL');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('# DE DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });


                $sheet->cell('F1', function($cell){
                    $cell->setValue('DOCUMENTO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });

                $sheet->cell('G1', function($cell){
                    $cell->setValue('FECHA');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });

                $sheet->cell('H1', function($cell){
                    $cell->setValue('ITEM');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });

                $sheet->cell('I1', function($cell){
                    $cell->setValue('DESCRIPCIÓN');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });

                $sheet->cell('J1', function($cell){
                    $cell->setValue('CANTIDAD');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#46BFBD');
                });


              // Mostramos los registros
                foreach ($queryKintai as $idx => $itemKintai) 
                {
                    $idx = ($idx  + 2); // Indica la posición de la fila en el documento

                    // === Iniciamos asignación de celdas ===

                    // Asignamos el NOMBRE
                    $sheet->cell('A'.$idx, function($cell) use ($itemKintai) {
                      $cell->setValue($itemKintai->Associateid);
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('B'.$idx, function($cell) use ($itemKintai) {
                        
                        $cell->setValue($itemKintai->Nombre);
                       
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('C'.$idx, function($cell) use ($itemKintai) {
                        
                        $cell->setValue($itemKintai->pata);
                       
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('D'.$idx, function($cell) use ($itemKintai) {
                        
                        $cell->setValue($itemKintai->level);
                       
                    });

                    // Asignamos el status
                    $sheet->cell('E'.$idx, function($cell) use ($itemKintai) {
                        $cell->setValue($itemKintai->OrderNum);
                    });

                    // Asignamos el status
                    $sheet->cell('F'.$idx, function($cell) use ($itemKintai) {
                        $cell->setValue($itemKintai->TipDoc);
                    });


                    // Asignamos el status
                    $sheet->cell('G'.$idx, function($cell) use ($itemKintai) {
                        $cell->setValue($itemKintai->OrderDate);
                    });


					// Asignamos el status
                    $sheet->cell('H'.$idx, function($cell) use ($itemKintai) {
                        $cell->setValue($itemKintai->Itemcode);
                    });


                    // Asignamos el status
                    $sheet->cell('I'.$idx, function($cell) use ($itemKintai) {
                        $cell->setValue($itemKintai->Descripcion);
                    });


					// Asignamos el status
                    $sheet->cell('J'.$idx, function($cell) use ($itemKintai) {
                        $cell->setValue($itemKintai->Qty);
                    });

                    
                }

            });

        })->export('xls');


	}


	public function ExcelJugadores(Request $request,$abi){
		$fileName='Jugadores-'.$abi;
		$conexion=DB::connection('sqlsrv2');
		$period = '202008';


        //$abi = '12999403';
		

		//QUERY JUGADORES
		$queryGenealogy = DB::connection('sqlsrv2')->table('Jugadores_Mi_Red')
			    ->join('Conteo_NKChallenge', 'Jugadores_Mi_Red.associateid', '=', 'Conteo_NKChallenge.associateid')
				->select('Jugadores_Mi_Red.sponsorid','Jugadores_Mi_Red.associateid','Jugadores_Mi_Red.level','Jugadores_Mi_Red.Name','Jugadores_Mi_Red.Owner','Jugadores_Mi_Red.e_mail','Conteo_NKChallenge.QTY')
				->where('Conteo_NKChallenge.QTY', '<' ,'3')
				->where('Jugadores_Mi_Red.Periodo','=', $period)
				->where('Jugadores_Mi_Red.Owner','=', $abi)
				->get();

		   //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryGenealogy) {
         
            $excel->sheet('listado', function($sheet) use ($queryGenealogy) {

               
                // === Definimos estilos base ===
                $sheet->setBorder('A1:J1', 'thin'); //Colocamos borde a los encabezados
                $sheet->setHeight(7, 25); //Especificamos el tamaño de los encabezados
                //$sheet->mergeCells('B3:E3'); //Combinamos las columnas del título de la hoja
                

                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('PATROCINADOR');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ff3547');
                });


                $sheet->cell('B1', function($cell){
                    $cell->setValue('CÓD. ASESOR');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ff3547');
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('NOMBRE');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ff3547');
                });


                $sheet->cell('D1', function($cell){
                    $cell->setValue('NIVEL DE RED');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ff3547');
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('CANTIDAD');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ff3547');
                });

                $sheet->cell('F1', function($cell){
                    $cell->setValue('CORREO');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ff3547');
                });



              // Mostramos los registros
                foreach ($queryGenealogy as $idx => $itemgenealogy) 
                {
                    $idx = ($idx  + 2); // Indica la posición de la fila en el documento

                    // === Iniciamos asignación de celdas ===

                    // Asignamos el NOMBRE
                    $sheet->cell('A'.$idx, function($cell) use ($itemgenealogy) {
                      $cell->setValue($itemgenealogy->sponsorid);
                    });

                    // Asignamos EL TIPO
                    $sheet->cell('B'.$idx, function($cell) use ($itemgenealogy) {
                        
                        $cell->setValue($itemgenealogy->associateid);
                       
                    });

                    // Asignamos el status
                    $sheet->cell('C'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->Name);
                    });

                    // Asignamos el status
                    $sheet->cell('D'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->level);
                    });


                    // Asignamos el status
                    $sheet->cell('E'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->QTY);
                    });


					// Asignamos el status
                    $sheet->cell('F'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->e_mail);
                    });

                    
                }

            });

        })->export('xls');


	} 

 /* GENERADOR DE URLS NIKKENCHALLENGE*/
	public function nikkenChallengeUrl(){

		ini_set('max_execution_time', 300); 
	 	$conexion=DB::connection('sqlsrvInconcert');

	 	$abiurl = $conexion->table('DistributorMasterData')
				->select('NumeroAbi')
                ->get();

		foreach ($abiurl as $item){
			//echo("el abi: ".$item->NumeroAbi." accede a su link: https://services.nikken.com.mx/nikkenChallenge/".base64_encode($item->NumeroAbi)."<br>");	
			
            $conexion->table('DistributorMasterData')
            ->where('NumeroAbi', $item->NumeroAbi)
            ->where('NikkenChallenge', '')
            ->update(['NikkenChallenge' => "https://services.nikken.com.mx/nikkenChallenge/".base64_encode($item->NumeroAbi)]);
             
		} 

		\DB::disconnect('sqlsrvInconcert');

	}



	/*public function ExcelJugadores(){
		$fileName='Jugadores';
		$conexion=DB::connection('sqlsrv2');
		$period = '201903';
        //$abi = '12999403';
		Helper::newSpreadsheet();

		//QUERY JUGADORES
		$queryGenealogy = $conexion->table('Jugadores_Mi_Red')
			    ->join('Conteo_NKChallenge', 'Jugadores_Mi_Red.associateid', '=', 'Conteo_NKChallenge.associateid')
				->select('Jugadores_Mi_Red.sponsorid','Jugadores_Mi_Red.associateid','Jugadores_Mi_Red.level','Jugadores_Mi_Red.Name','Jugadores_Mi_Red.Owner','Jugadores_Mi_Red.e_mail','Conteo_NKChallenge.QTY')
				->where('Conteo_NKChallenge.QTY', '<' ,'3')
				->where('Jugadores_Mi_Red.Periodo','=', $period)
				->where('Jugadores_Mi_Red.Owner','=', $abi)
				->get();


		Helper::newSpreadsheet()
		->setSheet(0, 'Sheet')
		->addRow([
		['value'=>'PATROCINADOR', 'width'=>25, 'bold'=>true], 
		['value'=>'CÓD. ASESOR', 'width'=>25, 'bold'=>true], 
		['value'=>'NOMBRE', 'width'=>25, 'bold'=>true], 
		['value'=>'NIVEL DE RED', 'width'=>25, 'bold'=>true], 
		['value'=>'CANTIDAD', 'width'=>25, 'bold'=>true],
		['value'=>'CORREO', 'width'=>25, 'bold'=>true]
		])->setStyle([
		'font' => [
		'bold' => true,
		'color' => ['argb' => 'FFFFFFFF'] 
		],
		'alignment' => ['horizontal' => 'center'],
		'borders' => [
		'inside' => ['borderStyle' => 'hair'],
		'outline' => ['borderStyle' => 'thin'],
		],
		'fill' => [
		'fillType' => 'solid',
		'startColor' => ['argb' => '25318092'],
		],
		]);
		// Get the PhpSpreadsheet object created by Helper
		$objSpreadsheet = Helper::getSpreadsheet();


		// Get the actived sheet object created by Helper
		$objSheet = Helper::getSheet();

		foreach ($queryGenealogy as $idx => $itemgenealogy) 
		{
		$idx = ($idx + 2); // Indica la posición de la fila en el documento

		$objSheet->setCellValue('A'.$idx, $itemgenealogy->sponsorid ); //ASIGANMOS EL PATROCINADOR
		$objSheet->setCellValue('B'.$idx, $itemgenealogy->associateid); //ASIGNAMOS EL CÓD. ASESOR
		$objSheet->setCellValue('C'.$idx, $itemgenealogy->Name); //ASIGNAMOS EL NOMBRE
		$objSheet->setCellValue('D'.$idx, $itemgenealogy->level); //ASIGNAMOS EL NIVEL DE RED
		$objSheet->setCellValue('E'.$idx, $itemgenealogy->QTY); //ASIGNAMOS EL CANTIDAD
		$objSheet->setCellValue('F'.$idx, $itemgenealogy->e_mail); //ASIGNAMOS EL CORREO

		}


		//INDICAMOS QUE EXPORTAREMOS EL ARCHIVO
		Helper::output($fileName);
	}
*/



	}
