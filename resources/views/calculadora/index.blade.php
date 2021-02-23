<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>NIKKEN | Calculadora de Influencia 3.0 </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
    <link rel='stylesheet' type='text/css'href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/plugins.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/default-dashboard/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/modals/component.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/ui-kit/custom-tooltips_and_popovers.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/maincss/calculadora/calculadora.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/table/datatable/custom_dt_html5.css') }}">
</head>
<body class="default-sidebar">
    <header class="tabMobileView header navbar fixed-top d-lg-none nav-header-pers">
        <ul class="navbar-nav flex-row ml-lg-auto w-100">
            <li class="nav-item dropdown user-profile-dropdown w-100 text-center">
                <div class="nav-toggle d-inline-block float-left mt-2 ml-2">
                    <a href="javascript:void(0);" class="nav-link d-inline-block" data-placement="bottom">
                        <img src="{{ asset('fpro/img/logo-white.png') }}" class="img-fluid" alt="logo" style="width: 282px !important;">
                    </a>
                </div>
            </li>
        </ul>
    </header>

    <header class="desktop-nav header navbar fixed-top nav-header-pers">
        <div class="nav-logo mr-3 ml-4 d-lg-inline-block d-none">
            <a class=""> <img src="{{ asset('fpro/img/logo-white.png') }}" class="img-fluid" alt="logo" style="width: 282px !important;"></a>
        </div>

        <ul class="navbar-nav flex-row mr-auto">
            <li class="nav-item dropdown language-dropdown mr-3 d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h4 class="text-white mt-2" hidden>NIKKEN</h4>
                </a>
            </li>
        </ul>
    </header>

    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="blur-bg"></div>
        <div id="content" class="main-content mt-4">
            <div class="container mt-5 pt-3 influencia30">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-5">
                                        
                                        <h2 id="nombreUser" class="text-purpple">{{ $abiInfo[0]->AssociateName ?? 'Nikken Latinoamérica' }}</h2>
                                        <input type="hidden" id="UserPais" value="{{ trim($abiInfo[0]->Pais ?? 'MEX', ' ') }}">
                                        <input type="hidden" id="UserCode" value="{{ $abiInfo[0]->Associateid ?? '123456' }}">
                                        <input type="hidden" id="userRank" value="{{ $abiInfo[0]->Rango ?? 'DIR' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area ">
                                <div class="row" id="stepsBody">
                                    <div id="calculadoraInf" class="row text-black" style="max-width: 100% !important;margin: 0 -5px 0 -5px !important">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-black text-center">
                                            <div class="input-group col-xl-5 col-lg-6 col-md-6 col-sm-12 m-auto mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                        <img id="iconPadre" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px">
                                                        Rango
                                                    </span>
                                                </div>
                                                <select id="rangoPadre" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconPadre'), this.value, null, 'porcentBonoGPPadre')">
                                                    <option value="DIR" selected>Directo</option>
                                                    <option value="EXE">Ejecutivo</option>
                                                    <option value="PLA">Plata</option>
                                                    <option value="ORO">Oro</option>
                                                    <option value="PLO">Platino</option>
                                                    <option value="DIA">Diamante</option>
                                                    <option value="DRL">Diamante Real</option>
                                                </select>
                                                &nbsp;
                                                <div class="input-group-prepend">
                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                        <img id="iconPadrePais" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/LAT.png') }}" width="20px">
                                                        País
                                                    </span>
                                                </div>
                                                <select id="paisPadre" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIconPais($('#iconPadrePais'), this.value, $('#iconNodo1Pais'), $('#nombrePaisNode1'), $('#iconNodo2Pais'), $('#nombrePaisNode2'), $('#iconNodo3Pais'), $('#nombrePaisNode3'), $('#iconNodo4Pais'), $('#nombrePaisNode4'), $('#iconNodo5Pais'), $('#nombrePaisNode5'), $('#iconNodo6Pais'), $('#nombrePaisNode6')), setIsoMoney(), loadCatProd('kenko_light'), loadCatProdInfluencia()">
                                                    <option value="LAT" selected>México</option>
                                                    <option value="COL">Colombia</option>
                                                    <option value="CRI">Costa Rica</option>
                                                    <option value="PAN">Panamá</option>
                                                    <option value="ECU">Ecuador</option>
                                                    <option value="PER">Perú</option>
                                                    <option value="SLV">El Salvador</option>
                                                    <option value="GTM">Guatemala</option>
                                                    <option value="CHL">Chile</option>
                                                </select>
                                            </div>
                                            <br>
                                            <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12 col-md-6 col-lg-4 m-auto" type="button" onclick="getNameUserCero()">
                                                <span class="flaticon-reload-line spin"></span>
                                                Cambiar Influencer
                                            </button>
                                            <a class="mt-5 d-lg-none" href="javascript:void(0)" data-toggle="modal" data-target="#modalDetalles" onclick="getRequisitos($('#rangoPadre').val())">
                                                <h5>
                                                    <br>
                                                    Consulta los detalles aquí <i class="flaticon-danger-2" style="color: #1d49d8"></i>.
                                                    <br><br>
                                                </h5>
                                            </a>
                                            <h4 class="opcional mt-2 text-black " style="font-size: 20px !important;">
                                                <span class="displayDesktop">
                                                    * Ten presente que las ganancias dependen del cumplimiento de los requisitos del Plan de Compensación y Plan de Influencia 3.0, que además están sujetas a cuota de manejo, retenciones y régimen fiscal del país.<br><br>
                                                </span>
                                                <a class="mt-5" href="javascript:void(0)" data-toggle="modal" data-target="#modalRqusisitos" onclick="getRequisitos($('#rangoPadre').val())">
                                                    Consulta los requisitos de tu rango aquí <i class="flaticon-view" style="font-size: 20px"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing text-black text-center ">
                                            <h5 class="mt-2 d-lg-none">
                                                Desliza a los laterales <br>
                                                <b><i class="flaticon-arrow-1" style="font-size: 35px"></i></b>
                                            </h5>
                                        </div>

                                        <div class=" players-group ml-1 mr-1" style="width: 100%">
                                            <div class="row layout-spacing">
                                                <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-12 nodo1-nodo2 text-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-black text-center mb-2">
                                                        <span id="linea1indicador">Línea 1</span>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 nodo1 text-center">
                                                        <form id="nodo1">
                                                            <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo1" placeholder="Ingresa un nombre" onkeyup="this.value = this.value.toUpperCase();">
                                                            <div class="input-group mb-4 col-xl-12 col-lg-12 col-md-12 m-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                                        <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo1">
                                                                        Rango
                                                                    </span>
                                                                </div>
                                                                <select id="rangoNodo1" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo1'), this.value, $('#nodo2'), 'porcentBonoGPNodo1')">
                                                                    <option value="Cliente">Cliente</option>
                                                                    <option value="Influencer">Influencer</option>
                                                                    <option value="DIR" selected>Directo</option>
                                                                    <option value="EXE">Ejecutivo</option>
                                                                    <option value="PLA">Plata</option>
                                                                    <option value="ORO">Oro</option>
                                                                    <option value="PLO">Platino</option>
                                                                    <option value="DIA">Diamante</option>
                                                                    <option value="DRL">Diamante Real</option>
                                                                </select>
                                                                &nbsp; <div class="salto"></div>
                                                                <div class="input-group-prepend alignPais">
                                                                    <span class="form-control-rounded input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;background-color: transparent">
                                                                        <img id="iconNodo1Pais" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/LAT.png') }}" width="20px">
                                                                        <span id="nombrePaisNode1">México</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                                <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo1" onclick="setNodoInfluencer(this, $('#rangoNodo1'), $('.btnAddProdNodo1'), $('#prodNode1_1'), $('#pzsProdNode1_1'), $('#iconNodo1'))">
                                                                <label class="custom-control-label" for="influencerNodo1">Nuevo Influencer</label>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-7 col-7 mb-1">Producto</div>
                                                                <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode1_1" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode1_1','#prodNode1_2','#prodNode1_3', '#pzsProdNode1_1', '#pzsProdNode1_2', '#pzsProdNode1_3', 'influencerNodo1')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right number" placeholder="0" id="pzsProdNode1_1">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode1_2" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode1_1','#prodNode1_2','#prodNode1_3', '#pzsProdNode1_1', '#pzsProdNode1_2', '#pzsProdNode1_3', 'influencerNodo1')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right number" placeholder="0" id="pzsProdNode1_2">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode1_2'), $('#pzsProdNode1_2'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                    <input id="prodNode1_3" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode1_1','#prodNode1_2','#prodNode1_3', '#pzsProdNode1_1', '#pzsProdNode1_2', '#pzsProdNode1_3', 'influencerNodo1')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right number" placeholder="0" id="pzsProdNode1_3">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode1_3'), $('#pzsProdNode1_3'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12 btnAddProdNodo1" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode1_1','#prodNode1_2','#prodNode1_3', '#pzsProdNode1_1', '#pzsProdNode1_2', '#pzsProdNode1_3', 'influencerNodo1')">
                                                                <span class="flaticon-add-circle-outline"></span>
                                                                Agregar otro producto
                                                            </button>
                                                            <div class="table-responsive displayDesktop">
                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Plan de Influencia 3.0:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoInfluenciaNodo1">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Retail:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoRetailNodo1">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Reembolso:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoReembolsoNodo1">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Bonificación por grupo <span id="porcentBonoGPNodo1">15</span>%:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoPorGrupoNodo1">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Liderazgo 6%:
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="bonoLiderNodo1">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Total de bonificaciones:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoTotalNodo1">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-rounded col-10 mb-4 mr-2 displayMovil m-auto" data-toggle="modal" data-target=".modalNodo1" onclick="getNameToModal($('#nombreNodo1'), $('#NombreNodo1Modal'), $('#rangoNodo1'), $('#RangoNodo1Modal'))">
                                                                Detalles
                                                            </button>
                                                            <br>
                                                            <div class="modal fade modalNodo1 mb-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="NombreNodo1Modal"></h5>&nbsp; | &nbsp;Rango: &nbsp;<span id="RangoNodo1Modal"></span>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Plan de Influencia 3.0:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoInfluenciaNodo1Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Retail:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoRetailNodo1Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Reembolso:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoReembolsoNodo1Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Bonificación por grupo <span id="porcentBonoGPNodo1">15</span>%:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoPorGrupoNodo1Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Liderazgo 6%:
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="bonoLiderNodo1Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Total de bonificaciones:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoTotalNodo1Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <hr class="btnNode hrNode1">
                                                    <button class="btn btn-outline-success btn-rounded col-8 bg-white btnAddNodo1" type="button" onclick="showPlayer($('#nodo2'))">
                                                        <span class="flaticon-plus-fill"></span>
                                                        Añadir Influencer
                                                    </button>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 nodo2 text-center">
                                                        <form id="nodo2">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                                                                <i class="flaticon-close btnHidePlayer" onclick="hidePlayer($('#nodo2'), $('#iconNodo2'))"></i>
                                                            </div>
                                                            <hr class="hr-node">
                                                            <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo2" placeholder="Ingresa un nombre" onkeyup="this.value = this.value.toUpperCase();">
                                                            <div class="input-group mb-4 col-xl-12 col-lg-12 col-md-12 m-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                                        <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo2">
                                                                        Rango
                                                                    </span>
                                                                </div>
                                                                <select id="rangoNodo2" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo2'), this.value, null, 'porcentBonoGPNodo2')">
                                                                    <option value="Influencer">Influencer</option>
                                                                    <option value="DIR" selected>Directo</option>
                                                                    <option value="EXE">Ejecutivo</option>
                                                                    <option value="PLA">Plata</option>
                                                                    <option value="ORO">Oro</option>
                                                                    <option value="PLO">Platino</option>
                                                                    <option value="DIA">Diamante</option>
                                                                    <option value="DRL">Diamante Real</option>
                                                                </select>
                                                                &nbsp; <div class="salto"></div>
                                                                <div class="input-group-prepend alignPais">
                                                                    <span class="form-control-rounded input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;background-color: transparent">
                                                                        <img id="iconNodo2Pais" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/LAT.png') }}" width="20px">
                                                                        <span id="nombrePaisNode2">México</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                                <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo2" onclick="setNodoInfluencer(this, $('#rangoNodo2'), $('.btnAddProdNodo2'), $('#prodNode2_1'), $('#pzsProdNode2_1'), $('#iconNodo2'))">
                                                                <label class="custom-control-label" for="influencerNodo2">Nuevo Influencer</label>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-7 col-7 mb-1">Producto</div>
                                                                <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode2_1" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode2_1', '#prodNode2_2', '#prodNode2_3', '#pzsProdNode2_1', '#pzsProdNode2_2', '#pzsProdNode2_3', 'influencerNodo2')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode2_1">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode2_2" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode2_1', '#prodNode2_2', '#prodNode2_3', '#pzsProdNode2_1', '#pzsProdNode2_2', '#pzsProdNode2_3', 'influencerNodo2')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode2_2">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode2_2'), $('#pzsProdNode2_2'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                    <input id="prodNode2_3" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode2_1', '#prodNode2_2', '#prodNode2_3', '#pzsProdNode2_1', '#pzsProdNode2_2', '#pzsProdNode2_3', 'influencerNodo2')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode2_3">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode2_3'), $('#pzsProdNode2_3'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12 btnAddProdNodo2" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode2_1', '#prodNode2_2', '#prodNode2_3', '#pzsProdNode2_1', '#pzsProdNode2_2', '#pzsProdNode2_3', 'influencerNodo2')">
                                                                <span class="flaticon-add-circle-outline"></span>
                                                                Agregar otro producto
                                                            </button>
                                                            <div class="table-responsive displayDesktop">
                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Plan de Influencia 3.0:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoInfluenciaNodo2">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Retail:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoRetailNodo2">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Reembolso:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoReembolsoNodo2">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Bonificación por grupo <span id="porcentBonoGPNodo2">15</span>%:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoPorGrupoNodo2">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Liderazgo 6%:
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="bonoLiderNodo2">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Total de bonificaciones:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoTotalNodo2">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-rounded col-10 mb-4 mr-2 displayMovil m-auto" data-toggle="modal" data-target=".modalNodo2" onclick="getNameToModal($('#nombreNodo2'), $('#NombreNodo2Modal'), $('#rangoNodo2'), $('#RangoNodo2Modal'))">
                                                                Detalles
                                                            </button>
                                                            <div class="modal fade modalNodo2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="NombreNodo2Modal"></h5>&nbsp; | &nbsp;Rango: &nbsp;<span id="RangoNodo2Modal"></span>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Plan de Influencia 3.0:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoInfluenciaNodo2Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Retail:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoRetailNodo2Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Reembolso:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoReembolsoNodo2Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Bonificación por grupo <span id="porcentBonoGPNodo2">15</span>%:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoPorGrupoNodo2Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Liderazgo 6%:
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="bonoLiderNodo2Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Total de bonificaciones:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoTotalNodo2Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-12 nodo3-nodo4 text-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-black text-center mb-2">
                                                        <span id="linea2indicador">Línea 2</span>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 nodo3 text-center">
                                                        <form id="nodo3">
                                                            <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo3" placeholder="Ingresa un nombre" onkeyup="this.value = this.value.toUpperCase();">
                                                            <div class="input-group mb-4 col-xl-12 col-lg-12 col-md-12 m-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                                        <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo3">
                                                                        Rango
                                                                    </span>
                                                                </div>
                                                                <select id="rangoNodo3" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo3'), this.value, $('#nodo4'), 'porcentBonoGPNodo3')">
                                                                    <option value="Cliente">Cliente</option>
                                                                    <option value="Influencer">Influencer</option>
                                                                    <option value="DIR" selected>Directo</option>
                                                                    <option value="EXE">Ejecutivo</option>
                                                                    <option value="PLA">Plata</option>
                                                                    <option value="ORO">Oro</option>
                                                                    <option value="PLO">Platino</option>
                                                                    <option value="DIA">Diamante</option>
                                                                    <option value="DRL">Diamante Real</option>
                                                                </select>
                                                                &nbsp; <div class="salto"></div>
                                                                <div class="input-group-prepend alignPais">
                                                                    <span class="form-control-rounded input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;background-color: transparent">
                                                                        <img id="iconNodo3Pais" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/LAT.png') }}" width="20px">
                                                                        <span id="nombrePaisNode3">México</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                                <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo3" onclick="setNodoInfluencer(this, $('#rangoNodo3'), $('.btnAddProdNodo3'), $('#prodNode3_1'), $('#pzsProdNode3_1'), $('#iconNodo3'))">
                                                                <label class="custom-control-label" for="influencerNodo3">Nuevo Influencer</label>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-7 col-7 mb-1">Producto</div>
                                                                <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode3_1" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode3_1', '#prodNode3_2', '#prodNode3_3', '#pzsProdNode3_1', '#pzsProdNode3_2', '#pzsProdNode3_3', 'influencerNodo3')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode3_1">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode3_2" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode3_1', '#prodNode3_2', '#prodNode3_3', '#pzsProdNode3_1', '#pzsProdNode3_2', '#pzsProdNode3_3', 'influencerNodo3')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode3_2">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode3_2'), $('#pzsProdNode3_2'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                    <input id="prodNode3_3" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode3_1', '#prodNode3_2', '#prodNode3_3', '#pzsProdNode3_1', '#pzsProdNode3_2', '#pzsProdNode3_3', 'influencerNodo3')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode3_3">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode3_3'), $('#pzsProdNode3_3'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12 btnAddProdNodo3" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode3_1', '#prodNode3_2', '#prodNode3_3', '#pzsProdNode3_1', '#pzsProdNode3_2', '#pzsProdNode3_3', 'influencerNodo3')">
                                                                <span class="flaticon-add-circle-outline"></span>
                                                                Agregar otro producto
                                                            </button>
                                                            <div class="table-responsive displayDesktop">
                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Plan de Influencia 3.0:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoInfluenciaNodo3">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Retail:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoRetailNodo3">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Reembolso:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoReembolsoNodo3">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Bonificación por grupo <span id="porcentBonoGPNodo3">15</span>%:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoPorGrupoNodo3">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Liderazgo 6%:
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="bonoLiderNodo3">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Total de bonificaciones:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoTotalNodo3">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-rounded col-10 mb-4 mr-2 displayMovil m-auto" data-toggle="modal" data-target=".modalNodo3" onclick="getNameToModal($('#nombreNodo3'), $('#NombreNodo3Modal'), $('#rangoNodo3'), $('#RangoNodo3Modal'))">
                                                                Detalles
                                                            </button>
                                                            <br>
                                                            <div class="modal fade modalNodo3 mb-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="NombreNodo3Modal"></h5>&nbsp; | &nbsp;Rango: &nbsp;<span id="RangoNodo3Modal"></span>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Plan de Influencia 3.0:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoInfluenciaNodo3Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Retail:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoRetailNodo3Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Reembolso:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoReembolsoNodo3Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Bonificación por grupo <span id="porcentBonoGPNodo3">15</span>%:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoPorGrupoNodo3Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Liderazgo 6%:
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="bonoLiderNodo3Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Total de bonificaciones:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoTotalNodo3Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <hr class="btnNode hrNode2">
                                                    <button class="btn btn-outline-success btn-rounded col-8 bg-white btnAddNodo2" type="button" onclick="showPlayer($('#nodo4'))">
                                                        <span class="flaticon-plus-fill"></span>
                                                        Añadir Influencer
                                                    </button>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 nodo4 text-center">
                                                        <form id="nodo4">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                                                                <i class="flaticon-close btnHidePlayer" onclick="hidePlayer($('#nodo4'), $('#iconNodo4'))"></i>
                                                            </div>
                                                            <hr class="hr-node">
                                                            <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo4" placeholder="Ingresa un nombre" onkeyup="this.value = this.value.toUpperCase();">
                                                            <div class="input-group mb-4 col-xl-12 col-lg-12 col-md-12 m-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                                        <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo4">
                                                                        Rango
                                                                    </span>
                                                                </div>
                                                                <select id="rangoNodo4" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo4'), this.value, null, 'porcentBonoGPNodo1')">
                                                                    <option value="Influencer">Influencer</option>
                                                                    <option value="DIR" selected>Directo</option>
                                                                    <option value="EXE">Ejecutivo</option>
                                                                    <option value="PLA">Plata</option>
                                                                    <option value="ORO">Oro</option>
                                                                    <option value="PLO">Platino</option>
                                                                    <option value="DIA">Diamante</option>
                                                                    <option value="DRL">Diamante Real</option>
                                                                </select>
                                                                &nbsp; <div class="salto"></div>
                                                                <div class="input-group-prepend alignPais">
                                                                    <span class="form-control-rounded input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;background-color: transparent">
                                                                        <img id="iconNodo4Pais" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/LAT.png') }}" width="20px">
                                                                        <span id="nombrePaisNode4">México</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="custom-control custom-checkbox checkbox-primary">
                                                                <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo4" onclick="setNodoInfluencer(this, $('#rangoNodo4'), $('.btnAddProdNodo4'), $('#prodNode4_1'), $('#pzsProdNode4_1'), $('#iconNodo4'))">
                                                                <label class="custom-control-label" for="influencerNodo4">Nuevo Influencer</label>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-7 col-7 mb-1">Producto</div>
                                                                <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode4_1" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode4_1', '#prodNode4_2', '#prodNode4_3', '#pzsProdNode4_1', '#pzsProdNode4_2', '#pzsProdNode4_3', 'influencerNodo4')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode4_1">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode4_2" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode4_1', '#prodNode4_2', '#prodNode4_3', '#pzsProdNode4_1', '#pzsProdNode4_2', '#pzsProdNode4_3', 'influencerNodo4')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode4_2">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode4_2'), $('#pzsProdNode4_2'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                    <input id="prodNode4_3" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode4_1', '#prodNode4_2', '#prodNode4_3', '#pzsProdNode4_1', '#pzsProdNode4_2', '#pzsProdNode4_3', 'influencerNodo4')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode4_3">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode4_3'), $('#pzsProdNode4_3'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12 btnAddProdNodo4" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode4_1', '#prodNode4_2', '#prodNode4_3', '#pzsProdNode4_1', '#pzsProdNode4_2', '#pzsProdNode4_3', 'influencerNodo4')">
                                                                <span class="flaticon-add-circle-outline"></span>
                                                                Agregar otro producto
                                                            </button>
                                                            <div class="table-responsive displayDesktop">
                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Plan de Influencia 3.0:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoInfluenciaNodo4">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Retail:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoRetailNodo4">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Reembolso:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoReembolsoNodo4">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Bonificación por grupo <span id="porcentBonoGPNodo4">15</span>%:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoPorGrupoNodo4">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Liderazgo 6%:
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="bonoLiderNodo4">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Total de bonificaciones:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoTotalNodo4">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-rounded col-10 mb-4 mr-2 displayMovil m-auto" data-toggle="modal" data-target=".modalNodo4" onclick="getNameToModal($('#nombreNodo4'), $('#NombreNodo4Modal'), $('#rangoNodo4'), $('#RangoNodo4Modal'))">
                                                                Detalles
                                                            </button>
                                                            <div class="modal fade modalNodo4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="NombreNodo4Modal"></h5>&nbsp; | &nbsp;Rango: &nbsp;<span id="RangoNodo4Modal"></span>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Plan de Influencia 3.0:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoInfluenciaNodo4Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Retail:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoRetailNodo4Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Reembolso:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoReembolsoNodo4Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Bonificación por grupo <span id="porcentBonoGPNodo4">15</span>%:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoPorGrupoNodo4Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Liderazgo 6%:
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="bonoLiderNodo4Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Total de bonificaciones:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoTotalNodo4Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-12 nodo5-nodo6 text-center">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-black text-center mb-2">
                                                        <span id="linea3indicador">Línea 3</span>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 nodo5 text-center">
                                                        <form id="nodo5">
                                                            <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo5" placeholder="Ingresa un nombre" onkeyup="this.value = this.value.toUpperCase();">
                                                            <div class="input-group mb-4 col-xl-12 col-lg-12 col-md-12 m-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                                        <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo5">
                                                                        Rango
                                                                    </span>
                                                                </div>
                                                                <select id="rangoNodo5" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo5'), this.value, $('#nodo6'), 'porcentBonoGPNodo5')">
                                                                    <option value="Cliente">Cliente</option>
                                                                    <option value="Influencer">Influencer</option>
                                                                    <option value="DIR" selected>Directo</option>
                                                                    <option value="EXE">Ejecutivo</option>
                                                                    <option value="PLA">Plata</option>
                                                                    <option value="ORO">Oro</option>
                                                                    <option value="PLO">Platino</option>
                                                                    <option value="DIA">Diamante</option>
                                                                    <option value="DRL">Diamante Real</option>
                                                                </select>
                                                                &nbsp; <div class="salto"></div>
                                                                <div class="input-group-prepend alignPais">
                                                                    <span class="form-control-rounded input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;background-color: transparent">
                                                                        <img id="iconNodo5Pais" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/LAT.png') }}" width="20px">
                                                                        <span id="nombrePaisNode5">México</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                                <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo5" onclick="setNodoInfluencer(this, $('#rangoNodo5'), $('.btnAddProdNodo5'), $('#prodNode5_1'), $('#pzsProdNode5_1'), $('#iconNodo5'))">
                                                                <label class="custom-control-label" for="influencerNodo5">Nuevo Influencer</label>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-7 col-7 mb-1">Producto</div>
                                                                <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode5_1" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode5_1', '#prodNode5_2', '#prodNode5_3', '#pzsProdNode5_1', '#pzsProdNode5_2', '#pzsProdNode5_3', 'influencerNodo5')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode5_1">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode5_2" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode5_1', '#prodNode5_2', '#prodNode5_3', '#pzsProdNode5_1', '#pzsProdNode5_2', '#pzsProdNode5_3', 'influencerNodo5')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode5_2">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode5_2'), $('#pzsProdNode5_2'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                    <input id="prodNode5_3" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode5_1', '#prodNode5_2', '#prodNode5_3', '#pzsProdNode5_1', '#pzsProdNode5_2', '#pzsProdNode5_3', 'influencerNodo5')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode5_3">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode5_3'), $('#pzsProdNode5_3'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12 btnAddProdNodo5" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode5_1', '#prodNode5_2', '#prodNode5_3', '#pzsProdNode5_1', '#pzsProdNode5_2', '#pzsProdNode5_3', 'influencerNodo5')">
                                                                <span class="flaticon-add-circle-outline"></span>
                                                                Agregar otro producto
                                                            </button>
                                                            <div class="table-responsive displayDesktop">
                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Plan de Influencia 3.0:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoInfluenciaNodo5">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Retail:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoRetailNodo5">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Reembolso:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoReembolsoNodo5">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Bonificación por grupo <span id="porcentBonoGPNodo5">15</span>%:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoPorGrupoNodo5">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Liderazgo 6%:
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="bonoLiderNodo5">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Total de bonificaciones:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoTotalNodo5">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-rounded col-10 mb-4 mr-2 displayMovil m-auto" data-toggle="modal" data-target=".modalNodo5" onclick="getNameToModal($('#nombreNodo5'), $('#NombreNodo5Modal'), $('#rangoNodo5'), $('#RangoNodo5Modal'))">
                                                                Detalles
                                                            </button>
                                                            <br>
                                                            <div class="modal fade modalNodo5 mb-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="NombreNodo5Modal"></h5>&nbsp; | &nbsp;Rango: &nbsp;<span id="RangoNodo5Modal"></span>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Plan de Influencia 3.0:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoInfluenciaNodo5Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Retail:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoRetailNodo5Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Reembolso:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoReembolsoNodo5Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Bonificación por grupo <span id="porcentBonoGPNodo5">15</span>%:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoPorGrupoNodo5Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Liderazgo 6%:
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="bonoLiderNodo5Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Total de bonificaciones:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoTotalNodo5Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <hr class="btnNode hrNode3">
                                                    <button class="btn btn-outline-success btn-rounded col-8 bg-white btnAddNodo3" type="button" onclick="showPlayer($('#nodo6'))">
                                                        <span class="flaticon-plus-fill"></span>
                                                        Añadir Influencer
                                                    </button>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 nodo6 text-center">
                                                        <form id="nodo6">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                                                                <i class="flaticon-close btnHidePlayer" onclick="hidePlayer($('#nodo6'), $('#iconNodo6'))"></i>
                                                            </div>
                                                            <hr class="hr-node">
                                                            <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo6" placeholder="Ingresa un nombre" onkeyup="this.value = this.value.toUpperCase();">
                                                            <div class="input-group mb-4 col-xl-12 col-lg-12 col-md-12 m-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                                        <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo6">
                                                                        Rango
                                                                    </span>
                                                                </div>
                                                                <select id="rangoNodo6" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo6'), this.value, null, 'porcentBonoGPNodo3')">
                                                                    <option value="Influencer">Influencer</option>
                                                                    <option value="DIR" selected>Directo</option>
                                                                    <option value="EXE">Ejecutivo</option>
                                                                    <option value="PLA">Plata</option>
                                                                    <option value="ORO">Oro</option>
                                                                    <option value="PLO">Platino</option>
                                                                    <option value="DIA">Diamante</option>
                                                                    <option value="DRL">Diamante Real</option>
                                                                </select>
                                                                &nbsp; <div class="salto"></div>
                                                                <div class="input-group-prepend alignPais">
                                                                    <span class="form-control-rounded input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;background-color: transparent">
                                                                        <img id="iconNodo6Pais" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/LAT.png') }}" width="20px">
                                                                        <span id="nombrePaisNode6">México</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                                <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo6" onclick="setNodoInfluencer(this, $('#rangoNodo6'), $('.btnAddProdNodo6'), $('#prodNode6_1'), $('#pzsProdNode6_1'), $('#iconNodo6'))">
                                                                <label class="custom-control-label" for="influencerNodo6">Nuevo Influencer</label>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-7 col-7 mb-1">Producto</div>
                                                                <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode6_1" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode6_1', '#prodNode6_2', '#prodNode6_3', '#pzsProdNode6_1', '#pzsProdNode6_2', '#pzsProdNode6_3', 'influencerNodo6')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode6_1">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7 mb-2">
                                                                    <input id="prodNode6_2" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode6_1', '#prodNode6_2', '#prodNode6_3', '#pzsProdNode6_1', '#pzsProdNode6_2', '#pzsProdNode6_3', 'influencerNodo6')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right mb-2">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode6_2">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode6_2'), $('#pzsProdNode6_2'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                                    <input id="prodNode6_3" type="text" placeholder="agrega un producto" class="form-control-rounded form-control hiden" required readonly data-toggle="modal" data-target="#modalProductos" onclick="this.value = '', getNodeRef('#prodNode6_1', '#prodNode6_2', '#prodNode6_3', '#pzsProdNode6_1', '#pzsProdNode6_2', '#pzsProdNode6_3', 'influencerNodo6')">
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                                    <div class="input-group hiden">
                                                                        <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode6_3">
                                                                        <div class="input-group-append">
                                                                            <span class="form-control-rounded-right input-group-text">pza.</span>
                                                                        </div>
                                                                        <div class="dropdown custom-dropdown d-inline-block">
                                                                            <a class="dropdown-toggle pl-0" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="flaticon-dots"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="javascript:void(0);" onclick="delProd($('#prodNode6_3'), $('#pzsProdNode6_3'))"><i class=""></i> Eliminar producto</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12 btnAddProdNodo6" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode6_1', '#prodNode6_2', '#prodNode6_3', '#pzsProdNode6_1', '#pzsProdNode6_2', '#pzsProdNode6_3', 'influencerNodo6')">
                                                                <span class="flaticon-add-circle-outline"></span>
                                                                Agregar otro producto
                                                            </button>
                                                            <div class="table-responsive displayDesktop">
                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Plan de Influencia 3.0:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoInfluenciaNodo6">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Retail:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoRetailNodo6">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Reembolso:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoReembolsoNodo6">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Bonificación por grupo <span id="porcentBonoGPNodo6">15</span>%:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoPorGrupoNodo6">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Liderazgo 6%:
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <span id="bonoLiderNodo6">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left">
                                                                                Total de bonificaciones:
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span id="moneda">$</span>
                                                                            </td>
                                                                            <td class="text-left">
                                                                                <span id="bonoTotalNodo6">0.00</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-rounded col-10 mb-4 mr-2 displayMovil m-auto" data-toggle="modal" data-target=".modalNodo6" onclick="getNameToModal($('#nombreNodo6'), $('#NombreNodo6Modal'), $('#rangoNodo6'), $('#RangoNodo6Modal'))">
                                                                Detalles
                                                            </button>
                                                            <div class="modal fade modalNodo6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="NombreNodo6Modal"></h5>&nbsp; | &nbsp;Rango: &nbsp;<span id="RangoNodo6Modal"></span>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Plan de Influencia 3.0:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoInfluenciaNodo6Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Retail:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoRetailNodo6Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Reembolso:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoReembolsoNodo6Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Bonificación por grupo <span id="porcentBonoGPNodo6">15</span>%:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoPorGrupoNodo6Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Liderazgo 6%:
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <span id="bonoLiderNodo6Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-left">
                                                                                                Total de bonificaciones:
                                                                                            </td>
                                                                                            <td class="text-right">
                                                                                                <span id="moneda">$</span>
                                                                                            </td>
                                                                                            <td class="text-left">
                                                                                                <span id="bonoTotalNodo6Modal">0.00</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12 layout-spacing text-center m-auto">
                                            <div class="table-responsive bonificacionTab mt-3">
                                                <table class="table table-bordered table-striped table-checkable table-highlight-head ">
                                                    <thead>
                                                        <tr>
                                                            <td></td>
                                                            <td>Mi Bonificación</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">
                                                                Plan de Influencia 3.0:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> <spna id="bonoInfluenciaPlata">0.00</spna>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Ganancias de Ventas a precio sugerido:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> <span id="bonoRetailPlata">0.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Reembolso personal sobre VC:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> <span id="bonoReembolsoPlata">0.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Bonificación adicional sobre VC<span id="porcentBonoGPPadres" hidden>15%</span>:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> <span id="bonoGrupoPlata">0.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Bonificación de Liderazgo sobre VC 6%:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> <span id="bonoLiderPlata">0.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Total de ingresos:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> <span id="bonoTotalPlata">0.00</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
            
                                        <div class="col-md-12 text-center mt-4">
                                            <button class="btn btn-gradient-warning btn-rounded mb-4 mr-2" type="button" onclick="getBonos()">
                                                Calcular
                                            </button>
                                            <button class="btn btn-gradient-primary btn-rounded mb-4 mr-2" type="reset" onclick="location.reload()">
                                                Limpiar
                                            </button>
                                            <button class="btn btn-gradient-primary btn-rounded mb-4 mr-2" type="reset" onclick="getPDF()">
                                                Descargar
                                            </button>
                                        </div>

                                        <h4 class="opcional mt-2 mr-3 ml-3 text-justify text-black" style="font-size: 20px !important;">
                                            * Las ganancias relacionadas con el Retail y Plan de Influencia 3.0 Mainichi se pagará semanalmente los martes y las correspondientes al Plan de Influencia 3.0 y Plan de Compensación se realizarán al mes siguiente de ser generadas el día 15 del mes.
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="chat" hidden>
                    <div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="¿Necesitas ayuda? Ve nuestro tutorial" data-toggle="modal" data-target=".mdl-tutorial">
                        <i class="flaticon-question"></i>
                    </div>
                    <div class="modal fade bd-example-modal-lg mdl-tutorial" style="z-index: 1061 !important" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" onclick="stopVideo()">
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
                                            <!--<source src="{{ asset('fproh/img/influencia30/simulador_4.mp4') }}" type="video/mp4" />-->
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-xl" id="modalRangos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-image: url() !important;">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex; border-radius: 25px !important;">
                                <div class="swal2-content">
                                    <div class="row" style="justify-content: space-evenly">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                                            <h2 class="text-black"><b>Selecciona el rango</b></h2>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-primary btn-rounded mr-2 mt-3 col-12" type="button">
                                                CLIENTE
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/influencer.png') }}" width="20px">
                                                NUEVO INFLUENCER
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-secondary btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px">
                                                RANGO DIRECTO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoEjecutivo btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/EXE.png') }}" width="20px">
                                                RANGO EJECUTIVO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-dark btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/PLA.png') }}" width="20px">
                                                RANGO PLATA
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-warning btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/ORO.png') }}" width="20px">
                                                RANGO ORO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoPlatino btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/PLO.png') }}" width="20px">
                                                RANGO PLATINO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoDiamante btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIA.png') }}" width="20px">
                                                RANGO DIAMANTE
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoDiamanteReal btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DRL.png') }}" width="20px">
                                                RANGO DIAMANTE REAL
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade bd-example-modal-xl" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-image: url() !important;">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex; border-radius: 25px !important;">
                                <div class="swal2-content">
                                    <div class="row" style="justify-content: space-evenly" id="todosProductos">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-1 text-center">
                                            <h2 class="text-black"><b>Selecciona una marca o producto</b></h2>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-1 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-Kenko-Ligth.png') }}" width="100%" data-product="kenko_light" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-1 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-Kenko-Sleep.png') }}" width="100%" data-product="kenko_sleep" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-1 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-Kenko-Air.png') }}" width="100%" data-product="kenko_air" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-1 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-pimag.png') }}" width="100%" data-product="pimag" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-1 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/kenzen2.png') }}" width="100%" data-product="kenzen" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 text-center">
                                            <div class="table-responsive mb-4">
                                                <table id="catProd" class="table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="hiden">actions</th>
                                                            <th class="hiden">Código</th>
                                                            <th class="hiden">Producto</th>
                                                            <th class="hiden"></th>
                                                            <th class="hiden">Precio</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="justify-content: space-evenly" id="productosInfluencia">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-1 text-center">
                                            <h2 class="text-black"><b>Seleccione el kit de Influencia</b></h2>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 text-center">
                                            <div class="table-responsive mb-4">
                                                <table id="catProdInfluencia" class="table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="hiden">actions</th>
                                                            <th class="hiden">Código</th>
                                                            <th class="hiden">Producto</th>
                                                            <th class="hiden"></th>
                                                            <th class="hiden">Precio</th>
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

                <div class="modal fade bd-example-modal-xl" id="modalRqusisitos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-image: url() !important;">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex; border-radius: 25px !important;">
                                <div class="swal2-content">
                                    <div class="row" style="justify-content: space-evenly">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                                            <h2 class="text-black"><b>Requisitos de rango <span id="requisitosRango"></span></b></h2>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center" id="reqRangoDIR">
                                            <img src="{{ asset('fproh/img/calculadora/1.png') }}" width="80%">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center" id="reqRangoEXE">
                                            <img src="{{ asset('fproh/img/calculadora/2.png') }}" width="80%">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center" id="reqRangoPLA">
                                            <img src="{{ asset('fproh/img/calculadora/3.png') }}" width="80%">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center" id="reqRangoORO">
                                            <img src="{{ asset('fproh/img/calculadora/4.png') }}" width="80%">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center" id="reqRangoPLO">
                                            <img src="{{ asset('fproh/img/calculadora/5.png') }}" width="80%">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center" id="reqRangoDIA">
                                            <img src="{{ asset('fproh/img/calculadora/6.png') }}" width="80%">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center" id="reqRangoDRL">
                                            <img src="{{ asset('fproh/img/calculadora/7.png') }}" width="80%">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-xl" id="modalDetalles" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-image: url() !important;">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex; border-radius: 25px !important;">
                                <div class="swal2-content">
                                    <div class="row" style="justify-content: space-evenly">
                                        <h3>
                                            * Ten presente que las ganancias dependen del cumplimiento de los requisitos del Plan de Compensación y Plan de Influencia 3.0, que además están sujetas a cuota de manejo, retenciones y régimen fiscal del país.<br><br>
                                        </h3>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark btn-rounded" data-dismiss="modal">Ok</button>
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

    <footer class="footer-section theme-footer">
        <div class="footer-section-1  sidebar-theme">
        </div>
        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; {{ Date('Y') }} <a href="javascript:void(0)">NIKKEN Latinoamerica </a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
    <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fproh/js/app.js') }}"></script>
    <script src="{{ asset('fproh/js/custom.js') }}"></script>
    <script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/classie.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/modalEffects.js') }}"></script>
    <script src="{{ asset('fproh/js/ui-kit/ui-tooltip-popovers.js') }}"></script>
    <script src="{{ asset('fproh/plugins/table/datatable/datatables.js') }}"></script>

    <script src="{{ asset('fproh/mainjs/calculadora/calculadora.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            initCalc();
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177085378-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-177085378-1');
    </script>

</html>