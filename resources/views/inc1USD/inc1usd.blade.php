<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | Incorporación MOKUTEKI</title>
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

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sliders/owlCarousel/css/owl.carousel.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sliders/owlCarousel/css/owl.theme.default.min.css') }}"/>

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/charts/chartist/chartist.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/modules/modules-widgets.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/maincss/inc1USD/inc1USD.css') }}"/>
	</head>
	<body>
        <div class="containerSVG" hidden> 
            <svg viewBox="0 0 500 500" 
                preserveAspectRatio="xMinYMin meet"
                style="z-index: -2;"> 
                  
                <path d="M0, 100 C150, 200 350, 
                    0 500, 100 L500, 00 L0, 0 Z" 
                    style="stroke: none;  
                    fill:rgba(30, 144, 225, 0.5);"> 
                </path> 
            </svg> 
        </div>
        <div class="containerSVG" hidden> 
            <svg viewBox="0 0 500 500" 
                preserveAspectRatio="xMinYMin meet"
                style="z-index:-1;"> 
                  
                <path d="M0, 80 C300, 0 400,  
                    300 500, 50 L500, 00 L0, 0 Z" 
                    style="stroke: none;  
                    fill:rgba(153, 50, 204, 0.5);"> 
                </path> 
            </svg> 
        </div>
        <div class="containerSVG" hidden> 
            <svg viewBox="0 0 500 500" 
                preserveAspectRatio="xMinYMin meet"
                style="z-index:-3;"> 
                  
                <path d="M0, 100 C150, 300 350, 
                    0 500, 100 L500, 00 L0, 0 Z" 
                    style="stroke: none;  
                    fill:rgba(220, 20, 60, 0.5);"> 
                </path> 
            </svg> 
        </div>

		<div id="navHeadWrapper" class="navHeaderWrapper header-image">
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
										<a id="navlink" class="nav-link js-scroll-trigger" href="#chkoutFeaturesWrapper">Requisitos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#premios">Premios inicio perfecto</a>
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
							<img src="{{ asset('fpro/img/inc1USD/kitmokuteki.png') }}" width="100%">
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center current" style="border-radius: 35px; background-color: rgba(255, 255, 255, 0.8)">
							<div class="row ml-1 mr-1 container-fluid pb-4">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
									<p>Te brinda todas las posibilidades para que tu comunidad crezca exponencialmente y logres DupliKar y MultipliKar tu esfuerzo.</p>
									<h4>
										<span class="align-self-center">{{ $abiInfo[0]->AssociateName ?? 'NIKKEN LATAM' }}</span>
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
									</h4>
									<input type="hidden" id="associateid" readonly value="{{ $associateid ?? 000000 }}">
									<input type="hidden" id="Pais" readonly value="{{ $abiInfo[0]->Pais ?? 'LAT' }}">
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl">
										Mis Kits
									</a>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusRed-modal-xl">
										Estatus de mi red
									</a>
								</div>
								@php
									$class = "col-xl-12 col-lg-12 col-md-12 col-sm-12";
									if($asesor == 'nuevo'){
										$class = "col-xl-6 col-lg-6 col-md-12 col-sm-12";
									}
								@endphp
								@if ($asesor == 'nuevo')
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusMiInicio-modal-xl">
											Mi Inicio Perfecto
										</a>
									</div>
								@endif
								<div class="{{ $class }} site-content-inner align-self-center mr-auto mt-4">
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusInicioRed-modal-xl">
										Inicio perfecto de mi red
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        
        <div class="container scroll-offset">
            <div id="chkoutFeaturesWrapper" class="row" style="justify-content: space-evenly">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="section-title mb-5">REQUISITOS</h2>
                </div>
    
                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-4 text-center">
                    <div class="chk-out-features" style="background-color: #fff">
                        <i class="flaticon-user-group mb-5 mt-4"></i>
                        <h6 class="mb-4">Por cada inscripción que generes en Plan de Influencia tendrás 1 inscrito con Kit MOKUTEKI.</h6>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-4 text-center">
                    <div class="chk-out-features" style="background-color: #fff">
                        <i class="flaticon-user-circle mb-5 mt-4"></i>
                        <h6 class="mb-4">El nuevo inscrito con Plan de Influencia también tendrá 1 inscrito con Kit MOKUTEKI.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-4 text-center">
                    <div class="chk-out-features" style="background-color: #fff">
                        <i class="flaticon-chart-finance mb-5 mt-4"></i>
                        <h6 class="mb-4">Los participantes a Inicio Perfecto son todos los nuevos inscritos del mes del 1 Octubre del 2020</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-4 mt-5 text-center">
                    <div class="chk-out-features" style="background-color: #fff">
                        <i class="flaticon-calendar-1 mb-5 mt-4"></i>
                        <h6 class="mb-4">Si los nuevos inscritos de octubre generan mínimo 3 incorporaciones con kit de influencia por 3 meses consecutivos se llevan su PIWATER GRATIS (Inicio perfecto temporal)</h6>
                    </div>
                </div>
            </div>
        </div>

		<div class="container scroll-offset mt-5 mb-5">
			<div class=" mt-5" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="premios" class="row requisitos mt-5">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2">
                            PREMIOS INICIO PERFECTO
						</h2>
						<img src="{{ asset('fpro/img/inc1USD/piwatter-min.png') }}" width="10%" class="mb-2">
						<h4>PiMag Pi Water</h4>
						<h5 class="section-title mb-2 mt-2">
                            El inicio perfecto puede ser con cualquiera de las siguientes opciones
                        </h5>
                    </div>
                    <div class="col-md-12 text-center mb-3">
                        <div class="table-responsive">
                            <table style="width: 100%" class="table table-bordered table-hover table-striped text-white giftTab">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Mes 1</th>
                                        <th>Mes 2</th>
                                        <th>Mes 3</th>
                                        <th>Mes 4</th>
                                        <th>Mes 5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>INSCRIPCIÓN</td>
                                        <td>X</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>OPCIÓN 1</td>
                                        <td>3 nuevos influencers <br> o 600VP</td>
                                        <td>3 nuevos influencers <br> o 600VP</td>
                                        <td>3 nuevos influencers <br> o 600VP</td>
                                        <td>PIWATER</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>OPCIÓN 2</td>
                                        <td></td>
                                        <td>3 nuevos influencers <br> o 600VP</td>
                                        <td>3 nuevos influencers <br> o 600VP</td>
                                        <td>3 nuevos influencers <br> o 600VP</td>
                                        <td>PIWATER</td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
						<b><span>* Mínimo 3 incorporados frontales con los siguientes códigos de Kit de Influencer: 5023, 5024, 5025, 5026, 5027 y 5028 durante 3 meses consecutivos.</span></b> <br>
						<b><span>* Los participantes de inicio perfecto son todos los nuevos incoporados del 1 Octubre del 2020</span></b>
                    </div>
				</div>
			</div>
		</div>

		<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
			<div class="container" style="background-color: #ffffffdb; border-radius: 25px;">
				<div class="row" style="justify-content: space-evenly">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2">TÉRMINOS Y CONDICIONES</h2>
					</div>
					<div class="col-md-12 text-center mt-3 mb-3 term">
						<button class="btn btn-outline-primary btn-rounded pl-5 pr-5 btnTermCond">
							TÉRMINOS Y CONDICIONES DUPLIKA
						</button>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-group-1" style="font-size: 35px"></i>
						<p class="">
							Estrategia disponible para todos los Influencers de Bienestar Independientes.
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-calendar" style="font-size: 35px"></i>
						<p class="">
							El Kit de Inicio <b>5002 KIT MOKUTEKI</b> con un valor de un dólar (1 USD) tendrá vigencia a partir del 1° de octubre del 2020.
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-computer-8" style="font-size: 35px"></i>
						<p class="">
							El Kit de Inicio <b>5002 KIT MOKUTEKI</b> comprende exclusivamente los beneficios del Kit Virtual.
                        </p>
                    </div>
                    
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-package" style="font-size: 35px"></i>
						<p class="">
							El Kit de Inicio <b>5002 KIT MOKUTEKI</b> sin compra adicional de sistemas de agua no cuenta para Plan de Influencia 3.0.
                        </p>
                    </div>
                    
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-calendar-2" style="font-size: 35px"></i>
						<p class="">
							El Kit de Inicio <b>5002 KIT MOKUTEKI</b> sin compra adicional de sistemas de agua no cuenta para Plan de Influencia 3.0.
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-calendar-bold" style="font-size: 35px"></i>
						<p class="">
							Para obtener la posibilidad de incorporar a un Influencer con el <b>5002 KIT MOKUTEKI</b> tendrá que incorporar Influencers a partir del 1° de octubre del 2020 con los siguientes códigos de Kit de Influencer: 5023, 5024, 5025, 5026, 5027 y 5028.
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-computer-1" style="font-size: 35px"></i>
						<p class="">
							Los incorporados a partir del 1° de octubre que ingresen con uno de los siguientes códigos de Kit de Influencer: 5023, 5024, 5025, 5026, 5027 y 5028, tendrán la posibilidad de incorporar un Influencer con el <b>5002 KIT MOKUTEKI</b>.
                        </p>
                    </div>
                    
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-exchange" style="font-size: 35px"></i>
						<p class="">
							El proceso de incorporación de este beneficio será posible hacerlo exclusivamente por la Oficina Virtual del patrocinador.
                        </p>
					</div>
                    
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-map-1" style="font-size: 35px"></i>
						<p class="">
							No se admite cambio de patrocinio para efecto de las incorporaciones hechas con este beneficio.
                        </p>
					</div>
                    
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" hidden>
						<i class="flaticon-calendar-bold" style="font-size: 35px"></i>
						<p class="">
							Estas incorporaciones aplican para redimirse en los 9 países de NIKKEN Latinoamérica.
                        </p>
					</div>
                    
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-danger-2" style="font-size: 35px"></i>
						<p class="">
							NIKKEN se reserva el derecho de interpretación de esta estrategia.
                        </p>
					</div>
				</div>

				<div class="row" style="justify-content: space-evenly">
					<div class="col-md-12 text-center mt-3 mb-3 term">
						<button class="btn btn-outline-primary btn-rounded pl-5 pr-5 btnTermCond">
							TÉRMINOS Y CONDICIONES MULTIPLIKA
						</button>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-home-line" style="font-size: 35px"></i>
						<p class="">
							Si los nuevos Influencers que ingresen con el <b>5002 KIT MOKUTEKI</b> adquieren uno o varios sistemas de agua participantes en el Plan de Influencia 3.0, estos se tendrán en cuenta para dicho programa con los beneficios para su patrocinador y cuentan como unidades para el KinYa! personal. <b>Aplica solamente para las inscripciones a partir del 1° de octubre del 2020.</b>
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-danger" style="font-size: 35px"></i>
						<p class="">
							Para este beneficio NO aplica los productos adquiridos en Arma tu Entorno ni paquetes con repuestos.
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-1" style="font-size: 35px"></i>
						<p class="">
							Para este beneficio SI aplican las compras de los Miembros de la Comunidad.
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-1" style="font-size: 35px"></i>
						<p class="">
							El <b>5002 KIT MOKUTEKI</b> que aplique para Plan de Influencia 3.0 se pagará el 15 de del mes siguiente al que fue facturado, no aplicará para Plan de Influencia Mainichi.
                        </p>
					</div>
					
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-danger-2" style="font-size: 35px"></i>
						<p class="">
							<b>NIKKEN se reserva el derecho de interpretación de esta estrategia.</b>
                        </p>
					</div>
				</div>

				<div class="row" style="justify-content: space-evenly" hidden>
					<div class="col-md-12 text-center mt-3 mb-3 term">
						<button class="btn btn-outline-primary btn-rounded pl-5 pr-5 btnTermCond">
							TÉRMINOS Y CONDICIONES INICIO PERFECTO TEMPORAL
						</button>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-calendar-2" style="font-size: 35px"></i>
						<p class="">
							Estrategia disponible para los Influencers incorporados desde el <b>1º. de octubre hasta el 30 de diciembre del 2020.</b>
                        </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-plus" style="font-size: 35px"></i>
						<p class="">
							Los nuevos Influencers que deseen acceder a este premio deben tener mensualmente 3 incorporados frontales con los siguientes códigos de <b>Kit de Influencer: 5023, 5024, 5025, 5026, 5027 y 5028</b> (no aplica 5006) o 600 puntos de VP en los 3 meses consecutivos siguientes de la incorporación, iniciando en el mes de incorporación o el mes siguiente al unirse a la comunidad.
                        </p>
					</div>
					
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-danger-2" style="font-size: 35px"></i>
						<p class="">
							<b>NIKKEN se reserva el derecho de interpretación de esta estrategia.</b>
                        </p>
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
								<p class="mt-md-0 mt-4 mb-0">© 2020 Incorporación MOKUTEKI <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>

		<!-- Modales -->
        <div class="modal fade bd-estatusper-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0;z-index: 1;transform: rotate(180deg);">
								<defs>
									<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#444a95;stop-opacity:1" />
										<stop offset="100%" style="stop-color:#2a6bb0;stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad1)" fill-opacity="0.3" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
							<div class="col-md-12" style="z-index: 2">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12" style="z-index: 2">
								<h2 class="text-center mainTitle">
									Mis Kits MOKUTEKI
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody mb-5" style="z-index: 2">
								<div class="row" style="justify-content: space-evenly">
									<div class="col-lg-12 text-center mb-2">
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2 class="mb-3">{{ $abiInfo[0]->AssociateName ?? 'NIKKEN LATAM' }}</h2>
									</div>
									<div class="col-lg-6 text-center mb-2">
										<h5>Resumen de kits MOKUTEKI</h5>
                                        <div class="table-responsive">
                                            <table class="table mb-4">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Total de kits MOKUTEKI:</td>
                                                        <td>
                                                            <span class="badge badge-success badge-pill" id="totalKits">0</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kits MOKUTEKI redimidos:</td>
                                                        <td>
                                                            <span class="badge badge-success badge-pill" id="kistUsados">0</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kits MOKUTEKI por redimir:</td>
                                                        <td>
                                                            <span class="badge badge-success badge-pill" id="kitsLibres">0</span>
                                                        </td>
													</tr>
													@php
														$pais = $abiInfo[0]->Pais ?? 'LAT';
													@endphp
													@if (trim($pais, ' ') == 'CHL' || trim($pais, ' ') == 'PAN')
														<tr>
															<td>Kits MOKUTEKI por Kenko Air:</td>
															<td>
																<span class="badge badge-success badge-pill" id="kitsCHL">0</span>
															</td>
														</tr>
													@endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
										<div class="container">
											<div class="row m-auto">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 table-responsive text-center" style="background-color: #ffffffe6; padding-right: 0 !important; padding-left: 0 !important;">
													<h2>Kits disponibles</h2>
													<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner mt-3 text-center bg-white">
														<span class="flaticon-danger-line mb-3 statusprs" style="font-size: 20px; color: coral;"></span>
														<span class="statusprs" style="color: coral;">La tabla se actualizará cada 10 minutos</span> <br>
														<button class="btn btn-warning btn-rounded mb-4 mr-2" onclick="getTicket()" hidden>Recargar tabla</button>
													</div>
													<table id="summaryTickets" class="table table-striped table-bordered table-hover text-center" >
														<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
														<thead>
															<tr class="text-center ranktabheadder">
                                                                <th>ID</th>
																<th>Código</th>
																<th>Kit obtenido el:</th>
                                                                <th><p style="width: 150px"></p>Obtuviste kit por:</th>
                                                                <th>País</th>
                                                                <th><p style="width: 200px">&nbsp;</p></th>
                                                                <th>Estatus</th>
															</tr>
                                                        </thead>
													</table><br>
													<span class="flaticon-danger-2 mb-3 statusprs" style="font-size: 20px; color: coral;"></span>
													<span class="statusprs" style="color: coral;"> Después de la incoporación del kit de influencia, el beneficio del kit mokuteki se verá disponible 2 horas despues.</span>
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 table-responsive mt-5 text-center" style="background-color: #ffffffe6; padding-right: 0 !important; padding-left: 0 !important;">
													<h2>Kits redimidos</h2>
                                                    <table id="detailTickets" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Código asesor</th>
                                                                <th><p style="width: 200px"></p>Nombre</th>
																<th>Producto</th>
																<th>País</th>
                                                                <th>Fecha de orden</th>
                                                                <th>Código de patrocinador</th>
															</tr>
                                                        </thead>
													</table>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-12">
														<h6><b>Fecha de actualización: {{ $fechaUpdate['dia'] }} de {{ $fechaUpdate['mes'] }} a las {{ $fechaUpdate['hora'] }} hora México.</b></h6>
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
        
        <div class="modal fade bd-estatusRed-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0;z-index: 1;transform: rotate(180deg);">
								<defs>
									<linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#444a95;stop-opacity:1" />
										<stop offset="100%" style="stop-color:#2a6bb0;stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad2)" fill-opacity="0.3" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
							<div class="col-md-12" style="z-index: 2">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12" style="z-index: 2">
								<h2 class="text-center mainTitle">
									Estatus de tu red "Kits MOKUTEKI"
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody mb-5" style="z-index: 2">
								<div class="row" style="justify-content: space-evenly">
									<div class="col-lg-12">
										<div class="col-lg-12">
                                            <h6>Fecha de actualización: {{ $fechaUpdate['dia'] }} de {{ $fechaUpdate['mes'] }} a las {{ $fechaUpdate['hora'] }} hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2 class="mb-3">{{ $abiInfo[0]->AssociateName ?? 'NIKKEN LATAM' }}</h2>
										<h5>
											Tu genealogía: 
											<select class="selectpicker mt-3" onchange="getReport()" id="type">
												<option value="1">Grupo Personal</option>
												<option value="0">Organizacional</option>
											</select>
										</h5>
									</div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
										<div class="container">
											<div class="row m-auto">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 table-responsive text-center" style="background-color: #ffffffe6; padding-right: 0 !important; padding-left: 0 !important;">
													<table id="mainGenealogy" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Código</th>
                                                                <th><p style="width: 200px"></p>Nombre</th>
                                                                <th>nivel</th>
                                                                <th>Tipo</th>
                                                                <th>País</th>
																<th>Rango</th>
                                                                <th>Incorporaciones kits influencia</th>
                                                                <th>Kits redimidos</th>
																<th>Pendientes</th>.
																<th>Correo</th>
																<th>Teléfono</th>
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
        
        <div class="modal fade bd-estatusMiInicio-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0;z-index: 1;transform: rotate(180deg);">
								<defs>
									<linearGradient id="grad3" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#444a95;stop-opacity:1" />
										<stop offset="100%" style="stop-color:#2a6bb0;stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad3)" fill-opacity="0.3" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
							<div class="col-md-12" style="z-index: 2">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12" style="z-index: 2">
								<h2 class="text-center mainTitle">
									Seguimiento a Mi Inicio Perfecto
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody mb-5" style="z-index: 2">
								<div class="row" style="justify-content: space-evenly">
									<div class="col-lg-12">
										<div class="col-lg-12">
                                            <h6>Fecha de actualización: {{ $fechaUpdate['dia'] }} de {{ $fechaUpdate['mes'] }} a las {{ $fechaUpdate['hora'] }} hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2 class="mb-3">{{ $abiInfo[0]->AssociateName ?? 'NIKKEN LATAM' }}</h2>
									</div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
										<div class="container">
											<div class="row m-auto">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-2">
													<h3>Mis incorporaciones</h3>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card">
														<div class="card-body">
															<p class=""><span class="post-meta-info">Octubre</span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																<span id="cantOctubre">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantOctubre"></i> <span id="txtCantOctubre">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card">
														<div class="card-body">
															<p class=""><span class="post-meta-info">Noviembre </span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																<span id="cantNoviembre">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantNoviembre"></i> <span id="txtCantNoviembre">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card">
														<div class="card-body">
															<p class=""><span class="post-meta-info">Diciembre </span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																<span id="cantDiciembre">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantDiciembre"></i> <span id="txtCantDiciembre">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card">
														<div class="card-body">
															<p class=""><span class="post-meta-info">Enero</span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																<span id="cantEnero">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantEnero"></i> <span id="txtCantEnero">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card">
														<div class="card-body">
															<p class=""><span class="post-meta-info">Febrero</span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																<span id="cantFebrero">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantFebrero"></i> <span id="txtCantFebrero">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card">
														<div class="card-body">
															<p class=""><span class="post-meta-info">Marzo</span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																<span id="cantMarzo">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantMarzo"></i> <span id="txtCantMarzo">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>

												<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-3">
													<h3>Mis volúmenes</h3>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card mt-2">
														<div class="card-body">
															<p class=""><span class="post-meta-info">VP Octubre</span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																VP: <span id="cantOctubreVP">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantOctubreVP"></i> <span id="txtCantOctubreVP">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card mt-2">
														<div class="card-body">
															<p class=""><span class="post-meta-info">VP Noviembre </span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																VP: <span id="cantNoviembreVP">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantNoviembreVP"></i> <span id="txtCantNoviembreVP">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card mt-2">
														<div class="card-body">
															<p class=""><span class="post-meta-info">VP Diciembre </span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																VP: <span id="cantDiciembreVP">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantDiciembreVP"></i> <span id="txtCantDiciembreVP">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card mt-2">
														<div class="card-body">
															<p class=""><span class="post-meta-info">VP Enero</span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																VP: <span id="cantEneroVP">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantEneroVP"></i> <span id="txtCantEneroVP">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card mt-2">
														<div class="card-body">
															<p class=""><span class="post-meta-info">VP Febrero </span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																VP: <span id="cantFebreroVP">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantFebreroVP"></i> <span id="txtCantFebreroVP">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-3 col-md-6 site-content-inner mt-3">
													<div class="card mt-2">
														<div class="card-body">
															<p class=""><span class="post-meta-info">VP Marzo</span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
															<h5 class="card-title mb-1">
																VP: <span id="cantMarzoVP">0</span>
																<span class="badge badge-danger badge-pill"><i class="flaticon-circle-cross" id="chkcantMarzoVP"></i> <span id="txtCantMarzoVP">No Cumple</span></span>
															</h5>
														</div>
													</div>
												</div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 table-responsive text-center mt-4" style="background-color: #ffffffe6; padding-right: 0 !important; padding-left: 0 !important;">
													<h3>Detalles mis incorporaciones</h3>
													<table id="detallesMiInicio" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Código influencer</th>
                                                                <th><p style="width: 200px"></p>Nombre influencer</th>
                                                                <th>Código producto</th>
																<th>Descripción</th>
																<th>País</th>
																<th>Periodo</th>
																<th>Fecha de Orden</th>
																<th>Código de patrocinador</th>
																<th>País patrocinador</th>
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
        
        <div class="modal fade bd-estatusInicioRed-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0;z-index: 1;transform: rotate(180deg);">
								<defs>
									<linearGradient id="grad4" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#444a95;stop-opacity:1" />
										<stop offset="100%" style="stop-color:#2a6bb0;stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad4)" fill-opacity="0.3" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
							<div class="col-md-12" style="z-index: 2">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12" style="z-index: 2">
								<h2 class="text-center mainTitle">
									Estatus de inicio perfecto de mi red
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody mb-5" style="z-index: 2">
								<div class="row" style="justify-content: space-evenly">
									<div class="col-lg-12">
										<div class="col-lg-12">
                                            <h6>Fecha de actualización: {{ $fechaUpdate['dia'] }} de {{ $fechaUpdate['mes'] }} a las {{ $fechaUpdate['hora'] }} hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2 class="mb-3">{{ $abiInfo[0]->AssociateName ?? 'NIKKEN LATAM' }}</h2>
										<h5>
											Tu genealogía: 
											<select class="selectpicker mt-3" onchange="loadEstatusIniPerfRed(this.value)">
												<option value="1">Grupo Personal</option>
												<option value="0">Organizacional</option>
											</select>
										</h5>
									</div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
										<div class="container">
											<div class="row m-auto">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 table-responsive text-center" style="background-color: #ffffffe6; padding-right: 0 !important; padding-left: 0 !important;">
													<table id="miRedInicioPerfecto" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Código de influencer</th>
																<th>Nivel</th>
                                                                <th><p style="width: 200px"></p>Nombre nuevo influencer</th>
																<th>Tipo asociado</th>
																<th>País</th>
																<th>Rango</th>
																<th>Incorporados Octubre</th>
																<th>Incorporados Noviembre</th>
																<th>Incorporados Diciembre</th>
																<th>Incorporados Enero</th>
																<th>Total de incorporaciones</th>
																<th>Correo</th>
																<th>Teléfono</th>
																<th></th>
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
    </body>
	<script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/sliders/owlCarousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('fpro/js/pages/landing-page/script.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
	<script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('fpro/mainjs/inc1USD/inc1USD.js') }}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179492717-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-179492717-1');
	</script>
</html>