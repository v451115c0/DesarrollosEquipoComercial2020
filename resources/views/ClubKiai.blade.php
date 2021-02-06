<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Club Kiai </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
     <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('css/pages/helpdesk.css')}}" rel="stylesheet" type="text/css" />
     <!-- BEGIN PAGE LEVEL STYLES -->
     <link href="{{asset('plugins/popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/popup/style.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="" class=""> <img src="{{asset('img/icons/logo_nikken_white.png')}}" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        
       
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="margin-top: -170px !important">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme" >
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar" style="background: #181722 !important;">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex" >
                    <li class="nav-item theme-text">
                        <a href="" class="nav-link" style="color: white !important;"> Retos Especiales </a>
                    </li>
                </ul>


                <ul class="menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        </a>
                    </li>
                    <li class="menu">
                        <a href="http://services.nikken.com.mx/kiai/{{$code}}">
                            <div class="">
                                <i class="flaticon-bar-chart-2" style="color: white !important;"> </i>
                                <span style="color: white !important;">Reto Kiai</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="http://services.nikken.com.mx/serpro/{{$code}}-Y">
                            <div class="">
                                <i class="flaticon-bar-chart-2" style="color: white !important;"></i>
                                <span style="color: white !important;">Reto Ser Pro</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="http://services.nikken.com.mx/kaizen/{{$code}}">
                            <div class="">
                                <i class="flaticon-bar-chart-2" style="color: white !important;"></i>
                                <span style="color: white !important;">Reto Kaizen</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="http://services.nikken.com.mx/taishi/{{$code}}" >
                            <div class="">
                                <i class="flaticon-bar-chart-2" style="color: white !important;"></i>
                                <span  style="color: white !important;">Reto Taishi</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <img src="{{asset('img/icons/logo_nikken.png')}}" style="width: 29%;margin-top: -10%;"/>
                        <h4>Club Kiai</h4>
                        @foreach($name as $n)
                        <h3>{{$n->AssociateName}}</h3>
                        @endforeach
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li class="active"><a href="#">Codigo: <b>{{$code}}</b></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
               <div class="container">                    
                    <div class="helpdesk layout-spacing">
                     @if(count($query))
                        <!--<div>
                            <a href=""><img src="../../public/images/icons/excel_icon.png" style="width:3%;margin-bottom:2%"/>Exportar a EXCEL</a>
                        </div>-->
                        @endif
                        <div class="hd-tab-section">
                            <div class="row">
                                <div class="col-md-12 mb-5" style="margin-top: -6rem!important;">
                                    <div class="tab-content mb-5" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-statistics" role="tabpanel" aria-labelledby="pills-statistics-tab">
                                            <div class="accordion" id="hd-statistics">
                                            @foreach($summary as $index=>$s)
                                              <div class="card">
                                                <div class="card-header" id="hd-statistics-{{++$index}}">
                                                  <div class="mb-0">
                                                   @if($s->Validacion == 'T')
                                                    <div style="background-image: linear-gradient(135deg, #1abc9c8a 0%, #1abc9c 100%);" data-toggle="collapse" data-target="#collapse-hd-statistics-{{$index}}" aria-expanded="true" aria-controls="collapse-hd-statistics-1">
                                                        Trimestre No. {{$s->NoTrimestre}}
                                                        <img class="image_country_w-95" src= "{{asset('img/icons/check.png')}}" style="width:3%;margin-left:15%"/> Cumple
                                                    @else
                                                    <div style="background-image: linear-gradient(135deg, #ff000052 0%, #e60e0e8c 100%);" data-toggle="collapse" data-target="#collapse-hd-statistics-{{$index}}" aria-expanded="true" aria-controls="collapse-hd-statistics-1">
                                                        Trimestre No. {{$s->NoTrimestre}}
                                                        <img class="image_country_w-95" src= "{{asset('img/icons/error.png')}}" style="width:3%;margin-left:15%"/> No Cumple
                                                    @endif
                                                    </div>
                                                  </div>
                                                </div>

                                                <div id="collapse-hd-statistics-{{$index}}" class="collapse show" aria-labelledby="hd-statistics-{{$index}}" data-parent="#hd-statistics">
                                                  <div class="card-body">
                                                  <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="statbox widget box box-shadow">
                                                                <div class="col-lg-12">
                                                                    <div class="statbox widget box box-shadow">
                                                                        <div class="widget-content widget-content-area">
                                                                            Resumen del Trimestre
                                                                            <a class="btn btn-success ml-2 mb-4 mt-2  popup-with-form" href="#test-form{{$index}}" style="margin-left: 16% !important;">Ver ganadores de mi red</a>
                                                                            <!-- form itself -->
                                                                            <form id="test-form{{$index}}" class="white-popup-block mfp-hide">
                                                                                <h2>Mis Ganadores Kiai</h2>
                                                                                <p><a class="popup-modal-dismiss" style="text-decoration:underline;margin-left: 94%;" href="#">Cerrar</a></p>
                                                                                <div class="form-row mb-12" style="overflow-x: auto;">
                                                                                <div class="widget-content widget-content-area">
                                                                                    <div class="table-responsive mb-4">
                                                                                        <table id="alter_pagination{{$index}}" class="table table-bordered table-hover" style="font-size:11px;">
                                                                                            <thead style="background-color: green">
                                                                                                <tr>
                                                                                                    <th class="text-center" style="color:white">Associate Id</th>
                                                                                                    <th style="color:white">Sponsor Id</th>
                                                                                                    <th style="color:white">Nivel</th>
                                                                                                    <th style="color:white"><p style="width: 420px;margin-left: 34%;">Associate Name</p></th>
                                                                                                    <th style="color:white">País</th>
                                                                                                    <th style="color:white">Rango</th>
                                                                                                    <th style="color:white">Telefono</th>
                                                                                                    <th style="color:white">Email</th>
                                                                                                    <th style="color:white">Vp</th>
                                                                                                    <th style="color:white">Vgp</th>
                                                                                                    <th style="color:white">Vp Acumulado</th>
                                                                                                    <th style="color:white">Vgp Acumulado</th>
                                                                                                    <th style="color:white">No. Trimestre</th>
                                                                                                    <th style="color:white">Kiai Trimestre</th>
                                                                                                    <th style="color:white">Periodo</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            @if(!count($query))
                                                                                            <tbody>
                                                                                                <<tr role="row" class="odd" style="color:black;">
                                                                                                    <td colspan="15" class="center_text"> No se encontraron Resultados</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                            @endif
                                                                                            <tbody>
                                                                                            @foreach($genealogy as $gen)
                                                                                                @if($gen->NoTrimestre == $s->NoTrimestre)
                                                                                                    <tr role="row" class="even" style="color:black;">
                                                                                                        <td>
                                                                                                            {{$gen->associateid}}
                                                                                                        </td>
                                                                                                        <td> 
                                                                                                            {{$gen->sponsorid}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{$gen->nivel}}
                                                                                                        </td>
                                                                                                        <td style="padding-rigth:311px">
                                                                                                        <p><?php $points =""; ?>
                                                                                                            @for ($i = 0; $i < $gen->nivel; $i++)
                                                                                                            <?php $points .= '.';?>
                                                                                                            @endfor
                                                                                                            {{$points.=$gen->AssociateName}}
                                                                                                        </p>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <img style="width:85%" src= "https://services.nikken.com.mx/img/country/{{$gen->Pais}}.png"/>
                                                                                                              
                                                                                                            {{$gen->Pais}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{$gen->Rango}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{$gen->Telefono}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{$gen->Email}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                           {{number_format($gen->Vp,2)}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{number_format($gen->VGP,2)}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{number_format($gen->VpAcumulado,2)}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{number_format($gen->VGPacumulado,2)}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{$gen->NoTrimestre}}
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            @if($gen->KiaiTrimestre == 'YES')
                                                                                                                <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/check.png" style="width:40%;margin-left:40%"/>
                                                                                                            @else
                                                                                                                <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/error.png" style="width:40%;margin-left:40%"/>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            {{$gen->Periodo}}
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endif
                                                                                            @endforeach
                                                                                            </tbody>
                                                                                            
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                                <div class="widget-content widget-content-area">
                                                                    <div class="table-responsive mb-4">
                                                                        <table id="individual-col-search{{$index}}" class="table table-striped table-bordered table-hover" style="font-size:11px;">
                                                                            <thead style="background-color: green">
                                                                                <tr>
                                                                                    <th class="text-center" style="color:white">Associate Id</th>
                                                                                    <th style="color:white">Sponsor Id</th>
                                                                                    <th style="color:white">Nivel</th>
                                                                                    <th style="color:white">Associate Name</th>
                                                                                    <th style="color:white">País</th>
                                                                                    <th style="color:white">Rango</th>
                                                                                    <th style="color:white">Telefono</th>
                                                                                    <th style="color:white">Email</th>
                                                                                    <th style="color:white">Vp</th>
                                                                                    <th style="color:white">Vgp</th>
                                                                                    <th style="color:white">Vp Acumulado</th>
                                                                                    <th style="color:white">Vgp Acumulado</th>
                                                                                    <th style="color:white">No. Trimestre</th>
                                                                                    <th style="color:white">Kiai Trimestre</th>
                                                                                    <th style="color:white">Periodo</th>
                                                                                </tr>
                                                                            </thead>
                                                                            @if(!count($query))
                                                                            <tbody>
                                                                                <<tr role="row" class="odd" style="color:black;">
                                                                                    <td colspan="15" class="center_text"> No se encontraron Resultados</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            @endif
                                                                            <tbody>
                                                                            @foreach($query as $reg)
                                                                                @if($reg->NoTrimestre == $s->NoTrimestre)
                                                                                
                                                                                    <tr role="row" class="even" style="color:black;">
                                                                                        <td>
                                                                                            {{$reg->Associateid}}
                                                                                        </td>
                                                                                        <td> 
                                                                                            {{$reg->Sponsorid}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$reg->Nivel}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$reg->AssociateName}}
                                                                                        </td>
                                                                                        <td>
                                                                                            <img style="width:85%" src= "https://services.nikken.com.mx/img/country/{{$gen->Pais}}.png"/>
                                                                                            {{$reg->Pais}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$reg->Rango}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$reg->Telefono}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$reg->Email}}
                                                                                        </td>
                                                                                        <td>
                                                                                           {{number_format($reg->Vp,2)}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{number_format($reg->VGP,2)}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{number_format($reg->VpAcumulado,2)}}
                                                                                        </td>
                                                                                        <td>
                                                                                           {{number_format($reg->VGPacumulado,2)}}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$reg->NoTrimestre}}
                                                                                        </td>
                                                                                        <td>
                                                                                            @if($reg->KiaiTrimestre == 'YES')
                                                                                                <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/check.png" style="width:40%;margin-left:40%"/>
                                                                                            @else
                                                                                                <img class="image_country_w-95" src= "https://services.nikken.com.mx/img/icons/error.png" style="width:40%;margin-left:40%"/>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$reg->Periodo}}
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach
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
                                              @endforeach
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
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->
    
    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->
   
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
     <script src="{{ asset('assets/NikkenChallengeP/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    
   <script src="{{ asset('assets/NikkenChallengeP/bootstrap/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('plugins/popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('plugins/popup/custom-maginfic-popup.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
      <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/charts/sparklines/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
     <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
     <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

    @foreach($summary as $index=>$s)
    <script>
        $(document).ready(function() {
            $('#alter_pagination{{++$index}}').DataTable( {
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                buttons: {
                    buttons: [
                        { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                    ]
                },
                "paginate": true,
                "iDisplayLength": 5
            } );
            $('#individual-col-search{{$index}}').DataTable( {
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                buttons: {
                    buttons: [
                        { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                    ]
                },
                "paginate": true,
                "iDisplayLength": 5
            } );
        });
    </script>
    @endforeach
    <!-- END GLOBAL MANDATORY STYLES -->    
</body>
</html>