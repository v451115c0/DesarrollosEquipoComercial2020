<?php

namespace App\Http\Controllers\Retos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

date_default_timezone_set('America/Mexico_City');

class kaizenController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $NombreReto = "Equipo Kaizen";
        $periodo = date('Ym');
        $info = 'Kaizen_Banner.png';
        $mensaje = "No cumples con los requisitos para este programa.";
        $conection = \DB::connection('sqlsrv5');
            $wintaishi = $conection->select("SELECT * FROM [dbo].[WinTaishi] WHERE associateid = $associateid");
            $sponsor = $conection->select("SELECT * FROM TotalKaizen WHERE associateid = $associateid");
            //$response = $conection->select("EXEC [dbo].[Gen_Kaizen] $associateid, $periodo");
            $response = $conection->select("SELECT * FROM Gen_KaizenIncorporados($associateid)");
            $lastUpdate = $conection->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        $associateidencode = base64_encode($associateid);
        $lastUpdate = explode(' ',  $lastUpdate[0]->Last_Update);
        $dia = explode('-', $lastUpdate[0]);
        $dia = $dia[2];
        $lastUpdate = explode('.', $lastUpdate[1]); $lastUpdate = $lastUpdate[0];
        if(sizeof($wintaishi) > 0){
            $mensaje = "Ya has ganado el programa Equipo Taishi, por lo cual no puedes participar en este programa.";
            return view('kaizentaishi.no', compact('NombreReto', 'associateid', 'info', 'associateidencode', 'mensaje'));
        }
        else if(sizeof($sponsor) > 0){
            return view('kaizentaishi/kaizen', compact('response', 'sponsor', 'associateid', 'associateidencode', 'lastUpdate', 'dia'));
        }
        else{
            return view('kaizentaishi.no', compact('NombreReto', 'associateid', 'info', 'associateidencode', 'mensaje'));
        }
    }

    public function updateTotalKaizen(Request $request){
        $sponsorid = $request->sponsorid;
        $conection = \DB::connection('sqlsrv5');
            $kaizen = $conection->select("SELECT * from [dbo].[WinKaizen] WHERE associateid = $sponsorid");
            $sponsor = $conection->select("SELECT * FROM TotalKaizen WHERE associateid = $sponsorid");
        \DB::disconnect('sqlsrv5');

        return \Response::json($kaizen);
    }

    public function indexTaishi(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $periodo = date('Ym');
        $NombreReto = "Equipo Taishi";
        $info = 'Taishi_Banner.png';
        $mensaje = "No cumples con los requisitos para este programa.";
        $conection = \DB::connection('sqlsrv5');
            $sponsor = $conection->select("SELECT * FROM TotalKaizen WHERE associateid = $associateid");
            $response = $conection->select("SELECT * FROM Gen_KaizenIncorporados($associateid)");
            $lastUpdate = $conection->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        $lastUpdate = explode(' ',  $lastUpdate[0]->Last_Update);
        $dia = explode('-', $lastUpdate[0]);
        $dia = $dia[2];
        $lastUpdate = explode('.', $lastUpdate[1]); $lastUpdate = $lastUpdate[0];
        $associateidencode = base64_encode($associateid);
        if(sizeof($sponsor) > 0){
            return view('kaizentaishi/taishi', compact('response', 'sponsor', 'associateid', 'associateidencode', 'lastUpdate', 'dia'));
        }
        else{
            return view('kaizentaishi.no', compact('NombreReto', 'associateid', 'info', 'associateidencode', 'mensaje'));
        }
    }

    public function updateTotalTaishi(Request $request){
        $sponsorid = $request->sponsorid;
        $conection = \DB::connection('sqlsrv5');
            $taishi = $conection->select("SELECT * FROM [dbo].[WinTaishi] WHERE associateid = $sponsorid");
            $sponsor = $conection->select("SELECT * FROM TotalKaizen WHERE associateid = $sponsorid");
        \DB::disconnect('sqlsrv5');

        return \Response::json($taishi);
    }

    public function kiaiIndex(Request $request){
        $associateid = $request->associateid;
        return Redirect::route('viajeros', array('associateid' => $associateid));
    }

    public function viajerosIndex(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        
        $periodo = Date('Ym');
        $NombreReto = "Club Viajeros";
        $info = 'ClubViajero_Banner.png';
        $mensaje = "No cumples con los requisitos para este programa.";
        $conexion = \DB::connection('sqlsrv5');
            $detail = $conexion->table('ClubKiai')->where('Associateid','=', $associateid)->orderBy('Periodo','ASC')->get();
            $summary = $conexion->table('ResumenTrimestral')->where('AssociateId','=', $associateid)->orderBy('NoTrimestre','ASC') ->get();
            $getname = $conexion->select('SELECT TOP 1 * FROM ClubKiai WHERE Associateid = ? ORDER BY Periodo DESC;',[$associateid]);
            $lastUpdate = $conexion->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        //return $detail;
        $associateidencode = base64_encode($associateid);
        $lastUpdate = explode(' ',  $lastUpdate[0]->Last_Update);
        $dia = explode('-', $lastUpdate[0]);
        $dia = $dia[2];
        $lastUpdate = explode('.', $lastUpdate[1]); $lastUpdate = $lastUpdate[0];
        if(sizeof($detail) > 0){
            return view('kaizentaishi/ClubViajeros', compact('associateid', 'getname', 'summary', 'detail', 'associateidencode', 'lastUpdate', 'dia'));
        }
        else{
            return view('kaizentaishi.no', compact('NombreReto', 'associateid', 'info', 'associateidencode', 'mensaje'));
        }
    }

    public function getGenViajeros(Request $request){
        $associateid = $request->associateid;
        $periodo = $request->periodo;
        $conexion = \DB::connection('sqlsrv5');
            $genealogy = $conexion->select("EXEC SpGenPerId $associateid, $periodo");
        \DB::disconnect('sqlsrv5');

        $data = [
			'data' => $genealogy,
		];
        return $data;
    }

    public function serProIndexnew(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $staff = $request->staff;
        if(empty($staff)){
            $staff = "N";
        }
        $NombreReto = "Reto SER PRO";
        $info = 'SerPro_Banner.png';
        $mensaje = "No cumples con los requisitos para este programa.";
        //$period = Date("Ym");
        $period = 202012;
        $getmentor = "";
        $conexion = \DB::connection('sqlsrv5');
            $abiInfo = $conexion->select("SELECT * FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $period;");
            $detail = $conexion->select("SELECT * FROM Reto_SerPro WHERE Sponsor = $associateid");
            $total = $conexion->select("SELECT * FROM TotalPro WHERE sponsor = $associateid");
            $getname = $conexion->select('SELECT DISTINCT Sponsor,Nombre,Email,Rango,Pais FROM TotalPro WHERE Sponsor = ?',[$associateid]);
            $winners = $conexion->select('SELECT * FROM TotalPro WHERE Plata > =5 and Oro >=2 UNION SELECT * FROM TotalPro WHERE Oro > = 4');
            //$getRank = $conexion->select("SELECT max(rango) AS Rango FROM Rangos_Avance WHERE numci = $associateid GROUP BY numci;");
            $getRegist = $conexion->select("SELECT * FROM Registros_SerPro WHERE Associateid = $associateid;");
            //$getExceptionOro = $conexion->select("SELECT DISTINCT * FROM Rangos_Avance WHERE Rango >= 6 AND FechaAvance>='2019-12-01';");
            $lastUpdate = $conexion->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Retos_Especiales' ORDER BY Last_Update DESC;");
        \DB::disconnect('sqlsrv5');
        $associateidencode = base64_encode($associateid);
        if(!empty($abiInfo)){
            if(!empty($abiInfo)){
                $curRank = trim($abiInfo[0]->Rango, " ");
            }
            else{
                $curRank = 1;
            }
            
            if($curRank == "DIR" || $curRank == "EXE" || $curRank == "PLA"){
                if(sizeof($getRegist) >= 1){
                    $accesToRegist = "registrado";
                    $getmentor = $conexion->select("SELECT * FROM Registros_SerPro WHERE Associateid = $associateid;");
                    \DB::disconnect('sqlsrv5');
                }
                else{
                    $accesToRegist = "si";
                }
            }
            else{
                $accesToRegist = 'mayorpla';
            }
            $lastUpdate = explode(' ',  $lastUpdate[0]->Last_Update);
            $dia = explode('-', $lastUpdate[0]);
            $dia = $dia[2];
            $lastUpdate = explode('.', $lastUpdate[1]); $lastUpdate = $lastUpdate[0];
            return view('kaizentaishi.SerPro', compact('associateid', 'detail', 'total', 'getname', 'winners', 'staff', 'associateidencode', 'accesToRegist', 'curRank', 'abiInfo', 'getmentor', 'lastUpdate', 'dia'));
        }
        else{
            return view('kaizentaishi.no', compact('NombreReto', 'associateid', 'info', 'associateidencode', 'mensaje'));
        }
    }

    public function no(Request $request){
        $associateid = base64_decode($request->associateid);
        $NombreReto = "Reto SER PRO";
        $info = 'serpro.png';
        $mensaje = "No cumples con los requisitos para este programa.";
        $associateidencode = base64_encode($associateid);
        return view('kaizentaishi/no', compact('NombreReto', 'associateid', 'info', 'associateidencode', 'mensaje'));
    }

    public function loadUpline(Request $request){
        $associateid = $request->associateid;
        $conexion = \DB::connection('sqlsrv5');
            $response = $conexion->select("exec Sp_UplineTree_SerPro $associateid;");
        \DB::disconnect('sqlsrv5');
        $result = "";
        foreach ($response as $option) {
            $associateid = trim($option->associateid, " ");
            $Name = trim($option->Name, " ");
            $result = $result . "<option value='$associateid-$Name'>$associateid - $Name</option>";
        }
        return $result;
    }

    public function registeClubV(Request $request){
        $_token = $request->_token;
        $abicode = $request->abicode;
        $dateReg = $request->dateReg;
        $sponsorCode = $request->sponsorCode;
        $sponsorName = $request->sponsorName;
        $rank = $request->rank;

        if($rank == "DIR"){
            $rank = 1;
        }
        if($rank == "EXE"){
            $rank = 3;
        }
        if($rank == "PLA"){
            $rank = 5;
        }
        if($rank == "ORO"){
            $rank = 6;
        }

        $conexion = \DB::connection('sqlsrv5');
            $getRegist = $conexion->select("SELECT * FROM Registros_SerPro WHERE Associateid = $abicode;");
            if(empty($getRegist)){
                $response = $conexion->insert("INSERT INTO Registros_SerPro(SponsorId, SponsorName, CreateDate, AssociateId, Rank) VALUES('$sponsorCode', '$sponsorName', '$dateReg', '$abicode', '$rank')");
            }
        \DB::disconnect('sqlsrv5');
        if(sizeof($getRegist) >= 1){
            return "exist";
        }
        else{
            return "registrado";
        }
    }

    public function cronOVAutologin(){
        date_default_timezone_set('America/Mexico_City');
        $conection = \DB::connection('sqlsrv5');
            // cron para actualizar las ligas de autologin a la OV
            $vacios = $conection->select("SELECT NumeroAbi FROM [inconcert].[dbo].DistributorMasterData WITH(nolock) WHERE MiNegocio = ''");
            for($x = 0; $x < sizeof($vacios); $x++){
                $id = $vacios[$x]->NumeroAbi;
                $idb64 = base64_encode($id);
                $update = $conection->update("UPDATE [inconcert].[dbo].DistributorMasterData SET MiNegocio = 'https://nikkenlatam.com/oficina-virtual/autologin.php?code=$idb64' WHERE MiNegocio = '' AND NumeroAbi = '$id'");
            }
            echo "link autologin creados: $x <br><br>";

            // agrega las ligas de autologin a los countrypacks
            $vacios = $conection->select("SELECT TOP 327 NumeroAbi FROM [inconcert].[dbo].Links_MyNIkken WITH(nolock) WHERE ListaPrecios = '' OR ListaPrecios IS NULL ORDER BY NumeroAbi ASC;");
            for($x = 0; $x < sizeof($vacios); $x++){
                $id = $vacios[$x]->NumeroAbi;
                $update = $conection->update("UPDATE [inconcert].[dbo].Links_MyNIkken SET ListaPrecios = 'http://mynikkenlat.nikkenlatam.com/countrypacks/es' WHERE NumeroAbi = '$id'");
            }
            echo "link ListaPrecios creados: $x <br><br>";
            
            // agrega las ligas de autologin a los retos especiales (club viajeros, reto ser pro, kaizen y taishi)
            $vacios = $conection->select("SELECT TOP 327 NumeroAbi FROM [inconcert].[dbo].Links_MyNIkken WITH(nolock) WHERE ProgEspeciales = '' OR ProgEspeciales IS NULL ORDER BY NumeroAbi ASC;");
            for($x = 0; $x < sizeof($vacios); $x++){
                $id = $vacios[$x]->NumeroAbi;
                $idb64 = base64_encode($id);
                $update = $conection->update("UPDATE [inconcert].[dbo].Links_MyNIkken SET ProgEspeciales = 'https://services.nikken.com.mx/viajeros/$idb64' WHERE NumeroAbi = '$id'");
            }
            echo "link ProgEspeciales creados: $x <br><br>";

            // agrega las ligas de autologin al controlador de plan de influencia
            $vacios = $conection->select("SELECT TOP 327 NumeroAbi FROM [inconcert].[dbo].Links_MyNIkken WITH(nolock) WHERE PlanInfluencia = '' OR PlanInfluencia IS NULL ORDER BY NumeroAbi ASC;");
            for($x = 0; $x < sizeof($vacios); $x++){
                $id = $vacios[$x]->NumeroAbi;
                $idb64 = base64_encode($id);
                $update = $conection->update("UPDATE [inconcert].[dbo].Links_MyNIkken SET PlanInfluencia = 'https://services.nikken.com.mx/PlanInfluencia/$idb64' WHERE NumeroAbi = '$id'");
            }
            echo "link PlanInfluencia creados: $x <br><br>";

            // agrega las ligas de autologin a la tienda virtual del ABI
            $vacios = $conection->select("SELECT TOP 327 NumeroAbi FROM [inconcert].[dbo].Links_MyNIkken WITH(nolock) WHERE InfoProducto = '' OR InfoProducto IS NULL ORDER BY NumeroAbi ASC;");
            $periodo = Date('Ym');
            for($x = 0; $x < sizeof($vacios); $x++){
                $id = $vacios[$x]->NumeroAbi;
                $mail = $conection->select("SELECT Email FROM puntos2020 WHERE associateid = $id AND Periodo = $periodo;");
                $liga = 'https://mitiendanikken.com/mitiendanikken/auto/login/';
                if(sizeof($mail) > 0){
                    $mail = $mail[0]->Email;
                    $mail = base64_encode($mail);
                    $liga = $liga . $mail;
                }
                else{
                    $liga = "Sin correo";
                }
                $update = $conection->update("UPDATE [inconcert].[dbo].Links_MyNIkken SET InfoProducto = '$liga' WHERE NumeroAbi = '$id'");
            }
            echo "link InfoProducto creados: $x <br><br>";
        \DB::disconnect('sqlsrv5');
        return '';
    }

    public function getGenealgi(Request $request){
        $associateid = $request->associateid;
        $type = $request->type;
        $conexion = \DB::connection('sqlsrv5');
            $genealogi = $conexion->select("EXEC Gen_Kaizen $associateid, 2;");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $genealogi,
        ];
        return $data;
    }
}