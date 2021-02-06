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
    <link href="{{ asset('assets/NikkenChallengeP/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
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
   
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/> 
    <!-- END GLOBAL MANDATORY STYLES -->
   

    
    
</head>
<body>

  <div class="main-container" id="container">
    <div id="content" class="main-content" style="margin-top: 50px !important;">
      <div class="container">
        @if(count($staff))
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
                            <p>En esta sección puedes actvar o desactivar códigos que se encuentren en nuestras bases, por favor tome en cuenta que los primeros accesos que se restringen es a Tineda Virtual, Tienda Virtual Personalizada y Oficina Virtual, posteriormente se desactiva en SAP.</p>
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
                <form id="formsearch">
                  <div class="form-row mb-8 widget-content-area">
                    <div class="form-group col-md-12">
                      <label for="code">Código Influencer/Miembro</label>
                      <input type="text" name="code" id="code" class="form-control mt-3 form-control-sm">
                    </div>
                    <input type="submit" name="time" id="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded" value="Validar">
                  </div>
                </form>
              </div>
            </div>  
          </div>
          <div class="col-xl-8 col-lg-8 col-md-8">
            <div class="inbox-section">
              <div class="row">
                <span>Estatus del Influencer / Miembro</span>

                <table class="table table-hover">
                  <thead>
                    <tr style="background-color: #00c851 !important;">
                      <th colspan="4" class="text-center" style="color: #ffff !important;">Datos Generales</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nombre:</td>
                      <td  class="text-left"><span id="name" style="background-color: #B3C5BB !important;"></span></td>
                      <td>Correo:</td>
                      <td class="text-left"><span id="email" style="background-color: #B3C5BB !important;"></span></td>
                    </tr>
                    <tr>
                      <td>Rango:</td>
                      <td  class="text-left"><span id="rank" style="background-color: #B3C5BB !important;"></span></td>
                      <td>Patrocinador:</td>
                      <td class="text-left"><span id="sponsor" style="background-color: #B3C5BB !important;"></span></td>
                    </tr>
                    <tr>
                      <td>Estatus:</td>
                      <td  class="text-left"><span id="status" style="background-color: #B3C5BB !important;"></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <form action="" method="POST" id="formEnabled">
                 {{ csrf_field() }}
                <input type="hidden" name="statusHidden" id="statusHidden">
                <input type="hidden" name="nameRequest" id="nameRequest" value="{{$staff->name}}">
                <input type="hidden" name="emailRequest" id="emailRequest" value="{{$staff->email}}">
                <input type="submit" name="btnStatus" id="btnStatus" class="mt-4 mb-4 btn btn-button-7 btn-rounded hidden" >
              </form>
              
            </div>  
          </div>
        </div>
        @else
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="inbox-section">
              <div class="row">
                  <span style="text-align: right !important;">Lo sentimos no cuentas con los permisos necesarios, para acceder a esta opción!</span>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
  


</body>


<script src="{{asset('js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/libs/messages_es.js')}}"></script>
 <script src="{{ asset('assets/NikkenChallengeP/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{asset('js/transaction/transaction.js')}}"></script>

<div class="modal fade "  role="dialog"  id="loading" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center" style="background-color: #00c851;">
        <h4 class="heading simulator" id="myModalLabel" style="font-size: 30px; color: white; ">Cargando...</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body" >
       <img src="{{ asset('img/loading-4.gif')}}" style="margin-left: -160px !important;">
       <span>Cargado...</span>
      </div>
     </div>
  </div>
</div>
   


    <!--  BEGIN NAVBAR  -->

