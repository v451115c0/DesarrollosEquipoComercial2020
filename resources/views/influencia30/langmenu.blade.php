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
@endsection

@section('content')
<div class="row">
    <div class="form-group col-md-1"></div>
    <div class="col-xl-10 col-lg-10 col-sm-12 layout-spacing ">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <div class="row" style="justify-content: space-evenly;">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-2">
                        <img src="{{ asset('fproh/img/influencia30/influencia_logo.png') }}" class="col-xl-6 col-lg-10 col-md-12 col-sm-12">
                    </div>
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-sm-0 text-center text-black">
                        <h2>Seleccione su idioma / Select your language</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="widget-content-area social-likes text-center p-0 br-4">
                            <div class="card dribbble br-4">
                                <div class="icon">
                                    <a href="/influencia30H/es/{{ $associateid }}">
                                        <img src="{{ asset('fproh/img/influencia30/banderas/es.png') }}" width="60%">
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="/influencia30H/es/{{ $associateid }}">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2">Español</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="widget-content-area social-likes text-center p-0 br-4">
                            <div class="card dribbble br-4">
                                <div class="icon">
                                    <a href="/influencia30H/en/{{ $associateid }}">
                                        <img src="{{ asset('fproh/img/influencia30/banderas/en.png') }}" width="60%">
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="/influencia30H/en/{{ $associateid }}">
                                        <button class="btn btn-outline-primary btn-rounded mb-4 mr-2">English</button>
                                    </a>
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166934990-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166934990-1');
    </script>

@endsection