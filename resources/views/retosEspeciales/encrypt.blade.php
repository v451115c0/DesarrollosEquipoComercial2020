<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>Test Encrypt</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/flaticon/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/pages/landing-page/style.css') }}">

        <style>
            .navHeadWrapperClubViajeros{
                background: linear-gradient(0.5deg, #fff 0%, #fff 100%) !important;
            }

            nav.navbar .navbar-nav .nav-item .nav-link.active {
                color: #3b3b3b !important;
            }

            nav.navbar .navbar-nav .nav-link:hover {
                color: #3b3b3b !important;
            }

            .bodyClviajeros{
				background-image: unset !important;
                background-color: #fff !important;
            }

            .btn-gradient-primary {
                border: 0 !important;
                color: #fff;
                background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);
                background-color: #04befe;
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
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
						<h2 class="text-center mt-2">Encriptar JS y Desencriptar PHP</h2>
						<h4 class="text-center mt-5">ingresa un dato</h4>
					</div>
					<div class="row" style="justify-content: space-evenly">
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-12 layout-spacing mt-3">
							<div class="widget-content-area p-0 card-widget-content ">
								<div id="user-profile-card-1" class="card br-4" style="">
									<div class="card-body p-0">
										<div class="usr-img-meta mx-auto text-center mb-2">
											<input type="text" id="textEncrypt" class="form-control br-30 w-100 puntajeInput" value="{{ $val }}">
										</div>
										<div class="usr-info-meta text-center mb-4">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-rounded" onclick="encriptjs($('#textEncrypt').val())">Encriptar JS</a>
                                            <br><br>
                                            Encriptado JS: <input type="text" id="encryptJStxt" class="form-control br-30 w-100 puntajeInput" readonly>
                                            <br>
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-rounded" onclick="desEncriptphp($('#encryptJStxt').val())">Desncriptar PHP</a><br><br>
                                            desencriptado PHP: <input type="text" id="decryptPHPtxt" class="form-control br-30 w-100 puntajeInput" readonly>
										</div>
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
				  <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill: #fff;"></path>
			</svg>
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
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y') }} Retos especiales {{ Date('Y') }} <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
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
    <script>
        function encriptjs(text){
            var encoded = "";
            str = btoa(text);
            str = btoa(str);
            for (i=0; i<str.length;i++) {
                var a = str.charCodeAt(i);
                var b = a ^ 10; // bitwise XOR with any number, e.g. 123
                encoded = encoded+String.fromCharCode(b);
            }
            encoded = btoa(encoded);
            $("#encryptJStxt").val(encoded);
        }

        function desEncriptphp(txt){
            $.ajax({
                type: "get",
                url: "/desEncriptphp",
                data: {txt: txt},
                success: function (response) {
                    $("#decryptPHPtxt").val(response);
                }
            });
        }
    </script>
</html>

