<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CMS MyNikken | MyNikken</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('fpro/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('fpro/plugins/sweetalerts/promise-polyfill.js') }}"></script>
    <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/css/ui-kit/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_zero_config.css') }}">

    <link rel="stylesheet" href="{{ asset('fpro/css/dropify/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('fpro/css/dropify/dropify.css') }}">

    <link rel="stylesheet" href="{{ asset('fpro/maincss/cmsmynikken/cmsmynikken.css') }}">
</head>
<body class="default-sidebar">
    <div class="blur-bg"></div>
    <div class="blur-head"></div>

    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="javascript:void(0)" class=""> <img src="{{ asset('fpro/img/min-logo-nikken-white.png') }}" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>

        <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto" hidden>
            <li class="nav-item dropdown message-dropdown ml-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-mail-10"></span><span class="badge badge-primary">13</span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="messageDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-chat-line mr-3"></i><span>You have 13 new messages</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="media">
                            <div class="usr-img online mr-3">
                                
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Browse latest projects...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Kara Young</p>
                                    <p class="meta-time mb-0  align-self-center">1 min ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img mr-3">
                                
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Design, Development and...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Amy Diaz</p>
                                    <p class="meta-time mb-0  align-self-center">5 mins ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img online mr-3">
                                
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">We can ensure...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Shaun Park</p>
                                    <p class="meta-time mb-0  align-self-center">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="footer dropdown-item" href="javascript:void(0);">
                        <div class="btn btn-info mb-3 mr-2 btn-rounded"><i class="flaticon-arrow-right mr-3"></i> View more</div>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown ml-3">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bell-4"></span><span class="badge badge-success">15</span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-bell-13 mr-3"></i> <span>You have 15 new notifications</span>
                    </a>

                    <a class="dropdown-item text-center  p-1" href="javascript:void(0);">

                        <div class="notification-list ">
                            
                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                               
                                <h6 class="mb-1">5 new members joined today</h6>
                                <p><span class="meta-time">1 minute ago</span> . <span class="meta-member-notification">4 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <!--<li class="list-inline-item chat-online-usr">
                                        <img src="assets/img/90x90.jpg" alt="admin-profile" class="ml-0">
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                    </a>
                    <a class="footer dropdown-item text-center p-2">
                        <span class="mr-1">View All</span>
                        <div class="btn btn-gradient-warning rounded-circle"><i class="flaticon-arrow-right flaticon-circle-p"></i></div>
                    </a>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav flex-row ml-lg-auto" hidden>
            
            <li class="nav-item  d-lg-block d-none">
                <form class="form-inline" role="search">
                    <input type="text" class="form-control search-form-control" placeholder="Search...">
                </form>
            </li>

            <li class="nav-item dropdown app-dropdown  ml-lg-4 mr-lg-2 order-lg-0 order-2">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="appDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bulb"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="appDropdown">
                    <a class="dropdown-item" href="ecommerce_dashboard.html">
                        <i class="flaticon-commerce"></i><span>eCommerce</span>
                    </a>
                    <a class="dropdown-item" href="form_bootstrap_basic.html">
                        <i class="flaticon-edit-3"></i><span>Forms</span>
                    </a>
                    <a class="dropdown-item" href="table_basic.html">
                        <i class="flaticon-table"></i><span>Tables</span>
                    </a>
                    <a class="dropdown-item" href="ui_buttons.html">
                        <i class="flaticon-switch"></i><span>Buttons</span>
                    </a>
                    <a class="dropdown-item" href="ui_flaticon_icon.html">
                        <i class="flaticon-edit"></i><span>Font Icons</span>
                    </a>
                    <a class="dropdown-item" href="modules_widgets.html">
                        <i class="flaticon-computer-5"></i><span>Modules</span>
                    </a>
                    <a class="dropdown-item" href="map_google_basic.html">
                        <i class="flaticon-location"></i><span>Maps</span>
                    </a>
                    <a class="dropdown-item" href="apps_drag_n_drop_calendar.html">
                        <i class="flaticon-calendar-1"></i><span>Calendar</span>
                    </a>
                    <a class="dropdown-item" href="am_column_and_barchart.html">
                        <i class="flaticon-chart-3"></i><span>Charts</span>
                    </a>
                </div>
            </li>


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <a class="dropdown-item" href="user_profile.html">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    <a class="dropdown-item" href="apps_scheduler.html">
                        <i class="mr-1 flaticon-calendar-bold"></i> <span>My Schedule</span>
                    </a>
                    <a class="dropdown-item" href="apps_mailbox.html">
                        <i class="mr-1 flaticon-email-fill-1"></i> <span>My Inbox</span>
                    </a>
                    <a class="dropdown-item" href="user_lockscreen_1.html">
                        <i class="mr-1 flaticon-lock-2"></i> <span>Lock Screen</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="user_login_1.html">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown cs-toggle order-lg-0 order-3"> 
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="flaticon-menu-dot-fill d-lg-inline-block d-none"></span>
                    <span class="flaticon-dots d-lg-none"></span>
                </a>
            </li>
        </ul>
    </header>

    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <div class="sidebar-wrapper sidebar-theme">
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex" style="margin-top: 0 !important">
                    <li class="nav-item d-flex">
                        <a href="javascript:void(0)" class="navbar-brand">
                            <img src="fpro/img/min-logo-nikken-white.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="javascript:void(0)" class="nav-link"> NIKKEN </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                            <div class="">
                                <i class="flaticon-bell ml-3"></i>
                                <span>Notificaciones</span>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="dashboard" data-parent="#accordionExample" style="">
                            <li class="active">
                                <a href="{{ url('/cmsmynikken/addNotify') }}"> <i class="flaticon-bell"></i> Crear Notificación </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <i class="flaticon-view"></i> Ver notificaciones </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <!--<a href="#depuraciones" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
                        <a href="{{ url('/cmsmynikken/depuraciones') }}" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-delete"></i>
                                <span>Depuraciones</span>
                            </div>
                            <div hidden>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="depuraciones" data-parent="#accordionExample" hidden>
                            <li>
                                <a href="ecommerce_dashboard.html"> Dashboard </a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html"> Orders </a>
                            </li>
                            <li>
                                <a href="ecommerce_product.html"> Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_product_catalog.html"> Product Catalog </a>
                            </li>
                            <li>
                                <a href="#product-details" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-parent="#ecommerce"> Product Details <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="product-details">
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Product Details 1 </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_2.html"> Product Details 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_product.html"> Add/Edit Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_categories.html"> Add/Edit Categories </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_cart.html"> View Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_payments.html"> View Payments </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_customers.html"> View Customers </a>
                            </li>
                            <li>
                                <a href="ecommerce_checkout.html"> Checkout </a>
                            </li>
                            <li>
                                <a href="ecommerce_invoices.html"> Invoice </a>
                            </li>
                            <li>
                                <a href="ecommerce_shipments.html"> Shipments </a>
                            </li>
                            <li>
                                <a href="ecommerce_products_cart.html"> Products in Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_coupons.html"> Coupons </a>
                            </li>
                            <li>
                                <a href="ecommerce_low_stock.html"> Low Stock </a>
                            </li>
                            <li>
                                <a href="ecommerce_best_sellers.html"> Best Sellers </a>
                            </li>
                            <li>
                                <a href="ecommerce_refunds.html"> Refunds </a>
                            </li>
                            <li>
                                <a href="ecommerce_search_terms.html"> Search Terms </a>
                            </li>
                            <li>
                                <a href="ecommerce_newsletters.html"> Newsletters </a>
                            </li>
                            <li>
                                <a href="ecommerce_wizards.html"> Payment Wizard </a>
                            </li>
                            <li>
                                <a href="ecommerce_reviews.html"> Reviews </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

        <div id="content" class="main-content">
            <div class="container">
                @yield('container')
            </div>
        </div>
    </div>

    <footer class="footer-section theme-footer">
        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; {{ Date('Y') }} <a target="_blank" href="javascript:void(0)">MyNikken LATAM</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fpro/js/app.js') }}"></script>
    <script src="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('fpro/mainjs/cmsmynikken/cmsmynikken.js') }}"></script>
    <script src="{{ asset('fpro/js/dropify/dropify.js') }}"></script>
    <script src="{{ asset('fpro/js/custom.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
            $('.dropify').dropify();
        });

        function setlinkval(link){
            $("#linkFinal").val(link);
        }
    </script>
    @yield('scripts')
</body>
</html>
