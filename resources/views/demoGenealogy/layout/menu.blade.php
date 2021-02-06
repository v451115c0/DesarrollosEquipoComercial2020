
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Genealogy </title>
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('assets/NikkenChallengeP/assets/img/nikken_logo.ico') }}">
   <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/> -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/NikkenChallengeP/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/classic-dashboard/style.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

<!-- EXCEL -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/NikkenChallengeP/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/NikkenChallengeP/plugins/table/datatable/custom_dt_html5.css') }}"> 
    <!-- END PAGE LEVEL CUSTOM STYLES -->

<!-- reporte table_tablesaw-->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <link href="{{ asset('assets/NikkenChallengeP/plugins/table/tablesaw/css/tablesaw.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/NikkenChallengeP/plugins/table/tablesaw/css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/NikkenChallengeP/plugins/table/tablesaw/js/tablesaw.js') }}"></script>
    <script src="{{ asset('assets/NikkenChallengeP/plugins/table/tablesaw/js/tablesaw-init.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

<!-- table scroll -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_scrollable.css">
    <!-- END PAGE LEVEL STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <style>
        .tablesaw-bar .new-control { line-height: 1.7 }
    </style>
    <!--  END CUSTOM STYLE FILE  -->

   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"> </script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   

</head>
<body>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
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
    <header class="header navbar fixed-top navbar-expand-sm" >
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>

      <!-- <ul class="navbar-nav flex-row">
            <li > 
                 <img style="width:200px;" src="https://www.nikken.com/VirtualOfficeNA/assets/images/general/logo-header.png">    
            </li>
        </ul> -->

        <ul class="navbar-nav flex-row ml-lg-auto">

            <li>
                <a href="genealogy" class="nav-link"> <img style="width:200px;" src="https://www.nikken.com/VirtualOfficeNA/assets/images/general/logo-header.png"></a>  
            </li>

            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
             <!--   <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>

                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div> -->
            </li>

        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

             <!--   <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    
                    <li class="nav-item theme-text">
                        <a href="index.php" class="nav-link"> <img style="width:200px;" src="https://www.nikken.com/VirtualOfficeNA/assets/images/general/logo-header.png"></a>
                    </li>
                </ul> -->


                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <li class="menu">
                        <a href="genealogy" class="dropdown-toggle"  >
                            <div class="">
                                <i class="flaticon-home-fill ml-3"></i>
                                <span>HOME</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="signup"  class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-notes-1"></i>
                                <span>Sign Up</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="order" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-document-3"></i>
                                <span>Order Entry</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="genealogyreport" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-line"></i>
                                <span>Genealogy</span>
                            </div>
                        </a>
                    </li>

                   <!-- <li class="menu">
                        <a href="upline"  class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-profits-2"></i>
                                <span>Upline View</span>
                            </div>
                        </a>
                    </li> -->


                </ul>
            </nav>

        </div>

        <!--  BEGIN CONTENT PART  -->
   <!--     <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">

                </div>
                
                <div class="row">

                    
                   
                </div>
            </div>  
        </div>  -->
        <!--  END CONTENT PART  -->


  
                   
                





        



  

  