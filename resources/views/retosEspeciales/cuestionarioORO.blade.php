<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | Cuestionario Ser Pro</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/flaticon/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/pages/landing-page/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_html5.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/ui-kit/custom-sweetalert.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/maincss/ViajerosPro/viajerospro.css') }}">
        
        <link href="{{ asset('fpro/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <style>
            .navHeadWrapperClubViajeros{
                background: unset !important;
            }

            nav.navbar .navbar-nav .nav-item .nav-link.active {
                color: #3b3b3b !important;
            }

            nav.navbar .navbar-nav .nav-link:hover {
                color: #3b3b3b !important;
            }

            .bodyClviajeros{
                background-image: unset !important;
                background-color: #e9ecef !important;
            }

            .btn-gradient-primary {
                border: 0 !important;
                color: #fff;
                background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);
            }

            select.form-control {
                display: inline-block;
                width: 100%;
                height: calc(2.25rem + 2px);
                vertical-align: middle;
                background: #fff url(../fpro/img/arrow-down.png) no-repeat right .75rem center;
                background-size: 13px 14px;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            select.form-control::-ms-expand { display: none; }
            .new-control.new-checkbox.checkbox-danger>input:checked~span.new-control-indicator { background: #e7515a; border-radius: 50% !important;}
            .new-control.new-checkbox .new-control-indicator {
                border-radius: 50% !important;
            }
        </style>
	</head>
	<body class="bodyClviajeros text-black">
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
								<ul class="navbar-nav text-center mt-lg-0 mt-5" hidden>
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
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5 current">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
                        <h4>
                            <span class="align-self-center">¡FELICIDADES POR TU AVANCE A RANGO ORO!</span>
                        </h4>
                        <div class="col-lg-12 mb-5 text-justify">
                            <h6><b>Estimado Influencer, este cuestionario tiene la finalidad de que nos compartas el proceso de acompañamiento que te brindó tu mentor y el plan que realizaron para lograr tu  avance de rango y así fortalecer tu organización.</b></h6>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto">
                            <input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="CÓDIGO INFLUENCER: {{ $abiInfo[0]->Associateid ?? '123456' }}">
                            <input type="hidden" class="form-control br-30 w-100 puntajeInput" id="associateid" readonly value="{{ $abiInfo[0]->Associateid ?? '123456' }}">
                            <input type="hidden" class="form-control br-30 w-100 puntajeInput" id="associatename" readonly value="{{ $abiInfo[0]->AssociateName ?? 'nikken' }}">
                            <input type="hidden" class="form-control br-30 w-100 puntajeInput" id="associateRank" readonly value="{{ $abiInfo[0]->Rango ?? '5' }}">
                            <input type="hidden" class="form-control br-30 w-100 puntajeInput" id="associatePais" readonly value="{{ $abiInfo[0]->Pais ?? 'LAT' }}">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto">
                            <input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="NOMBRE: {{ $abiInfo[0]->AssociateName ?? 'NIKKEN LAT' }}">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <p>Indícanos los datos de tu mentor (Influencer rango Platino o mayor de tu línea ascendente)</p>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <div class="form-group mb-4">
                                <label for="mentor">Nombre de tu mentor</label>
                                <select class="form-control-rounded form-control" id="mentor">
                                    <option value="0">Seleccione su mentor...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <hr>
                            <p>Contesta  las siguientes preguntas, en el caso de ser la opción si o no coloca con una X  la opción que elijas:</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>1.- ¿Cuál es tu propósito Transformador?</h5>
                            <input type="text" class="form-control br-30 w-100 puntajeInput" id="prg1" name="prg1" maxlength="100">
                            <div class="text-right mt-1 mt-1">
                                <span class="badge badge-primary">
                                    <small id="sh-text4" class="form-text mt-0">Máximo 100 caracteres.</small>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                            <h5>2.- ¿Tu mentor te asesoró y te acompañó en la realización del plan de 90 días de actividades para tu grupo?</h5>
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="2si" name="prg2" value="1" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Si</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="2no" name="prg2" value="0">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>3.- ¿Desarrollaste junto con tu mentor estrategias para el logro de resultados ( venta e incorpación)?</h5>
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="3si" name="prg3" value="1" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Si</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="3no" name="prg3" value="0">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>4.- ¿Tu mentor te brindó acompañamiento y asesoría para la realización de talleres y entrenamientos a tu grupo?</h5>
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="4si" name="prg4" value="1" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Si</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="4no" name="prg4" value="0">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>5.- ¿Junto con tu mentor crearon estrategias para la difusión efectiva de las campañas, eventos y estrategias que Nikken te comparte?</h5>
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="5si" name="prg5" value="1" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Si</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="5no" name="prg5" value="0">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>6.- ¿Tu mentor te brindó asesoría para el seguimento de las variables de tu negocio (VOL. PERSONAL, VOL.GRUPO PERSONAL, INCORPORACIÓN y VOL. ORGANIZACIÓN)?</h5>
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="6si" name="prg6" value="1" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Si</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="6no" name="prg6" value="0">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>7.- ¿Junto con tu mentor, realizaron plan de actividades por lo menos para 3 meses? </h5>
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="7si" name="prg7" value="1" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Si</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="7no" name="prg7" value="0">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>8.- ¿Junto con tu mentor, desarrollaron planes para el avance de nuevos influencers a rango plata de tu organización?</h5>
                            <div class="row text-center">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="8si" name="prg8" value="1" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Si</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner mr-auto mt-4">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-classic new-checkbox-line-through checkbox-danger">
                                            <input type="radio" class="new-control-input" id="8no" name="prg8" value="0">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>9.- ¿Comenta las aportaciones importantes que realizó tu mentor, que impactaron en el logro de tu avance de rango?</h5>
                            <textarea class="form-control-rounded form-control" id="comentarios" rows="3" maxlength="200"></textarea>
                            <div class="text-right mt-1 mt-1">
                                <span class="badge badge-primary">
                                    <small id="sh-text4" class="form-text mt-0">Máximo 200 caracteres.</small>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <hr>
                            <h5>10. Indica el número de acciones que has reallizado durante este periodo de avance de rango:</h5>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>Número de influencers que avanzaron a rango plata en los úlitmos 6 meses.</h5>
                            <select class="form-control-rounded form-control" id="prg10_1" name="prg10_1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10 o mas</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>Número de entrenamientos que brindaste a tu organización.</h5>
                            <select class="form-control-rounded form-control" id="prg10_2" name="prg10_2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10 o mas</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
                            <h5>Número de presentaciones (producto e incorporación) que realizas mensualmente con tu grupo.</h5>
                            <select class="form-control-rounded form-control" id="prg10_3" name="prg10_3">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10 o mas</option>
                            </select>
                        </div>
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
                            <button id="save" class="mt-4 mb-4 btn btn-button-7 btn-rounded" onclick="saveQuestionnaireSerPro()">Contestar cuestionario</button>
                        </div>
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
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y')}} Reto Ser Pro {{ Date('Y')}} <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</body>
	<script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('fpro/js/pages/landing-page/script.js') }}"></script>
    <script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
    
    <script>
        function loaduplineSerPro(){
            var associateid = $("#associateid").val();
            $.ajax({
                type: "get",
                url: "/loaduplineSerPro",
                data: { associateid: associateid },
                success: function (response) {
                    $('#mentor').append(response);
                }
            });
        }
        loaduplineSerPro();

        function saveQuestionnaireSerPro(){
            var Associateid = $("#associateid").val();
            var AssociateName = $("#associatename").val();
            var Mentor = $("#mentor").val();
            var Avance_Rango = 6;
            var Pregunta1 = $('#prg1').val();
            var Pregunta2 = $('input[name="prg2"]:checked').val();
            var Pregunta3 = $('input[name="prg3"]:checked').val();
            var Pregunta4 = $('input[name="prg4"]:checked').val();
            var Pregunta5 = $('input[name="prg5"]:checked').val();
            var Pregunta6 = $('input[name="prg6"]:checked').val();
            var Pregunta7 = $('input[name="prg7"]:checked').val();
            var Pregunta8 = $('input[name="prg8"]:checked').val();
            var Pregunta9 = $("#comentarios").val();
            var Pregunta10_1 = $("#prg10_1").val();
            var Pregunta10_2 = $("#prg10_2").val();
            var Pregunta10_3 = $("#prg10_3").val();
            var Aprobacion = 0;
            var TotalPregunta = 0;
            var Pais = $("#associatePais").val();

            if(parseInt(Mentor) > 0 && Pregunta1.trim() != '' && Pregunta9.trim() != ''){
                var data = {
                    Associateid: Associateid,
                    AssociateName: AssociateName,
                    Mentor: Mentor,
                    Avance_Rango: Avance_Rango,
                    Pregunta1: Pregunta1,
                    Pregunta2: Pregunta2,
                    Pregunta3: Pregunta3,
                    Pregunta4: Pregunta4,
                    Pregunta5: Pregunta5,
                    Pregunta6: Pregunta6,
                    Pregunta7: Pregunta7,
                    Pregunta8: Pregunta8,
                    Pregunta9: Pregunta9,
                    Pregunta10_1: Pregunta10_1,
                    Pregunta10_2: Pregunta10_2,
                    Pregunta10_3: Pregunta10_3,
                    Aprobacion: Aprobacion,
                    TotalPregunta: TotalPregunta,
                    Pais: Pais,
                };
                $.ajax({
                    type: "get",
                    url: "/saveQuestionnaireSerProOro",
                    data: data,
                    beforeSend: function (){
                        $("#save").attr('disabled', true);
                    },
                    success: function (response) {
                        $("#save").attr('disabled', false);
                        if(response == 0){
                            swal({
                                title: 'Ups...',
                                text: "Intente nuevamente, si el problema persiste reporte a Servicio al Cliente",
                                type: 'error',
                                padding: '2em'
                            })
                        }
                        else if(response == 2){
                            swal({
                                title: 'Ups...',
                                text: "Ya respondido su cuestionario con anterioridad, agradecemos su participación",
                                type: 'error',
                                padding: '2em',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            }).then(function(){
                                window.close();
                            })
                        }
                        else{
                            swal({
                                title: 'Ok',
                                text: "Su respuesta ha sido enviada",
                                type: 'success',
                                padding: '2em',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            }).then(function(){
                                window.close();
                            })
                        }
                    },
                    error: function(){
                        $("#save").attr('disabled', false);
                        swal({
                            title: 'Ups...',
                            text: "Intente nuevamente, si el problema persiste reporte a Servicio al Cliente",
                            type: 'error',
                            padding: '2em'
                        })
                    }
                });
            }
            else{
                swal({
                    title: 'Ups...',
                    text: "Todos los campos son requeridos",
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                }).then(function(){
                    if(parseInt(Mentor) > 0){
                        $("#mentor").focus();
                    }
                    if(Pregunta1.trim() != ''){
                        $('#prg1').focus();
                    }
                    if(Pregunta9.trim() != ''){
                        $('#comentarios').focus();
                    }
                });
            }
        }
    </script>
</html>
