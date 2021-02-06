<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Reconocimientos</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('fproh/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/accounting-dashboard/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/components/searchbox/search-multiple.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fpro/maincss/reconocimientos/reconocimientos.css') }}">
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
                    <a href="javascript:voiud(0)" class="ml-3"> <img src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" class="img-fluid" alt="logo"></a>
                </div>
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user d-inline-block float-right" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="{{ asset('fpro/img/mantenimiento/error-cartoon.png') }}" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">NIKKEN</h6>
                            <p class="mb-0">Reconocimientos</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </header>

    <header class="desktop-nav header navbar fixed-top">
        <div class="nav-logo mr-5 ml-4 d-lg-inline-block d-none">
            <a href="javascript:void(0)" class=""> <img src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" class="img-fluid" alt="logo"></a>
        </div>

        <ul class="navbar-nav flex-row ml-lg-auto">
            <li class="nav-item  d-lg-block d-none mr-4">
                <div class="w-100">
                    <input type="text" class="w-100 form-control product-search br-30  mt-3" id="input-search" placeholder="Buscar reporte..." >
                </div>
            </li>
            <li class="nav-item dropdown user-profile-dropdown mr-5  d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="{{ asset('fpro/img/mantenimiento/error-cartoon.png') }}" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">NIKKEN</h6>
                            <p class="mb-0">Reconocimientos</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </header>

    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>
        <div class="topbar-nav header navbar fixed-top mt-3" role="banner">
            <div id="dismiss" class="d-lg-none text-right"><i class="flaticon-cancel-12 mr-3"></i></div>
            <nav id="topbar">
                <ul class="list-unstyled menu-categories d-lg-flex justify-content-lg-around mb-0" id="topAccordion">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6"></i>
                                <span>Plan De Influencia</span>
                            </div>
                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li>
                                <a href="#dashboards" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Plan De Influencia <i class="flaticon-dot-three"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="dashboards">
                                    <li>
                                        <a href="index.html"> Default </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_dashboard.html"> Ecommerce </a>
                                    </li>
                                    <li>
                                        <a href="accounting_dashboard.html"> Accounting </a>
                                    </li>
                                    <li>
                                        <a href="analytics_dashboard.html"> Analytics </a>
                                    </li>
                                    <li>
                                        <a href="car_dashboard.html"> Car </a>
                                    </li>
                                    <li>
                                        <a href="classic_dashboard.html"> Classic </a>
                                    </li>
                                    <li>
                                        <a href="stock_market_dashboard.html"> Stock Market </a>
                                    </li>
                                    <li>
                                        <a href="cryptocurrency_dashboard.html">Cryptocurrency </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div id="content" class="main-content">
            <div class="container">
                <br><br><br>

                <div class="page-header mt-3">
                    <div class="page-title">
                        <h3>PLAN DE INFLUENCIA</h3>
                    </div>
                </div>
                @php
                    $meses = ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'];
                @endphp
                <div class="alert alert-success  br-50 mb-4 personal-shadow text-center text-black" role="alert">
                    <strong>Fecha de actualizacion: </strong> {{ $update['dia'] }} de {{ $meses[$update['mes']] }} a las {{ $update['hora'] ?? '00:00:00' }} hora México.</h6>
                </div>
                <div class="row layout-spacing">
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
                    <div class="searchable-container mb-4 w-100 row">
                        <div class="items col-xl-3 col-lg-3 col-md-6 col-12 layout-spacing">
                            <div class="widget-content widget-content-area event-widget br-4 text-center">
                                <div id="event-card-1" class="card br-4" style="height: auto;">
                                    <div class="form-group mb-4">
                                        <h4 class="text-black">KinYa!</h4>
                                        <label for="kinya">Selecciona periodo</label>
                                        <select class="form-control-rounded form-control" id="kinya" onchange="getRreport(this.value, this.id, 'periodolinkkinya')" >
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
                                                                        if(Date('d') > 15){
                                                                            echo '
                                                                                <option value="'.$i.'0'.$e.'" selected>'.$mes.' '.$i.'</option>
                                                                            ';
                                                                        }
                                                                    }
                                                                    else{
                                                                        if(Date('d') > 15){
                                                                            echo '
                                                                                <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                            '; 
                                                                        }
                                                                        else{
                                                                            echo '
                                                                                <option value="'.$i.$e.'" selected>'.$mes.' '.$i.'</option>
                                                                            '; 
                                                                        }
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
                                        <img src="https://services.nikken.com.mx/retos/img/excel.png" width="40%">
                                    </div>
                                    <div class="card-event-list">
                                    </div>
                                    <div class="card-event-list mt-5">
                                        <a href="/getReportReconocimientos?periodo={{ Date('Ym') }}&reporte=kinya" id="periodolinkkinya" class="btn btn-secondary btn-rounded" target="_new">Descargar reporte</a>
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
                                        <img src="https://services.nikken.com.mx/retos/img/excel.png" width="40%">
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
                                                                        if(Date('d') > 15){
                                                                            echo '
                                                                                <option value="'.$i.'0'.$e.'" selected>'.$mes.' '.$i.'</option>
                                                                            ';
                                                                        }
                                                                    }
                                                                    else{
                                                                        if(Date('d') > 15){
                                                                            echo '
                                                                                <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                                                            '; 
                                                                        }
                                                                        else{
                                                                            echo '
                                                                                <option value="'.$i.$e.'" selected>'.$mes.' '.$i.'</option>
                                                                            '; 
                                                                        }
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
                                        <img src="https://services.nikken.com.mx/retos/img/excel.png" width="40%">
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
                                        <h4 class="text-black">Consolidado</h4>
                                        <label for="avances">Selecciona periodo</label>
                                        <select class="form-control-rounded form-control" id="avances" onchange="getRreport(this.value, this.id, 'periodolinkconsolidado')">
                                            <option value="0" selected disabled>Periodo</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </div>
                                    <div class="card-event-icon mt-1 mb-1">
                                        <img src="https://services.nikken.com.mx/retos/img/excel.png" width="40%">
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
                            <p class="bottom-footer">&#xA9; {{ Date('Y') }} <a target="_blank" href="javascript:void(0)">NIKKEN LATAM</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fproh/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('fproh/js/custom.js') }}"></script>
    <script src="{{ asset('fproh/js/components/search/autocomplete.js') }}"></script>
    <script src="{{ asset('fproh/js/components/custom-search-multiple.js') }}"></script>
    <script src="{{ asset('fpro/mainjs/reconocimientos/reconocimientos.js') }}"></script>
</body>
</html>