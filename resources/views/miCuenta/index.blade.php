





<!DOCTYPE html>

<!-- Altron - Multi-Purpose Landing Page Template design by DSAThemes (http://www.dsathemes.com) -->

<!--[if lt IE 7 ]>

<html class="ie ie6" lang="en"> <![endif]-->

<!--[if IE 7 ]>

<html class="ie ie7" lang="en"> <![endif]-->

<!--[if IE 8 ]>

<html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->

<html lang="es"> <!--<![endif]-->



<head>



    <meta http-equiv="Expires" content="0">

    <meta http-equiv="Last-Modified" content="0">

    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

    <meta http-equiv="Pragma" content="no-cache">



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="NIKKEN Latinoamérica">



    <!-- No indexación -->

    <meta name="robots" content="noindex">

    <meta name="googlebot" content="noindex">

    <meta http-equiv="cache-control" content="no-cache"/>

    <meta http-equiv="expires" content="300"/>

    <!-- No indexación -->



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- SITE TITLE -->

    <title>Mi Oficina Virtual</title>






    <!-- LIBRERIAS NATIVAS

    ============================================= -->

    <!-- BOOTSTRAP CSS -->

    <link href="../oficinavirtual/css/bootstrap.min.css?1.0.0" rel="stylesheet">



    <!-- FONT ICONS -->

    <link href="../oficinavirtual/css/themify-icons.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.css" rel="stylesheet">



    <!-- GOOGLE FONTS -->

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>



    <!-- PLUGINS STYLESHEET -->

    <link href="../oficinavirtual/css/owl.carousel.css" rel="stylesheet">

    <link href="../oficinavirtual/css/flexslider.css" rel="stylesheet">

    <link href="../oficinavirtual/css/prettyPhoto.css" rel="stylesheet">



    <!-- ON SCROLL ANIMATION -->

    <link href="../oficinavirtual/css/animate.min.css" rel="stylesheet">



    <!-- TEMPLATE CSS -->

    <link href="../oficinavirtual/css/base.css" rel="stylesheet">

    <link href="../oficinavirtual/css/style.css" rel="stylesheet">



    <!-- RESPONSIVE CSS -->

    <link href="../oficinavirtual/css/responsive.css" rel="stylesheet">

    <!-- ============================================= -->



    <!-- LIBRERIAS ADICIONALES

    ============================================= -->

    <!-- CSS -->

    <link href="../oficinavirtual/assets/css/main.css?10.0.0" rel="stylesheet">



    <!-- CARRUSEL VIDEOS -->

    <link href="../oficinavirtual/assets/css/carrusel-video.css" rel="stylesheet" media="all">



    <!-- ICONOS PERSONALIADOS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- DATATABLE -->

    <link rel="stylesheet" href="../oficinavirtual/plugins/datatables/dataTables.bootstrap.css">



    <!-- FORMATO DE FECHA -->

    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"

          rel="stylesheet">

    <!-- ============================================= -->



    <!-- Upload -->

    <link href="../oficinavirtual/plugins/upload/src/jquery.fileuploader.css" media="all" rel="stylesheet">

    <link href="../oficinavirtual/plugins/upload/examples/drag-drop/css/jquery.fileuploader-theme-dragdrop.css" media="all"

          rel="stylesheet">

    
    <link rel="stylesheet" href="//vjs.zencdn.net/7.6.6/video-js.min.css"/>
    <link rel='stylesheet' href='../oficinavirtual/oficinavirtual/plugins/slick/slick.css'>

    <!--Start of Zendesk Chat Script-->

    <script type="text/javascript">

        window.$zopim || (function (d, s) {

            var z = $zopim = function (c) {

                z._.push(c)

            }, $ = z.s =

                d.createElement(s), e = d.getElementsByTagName(s)[0];

            z.set = function (o) {

                z.set._.push(o)

            };

            z._ = [];

            z.set._ = [];

            $.async = !0;

            $.setAttribute("charset", "utf-8");

            $.src = "https://v2.zopim.com/?4zecWax83gctV361AWsdYBs6oAkS1Lz4";

            z.t = +new Date;

            $.type = "text/javascript";

            e.parentNode.insertBefore($, e)

        })(document, "script");

    </script>

    <!--End of Zendesk Chat Script-->



</head>



<body style="padding-right: 0 !important;">



<!-- MODAL -->

<!-- Modal para mostrar LOGIN -->

<div class="modal fade" id="modal-login">

	<div class="modal-dialog modal-sm">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				<h4 class="modal-title text-center">Iniciar sesión</h4>

			</div>

			<form action="#" method="POST" accept-charset="utf-8" autocomplete="off">

				<div class="modal-body text-center">

					<img src="../oficinavirtual/assets/images/general/logo-header-black.png" class="img-responsive center-block" alt="NIKKEN El Salvador">

					<br/><br/>

					<p class="text-center">A continuación ingresa tu usuario y contraseña</p>

					<div class="alert-form"></div>

					<hr>

					<div class="form-group">

						<label class="text-center">Código de Asesor</label>

						<input type="text" class="form-control text-center input-code" onkeypress="return JustNumbers(event);" placeholder="Campo Obligatorio">

					</div>

					<div class="form-group">

						<label class="text-center">Contraseña</label>

						<input type="password" class="form-control text-center input-password" placeholder="Campo Obligatorio">

					</div>

				</div>

				<div class="modal-footer">

					<button type="submit" class="btn btn-success btn-block submit-button" id="btn-process-login">Iniciar sesión</button>

                    <br/>

                    <div class="form-group text-center">

                        <a href="https://mitiendanikken.com/password/email" target="_blank" style="color: #99BE10;"><u><strong>Recuperar contraseña</strong></u></a>

                    </div>

	                <p class="text-center"><small>Accedes a la Oficina Virtual si eres Asesor de Bienestar Independiente NIKKEN, si aun no lo eres, <strong>INSCRÍBETE</strong> aquí</small></p>

					<a class="btn btn-block m-top-20 btn-tra" href="https://nikkenlatam.com/incorporacion/" target="_blank">INSCRIBIRME</a>

				</div>

			</form>

		</div>

	</div>

</div>

<!-- Modal para mostrar LOGIN -->

<!--Modal Cuponmania -->
    <div class="modal fade" id="modal-cuponamania" style="margin-top: 10%;">
       <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4  class="modal-title text-center">AVISO</h4>
                    
                </div>
                <div class="modal-body" style="background: white !important;">

                    <div>
                                                    <img src="https://nikkenlatam.com/nutricion/assets/img/cupon_lat.jpg" style="width: auto;" class="img-responsive center-block" alt="Programa de nutrición">
			


                    </div>

                </div>
            </div>
        </div> 
    </div>
<!--Modal Cuponmania -->




<!-- Modal para ver los videos de youtube -->

<div id="modal-video" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header text-center">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                <strong>NIKKEN</strong>

            </div>

            <div class="modal-body" style="background: black;">

                <div class="embed-responsive embed-responsive-16by9">

                    <div id="detail-video"></div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Modal para ver los videos de youtube -->



<!-- Modal para ver la información de los country packs -->

<div class="modal fade" id="modal-detail-country-packs">

	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" id="CloseModal" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				<h4 class="modal-title text-center">Detalle del Country Pack</h4>

			</div>

			<div class="modal-body">

				<div id="detail-country-pack"></div>

			</div>

		</div>

	</div>

</div>

<!-- Modal para ver la información de los country packs -->



<!-- Modal para ver las opciones de herramientas de negocio -->

<div id="modal-business-tools" class="modal modal-message modal-success fade" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <i class="glyphicon glyphicon-bookmark"></i>

            </div>

            <div class="modal-title">Ir a</div>

            <div class="modal-body">

            	<hr>

                <div class="form-group hover-button-office" id="button-challenge" style="cursor: pointer;" data-dismiss="modal" onclick="Information_NC('NDc0NTAz'); tracking_options('Herramientas de negocio - Plan de Influencia', '474503')" >

                    <img src="../plan-influencia-color.png" alt="Plan De Influencia" style="width: 190px !important; margin-bottom: 10px;">
                    <br/>

                    <strong>Plan de influencia</strong>

                </div>

                <hr>

                
                        <div class="form-group hover-button-office" id="button-my-businesss" style="cursor: pointer;" onclick="My_business('474503'); tracking_options('Herramientas de negocio - Mi Negocio', '474503')">

                            <i class="fa fa-briefcase fa-3x" aria-hidden="true"></i><br/>

                            <strong>Mi Negocio</strong>

                        </div>

                        
                <hr>       
                <a href="https://services.nikken.com.mx/viajeros/NDc0NTAz" target="_blank" onclick="tracking_options('Herramientas de negocio - Retos especiales', '474503');">
                    <div class="form-group hover-button-office">
                        <img src="https://nikkenlatam.com/oficina-virtual/assets/images/general/retos-especiales.png"><br/>
                        <strong>Retos especiales</strong>
                    </div>
                </a>

                
                
                

                <hr>

                <div class="form-group hover-button-office" id="button-data-sheet" style="cursor: pointer;" onclick="Data_sheet(); tracking_options('Herramientas de negocio - Fichas técnicas', '474503')">

                    <i class="fa fa-wrench fa-3x" aria-hidden="true"></i><br/>

                    <strong>Fichas técnicas</strong>

                </div>

                <hr>

                <div class="form-group hover-button-office" id="button-strategies" style="cursor: pointer;" onclick="Strategies(); tracking_options('Herramientas de negocio - Estrategias', '474503')">

                    <i class="fa fa-lightbulb-o fa-3x" aria-hidden="true"></i><br/>

                    <strong>Estrategias</strong>

                </div>

                <hr>

                <div class="form-group hover-button-office" id="button-bank-images" style="cursor: pointer;" onclick="Bank_images(); tracking_options('Herramientas de negocio - Banco', '474503')">

                    <i class="fa fa-picture-o fa-3x" aria-hidden="true"></i><br/>

                    <strong>Banco</strong>

                </div>

                <hr>

                <div class="form-group hover-button-office" id="button-tutorials" style="cursor: pointer;" onclick="Tutorials(); tracking_options('Herramientas de negocio - Tutoriales', '474503')">

                    <i class="fa fa-video fa-3x" aria-hidden="true"></i><br/>

                    <strong>Tutoriales</strong>

                </div>

                
                    <hr>

                    <div class="form-group hover-button-office" id="button-process" style="cursor: pointer;" onclick="Process(); tracking_options('Herramientas de negocio - Procedimientos', '474503')">

                        <i class="fa fa-check-square-o fa-3x" aria-hidden="true"></i><br/>

                        <strong>Procedimientos</strong>

                    </div>

                    




                














            	<hr>
                <div class="form-group hover-button-office" id="button-webex-videos" style="cursor: pointer;" onclick="Videos_zoom(); tracking_options('Herramientas de negocio - Videos Zoom', '474503')">
                    <img src="https://nikkenlatam.com/Webex.jpg"><br/>
                    <strong>Videos Zoom</strong>
                </div>
                <hr>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal">Cerrar</button>

            </div>

        </div>

    </div>

</div>

<!-- Modal para ver las opciones de consultas -->



<!-- Modal para ver las opciones de herramientas de negocio -->

<div id="modal-search" class="modal modal-message modal-success fade" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <i class="glyphicon glyphicon-bookmark"></i>

            </div>

            <div class="modal-title">Ir a</div>

            <div class="modal-body">

                <hr>

                <!--<div class="form-group hover-button-office" id="button-awards" style="cursor: pointer;" onclick="Awards(); tracking_options('Consultas- Reconocimientos', '474503')">

                    <i class="fa fa-star-o fa-3x" aria-hidden="true"></i><br/>

                    <strong>Reconocimientos</strong>

                </div>

                <hr>-->

                <div class="form-group hover-button-office" id="button-not-availiable" style="cursor: pointer;" onclick="Not_availiable('2'); tracking_options('Consultas- Disponibilidad de producto', '474503')">

                    <i class="fa fa-check fa-3x" aria-hidden="true"></i><br/>

                    <strong>Disponibilidad de producto</strong>

                </div>

                
                <hr>

                <a href="#" onclick="Others(); tracking_options('Consultas- Otros', '474503')">

                    <div class="form-group hover-button-office" id="button-others" style="cursor: pointer;">

                        <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i><br/>

                        <strong>Otros</strong>

                    </div>

                </a>

                <hr>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal">Cerrar</button>

            </div>

        </div>

    </div>

</div>

<!-- Modal para ver las opciones de consultas -->



<!-- Modal para ver los eventos -->

<div id="modal-events" class="modal modal-message modal-success fade" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <i class="glyphicon glyphicon-bookmark"></i>

            </div>

            <div class="modal-title">Ir a</div>

            <div class="modal-body">

                <hr>

                <div class="form-group hover-button-office" id="button-calendar" style="cursor: pointer;" onclick="Calendar(); tracking_options('Agenda NIKKEN - Calendario de eventos', '474503')">

                    <i class="fa fa-calendar fa-3x" aria-hidden="true"></i><br/>

                    <strong>Calendario de eventos</strong>

                </div>

                <hr>

                <div class="form-group hover-button-office" id="button-support-material" style="cursor: pointer;" onclick="Support_material(); tracking_options('Agenda NIKKEN - Material de formación', '474503')">

                    <i class="fa fa-university fa-3x" aria-hidden="true"></i><br/>

                    <strong>Material de formación</strong>

                </div>

                <hr>

                <div class="form-group hover-button-office" id="button-bank-images-un" style="cursor: pointer;" onclick="Bank_images_un(); tracking_options('Agenda NIKKEN - Galería', '474503')">

                    <i class="fa fa-picture-o fa-3x" aria-hidden="true"></i><br/>

                    <strong>Galería</strong>

                </div>

                <hr>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal">Cerrar</button>

            </div>

        </div>

    </div>

</div>

<!-- Modal para ver los eventos -->



<!-- Modal para ver las opciones de comunicacion -->

<div id="modal-comunication" class="modal modal-message modal-success fade" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <i class="glyphicon glyphicon-bookmark"></i>

            </div>

            <div class="modal-title">Ir a</div>

            <div class="modal-body">

                <hr>

                <div class="form-group hover-button-office">
                    <a href="https://www.facebook.com/NIKKENLAT" target="_blank" onclick="tracking_options('Comunicación - Facebook', '474503')"><i class="fa fa-facebook fa-3x" aria-hidden="true" style="color: #365089"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com/nikken.latinoamerica.7" target="_blank" onclick="tracking_options('Comunicación - Facebook Asesores', '474503')"><i class="fa fa-facebook-square fa-3x" data-toggle="tooltip" data-placement="top" title="Facebook de Asesores" aria-hidden="true" style="color: #365089"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com/nikkenlatam/" target="_blank" onclick="tracking_options('Comunicación - Instagram', '474503')"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #8944CC"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.youtube.com/user/nikkenlatinoamerica/videos?flow=grid&view=1" target="_blank" onclick="tracking_options('Comunicación - YouTube', '474503')"><i class="fa fa-youtube fa-3x" aria-hidden="true" style="color: #D41D1F;"></i></a>

                    <hr>

                    <a href="https://blog.mitiendanikken.com/" target="_blank" onclick="tracking_options('Comunicación - Blog', '474503')"><img src="../assets/images/general/logo_blog.png" alt="NIKKEN"></a>                    
                </div>

                <hr>

                <!--<a href="http://carteronikken.com" target="_blank">

                    <div class="form-group hover-button-office">

                        <img src="../assets/images/general/logo_flyer.png" alt="NIKKEN">

                    </div>

                </a>-->

                <hr>

                <a href="https://nikkenlatam.com/enews/" target="_blank" onclick="tracking_options('Comunicación - Enews', '474503')">

                    <div class="form-group hover-button-office">

                        <i class="fa fa-newspaper-o fa-3x" aria-hidden="true"></i><br/>

                        <strong>E-news</strong>

                    </div>

                </a>

                <hr>

                <div class="form-group hover-button-office" data-dismiss="modal" style="cursor: pointer;" onclick="Comunications(); tracking_options('Comunicación - Comunicaciones', '474503')">
                    <i class="fa fa-bullhorn fa-3x" aria-hidden="true"></i><br/>

                    <strong>Comunicados</strong>

                </div>

                <hr>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal">Cerrar</button>

            </div>

        </div>

    </div>

</div>

<!-- Modal para ver las opciones de comunicacion -->



<!-- RETOS DE NEGOCIO -->

    <!-- Modal para inscripción de Retos para incentivos de negocio Reto 21 de Oro -->

    <div class="modal fade" id="modal-business-incentives-gold">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title text-center">Inscripción Reto 21 de Oro</h4>

                </div>

                <form action="#" id="form-gold-business-incentives" method="POST" accept-charset="utf-8" autocomplete="off">

                    <div class="modal-body text-center">

                        <p class="text-center">A continuación ingresa el código del Asesor de Bienestar que vas a formar</p>

                        <div class="alert-form"></div>

                        <hr>

                        <div class="form-group">

                            <label class="text-center">Código de Asesor</label>

                            <input type="text" class="form-control text-center input-code" onkeypress="return JustNumbers(event);" placeholder="Campo Obligatorio">

                        </div>

                        <hr>

                        <div class="form-group text-left">

                            <p><small>Ten en cuenta lo siguiente:</small>

                                <ol>

                                    <li><small>Los Asesores de Bienestar que se registren al Reto 21 de Oro aplicarán automáticamente para el Reto Ser Pro.</small></li>

                                </ol>

                            </p>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success btn-block submit-button" id="btn-process-gold-business-incentives">Formar asesor</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Modal para inscripción de Retos para incentivos de negocio Reto 21 de Oro -->



    <!-- Modal para inscripción de Retos para incentivos de negocio Reto Ser Pro -->

    <div class="modal fade" id="modal-business-incentives-pro">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title text-center">Inscripción Reto Ser Pro</h4>

                </div>

                <form action="#" id="form-pro-business-incentives" method="POST" accept-charset="utf-8" autocomplete="off">
                    <div class="modal-body text-center">

                        <p class="text-center">A continuación ingresa el código del Asesor de Bienestar que vas a formar</p>

                        <div class="alert-form"></div>

                        <hr>

                        <div class="form-group">

                            <label class="text-center">Código de Asesor</label>

                            <input type="text" class="form-control text-center input-code" onkeypress="return JustNumbers(event);" placeholder="Campo Obligatorio" id="CardCode_Pro">

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success btn-block submit-button" id="btn-process-pro-business-incentives">Formar asesor</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Modal para inscripción de Retos para incentivos de negocio Reto Ser Pro -->

<!-- RETOS DE NEGOCIO -->



<!-- CLIENTE ÉLITE -->

    <!-- Modal para agregar cambios de repuestos -->

    <div class="modal fade" id="modal-invoice-products-ce">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title text-center">Consulta de factura</h4>

                </div>

                <div class="modal-body text-center">

                    

                    <div class="row">

                        <div class="col-sm-4">

                            <form action="" method="POST" id="search-invoice-products-ce">

                                <div class="form-group">

                                    <p>A continuación ingresa el número de factura para generar la importación de productos</p>

                                    <div class="alert-form"></div>

                                </div>

                                <div class="form-group">

                                    <label>Número de factura</label>

                                    <input type="text" class="form-control text-center input-invoice" onkeypress="return JustNumbers(event);" id="input-invoice-elite-customer" placeholder="Campo Obligatorio">

                                </div>

                                <div class="form-group">

                                    <input type="hidden" class="input-country" value="2">

                                    <button type="submit" class="btn btn-success btn-block submit-button" id="btn-process-search-invoice-ce"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;Buscar</button>

                                </div>

                                <hr>

                                <p>Si no recuerdas el número de factura a continuación podrás visualizar <strong>las facturas generadas en el último mes</strong>.</p>

                            </form>

                        </div>

                        <div class="col-sm-8">

                            <div id="invoices-elite-customer"></div>

                        </div>

                    </div>

                    

                </div>

            </div>

        </div>

    </div>

    <!-- Modal para agregar cambios de repuestos -->



    <!-- Mostrar opciones para comprar repuestos Cliente Élite -->

    <div class="modal fade" id="modal-shopping-ce">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header text-center" style="background: #99BE10;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title text-center" style="color: white;">Renovación del repuesto</h4>

                </div>

                <div class="modal-body text-center">

                    <div id="shopping-elite-customer"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- Mostrar opciones para comprar repuestos Cliente Élite -->



    <!-- Mostrar opciones para cambiar fecha de cambio de repuestos -->

    <div class="modal fade" id="modal-change-frecuency-ce">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-header text-center" style="background: #99BE10;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title text-center" style="color: white;">Renovación del repuesto</h4>

                </div>

                <div class="modal-body text-center">

                    <div id="change-frecuency-product-elite-customer"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- Mostrar opciones para cambiar fecha de cambio de repuestos -->



    <!-- Mostrar opciones para comprar repuestos Cliente Élite -->

    <div class="modal fade" id="modal-renew-all-ce">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header text-center" style="background: #99BE10;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title text-center" style="color: white;">Renovación de repuestos</h4>

                </div>

                <div class="modal-body text-center">

                    <div id="renew-all-elite-customer"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- Mostrar opciones para comprar repuestos Cliente Élite -->

<!-- CLIENTE ÉLITE -->

<!--Modal Nikken challenge-->

<div id="modal-nikken-challenge" class="modal modal-message modal-success fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-bookmark"></i>
            </div>
            <div class="modal-title">Ir a</div>
            <div class="modal-body">
                <hr>
                <div class="form-group hover-button-office" id="button-information-nc" style="cursor: pointer;" onclick="Information_NC('NDc0NTAz'); tracking_options('Plan de Influencia - Herramientas', '474503')">
                    <img src="https://nikkenlatam.com/nikken-challenge/images/001-boton-de-informacion.png" class="img-responsive hover-button-office" alt="Comunicación" style="width: 82px !important; margin-bottom: 10px;">
                    <br/>
                    <strong>Herramientas</strong>
                </div>

                <hr>
                <div class="form-group hover-button-office" data-toggle="modal" data-dismiss="modal" href='#modal-nikken-challenge-sub-menu' style="cursor: pointer;">
                    <img src="https://nikkenlatam.com/nikken-challenge/images/SIMULADOR_icon.png" class="img-responsive hover-button-office" alt="Comunicación" style="width: 82px !important; margin-bottom: 10px;">
                    <br/>
                    <strong>Plataformas de seguimiento</strong>
                </div>

                <hr>
                <div class="form-group hover-button-office" id="button-pdf-nc" style="cursor: pointer;" onclick="pdf_periodo('NDc0NTAz');  tracking_options('Plan de Influencia - Estado de Cuenta', '474503')"> 
                    <i class="fa fa-file-pdf fa-3x" aria-hidden="true" style="margin-bottom: 10px;"></i>
                    <br/>
                    <strong>Estado de cuenta</strong>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div id="modal-nikken-challenge-sub-menu" class="modal modal-message modal-success fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-bookmark"></i>
            </div>
            <div class="modal-title">Ir a</div>
            <div class="modal-body">
                <hr>
                <div class="form-group hover-button-office" id="button-dashboard-nc" style="cursor: pointer;" onclick="Dasboard_NC('NDc0NTAz');  tracking_options('Plan de Influencia - Plataforma de seguimiento - Controlador', '474503')">
                    <img src="https://nikkenlatam.com/nikken-challenge/images/SIMULADOR_icon.png" class="img-responsive hover-button-office" alt="Comunicación" style="width: 82px !important; margin-bottom: 10px;">
                    <br/>
                    <strong>Controlador</strong>
                </div>

                <hr>
                <div class="form-group hover-button-office" id="button-information-nc" style="cursor: pointer;" onclick="simulator_nc();  tracking_options('Plan de Influencia - Plataforma de seguimiento - Simulador de ganancias - NIKKEN Challenge', '474503')">
                    <img src="https://nikkenlatam.com/nikken-challenge/images/SIMULADOR_icon.png" class="img-responsive hover-button-office" alt="Comunicación" style="width: 82px !important; margin-bottom: 10px;">
                    <br/>
                    <strong>Simulador de Ganancias - NIKKEN Challenge</strong>
                </div>

                <hr>
                <div class="form-group hover-button-office" style="cursor: pointer;" onclick="simulator_pi('NDc0NTAz');  tracking_options('Plan de Influencia - Plataforma de seguimiento - Simulador de ganancias - Plan de Influencia', '474503')">
                    <img src="https://nikkenlatam.com/nikken-challenge/images/SIMULADOR_icon.png" class="img-responsive hover-button-office" alt="Comunicación" style="width: 82px !important; margin-bottom: 10px;">
                    <br/>
                    <strong>Simulador de Ganancias - Plan de Influencia</strong>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal" data-toggle="modal" href='#modal-nikken-challenge'>Regresar</button>
            </div>
        </div>
    </div>
</div>


<!--Modal Nikken Challenge-->



<!-- CAMPAÑA DE REPUESTOS -->

    <!-- Modal para visualizar los productos de la factura -->

    <div class="modal fade" id="modal-replacement-campaigns">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-body">

                    <div id="view-replacement-campaign"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal para visualizar los productos de la factura -->

<!-- CAMPAÑA DE REPUESTOS -->



<!-- GARANTIA DE PRODUCTOS -->

    <!-- Modal para visualizar los productos de la factura -->

    <div class="modal fade" id="modal-rma-products-invoice">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header" style="background: #99BE10;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title text-center" style="color: white;">Detalle de productos</h4>

                </div>

                <div class="modal-body">

                    <p class="text-center">A continuación selecciona el producto con el icono <i class="fa fa-exchange" aria-hidden="true"></i> <strong>para iniciar con el proceso de garantía</strong>.</p>

                    <div id="detail-products-invoice-rma"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal para visualizar los productos de la factura -->

<!-- GARANTIA DE PRODUCTOS -->



<!-- OTROS -->

    <!-- Cambio de precios -->

    <div class="modal fade" id="modal-price">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-body text-center">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="tracking_options('Aceptación Manual del Asesor 04/08/2020', '474503')">&times;</button>

                    <i class="fa fa-bell fa-5x" style="color: #FF9700;"></i>

                    <br/><br/>

                    <div class="form-group">

                        <p>Queremos informarte que a partir del próximo <strong>lunes 5 de octubre</strong>, habrá ajuste de precios en los productos NIKKEN. </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Cambio de precios -->

<!-- OTROS -->


<!-- Modal para ver las opciones de comunicacion -->

<div id="modal-sm" class="modal modal-message modal-success fade" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <i class="glyphicon glyphicon-bookmark"></i>

            </div>

            <div class="modal-title">Ir a</div>

            <div class="modal-body">
                <hr>
                <a href="/oficina-virtual/archivos/Presentacion-Seminario-Diamante.pdf" target="_blank" onclick=" tracking_options('Seminario Diamante - Presentación', '474503')">
                <div class="form-group hover-button-office" id="button-magazine" style="cursor: pointer;">
                    <i class="far fa-file-powerpoint fa-4x" aria-hidden="true"></i><br/>
                    <p style="padding: 10px 20px 0 20px; line-height: 120%;"><span><strong>Presentación Seminario Diamante</strong></span></p>
                </div>
                </a>

                <hr>
                <a href="https://vivenikken.s3-us-west-1.amazonaws.com/Comunicados/Nov+19/Saskia+de+Winter.mp4" target="_blank" onclick=" tracking_options('Seminario Diamante - Propósito de vida', '474503')">
                <div class="form-group hover-button-office" id="button-magazine" style="cursor: pointer;">
                    <i class="far fa-file-video fa-4x" aria-hidden="true"></i><br/>
                    <p style="padding: 10px 20px 0 20px; line-height: 120%;"><span><strong>Encuentra tu propósito de vida</strong></span></p>
                </div>
                </a>

                <hr>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal">Cerrar</button>

            </div>

        </div>

    </div>

</div>

<div id="modal-sm2" class="modal modal-message modal-success fade" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <i class="glyphicon glyphicon-bookmark"></i>

            </div>

            <div class="modal-title">Ir a</div>

            <div class="modal-body">
                <hr>
                <a href="https://nikkenlatam.com/interno/seminario-diamante/?data=NDc0NTAzfDI=" target="_blank" onclick=" tracking_options('Seminario Diamante - Entradas', '474503')">
                <div class="form-group hover-button-office" id="button-magazine" style="cursor: pointer;">
                    <i class="far fa-credit-card fa-4x" aria-hidden="true"></i><br/>
                    <p style="padding: 10px 20px 0 20px; line-height: 120%;"><span><strong>Compra de entradas Seminario Diamante 2021</strong></span></p>
                </div>
                </a>
                
                <hr>
                <a href="https://vivenikken.s3-us-west-1.amazonaws.com/Estrategias/Seminario-Diamante-2021.pdf" target="_blank" onclick=" tracking_options('Seminario Diamante - Presentación', '474503')">
                <div class="form-group hover-button-office" id="button-magazine" style="cursor: pointer;">
                    <i class="far fa-file-powerpoint fa-4x" aria-hidden="true"></i><br/>
                    <p style="padding: 10px 20px 0 20px; line-height: 120%;"><span><strong>Presentación Seminario Diamante</strong></span></p>
                </div>
                </a>

                <hr>
                <a href="https://vivenikken.s3-us-west-1.amazonaws.com/video/oficina/Seminario2021.mp4" target="_blank" onclick=" tracking_options('Seminario Diamante - Propósito de vida', '474503')">
                <div class="form-group hover-button-office" id="button-magazine" style="cursor: pointer;">
                    <i class="far fa-file-video fa-4x" aria-hidden="true"></i><br/>
                    <p style="padding: 10px 20px 0 20px; line-height: 120%;"><span><strong>Encuentra tu propósito de vida</strong></span></p>
                </div>
                </a>

                <hr>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-tra-office border-button-office" data-dismiss="modal">Cerrar</button>

            </div>

        </div>

    </div>

</div>

<!-- Modal para ver las opciones de comunicacion -->


<!-- Modal comunicaciones -->
    <div class="modal fade" id="modal-comunications">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute; right: 15px; top: 4px; z-index: 999999; cursor: pointer; font-size: 30px; opacity: .5;">&times;</button>
                    <div id="view-form-comunications"></div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal comunicaciones -->


<!-- PRELOADER

============================================= -->


<!-- Modal -->
<!-- Modal -->


<div class="modal fade" id="ModalStartKit" tabindex="-1" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title w-100" id="myModalLabel" ><b>Kit de Inicio</b>

      </div>

      <div class="modal-body">

        <div class="modal-body" style="max-height: 500px;overflow-y: auto;margin-top: 10px;">

                <!---->



                <div class="" style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                    <a class="col-12 pull-right btn btn-success btn-lg btn-block "

                       href="https://s3-us-west-1.amazonaws.com/vivenikken/Country+Packs/2019/Lista+de+precios/descarga/mx.zip"

                       download="mx">Descargar todo <i class="fa fa-download"></i></a>

                </div>

                <br><br>

                <hr>



                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                    
                    <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Lista+Mayoreo/Mayoreo+MEX.pdf"

                       target="_blank">

                        <img src="img/lista-de-precios-final.jpg" class="img-fluid"

                             alt="smaple image" style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Lista de precios Mayoreo</strong></p>

                        </div>

                    </a>

                </div>

                <br>

                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                    
                    <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Lista+Sugerido/Sugerido+MEX.pdf"

                       target="_blank">

                        <img src="img/lista-de-precios-final.jpg" class="img-fluid"

                             alt="smaple image" style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Lista de precios Sugerido</strong></p>

                        </div>

                    </a>

                </div>

                <!--falta gtm Lista de precios entorno Ecuador-->

                <br>

                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                     
                    <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Entorno+Mayoreo/Entorno+MMEX.pdf"

                       target="_blank">

                        <img src="img/lista-de-precios-entorno-final.jpg" class="img-fluid"

                             alt="smaple image" style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Lista de precios Mayoreo Entornos</strong></p>

                        </div>

                    </a>

                </div>

                <br>


                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                     
                    <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Entorno+Sugerido/Entorno+SMEX.pdf"

                       target="_blank">

                        <img src="img/lista-de-precios-entorno-final.jpg" class="img-fluid"

                             alt="smaple image" style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Lista de precios Sugerido Entornos</strong></p>

                        </div>

                    </a>

                </div>

                <br>






                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                     
                    <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Cat%C3%A1logos+/M%C3%A9xico.pdf"

                       target="_blank">

                        <img src="img/catalogo-final.jpg" class="img-fluid"

                             alt="smaple image" style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Catálogo de productos</strong></p>

                        </div>

                    </a>

                </div>

                <br>

                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                     
                    <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Manuales/ManualProducto.pdf" target="_blank">

                        <img src="img/portadas/mproducto.jpg" class="img-fluid" alt="smaple image"

                             style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Manual de Producto</strong></p>

                        </div>

                    </a>

                </div>

                <br>

                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                    <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Manuales/Influencer.pdf" target="_blank">

                        <img src="img/portadas/maindependiente.jpg" class="img-fluid" alt="smaple image"

                             style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Manual del Asesor de Bienestar Independiente</strong></p>

                        </div>

                    </a>

                </div>

                <br>

                <div class="view overlay"

                     style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                    <a href="https://tv-store.s3.amazonaws.com/Products/pdf/maintenance_manual/Manual%20de%20mantenimiento.pdf"

                       target="_blank">

                        <img src="img/portadas/mmantenimiento.jpg" class="img-fluid" alt="smaple image"

                             style="max-width:200px;">

                        <div class="mask flex-center rgba-green-strong">

                            <p class="white-text"><strong>Manual de mantenimiento</strong></p>

                        </div>

                    </a>

                </div>

                <br>

                <div class="view overlay"

                         style="margin-left:5px;text-align: -webkit-center;max-width: 100%;cursor: pointer;">

                        <a href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Manuales/preguntas%2Bfrecuentes.jpg"

                           target="_blank">

                            <img src="https://s3-us-west-1.amazonaws.com/vivenikken/Country+Packs/2019/Lista+de+precios/Preguntas_Frecuentes/preguntas+frecuentes.jpg" class="img-fluid" alt="smaple image"

                                 style="max-width:200px;">

                            <div class="mask flex-center rgba-green-strong">

                                <p class="white-text"><strong>Preguntas frecuentes</strong></p>

                            </div>

                        </a>

                </div>


                


                <hr>



                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalYT">Ver tutorial</button>



                <!---->



            </div>

            

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

      </div>

    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->

</div><!-- /.modal -->





<div class="modal fade" id="FirstStartKit" tabindex="-1" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title w-100" id="myModalLabel" ><b>Kit de Inicio</b>

      </div>

        <div class="modal-body" style="max-height: 500px;overflow-y: auto;margin-top: 10px;">

                <!---->

                <div class="col-md-5">

                    <img src="img/logo.png" class="img-fluid"

                             alt="" style="max-width: 150px;width: 150px;">

                </div>



                <div class="col-md-7">



                    <p><strong>¡Bienvenido a la transformación digital y ecológica!</strong></p>

                    <p>Descarga los archivos del kit de inicio y comienza a exponenciar tu negocio.</p>



                </div>





                <!---->



        </div>

            

      <div class="modal-footer">

        <button id="ButtonStartKit" type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal"

                        data-target="#ModalStartKit" data-dismiss="modal">Ver mi Kit Virtual

                </button>

      </div>

    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->

</div><!-- /.modal -->



<style type="text/css">

    .overlay {

        background-color: #388e3c2e;

    }

</style>



<!-- Full Height Modal Right -->



<!-- Full Height Modal Right -->



<button id="ButtonKitNew" type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal"

                        data-target="#FirstStartKit" data-dismiss="modal" style="display: none;">Ver mi Kit Virtual

</button>

<!-- Modal -->

<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">



    <!--Content-->

    <div class="modal-content">



      <!--Body-->

      <div class="modal-body mb-0 p-0">



        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wdyQbwoa0NA" allowfullscreen></iframe>

        </div>



      </div>



      <!--Footer-->

      <div class="modal-footer justify-content-center flex-column flex-md-row">

        

        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Cerrar</button>





      </div>



    </div>

    <!--/.Content-->



  </div>

</div>



<!-- PAGE CONTENT

============================================= -->

<div id="page" class="page-wrapper">



    <!-- HEADER

    ============================================= -->

    <header id="header" class="no-bg header">

        <div class="navbar navbar-fixed-top">

            <div class="container">



                <!-- Navigation Bar -->

                <div class="navbar-header">

                    <!-- Responsive Menu Button -->

                    <button type="button" id="nav-toggle" class="navbar-toggle text-right" data-toggle="collapse"

                            data-target="#navigation-menu">

                        <span class="sr-only">Toggle navigation</span>

                        <i class="fas fa-bars"></i>

                    </button>



                    <!-- LOGO IMAGE -->

                    <!-- Recommended sizes 150x22px; -->

                    <a class="navbar-brand logo-white" href="#intro-1"><img

                                src="../oficinavirtual/logo-header.png" alt="NIKKEN Colombia"></a>

                    <a class="navbar-brand logo-black" href="#intro-1"><img

                                src="../oficinavirtual/logo-header-black.png" alt="NIKKEN Colombia"></a>

                            

                </div>  <!-- End Navigation Bar -->



                <!-- Navigation Menu -->

                <nav id="navigation-menu" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">



                        <!--<li><a href="#intro-7">Inicio</a></li>  -->

                        <!--<li><a href='#' onclick="Redirect_convocatory(474503);"

                               style="background: #feb600; border-color: #feb600;" id="loading-convocatory"

                               class="download">Ganadores Convocatoria</a></li>
                               <li><a href='#' onclick="Cuponizate();" class="download" style="background: transparent; border-color: #FEBD01; color: #FEBD01;"><span id="cuponizate-loading">Cupon&#237;zate</span></a></li>-->

   						<!--<li>
						   <a href="http://services.nikken.com.mx/finzssaludable/NDc0NTAz" target="_new" style="background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(139,176,24,1) 0%, rgba(61,136,56,1) 100%); background-color: rgba(0, 0, 0, 0); border: none;" class="download">
						       Finanzas Saludables
						    </a>
						</li>-->

                        <!--<li><a href="https://nikkenlatam.com/BeNIKKENJunior/?data=TkRjME5UQXp8U09MVEVSTyBDVVJJRUwsIEpPU0UgQVJUVVJP" class="download" onclick="tracking_options('BeNIKKEN Junior', '474503')" target="_blank" style="background: transparent; border-color: #77ae45; color: #77ae45;"><span id="replacement-loading">BeNIKKEN Junior</span></a></li>-->	

                        <!--<li>
                            <a href="http://services.nikken.com.mx/pimag_connection/NDc0NTAz" target="_new" style="background: linear-gradient(to left, #c24291 0%, #7f4e9a 100%); border-color: #fff;" id="loading-convocatory" class="download">
                                PiMag Connection
                            </a>
                        </li>-->

                        
                        <!--<li>
                            <a href='http://services.nikken.com.mx/convMayo/NDc0NTAz' target="_new" style="background: #9a1962; border-color: #fff;" id="loading-convocatory" class="download">
                                Renuévate
                            </a>
                        </li>-->

                        <li>
                            <a href="https://services.nikken.com.mx/inc1USD/NDc0NTAz" target="_new" style="background: linear-gradient(to left, #48448f 0%, #0a95d3 100%); border-color: #fff;" id="loading-convocatory" class="download">
                                Kit MOKUTEKI
                            </a>
                        </li>

                                                    <li> 
                                <a href="https://concurso.nikkenlatam.com/custom/querys/user/auto-login.php?data=NDc0NTAz" target="_new" style="background: linear-gradient(to left, #53af31 0%, #386f23 100%); border-color: #fff;" class="download">
                                    Separa, crea y gana
                                </a>
                            </li>
                            
                        <li><a data-toggle="modal" href='#modal-user'>Mi perfil</a></li>

                        <li><a href="#" id="btn-close-session" onclick="Close_session();">Cerrar sesión</a></li>
                    </ul>

                </nav>  <!-- End Navigation Menu -->



            </div>    <!-- End container -->

        </div>     <!-- End navbar fixed top  -->

    </header>

    <!-- END HEADER -->

    

    <!-- INTRO-7

    ============================================= -->

    <section id="intro-7" class="intro-section">

        <div class="overlay division">

            <div class="fluid-container">

                <div id="intro-7-content" class="row">

                    <!-- INTRO TEXT -->

                    <div class="col-md-12 intro-txt text-center white-color">



                        <div class="form-inline">

                            <div class="form-group">

                                <img src="https://nikkenlatam.com/oficina-virtual/assets/images/icons/office.png" class="img-responsive" alt="NIKKEN">

                            </div>

                            <div class="form-group m-top-40">

                                <h2 class="">BIENVENIDO A

                                    <div class="style-office-h2">TU OFICINA VIRTUAL</div>

                                </h2>

                            </div>

                        </div>



                        <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 6px; width:70%;">



                        <div class="form-group m-top-60">

                            <h3 class="box-office">¿QUÉ DESEAS HACER HOY?</h3>

                        </div>



                        <div class="form-inline">
                            <div class="form-group m-top-30">
								<img src="../oficinavirtual/plan-influencia.png" alt="Plan De Influencia" style="width: 190px !important; margin-bottom: 10px; margin-top: 25px; margin-right: 20px;">
								<br/>

								<div class="form-group m-top-10">
									<a href="https://nikkenlatam.com/plan-influencia/index.php?data=NDc0NTAz" target="_blank" onclick="tracking_options('Plan de Influencia', '474503')" type="button" class="btn btn-tra" style="background-image: linear-gradient( 122deg, #00A5E0 0%, #047ca7 100%) !important;">Plan De Influencia 3.0</a>
								</div>
							</div>

                                                            <div class="form-group m-top-30">
                                    <img src="https://nikkenlatam.com/seminario-diamante.png" class="img-responsive center-block" alt="NIKKEN CHALLENGE" style="width: 82px !important; margin-bottom: 10px;">
                                    <br/>
                                    <div class="form-group m-top-10"><a data-toggle="modal" href='#modal-sm2' class="btn btn-tra" style="background-image: linear-gradient( 122deg, #843691 0%, #843691 100%) !important;">Seminario Diamante</a>
                                    </div>
                                </div>

                                <div class="form-group m-top-30">

                                    <img src="../oficinavirtual/assets/images/icons/1.png" alt="Herramientas de negocio">

                                    <br/>

                                    <div class="form-group m-top-10"><a data-toggle="modal" href='#modal-business-tools'

                                                                        class="btn btn-tra">Herramientas de negocio</a>

                                    </div>

                                </div>
                                
                            <div class="form-group m-top-30">
                                <img src="../oficinavirtual/assets/images/icons/3.png" alt="Comunicación">
                                <br/>

                                <div class="form-group m-top-10"><a data-toggle="modal" href='#modal-comunication' type="button" class="btn btn-tra">Comunicación</a>

                                </div>
                            </div>

                            <div class="form-group m-top-30">
                                <img src="../oficinavirtual/logo-agenda-nikken.png" alt="Eventos"  style="margin-bottom: 10px; margin-top: 25px; margin-right: 20px;">
                                <br/>

                                <div class="form-group m-top-10">

                                    <button type="button" class="btn btn-tra" id="btn-calendar"

                                                onclick="Calendar('2'); tracking_options('Calendario de eventos', '474503');">Agenda

                                    </button>
                                </div>
                            </div>



                            <div class="form-group m-top-30">
                                <img src="../oficinavirtual/13.png" alt="Seguimiento de pedidos">
                                <br/>

                                <div class="form-group m-top-10">

                                    <button type="button" class="btn btn-tra" id="btn-tracking"

                                                onclick="Tracking(); tracking_options('Consultas- Seguimiento de pedido', '474503');">Seguimiento de pedido

                                    </button>
                                </div>
                            </div>

                                                            <div class="form-group m-top-30">
                                    <img src="../oficinavirtual/14.png" alt="INFLUENCER TOOLS">
                                <br/>

                                    <div class="form-group m-top-10">
                                        <a href="https://nikkenlatam.thinkific.com/courses/influencertools" target="_blank" onclick="tracking_options('INFLUENCER TOOLS', '474503')" type="button" class="btn btn-tra">INFLUENCER TOOLS</a>
                                    </div>
                                </div>
                                                                <div class="form-group m-top-30">
                                    <img src="https://nikkenlatam.com/ubi.png?1.0.0" alt="UBI">
                                <br/>

                                    <div class="form-group m-top-10">
                                        <a href="https://ubi.nikkenlatam.com/custom/querys/users/autologin.php?code=NDc0NTAz=" target="_blank" onclick="tracking_options('UBI', '474503')" type="button" class="btn btn-tra">UBI</a>
                                    </div>
                                </div>
                                                          

                            <!--<div class="form-group m-top-30">

                                <img src="../assets/images/icons/4.png" alt="Eventos">

                                <br/>

                                 <button type="button" class="btn btn-tra m-top-10" id="btn-calendar"

                                        onclick="Calendar(); tracking_options('Calendario de eventos', '474503');">Eventos

                            </button>

                            </div>--->

                            <div class="form-group m-top-30">

                                <img src="../oficinavirtual/assets/images/icons/2.png" alt="Consultas">

                                <br/>

                                <div class="form-group m-top-10"><a data-toggle="modal" href='#modal-search'

                                                                    type="button" class="btn btn-tra">Consultas</a>

                                </div>

                            </div>

                            <div class="form-group m-top-30">

                                <img src="../oficinavirtual/assets/images/icons/1.png" alt="Herramientas de negocio">

                                <br/>

                                <div class="form-group m-top-10"><a data-toggle="modal" href='#modal-business-tools'

                                                                    class="btn btn-tra">Herramientas de negocio</a>

                                </div>

                            </div>

                            <div class="form-group m-top-30">

                                <img src="../oficinavirtual/assets/images/icons/8.png" alt="Incorporar">

                                <br/>

                                <div class="form-group m-top-10">

                                    <button type="button" class="btn btn-tra" id="btn-incorporation"

                                            onclick="Incorporation('NDc0NTAz'); tracking_options('Incorporaci? Web', '474503')">Incorporar

                                    </button>

                                </div>

                            </div>



                            <div class="form-group m-top-30">

                                <img src="../oficinavirtual/assets/images/icons/5.png" alt="Tienda Virtual">

                                <br/>

                                <div class="form-group m-top-10">

                                    <button type="button" class="btn btn-tra" id="btn-shopping-cart" style="

    font-size: 11px;

"

                                            onclick="Shopping_cart('https://mitiendanikken.com/mitiendanikken/auto/login/YXJ0dXJvLnNvbHRlcm9AZ21haWwuY29t'); tracking_options('Tienda Virtual', '474503')">Tienda Virtual

                                    </button>

                                </div>

                            </div>

                            <div class="form-group m-top-30">

                                <img src="../oficinavirtual/assets/images/icons/6.png" alt="Country Packs">

                                <br/>

                                <div class="form-group m-top-10">

                                    <button type="button" class="btn btn-tra" id="btn-country-packs" style="

    font-size: 11px;

"

                                            onclick="Country_packs(); tracking_options('Country Packs', '474503')">Country Packs

                                    </button>

                                </div>

                            </div>

                            


                                    <div class="form-group m-top-30">



                                        <img src="../oficinavirtual/assets/images/icons/12.png" alt="Country Packs" style="width: 80px;">



                                        <br/>



                                        <div class="form-group m-top-10">

                                           <a href="https://intranet.nikken.com.mx:8989/modules/change_control/register_clabe/?code=YzBNYmViVEtFakZoQjlKanBIN3Y3WlM1ZzZSSzN2UzhVSnNaQmY2OW5rWi80T09aVC9lNThuVVBnOHpZc0FaYQ=="

                                               style="font-size: 11px;"

                                               class="btn btn-tra" id="btn-country-packs" onclick="tracking_options('Cuenta Bancaria', '474503')"

                                            >Cuenta Interbancaria

                                            </a> 

                                          <!--   <a href="https://nikkenlatam.com/oficina-virtual/assets/include/general/mantenimiento.html"
                                       
                                               style="font-size: 11px;"

                                               class="btn btn-tra" id="btn-country-packs"

                                            >Cuenta Interbancaria

                                            </a>-->

                                        </div>



                                    </div>

                                    <div class="form-group m-top-30">



                                        <img src="../oficinavirtual/assets/images/icons/10.png" alt="Country Packs" style="width: 80px;">



                                        <br/>



                                        <div class="form-group m-top-10">

                                           <a href="http://intranet.nikkenlatam.com:1281/modules/change_control/edit_home_MX/?code=SGNGZU1ndG1jRzRTZEdOcVAxUTlMUT09"

                                               class="btn btn-tra" style="font-size: 11px;" id="btn-country-packs" onclick="tracking_options('Editar residencia', '474503')"

                                            >Editar Residencia

                                            </a> 

                                            <!--  <a href="https://nikkenlatam.com/oficina-virtual/assets/include/general/mantenimiento.html"

                                               class="btn btn-tra" style="font-size: 11px;" id="btn-country-packs"

                                            >Editar Residencia

                                            </a>-->

                                        </div>



                                    </div>

                                    <div class="form-group m-top-30">
                                        <img src="../oficinavirtual/assets/images/icons/11.png" alt="Country Packs" style="width: 80px;">
                                        <br/>
                                        <div class="form-group m-top-10">
                                            <a href="http://intranet.nikkenlatam.com:1283/autologin/NDc0NTAzfDI="
                                               class="btn btn-tra" id="btn-country-packs" onclick="tracking_options('Informaci? fiscal', '474503')"
                                            >Información Fiscal
                                            </a>
                                        </div>
                                    </div>

                                    <div class="form-group m-top-30">
                                        <img src="../oficinavirtual/logooriginal.png" alt="Country Packs" style="width: 25%;">
                                        <br/>
                                        <div class="form-group m-top-10">
                                            <a href="https://mi.nikkenlatam.com/access/servicio.mex@nikkenlatam.com" target="_blank" type="button" class="btn btn-tra" style="background-image: linear-gradient( 122deg, #0aa6b6 0%, #0aa6b6 100%) !important;">
                                                MyNKKEN LATAM
                                            </a>
                                        </div>
                                    </div>




                                    
                        </div>



                    </div>



                </div><!-- End Intro Content -->

            </div><!-- End container -->

        </div><!-- End overlay -->

    </section><!-- END INTRO-7 -->



    <!-- WELCOME

    ============================================= -->

    <section id="welcome" class="welcome-section division" style="display: none;">

        <div class="container">

            <div class="row">

                <div id="info"></div>

            </div><!-- End row -->

        </div><!-- End container -->

    </section>

    <!-- END WELCOME -->



    <!-- FOOTER

    ============================================= -->

    <footer id="footer" class="bg-dark footer division">

        <!-- PRE-FOOTER -->

        <div id="pre-footer" class="p-top-80 p-bottom-40">

            <div class="container">

                <div class="row">



                    <!-- FOOTER ABOUT WIDGET -->

                    <div class="col-md-3 footer-about-widget m-bottom-40">

                        <h4 class="h4-lg"><img src="../assets/images/general/logo-header.png" alt="NIKKEN Colombia">

                        </h4>

                    </div>



                    <!-- FOOTER NEWS WIDGET -->

                    <div class="col-md-3 p-right-30 footer-news-widget m-bottom-40">

                        <!-- Title -->

                        <a class="btn btn-lg m-top-10 btn-tra" href="https://vivenikken.s3-us-west-1.amazonaws.com/COUNTRY+PACKS/Lista+Sugerido/Sugerido+MEX.pdf"

                           target="_blank">Lista de precios</a>

                        <a class="btn btn-lg m-top-10 btn-tra" href="http://vivenikken.s3.amazonaws.com/pdf/catalogs/Mexico.pdf"

                           target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catálogo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    </div>



                    <!-- FOOTER SOCIALS WIDGET -->

                    <div class="col-md-2 footer-socials-widget m-bottom-40">

                        <!-- Title -->

                        <h4 class="h4-lg">Síguenos</h4>

                        <!-- Icons list -->

                        <ul class="footer-icons clearfix">

                            <li><a class="foo-social ico-facebook" href="https://www.facebook.com/NIKKENLAT"

                                   target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>



                            <li><a class="foo-social ico-instagram" href="https://www.instagram.com/nikkenlatam/"

                                   target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>

                            <li><a class="foo-social ico-youtube"

                                   href="https://www.youtube.com/user/nikkenlatinoamerica/videos?flow=grid&view=1"

                                   target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>

                            <li><a class="foo-social ico-rss" href="https://nikkenlatam.com/blog" target="_blank"><i

                                            class="fa fa-rss" aria-hidden="true"></i> Nikken blog</a></li>

                        </ul>



                    </div>



                    <!-- FOOTER NEWSLETTER WIDGET -->

                    <div class="col-md-4 footer-newsletter-widget m-bottom-40">

                        <!-- Title -->

                        <h4 class="h4-lg">Nikken México</h4>

                        <p>Somos un grupo de personas enfocadas en el <strong>bienestar del ser humano</strong>.

                            Brindamos asesoría para mejorar la calidad de vida, a través de la creación de Entornos de

                            Bienestar inspirados en la naturaleza y el desarrollo de un sistema de negocios de

                            bienestar.</p>

                                            </div>



                </div>    <!-- Eтd row -->

            </div>    <!-- End container -->

        </div>    <!-- END PRE-FOOTER -->



        <div class="container footer-bottom p-top-20 p-bottom-20">

            <div class="row">



                <!-- FOOTER COPYRIGHT -->

                <div id="footer-copyright" class="col-sm-6 col-md-6">

                    <p>&copy; 2017 <strong>Nikken Latinoamérica</strong>. Todos los derechos reservados</p>

                </div>



                <!-- FOOTER LINKS -->

                <div id="footer-links" class="col-sm-6 col-md-6 text-right">

                    <!-- Links List -->

                    <ul class="footer-links clearfix">

                        <li><a class="foo-link"

                               href="https://vivenikken.s3.amazonaws.com/pdf/others/Regional/Terms+and+conditions.pdf"

                               target="_blank">Términos y condiciones</a></li>

                    </ul>

                </div>



            </div>  <!-- End row -->

        </div>  <!-- End container -->

    </footer>

    <!-- END FOOTER -->



</div>

<!-- END PAGE CONTENT -->



<!-- LIBRERIAS NATIVAS

============================================= -->

<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>

<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<script src="../js/modernizr.custom.js" type="text/javascript"></script>

<script src="../js/jquery.easing.js" type="text/javascript"></script>

<script src="../js/retina.js" type="text/javascript"></script>

<script src="../js/jquery.stellar.min.js" type="text/javascript"></script>

<script src="../js/jquery.scrollto.js"></script>

<script defer src="../js/jquery.appear.js"></script>

<script defer src="../js/jquery.vide.min.js"></script>

<script src="../js/owl.carousel.js" type="text/javascript"></script>

<script src="../js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script defer src="../js/jquery.flexslider.js" type="text/javascript"></script>

<script src="../js/waypoints.min.js" type="text/javascript"></script>

<script src="../js/jquery.ajaxchimp.min.js"></script>

<script src="../js/contact_form.js" type="text/javascript"></script>

<script defer src="../js/jquery.validate.min.js" type="text/javascript"></script>



<!-- Custom Script -->

<script src="../js/custom.js?v=2" type="text/javascript"></script>

<!-- ============================================= -->



<!-- LIBRERIAS ADICIONALES

============================================= -->

<!-- JS -->

<script src="../assets/js/main.js?24.0.0" type="text/javascript"></script>



<!-- INTERPRETADOR JS -->

<script src="../assets/js/interpretadorAjax.js" type="text/javascript"></script>



<!-- CARRUSEL VIDEOS -->

<script src="../assets/js/carrusel-video/jquery.touchSwipe.min.js"></script>

<script src="../assets/js/carrusel-video/responsive_bootstrap_carousel.js"></script>

<!-- ============================================= -->



<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

<!--[if lt IE 9]>

<script src="../js/html5shiv.js"></script>

<script src="../js/respond.min.js"></script>

<![endif]-->



<!-- TEMPORAL -->


<!-- TEMPORAL -->



<!-- Modal perfil de usuario -->

<div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"

                        style="margin-right: 10px; margin-top: 3px;">×

                </button>

                <div class="row">

                    <div class="col-md-10 col-md-offset-1">

                        <hr class="colorgraph">

                        <center>

                            <div class="m-bottom-10"><img src="https://nikkenlatam.com/oficina-virtual/assets/images/icons/office.png"

                                                          class="img-responsive img-circle" alt="NIKKEN" title="NIKKEN">

                            </div>

                            <h4 class="media-heading">

                                <small>Bienvenido(a)</small>

                                <br/>SOLTERO CURIEL, JOSE ARTURO</h4>

                            <hr>

                            <p>¡La Oficina Virtual reúne las herramientas básicas y especializadas para el desarrollo de

                                tu negocio!</p>

                            <hr>

                            <div class="form-group">

                                <small><strong>Link de tu Tienda Personalizada para compartir con tus clientes</strong>
                                </small>
                                <br/>

                                <span class="label label-success"><a href="https://arturoymaria.mitiendanikken.com"
                                                                     style="color: white;"
                                                                     target="_blank">https://arturoymaria.mitiendanikken.com</a></span>

                            </div>

                            <div class="form-group">

                                <small><strong>Correo registrado</strong></small>

                                <br/>

                                <span class="label label-info">arturo.soltero@gmail.com</span>

                            </div>

                            <div class="form-group">

                                <small><strong>Rango</strong></small>

                                <br/>

                                <span class="label label-warning">Diamante Real</span>

                            </div>

                            <hr>

                            <p>

                                <small>Para cambiar tu contraseña haz <a href="#"

                                                                         onclick="Change_password('arturo.soltero@gmail.com');"><strong>CLIC

                                            AQUÍ</strong></a></small>

                            </p>

                        </center>

                        <hr class="colorgraph">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Modal perfil de usuario -->



<!-- Modal Campaña de Repuestos -->

<div class="modal fade" id="modal-campaign-replacement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"

                        style="margin-right: 10px; margin-top: 3px;">×

                </button>

                <div class="row">

                    <div class="col-md-10 col-md-offset-1">

                        <hr class="colorgraph">

                        <center>

                            <div class="m-bottom-10"><img src="../assets/images/general/elite.png"

                                                          class="img-responsive img-circle" alt="NIKKEN" title="NIKKEN">

                            </div>

                            <h4 class="media-heading">SOLTERO CURIEL, JOSE ARTURO</h4>

                            <hr>

                            <p>¡Cliente élite te brinda las siguientes herramientas para la <br/><strong>campaña de

                                    repuestos 2018</strong>!</p>

                            <hr>

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="col-sm-5">

                                        <div class="form-group"><img src="../assets/images/campaigns/logo-repuestos.png"

                                                                     class="img-responsive center-block" alt="NIKKEN">

                                        </div>

                                    </div>

                                    <div class="col-sm-7">

                                        <div class="form-group"><strong>Conoce tu potencial</strong> de ingresos gracias

                                            al servicio que prestas a tus clientes en la renovación de sus sistemas

                                            PiMag y KenkoAir.

                                        </div>

                                        <div class="form-group">

                                            <div class="btn btn-success btn-small cursor"

                                                 onclick="Detail_campaign_replacement();" data-dismiss="modal"

                                                 style="font-size: 14px;    font-weight: normal;    letter-spacing: initial;    padding: 5px 15px;    margin-right: 0;">

                                                Ingresar

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <hr>

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="col-sm-5">

                                        <div class="form-group"><img src="../assets/images/general/logo-cartero.png"

                                                                     class="img-responsive center-block" alt="NIKKEN">

                                        </div>

                                    </div>

                                    <div class="col-sm-7">

                                        <div class="form-group">Dirige mensajes que promuevan el <strong>mantenimiento y

                                                cambio oportuno de repuestos</strong> de los sistemas PiMag y KenkoAir

                                            que tienen tus clientes.

                                        </div>

                                        <div class="form-group"><a

                                                    href="https://nikkenlatam.com/carteronikken/?data=NDc0NTAzfFNPTFRFUk8gQ1VSSUVMLCBKT1NFIEFSVFVST3xhcnR1cm8uc29sdGVyb0BnbWFpbC5jb218aHR0cHM6Ly9hcnR1cm95bWFyaWEubWl0aWVuZGFuaWtrZW4uY29tfDI="

                                                    target="_blank" class="btn btn-success btn-small"

                                                    style="font-size: 14px;    font-weight: normal;    letter-spacing: initial;    padding: 5px 15px;    margin-right: 0;">Ingresar</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </center>

                        <hr class="colorgraph">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Modal Campaña de Repuestos -->



<!-- Modal aprobación NUTRIRED COL, PER, ECU, MEX, PAN -->

<div class="modal fade" id="modal-nutrired">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title text-center">INFORMACIÓN IMPORTANTE</h4>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-sm-12">

                        <img src="../assets/images/strategies/nutrired.png" class="img-responsive center-block"

                             alt="Nutrired NIKKEN">

                    </div>

                    <div class="col-sm-12">

                        <p class="text-justify">Es una <strong>ESTRATEGIA</strong> y una <strong>POLÍTICA</strong> de

                            negocio, que además de motivar al autoconsumo de productos nutricionales y de cuidado de

                            piel, promueve que el programa de nutrición de <strong>NIKKEN</strong> se comparta con

                            muchos clientes. El objetivo de la NUTRIRED es generar <strong>ESTABILIDAD</strong> en tu

                            negocio y tus ingresos a través de <strong>VOLÚMENES CONSTANTES</strong>.</p>

                        <p class="text-justify">Para acceder a los beneficios de la NUTRIRED, el Asesor de Bienestar

                            Independiente deberá realizar en cada mes calendario, un VP de 100 puntos en productos de

                            las marcas <strong>KENZEN y TRUE ELEMENTS</strong> de NIKKEN.</p>

                        <p class="text-justify">Al cumplir con el requisito de la NUTRIRED, el Asesor de Bienestar

                            Independiente aplica para recibir el pago de bonificaciones de grupo personal y liderazgo,

                            provenientes de los volúmenes realizados en productos <strong>KENZEN y TRUE

                                ELEMENTS</strong>.</p>

                        <hr>

                        <h4 class="text-center"><strong>MARCAS INCLUÍDAS EN LA NUTRIRED:</strong></h4>

                        <br/>

                        <div class="row">

                            <div class="col-sm-6 text-center"><img src="../assets/images/strategies/kenzen-nutrired.png"

                                                                   class="img-responsive center-block"

                                                                   alt="Nutrired NIKKEN"></div>

                            <div class="col-sm-6 text-center"><img

                                        src="../assets/images/strategies/true-elements-nutrired.png"

                                        class="img-responsive center-block" alt="Nutrired NIKKEN"></div>

                        </div>

                        <br/>

                        <h4 class="text-center"><strong>Serán válidos todos los productos adquiridos de forma

                                Individual, Paquete, Autoship, Arma tu Entorno y 7/10.</strong></h4>

                        <hr>

                        <p class="text-justify">

                            <strong>TÉRMINOS Y CONDICIONES</strong>

                        <ul>

                            <li class="font-size-modal-li">La NUTRIRED aplica para compras únicamente hechas en NIKKEN

                                Latinoamérica.

                            </li>

                            <li class="font-size-modal-li">Se puede cumplir el <strong>REQUISITO</strong> con las

                                compras de los clientes en Club de Bienestar.

                            </li>

                            <li class="font-size-modal-li">El concepto de NUTRIRED es válido únicamente para el pago de

                                bonificaciones de grupo y liderazgo provenientes de volúmenes realizados en productos

                                <strong>KENZEN Y TRUE ELEMENTS</strong>.

                            </li>

                            <li class="font-size-modal-li">Los puntos generados por las marcas <strong>KENZEN Y TRUE

                                    ELEMENTS</strong> contarán para ascensos de rango, calificaciones de rango, retos de

                                negocio, programas especiales y estrategias.

                            </li>

                            <li class="font-size-modal-li">La NUTRIRED aplica para los Asesores de Bienestar

                                Independientes en NIKKEN Colombia, Ecuador, México, Panamá y Perú.

                            </li>

                            <li class="font-size-modal-li">NIKKEN Latinoamérica y cada una de sus representaciones

                                (Colombia, Ecuador, México, Panamá y Perú), se reservan el derecho de interpretación de

                                esta información.

                            </li>

                        </ul>

                        </p>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-dismiss="modal"

                        onclick="Apply_nutrired('474503');">Estoy enterado

                </button>

            </div>

        </div>

    </div>

</div>

<!-- Modal aprobación NUTRIRED COL, PER, ECU, MEX, PAN -->



<!-- Chat Offline -->

<div class="chatbox chatbox--tray chatbox--empty" id="chat-off" style="display: none;">

    <div class="chatbox__title">

        <h5 style="color: white;">Servicio al Cliente</h5>

        <button class="chatbox__title__tray">

            <span></span>

        </button>

        <button class="chatbox__title__close">

                    <span>

                        <svg viewBox="0 0 12 12" width="12px" height="12px">

                            <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>

                            <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>

                        </svg>

                    </span>

        </button>

    </div>

    <form class="chatbox__credentials">

        <button type="submit" class="btn btn-success btn-block">Solicitar Asesoría</button>

    </form>

</div>

<!-- Chat Offline -->

    <div style="position: fixed !important; color: black; 
    bottom: 92px;
    right: 94px;
    background: white;
    padding: 5px 17px 5px 20px;
    font-weight: bold;
    font-size: 13px;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 13px;
    border-bottom-right-radius: 13px;">Escríbenos <span style="width: 0;
    height: 0;
    border-style: solid;
    border-width: 8px 0 8px 14px;
    border-color: transparent transparent transparent white;
    position: absolute;
    top: 9px;
    right: -13px;"></span></div>
    <a href="https://wa.me/5215530589489" target="_blank"><img src="../oficinavirtual/icono-whatsapp-nikken.png" alt="WhatsApp NIKKEN México" style="position: fixed !important; bottom: 78px; right: 16px;"></a>
    

</body>



<!-- LIBRERIAS NATIVAS

============================================= -->

<!-- DataTables -->

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="../assets/js/recorter.js"></script>

<script src="../assets/js/jquery.twbsPagination.js"></script>

<!-- DataTables -->



<!-- Libreria de alertas javascript -->

<script src="../plugins/sweet-alert/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="../plugins/sweet-alert/sweetalert.css">

<!-- Libreria de alertas javascript -->



<!-- Formato de fecha -->

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

<!-- Formato de fecha -->



<!-- Upload -->

<script src="../plugins/upload/src/jquery.fileuploader.min.js" type="text/javascript"></script>

<script src="//vjs.zencdn.net/7.6.6/video.min.js"></script>
<script src='/plugins/slick/slick.js'></script>
<!-- Google analitycs -->

<script>

    (function (i, s, o, g, r, a, m) {

        i['GoogleAnalyticsObject'] = r;

        i[r] = i[r] || function () {

            (i[r].q = i[r].q || []).push(arguments)

        }, i[r].l = 1 * new Date();

        a = s.createElement(o),

            m = s.getElementsByTagName(o)[0];

        a.async = 1;

        a.src = g;

        m.parentNode.insertBefore(a, m)

    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');



    ga('create', 'UA-59706412-13', 'auto');

    ga('send', 'pageview');

</script>

<!-- Google analitycs -->



<!-- ============================================= -->

<!-- LIBRERIAS NATIVAS -->



<!-- Enviar información al chat en línea -->

<script>

    $zopim(function () {

        $zopim.livechat.departments.setVisitorDepartment('México');

        $zopim.livechat.setName('SOLTERO CURIEL, JOSE ARTURO');

        $zopim.livechat.setEmail('arturo.soltero@gmail.com');

        $zopim.livechat.setPhone('474503');

        $zopim.livechat.setNotes('País 2, Rango Diamante Real');

    });



    $zopim(function () {

        $zopim.livechat.setOnConnected(function () {

            var marketing_department = $zopim.livechat.departments.getDepartment('México');

            if (marketing_department.status == 'offline') {

                $zopim.livechat.hideAll();

                //Activar sobre

                document.getElementById('chat-off').style = 'inline-block';

            }

        });

    });

</script>

<!-- Enviar información al chat en línea -->



<!-- Activar libreria popover -->

<script>

    $(function () {

        $('[data-toggle="popover"]').popover()

    })

</script>

<!-- Activar libreria popover -->






<script type="text/javascript" src="../assets/js/inactivo.js"></script> <!-- CERRAR SESION INACTIVO -->

<script> $.idle(600, function () {

        window.location.href = "../../";

    }); </script><!-- CERRAR SESION INACTIVO -->
    
<!--<div class="modal fade" id="modal-alert-temp-campaign">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <i class="fa fa-bell fa-5x" style="color: #FF9700;"></i>
                <br/><br/>

                <div class="form-group"><p><strong>¡Disfruta de la campaña de repuestos hasta el 30 de septiembre 2020!</strong></p></div>
            </div>
        </div>
    </div>
</div>

<script>$("#modal-alert-temp-campaign").modal("show");</script>-->
<!--<script>$("#modal-price").modal("show");</script>-->
</html>