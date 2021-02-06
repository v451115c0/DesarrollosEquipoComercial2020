<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>

<!-- CSS -->
<link href="{{ asset('../css/style.css') }}" rel="stylesheet">
<link href="{{ asset('../css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('../css/main.css?v=1.1.7') }}" rel="stylesheet">
<link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css">
<!-- Custom js -->




    <h3 class="text-center"><img src="{{ asset('../img/list.png') }}"  width="10%" ></img><br/>RMA </h3> 
    <hr style="border-top: 2px solid #333 !important; border-bottom: 2px solid #333 !important; border-left:none !important; border-right:none !important; height: 6px !important; width:50% !important; ">   
    
    <div class="row">  
        <div class="col-lg-2"></div>
        
        <div class="col-lg-8">
            <span class="pull-right padding-right-10">
                <a href="rma/create" class="btn  btn-xs" style="background-color: #28a745;color: white;width: 100%;
    height: 30;margin-right: 30px;margin-left: -10px;">Crear Solicitud</a>
            </span>
            <br><br><br>
             <!-- if a user message -->
         @if(Session::has('notice'))
                <div class="alert {{ Session::get('alertClass') }} alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ Session::get('alertType') }}</strong> {{ Session::get('notice') }}
                </div>
            @endif
        <!-- /. if a user message -->

              <!-- card block -->
                <div class="card-block">

                    <!-- Validando si existen registros -->
                    @if($rmas->count())
                        <div class="table-responsive">
                            <h3>Listado de solicitudes creadas</h3>
                            <br>
                           
                            <table class="table table-striped table-hover table-hover ">
                                <thead class="table-orange" style="background-color: #28a745;color: white;">
                                    <tr>
                                        <th class="text-center">
                                            # RMA
                                        </th>
                                        <th class="text-center">
                                            # Fáctura
                                        </th>
                                        <th class="text-center">
                                            Fecha de Creación
                                        </th>
                                        <th class="text-center">
                                            Estatus
                                        </th>
                                        <th class="text-center">
                                            Detalle
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Mostrando registros-->
                                    @foreach($rmas as $item)
                                        <tr>
                                            <td class="text-center">
                                                {{ $item->num_rma }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->num_fact_compra }}
                                            </td>
                                            <td class="text-center">

                                                {{ $item->fecha_recibido }}
                                            </td>
                                            <td class="text-center">
                                              <!-- Validando Status -->
                                              @if($item->estatus == 'Cerrado')
                                                <span class="badge badge-pill badge-danger">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'Recepcion')
                                                <span class="badge badge-pill badge-primary">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'Entrega Presencial')
                                                <span class="badge badge-pill badge-warning">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'Enviado')
                                                <span class="badge badge-pill badge-success">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'Aceptado')
                                                <span class="badge badge-pill badge-success">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'Rechazado')
                                                <span class="badge badge-pill badge-danger">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'BackOrder')
                                                <span class="badge badge-pill badge-danger">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'RMA NO Recibido')
                                                <span class="badge badge-pill badge-success">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'Autorizado')
                                                <span class="badge badge-pill badge-success">{{ $item->estatus }}</span>
                                              @elseif($item->estatus == 'En Reparacion')
                                                <span class="badge badge-pill badge-info">{{ $item->estatus }}</span>
                                              @else
                                                <span class="badge badge-pill badge-secondary">{{ $item->estatus }}</span>
                                              @endif
                                              <!-- /. Validacion -->
                                            </td>
                                            <td class="text-center">
                                               <a href="#"  data-rma="{{ $item->num_rma}}" class="open_detail">
                                                  <i class="fa fa-list-alt" style="color: red;" ></i> 
                                               </a>
                                                  
                                            </td>
                                                                               
                                        </tr>
                                    @endforeach
                                    <!-- /. Mostrando registros-->
                                </tbody>
                            </table>
                        </div>

                        <!-- total de registros -->
                        <div class="pull-left">
                            <h6>
                                <span class="small">Registros:
                                </span> <span class="badge badge-pill badge-default">{{$rmas->total()}}</span>
                            </h6>
                        </div>
                        <!-- /. total de registros -->

                        <!-- pagination -->
                        <div class="pull-right">
                            {!! $rmas->appends(
                                [
                                    'id' => Request::input('id'),
                                    'code' => Request::input('code'),
                                    'reward' => Request::input('reward'),
                                    'status' => Request::input('status'),
                                ]
                            )->render() 
                            !!}
                        </div>
                        <!-- /. pagination -->

                    @else
                         <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Mensaje: </strong> Estimado asesor, usted no cuenta con algún proceso de garantía.
                        </div><br>
                    @endif
                    <!-- /. Validación de registros -->
                </div>
                <!-- /. card block -->
        </div>
        <div class="col-lg-2"></div>
    </div>

<script src="{{ asset('../js/libs/jquery.min.js') }}"></script>
<script src="http://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<script src="{{ asset('../js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('../js/libs/jquery.validate.min.js') }}"></script>
<script src="{{ asset('../js/libs/messages_es.js') }}"></script>
<script src="{{ asset('../js/libs/select2.min.js') }}"></script>
<script src='jquery-1.8.3.min.js'></script>
<script src='jquery.elevatezoom.js'></script>
<!-- JS Nikken -->
<script src="{{ asset('../js/rma/rma.js?v=1.5.2') }}"></script>
<!-- Modal del detalle-->



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="detail_rma">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #28a745;color: white;"> 
         <h4 class="modal-title">Detalles RMA</h4>
      </div>
      <div class="modal-body">
        <!-- Form add VoBo -->
        <div align="center">
            <fieldset>
                <div class="row col-lg-12">  
                    <div class="col-lg-3">  
                        <img src="{{ asset('../img/1536771114logo.png') }}"  width="50%" ></img>
                    </div> 
                    <div class="col-lg-9"> 
                        <b><H4>NIKKEN LATINOAMÉRICA, S DE RL DE CV</H4></b>
                        <br>
                        <p> 
                            Insurgentes Sur 826 1er. piso Col. del Valle Del. Benito Juárez , Ciudad de México C.P. 03100 México
                            <br>    
                            RFC: NLA040617M26 TEL: (52 55) 58649070 Email: servicio.mex@nikkenlatam.com
                        </p>
                    </div> 
                    
                </div>
                <br>
                <div class="form-group border-bottom-grey margin-bottom-30">
                            <h5>
                                <strong>
                                   Recepción de producto en garantía
                                </strong>  
                            </h5>
                </div>
                <div class="row col-lg-12">  
                    <div class="form-group col-md-3">
                        <label for="fecha_init"><b>Fecha Recibido:</b></label>
                        <input type="text" name="fecha_init" id="fecha_init" class="form-control form-control-sm"  value="" readonly="true"/>
                       
                    </div> 
                    <div class="form-group col-md-3">
                        <label for="rma_number"><b># RMA:</b></label>
                        <input type="text" name="rma_number" id="rma_number" class="form-control form-control-sm"  value="" readonly="true"/>
                       
                    </div> 
                     <div class="form-group col-md-3">
                        <label for="bill_sap"><b># Factura SAP:</b></label>
                        <input type="text" name="bill_sap" id="bill_sap" class="form-control form-control-sm"  value="" readonly="true"/>
                       
                    </div> 
                    
                    <div class="form-group col-md-3">
                        <label for="date_bill_sap"><b>Fecha de factura SAP:</b></label>
                        <input type="text" name="date_bill_sap" id="date_bill_sap" class="form-control form-control-sm"  value="" readonly="true"/>
                       
                    </div> 
                     <div class="form-group col-md-6">
                        <label for="ab"><b># A.B:</b></label>
                        <input type="text" name="ab" id="ab" class="form-control form-control-sm"  value="" readonly="true"/>
                       
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="name_ab"><b>Nombre A.B:</b></label>
                        <input type="text" name="name_ab" id="name_ab" class="form-control form-control-sm"  value="" readonly="true"/>
                        
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="email_ab"><b>Correo A.B:</b></label>
                        <input type="text" name="email_ab" id="email_ab" class="form-control form-control-sm"  value="" readonly="true"/>
                       
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="email_ab_ad"><b>Correo adicional:</b></label>
                        <input type="text" name="email_ab_ad" id="email_ab_ad" class="form-control form-control-sm"  value="" readonly="true"/>
                        
                    </div>      
                </div>
                <br>
                <div class="form-group border-bottom-grey margin-bottom-30">
                    <h5>
                        <strong>
                            Identificación de producto
                        </strong>  
                    </h5>
                </div>
                <div class="row col-lg-12"> 
                    <div class="form-group col-md-4">
                        <label for="code"><b>Código:</b></label>
                        <input type="text" name="code" id="code" class="form-control form-control-sm"  value="" readonly="true"/>
                        <input type="hidden" name="country" id="country" class="form-control form-control-sm"  value="MEX" readonly="true"/>
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="description"><b>Descripción:</b></label>
                        <input type="text" name="description" id="description" class="form-control form-control-sm"  value="" readonly="true"/>
                        <input type="hidden" name="country" id="country" class="form-control form-control-sm"  value="MEX" readonly="true"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="amount"><b>Cantidad:</b></label>
                        <input type="text" name="amount" id="amount" class="form-control form-control-sm"  value="" readonly="true"/>
                        <input type="hidden" name="country" id="country" class="form-control form-control-sm"  value="MEX" readonly="true"/>
                    </div> 
                    <div class="form-group col-md-4">
                        <label for="status"><b>Estatus:</b></label>
                        <input type="text" name="status" id="status" class="form-control form-control-sm"  value="" readonly="true"/>
                        <input type="hidden" name="country" id="country" class="form-control form-control-sm"  value="MEX" readonly="true"/>
                    </div>  
                    <div class="form-group col-md-4">
                        <label for="type_defect"><b>Tipo de defecto:</b></label>
                        <input type="text" name="type_defect" id="type_defect" class="form-control form-control-sm"  value="" readonly="true"/>
                        <input type="hidden" name="country" id="country" class="form-control form-control-sm"  value="MEX" readonly="true"/>
                    </div>   
                </div>
            </fieldset>
        </div>
         <div class="panel-box">
                        <div class="form-group border-bottom-grey margin-bottom-30">
                            <h5>
                                <strong>
                                   Archivos Multimedia:
                                </strong>  
                            </h5>
                        </div>  
                        <div class="panel-box-main no-padding">
                            <!-- panel-box -->
                            <div class="panel-box-white">                   
                                <ul class="nav nav-tabs x3">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="images-tab" href="#images"  aria-selected="true" role="tab" data-toggle="pill">
                                        <h5><i class="fa fa-camera" style="color: orange;"> Imagenes</i></h5>

                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="videos-tab" href="#videos" aria-selected="false" role="tab" data-toggle="pill">
                                        <h5><i class="fa fa-film" style="color: green;"> Videos</i></h5>
                                    </a>
                                  </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <table id="tableImge">
                                    <tbody>
                                    </tbody>
                                </table>
                              </div>
                              <div class="tab-pane fade tab-video" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                                   <table id="tableVideo">
                                        <tbody>
                                        </tbody>  
                                   </table>
                              </div>
                              <br>
                            
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div align="center" class="fade hiden" id="display">
                                      <fieldset>
                                         <img src="#" style="width: 600; height: 400;" id="newImagen">
                                      </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
      </div>
      <div class="modal-footer">
              
      </div>
    </div>
  </div>
</div>
<!--/ Modal del detalle-->
