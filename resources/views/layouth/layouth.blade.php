<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Animate Slider-->
  <link href="plugins/notification/animate.css" rel="stylesheet" media="screen">
  <!--<link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">-->
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">

  <!--GRAFICAS TEMPLATE-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/NikkenChallengeP/assets/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <!--  <link href="{{ asset('assets/NikkenChallenge/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>-->
    <link href="{{ asset('assets/NikkenChallengeP/assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/> 
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('assets/NikkenChallengeP/plugins/charts/c3charts/c3.min.css') }}" rel="stylesheet" type="text/css"/>
     <!-- BEGIN PAGE LEVEL STYLES -->
  <!--END GRAFICAS TEMPLATE-->
   <!-- Confetti animation -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.1.0/dist/confetti.browser.min.js"></script>

<!--JQUEY BOTON DETALLES-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $('body').on('click', '#Genealogy', function(){
        // alert($(this).attr('id'))
         $("#modalGenealogy").modal({backdrop: 'static', keyboard: false});
        })
      });

      $(document).ready(function(){
        $('body').on('click', '#DetailKinya', function(){
        // alert($(this).attr('id'))
         $("#modalTable").modal({backdrop: 'static', keyboard: false});
        })
      });

       $(document).ready(function(){
        $('body').on('click', '#DetailKinyaPlus', function(){
        // alert($(this).attr('id'))
         $("#modalCart").modal({backdrop: 'static', keyboard: false});
        })
      });

       $(document).ready(function(){
        $('body').on('click', '#DetailKintai', function(){
        // alert($(this).attr('id'))
         $("#modalKintai").modal({backdrop: 'static', keyboard: false});
        })
      });
    </script>



    <style type="text/css">

    /* ----- ----- HEADER BB1F35----- ----- */


header {
  width: 100%;
  background: #D64000;
  background-size:cover;
  background-attachment: fixed;
  background-position: center 0;
} 

header .contenedor {
  position: relative;
  height: 50px;
} 





/*Slider*/
    .flex-container {
        position: relative;
        height: 400px;
        width: 100%;
        display: -webkit-flex; /* Safari */
        display: flex;
        overflow: hidden;
        @media screen and (max-width: 768px) {
            flex-direction: column;
        }
    }

    .flex-title {
        color: #f1f1f1;
        position: relative;
        font-size: 6vw;
        margin: auto;
        text-align: center;
        transform: rotate(90deg);
        top: 30%;
        right: 20%;
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease;
        @media screen and (max-width: 768px) {
            transform: rotate(0deg) !important;
        }
    }

    .flex-about {
        opacity: 0;
        color: #f1f1f1;
        position: relative;
        width: 70%;
        font-size: 2vw;
        padding: 5%;
        top: 20%;
        border: 2px solid #f1f1f1;
        border-radius: 10px;
        line-height: 1.3;
        margin: auto;
        text-align: left;
        transform: rotate(0deg);
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease;
        @media screen and (max-width: 768px) {
            padding: 0%;
            border: 0px solid #f1f1f1;
        }
    }

    .flex-slide {
        -webkit-flex: 1;  /* Safari 6.1+ */
        -ms-flex: 1;  /* IE 10 */    
        flex: 1;
        cursor: pointer;
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease;
        @media screen and (max-width: 768px) {
            overflow: auto;
            overflow-x: hidden;
        }
    }
    .flex-slide p {
        @media screen and (max-width: 768px) {
            font-size: 2em;
        }
    } 
    .flex-slide ul li {
        @media screen and (max-width: 768px) {
            font-size: 2em;
        }
    } 
    .flex-slide:hover {
        -webkit-flex-grow: 3;
        flex-grow: 3;
    }
    .home {  
        background: url(../img/slider/nikken-challenge-kin-ya.png);
        background-size: inherit;
        background-position: center left;
        background-attachment: inherit;
        
    }

    @keyframes aboutFlexSlide {
        0% {
            -webkit-flex-grow: 1;
            flex-grow: 1;
        }
        50% {
            -webkit-flex-grow: 3;
            flex-grow: 3;
        }
        100% {
            -webkit-flex-grow: 1;
            flex-grow: 1;
        }
    }

    .flex-title-home {
        
    }

    @keyframes homeFlextitle {
        0% {
            transform: rotate(90deg);
            top: 15%;
        }
        50% {
            transform: rotate(0deg);
            top: 15%;
        }
        100% {
            transform: rotate(90deg);
            top: 15%;
        }
    }

    .flex-about-home {
        opacity: 0;
        
    }

    @keyframes flexAboutHome {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    .about {  
        background: url(../img/slider/nikken-challenge-kin-ya-mas.png);
        background-size: inherit;
        background-position: center left;
        background-attachment: inherit;   
    }

    .contact {
            background: url(../img/slider/nikken-challenge-kin-tai.png);
        background-size: inherit;
        background-position: center left;
        background-attachment: inherit;
    }
    .work {
            background: url(../img/slider/nikken-challenge-kin-master.png);
        background-size: inherit;
        background-position: center left;
        background-attachment: inherit;
    }

    .flex-slide img{
        max-width: 85%;
        min-width: 90px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
        padding: 5px 2px;
        border-radius: 5px;
    }
/*Slider*/



  /* ----- ----- BODY ----- ----- */
  .container{
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom:4px dotted #FF8C00;
    overflow: hidden;
  }

  h3{
    text-transform: uppercase;
    font-weight:bold;
  }

  .btn{
    color: #fff;
  }

  .titulo {
    height: 100px;
    width: 220px;
  }

  .amount {
    font-weight:bold;
    font-size: 30px;
    color: #D64000;
  }

  .percent {
    font-weight:bold;
    text-align: center;
    font-size: 16px;
    color: #000;
  }

  .simulator{
     padding-top: 20px;
     color: #000;
     font-size: 18px; 
     font-weight:bold;
     font-family: 'Roboto', sans-serif;
  }

  .circle {
    height: 250px;
    width: 250px;
  }

  .notice {
    font-size: 10px;
    color: red;
  }

  .logo{
     height: 100px;
     width: 800px;
  }

  .logoKinmaster{
     height: 100px;
     width: 400px;
  }

  .containerKinmaster{
    padding-bottom: 50px;
    color: #000;
    /*border-bottom:4px solid #FF8C00;*/
  }

  .exponente{
    font-size: 30px;
    color: #D64000;
  }

  th{
    color: #000 !important;
  }

  td {
    color: #000;
    font-size: 11px !important;
  }



  /*--- UPDATE--- */
  .blockquote-reverse{
    font-weight:bold;
    text-align:right;
    color: #000;
    margin-right: 15px;
  }


  /* --- FOOTER --- */
  footer {
    background: #292929;
    color: #fff;
  }

  footer .copyright {
    text-align: center;
    font-size: 14px;
    padding: 15px 0;
  }

  .notas{
    text-align: justify;
    margin-left: 15px;
    font-weight:bold;
    color: #000;
  }

  .fuente{
      font-family: 'Roboto', sans-serif;
     
     }

  </style>

    <title>Nikken Challenge</title>    
  </head>
  <body>

<!--<header>
    <div class="contenedor">
    </div>
</header>-->

<header class="" id="home">
        <div class="container-fluid">
            <div class="flex-container">
                <div class="flex-slide home" data-toggle="modal" href='#modal-kin-ya'>
                    <div class="flex-title flex-title-home"><img src="{{ asset('../img/slider/king-ya.png') }}" alt=""></div>
                </div>
                <div class="flex-slide about" data-toggle="modal" href='#modal-kin-ya-mas' >
                    <div class="flex-title"><img src="{{ asset('../img/slider/king-ya-mas.png') }}" alt=""></div>
                </div>
                <div class="flex-slide contact" data-toggle="modal" href='#modal-kin-tai' >
                    <div class="flex-title"><img src="{{ asset('../img/slider/king-tai.png') }}" alt=""></div>
                </div>
                <div class="flex-slide work" data-toggle="modal" href='#modal-kin-master' >
                    <div class="flex-title"><img src="{{ asset('../img/slider/king-master.png') }}" class="img-responsive" alt=""></div>
                </div>
            </div>
        </div>
</header>








    @yield('logo-header')  
    @yield('Kinmaster')
    @yield('Aviso')
    @yield('Total')
    @yield('Content')
    @yield('Update')
    @yield('Boton')
    <!-- JQuery -->
 @yield('javascript')




 <footer>
    <p class="copyright">© 2020 Nikken Latinoamérica. Todos los derechos reservados.</p>
</footer>


  </body>
</html>