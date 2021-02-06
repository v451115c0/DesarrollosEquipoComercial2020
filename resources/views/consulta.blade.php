  <!--===============================================================================================-->	
  <!----------- Developed by: Felipe Cordoba -------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
    <style>
        .w3-responsive {
            display: block;
            overflow-x: auto;
        }
        
    </style>
    <!--===============================================================================================-->	
    <!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->

</head>
    <body>
        <div class="header marleft-3">
            <img class="logo_header" src="https://services.nikken.com.mx/img/icons/logo_nikken.png"/>
            <h4>
                Reto Kiai
            </h4>
        </div>
        
        @if(count($query))
        <div class="download-section">
            <a href=""><img src="https://services.nikken.com.mx/img/icons/excel-icon.png"/>Exportar a EXCEL</a>
        </div>
        @endif
        <div class="container">
            @foreach($summary as $index=>$s)
            <div class="panel-group">
                <div class="panel panel-default">
                    @if($s->Validacion == 'Y')
                    <div class="panel-heading" style="background-color:#00800087" data-toggle="collapse" href="#collapse{{++$index}}">
                    @else
                    <div class="panel-heading" style="background-color:#e46e6ec4"  data-toggle="collapse" href="#collapse{{++$index}}">
                    @endif
                        <h4 class="panel-title">
                            <img src="../public/images/icons/downrow.png" style="width:1%"/>
                            <a style="margin-left:15%">Trimestre No. {{$s->NoTrimestre}}</a>
                            @if($s->Validacion == 'Y')
                                <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/check.png" style="width:2%;margin-left:15%"/>
                            @else
                                <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/error.png" style="width:2%;margin-left:15%"/>
                            @endif
                        </h4>
                    </div>
                    <div id="collapse{{$index}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="w3-responsive marleft-3">
                                <div class="wrap-table100">
                                    <div class="table100 ver2 ">
                                        <table data-vertable="ver2">
                                            <thead>
                                                <tr class="row100 head">
                                                    <th class="column100 column1" data-column="column1">AssociateId</th>
                                                    <th class="column100 column2" data-column="column2">SponsorId</th>
                                                    <th class="column100 column3" data-column="column3">Nivel</th>
                                                    <th class="column100 column4" data-column="column4">AssociateName</th>
                                                    <th class="column100 column5" data-column="column5">Pais</th>
                                                    <th class="column100 column6" data-column="column6">Rango</th>
                                                    <th class="column100 column7" data-column="column7">Telefono</th>
                                                    <th class="column100 column8" data-column="column8">Email</th>
                                                    <th class="column100 column8" data-column="column8">VP</th>
                                                    <th class="column100 column8" data-column="column8">VGP</th>
                                                    <th class="column100 column8" data-column="column8">VP Acumulado</th>
                                                    <th class="column100 column8" data-column="column8">VGP Acumulado</th>
                                                    <th class="column100 column8" data-column="column8">No. Trimestre</th>
                                                    <th class="column100 column8" data-column="column8">Kiai Trimestre</th>
                                                    <th class="column100 column8" data-column="column8">Periodo</th>
                                                </tr>
                                            </thead>
                                            @if(!count($query))
                                            <tbody>
                                                <tr class="row100">
                                                    <td colspan="15" class="center_text"> No se encontraron Resultados</td>
                                                </tr>
                                            </tbody>
                                            @endif

                                            @foreach($query as $reg)
                                            @if($reg->NoTrismestre == $s->NoTrimestre)
                                            <tbody>
                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">
                                                        {{$reg->associatedid}}
                                                    </td>
                                                    <td class="column100 column2" data-column="column2"> 
                                                        {{$reg->sponsorid}}
                                                    </td>
                                                    <td class="column100 column3" data-column="column3">
                                                        {{$reg->Nivel}}
                                                    </td>
                                                    <td class="column100 column4" data-column="column4">
                                                        {{$reg->AssociateName}}
                                                    </td>
                                                    <td class="column100 column5" data-column="column5">

                                                        @if(File::exists('../public/images/country/'.$reg->Pais.'.png'))
                                                            <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/country/{{$reg->Pais}}.png"/>
                                                        @else
                                                            <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/country/not_exist.png"/>
                                                         @endif
                                                        {{$reg->Pais}}
                                                    
                                                    </td>
                                                    <td class="column100 column6" data-column="column6">
                                                        {{$reg->Rango}}
                                                    </td>
                                                    <td class="column100 column7" data-column="column7">
                                                        {{$reg->Telefono}}
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        {{$reg->Email}}
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        @money($reg->Vp)
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        @money($reg->Vgp)
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        @money($reg->VpAcumulado)
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        @money($reg->VgpAcumulado)
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        {{$reg->NoTrismestre}}
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        @if($reg->KiaiTrimestre == 'Y')
                                                            <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/check.png" style="width:40%;margin-left:40%"/>
                                                        @else
                                                            <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/error.png" style="width:40%;margin-left:40%"/>
                                                        @endif
                                                    </td>
                                                    <td class="column100 column8" data-column="column8">
                                                        {{$reg->Periodo}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endif
                                            @endforeach                               
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        @endforeach
        </div>       
</html>