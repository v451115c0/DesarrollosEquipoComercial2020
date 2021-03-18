<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | Club Viajeros 2021</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/flaticon/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/pages/landing-page/style.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/datatables.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_zero_config.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_html5.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/ui-kit/custom-sweetalert.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/aos.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/maincss/ViajerosPro/viajerospro.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}"/>
        <style>
            .navHeadWrapperClubViajeros{
                background: linear-gradient(0.5deg, #b6e1e0 0%, #33d5cd 100%) !important;
            }

            nav.navbar .navbar-nav .nav-item .nav-link.active {
                color: #3b3b3b !important;
            }

            nav.navbar .navbar-nav .nav-link:hover {
                color: #3b3b3b !important;
            }

            .bodyClviajeros{
                background-image: unset !important;
            }

            .btn-gradient-primary {
                border: 0 !important;
                color: #fff;
                background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);
                background-color: #04befe;
            }

			.puntajeInput {
				color: #000 !important;
			}
			.btnExcel {
				background-image: linear-gradient(135deg, #b6e1e0 0%, #33d5cd 100%);
				color: black;
			}
			.btnExcel:hover {
				background-image: linear-gradient(135deg, #33d5cd 0%, #b6e1e0 100%);
			}
			.page-item.active .page-link {
				background-color: #33d5cd !important;
				border-color: #33d5cd !important;
				border-radius: 4px;
				color: black
			}
			ul.pagination li a:hover:not(.active) {
				background-color: #33d5cd !important;
				color: #000 !important;
			}
        </style>
	</head>
	<body class="bodyClviajeros">
		<div id="navHeadWrapper" class="navHeaderWrapper header-image navHeadWrapperClubViajeros">
			<div class="">
				<nav class="navbar navbar-expand-lg bg-faded header-nav">
					<div class="container">
						<div class="col-xl-4 col-lg-3 col-6 mx-auto ">
							<img src="{{ asset('fpro/img/logo-black.png') }}" width="70%">
						</div>

						<div class="col-6 text-right d-lg-none d-block">
							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon flaticon-left-menu"></span>
							</button>
						</div>

						<div class="col-xl-8 col-lg-9">
							<div class="collapse navbar-collapse justify-content-end" id="nav-content">   
								<ul class="navbar-nav text-center mt-lg-0 mt-5">
									<li class="nav-item active">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#navHeadWrapper">Inicio</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#trimestreSection">Trimestres</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapper">Requisitos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#premios">Premios</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#servicesWrapper">Términos y Condiciones</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
			
			<div id="headerWrapper" class="container headerContent">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
					<div class="row">
						<div class="col-lg-6 col-md-8 col-sm-12 col-12 text-center m-md-auto">
							<img src="{{ asset('fpro/img/retos2021/ClubViajeros_Logo.png') }}" width="80%">
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center current">
							<div class="row ml-1 mr-1 container-fluid pb-4">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
									@php
										$flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'MEX' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png'];
										$meses = ['202101' => 'Enero', '202102' => 'Febrero', '202103' => 'Marzo', '202104' => 'Abril', '202105' => 'Mayo', '202106' => 'Junio', '202107' => 'Julio', '202108' => 'Agosto', '202109' => 'Septiembre', '202110' => 'Octubre', '202111' => 'Noviembre', '202112' => 'Diciembre'];
										$rangosCompletos = ['DIR' => 'DIRECTO', 'EXE' => 'EJECUTIVO', 'PLA' => 'PLATA', 'ORO' => 'ORO', 'PLO' => 'PLATINO', 'DIA' => 'DIAMANTE', 'DRL' => 'DIAMANTE REAL'];
										$periodo = $abiInfo[0]->Periodo ?? date('Ym');
									@endphp
									<h4>
										<span class="align-self-center">{{ trim($abiInfo[0]->AssociateName ?? 'Nikken', ' ') }}</span>
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
									</h4>
									@php
										$meses = ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'];
									@endphp
									<div class="col-lg-12">
										<h6><b>Fecha de actualización: {{ $update['dia'] }} de {{ $meses[$update['mes']] }} a las {{ $update['hora'] ?? '00:00:00' }} hora México.</b></h6>
									</div>
									<h5>Estatus Trimestral</h5>
									<input type="hidden" id="associateid" readonly value="{{ $associateid }}">
								</div>
								<div class="row" style="max-width: 100%;">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Trimestre actual: #{{ sizeof($trimestres) }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Rango: {{ $rangosCompletos[trim($abiInfo[0]->Rango ?? 'EXE', ' ')] }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<table style="width: 100%" class="table-responsive">
											<thead>
												<tr>
													<td><b>Acumulado</b></td>
													<td><b>Para calificar te falta</b></td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput text-black" style="color: #000 !important;">VP Acumulado: {{ number_format(trim($abiInfo[0]->VpAcumulado ?? 0, " ")) }}</span>
														</div>
													</td>
													<td>
														@php
															$vpacumulado = $abiInfo[0]->VpAcumulado ?? 0;
															$vpre = 1200;
															$vpfin = 0;
															if($vpacumulado < $vpre){
																$vpfin = $vpre - $vpacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 text-black puntajeInput">VP: {{ number_format($vpfin) }}</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput text-black">VGP Acumulado: {{ number_format(trim($abiInfo[0]->VGPacumulado ?? 0, " ")) }}</span>
														</div>
													</td>
													<td>
														@php
															$vgpacumulado = $abiInfo[0]->VGPacumulado ?? 0;
															$vgpre = 12000;
															$vgpfin = 0;
															if($vgpacumulado < $vgpre){
																$vgpfin = $vgpre - $vgpacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput text-black">VGP: {{ number_format($vgpfin) }}</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4 ">
															<span class="form-control br-30 w-100 puntajeInput text-black">Influencer: {{ number_format($abiInfo[0]->IncorpAcumulado ?? 0) }}</span>
														</div>
													</td>
													<td>
														@php
															$infacumulado = $abiInfo[0]->IncorpAcumulado ?? 0;
															$infre = 3;
															$inffin = 0;
															if($infacumulado < $infre){
																$inffin = $infre - $infacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4 ">
															<span class="form-control br-30 w-100 puntajeInput text-black">Influencer: {{ number_format($inffin) }}</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput text-black">KinYa! personal: {{ number_format($abiInfo[0]->KinyaAcumulado ?? 0) }}</span>
														</div>
													</td>
													<td>
														@php
															$Kinyaacumulado = $abiInfo[0]->KinyaAcumulado ?? 0;
															$Kinyare = 1;
															$Kinyafin = 0;
															if($Kinyaacumulado < $Kinyare){
																$Kinyafin = $Kinyare - $Kinyaacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput text-black">KinYa! personal: {{ number_format($Kinyafin) }}</span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<span>
											<b>Trimestre #{{ sizeof($trimestres) }}</b>
											@if($abiInfo[0]->Validacion == 'T')
												<span class="badge badge-success">Cumple</span>
											@elseif($abiInfo[0]->Validacion == 'N')
												<span class="badge badge-warning">Nuevo incorporado</span>
											@else
												<span class="badge badge-danger">No cumple</span>
											@endif
										</span>
										<h6 class="mt-3">* Recuerda realizar el requisito mensual de 100 VP y 2,000 VGP</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="height: 150px; overflow: hidden;">
			<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 40%; width: 100%;">
				  <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill: #b6e1e0;"></path>
			</svg>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="trimestreSection" class="row">
					<div class="col-md-12 text-center">
						<h2 class="section-title mb-2 mt-3">Trimestres</h2>
						<h6>Fecha de incorporación: <b>{{ $abiInfo[0]->Fecha_incorpo ?? Date('Y-m-d') }}</b></h6>
                    </div>
                    @foreach ($trimestres as $fila)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                            <div class="statbox widget box">
                                <div class="widget-header ">
									<hr>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                                            <h4>
                                                Trimestre #{{ $fila->NoTrimestre }}
                                                @if($fila->Validacion == 'T')
                                                    <span class="badge badge-success">Cumple</span>
                                                @elseif($fila->Validacion == 'N')
                                                    <span class="badge badge-warning">Nuevo incorporado</span>
												@else
													<span class="badge badge-danger">No cumple</span>
                                                @endif
                                            </h4>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-12 text-center">
                                            <button type="button" class="btn btn-gradient-primary btn-rounded mb-4 mr-2" data-toggle="modal" data-target="#modalTabGenealogy{{ $fila->NoTrimestre }}" onclick="getDataTrimestre({{ $fila->NoTrimestre }}, 1)">
                                                <h5 style="margin-bottom: 0 !important">Ver estatus de mi red</h5>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-area ">
                                    <div class="table-responsive new-products">
                                        <table class="table" id="">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Periodo</th>
                                                    <th>Nombre Asesor</th>
                                                    <th>País</th>
                                                    <th>Rango</th>
                                                    <th>VP</th>
                                                    <th>VGP</th>
                                                    <th>Influencers</th>
                                                    <th>KinYa!</th>
                                                    <th>Cumple VP y VGP mes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $VGPAcumulado = 0;
                                                    $incoporados = 0;
                                                    $kinya = 0;
                                                    $pais = ['MEX' => 'México', 'LAT' => 'México', 'COL' => 'Colombia', 'CRI' => 'Costa Rica', 'PAN' => 'Panamá', 'ECU' => 'Ecuador', 'PER' => 'Perú', 'SLV' => 'El Salvador', 'GTM' => 'Guatemala', 'CHL' => 'Chile'];
													$bandera = ['MEX' => 'mexico.png', 'LAT' => 'mexico.png', 'COL' => 'colombia.png', 'CRI' => 'costarica.png', 'PAN' => 'panama.png', 'ECU' => 'ecuador.png', 'PER' => 'peru.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CHL' => 'chile.png'];
													$meses = ['202101' => 'Enero', '202102' => 'Febrero', '202103' => 'Marzo', '202104' => 'Abril', '202105' => 'Mayo', '202106' => 'Junio', '202107' => 'Julio', '202108' => 'Agosto', '202109' => 'Septiembre', '202110' => 'Octubre', '202111' => 'Noviembre', '202112' => 'Diciembre'];
                                                @endphp
                                                @foreach ($detalleTrimestre as $row)
                                                    @if($row->NoTrimestre == $fila->NoTrimestre)
                                                        <tr role="row" class="even" style="color:black;">
                                                            <td>{{ $meses[trim($row->Periodo)] }}</td>
                                                            <td>{{ $row->AssociateName }}</td>
                                                            <td class="text-center">
                                                                <img src="{{asset("fpro/img/flags/" . $bandera[$row->Pais] ) }}" width="15px"><br>
                                                                {{ $pais[$row->Pais] }}
                                                            </td>
                                                            <td>{{ $row->Rango }}
                                                            </td>
                                                            <td>{{ number_format($row->Vp,0) }}</td>
                                                            <td>
                                                                {{ number_format($row->VGP,0) }}
                                                                @php
                                                                    $VGPAcumulado = $VGPAcumulado + $row->VGP;
                                                                    $incoporados = $incoporados + $row->Incorpo_VP100;
                                                                    $kinya = $kinya + $row->Kinya;
                                                                @endphp
                                                            </td>
                                                            <td class="text-center">{{ number_format($row->Incorpo_VP100) }}</td>
                                                            <td class="text-center">{{ number_format($row->Kinya) }}</td>
                                                            <td class="text-center">
                                                                @if($row->KiaiTrimestre == 'YES')
                                                                    <span class="flaticon-fill-tick" style="font-size: 20px; color: green"></span>
                                                                    <span hidden>Cumple</span>
                                                                @else
                                                                    <span class="flaticon-close-fill" style="font-size: 20px; color: red"></span>
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
                                                    <th>
														{{ number_format($VGPAcumulado, 2) }}
													</th>
													<th>
														@if($VGPAcumulado >= 12000)
                                                            <span class="flaticon-fill-tick" style="font-size: 20px; color: green"></span>
                                                        @else
                                                            <span class="flaticon-close-fill" style="font-size: 20px; color: red"></span>
                                                        @endif
													</th>
                                                    <th class="text-right" colspan="2">
                                                        Total Influencers:
                                                    </th>
                                                    <th>
                                                        <span class="pb-1">
                                                            {{ number_format($incoporados, 0) }}
                                                        </span>
                                                        &nbsp;&nbsp;
                                                        @if($incoporados >= 3)
                                                            <span class="flaticon-fill-tick" style="font-size: 15px; color: green"></span>
                                                        @else
                                                            <span class="flaticon-close-fill" style="font-size: 15px; color: red"></span>
                                                        @endif
                                                    </th>
                                                    <th class="text-right">
                                                        KinYa!:
                                                    </th>
                                                    <th>
                                                        <span class="pb-1">
                                                            {{ number_format($kinya, 0) }}
                                                        </span>
                                                        &nbsp;&nbsp;
                                                        @if($kinya >= 1)
                                                            <span class="flaticon-fill-tick" style="font-size: 15px; color: green"></span>
                                                        @else
                                                            <span class="flaticon-close-fill" style="font-size: 15px; color: red"></span>
                                                        @endif
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
										<h6 class="text-center mt-3">* Recuerda realizar el requisito mensual de 100 VP y 2,000 VGP</h6>
                                    </div>
                                </div>
                            </div>
						</div>
						
						<!-- Modales -->
						<div class="modal fade" id="modalTabGenealogy{{ $fila->NoTrimestre }}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl" role="document">
								<div class="modal-content">
									<div class="modal-body" style="">
										<div class="row ">
											<div class="col-md-12">
												<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
													<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
												</button>
											</div>
											<div class="col-md-12">
												<h2 class="text-center mainTitle">
													Trimestre #{{ $fila->NoTrimestre }} | Estatus de mi RED
												</h2>
											</div>
											<div class="col-lg-12 mainModalBody">
												<div class="row">
													<div class="col-lg-12 pb-4">
														@php
															$meses = ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'];
														@endphp
														<div class="col-lg-12">
															<h6><b>Fecha de actualización: {{ $update['dia'] }} de {{ $meses[$update['mes']] }} a las {{ $update['hora'] ?? '00:00:00' }} hora México.</b></h6>
														</div>
													</div>
													<div class="col-lg-12 text-center mb-2">
														<h6>
															Tu genealogía: 
															<select class="selectpicker mt-3" onchange="getDataTrimestre({{ $fila->NoTrimestre }}, this.value)" id="type">
																<option value="1" selected>Grupo Personal</option>
																<option value="2">Organizacional</option>
															</select>
														</h6>
													</div>
													<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
														<div class="container">
															<div class="row m-auto">
																<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5 table-responsive">
																	<table id="estatusRedTr{{ $fila->NoTrimestre }}" class="table table-striped table-bordered table-hover text-center" >
																		<thead>
																			<tr class="text-center ranktabheadder">
																				<th>Código Influencer</th>
																				<th><p style="width: 200px"></p>Nombre Influencer</th>
																				<th>Nivel</th>
																				<th>Rango</th>
																				<th>País</th>
																				<th>Email</th>
																				<th>VP</th>
																				<th>VGP</th>
																				<th>Periodo</th>
																				<th>VP Acumulado</th>
																				<th>VGP Acumulado</th>
																				<th>Trimestre #</th>
																				<th>Incorporaciones Acumuladas</th>
																				<th>KinYa! Acumulados</th>
																				<th>Cumple trimestre</th>
																			</tr>
																		</thead>
																	</table>
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
                    @endforeach
				</div>
			</div>
        </div>
        
		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="whyusWrapper" class="row">
					<div class="col-md-12 text-center">
						<h2 class="section-title mb-2">REQUISITOS </h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<img src="{{ asset('fpro/img/retos2021/ClubViajero_Banner.png') }}" width="100%">
					</div>
				</div>
			</div>
		</div>

		<div class="scroll-offset navHeaderWrapper mt-5 mb-5">
			<div class="container mt-5" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="premios" class="row requisitos mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<img src="{{ asset('fpro/img/retos2021/ClubViajero_Banner2.png') }}" width="100%">
					</div>
				</div>
			</div>
		</div>

		<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
			<div class="container" style="background-color: white; border-radius: 25px; opacity: 0.95;">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5 mt-5">
						<h2 class="section-title mb-5 mt-5">TÉRMINOS Y CONDICIONES</h2>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El participante deberá contar con 100 Puntos de VP en cada uno de los meses del año. </p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>De forma trimestral deberá de realizar todos los requisitos señalados, realizando cada mes un mínimo de 100 VP y 2,000 VGP. </p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Los volúmenes de VP y VGP serán tomados en cuenta al cierre de mes. </p>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Para los nuevos influencers que se incorporen durante el 2021, podrán participar realizando las bases correspondientes. Teniendo la oportunidad de realizar  100 VP en su mes de incorporación y en los meses que conforman el trimestre de incorporación. En los trimestres siguientes al trimestre de incorporación, deberán realizar los requisitos trimestrales que se solicitan ( 1,200 VP , 12,000 VGP, 1 kinya y 3 incorporaciones con 100 VP)  y completar los requisitos faltantes que no realizó en el primer trimestre de su incorporación.</p>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Para los nuevos influencers que se incorporen durante el 2021, al finalizar el año deberán de tener acumulado: VP= 4,800  VGP= 48,000  Inscritos= 12 con VP100 y Kinya=4</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Los trimestres están conformados: 1er. Trimestre (Ene-Feb-Marzo), 2º. Trimestre (Abril-Mayo-Junio), 3er. Trimestre (Julio-Agosto.Septiembre) y 4º. Trimestre ( Octubre-Noviembre-Diciembre) </p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Los 100 VP de las incorporaciones, deben ser realizados en un mes calendario dentro del trimestre.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>No aplica compresión especial en el VGP. </p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Contarán los volúmenes de todas las unidades de mercado. </p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El influencer que cumpla los requisitos de los 4 Trimestres de Club Viajero, tendrá el beneficio de ganarse 1 cupo para el Crucero 2022. </p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>No incluye traslados aéreos o terrestres para llegar a la ciudad de embarque. ·Cualquier actividad no mencionada en el premio. ·Gastos de Visa o documentación. Alimentación no mencionada en el premio. Plan de bebidas en el crucero (gaseosas o bebidas alcohólicas.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El cumplimiento de los requisitos deben ser realizados conforme a las políticas del manual del Asesor de Bienestar NIKKEN.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Para los nuevos influencers que se incorporen durante el 2021, en caso de que realicen en el trimestre de su incorporación sólo haya realizado 100 VP mensuales, no podrá considerarse como ganador de dicho trimestre por lo que no participará en ese trimestre en el Sorteo. Este trimestre se le tomará para que continué realizando las bases de Club Viajero.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="miniFooterWrapper" class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="position-relative">
							<div class="arrow text-center">
								<span class="flaticon-double-arrow-up"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y')}} Club Viajeros {{ Date('Y')}} <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>

		<!--<div id="chat">
			<div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="Conoce" data-toggle="modal" data-target=".mdl-tutorial">
				<i class="flaticon-youtube-play-button-line"></i>
			</div>
			<div class="modal fade bd-example-modal-lg mdl-tutorial" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" onclick="stopVideo()">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myExtraLargeModalLabel"></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="stopVideo()">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="py-3 text-center">
								<video controls="true" class="embed-responsive-item" width="100%">
									<source src="https://services.nikken.com.mx/fpro/img/ViajerosPro/vPro.mp4" type="video/mp4" />
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	</body>
	<script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('fpro/js/pages/landing-page/script.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
	<script src="{{ asset('fpro/js/aos.js') }}"></script>
	<script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('fpro/mainjs/ViajerosPro/viajerospro.js') }}"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-153578520-1');
	</script>
	<script>
		var flag = {'PER': 'peru.png', 'MEX': 'mexico.png', 'LAT': 'mexico.png', 'COL': 'colombia.png', 'CHL': 'chile.png', 'ECU': 'ecuador.png', 'PAN': 'panama.png', 'SLV': 'salvador.png', 'GTM': 'guatemala.png', 'CRI': 'costarica.png'};
		var meses = {'202101': 'Enero 2021', '202102': 'Febrero 2021', '202103': 'Marzo 2021', '202104': 'Abril 2021', '202105': 'Mayo 2021', '202106': 'Junio 2021', '202107': 'Julio 2021', '202108': 'Agosto 2021', '202109': 'Septiembre', '202110': 'Octubre 2021', '202111': 'Noviembre 2021', '202112': 'Diciembre 2021'};
		var rangos = { 1: 'Directo', 3: 'Ejecutivo', 5: 'Plata', 6: 'ORO', 7: 'Platino', 8: 'Diamante', 9: 'Diamante Real' };
		var trimestreG = 0;
		function getDataTrimestre(trimestre, tipo){
			trimestreG = trimestre;
			$("#estatusRedTr" + trimestreG).dataTable({
				lengthChange: false,
				ordering: true,
				info: false,
				destroy: true,
				paging: true,
				ajax: '/getGenViajeros?associateid=' + $("#associateid").val() + '&tipo=' + tipo + '&trimestreG=' + trimestreG,
				dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
				buttons: {
					buttons: [
						{ 
							extend: 'excel', 
							className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
							text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
						},
					]
				},
				columns: [
					{ data: 'associateid', className: 'text-center' },
					{ data: 'AssociateName', className: 'text-center' },
					{ data: 'nivel', className: 'text-center' },
					{ data: 'Rango', className: 'text-center' },
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
					{ data: 'Email', className: 'text-center' },
					{ 
						data: 'Vp',
						className: 'text-center',
						"render": function(data, type, row){
							return formatMoney(row.Vp, 0);
						}
					},
					{ 
						data: 'VGP',
						className: 'text-center',
						"render": function(data, type, row){
							var rVGP = row.VGP;
							rVGP = formatMoney(rVGP, 0);
							return rVGP;
						}
					},
					{
						data: 'Periodo', className: 'text-center',
						render:function(data, type, row){
							return meses[row.Periodo];
						}
					},
					{ 
						data: 'VpAcumulado',
						className: 'text-center',
						"render": function(data, type, row){
							return formatMoney(row.VpAcumulado, 0);
						}
					},
					{ 
						data: 'VGPacumulado',
						className: 'text-center',
						"render": function(data, type, row){
							return formatMoney(row.VGPacumulado, 0);
						}
					},
					{ data: 'NoTrimestre', className: 'text-center' },
					{ data: 'IncorpAcumulado', className: 'text-center' },
					{ data: 'KinyaAcumulado', className: 'text-center' },
					{
						data: 'Validacion',
						className: 'text-center',
						"render": function(data, type, row){
							var Cumple_MesV = row.Validacion.trim();
							var text = "";
							if(Cumple_MesV == 'T'){
								text = '<br><span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>';
							}
							else if(Cumple_MesV == 'N'){
								text = '<br><span class="badge badge-warning badge-pill"><i class="flaticon-close"></i> Nuevo incorporado</span>';
							}
							else{
								text = '<br><span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>';
							}
							return text;
						}
					},
				],
				language: {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
				}
			});
		}
	</script>
</html>

<script>
	/*	
		sumatoria en club viajeros en trimestres
		filtro en kaizen y taishi y el boton de detalles (kaizen y taishi)
		club viajeros: bg florida o playa
		viajeros pro: alaska o hiceverg
		kaizen, taishi: fondo blanco
		resto ser pro: de moemnto en vlanco hasta que se defina fondo

		cuestionarios del resto ser pro

		generar filtro por mes de vencimiento de ordenes,
		cuanto puntaje tiene la orden del detalle
	*/
</script>