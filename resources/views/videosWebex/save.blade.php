<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>File Upload | Equation - Multipurpose Bootstrap Dashboard Template </title>
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
                        @if(Session::has('notice'))
                            <div class="alert {{ Session::get('alertClass') }} alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{{ Session::get('alertType') }}</strong> {{ Session::get('notice') }}
                            </div>
                        @endif

                        <div class="statbox widget box box-shadow">


                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        @if($videowebex->id)
                                            <h4>Editar Video</h4>
                                        @else
                                            <h4>Cargar Video</h4>
                                        @endif
                                    </div>      
                                </div>
                                    @if($videowebex->id)
                                        <form id="formLoadingVideo" action="../update-file/{{$videowebex->id}}" enctype="multipart/form-data"  method="GET">
                                    @else
                                        <form id="formLoadingVideo" action="aws-file" enctype="multipart/form-data"  method="POST">
                                    @endif
                                
                                    {{ csrf_field() }}
                                   <div class="form-row mb-4 widget-content-area">
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlSelect1">País:</label>
                                            <select class="form-control-rounded form-control" id="country_id" name="country_id"  form="formLoadingVideo">
                                               
                                                 @foreach($countrys as $country => $i) 
                                                    @if($videowebex->country == $i)
                                                        <option value="{{$i}}" selected="true">{{$country}}</option>
                                                    @else
                                                        <option value="{{$i}}">{{$country}}</option>
                                                    @endif
                                                   
                                                 @endforeach
                                                                
                                                          </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Título:</label>
                                            <input type="text" class="form-control-rounded form-control" id="title"  name="title" form="formLoadingVideo" value="{{$videowebex->title}}">
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label for="inputEmail4">Estatus:</label>
                                            <select name="status_id" id="status_id" class="form-control-rounded form-control">
                                                <option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>
                                                <option selected="true" value="{{$videowebex->status}}">{{$videowebex->status}}</option>
                                            </select>
                                           
                                        </div>
                                       
                                    </div>
                                    @if(!$videowebex->id)
                                     <div class="widget-content widget-content-area">
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file" >
                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" id="videowebex" name="videowebex" accept="video/*"   form="formLoadingVideo">
 <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>

                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                        </div>
                                     @endif
                                    @if($videowebex->id)
                                        <button type="submit" class="btn btn-button-7 btn-rounded mb-4 mt-3" >Actualizar</button>
                                    @else
                                        <button type="submit" class="btn btn-button-7 btn-rounded mb-4 mt-3" >Publicar</button>
                                    @endif
                                    
                            </div>
                        </form>
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
    <script src="{{asset('assets/NikkenChallengeP/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{asset('assets/NikkenChallengeP/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{asset('../js/libs/bootstrap.min.js') }}"></script>
    <script src="{{asset('../js/libs/jquery.validate.min.js') }}"></script>
    <script src="{{asset('../js/libs/messages_es.js') }}"></script>
    <script src="{{asset('js/videosWebex/videosWebex.js?v=1.0.1')}}"></script>
    <script src="{{asset('plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{asset('plugins/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('plugins/dropzone/custom-dropzone.js')}}"></script>
    <script src="{{asset('plugins/file-upload/file-upload-with-preview.js')}}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
     
    </script>
    <!-- END PAGE LEVEL PLUGINS -->    
</body>
</html>