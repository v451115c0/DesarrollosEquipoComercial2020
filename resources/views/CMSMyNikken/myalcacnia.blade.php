<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>MyNIKKEN | Alcancía electrónica </title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/vendors/vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/themes/vertical-modern-menu-template/materialize.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/themes/vertical-modern-menu-template/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/custom/custom.css') }}">
        
        <link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_zero_config.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_html5.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/vendors/data-tables/css/jquery.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/pages/data-tables.min.css') }}">

    </head>
    <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
        <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed"> 
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark no-shadow gradient-45deg-light-blue-teal">
            
            </nav>
        </div>
        </header>
        <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-rounded">
            <div class="brand-sidebar">
                <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="javascript:void(0)"><img class="hide-on-med-and-down" src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" alt="Nikken"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" alt="Nikken"/><span class="logo-text hide-on-med-and-down">MyNIKKEN</span></a></h1>
            </div>
            <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
                <li class="bold active">
                    <style>
                        .sidenav li a.active {
                            background: -webkit-linear-gradient(45deg,#00bcd4,#00bcd4) !important;
                            background: linear-gradient(45deg,#00bcd4,#00bcd4) !important;
                        }
                    </style>
                    <a class="active waves-effect waves-cyan mt-3 gradient-shadow" id="myAlcacnciabtn" href="javascript:void(0)" onclick="showMyAlcancia();">
                        <i class="material-icons">account_circle</i>
                        <span class="menu-title" data-i18n="Mail">Mi Alcancía</span>
                    </a>
                </li>
                <li class="bold">
                    <a class="waves-effect waves-cyan mt-3 gradient-shadow" id="myAlcacnciaRedbtn" href="javascript:void(0)" onclick="showMyAlcanciaRed();">
                        <i class="material-icons">group</i>
                        <span class="menu-title" data-i18n="Mail">Alcancía de red</span>
                    </a>
                </li>
                <li class="bold">
                    <a class="waves-effect waves-cyan mt-3 gradient-shadow modal-trigger" href="#terms">
                        <i class="material-icons">attachment</i>
                        <span class="menu-title" data-i18n="Mail">Términos y condiciones</span>
                    </a>
                </li>
                <li class="bold">
                    <a class="waves-effect waves-cyan mt-3 gradient-shadow" href="{{ asset('materialize/img/alcancia/1.pdf') }}" target="_new">
                        <i class="material-icons">question_answer</i>
                        <span class="menu-title" data-i18n="Mail">Preguntas frecuentes</span>
                    </a>
                </li>
            </ul>
            <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
        </aside>
        <div id="main">
            <div class="row">
                <div class="content-wrapper-before gradient-45deg-light-blue-teal"></div>
                <div class="breadcrumbs-dark pb-0 pt-4 gradient-45deg-light-blue-teal" id="breadcrumbs-wrapper">
                    <div class="container text-black">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h5 class="breadcrumbs-title mt-0 mb-0" style="text-align: center !important">
                                    <img src="{{ asset('materialize/img/alcancia/alcancia_logo.png') }}" style="width: 28%;">
                                </h5>
                                <input type="hidden" value="{{ $associateid ?? 123456 }}" id="sap_code">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 150px; overflow: hidden;">
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 40%; width: 100%;">
                        <style type="text/css">
                            rect{}
                        </style>
                        <defs>
                            <linearGradient id="MyGradient">
                                <stop offset="5%" stop-color="#a5eaf6" />
                                <stop offset="95%" stop-color="#67fedb" />
                            </linearGradient>
                        </defs>
                        <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill:url(#MyGradient)"></path>
                    </svg>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12" id="MyAlcacncia">
                        <div id="button-trigger" class="card card card-default scrollspy">
                            <div class="card-content">
                                <style>
                                    .current{
                                        color: #fff !important;
                                        border: 1px solid #2196f3 !important;
                                        border-radius: 6px !important;
                                        background: #2196f3 !important;
                                        box-shadow: 0 0 8px 0 #2196f3 !important;
                                        margin-top: .25rem !important;
                                        padding: .25em .65em !important;
                                    }
                                    .paginate_button{
                                        margin-top: .25rem !important;
                                        padding: .25em .65em !important;
                                    }
                                    .paginate_button:hover{
                                        color: #fff !important;
                                            border: 1px solid #2196f3 !important;
                                            border-radius: 6px !important;
                                            background: #2196f3 !important;
                                            box-shadow: 0 0 8px 0 #2196f3 !important;
                                        }
                                    }
                                    #data-table-simple_previous{
                                        cursor: default !important;
                                        color: #666 !important;
                                        border: 1px solid transparent !important;
                                        background: transparent !important;
                                        box-shadow: none !important;
                                    }
                                    #data-table-simple_previous:hover{
                                        color: #fff !important;
                                        border: 1px solid #2196f3 !important;
                                        border-radius: 6px !important;
                                        background: #2196f3 !important;
                                        box-shadow: 0 0 8px 0 #2196f3 !important;
                                    }
                                </style>
                                <h4>Mi Alcancía</h4>
                                <div class="row">
                                    <div class="col s12">
                                    <table id="miestatus" class="display" style="max-width: 100%;width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Detalles</th>
                                                <th>Estatus</th>
                                                <th>Fecha de primer pago</th>
                                                <th>Numero de orden</th>
                                                <th>Número de plazos</th>
                                                <th>Plazos pagados</th>
                                                <th>Plazos por pagar</th>
                                                <th>Costo total</th>
                                                <th>Valor por abono</th>
                                                <th>Saldo</th>
                                                <th>Puntos</th>
                                                <th>VC</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l12" id="MyAlcacnciaRed">
                        <div id="button-trigger" class="card card card-default scrollspy">
                            <div class="card-content">
                                <h4>Alcancía de mi red</h4>
                                <div class="row">
                                    <div class="col s12 m6 l3 xl3">
                                        <label style="color: #000">
                                            <b>Tipo de genealogía: </b>
                                        </label>
                                        <div class="input-field col s12">
                                            <select id="genealogyPerTipe" onchange="MyAlcacniaDataRed(this.value)" class="browser-default">
                                                <option value="1" selected>Grupo personal</option>
                                                <option value="2">Organizacional</option>
                                                <option value="3">Miembros de la comunidad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                    <table id="estatusRed" class="display" style="max-width: 100%; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nombre</th>
                                                <th>Detalles</th>
                                                <th>Estatus</th>
                                                <th>Numero de orden</th>
                                                <th>Número de plazos</th>
                                                <th>Plazos pagados</th>
                                                <th>Plazos por pagar</th>
                                                <th>Costo total</th>
                                                <th>Valor por abono</th>
                                                <th>Saldo</th>
                                                <th>Periodo de Compra</th>
                                                <th>Periodo final estimado</th>
                                                <th>Puntos</th>
                                                <th>VC</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="orderDetailView" class="modal bottom-sheet">
            <div class="modal-content">
                <div id="view-borderless-table">
                    <div class="row">
                        <div class="col s12">
                            <table id="DetailOrder">
                                <thead>
                                    <tr>
                                        <th>Numero de orden</th>
                                        <th>Código de item</th>
                                        <th>Descripción</th>
                                        <th>Cantidad</th>
                                        <th>Precio unitario</th>
                                        <th>Puntos</th>
                                        <th>Volumen de cálculo</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
            </div>
        </div>

        <div id="terms" class="modal modal-fixed-footer">
            <div class="modal-content">
                <center>
                    <h5>Términos y Condiciones (Usuario del Plan de Pago)</h5>
                </center>
                <p>Es un beneficio exclusivo para Influencer y Miembros de la Comunidad, en el caso de este último si no está inscrito en NIKKEN debe ingresar con el Kit de Inicio 5032 de valor de 1 dólar, el cual será cargado al valor de la primera cuota o plazo.</p>
                <p>El envío del producto se hará al momento de pagar el 100% del pedido en los tiempos determinados en condiciones normales.</p>
                <p>La factura, puntos, pagos de ganancias y bonificaciones se harán en el mes correspondiente al último pago del plan de pagos.</p>
                <p>Este beneficio solamente será aplicable a la compra de productos NIKKEN (Con un costo mínimo total del plan por 150 USD o su equivalente en la moneda local).</p>
                <table class="bordered">
                    <tbody>
                        <tr>
                            <td>COLOMBIA </td>
                            <td>$510.000</td>
                        </tr>
                        <tr>
                            <td>CHILE </td>
                            <td>$118.700</td>
                        </tr>
                        <tr>
                            <td>ECUADOR </td>
                            <td>USD$150</td>
                        </tr>
                        <tr>
                            <td>PERÚ </td>
                            <td>S/.540</td>
                        </tr>
                        <tr>
                            <td>PANAMÁ </td>
                            <td>USD$150</td>
                        </tr>
                        <tr>
                            <td>COSTA RICA</td>
                            <td>₡88.000</td>
                        </tr>
                        <tr>
                            <td>EL SALVADOR</td>
                            <td>USD$150</td>
                        </tr>
                        <tr>
                            <td>GUATEMALA</td>
                            <td>Q.1200</td>
                        </tr>
                        <tr>
                            <td>MÉXICO</td>
                            <td>$3.000</td>
                        </tr>
                    </tbody>
                </table>
                <p>Este beneficio no es válido para la compra de productos en promoción, cambios de producto, Kit de Influencer o descuentos especiales, aplica exclusivamente para precios de lista.</p>
                <p>NIKKEN sostendrá el precio de la alcancía generada siempre y cuando sea tomada antes del anuncio al cambio de precios del país.</p>
                <p>Para beneficiarse de este plan de pagos el Cliente deberá pagar como mínimo el primer pago correspondiente al 10% del valor total de las mercancías y un MÁXIMO de 10 PAGOS al aceptar este Plan. Este valor podrá ser pagado con cualquiera de las formas de pago que se acepten dentro de la Tienda Virtual de NIKKEN. El pago del anticipo no dará derecho al Cliente a reclamar el producto a NIKKEN, sino hasta que complete el pago del precio.</p>
                <p>El plazo máximo para cumplir con los pagos o cuotas es de 10 meses a partir del primer pago.</p>
                <p>NIKKEN separará o apartara el producto siempre y cuando se tenga pagado el equivalente a 6 pagos o cuotas de pago y/o el 60% del total de los productos separados y se tendrá disponible para cuando se tenga la totalidad del pago para hacer envío de los productos. Después de hacer este proceso no se aceptan cambios de referencia.</p>
                <p>En caso de no pagar la totalidad de los plazos el producto quedará disponible para la venta.</p>
                <p>Todo cambio o ajuste en los productos (cambio de código, backorder o producto descontinuado) adquiridos por <b>EL CLIENTE</b> en este beneficio, <b>NIKKEN</b>  notificará directamente al cliente, por lo que el <b>EL CLIENTE</b> podrá decidir si continúa con las nuevas condiciones o utiliza los anticipos efectuados en la compra de algún producto NIKKEN.</p>
                <p>NIKKEN entregará el producto apartado al EL CLIENTE siempre y cuando verifique que aquél completó el pago del saldo restante dentro del plazo obligatorio mencionado.</p>
                <p>
                    Este negocio se considerará como una venta sometida a una condición resolutoria, de manera que, si EL CLIENTE no completa el pago del saldo restante dentro del término obligatorio antes establecido:
                    <ul style="margin-left: 50px">
                        <li style="list-style-type:   disclosure-closed !important;">NIKKEN podrá disponer libremente del producto que había sido separado para el Cliente y cesará la obligación de garantizar al Cliente su disponibilidad.</li>
                        <li style="list-style-type:   disclosure-closed !important;">Vencido el plazo sin que el Cliente haya completado el pago, la suma entregada como anticipo se transformará en un Bono por ese mismo valor, que será redimible en productos y accesorios comercializados por NIKKEN.</li>
                        <li style="list-style-type:   disclosure-closed !important;">NIKKEN notificará al Cliente que el Bono se encuentra a su disposición mediante el envío de cualquier mensaje al teléfono y/o dirección electrónica suministrados en su registro.</li>
                        <li style="list-style-type:   disclosure-closed !important;">NIKKEN hará devoluciones de dinero al Cliente en caso de solicitarse por medio escrito para lo cual se tendrá en cuenta una penalidad del 10% del valor abonado a la fecha.</li>
                        <li style="list-style-type:   disclosure-closed !important;">Dichos valores serán personales e intransferibles.</li>
                    </ul>
                </p>
                <p>NIKKEN Latinoamérica y sus representaciones se reservan la interpretación de este beneficio.</p>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
            </div>
        </div>

        <footer class="page-footer footer footer-static footer-dark cyan gradient-shadow navbar-border navbar-shadow">
            <div class="footer-copyright">
                <div class="container"><span>&copy; {{Date('Y')}} | <a href="javascript:void(0)">MyNikken</span><span class="right hide-on-small-only">NIKKEN LATINOAMÉRICA</span></div>
            </div>
        </footer>

        <script src="{{ asset('materialize/js/vendors.min.js') }}"></script>
        <script src="{{ asset('materialize/js/plugins.min.js') }}"></script>
        <script src="{{ asset('materialize/js/search.min.js') }}"></script>
        <script src="{{ asset('materialize/js/custom/custom-script.min.js') }}"></script>
        <script src="{{ asset('materialize/js/scripts/customizer.min.js') }}"></script>
        <script src="{{ asset('materialize/vendors/data-tables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('materialize/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('materialize/vendors/data-tables/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
        <script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
        <script src="{{ asset('materialize/js/scripts/advance-ui-modals.min.js') }}"></script>
        <script>
            function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
                try {
                    if(amount == '.00'){
                        amount = 0;
                    }
                    decimalCount = Math.abs(decimalCount);
                    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;
                    const negativeSign = amount < 0 ? "-" : "";
                    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                    let j = (i.length > 3) ? i.length % 3 : 0;
                    return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
                }
                catch (e) {
                    console.log(e)
                }
            };

            function miestatus(){
                $("#miestatus").DataTable({
                    responsive: !0,
                    destroy: true,
                    ajax: '/MyAlcacniaData?associateid=' + $("#sap_code").val(),
                    columns: [
                        { data: 'AssociateName', className: 'text-center' },
                        {
                            data: 'VC',
                            className: 'text-center',
                            render: function(data, type, row){
                                var html = '<a href="#orderDetailView" class="waves-effect waves-light modal-trigger btn cyan box-shadow-none border-round mr-1 mb-1" onclick="getDetailOrder(' + row.OrderNum + ')">detalles</a>';
                                return html;
                            }
                        },
                        {
                            data: 'Pais', className: 'text-center',
                            render: function(data, type, row){
                                if(row.PlazosPendientes <= 0){
                                    return "Pagada";
                                }
                                else{
                                    return "Abierta";
                                }
                            }
                        },
                        { data: 'FechaPrimerPago', className: 'text-center' },
                        { data: 'OrderNum', className: 'text-center' },
                        { data: 'NumPlazos', className: 'text-center' },
                        { data: 'PlazosPagados', className: 'text-center' },
                        { data: 'PlazosPendientes', className: 'text-center' },
                        {
                            data: 'ValorTotal',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.ValorTotal);
                            }
                        },
                        {
                            data: 'ValorAbonos',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.ValorAbonos);
                            }
                        },
                        {
                            data: 'ValorSaldo',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.ValorSaldo);
                            }
                        },
                        { data: 'Puntos', className: 'text-center' },
                        { data: 'VC', className: 'text-center' },
                    ],
                    dom: '<"row"<"col s12 m12 l12 xl12"<"row"<"col s12 m12 l6 xl6"B><"col s12 m12 l6 xl6"f> > ><"m12"rt> <"m12"<"row"<"m5 mb-md-0 mb-5"i><"m7"p>>> >',
                    buttons: {
                        buttons: [
                            {
                                extend: 'excel', 
                                className: 'waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1 mt-2', 
                                text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
                            },
                        ]
                    },
                    language: {
                        "paginate": {
                            "previous": "Anterior",
                            "next": "Siguiente"
                        },
                        "search": "Buscar" ,
                        "searchPlaceholder": "Buscar...",
                        "info": "&nbsp;&nbsp;&nbsp; Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "loadingRecords": '<center><div class="box">Cargando registros...</div></center>',
                        'sEmptyTable': 'No se encontraron registros',
                        "sZeroRecords": "No se encontraron coincidencias",
                        "sInfoEmpty": "",
                    }
                });
            }
            miestatus();

            $("#genealogyPerTipe").val(1);
            function MyAlcacniaDataRed(type){
                $("#estatusRed").DataTable({
                    responsive: !0,
                    destroy: true,
                    ajax: '/MyAlcacniaDataRed?associateid=' + $("#sap_code").val() + '&type=' + type,
                    columns: [
                        { data: 'Associateid', className: 'text-center' },
                        { data: 'AssociateName', className: 'text-center' },
                        {
                            data: 'VC',
                            className: 'text-center',
                            render: function(data, type, row){
                                var html = '<a href="#orderDetailView" class="waves-effect waves-light modal-trigger btn cyan box-shadow-none border-round mr-1 mb-1" onclick="getDetailOrder(' + row.OrderNum + ')">detalles</a>';
                                return html;
                            }
                        },
                        {
                            data: 'Pais', className: 'text-center',
                            render: function(data, type, row){
                                if(row.PlazosPendientes <= 0){
                                    return "Pagada";
                                }
                                else{
                                    return "Abierta";
                                }
                            }
                        },
                        { data: 'OrderNum', className: 'text-center' },
                        { data: 'NumPlazos', className: 'text-center' },
                        { data: 'PlazosPagados', className: 'text-center' },
                        { data: 'PlazosPendientes', className: 'text-center' },
                        {
                            data: 'ValorTotal',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.ValorTotal);
                            }
                        },
                        {
                            data: 'ValorAbonos',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.ValorAbonos);
                            }
                        },
                        {
                            data: 'ValorSaldo',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.ValorSaldo);
                            }
                        },
                        { data: 'Period_Inicio', className: 'text-center' },
                        { data: 'Period_Cierre', className: 'text-center' },
                        { data: 'Puntos', className: 'text-center' },
                        { data: 'VC', className: 'text-center' },
                    ],
                    dom: '<"row"<"col s12 m12 l12 xl12"<"row"<"col s12 m12 l6 xl6"B><"col s12 m12 l6 xl6"f> > ><"m12"rt> <"m12"<"row"<"m5 mb-md-0 mb-5"i><"m7"p>>> >',
                    buttons: {
                        buttons: [
                            {
                                extend: 'excel', 
                                className: 'waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1 mt-2', 
                                text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
                            },
                        ]
                    },
                    language: {
                        "paginate": {
                            "previous": "Anterior",
                            "next": "Siguiente"
                        },
                        "search": "Buscar" ,
                        "searchPlaceholder": "Buscar...",
                        "info": "&nbsp;&nbsp;&nbsp; Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "loadingRecords": '<center><div class="box">Cargando registros...</div></center>',
                        'sEmptyTable': 'No se encontraron registros',
                        "sZeroRecords": "No se encontraron coincidencias",
                        "sInfoEmpty": "",
                    }
                });
            }

            function getDetailOrder(ordernum){
                $("#DetailOrder").DataTable({
                    responsive: !0,
                    destroy: true,
                    ajax: '/MyAlcacniaDataDetail?ordernum=' + ordernum,
                    columns: [
                        { data: 'DocSale', className: 'text-center' },
                        { data: 'ItemCode', className: 'text-center' },
                        { data: 'ItemName', className: 'text-center' },
                        { data: 'Quantity', className: 'text-center' },
                        {
                            data: 'UnitPrice',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.UnitPrice);
                            }
                        },
                        {
                            data: 'U_Puntos',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.U_Puntos, 0);
                            }
                        },
                        {
                            data: 'U_vol_calc',
                            className: 'text-center',
                            render: function(data, type, row){
                                return formatMoney(row.U_vol_calc, 0);
                            }
                        },
                    ],
                    dom: '<"row"<"col s12 m12 l12 xl12"<"row"<"col s12 m12 l6 xl6"B><"col s12 m12 l6 xl6"f> > ><"m12"rt> <"m12"<"row"<"m5 mb-md-0 mb-5"i><"m7"p>>> >',
                    buttons: {
                        buttons: [
                            {
                                extend: 'excel', 
                                className: 'waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1 mt-2', 
                                text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
                            },
                        ]
                    },
                    language: {
                        "paginate": {
                            "previous": "Anterior",
                            "next": "Siguiente"
                        },
                        "search": "Buscar" ,
                        "searchPlaceholder": "Buscar...",
                        "info": "&nbsp;&nbsp;&nbsp; Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "loadingRecords": '<center><div class="box">Cargando registros...</div></center>',
                        'sEmptyTable': 'No se encontraron registros',
                        "sZeroRecords": "No se encontraron coincidencias",
                        "sInfoEmpty": "",
                    }
                });
            }

            $("#MyAlcacnciaRed").hide();
            function showMyAlcancia(){
                $("#MyAlcacncia").show(1000);
                $("#MyAlcacnciaRed").hide(1000);
                $("#myAlcacnciaRedbtn").removeClass('active');
                $("#myAlcacnciaRedbtn").parent().removeClass('active');
                $("#myAlcacnciabtn").addClass('active');
                $("#myAlcacnciabtn").parent().addClass('active');

                miestatus();
            }

            function showMyAlcanciaRed(){
                $("#MyAlcacncia").hide(1000);
                $("#MyAlcacnciaRed").show(1000);
                $("#myAlcacnciabtn").removeClass('active');
                $("#myAlcacnciabtn").parent().removeClass('active');
                $("#myAlcacnciaRedbtn").addClass('active');
                $("#myAlcacnciaRedbtn").parent().addClass('active');

                MyAlcacniaDataRed(1);
            }
        </script>
        <script type="text/javascript">
            window._mfq = window._mfq || [];
            (function() {
              var mf = document.createElement("script");
              mf.type = "text/javascript"; mf.defer = true;
              mf.src = "//cdn.mouseflow.com/projects/ff111b2f-eb0a-4c46-9ff8-86162a2fcf39.js";
              document.getElementsByTagName("head")[0].appendChild(mf);
            })();
        </script>
    </body>
</html>