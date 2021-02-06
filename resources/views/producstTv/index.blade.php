<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Nikken LATAM | Productos TV </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/NikkenChallengeP/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/> 
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
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

            @if(Session::has('notice'))
                <div class="alert {{ Session::get('alertClass') }} alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ Session::get('alertType') }}</strong> {{ Session::get('notice') }}
                </div>
            @endif
                

                <div class="row">
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Actualización de Productos TV</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form id="formupdate" action="update-items" method="get">
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlSelect1">País:</label>
                                            <select class="form-control-rounded form-control" id="country_id" name="country_id">
                                                <option  value="">---Selecciona un país---</option>
                                                <option value="1">Colombia</option>
                                                <option value="2">México</option>
                                                <option value="3">Perú</option>
                                                <option value="4">Ecuador</option>
                                                <option value="5">Panáma</option>
                                                <option value="6">Guatemala</option>
                                                <option value="7">El Salvador</option>
                                                <option value="8">Costa Rica</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Estatus:</label>
                                            <select class="form-control-rounded form-control" id="status_id" name="status_id"> 
                                                <option value="">---Selecciona un estatus---</option>
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="inputAddress">Productos</label>
                                        <input type="text" class="form-control-rounded form-control" id="items"  name="items" placeholder="Los intems van  separados por comas (,)">
                                    </div>
                                    
                                  
                                  <button type="submit" class="btn btn-button-7 btn-rounded mb-4 mt-3">Aceptar</button>
                                </form>
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
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

   
    <!--  END CONTROL SIDEBAR  -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('../js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('../js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../js/libs/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('../js/libs/messages_es.js') }}"></script>
    <script src="{{ asset('../js/productsTv/productsTv.js?v=1.5.2') }}"></script>
    <script src="../plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="../assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->    
</body>
</html>