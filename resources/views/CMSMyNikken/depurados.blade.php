@extends('CMSMyNikken.layout')

@section('container')
    <div class="page-header">
        <div class="page-title">
            <h3>Manejo de tickets TV OV</h3>
            <div class="crumbs">
                <ul id="breadcrumbs" class="breadcrumb">
                    <li><a href="javascript:void(0)"><i class="flaticon-home-fill"></i></a></li>
                    <li class="active"><a href="javascript:void(0)">Manejos TV OV</a></li>
                </ul>
            </div>
        </div>
    </div>
    <style>
        .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 0 !important;
        }
    </style>
    <div class="row layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            {{ csrf_field() }}
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Depurar Correos (clientes)</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col col-xl-4 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="correocliente">depurar por correo:</label>
                                <input type="text" class="form-control-rounded form-control" id="correocliente" name="correocliente">
                            </div>
                        </div>
                        <div class="col col-xl-4 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="correocliente">nuevo correo de cliente:</label>
                                <input type="text" class="form-control-rounded form-control" id="ncorreocliente" name="ncorreocliente">
                            </div>
                        </div>
                        <div class="col col-xl-4 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="correocliente">sap_code_sponsor de cliente:</label>
                                <input type="text" class="form-control-rounded form-control" id="sap_code_sponsor" name="sap_code_sponsor">
                            </div>
                        </div>
                        <div class="col col-xl-4 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="correocliente">Nuevo país de cliente:</label>
                                <input type="text" class="form-control-rounded form-control" id="nPaisCliente" name="nPaisCliente">
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="validaClienteAntes()">Validar</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="depurarCliente()">Depurar</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmsRestPasswordCliente()">restaurar password</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmschangeMailCliente()">Cambiar correo a cliente</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmschangeCountryCliente()">Cambiar país a cliente</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmschangeActiveCliente()">Activar cliente</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmschangeInActiveCliente()">Inactivar cliente</button>

                    <div class="table-responsive mb-4">
                        <table id="validaclienteAntes" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="color: gray" class="text-center">country_id</th>
                                    <th style="color: gray" class="text-center">email</th>
                                    <th style="color: gray" class="text-center">name</th>
                                    <th style="color: gray" class="text-center">last_name</th>
                                    <th style="color: gray" class="text-center">status</th>
                                    <th style="color: gray" class="text-center">locked</th>
                                    <th style="color: gray" class="text-center">sap_code_sponsor</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="table-responsive mb-4">
                        <table id="validaclienteDespues" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="color: gray" class="text-center">country_id</th>
                                    <th style="color: gray" class="text-center">email</th>
                                    <th style="color: gray" class="text-center">name</th>
                                    <th style="color: gray" class="text-center">last_name</th>
                                    <th style="color: gray" class="text-center">status</th>
                                    <th style="color: gray" class="text-center">locked</th>
                                    <th style="color: gray" class="text-center">sap_code_sponsor</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            {{ csrf_field() }}
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Cambiar correos CI / CLUB</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col col-xl-3 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="sap_code">Código CLUB / CI:</label>
                                <input type="text" class="form-control-rounded form-control" id="sap_code" name="sap_code">
                            </div>
                        </div>
                        <div class="col col-xl-3 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="newCICBMail">Nuevo correo CLUB / CI:</label>
                                <input type="text" class="form-control-rounded form-control" id="newCICBMail" name="newCICBMail">
                            </div>
                        </div>
                        <div class="col col-xl-3 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="newCICBnombre">Nuevo nombre CLUB / CI:</label>
                                <input type="text" class="form-control-rounded form-control" id="newCICBnombre" name="newCICBnombre">
                            </div>
                        </div>
                        <div class="col col-xl-3 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="newCICBsponsor">Nuevo sponsor CLUB / CI:</label>
                                <input type="text" class="form-control-rounded form-control" id="newCICBsponsor" name="newCICBsponsor">
                            </div>
                        </div>
                        <div class="col col-xl-3 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="newCICBrank">Nuevo rango CI:</label>
                                <input type="text" class="form-control-rounded form-control" id="newCICBrank" name="newCICBrank">
                            </div>
                        </div>
                        <div class="col col-xl-3 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="newCICBrank">Nuevo teléfono CI:</label>
                                <input type="text" class="form-control-rounded form-control" id="newCICTel" name="newCICTel">
                            </div>
                        </div>
                        <div class="col col-xl-3 col-md- col-sm-12 col-12">
                            <div class="form-group mb-4">
                                <label for="newCICBrank">Nuevo país CI:</label>
                                <input type="text" class="form-control-rounded form-control" id="ncountrycbci" name="ncountrycbci">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="valida_CLUBCI()">Validar</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsActivaCICB()">Activar CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsInactivaCICB()">Inactivar CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsDepurarCICB()">Depuara CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsCambiasponsorCICB()">Cambiar patrocinador CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsCambiarMailCICLUB()">Cambiar correo CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsCambiaNombreCICB()">Cambiar nombre CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsresetPassCICB()">Restaurar pass CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsChangeRango()">Actualizar rango CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmsChangeTel()">Actualizar Teléfono CI / CLUB</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="cmschangeCountryCICB()">Actualizar País CI / CLUB</button>

                    <div class="table-responsive mb-4">
                        <h5>User</h5>
                        <table id="validaCICBUsers" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="color: gray" class="text-center">country_id</th>
                                    <th style="color: gray" class="text-center">email</th>
                                    <th style="color: gray" class="text-center">name</th>
                                    <th style="color: gray" class="text-center">last_name</th>
                                    <th style="color: gray" class="text-center">sap_code</th>
                                    <th style="color: gray" class="text-center">sap_code_sponsor</th>
                                    <th style="color: gray" class="text-center">status</th>
                                    <th style="color: gray" class="text-center">locked</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <h5>Contracts</h5>
                    <div class="table-responsive mb-4">
                        <table id="validaCICBContracts" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="color: gray" class="text-center">country</th>
                                    <th style="color: gray" class="text-center">code</th>
                                    <th style="color: gray" class="text-center">sponsor</th>
                                    <th style="color: gray" class="text-center">email</th>
                                    <th style="color: gray" class="text-center">status</th>
                                    <th style="color: gray" class="text-center">name</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <h5>Control_ci</h5>
                    <div class="table-responsive mb-4">
                        <table id="validaCICBControl_ci" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="color: gray" class="text-center">pais</th>
                                    <th style="color: gray" class="text-center">estatus</th>
                                    <th style="color: gray" class="text-center">tipo</th>
                                    <th style="color: gray" class="text-center">codigo</th>
                                    <th style="color: gray" class="text-center">nombre</th>
                                    <th style="color: gray" class="text-center">rango</th>
                                    <th style="color: gray" class="text-center">codigop</th>
                                    <th style="color: gray" class="text-center">correo</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Envio de Correos - Reto SER PRO</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="form-group mb-4">
                        <label for="alertMsg">Ganadores</label>
                        <textarea class="form-control-rounded form-control" id="codesAdvances" name="codesAdvances" rows="6" lang="es"></textarea>
                    </div>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmsObtenerCodesSerPro()">Obtener códigos de avance</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmsSendMailsSerPro()">Enviar Correos</button>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>depurtar correctamente</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="form-group mb-4">
                        <label for="sap_code_depuara_bien">sap_code a depurtar correctamente se puran 500 códigos por ejecución)</label>
                        <textarea class="form-control-rounded form-control" id="sap_code_depuara_bien" name="sap_code_depuara_bien" rows="6" lang="es"></textarea>
                    </div>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmsDepuradosActivos()">Obtener códigos depuarados mal</button>
                    <button class="btn btn-gradient-danger btn-rounded mb-4 mr-2" onclick="cmsDepurarActivos()">depuras bien</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function validaClienteAntes(){
            var correo = $("#correocliente").val();
            if(correo.trim() != ''){
                if(correo.includes('@') == true){
                    $("#validaclienteAntes").dataTable({
                        lengthChange: false,
                        ordering: false,
                        info: false,
                        destroy: true,
                        paging: false,
                        searching: false,
                        ajax: '/validaClienteAntes?correo=' + correo,
                        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                        columns: [
                            { data: 'country_id', className: 'text-center' },
                            { data: 'email', className: 'text-center' },
                            { data: 'name', className: 'text-center' },
                            { data: 'last_name', className: 'text-center' },
                            { data: 'status', className: 'text-center' },
                            { data: 'locked', className: 'text-center' },
                            { data: 'sap_code_sponsor', className: 'text-center' },
                        ],
                        language: {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                        }
                    });
                }
                else{
                    swal({
                        title: 'Ups',
                        html:'por seguridad coloca solo un correo',
                        type: 'error',
                        padding: '2em',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                }
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un correo',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function depurarCliente(){
            var correo = $("#correocliente").val();
            if(correo.trim() != ''){
                if(correo.includes('@') == true){
                    $.ajax({
                        type: "get",
                        url: "/cmsdepuracliente",
                        data: { correo: correo },
                        success: function (response) {
                            if(response == 1){
                                swal({
                                    title: 'Ok',
                                    html:'El cliente ' + correo + ' ha sido depurado',
                                    type: 'success',
                                    padding: '2em',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                })
                            }
                            validaclienteDespues();
                        }
                    });
                }
                else{
                    swal({
                        title: 'Ups',
                        html:'por seguridad coloca solo un correo',
                        type: 'error',
                        padding: '2em',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                }
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un correo',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function validaclienteDespues(){
            var correo = $("#correocliente").val();
            if(correo.trim() != ''){
                $("#validaclienteDespues").dataTable({
                    lengthChange: false,
                    ordering: false,
                    info: false,
                    destroy: true,
                    paging: false,
                    searching: false,
                    ajax: '/validaClienteAntes?correo=' + correo,
                    dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                    columns: [
                        { data: 'country_id', className: 'text-center' },
                        { data: 'email', className: 'text-center' },
                        { data: 'name', className: 'text-center' },
                        { data: 'last_name', className: 'text-center' },
                        { data: 'status', className: 'text-center' },
                        { data: 'locked', className: 'text-center' },
                        { data: 'sap_code_sponsor', className: 'text-center' },
                    ],
                    language: {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    }
                });
            }
        }

        function valida_CLUBCI(){
            validaCICBUsers();
            validaCICBContracts();
            validaCICBControl_ci();
        }

        function validaCICBUsers(){
            var sap_code = $("#sap_code").val();
            var correo = $("#newCICBMail").val();
            $("#validaCICBUsers").dataTable({
                lengthChange: false,
                ordering: false,
                info: false,
                destroy: true,
                paging: false,
                searching: false,
                ajax: '/validaCICBUsers?sap_code=' + sap_code + '&mail=' + correo,
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                columns: [
                    { data: 'country_id', className: 'text-center' },
                    { data: 'email', className: 'text-center' },
                    { data: 'name', className: 'text-center' },
                    { data: 'last_name', className: 'text-center' },
                    { data: 'sap_code', className: 'text-center' },
                    { data: 'sap_code_sponsor', className: 'text-center' },
                    { data: 'status', className: 'text-center' },
                    { data: 'locked', className: 'text-center' },
                ],
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        }

        function validaCICBContracts(){
            var sap_code = $("#sap_code").val();
            var correo = $("#newCICBMail").val();
            $("#validaCICBContracts").dataTable({
                lengthChange: false,
                ordering: false,
                info: false,
                destroy: true,
                paging: false,
                searching: false,
                ajax: '/validaCICBContracts?sap_code=' + sap_code + '&mail=' + correo,
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                columns: [
                    { data: 'country', className: 'text-center' },
                    { data: 'code', className: 'text-center' },
                    { data: 'sponsor', className: 'text-center' },
                    { data: 'email', className: 'text-center' },
                    { data: 'status', className: 'text-center' },
                    { data: 'name', className: 'text-center' },
                ],
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        }

        function validaCICBControl_ci(){
            var sap_code = $("#sap_code").val();
            var correo = $("#newCICBMail").val();
            $("#validaCICBControl_ci").dataTable({
                lengthChange: false,
                ordering: false,
                info: false,
                destroy: true,
                paging: false,
                searching: false,
                ajax: '/validaCICBControl_ci?sap_code=' + sap_code + '&mail=' + correo,
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                columns: [
                    { data: 'pais', className: 'text-center' },
                    { data: 'estatus', className: 'text-center' },
                    { data: 'tipo', className: 'text-center' },
                    { data: 'codigo', className: 'text-center' },
                    { data: 'nombre', className: 'text-center' },
                    { data: 'rango', className: 'text-center' },
                    { data: 'codigop', className: 'text-center' },
                    { data: 'correo', className: 'text-center' },
                ],
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        }

        function cmsCambiarMailCICLUB(){
            var correo = $("#newCICBMail").val();
            var sap_code = $("#sap_code").val();
            if(correo.trim() != '' && sap_code.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsCambiarMailCICLUB",
                    data: { sap_code: sap_code, correo: correo },
                    success: function (response) {
                        if(response == 'change'){
                            swal({
                                title: 'Ok',
                                html: 'Correo cambiado correctamente',
                                type: 'success',
                                padding: '2em',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            })
                            valida_CLUBCI();
                        }
                        else{
                            swal({
                                title: 'Ok',
                                html: 'El correo ya esta asignado al sap_code: ' + response,
                                type: 'error',
                                padding: '2em',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            })
                        }
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un Código y verifica el nuevo mail',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsActivaCICB(){
            var sap_code = $("#sap_code").val();
            if(sap_code.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsActivaCICB",
                    data: { sap_code: sap_code },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html: 'El sap_code: ' + sap_code + ' ha sido Activado correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        valida_CLUBCI();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un Código',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsInactivaCICB(){
            var sap_code = $("#sap_code").val();
            if(sap_code.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsInactivaCICB",
                    data: { sap_code: sap_code },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html: 'El sap_code: ' + sap_code + ' ha sido inactivado correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        valida_CLUBCI();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un Código',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsCambiaNombreCICB(){
            var sap_code = $("#sap_code").val();
            var nombre = $("#newCICBnombre").val();
            if(sap_code.trim() != '' && nombre.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsCambiaNombreCICB",
                    data: { sap_code: sap_code, nombre: nombre },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html: 'se cambio el nombre al sap_code: ' + sap_code + ' correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        valida_CLUBCI();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Valida el sap_code y el nombre nuevo',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsCambiasponsorCICB(){
            var sap_code = $("#sap_code").val();
            var sponsor = $("#newCICBsponsor").val();
            if(sap_code.trim() != '' && sponsor.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsCambiasponsorCICB",
                    data: { sap_code: sponsor, sponsor: sponsor },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html: 'se cambio el sponsor al sap_code: ' + sap_code + ' correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        valida_CLUBCI();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Valida el sap_code y el código del nuevo sposnor',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }
        
        function cmsDepurarCICB(){
            var sap_code = $("#sap_code").val();
            if(sap_code.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsDepurarCICB",
                    data: { sap_code: sap_code },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html:'El sap_code: ' + sap_code + ' ha sido depurado correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        validaclienteDespues();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un correo',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsRestPasswordCliente(){
            var correo = $("#correocliente").val();
            if(correo.trim() != ''){
                if(correo.includes('@') == true){
                    $.ajax({
                        type: "get",
                        url: "/cmsRestPasswordCliente",
                        data: { correo: correo },
                        success: function (response) {
                            if(parseInt(response) == 1){
                                swal({
                                    title: 'Ok',
                                    html:'Se restauro la contraseña del CLIENTE: ' + correo,
                                    type: 'success',
                                    padding: '2em',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                })
                            }
                            validaclienteDespues();
                        }
                    });
                }
                else{
                    swal({
                        title: 'Ups',
                        html:'por seguridad coloca solo un correo',
                        type: 'error',
                        padding: '2em',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                }
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un correo',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsresetPassCICB(){
            var sap_code = $("#sap_code").val();
            if(sap_code.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsresetPassCICB",
                    data: { sap_code: sap_code },
                    success: function (response) {
                        if(parseInt(response) == 1){
                            swal({
                                title: 'Ok',
                                html:'Se restauro la contraseña del CI / CLUB: ' + sap_code,
                                type: 'success',
                                padding: '2em',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            })
                        }
                        validaclienteDespues();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un correo',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsChangeRango(){
            var sap_code = $("#sap_code").val();
            var nRango = $("#newCICBrank").val();
            if(sap_code.trim() != '' && nRango.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsChangeRango",
                    data: { sap_code: sap_code, nRango: nRango },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html:'se actualizó el rango al sap_code: ' + sap_code + ' correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        valida_CLUBCI();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'valida el nuevo rango',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmsChangeTel(){
            var sap_code = $("#sap_code").val();
            var nTel = $("#newCICTel").val();
            if(sap_code.trim() != '' && nTel.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmsChangeTel",
                    data: { sap_code: sap_code, tel: nTel },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html:'se actualizó el numero de contacto al sap_code: ' + sap_code + ' correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        valida_CLUBCI();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'valida el nuevo rango',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmschangeMailCliente(){
            var correo = $("#correocliente").val();
            var ncorreo = $("#ncorreocliente").val();
            var sap_code_sponsor = $("#sap_code_sponsor").val();
            if(correo.trim() != '' && ncorreo.trim() != '' && sap_code_sponsor.trim() != ''){
                if(correo.includes('@') == true && ncorreo.includes('@')){
                    $.ajax({
                        type: "get",
                        url: "/cmschangeMailCliente",
                        data: { correo: correo, ncorreo: ncorreo, sap_code_sponsor: sap_code_sponsor },
                        success: function (response) {
                            if(response == 1){
                                swal({
                                    title: 'Ok',
                                    html:'El correo del cliente ' + correo + ' ha sido cambiado',
                                    type: 'success',
                                    padding: '2em',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                })
                            }
                            validaclienteDespues();
                        }
                    });
                }
                else{
                    swal({
                        title: 'Ups',
                        html:'por seguridad llena los campos para actualizar',
                        type: 'error',
                        padding: '2em',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                }
            }
            else{
                swal({
                    title: 'Ups',
                    html:'por seguridad llena los campos para actualizar',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        $("#codesAdvances").val('');
        function cmsObtenerCodesSerPro(){
            $("#codesAdvances").val('');
            $.ajax({
                type: "get",
                url: "/cmsObtenerCodesSerPro",
                success: function (response) {
                    $("#codesAdvances").val(response);
                }
            });
        }

        function cmsSendMailsSerPro(){
            var codigorango = $("#codesAdvances").val();
            codigorango = codigorango.split(',');
            for(x = 0; x < codigorango.length; x++){
                $.ajax({
                    type: "get",
                    url: "/cmsSendMailsSerPro",
                    data: { codigorango: codigorango[x] },
                    success: function (response) {
                        console.log(response);
                    }
                });
            }
        }

        function cmschangeCountryCliente(){
            var correo = $("#correocliente").val();
            if(correo.trim() != ''){
                if(correo.includes('@') == true){
                    $.ajax({
                        type: "get",
                        url: "/cmschangeCountryCliente",
                        data: { correo: correo },
                        success: function (response) {
                            if(response == 1){
                                swal({
                                    title: 'Ok',
                                    html:'se cambio el país del cliente ' + correo + ' correctamente',
                                    type: 'success',
                                    padding: '2em',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                })
                            }
                            validaclienteDespues();
                        }
                    });
                }
                else{
                    swal({
                        title: 'Ups',
                        html:'por seguridad coloca solo un correo',
                        type: 'error',
                        padding: '2em',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })
                }
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un correo',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        function cmschangeCountryCICB(){
            var sap_code = $("#sap_code").val();
            var ncountry = $("#ncountrycbci").val();
            if(sap_code.trim() != ''){
                $.ajax({
                    type: "get",
                    url: "/cmschangeCountryCICB",
                    data: { sap_code: sap_code, ncountry: ncountry },
                    success: function (response) {
                        swal({
                            title: 'Ok',
                            html: 'se cambio el país del sap_code: ' + sap_code + ' correctamente',
                            type: 'success',
                            padding: '2em',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        })
                        valida_CLUBCI();
                    }
                });
            }
            else{
                swal({
                    title: 'Ups',
                    html:'Coloca un Código',
                    type: 'error',
                    padding: '2em',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                })
            }
        }

        $("#sap_code_depuara_bien").val('');
        function cmsDepuradosActivos(){
            $("#sap_code_depuara_bien").val('');
            $.ajax({
                type: "get",
                url: "/cmsDepuradosActivos",
                success: function (response) {
                    $("#sap_code_depuara_bien").val(response);
                }
            });
        }


        function cmsDepurarActivos(){
            var codigorango = $("#sap_code_depuara_bien").val();
            codigorango = codigorango.split(',');
            for(x = 0; x < codigorango.length; x++){
                $.ajax({
                    type: "get",
                    url: "/cmsDepurarActivos",
                    data: { sap_code: codigorango[x] },
                    success: function (response) {
                    }
                });
            }
        }
    </script>
@endsection