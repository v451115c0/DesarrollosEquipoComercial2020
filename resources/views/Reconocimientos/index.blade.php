<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Reconocimientos</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('fpro/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/css/components/searchbox/search-multiple.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fpro/maincss/reconocimientos/reconocimientos.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}"/>
</head>
<body class="default-sidebar">

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <ul class="navbar-nav flex-row ml-lg-auto w-100">
            <li class="nav-item dropdown user-profile-dropdown w-100 text-center">
                <div class="nav-toggle d-inline-block float-left mt-2">
                    <a href="javascript:void(0);" class="nav-link sidebarCollapse d-inline-block" data-placement="bottom">
                        <i class="flaticon-menu-line-2"></i>
                    </a>
                    <a href="javascript:voiud(0)" class="ml-3"> <img src="{{ asset('fpro/img/min-logo-nikken-white.png') }}" class="img-fluid" alt="logo"></a>
                </div>
            </li>
        </ul>
    </header>

    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom">
            <i class="flaticon-menu-line-2"></i>
        </a>
    </header>

    <div class="main-container" id="container">
        <div class="overlay"></div>
            <div class="cs-overlay"></div>
            <div class="sidebar-wrapper sidebar-theme">
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            <nav id="sidebar" style="/*position: fixed; width: 17%;*/">
                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="javascript:void(0)" class="navbar-brand">
                            <img src="https://services.nikken.com.mx/img/icons/logo_nikken_white.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="javascript:void(0)" class="nav-link"> NIKKEN </a>
                    </li>
                </ul>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                &nbsp;&nbsp;&nbsp;
                                <i class="flaticon-user-11"></i>
                                <span>Reconocimeintos</span>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse show" id="ecommerce" data-parent="#accordionExample" style="">
                            <li>
                                <a href="{{ url('/reconocimientos') }}">Plan de Influencia</a>
                            </li>
                            <li>
                                <a href="{{ url('/recAvances') }}">Avances de Rango</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Variables Comerciales</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Retos especiales</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Bono estilo de vida</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>PLAN DE INFLUENCIA</h3>
                    </div>
                </div>
                <div class="row layout-spacing searchable-container">
                    <style>
                        .form-control {
                            border: 1px solid #ccc;
                            color: #888ea8;
                            font-size: 15px;
                        }
                        code { color: #3862f5; }
                        .form-control:disabled, .form-control[readonly] { background-color: #f1f3f9; border-color: #f1f3f1; }
                        .btn-primary.disabled, .btn-primary:disabled { background-color: #3862f5; border-color: #3862f5; }
                        label { color: #3b3f5c; margin-bottom: 14px; }
                        .form-control::-webkit-input-placeholder { color: #888ea8; font-size: 15px; }
                        .form-control::-ms-input-placeholder { color: #888ea8; font-size: 15px; }
                        .form-control::-moz-placeholder { color: #888ea8; font-size: 15px; }
                        .form-control:focus { border-color: #3862f5; }
                        .input-group-text {
                            background-color: #f3f4f7;
                            border-color: #e9ecef;
                            color: #6156ce;
                        }
                        select.form-control {
                            display: inline-block;
                            width: 100%;
                            height: calc(2.25rem + 2px);
                            vertical-align: middle;
                            background: #fff url(fpro/img/arrow-down.png) no-repeat right .75rem center;
                            background-size: 13px 14px;
                            -webkit-appearance: none;
                            -moz-appearance: none;
                            appearance: none;
                        }
                        select.form-control::-ms-expand { display: none; }
                    </style>
                    <div class="mb-4 w-100 row">
                        <div class="items col-xl-3 col-lg-3 col-md-6 col-12 layout-spacing">
                            <div class="widget-content widget-content-area event-widget br-4 text-center">
                                <div id="event-card-1" class="card br-4" style="height: auto;">
                                    <div class="form-group mb-4">
                                        <h4 class="text-black">KinYa!</h4>
                                        <label for="kinya">Selecciona periodo inicial</label>
                                        <select class="form-control-rounded form-control" id="kinya" onchange="getRreport(this.value, this.id, 'periodolinkkinya', $('#kinya2').val())" >
                                            <option value="0" selected disabled>Periodo</option>
                                            @php
                                                $añoAct = date('o');
                                                $añoAct = $añoAct - 1;
                                                for($i=date('o'); $i>=$añoAct; $i--){
                                                    for ($e=12; $e>=1; $e--){
                                                        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                                        $mes=$meses[$e - 1];
                                                        if ($e == date('m')){
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '
                                                                                <option value="'.$i.'0'.$e.'" selected>'.$mes.' '.$i.'</option>
                                                                            ';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                            <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                        '; 
                                                                    }
                                                                }
                                                                else{}
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                        else{
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '
                                                                            <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                        ';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                            <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                        '; 
                                                                    }
                                                                }
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kinya2">Selecciona periodo final</label>
                                        <select class="form-control-rounded form-control" id="kinya2" onchange="getRreport($('#kinya').val(), this.id, 'periodolinkkinya', this.value)" >
                                            <option value="{{ Date('Ym') }}" selected disabled>Periodo</option>
                                            @php
                                                $añoAct = date('o');
                                                $añoAct = $añoAct - 1;
                                                for($i=date('o'); $i>=$añoAct; $i--){
                                                    for ($e=12; $e>=1; $e--){
                                                        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                                        $mes=$meses[$e - 1];
                                                        if ($e == date('m')){
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '
                                                                            <option value="'.$i.'0'.$e.'" selected>'.$mes.' '.$i.'</option>
                                                                        ';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                            <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                        '; 
                                                                    }
                                                                }
                                                                else{}
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                        else{
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '
                                                                            <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                        ';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                            <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                        '; 
                                                                    }
                                                                }
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                    <div class="card-event-icon mt-1 mb-1">
                                        <img src="{{ asset('fpro/img/reconocimientos/Kinya.png') }}" width="80%">
                                    </div>
                                    <div class="card-event-list">
                                    </div>
                                    <div class="card-event-list mt-5">
                                        <a href="/getReportReconocimientos?periodo={{ Date('Ym') }}&periodo2={{ Date('Ym') }}&reporte=kinya" id="periodolinkkinya" class="btn btn-secondary btn-rounded" target="_new">Descargar reporte</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="items col-xl-3 col-lg-3 col-md-6 col-12 layout-spacing">
                            <div class="widget-content widget-content-area event-widget br-4 text-center">
                                <div id="event-card-1" class="card br-4" style="height: auto;">
                                    <div class="form-group mb-4">
                                        <h4 class="text-black">Kintai</h4>
                                        <label for="kintai" hidden>Selecciona periodo</label>
                                        <select class="form-control-rounded form-control" id="kintai" onchange="getRreport(this.value, this.id, 'periodolinkkintai')" hidden>
                                            <option value="0" selected disabled>Periodo</option>
                                            @php
                                                $añoAct = date('o');
                                                $añoAct = $añoAct - 1;
                                                for($i=date('o'); $i>=$añoAct; $i--){
                                                    for ($e=12; $e>=1; $e--){
                                                        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                                        $mes=$meses[$e - 1];
                                                        if ($e == date('m')){
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '<option value="'.$i.'0'.$e.'" selected>'.$mes.' '.$i.'</option>';
                                                                    }
                                                                    else{
                                                                        echo '<option value="'.$i.$e.'" selected>'.$mes.' '.$i.'</option>'; 
                                                                    }
                                                                }
                                                                else{}
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                        else{
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '
                                                                            <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                        ';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                            <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                        '; 
                                                                    }
                                                                }
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                    <div class="card-event-icon mt-1 mb-1">
                                        <img src="{{ asset('fpro/img/reconocimientos/Kintai.png') }}" width="80%">
                                    </div>
                                    <div class="card-event-list">
                                    </div>
                                    <div class="card-event-list mt-5">
                                        <a href="/getReportReconocimientos?periodo={{ Date('Ym') }}&reporte=Kintai" id="periodolinkkintai" class="btn btn-secondary btn-rounded" target="_new">Descargar reporte</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="items col-xl-3 col-lg-3 col-md-6 col-12 layout-spacing">
                            <div class="widget-content widget-content-area event-widget br-4 text-center">
                                <div id="event-card-1" class="card br-4" style="height: auto;">
                                    <div class="form-group mb-4">
                                        <h4 class="text-black">Mejores Patrocinadores PI</h4>
                                        <label for="sponsorsr">Selecciona periodo</label>
                                        <select class="form-control-rounded form-control" id="sponsorsr" onchange="getRreport(this.value, this.id, 'periodolinksponsorsr')">
                                            <option value="0" selected disabled>Periodo</option>
                                            @php
                                                $añoAct = date('o');
                                                $añoAct = $añoAct - 1;
                                                for($i=date('o'); $i>=$añoAct; $i--){
                                                    for ($e=12; $e>=1; $e--){
                                                        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                                        $mes=$meses[$e - 1];
                                                        if ($e == date('m')){
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '
                                                                            <option value="'.$i.'0'.$e.'" selected>'.$mes.' '.$i.'</option>
                                                                        ';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                            <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                        ';
                                                                    }
                                                                }
                                                                else{}
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                        else{
                                                            if($i == date("Y")){
                                                                if($e <= date("n")){
                                                                    if($e < 10){
                                                                        echo '
                                                                            <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                        ';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                            <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                        '; 
                                                                    }
                                                                }
                                                            }
                                                            else{
                                                                if($e < 10){
                                                                    echo '
                                                                        <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                                                    ';
                                                                }
                                                                else{
                                                                    echo '
                                                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                    '; 
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                    <div class="card-event-icon mt-1 mb-1">
                                        <img src="{{ asset('fpro/img/reconocimientos/inf-logo.png') }}" width="80%">
                                    </div>
                                    <div class="card-event-list">
                                    </div>
                                    <div class="card-event-list mt-5">
                                        <a href="/getReportReconocimientos?periodo={{ Date('Ym') }}&reporte=sponsorsr" id="periodolinksponsorsr" class="btn btn-secondary btn-rounded" target="_new">Descargar reporte</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="items col-xl-3 col-lg-3 col-md-6 col-12 layout-spacing">
                            <div class="widget-content widget-content-area event-widget br-4 text-center">
                                <div id="event-card-1" class="card br-4" style="height: auto;">
                                    <div class="form-group mb-4">
                                        <h4 class="text-black">Consolidado Patrocinadores PI</h4>
                                        <label for="consolidado">Selecciona año</label>
                                        <select class="form-control-rounded form-control" id="consolidado" onchange="getRreport(this.value, this.id, 'periodolinkconsolidado')">
                                            <option value="0" selected disabled>Año</option>
                                            @php
                                                for($x = Date('Y'); $x > (Date('Y') - 3); $x--){
                                                    echo "<option value='$x'>$x</option>";
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                    <div class="card-event-icon mt-1 mb-1">
                                        <img src="{{ asset('fpro/img/reconocimientos/inf-logo.png') }}" width="80%">
                                    </div>
                                    <div class="card-event-list">
                                    </div>
                                    <div class="card-event-list mt-5">
                                        <a href="/getReportReconocimientos?periodo={{ Date('Y') }}&reporte=consolidado" id="periodolinkconsolidado" class="btn btn-secondary btn-rounded" target="_new">Descargar reporte</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5"></ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; {{ Date('Y') }} <a target="_blank" href="javascript:void(0)">NIKKEN LATINOAMÉRICA</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fpro/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('fpro/js/custom.js') }}"></script>
    <script src="{{ asset('fpro/js/components/search/autocomplete.js') }}"></script>
    <script src="{{ asset('fpro/js/components/custom-search-multiple.js') }}"></script>
    <script src="{{ asset('fpro/mainjs/reconocimientos/reconocimientos.js') }}"></script>
	<script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script>
        swal({
            title: '',
            icon: 'info',
            html:'Esta información es de <b>SOLO DE CONSULTA</b>, si vas a usarlo por favor validar con el área de reconocimientos.',
            type: 'info',
            padding: '2em',
            allowOutsideClick: false,
            allowEscapeKey: false,
        })
    </script>
</body>
</html>