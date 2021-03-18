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
   
  <style type="text/css">
    .visibility-hidden{
      visibility: hidden;
    }
  </style>
    
    
</head>
<body>

  <div class="main-container" id="container">
   
    <div id="content" class="main-content" style="margin-top: 50px !important;">
      <div class="container">
        <div class="row layout-spacing">
          <div class="col-xl-12 col-lg-12 col-md-12">
              @if(Session::has('notice'))
                              <div class="alert {{ Session::get('alertClass') }} alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>{{ Session::get('alertType') }}</strong> {{ Session::get('notice') }}
                              </div>
                          @endif
          </div>

          <div class="col-xl-4 col-lg-8 col-md-8">
            <div class="inbox-section">
              <div class="row">
                <form id="formschangemail" action="/update_data_email" method="post">
                   {{ csrf_field() }}
                  <div class="form-row mb-8 widget-content-area">
                    <div class="form-group col-md-12">
                      <label for="email">Nuevo Email:</label>
                      <input type="text" name="email" id="email" class="form-control mt-3 form-control-sm" >
                      <input type="hidden" name="sap_code" id="sap_code" class="form-control mt-3 form-control-sm" value="{{$sap_code}}" > 
                      <input type="hidden" name="nameRequest" id="nameRequest" class="form-control mt-3 form-control-sm" value="{{$nameRequest}}"> 
                    </div>
                      <input type="button" name="btnvalidate" id="btnvalidate" class="mt-4 mb-4 btn btn-button-7 btn-rounded" value="Buscar">
                      <input type="submit" name="btnupdate" id="btnupdate" class="mt-4 mb-4 btn btn-button-7 btn-rounded visibility-hidden" value="Actualizar">
                      <a href="{{ url("/update_email/" . $usuariobase)}}" class="mt-4 mb-4 btn btn-button-7 btn-rounded">Regresar</a>
                  </div>
                </form>
              </div>
            </div>  
          </div>
        </div>

        <div class="row layout-spacing">

          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="inbox-section">
              <div class="row">
                <table class="table table-hover">
                   <thead>
                      <tr align="center" style="background-color: #A3BE0D !important;">
                        <th colspan="3" style="color: black !important;">Datos Tienda Virtual</th>
                      </tr>
                      <tr>
                        <th style="color: black !important;">Código</th>
                        <th style="color: black !important;">Nombre</th>
                        <th style="color: black !important;">Email</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($user))

                      <tr>
                        <td>{{$user->sap_code}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                      </tr>
                    @else
                      
                    @endif
                  </tbody>
                </table>

                <table class="table table-hover">
                   <thead>
                      <tr align="center" style="background-color: #A3BE0D !important;">
                        <th colspan="3" style="color: black !important;">Datos Oficina Virtual</th>
                      </tr>
                    @if(count($contracts))
                      <tr>
                        <th style="color: black !important;">Código</th>
                        <th style="color: black !important;">Nombre</th>
                        <th style="color: black !important;">Email</th>
                      </tr>
                    @else
                      
                    @endif
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$controlCi->codigo}}</td>
                      <td>{{$controlCi->nombre}}</td>
                      <td>{{$controlCi->correo}}</td>
                    </tr>
                  </tbody>
                </table>

                 <table class="table table-hover">
                   <thead>
                      <tr align="center" style="background-color: #A3BE0D !important;">
                        <th colspan="3" style="color: black !important;">Datos Contrato</th>
                      </tr>

                      <tr>
                        <th style="color: black !important;">Código</th>
                        <th style="color: black !important;">Nombre</th>
                        <th style="color: black !important;">Email</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($contracts))
                      <tr>
                        <td>{{$contracts->code}}</td>
                        <td>{{$contracts->name}}</td>
                        <td>{{$contracts->email}}</td>
                      </tr>
                    @else
                      
                    @endif
                  </tbody>
                </table>
              </div>
            </div>  
          </div>

        </div>
      </div>
    </div>
  </div>
</body>


<script src="{{asset('js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/libs/messages_es.js')}}"></script>
<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> 
<script src="{{asset('js/changeEmail/change_email.js?v=1.1.0')}}"></script>
<!--  BEGIN NAVBAR  -->

