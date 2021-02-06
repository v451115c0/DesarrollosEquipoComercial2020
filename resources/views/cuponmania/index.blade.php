<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Nikken LATAM | Listado de ganadores CUPONAIR </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/> 
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{asset('plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/dropzone/basic.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/file-upload/file-upload-with-preview.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
     <style>
        .form-control {
            border: 1px solid #ccc;
            color: #888ea8;
            font-size: 15px;
        }
        .form-vertical .form-group .control-label { color: #3b3f5c; }
        label { color: #3b3f5c; margin-bottom: 14px; }
        .form-control::-webkit-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-ms-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-moz-placeholder { color: #888ea8; font-size: 15px; }
        .form-control:focus { border-color: #3862f5; }

        select.form-control {
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            vertical-align: middle;
            background: #fff url(assets/img/arrow-down.png) no-repeat right .75rem center;
            background-size: 13px 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
    <!--  BEGIN CUSTOM STYLE FILE  -->   
</head>
<body>
  

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
      
      
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 form-inline">
                                        <h4>Listado de ganadores CUPONAIR</h4>
                                        <a href="../cuponmania/{{$country}}/xls" class="btn btn-success btn-sm" style="margin-left: 1400px !important;">Exportar</a>
                                    </div>      
                                </div>
                            @if(count($response))
                                <table class="table table-hover">
                                  <thead style="background: #3bafda !important;">
                                    <tr>
                                      <th style="color: white !important">País</th>
                                      <th style="color: white !important">Cod. Asesor</th>
                                      <th style="color: white !important">Nombre</th>
                                      <th style="color: white !important"># Orden</th>
                                      <th style="color: white !important">Correo</th>
                                      <th style="color: white !important">Teléfono</th>
                                      <th style="color: white !important">Rango</th>
                                      <th style="color: white !important">Fecha ganado</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                  <!-- Mostrando registros-->
                                    @foreach($response as $item)
                                    <tr>
                                        <td>{{ $item->pais }}</td>
                                        <td>{{ $item->associateid }}</td>
                                        <td>{{ $item->AssociateName }}</td>
                                        <td>{{ $item->Orden }}</td>
                                        <td><a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $item->Email }}" target="_blank">{{ $item->Email }}</a> </td>
                                        <td>{{ $item->Telefono }}</td>
                                        <td>{{ $item->rango }}</td>
                                        <td>{{ $item->Fecha_Orden }}</td>
                                    </tr> 
                                    @endforeach             
                                     
                                   
                                  </tbody>
                                </table>
                            @else
                                <div class="alert alert-info">
                                   No se encontraron resultados con los filtros solicitados.
                                </div>
                            @endif
                             <!-- pagination -->
                            <div style="margin-left: 1350px;">
                              {{ $response->links() }}
                            </div>
                            <!-- /. pagination -->
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

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                   
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                  
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/libs/jquery.validate.min.js"></script>
    <script src="../assets/js/libs/messages_es.js"></script>
    <script src="{{asset('js/videosWebex/videosWebex.js?v=1.0.1')}}"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="plugins/dropzone/dropzone.min.js"></script>
    <script src="plugins/dropzone/custom-dropzone.js"></script>
    <script src="plugins/file-upload/file-upload-with-preview.js"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
     
    </script>
    <!-- END PAGE LEVEL PLUGINS -->    
</body>
</html>