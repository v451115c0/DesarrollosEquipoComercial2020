@extends('kaizentaishi.layout') <!----- quitar ".test" al pasar a productivo --->

@section('reto')
    Club Viajeros
@endsection

@section('titulo')
    Nikken | Club Viajeros
@endsection

@section('styles')
    <style>
        .flaticon-fill-tick{
            color: green;
        }

        .flaticon-close-fill{
            color: tomato;
        }

        .main-width{
            width: 100;
        }
    </style>
@endsection

@section('kiai')
    <div class="row layout-spacing">
        <div class="col-lg-4 col-md-6 mb-2 pb-4">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-md-12 text-black text-center">
                            <p class="pointer" data-toggle="modal" data-target=".bd-example-modal-lg-img">Da clic para consultar las bases aquí</p>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-12">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('retos/img/ClubViajero_Banner.png')}}" width="75%" data-toggle="modal" data-target=".bd-example-modal-lg-img">
                                </a>
                                <div class="modal fade bd-example-modal-lg bd-example-modal-lg-img" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header graph text-center" style="background-color: #38d2c9;">
                                                <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body graph-body">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center" id="trimestre1">
                                                        <img src="{{asset('retos/img/ClubViajero_Banner.png')}}" width="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 mb-2 pb-4">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4>{{ trim($getname[0]->AssociateName, " ") }} </h4>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 text-center">
                            <div class="form-group">
                                <img src="{{ asset('retos/img/ClubViajeros_Logo.png') }}" width="100%">
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="input-group input-group-sm mb-3 main-width">
                                <center>
                                    <h6 class="form-control-rounded input-group-text main-width">Trimestre actual: #<span id="trimestre"></span></h6>
                                </center>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="form-control-rounded-left input-group-text" id="inputGroup-sizing-sm">Código:</span>
                                </div>
                                <input type="text" id="associateid" class="form-control-rounded-right form-control" aria-label="Small" value="{{ $associateid }}" aria-describedby="inputGroup-sizing-sm" readonly>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="form-control-rounded-left input-group-text" id="inputGroup-sizing-sm">Rango:</span>
                                </div>
                                <input type="text" class="form-control-rounded-right form-control" aria-label="Small" value="{{ trim($getname[0]->Rango, " ") }}" aria-describedby="inputGroup-sizing-sm" readonly>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="form-control-rounded-left input-group-text" id="inputGroup-sizing-sm">VP Acumulado:</span>
                                </div>
                                <input type="text" class="form-control-rounded-right form-control" aria-label="Small" value="{{ number_format(trim($getname[0]->VpAcumulado ?? 0, " ")) }}" aria-describedby="inputGroup-sizing-sm" readonly>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="form-control-rounded-left input-group-text" id="inputGroup-sizing-sm">VGP Acumulado:</span>
                                </div>
                                <input type="text" class="form-control-rounded-right form-control" aria-label="Small" value="{{ number_format(trim($getname[0]->VGPacumulado ?? 0, " ")) }}" aria-describedby="inputGroup-sizing-sm" readonly>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="form-control-rounded-left input-group-text" id="inputGroup-sizing-sm">Influencer:</span>
                                </div>
                                <input id="noInfluencers" type="text" class="form-control-rounded-right form-control" aria-label="Small" value="{{ number_format($getname[0]->Incorpo_VP100 ?? 0) }}" aria-describedby="inputGroup-sizing-sm" readonly>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="form-control-rounded-left input-group-text" id="inputGroup-sizing-sm">KinYa!:</span>
                                </div>
                                <input id="noKinya" type="text" class="form-control-rounded-right form-control" aria-label="Small" value="{{ number_format($getname[0]->Kinya ?? 0) }}" aria-describedby="inputGroup-sizing-sm" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-success  br-50 mb-4 personal-shadow text-center text-black" role="alert">
        <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>
        @php
            setlocale(LC_TIME, 'es_ES');
            $mes = Date('m');
            $meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
            $mes = DateTime::createFromFormat('!m', $mes);
            $mes = strftime("%B", $mes->getTimestamp());
            $mesnum = Date('m');
            if($mesnum < 10){
                $mesnum = str_replace('0', '', $mesnum);
            }
        @endphp
        <strong>Fecha de actualizacion: </strong>{{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate }} hora México.
    </div>

    @php
        $trimestre = 0;
        $paises = ['LAT' => 'México','COL' => 'Colombia','CRI' => 'Costa Rica', 'PAN' => 'Panamá', 'ECU' => 'Ecuador', 'PER' => 'Perú', 'SLV' => 'El Salvador', 'GTM' => 'Guatemala', 'CHL' => 'Chile'];
        $baderas = ['LAT' => 'mexico.png','COL' => 'colombia.png','CRI' => 'costarica.png', 'PAN' => 'panama.png', 'ECU' => 'ecuador.png', 'PER' => 'peru.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CHL' => 'chile.png'];
        $currentMonth = '2020' + Date('m');
    @endphp
    @foreach($summary as $index=>$s)
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header text-center" style="background-color: #38d2c9;">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                @if($s->Validacion == 'T')
                                    <h4 style="color:white">
                                        Trimestre No. {{$s->NoTrimestre}}
                                        <script> $("#trimestre").html({{$s->NoTrimestre}})</script>
                                        <span class="flaticon-fill-tick" style="padding-left: 20px;"></span> Cumple
                                    </h4>
                                @else
                                    <h4 style="color:white">
                                        Trimestre No. {{$s->NoTrimestre}}
                                        <script> $("#trimestre").html({{$s->NoTrimestre}})</script>
                                        <span class=" flaticon-close-fill" style="padding-left: 20px;"></span> No Cumple
                                    </h4>
                                @endif 
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <p class="mt-2">Resumen del trimestre </p>
                            </div>
                            <div class="col-md-9 col-9">
                                <button type="button" class="btn btn-gradient-primary btn-rounded  mb-4 mr-2" data-toggle="modal" data-target="#modalTabGenealogy" onclick="setTrimestre({{$index}})">
                                    Ver estatus de mi red
                                </button>
                            </div>

                            <div class="col-lg-12">
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive mb-4">
                                        <table id="individual-col-search{{$index}}" class="table table-striped table-bordered table-hover" style="font-size:11px;">
                                            <thead>
                                                <tr>
                                                    <th style="color: gray">Periodo</th>
                                                    <th style="color: gray">Nombre Asesor</th>
                                                    <th style="color: gray">País</th>
                                                    <th style="color: gray">Rango</th>
                                                    <th style="color: gray">VP</th>
                                                    <th style="color: gray">VGP</th>
                                                    <th style="color: gray">VP Acumulado</th>
                                                    <th style="color: gray">VGP Acumulado</th>
                                                    <th class="text-center" style="color: gray">Influencers</th>
                                                    <th class="text-center" style="color: gray">KinYa!</th>
                                                    <th style="color: gray">Cumple VP y VGP mes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $VGPAcumulado = 0;
                                                    $incoporados = 0;
                                                    $kinya = 0;
                                                    $pais = ['LAT' => 'México', 'MEX' => 'México', 'COL' => 'Colombia', 'CRI' => 'Costa Rica', 'PAN' => 'Panamá', 'ECU' => 'Ecuador', 'PER' => 'Perú', 'SLV' => 'El Salvador', 'GTM' => 'Guatemala', 'CHL' => 'Chile'];
                                                    $bandera = ['LAT' => 'mexico.png', 'MEX' => 'mexico.png', 'COL' => 'colombia.png', 'CRI' => 'costarica.png', 'PAN' => 'panama.png', 'ECU' => 'ecuador.png', 'PER' => 'peru.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CHL' => 'chile.png'];
                                                @endphp
                                                @foreach($detail as $reg)
                                                    @if($reg->NoTrimestre == $s->NoTrimestre)
                                                        <tr role="row" class="even" style="color:black;">
                                                            <td>{{ $reg->Periodo }}</td>
                                                            <td>{{ $reg->AssociateName }}</td>
                                                            <td class="text-center">
                                                                <img src="{{asset("retos/img/" . $bandera[$reg->Pais] ) }}" width="15px"><br>
                                                                {{ $pais[$reg->Pais] }}
                                                            </td>
                                                            <td>{{ $reg->Rango }}
                                                            </td>
                                                            <td>{{ number_format($reg->Vp,2) }}</td>
                                                            <td>
                                                                {{ number_format($reg->VGP,2) }}
                                                                @php
                                                                    $VGPAcumulado = $VGPAcumulado + $reg->VGP;
                                                                    $incoporados = $incoporados + $reg->Incorpo_VP100;
                                                                    $kinya = $kinya + $reg->Kinya;
                                                                @endphp
                                                            </td>
                                                            <td>{{ number_format($reg->VpAcumulado,2) }}</td>
                                                            <td>{{ number_format($reg->VGPacumulado,2) }}</td>
                                                            <td class="text-center">{{ number_format($reg->Incorpo_VP100) }}</td>
                                                            <td class="text-center">{{ number_format($reg->Kinya) }}</td>
                                                            <td class="text-center">
                                                                @if($reg->KiaiTrimestre == 'YES')
                                                                    <span class="flaticon-fill-tick" style="font-size: 20px"></span>
                                                                    <span hidden>Cumple</span>
                                                                @else
                                                                    <span class="flaticon-close-fill" style="font-size: 20px"></span>
                                                                    <span hidden>No Cumple</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="text-right">VGP acumulado total:</th>
                                                    <th>{{ number_format($VGPAcumulado, 2) }}</th>
                                                    <th colspan="2">
                                                        @if($VGPAcumulado >= 12000)
                                                            <span class="flaticon-fill-tick" style="font-size: 20px"></span>
                                                        @else
                                                            <span class="flaticon-close-fill" style="font-size: 20px"></span>
                                                        @endif
                                                    </th>
                                                    <th class="text-right" colspan="2">
                                                        Total Influencers:
                                                    </th>
                                                    <th>
                                                        <span class="pb-1">
                                                            {{ number_format($incoporados, 0) }}
                                                            <script> $("#noInfluencers").val({{ number_format($incoporados, 0) }})</script>
                                                        </span>
                                                        &nbsp;&nbsp;
                                                        @if($incoporados >= 3)
                                                            <span class="flaticon-fill-tick" style="font-size: 15px"></span>
                                                        @else
                                                            <span class="flaticon-close-fill" style="font-size: 15px"></span>
                                                        @endif
                                                    </th>
                                                    <th class="text-right">
                                                        KinYa!:
                                                    </th>
                                                    <th>
                                                        <span class="pb-1">
                                                            {{ number_format($kinya, 0) }}
                                                            <script> $("#noKinya").val({{ number_format($kinya, 0) }})</script>
                                                        </span>
                                                        &nbsp;&nbsp;
                                                        @if($kinya >= 1)
                                                            <span class="flaticon-fill-tick" style="font-size: 15px"></span>
                                                        @else
                                                            <span class="flaticon-close-fill" style="font-size: 15px"></span>
                                                        @endif
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row" style="display: none">
                                    <div class="col-lg-12 text-center">
                                        <h5>
                                            <span class="flaticon-left-arrow-12"></span>
                                            Desliza para ver tu Genealogía
                                            <span class="flaticon-arrow-left"></span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="modalTabGenealogy">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myExtraLargeModalLabel">Estatus de mi red tirmestre: <span id="spanTrimestre"></span></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive mb-4">
                        <table id="tabGenealogy" class="table table-bordered table-hover" style="font-size:11px;">
                            <thead>
                                <tr>
                                    <th class="text-center" style="color: gray">Id Incorporado</th>
                                    <th class="text-center" style="color: gray">Periodo</th>
                                    <th class="text-center" style="color: gray">Nivel</th>
                                    <th class="text-center" style="color: gray"><p style="width: 330px;">Nombre Incorporado</p></th>
                                    <th class="text-center" style="color: gray">País</th>
                                    <th class="text-center" style="color: gray">Rango</th>
                                    <th class="text-center" style="color: gray">VP Acumulado</th>
                                    <th class="text-center" style="color: gray">VGP Acumulado</th>
                                    <th class="text-center" style="color: gray">No. Trimestre</th>
                                    <th class="text-center" style="color: gray">Influencers VP 100</th>
                                    <th class="text-center" style="color: gray">KinYa!</th>
                                    <th class="text-center" style="color: gray">Cumple Trimestre</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h5>
                                <img src="{{asset("retos/img/" . $baderas[$gen->Pais ?? 'LAT'])}}" width="15px">
                                {{ $paises[$gen->Pais ?? 'LAT'] }}
                                <span class="flaticon-left-arrow-12"></span>
                                Desliza para ver tu Genealogía
                                <span class="flaticon-arrow-left"></span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var periodoToFilter = 202003;
        var array = "";
        function setTrimestre(trimestre){
            trimestre = parseInt(trimestre) + parseInt(1);
            $("#spanTrimestre").text(trimestre);
            if(trimestre == 1){
                periodoToFilter = 202003;
            }
            else if(trimestre == 2){
                periodoToFilter = 202006;
            }
            else if(trimestre == 3){
                periodoToFilter = 202009;
            }
            else if(trimestre == 4){
                periodoToFilter = 202012;
            }
            appliFilter(periodoToFilter);
        }

        function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
            try {
                decimalCount = Math.abs(decimalCount);
                decimalCount = isNaN(decimalCount) ? 0 : decimalCount;
                const negativeSign = amount < 0 ? "-" : "";
                let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                let j = (i.length > 3) ? i.length % 3 : 0;
                return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
            }
            catch (e) {
                console.log(e)
            }
        };
    
        function appliFilter(periodo){
            var associateid = $("#associateid").val();
            var flag = {'PER': 'peru.png', 'MEX': 'mexico.png', 'LAT': 'mexico.png', 'COL': 'colombia.png', 'CHL': 'chile.png', 'ECU': 'ecuador.png', 'PAN': 'panama.png', 'SLV': 'salvador.png', 'GTM': 'guatemala.png', 'CRI': 'costarica.png'};
            var table = $('#tabGenealogy').DataTable({
                destroy: true,
                deferRender: true,
                processing: true,
                ajax: "/getGenealogy?associateid=" + associateid + '&periodo=' + periodo,
                columns: [
                    { data: 'associateid', className: 'text-center' },
                    { data: 'Periodo', className: 'text-center' },
                    { data: 'nivel', className: 'text-center' },
                    { data: 'AssociateName', className: 'text-center' },
                    { 
                        data: 'Pais',
                        className: 'text-center',
                        "render": function(data, type, row){
                            var paisText = row.Pais;
                            if(paisText == 'LAT'){
                                paisText = "MEX";
                            }
                            return "<img src='../fpro/img/flags/" + flag[row.Pais.trim()] + "' width=25px'> <br> " + paisText;
                        }
                    },
                    { data: 'Rango', className: 'text-center' },
                    {
                        data: 'VpAcumulado',
                        className: 'text-center',
                        "render": function(data, type, row){
                            return formatMoney(row.VpAcumulado);
                        }
                    },
                    {
                        data: 'VGPacumulado',
                        className: 'text-center',
                        "render": function(data, type, row){
                            return formatMoney(row.VGPacumulado);
                        }
                    },
                    { data: 'NoTrimestre', className: 'text-center' },
                    { data: 'IncorpAcumulado', className: 'text-center' },
                    { data: 'KinyaAcumulado', className: 'text-center' },
                    {
                        data: 'Validacion',
                        className: 'text-center',
                        "render": function(data, type, row){
                            var status = row.Validacion;
                            if(status.trim() == 'T'){
                                return '<span class="flaticon-fill-tick" style="font-size: 20px"></span><br><span>Cumple</span>';
                            }
                            else{
                                return '<span class="flaticon-close-fill" style="font-size: 20px"></span><br><span>No Cumple</span>';
                            }
                        }
                    },
                ],
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3',
                        text:"<img src='{{ asset('retos/img/excel.png') }}' width='15px'></img> Exportar a Excel",
                    }
                ],
                customize: function(doc) {
                    var rgbaStrToHex = function(str) {
                        var firstParens = str.split('('),
                            nums = firstParens[1].split(')')[0].split(','),
                            a = 1;
                        if (nums.length == 4) {
                            a = parseFloat(nums[3]);
                        }
                        return '#' + nums.filter(function(x,ix) { return ix < 3;})
                            .map(function(x) {
                                x = Math.round(parseInt(x) * a, 0).toString(16);
                                return ((x.length == 1) ? "0" + x : x);
                            }).join("");
                    };
                    var tblBody = doc.content[1].table.body;
                    $(instance.tbl.context[0].nTable).find('tr').each(function(ix, row) {
                        var index = ix;
                        var rowElt = row;
                        $(row).find('th,td').each(function(ind, elt) {
                            if (elt.tagName === "TH") return;
                            var color = $(elt).css('background-color');
                            if (color === 'rgba(0, 0, 0, 0)') {
                                color = $(rowElt).css('background-color');
                            }
                            if (color !== 'rgba(0, 0, 0, 0)') {
                                delete tblBody[index][ind].style;
                                tblBody[index][ind].fillColor = rgbaStrToHex(color);
                            }
                        });
                    });
                }
            });

            /*array = table.column(1)
            .data()
            .filter(function (value, index) {
                return value == periodo ? true : false;
            })
            .draw();
            
            $.fn.dataTableExt.afnFiltering.push(
                function (oSettings, aData, iDataIndex) {
                    return aData[1] == periodo;
                }
            );
            table.draw()*/
        }
    </script>
@endsection
