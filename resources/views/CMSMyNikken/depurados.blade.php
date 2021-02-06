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

    <div class="row layout-spacing">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">
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
                    <div class="form-group mb-4">
                        <label for="correocliente">depurar por correo:</label>
                        <input type="text" class="form-control-rounded form-control" id="correocliente" name="correocliente">
                    </div>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2" onclick="validaClienteAntes()">Validar</button>
                    <button class="btn btn-gradient-dark btn-rounded mb-4 mr-2">Depurar</button>

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
                                </tr>
                            </thead>
                        </table>
                    </div>
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
                    ],
                    language: {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    }
                });
            }
        }
    </script>
@endsection