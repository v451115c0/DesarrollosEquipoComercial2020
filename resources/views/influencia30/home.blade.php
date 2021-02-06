@extends('influencia30.layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/maincss/influencia30/influencia30.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/modules/modules-card.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/modules/modules-widgets.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/modals/component.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/ui-kit/custom-tooltips_and_popovers.css') }}"/>
@endsection

@section('bg')
    <div class="blur-bg"></div>
    <input type="hidden" id="lang" value="{{ $locale ?? 'es' }}">
@endsection

@section('content')
<div class="row">
    <div class="form-group col-md-1"></div>
    <div class="col-xl-10 col-lg-10 col-sm-12 layout-spacing ">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-2">
                        <button type="button" class="btn btn-primary btn-rounded  mb-4 mr-2" hidden id="step2" data-toggle="modal" data-target=".bd-example-modal-xl">spet 2</button>
                        <img src="{{ asset('fproh/img/influencia30/influencia_logo.png') }}" class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area pt-5">
                <div class="row" id="stepsBody">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4 text-center">
                        <div class="widget-content-area total-coins br-4">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <p class="widget-icon">
                                        <span class="flaticon-user-11" style="font-size: 35px"></span>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-12 mt-5 ml-2">
                                    <p class="widget-title">{{__('Name')}}: </p>
                                    <p class="widget-value"><span id="visitorName"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4 text-center">
                        <div class="widget-content-area total-commodities  br-4">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <p class="widget-icon">
                                        <span class="flaticon-cart-bag" style="font-size: 35px"></span>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-12 mt-5 ml-2">
                                    <p class="widget-title">{{__('Need')}}: </p>
                                    <p class="widget-value"><span id="needVisitor"></span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4 text-center">
                        <div class="widget-content-area total-currencies  br-4">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <p class="widget-icon">
                                        <span class="flaticon-money" style="font-size: 35px"></span>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-12 mt-5 ml-2">
                                    <p class="widget-title">{{__('Desired monthly benefit')}}: </p>
                                    <p class="widget-value"><span id="costVisitor"></span> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="slctProds" class="row step4Body">
                        <div class="col-sm-12 col-12 mb-sm-0 mb-4 text-center text-black mt-5">
                            <ul class="swal2-progresssteps">
                                <li class="swal2-progresscircle swal2-activeprogressstep">4</li>
                            </ul>
                            <h2><span id="step4Name"></span>, {{__('your dream to pursue is pay or invest')}} <span id="step4Need"></span></h2>
                            <h4>{{__('Your dream is valued between')}} <span id="step4De"></span> {{__('and')}} <span id="step4A"></span> <br> {{__('With what product option would you do it?')}}</h4>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12"></div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card dribbble br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="step5(1)" title="Click para seleccionar">
                                            <img src="{{ asset('fproh/img/influencia30/producto/waterfall-min.png') }}" width=65%">
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="step5(1)">Waterfall</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card twitter br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="step5(2)" title="Click para seleccionar">
                                            <img src="{{ asset('fproh/img/influencia30/producto/waterfall-optimizer-min.png') }}" width=65%">
                                        </a>
                                    </div>
                                    <div class="card-content text-center">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="step5(2)">Waterfall + Optimizer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-gradient-success btn-rounded mb-4" onclick="regresarapso3()" >
                                {{__('Go back')}}
                            </button>
                        </div>
                    </div>

                    <div class="row mt-5" id="step5">
                        <div class="col-xl-12 layout-spacing text-black text-center">
                            <h1><span id="step5Name"></span>, {{__('we are very close to your goal')}}</h1>
                            <h4>{{__('Think of')}} <span id="step5NoUnidades"></span> {{__('people')}}<span id="step5Prod" hidden></span> {{__('who would like to have this product as much as you do, and if you make it happen you will get a benefit of')}} <span id="step5Monto"></span>. {{__('Next, we will tell you how to achieve your goal and share wellness with all your contacts.')}}</h4>
                            <img src="{{ asset('fproh/img/influencia30/SIMULADOR_0001_Grupo-18.png') }}" width="45%">
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-gradient-success btn-rounded mb-4 mr-2" onclick="returnStep4()">
                                {{__('Go back')}}
                            </button>
                            <button class="btn btn-gradient-success btn-rounded mb-4" onclick="showSimulador()">
                                {{__('Continue')}}
                            </button>
                        </div>
                        <div class="col-md-12 text-right pr-4">
                            <span class="opcional pull-left" style="font-size: 15px !important;">* {{__('Benefit based on Influence Plan 3.0')}}</span>
                        </div>
                    </div>

                    <div id="simuladorFin" class="row pl-4 pr-4 text-black">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing mt-5 text-black text-center">
                            <h3><span id="step6Name"></span>, {{__('your total benefit for Influence Plan is')}} <span id="step6MonedaLinea0"></span><span id="step6MontoGanado">0.00</span></h3>
                            <span class="badge badge-warning" id="ventasAlert0" style="white-space: normal !important;">{{__('To get the normal purchase bonus, a total of 3 or more products are required.')}}</span>
                            <h6>{{__('From the people you know, who would like to have this product?')}}</h6>
                        </div>
                        <form id="Jugadores" class="row ">
                            <div class=" players-group ml-1 mr-1" style="width: 100%">
                                <div class="row layout-spacing" style="margin-left: 0 !important;margin-right: 0 !important;">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing item1">
                                        <input type="text" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="jugadorLinea1" placeholder="{{__('Please enter a name')}}">
                                        <div class="input-group mt-4">
                                            <input type="text" class=" form-control-rounded-left form-control" aria-describedby="basic-addon2" readonly id="prodSelecLinea1">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary form-control-rounded-right bs-tooltip" data-placement="left" title="" data-original-title="{{__('Add product')}}" onclick="showProducts(1)">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="influenciaR1Linea1" name="customRadioLiena1" class="custom-control-input" value="1" checked  onclick="validaPais('influencia')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="influenciaR1Linea1">{{__('Purchase with benefit')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" id="ventaR1Linea1" name="customRadioLiena1" class="custom-control-input" value="0" onclick="validaPais('venta')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="ventaR1Linea1">{{__('Normal purchase')}}</label>
                                        </div>
                                        <h1 class="mt-4 text-center"><span id="step6MonedaLinea1"></span><span id="BonoLinea1">0.00</span></h1>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing item2">
                                        <input type="text" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="jugadorLinea2" placeholder="{{__('Please enter a name')}}">
                                        <div class="input-group mt-4">
                                            <input type="text" class=" form-control-rounded-left form-control" aria-describedby="basic-addon2" readonly  id="prodSelecLinea2">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary form-control-rounded-right bs-tooltip" data-placement="left" title="" data-original-title="{{__('Add product')}}" onclick="showProducts(2)">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="influenciaR1Linea2" name="customRadioLiena2" class="custom-control-input" value="1" checked onclick="validaPais('influencia')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="influenciaR1Linea2">{{__('Purchase with benefit')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" id="ventaR1Linea2" name="customRadioLiena2" class="custom-control-input" value="0" onclick="validaPais('venta')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="ventaR1Linea2" onclick="validaCompra()">{{__('Normal purchase')}}</label>
                                        </div>
                                        <h1 class="mt-4 text-center"><span id="step6MonedaLinea2"></span><span id="BonoLinea2">0.00</span></h1>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing item3">
                                        <input type="text" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="jugadorLinea3" placeholder="{{__('Please enter a name')}}">
                                        <div class="input-group mt-4">
                                            <input type="text" class=" form-control-rounded-left form-control" aria-describedby="basic-addon2" readonly  id="prodSelecLinea3">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary form-control-rounded-right bs-tooltip" data-placement="left" title="" data-original-title="{{__('Add product')}}" onclick="showProducts(3)">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="influenciaR1Linea3" name="customRadioLiena3" class="custom-control-input" value="1" checked onclick="validaPais('influencia')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="influenciaR1Linea3">{{__('Purchase with benefit')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" id="ventaR1Linea3" name="customRadioLiena3" class="custom-control-input" value="0" onclick="validaPais('venta')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="ventaR1Linea3" onclick="validaCompra()">{{__('Normal purchase')}}</label>
                                        </div>
                                        <h1 class="mt-4 text-center"><span id="step6MonedaLinea3"></span><span id="BonoLinea3">0.00</span>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 layout-spacing item4">
                                        <input type="text" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="jugadorLinea4" placeholder="{{__('Please enter a name')}}">
                                        <div class="input-group mt-4">
                                            <input type="text" class=" form-control-rounded-left form-control" aria-describedby="basic-addon2" readonly  id="prodSelecLinea4">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary form-control-rounded-right bs-tooltip" data-placement="left" title="" data-original-title="{{__('Add product')}}" onclick="showProducts(4)">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="influenciaR1Linea4" name="customRadioLiena4" class="custom-control-input" value="1" checked onclick="validaPais('influencia')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="influenciaR1Linea4">{{__('Purchase with benefit')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" id="ventaR1Linea4" name="customRadioLiena4" class="custom-control-input" value="0" onclick="validaPais('venta')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="ventaR1Linea4" onclick="validaCompra()">{{__('Normal purchase')}}</label>
                                        </div>
                                        <h1 class="mt-4 text-center"><span id="step6MonedaLinea4"></span><span id="BonoLinea4">0.00</span>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 layout-spacing item5">
                                        <input type="text" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="jugadorLinea5" placeholder="{{__('Please enter a name')}}">
                                        <div class="input-group mt-4">
                                            <input type="text" class=" form-control-rounded-left form-control" aria-describedby="basic-addon2" readonly  id="prodSelecLinea5">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary form-control-rounded-right bs-tooltip" data-placement="left" title="" data-original-title="{{__('Add product')}}" onclick="showProducts(5)">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="influenciaR1Linea3" name="customRadioLiena5" class="custom-control-input" value="1" checked onclick="validaPais('influencia')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="influenciaR1Linea5">{{__('Purchase with benefit')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" id="ventaR1Linea5" name="customRadioLiena5" class="custom-control-input" value="0" onclick="validaPais('venta')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="ventaR1Linea5" onclick="validaCompra()">{{__('Normal purchase')}}</label>
                                        </div>
                                        <h1 class="mt-4 text-center"><span id="step6MonedaLinea5"></span><span id="BonoLinea5">0.00</span>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 layout-spacing item6">
                                        <input type="text" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="jugadorLinea6" placeholder="{{__('Please enter a name')}}">
                                        <div class="input-group mt-4">
                                            <input type="text" class=" form-control-rounded-left form-control" aria-describedby="basic-addon2" readonly  id="prodSelecLinea6">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary form-control-rounded-right bs-tooltip" data-placement="left" title="" data-original-title="{{__('Add product')}}" onclick="showProducts(6)">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="influenciaR1Linea6" name="customRadioLiena6" class="custom-control-input" value="1" checked onclick="validaPais('influencia')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="influenciaR1Linea6">{{__('Purchase with benefit')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" id="ventaR1Linea6" name="customRadioLiena6" class="custom-control-input" value="0" onclick="validaPais('venta')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="ventaR1Linea6" onclick="validaCompra()">{{__('Normal purchase')}}</label>
                                        </div>
                                        <h1 class="mt-4 text-center"><span id="step6MonedaLinea6"></span><span id="BonoLinea6">0.00</span>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 layout-spacing item7">
                                        <input type="text" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="jugadorLinea7" placeholder="{{__('Please enter a name')}}">
                                        <div class="input-group mt-4">
                                            <input type="text" class=" form-control-rounded-left form-control" aria-describedby="basic-addon2" readonly  id="prodSelecLinea7">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary form-control-rounded-right bs-tooltip" data-placement="left" title="" data-original-title="{{__('Add product')}}" onclick="showProducts(7)">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="influenciaR1Linea7" name="customRadioLiena7" class="custom-control-input" value="1" checked onclick="validaPais('influencia')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="influenciaR1Linea7">{{__('Purchase with benefit')}}</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-4">
                                            <input type="radio" id="ventaR1Linea7" name="customRadioLiena7" class="custom-control-input" value="0" onclick="validaPais('venta')" onchange="validaCompra()">
                                            <label class="custom-control-label" for="ventaR1Linea7" onclick="validaCompra()">{{__('Normal purchase')}}</label>
                                        </div>
                                        <h1 class="mt-4 text-center"><span id="step6MonedaLinea7"></span><span id="BonoLinea7">0.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button class="btn btn-gradient-success btn-rounded mb-4 mr-2" type="button" onclick="regresarapaso5()">
                                    {{__('Go back')}}
                                </button>
                                <button class="btn btn-gradient-warning btn-rounded mb-4 mr-2" type="button" onclick="extraeBonos()">
                                    {{__('Calculate')}}
                                </button>
                                <button class="btn btn-gradient-primary btn-rounded mb-4 mr-2" type="reset" onclick="limpiarSimulacion()">
                                    {{__('Delete all')}}
                                </button>
                                <button class="btn btn-gradient-success  btn-rounded mb-4" type="button" id="goFinalStep" onclick="final()">
                                    {{__('Continue')}}
                                </button>
                            </div>
                            <div class="col-md-12 text-right pr-4">
                                <span class="opcional pull-left" style="font-size: 15px !important;">* {{__('Benefit based on Influence Plan 3.0')}}</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row" id="finalStepBody">
                    <div id="finalStep" class="row pl-4 pr-4 text-black">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 layout-spacing mt-5 text-black text-center">
                            <img src="{{ asset('fproh/img/influencia30/SIMULADOR_0000_Grupo-20-copia.png') }}" width="100%">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 layout-spacing mt-5 text-black">
                            <h3 class="text-center">{{__('You can reach your goal that easy')}}</h3>
                            <h6 class="text-center">{{__('You can download your PDF simulator by any of the next channels in a customized and instant way.')}}</h6>
                            <div class="input-group mb-4 mt-5">
                                <input type="text" class=" form-control-rounded-left form-control" placeholder="{{__('E-mail')}}" aria-describedby="basic-addon2" id="mailSend">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary form-control-rounded-right" type="button" onclick="getPdf('correo')">{{__('Send simulation')}}</button>
                                </div>
                            </div>
                            <div class="input-group" hidden>
                                <input type="text" class=" form-control-rounded-left form-control" disabled placeholder="Número de WhatsApp" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary form-control-rounded-right " type="button" disabled>Guardar</button>
                                </div>
                            </div>
                            <span class="opcional pull-left" hidden>*Dato Opcional (<ins>+52</ins>5555555555)</span><br>
                            <span class="opcional pull-left" hidden>Solo se permite el envio del documento por correo</span>
                            
                            <center>
                                <button class="btn btn-gradient-success btn-rounded mt-5 mr-2" type="button" onclick="showSimulador()">
                                    {{__('Go back')}}
                                </button>
                                <a class="btn btn-gradient-success btn-rounded mt-5" href="javascript:void(0)" target="_new" onclick="getPdf('descarga')">
                                    {{__('Download simulation')}}
                                </a>
                            </center>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-black text-center">
                            <div class="alert alert-success br-50" role="alert" id="mailResultSuccess">
                                {{__('The email with your simulation has been sent ...')}}
                            </div>
                            <div class="alert alert-danger br-50" role="alert" id="mailResultError">
                                {{__('It has not been possible to send the mail, contact NIKKEN support ...')}}
                            </div>
                            <div class="alert alert-warning br-50" role="alert" id="mailResultFormat">
                                {{__('You must enter a valid email ...')}}
                            </div>
                            <div class="alert alert-dark  br-50 mb-4" role="alert" id="mailProccess">
                                {{__('We are sending your simulation to your email ...')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="chat">
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
                            <source src="{{ asset('fproh/img/influencia30/simulador_4.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl" id="step2Modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex;">
                <div class="swal2-header">
                    <ul class="swal2-progresssteps" style="display: flex;">
                        <li class="swal2-progresscircle swal2-activeprogressstep"></li>
                    </ul>
                    <img class="swal2-image" src="{{ asset('fproh/img/influencia30/minilogo.png') }}" alt="" style="display: flex;">
                    <h2 class="swal2-title" id="swal2-title">{{ __('Hello') }} <span id="step2Name"></span> {{ __('Welcome to NIKKEN') }}</h2>
                </div>
                <div class="swal2-content">
                    <div id="swal2-content" style="display: block;">
                        {{ __('Tell us: What’s your dream or immediate need?') }}
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/002-bienes-raices.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('House credit/rent') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/001-graduacion.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="2" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Studies') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/006-metodo-de-pago.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="3" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Financial commitments') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/007-maleta.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="4" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Travel') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/005-fuerza.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="5" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Investment') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/drama.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="6" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Leisure/Entertainment') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/009-hucha.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="7" onclick="getNeedVisitor(this.id)">{{ __('Savings') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/003-pago.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="8" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Credit card') }}</button>
                        </div>
                        <div class="col-lg-3 d-lg-inline-block"></div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/008-coche.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="9" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Car credit') }}</button>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <img src="{{ asset('fproh/img/influencia30/svg/estrella.svg') }}" width="40%" id="1" onclick="getNeedVisitor(this.id)" data-dismiss="modal"><br>
                            <button class="btn btn-gradient-info btn-rounded mb-4 mr-2 mt-3" id="10" onclick="getNeedVisitor(this.id)" data-dismiss="modal">{{ __('Others') }}</button>
                        </div>
                    </div>
                </div>
                <div class="swal2-actions" style="display: flex;">
                    <button type="button" class="btn-main-gradient swal2-styled" onclick="questionName()" data-dismiss="modal">{{ __('Go back') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl" id="step3Modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="overflow: auto !important">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex;">
                <div class="swal2-header">
                    <ul class="swal2-progresssteps" style="display: flex;">
                        <li class="swal2-progresscircle swal2-activeprogressstep"></li>
                    </ul>
                    <img class="swal2-image" src="{{ asset('fproh/img/influencia30/minilogo.png') }}" alt="" style="display: flex;">
                    <h2 class="swal2-title" id="swal2-title"><span id="step3Name"></span>, {{__('tu sueño a cumplir es pagar')}} <span id="step3Need"></span></h2>
                </div>
                <div class="swal2-content">
                    <div id="swal2-content" class="mb-2" style="display: block;">
                        {{__('Choose your country of origin')}}
                    </div>
                    <div class="row mt-4" style="justify-content: space-evenly">
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="PER" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0000_peru.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="PAN" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0001_panama.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="ECU" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0002_ecuador.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="GTM" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0003_guatemala.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="CRI" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0004_costarica.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="SLV" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0005_el-salvador.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="COL" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0006_colombia.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="MEX" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/pais_0000s_0007_mexico.png') }}" width="45%">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                            <a href="#step3Tittle" id="CHL" onclick="getInterval(this.id)">
                                <img src="{{ asset('fproh/img/influencia30/banderas/cpountries-Chile.png') }}" width="45%">
                            </a>
                        </div>
                    </div>
                    <div class="mb-2" id="step3Tittle">
                        <br> {{__('What is your need or your dream’s monthly value?')}}
                    </div>
                    <div class="row mt-2" id="step3options">
                        <div class="col-lg-4 text-center">
                            <button class="btn btn-outline-dark btn-rounded mb-4 mr-2" onclick="step4(1)" data-dismiss="modal">
                                {{__('From')}} <span id="intervalo1"></span>
                            </button>
                        </div>
                        <div class="col-lg-4 text-center">
                            <button class="btn btn-outline-dark btn-rounded mb-4 mr-2" onclick="step4(2)" data-dismiss="modal">
                                {{__('From')}} <span id="intervalo2"></span>
                            </button>
                        </div>
                        <div class="col-lg-4 text-center">
                            <button class="btn btn-outline-dark btn-rounded mb-4 mr-2" onclick="step4(3)" data-dismiss="modal">
                                {{__('From')}} <span id="intervalo3"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swal2-actions" style="display: flex;">
                    <button type="button" class="btn-main-gradient swal2-styled" onclick="regresarapso2()" data-dismiss="modal">{{ __('Go back') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-image: url() !important;">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex;">
                <div class="swal2-content">
                    <div class="row mt-4">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card dribbble br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="selectProd('PiMag Pi Water')" title="Click para seleccionar" data-dismiss="modal">
                                            <img src="{{ asset('fproh/img/influencia30/producto/piwatter-min.png') }}" width="45%" data-dismiss="modal" class="porductos">
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="selectProd('PiMag Pi Water')"  data-dismiss="modal">PiMag Pi Water</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card twitter br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="selectProd('PiMag Waterfall')" title="Click para seleccionar" data-dismiss="modal">
                                            <img src="{{ asset('fproh/img/influencia30/producto/Waterfall-min.png') }}" width="45%" data-dismiss="modal" class="porductos">
                                        </a>
                                    </div>
                                    <div class="card-content text-center">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="selectProd('PiMag Waterfall')" data-dismiss="modal">PiMag Waterfall</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card dribbble br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="selectProd('PiMag Aqua Pour D.')" title="Click para seleccionar" data-dismiss="modal">
                                            <img src="{{ asset('fproh/img/influencia30/producto/aquapour-min.png') }}" width="45%" data-dismiss="modal" class="porductos">
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="selectProd('PiMag Aqua Pour D.')" data-dismiss="modal">PiMag Aqua Pour D.</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4" id="optimizer">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card twitter br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="selectProd('PiMag Optimizer')" title="Click para seleccionar" data-dismiss="modal">
                                            <img src="{{ asset('fproh/img/influencia30/producto/optimizer-min.png') }}" width="45%" data-dismiss="modal" class="porductos">
                                        </a>
                                    </div>
                                    <div class="card-content text-center">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="selectProd('PiMag Optimizer')" data-dismiss="modal">PiMag Optimizer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4" id="wafOpt">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card dribbble br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="selectProd('PiMag Wf + Op')" title="Click para seleccionar" data-dismiss="modal">
                                            <img src="{{ asset('fproh/img/influencia30/producto/waterfall-optimizer-min.png') }}" width="45%" data-dismiss="modal"  class="porductos">
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="selectProd('PiMag Wf + Op')" data-dismiss="modal">PiMag Wf + Op</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4" id="piwOpt">
                            <div class="widget-content-area social-likes text-center p-0 br-4">
                                <div class="card twitter br-4">
                                    <div class="icon mb-4">
                                        <a href="javascript:void(0)" onclick="selectProd('PiMag Pw + OP')" title="Click para seleccionar" data-dismiss="modal">
                                            <img src="{{ asset('fproh/img/influencia30/producto/piwatter-optimizer-min.png') }}" width="45%" data-dismiss="modal" class="porductos">
                                        </a>
                                    </div>
                                    <div class="card-content text-center">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2" onclick="selectProd('PiMag Pw + OP')" data-dismiss="modal">PiMag Pw + OP</button>
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
@endsection

@section('scripts')
    <script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/classie.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/modalEffects.js') }}"></script>
    <script src="{{ asset('fproh/js/ui-kit/ui-tooltip-popovers.js') }}"></script>
    <script src="{{ asset('fproh/mainjs/influencia30/test.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166934990-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166934990-1');
    </script>

@endsection