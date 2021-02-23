<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | Ser Pro 2021</title>
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
		<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.1.0/dist/confetti.browser.min.js"></script>
        <style>
            .navHeadWrapperTaishi{
                background: linear-gradient(0.5deg, #f7c58d 0%, #f6a755 100%) !important;
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

			.btnicon {
				background-color: #434040 !important;
			}

			.btnModal {
				background: linear-gradient(90deg, #434040 0%, #434040 100%) !important;
			}

			.swal2-popup {
				border-radius: 50px !important;
			}
			.btnExcel {
				background-image: linear-gradient(135deg, #f7c58d 0%, #f6a755 100%);
				color: black;
			}
			.btnExcel:hover {
				background-image: linear-gradient(135deg, #f6a755 0%, #f7c58d 100%);
			}
			.page-item.active .page-link {
				background-color: #f6a755 !important;
				border-color: #f6a755 !important;
				border-radius: 4px;
				color: black
			}
			ul.pagination li a:hover:not(.active) {
				background-color: #f6a755 !important;
				color: #000 !important;
			}

			#chat-circle i {
				background-image: linear-gradient(to right, #f7c58d 0%, #f6a755 100%);
				border: solid 1px #000;
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
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapperResumen">Platas</a>
									</li>
									<li class="nav-item active">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapperResumenoro">Oros</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapper">Requisitos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#premios">Beneficios</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#servicesWrapper" >Términos y Condiciones</a>
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
							<img src="{{ asset('fpro/img/retos2021/reto_ser_pro.png') }}" width="80%">
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center current">
							<div class="row ml-1 mr-1 container-fluid pb-4">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
									@php
										$flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'MEX' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png'];
										$rangosCompletos = ['PLO' => 'PLATINO', 'DIA' => 'DIAMANTE', 'DRL' => 'DIAMANTE REAL', 'EXE' => "EJECUTIVO"];
										$periodo = $abiInfo[0]->Periodo ?? date('Ym');
										$mesesCompletos = ['202001' => 'Enero 2020', '202002' => 'Febrero 2020', '202003' => 'Marzo 2020', '202004' => 'Abril 2020', '202005' => 'Mayo 2020', '202006' => 'Junio 2020', '202007' => 'Julio 2020', '202008' => 'Agosto 2020', '202009' => 'Septiembre', '202010' => 'Octubre 2020', '202011' => 'Noviembre 2020', '202012' => 'Diciembre 2020', '202101' => 'Enero 2021', '202102' => 'Febrero 2021', '202103' => 'Marzo 2021', '202104' => 'Abril 2021', '202105' => 'Mayo 2021', '202106' => 'Junio 2021', '202107' => 'Julio 2021', '202108' => 'Agosto 2021', '202109' => 'Septiembre', '202110' => 'Octubre 2021', '202111' => 'Noviembre 2021', '202112' => 'Diciembre 2021', '202201' => 'Enero 2022', '202202' => 'Febrero 2022', '202203' => 'Marzo 2022', '202204' => 'Abril 2022', '202205' => 'Mayo 2022', '202206' => 'Junio 2022', '202207' => 'Julio 2022', '202208' => 'Agosto 2022', '202209' => 'Septiembre', '202210' => 'Octubre 2022', '202211' => 'Noviembre 2022', '202212' => 'Diciembre 2022'];
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
									<h5>Estatus Actual</h5>
									<input type="hidden" id="associateid" readonly value="{{ $associateid ?? 0 }}">
								</div>
								<div class=" row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Rango: {{ $rangosCompletos[trim($abiInfo[0]->Rango ?? 'DRL')] }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Ascensos Plata: {{ $total[0]->TotalPlatas ?? 0 }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Ascensos Oro: {{ $total[0]->TotalOros ?? 0 }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Platas Con Rango Pago: {{ $total[0]->TotalPlatasRangoP ?? 0 }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Oros Con Rango Pago: {{ $total[0]->TotalOrosRangoP ?? 0 }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Periodo Inicio: {{ $mesesCompletos[$total[0]->PeriodInicio ?? '202101'] }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Periodo Fin: {{ $mesesCompletos[$total[0]->PeriodFin ?? '202112'] }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4" hidden>
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl" style="background-color: #ff5e51 !important">
										Avances de mi red
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
				  <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill: #f7c58d;"></path>
			</svg>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="whyusWrapperResumen" class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
						<h2 class="section-title mb-2 mt-3">Registros Plata</h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="table-responsive mb-4">
							<table id="incorporacionesPlata" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
								<thead>
									<tr>
										<th style="color: gray" class="text-center">Código</th>
										<th style="color: gray" class="text-center">Nombre</th>
										<th style="color: gray" class="text-center">País</th>
										<th style="color: gray" class="text-center">Rango registrado</th>
										<th style="color: gray" class="text-center">Periodo de Avance</th>
										<th style="color: gray" class="text-center">Fecha de registro</th>
										<th style="color: gray" class="text-center">Total rango pago cumplido</th>
										<th style="color: gray" class="text-center">Detalles</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner mt-3 text-center bg-white">
			<span class="flaticon-danger-line mb-3 statusprs" style="font-size: 20px; color: coral;"></span>
			<span class="statusprs" style="color: coral;">Los nuevos registros se verán reflejados cada hora.</span> <br>
		</div>
		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="whyusWrapperResumenoro" class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
						<h2 class="section-title mb-2 mt-3">Registros Oro</h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="table-responsive mb-4">
							<table id="incorporacionesOro" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
								<thead>
									<tr>
										<th style="color: gray" class="text-center">Código</th>
										<th style="color: gray" class="text-center">Nombre</th>
										<th style="color: gray" class="text-center">País</th>
										<th style="color: gray" class="text-center">Rango registrado</th>
										<th style="color: gray" class="text-center">Periodo de Avance</th>
										<th style="color: gray" class="text-center">Fecha de registro</th>
										<th style="color: gray" class="text-center">Total rango pago cumplido</th>
										<th style="color: gray" class="text-center">Detalles</th>
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
						<img src="{{ asset('fpro/img/retos2021/SerPro_Banner.png') }}" width="100%">
					</div>
				</div>
			</div>
		</div>

		<div class="scroll-offset navHeaderWrapper mb-5">
			<div class="container" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="premios" class="row requisitos">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<img src="{{ asset('fpro/img/retos2021/SerPro_Banner2.png') }}" width="100%">
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
						<p>La fecha de inicio y finalización se considerará al siguiente mes que avanza de rango el primer influencer.  A partir de este mes el Mentor, tendrá 12 meses para finalizar el Reto Ser Pro y cumplir los requisitos.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Si finaliza el periodo del Reto y el Mentor aún no ha logrado cumplir con todos los requisitos, se dará una nueva fecha de inicio y finalización del Reto.  La fecha de inicio  será determinada por el segundo influencer que avanzó de rango; por lo que no se contará el primer  influencer que avanzó de rango.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El Mentor deberá contar con 100 Puntos de VP en cada uno de los meses del año.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El Mentor podrá acompañar en el avance de Rango Plata y Oro a influencers de su Grupo Personal o a profundidad.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Los requisitos de rango de pago son:  Influencer Plata ( VP100, VGP 1,500, VO 4,000) .  Influencer Oro (VP100, VGP 1,500, VO 15,000 , VO-LDP 5,000 y VO-LDPYS 1,500).</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Los meses de rango de pago podrán ser consecutivos o alternados, durante el periodo de vigencia del Reto.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Se podrá  considerar al mismo influencer,  si califica en meses diferentes su avance de rango a Plata y después a Oro; siempre y cuando se haya mantenido 2 meses en el rango de pago Oro con VO 15,000 mensual y cumpliendo los requisitos de pago de rango.  El Mentor deberá de ser el mismo en ambos avances de rango.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>No se considerarán avances a Rango Plata que estén en la misma línea descendente.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Para que sean considerados los influencers que avanzaron de rango, una vez que cierren su calificación y avancen  de rango, los influencers deberán llenar  2 Cuestionarios. En caso de que el Mentor fuera diferente en el Cuestionario 1 y 2, este avance de rango, será anulado para el Reto ser Pro y no será contado a ningún Mentor.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El Viaje para 4 personas con destino nacional, será entregado al mentor que cumplió con todas las acciones y requisitos del Reto. Las fechas de viaje serán acordados 3 meses antes de la compra de los boletos de avión y hotel. Una vez realizado lo anterior NIKKEN no tramitará cambios.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Los influencers que avanzaron de rango y se mantuvieron los meses solicitados en su rango de pago, tendrán el beneficio del 30% de descuento en el Seminario Diamante 2022.  En caso de que el Mentor no cumpliera con la realización de las acciones para completar el Reto Ser Pro, no será limitante para otorgarle al influencer el premio del 30% de descuento al Seminario Diamante 2022.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El Mentor podrá realizar todos los requisitos del Reto antes de los 12 meses y podrá iniciar un nuevo Reto.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El beneficio del Seminario Diamante como premio, no es acumulable con otros retos o incentivos.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>El cumplimiento de los requisitos deben ser realizados conforme a las políticas del manual del Asesor de Bienestar NIKKEN. Los volúmenes de VP , VGP y VO serán tomados en cuenta al cierre de mes. No aplica compresión especial en el VGP.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p>Contarán los volúmenes de todas las unidades de mercado.</p>
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
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y') }} Equipo Kaizen {{ Date('Y') }} <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>

		<div id="chat">
			<div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="Conoce" onclick="getmentor()">
				<i class="flaticon-question"></i>
			</div>
		</div>

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
										<div class="col-lg-12 pb-4">
											<h6>Fecha de actualización: 20 de Enero a las 12:06:14 hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<h4>
											<span class="align-self-center">{{ trim($abiInfo[0]->AssociateName ?? 'Nikken', ' ') }}</span>
											<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										</h4>
									</div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="container">
											<div class="row m-auto">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5 table-responsive">
													<table id="mainPts-" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Código</th>
																<th><p style="width: 200px"></p>Nombre</th>
																<th>Mes</th>
																<th>VP Mes</th>
																<th>VGP Mes</th>
																<th>VGP Acumulado</th>
																<th>Rango actual</th>
																<th>Rango de pago</th>
																<th>KinYa! personal</th>
																<th>KinYa! frontal</th>
																<th>Califica Rango de Pago</th>
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
											<table class="table table-bordered mb-4" id="detailsAbi">
												<thead>
													<tr>
														<th>Código</th>
														<th>Rango Registrado</th>
														<th>Rango de pago</th>
														<th>Periodo</th>
														<th>Cumple rango de pago</th>
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
		function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
			try {
				if(amount == '.00'){
					amount = 0;
				}
				decimalCount = Math.abs(decimalCount);
				decimalCount = isNaN(decimalCount) ? 2 : decimalCount;
				const negativeSign = amount < 0 ? "-" : "";
				let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
				let j = (i.length > 3) ? i.length % 3 : 0;
				return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
			}
			catch (e) {
				console.log(e)
			}
		};

		var flag = {'PER': 'peru.png', 'MEX': 'mexico.png', 'LAT': 'mexico.png', 'COL': 'colombia.png', 'CHL': 'chile.png', 'ECU': 'ecuador.png', 'PAN': 'panama.png', 'SLV': 'salvador.png', 'GTM': 'guatemala.png', 'CRI': 'costarica.png'};
		var meses = {'202001': 'Enero 2020', '202002': 'Febrero 2020', '202003': 'Marzo 2020', '202004': 'Abril 2020', '202005': 'Mayo 2020', '202006': 'Junio 2020', '202007': 'Julio 2020', '202008': 'Agosto 2020', '202009': 'Septiembre', '202010': 'Octubre 2020', '202011': 'Noviembre 2020', '202012': 'Diciembre 2020', '202101': 'Enero 2021', '202102': 'Febrero 2021', '202103': 'Marzo 2021', '202104': 'Abril 2021', '202105': 'Mayo 2021', '202106': 'Junio 2021', '202107': 'Julio 2021', '202108': 'Agosto 2021', '202109': 'Septiembre', '202110': 'Octubre 2021', '202111': 'Noviembre 2021', '202112': 'Diciembre 2021'};
		var rangos = { 1: 'Directo', 3: 'Ejecutivo', 5: 'Plata', 6: 'Oro', 7: 'Platino', 8: 'Diamante', 9: 'Diamante Real' };

		$("#incorporacionesPlata").dataTable({
			lengthChange: false,
			ordering: false,
			info: false,
			destroy: true,
			paging: true,
			ajax: '/incorporacionesPlata?associateid=' + $("#associateid").val(),
			dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
			columns: [
				{ data: 'Associateid', className: 'text-center' },
				{ data: 'AssociateName', className: 'text-center' },
				{
					data: 'Pais', className: 'text-center',
					render: function(data, type, row){
						var html = '<img src="../fpro/img/flags/' + flag[row.Pais] + '" width="15px"><br>' + row.Pais;
						return html;
					}
				},
				{
					data: 'Rango_Registrado', className: 'text-center',
					render: function(data, type, row){
						return rangos[row.Rango_Registrado];
					}
				},
				{
					data: 'Period_Ascenso', className: 'text-center',
					render: function(data, type, row){
						return meses[row.Period_Ascenso];
					}
				},
				{ data: 'Fecha_RegistroEstrategia', className: 'text-center' },
				{ data: 'TotalRangoP', className: 'text-center' },
				{
					data: 'Rango',
					className: 'text-center',
					render: function(data, type, row){
						var html = '<a href="javascript:void(0)" data-toggle="modal" data-target=".bd-estatusper-modal-xl-detalle">' +
										'<span class="flaticon-view" style="font-size: 20px !important;" onclick="getDetails(' + row.Associateid + ', \'' + row.AssociateName + '\', 5)"></span>' +
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

		$("#incorporacionesOro").dataTable({
			lengthChange: false,
			ordering: false,
			info: false,
			destroy: true,
			paging: true,
			ajax: '/incorporacionesOro?associateid=' + $("#associateid").val(),
			dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
			columns: [
				{ data: 'Associateid', className: 'text-center' },
				{ data: 'AssociateName', className: 'text-center' },
				{
					data: 'Pais', className: 'text-center',
					render: function(data, type, row){
						var html = '<img src="../fpro/img/flags/' + flag[row.Pais] + '" width="15px"><br>' + row.Pais;
						return html;
					}
				},
				{
					data: 'Rango_Registrado', className: 'text-center',
					render: function(data, type, row){
						return rangos[row.Rango_Registrado];
					}
				},
				{
					data: 'Period_Ascenso', className: 'text-center',
					render: function(data, type, row){
						return meses[row.Period_Ascenso];
					}
				},
				{ data: 'Fecha_RegistroEstrategia', className: 'text-center' },
				{ data: 'TotalRangoP', className: 'text-center' },
				{
					data: 'Rango',
					className: 'text-center',
					render: function(data, type, row){
						var html = '<a href="javascript:void(0)" data-toggle="modal" data-target=".bd-estatusper-modal-xl-detalle">' +
										'<span class="flaticon-view" style="font-size: 20px !important;" onclick="getDetails(' + row.Associateid + ', \'' + row.AssociateName + '\', 6)"></span>' +
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

		function getDetails(id, nombre, rango){
			$("#detailsAbi").dataTable({
				lengthChange: false,
				ordering: false,
				info: false,
				destroy: true,
				paging: true,
				ajax: '/detailsAbiSerpro?associateid=' + id + "&rango=" + rango,
				dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
				columns: [
					{ data: 'Associateid', className: 'text-center' },
					{
						data: 'Rango_Registrado', className: 'text-center',
						render: function(data, type, row){
							return rangos[row.Rango_Registrado];
						}
					},
					{
						data: 'RangoPago', className: 'text-center',
						render: function(data, type, row){
							return rangos[row.RangoPago];
						}
					},
					{
						data: 'PeriodRangoP', className: 'text-center',
						render: function(data, type, row){
							return meses[row.PeriodRangoP];
						}
					},
					{
						data: 'CumpleRangoP', className: 'text-center',
						render: function(data, type, row){
							var CumpleRangoP = row.CumpleRangoP;
							if(parseInt(row.CumpleRangoP) >= 1){
								CumpleRangoP = '<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>';
							}
							else{
								CumpleRangoP = '<span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>';
							}
							return CumpleRangoP;
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

		function valWinSerPro(){
			$.ajax({
				type: "get",
				url: "/valWinSerPro",
				data: { associateid: $("#associateid").val() },
				success: function(response){
					if(response == 't'){
						var end = Date.now() + (15 * 1000);

						var interval = setInterval(function() {
							if (Date.now() > end) {
								return clearInterval(interval);
							}

							confetti({
								startVelocity: 30,
								spread: 360,
								ticks: 60,
								origin: {
									x: Math.random(),
									y: Math.random() - 0.2
								}
							});
						}, 200);

						var duration = 15 * 1000;
						var end = Date.now() + duration;

						function frame() {
							confetti({
							particleCount: 15,
							angle: 60,
							spread: 55,
							origin: { x: 0 }
							});
							
							confetti({
							particleCount: 15,
							angle: 120,
							spread: 55,
							origin: { x: 1 }
							});

							if (Date.now() < end) {
								requestAnimationFrame(frame);
							}
						}

						swal({
							title: '¡¡Felicitaciones!!',
							text: 'Has cumplido el Reto Ser Pro',
							imageUrl: '../fpro/img/convMayo/winner.png',
							imageWidth: 400,
							imageHeight: 220,
							imageAlt: 'Ganador',
							animation: false,
							padding: '2em',
						})
					}
					else{
						swal({
							title: '',
							icon: 'info',
							html:'Recuerda que debes lograr 2 avances Plata(mantener 4 meses rango de pago) y 2 avances Oro (mantener 2 meses rango de pago)',
							type: 'info',
							padding: '2em',
							allowOutsideClick: false,
							allowEscapeKey: false,
						})
					}
				}
			});
		}
		valWinSerPro();

		function getmentor(){
			swal({
				title: '¿Qué es un mentor?',
				icon: 'info',
				html:'Influencer rango Platino ó mayor, que brinda apoyo personalizado y acompañamiento a los influencers, durante su proceso de ascenso de rango a influencer Plata o influencer Oro y en los siguientes meses después de su avance , fortaleciendo su estructura, liderazgo y logro de rango de pago en por lo menos 4 meses en el año para influencers Plata y 2 meses en el año para influencers Oro. <br>' +
						'El Mentor potencializará las  competencias de los influencers, en el desarrollo del negocio y su propósito en la Comunidad Nikken.<br>' +
						'El mentor brinda acciones para el crecimiento y formación de equipos con los influencers de la organización.<br>' +
						'El mentor es ejemplo y enseña a los influencers a  conducirse con las mejores prácticas de negocio.',
				type: 'info',
				padding: '2em',
				allowOutsideClick: false,
				allowEscapeKey: false,
			})
		}
	</script>
</html>

