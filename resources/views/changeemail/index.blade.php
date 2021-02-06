<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Transacciones TV - SAP | Nikken LATAM </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/apps/mailbox.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/ui-kit/buttons/creative/creative-icon-buttons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/ui-kit/buttons/creative/creative-gradients.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/ui-kit/buttons/creative/creative-fill.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/ui-kit/buttons/creative/creative-material.css') }}" rel="stylesheet" type="text/css" />
    <!-- Spinner Buttons -->
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/ui-kit/buttons/spinner/spinner.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/ui-kit/buttons/spinner/ladda.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('assets/NikkenChallenge/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>-->
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/> 
    <!-- END GLOBAL MANDATORY STYLES -->
   

    
    
</head>
<body>

  <div class="main-container" id="container">
    <div id="content" class="main-content" style="margin-top: 50px !important;">
      <div class="container">
        <div class="row layout-spacing">
          <div class="col-xl-12 col-lg-12 col-md-5 mb-md-50 mb-5">
            <div class="options">
              <div class="card mail-actions" style="">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="media mb-6">
                          <div class="media-body">
                            <h5 class="mt-0">Bienvenido {{$staff->name}} !</h5>
                            <p>En esta sección puedes actualizar el email de un Influencer ó  Miembro  en las siguientes plataformas Tienda Virtual, Oficina Virtual, MyNikken y App Nikken.</p>
                            @if(Session::has('notice'))
                              <div class="alert {{ Session::get('alertClass') }} alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>

                                  <strong>{{ Session::get('alertType') }}</strong> {{ Session::get('notice') }}
                              </div>
                          @endif
                          </div>

                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-8 col-md-8">
            <div class="inbox-section">
              <div class="row">
                <form id="formsearchdata" action="{{url('/search_data')}}" method="get">
                  <div class="form-row mb-8 widget-content-area">
                    <div class="form-group col-md-12">
                      <label for="code">Código Influencer/Miembro</label>
                      <input type="text" name="code" id="code" class="form-control mt-3 form-control-sm">
                      <input type="hidden" name="nameRequest" id="nameRequest" class="form-control mt-3 form-control-sm" value="{{$staff->name}}">
                    </div>
                    <input type="submit" name="time" id="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded" value="Buscar">
                  </div>
                </form>
              </div>
            </div>  
          </div>
        
        </div>
      </div>
    </div>
  </div>
</body>


<script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/js/libs/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/libs/messages_es.js')}}"></script>
<script src="{{ asset('assets/NikkenChallengeP/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{asset('js/transaction/transaction.js')}}"></script>
<!--  BEGIN NAVBAR  -->

