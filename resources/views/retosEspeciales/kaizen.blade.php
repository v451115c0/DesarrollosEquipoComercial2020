<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | Equipo Kaizen 2021</title>
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
            .navHeadWrapperTaishi{
                background: linear-gradient(0.5deg, #e7dddc 0%, #00aac5 100%) !important;
            }

            nav.navbar .navbar-nav .nav-item .nav-link.active {
                color: #3b3b3b !important;
            }

            nav.navbar .navbar-nav .nav-link:hover {
                color: #3b3b3b !important;
            }

            .bodyTaishi{
                background-image: unset !important;
            }

            .btn-gradient-primary {
                border: 0 !important;
                color: #fff;
                background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);
                background-color: #04befe;
            }

			.navHeadWrapperTaishi {
				background: linear-gradient(0.5deg, #e7dddc 0%, #b2e5ed 100%) !important;
			}

			.btnicon {
				background-color: #434040 !important;
			}

			.btnModal {
				background: linear-gradient(90deg, #434040 0%, #434040 100%) !important;
			}

			.puntajeInput {
				color: #000 !important;
			}

			.btnExcel {
				background-image: linear-gradient(135deg, #e7dddc 0%, #b2e5ed 100%);
				color: black;
			}
			.btnExcel:hover {
				background-image: linear-gradient(135deg, #b2e5ed 0%, #e7dddc 100%);
			}
			.page-item.active .page-link {
				background-color: #b2e5ed !important;
				border-color: #b2e5ed !important;
				border-radius: 4px;
				color: black
			}
			ul.pagination li a:hover:not(.active) {
				background-color: #b2e5ed !important;
				color: #000 !important;
			}
        </style>
	</head>
	<body class="bodyTaishi">
		<div id="navHeadWrapper" class="navHeaderWrapper header-image navHeadWrapperTaishi">
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
									<li class="nav-item active">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapperResumen">Incorporaciones</a>
									</li>
									<li class="nav-item active">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapperResumenL">Líderes</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapper">Requisitos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#premios" hidden>Premios</a>
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
							<img src="{{ asset('fpro/img/retos2021/Kaizen_Logo.png') }}" width="80%">
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center current">
							<div class="row ml-1 mr-1 container-fluid pb-4">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
									@php
										$flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'MEX' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png'];
										$meses = ['202001' => 'Enero', '202002' => 'Febrero', '202003' => 'Marzo', '202004' => 'Abril', '202005' => 'Mayo', '202006' => 'Junio', '202007' => 'Julio', '202008' => 'Agosto', '202009' => 'Septiembre', '202010' => 'Octubre', '202011' => 'Noviembre', '202012' => 'Diciembre'];
										$rangosCompletos = ['PLO' => 'PLATINO', 'DIA' => 'DIAMANTE', 'DRL' => 'DIAMANTE REAL', 'EXE' => "EJECUTIVO"];
										$rangosCompletosN = [7 => 'PLATINO', 8 => 'DIAMANTE', 9 => 'DIAMANTE REAL', 'EXE' => "EJECUTIVO", 1 => 'DIRECTO', 2 => '', 3 => 'EJECUTIVO',  4 => '', 5 => 'PLATA', 6 => 'ORO'];
										//$periodo = $abiInfo[0]->Periodo ?? date('Ym');
									@endphp
									<h4>
										<span class="align-self-center">{{ trim($abiInfo[0]->Nombre ?? 'Nikken', ' ') }}</span>
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
									</h4>
									@php
										$meses = ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'];
									@endphp
									<div class="col-lg-12">
										<h6><b>Fecha de actualización: {{ $update['dia'] }} de {{ $meses[$update['mes']] }} a las {{ $update['hora'] ?? '00:00:00' }} hora México.</b></h6>
									</div>
									<h5>Estatus Actual</h5>
									<input type="hidden" id="associateid" readonly value="{{ $associateid }}">
								</div>
								<div class=" row" style="max-width: 100%;">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Rango: {{ $rangosCompletosN[$abiInfo[0]->Rango ?? 'EXE'] }}">
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
															<span class="form-control br-30 w-100 puntajeInput">VP Acumulado: {{ number_format($abiInfo[0]->VpAcumulado ?? 0) }}</span>
														</div>
													</td>
													<td>
														@php
															$vpacumulado = $abiInfo[0]->VpAcumulado ?? 0;
															$vpre = 5000;
															$vpfin = 0;
															if($vpacumulado < $vpre){
																$vpfin = $vpre - $vpacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">VP: {{ number_format($vpfin) }}</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">VGP Acumulado: {{ number_format($abiInfo[0]->VgpAcumulado ?? 0) }}</span>
														</div>
													</td>
													<td>
														@php
															$vgpacumulado = $abiInfo[0]->VgpAcumulado ?? 0;
															$vgpre = 50000;
															$vgpfin = 0;
															if($vgpacumulado < $vgpre){
																$vgpfin = $vgpre - $vgpacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">VGP: {{ number_format($vgpfin) }}</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">VP incorporados: {{ number_format($abiInfo[0]->VpIncorporados ?? 0) }}</span>
														</div>
													</td>
													<td>
														@php
															$vpiacumulado = $abiInfo[0]->VpIncorporados ?? 0;
															$vpire = 5000;
															$vpifin = 0;
															if($vpiacumulado < $vpire){
																$vpifin = $vpire - $vpiacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">VP incorporados: {{ number_format($vpifin) }}</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">Incorporados Frontales: {{ number_format($abiInfo[0]->CountFrontal ?? 0) }}</span>
														</div>
													</td>
													<td>
														@php
															$incacumulado = $abiInfo[0]->CountFrontal ?? 0;
															$incre = 3;
															$incfin = 0;
															if($incacumulado <= $incre){
																$incfin = $incre - $incacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">Incorporados Frontales: {{ number_format($incfin) }}</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">Incorporados de GP: {{ $abiInfo[0]->CountGP ?? 0}}</span>
														</div>
													</td>
													<td>
														@php
															$incacumulado = $abiInfo[0]->CountGP ?? 0;
															$incre = 3;
															$incfin = 0;
															if($incacumulado <= $incre){
																$incfin = $incre - $incacumulado;
															}
														@endphp
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
															<span class="form-control br-30 w-100 puntajeInput">Incorporados de GP: {{ number_format($incfin) }}</span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2" href="javascript:void(0)" onclick="getMainPts({{ $associateid }})" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl" style="background-color: #ff5e51 !important">
										Mis puntos
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="height: 150px; overflow: hidden;">
			<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 40%; width: 100%;">
				  <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill: #e7dddc;"></path>
			</svg>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="whyusWrapperResumen" class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
						<h2 class="section-title mb-2 mt-3">GENEALOGÍA INCORPORACIONES 2021</h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="table-responsive mb-4">
							<table id="resumenP" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
								<thead>
									@php
										$num = 1;
										$vpfinal = 0;
									@endphp
									<tr>
										<th style="color: gray" class="text-center">Código Incorporado</th>
										<th style="color: gray" class="text-center">Nombre Incorporado</th>
										<th style="color: gray" class="text-center">País</th>
										<th style="color: gray" class="text-center">Rango</th>
										<th style="color: gray" class="text-center">Fecha incorporación</th>
										<th style="color: gray" class="text-center">VP total</th>
										<th style="color: gray" class="text-center">Nivel</th>
										<th>Detalles</th>
									</tr>
								</thead>
								<tfoot>
									<tr class="table-dark">
										<th colspan="5">Total Volumen Incorporados</th>
										<th colspan="3" class="text-left">
											<span id="vpFinalLabel">@php echo number_format($vpfinal, 2); @endphp</span>
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="whyusWrapperResumenL" class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
						<h2 class="section-title mb-2 mt-3" id="tituloGesn">GENEALOGÍA ESTATUS LÍDERES 2021</h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="col-lg-12 text-center mb-2" hidden>
							<h4>
								Tu genealogía: 
								<select class="selectpicker mt-3" id="type" onchange="getDataTrimestre(this.value)">
									<option value="1" selected>Incorporaciones</option>
									<option value="2">Estatus LÍderes</option>
								</select>
							</h4>
						</div>
						<div class="table-responsive mb-4">
							<table id="resumenPL" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
								<thead>
									<tr>
										<th class="text-center">Código Incorporado</th>
										<th class="text-center">Nombre Incorporado</th>
										<th class="text-center">País</th>
										<th class="text-center">Rango</th>
										<th class="text-center">VP Acumulado</th>
										<th class="text-center">VGP Acumulado</th>
										<th class="text-center">Incorporaciones Frontales</th>
										<th class="text-center">Incorporaciones Grupo Personal</th>
										<th class="text-center">VP Incorporados 2021</th>
										<th class="text-center">Cumple Reto</th>
										<th class="text-center">Correo</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="whyusWrapper" class="row">
					<div class="col-md-12 text-center">
						<h2 class="section-title mb-2"></h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<img src="{{ asset('fpro/img/retos2021/Kaizen_Banner.png') }}" width="100%">
					</div>
				</div>
			</div>
		</div>

		<div class="scroll-offset navHeaderWrapper mt-5 mb-5" hidden>
			<div class="container mt-5" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="premios" class="row requisitos mt-5">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2">PREMIOS</h2>
					</div>
					<div class="col-xl-6 col-md-16 col-sm-12 col-12 text-center mt-4 m-md-auto">
						<h3>
							NIKKEN te trae un viaje espectacular por Rusia Imperial de 9 días y 8 noches.
						</h3>
					</div>
					<div class="col-md-6 text-center mt-5">
						<img src="{{ asset('fpro/img/ViajerosPro/premios.png') }}" width="99%">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner mt-4 divPremios pt-4">
						<h5 class="mb-5"><b><i class="flaticon-earth-globe"></i> Tiquete redondo desde tu país de origen (Ciudad principal).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-airplane"></i> Seguro de viajero durante las fechas del viaje.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-building"></i> Alojamiento en acomodación doble (8 noches) en hoteles categoría 4 estrellas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-non-veg"></i> Desayunos en los hoteles seleccionados (8 desayunos).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-cutlery-1"></i> Cenas (8 cenas) incluye cena especial de Bienvenida y Cierre.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-cutlery-1"></i> Almuerzos / Comida (4 almuerzos).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-map"></i> Guías locales en español para los tours.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita el Hermitage con entradas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita la Fortaleza de San Pedro y San Pablo con entradas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita nocturna de Moscú.</b></h5>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner mt-4 divPremios pt-4">
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita el Kremlin de Moscú con entradas (con catedrales).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-luggage"></i> Excursión a Troiste Sergueiev con entradas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita a la Catedral de San Isaac.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-stopwatch-1"></i> Tren Alta Velocidad de San Petersburgo a Moscú (incluido).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Excursión a Petrodvorets.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-building-1"></i> Visita del Palacio Yusupov.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-fill-car"></i> Traslados del Aeropuerto - Hotel - Aeropuerto.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-car"></i> Traslados terrestres para los tours.</b></h5>
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
						<p>El participante deberá contar con 100 Puntos de VP en cada uno de los meses del año.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Los volúmenes de VP y VGP serán tomados en cuenta al cierre de mes.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>No aplica compresión especial en el VGP.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Contarán los volúmenes de todas las unidades de mercado.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El cumplimiento de los requisitos deben ser realizados conforme a las políticas del manual del Asesor de Bienestar NIKKEN.</p>
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
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y')}} Equipo Kaizen {{ Date('Y') }} <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
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

		<!-- Modales -->
		<div class="modal fade bd-estatusper-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
									Mis puntos
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
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2>{{ trim($abiInfo[0]->Nombre ?? 'Nikken', ' ') }}</h2>
									</div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="container">
											<div class="row m-auto">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5 table-responsive">
													<table id="mainPtsC" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Código</th>
																<th><p style="width: 200px"></p>Nombre</th>
																<th>Mes</th>
																<th>País</th>
																<th>Rango</th>
																<th>VP</th>
																<th>VGP</th>
																<th>VP Acumulado</th>
																<th>VGP Acumulado</th>
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

		<div class="modal fade bd-estatusper-modal-xl-detalle" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
									Detalles
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
										<h2 id="nombreGenDet"></h2>
										<div class="table-responsive">
											<table class="table table-bordered mb-4">
												<thead>
													<tr>
														<th>Código</th>
														<th>País</th>
														<th>Rango</th>
														<th>Teléfono</th>
														<th>Correo</th>
														<th>Fecha de Incorporación</th>
														<th class="vp1">VP Enero</th>
														<th class="vp2">VP Febrero</th>
														<th class="vp3">VP Marzo</th>
														<th class="vp4">VP Abril</th>
														<th class="vp5">VP Mayo</th>
														<th class="vp6">VP Junio</th>
														<th class="vp7">VP Julio</th>
														<th class="vp8">VP Agosto</th>
														<th class="vp9">VP Septiembre</th>
														<th class="vp10">VP Octubre</th>
														<th class="vp11">VP Noviembre</th>
														<th class="vp12">VP Diciembre</th>
													</tr>
												</thead>
												<tbody id="tBodyDetail">
													
												</tbody>
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
		
		function getDataTrimestre(type){
			if(type == ''){
				type = 1;
			}
			if(type == 1){
				$("#tituloGen").text('GENEALOGÍA INCORPORACIONES 2021');
			}
			else if(type == 2){
				$("#tituloGen").text('GENEALOGÍA ESTATUS LIDERES 2021');
			}

			$("#resumenP").dataTable({
				lengthChange: false,
				ordering: false,
				info: false,
				destroy: true,
				paging: true,
				ajax: '/getGenealgiTaishi?associateid=' + $("#associateid").val() + '&type=1',
				dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
				columns: [
					{ data: 'associateid', className: 'text-center' },
					{ data: 'Nombre', className: 'text-center' },
					{
						data: 'Pais', className: 'text-center',
						render: function(data, type, row){
							var html = '<img src="../fpro/img/flags/' + flag[row.Pais] + '" width="15px"><br>' + row.Pais;
							return html;
						}
					},
					{
						data: 'Rango',
						className: 'text-center',
						render: function(data, type, row){
                            var rangos = { 1: 'Directo', 3: 'Ejecutivo', 5: 'Plata', 6: 'ORO', 7: 'Platino', 8: 'Diamante', 9: 'Diamante Real' };
                            return rangos[row.Rango];
                        }
					},
					{ data: 'FechaIncorp', className: 'text-center' },
					{
						data: 'VpTotal',
						className: 'text-center',
						render: function(data, type, row){
							return formatMoney(row.VpTotal);
						}
					},
					{
						data: 'lvel', className: 'text-center',
						render: function(data, type, row){
							if(row.lvel == 1){
								return "Frontal";
							}
							else{
								return "Grupo Personal";
							}
						}
					},
					{
						data: 'Rango',
						className: 'text-center',
						render: function(data, type, row){
                            var html = '<a href="javascript:void(0)" data-toggle="modal" data-target=".bd-estatusper-modal-xl-detalle">' +
											'<span class="flaticon-view" style="font-size: 20px !important;" onclick="getDetails(' + row.associateid + ', \'' + row.Nombre + '\')"></span>' +
										'</a>';
                            return html;
                        }
					},
				],
				buttons: {
					buttons: [
						{ 
							extend: 'excel', 
							className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
							text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
						},
					]
				},
				language: {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
				}
			});
		}
		getDataTrimestre('');

		$("#resumenPL").dataTable({
			lengthChange: false,
			ordering: true,
			info: false,
			destroy: true,
			paging: true,
			ajax: '/getGenealgiTaishi?associateid=' + $("#associateid").val() + '&type=2',
			dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
			columns: [
				{ data: 'associateid', className: 'text-center' },
				{ data: 'Nombre', className: 'text-center' },
				{
					data: 'Pais', className: 'text-center',
					render: function(data, type, row){
						var html = '<img src="../fpro/img/flags/' + flag[row.Pais] + '" width="15px"><br>' + row.Pais;
						return html;
					}
				},
				{
					data: 'Rango',
					className: 'text-center',
					render: function(data, type, row){
						var rangos = { 1: 'Directo', 3: 'Ejecutivo', 5: 'Plata', 6: 'ORO', 7: 'Platino', 8: 'Diamante', 9: 'Diamante Real' };
						return rangos[row.Rango];
					}
				},
				{
					data: 'VpAcumulado',
					className: 'text-center',
					render: function(data, type, row){
						return formatMoney(row.VpAcumulado);
					}
				},
				{
					data: 'VGPAcumulado',
					className: 'text-center',
					render: function(data, type, row){
						return formatMoney(row.VGPAcumulado);
					}
				},
				{
					data: 'countFrontal',
					className: 'text-center',
					render: function(data, type, row){
						return formatMoney(row.countFrontal);
					}
				},
				{
					data: 'CountGP',
					className: 'text-center',
					render: function(data, type, row){
						return formatMoney(row.CountGP);
					}
				},
				{
					data: 'VpIncorporados',
					className: 'text-center',
					render: function(data, type, row){
						return formatMoney(row.VpIncorporados);
					}
				},
				{
					data: 'WinReto',
					className: 'text-center',
					render: function(data, type, row){
						var WinReto = row.WinReto;
						if(parseInt(row.WinReto) >= 1){
							WinReto = '<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>';
						}
						else{
							WinReto = '<span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>';
						}
						return WinReto;
					}
				},
				{ data: 'Email', className: 'text-center' },
			],
			buttons: {
				buttons: [
					{ 
						extend: 'excel', 
						className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
						text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
					},
				]
			},
			language: {
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
			}
		});
 
		function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
			try {
				if(amount == '.00'){
					amount = 0;
				}
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

		function getDetails(id, nombre){
			$("#nombreGenDet").text(nombre);
			$.ajax({
				type: "get",
				url: "/getDetails",
				data: { id: id },
				beforeSend: function(){
					$("#tBodyDetail").empty();
					for (let x = 1; x < 13; x++) {
						$(".vp" + x).hide();
					}
				},
				success: function(response){
					var html = '<tr>' + 
									'<td>' + response[0]['Associateid'] + '</td>' +
									'<td>' + '<img src="../fpro/img/flags/' + flag[response[0]['Pais']] + '" width=25px> <br>' +  response[0]['Pais'] + '</td>' +
									'<td>' + rangos[response[0]['Rango']] + '</td>' +
									'<td>' + response[0]['Telefono'] + '</td>' +
									'<td>' + response[0]['Email'] + '</td>' +
									'<td>' + response[0]['Fecha_Incorp'] + '</td>' +
									'<td class="vpt1">' + formatMoney(response[0]['VpEnero']) + '</td>' +
									'<td class="vpt2">' + formatMoney(response[0]['VpFebrero']) + '</td>' +
									'<td class="vpt3">' + formatMoney(response[0]['VpMarzo']) + '</td>' +
									'<td class="vpt4">' + formatMoney(response[0]['VpAbril']) + '</td>' +
									'<td class="vpt5">' + formatMoney(response[0]['VpMayo']) + '</td>' +
									'<td class="vpt6">' + formatMoney(response[0]['VpJunio']) + '</td>' +
									'<td class="vpt7">' + formatMoney(response[0]['VpJulio']) + '</td>' +
									'<td class="vpt8">' + formatMoney(response[0]['VpAgosto']) + '</td>' +
									'<td class="vpt9">' + formatMoney(response[0]['VpSeptiembre']) + '</td>' +
									'<td class="vpt10">' + formatMoney(response[0]['VpOctubre']) + '</td>' +
									'<td class="vpt11">' + formatMoney(response[0]['VpNoviembre']) + '</td>' +
									'<td class="vpt12">' + formatMoney(response[0]['VpDiciembre']) + '</td>' +
								'</tr>';
						
						$("#tBodyDetail").html(html);
						var Navidad = new Date();
						var mes = Navidad.getMonth();
						if(mes == 0){
							$(".vpt1").show();
							$(".vpt2, .vpt3, .vpt4, .vpt5, .vpt6, .vpt7, .vpt8, .vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1").show();
							$(".vp2, .vp3, .vp4, .vp5, .vp6, .vp7, .vp8, .vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 1){
							$(".vpt1, .vpt2").show();
							$(".vpt3, .vpt4, .vpt5, .vpt6, .vpt7, .vpt8, .vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2").show();
							$(".vp3, .vp4, .vp5, .vp6, .vp7, .vp8, .vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 2){
							$(".vpt1, .vpt2, .vpt3").show();
							$(".vpt4, .vpt5, .vpt6, .vpt7, .vpt8, .vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3").show();
							$(".vp4, .vp5, .vp6, .vp7, .vp8, .vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 3){
							$(".vpt1, .vpt2, .vpt3, .vpt4").show();
							$(".vpt5, .vpt6, .vpt7, .vpt8, .vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4").show();
							$(".vp5, .vp6, .vp7, .vp8, .vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 4){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5").show();
							$(".vpt6, .vpt7, .vpt8, .vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4, .vp5").show();
							$(".vp6, .vp7, .vp8, .vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 5){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5, .vpt6").show();
							$(".vpt7, .vpt8, .vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4, .vp5, .vp6").show();
							$(".vp7, .vp8, .vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 6){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5, .vpt6, .vpt7").show();
							$(".vpt8, .vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4, .vp5, .vp6, .vp7").show();
							$(".vp8, .vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 7){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5, .vpt6, .vpt7, .vpt8").show();
							$(".vpt9, .vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4, .vp5, .vp6, .vp7, .vp8").show();
							$(".vp9, .vp10, .vp11, .vp12").hide();
						}
						if(mes == 8){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5, .vpt6, .vpt7, .vpt8, .vpt9").show();
							$(".vpt10, .vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4, .vp5, .vp6, .vp7, .vp8, .vp9").show();
							$(".vp10, .vp11, .vp12").hide();
						}
						if(mes == 9){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5, .vpt6, .vpt7, .vpt8, .vpt9, .vpt10").show();
							$(".vpt11, .vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4, .vp5, .vp6, .vp7, .vp8, .vp9, .vp10").show();
							$(".vp11, .vp12").hide();
						}
						if(mes == 10){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5, .vpt6, .vpt7, .vpt8, .vpt9, .vpt10, .vpt11").show();
							$(".vpt12").hide();
							$(".vp1, .vp2, .vp3, .vp4, .vp5, .vp6, .vp7, .vp8, .vp9, .vp10, .vp11").show();
							$(".vp12").hide();
						}
						if(mes == 11){
							$(".vpt1, .vpt2, .vpt3, .vpt4, .vpt5, .vpt6, .vpt7, .vpt8, .vpt9, .vpt10, .vpt11, .vpt12").show();
							$(".vp1, .vp2, .vp3, .vp4, .vp5, .vp6, .vp7, .vp8, .vp9, .vp10, .vp11, .vp12").show();
						}
				}
			});
		}

		function getMainPts(id){
			$("#mainPtsC").dataTable({
				lengthChange: false,
				ordering: false,
				info: false,
				destroy: true,
				paging: true,
				ajax: '/getMainPts?associateid=' + id,
				dom: '<"row"<"col-md-12"<"row"<"col-md-6"><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
				columns: [
					{ data: 'Associateid', className: 'text-center' },
					{ data: 'AssociateName', className: 'text-center' },
					{
						data: 'AssociateName', className: 'text-center',
						render: function(data, type, row){
							return meses[row.Periodo];
						}
					},
					{
						data: 'Pais', className: 'text-center',
						render: function(data, type, row){
							var paisText = row.Pais;
							if(paisText == 'LAT'){
								paisText = "MEX";
							}
							return "<img src='../fpro/img/flags/" + flag[row.Pais.trim()] + "' width=25px'> <br> " + paisText;
						}
					},
					{ data: 'Rango', className: 'text-center' },
					{
						data: 'Vp',
						className: 'text-center',
						render: function(data, type, row){
							return formatMoney(row.Vp);
						}
					},
					{
						data: 'VGP',
						className: 'text-center',
						render: function(data, type, row){
							return formatMoney(row.VGP);
						}
					},
					{
						data: 'VpAcumulado',
						className: 'text-center',
						render: function(data, type, row){
							return formatMoney(row.VpAcumulado);
						}
					},
					{
						data: 'VGPacumulado',
						className: 'text-center',
						render: function(data, type, row){
							return formatMoney(row.VGPacumulado);
						}
					},
				],
				buttons: {
					buttons: [
						{ 
							extend: 'excel', 
							className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
							text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
						},
					]
				},
				language: {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
				}
			});
		}
	</script>
</html>