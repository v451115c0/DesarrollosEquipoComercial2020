@extends('layouth.layouth')

<!--Elementos -->

  @section('logo-header')
    <div class="jumbotron text-center" style="border-bottom:4px solid #FF8C00;">
      <img src="{{ asset('../img/logo_nikkenchallenge.png') }}" class="img-responsive" >
   </div>
   <blockquote class="blockquote-reverse fuente" style="font-size: 15px;">
       <p><b>Última actualización: {{ date("d/m/Y H:i", strtotime($update)) }} </b></p>
     </blockquote>
  @endsection

  @section('Kinmaster')
    <div class="containerKinmaster text-center"  id="Kinmaster" style="display:none;">
     <!-- <img src="{{ asset('../img/logo_kinmaster.png') }}" class="logoKinmaster" > -->
     <img src="{{ asset('../img/sensei.png') }}" style="height: 300px !important; ">
      <br>
      <br>
     <!-- <h3>Estas participando en tu <label class="exponente" id="exponente"></label>° Nikken Challenge</h3>-->
     <!-- <h3>YA GANASTE UN BONO KINTAI. Estas participando en tu <label >{{ $exponente }}</label>° CICLO DEL MES</h3> -->
     <h3 style="text-align: center"> Ya eres un Sensei en NIKKEN Challenge, </h3>
     <h3 style="text-align: center"> Lograste el bono Kintai en menos de un mes. </h3>
     <h3 style="text-align: center">Sigue jugando y multiplica tu ganancia.</h3>
   </div>
  @endsection


 @section('Aviso')
  <!--  <div class="alert alert-warning" style="text-align: center; font-weight:bold; color: #000; ">
      <a href="#" class="alert-link fuente" style="text-align: center; font-size: 20px;">Los bonos por ordenes de compra con la lista de precio anterior serán recalculados el día 15 de agosto</a>
    </div> -->
    @if($day >= 1 && $day <= 10)
    <div class="alert alert-info">
      <a href="#" class="alert-link fuente" style="text-align: center; font-size: 16px;">Estamos iniciando Nikken Challenge. Considera que en el cambio de rango pueden existir modificaciones</a>
    </div>
    @elseif($day >= 15 && $day <= 19)
    <div class="alert alert-warning" style="text-align: center">
      <a href="#" class="alert-link"><i class="fas fa-exclamation-circle"></i> Se realizaron actualizaciones de rango</a>
    </div>
    @endif
  @endsection


  @section('Total')
    <div class="container text-center">

      <h3>Ganancia Total: <label class="amount">{{ $simboloPrecio }}{{ $Total }}</label> </h3>
      <h4 style="color: #000;">MOSTRANDO PERIODO: AGOSTO</h4>
      <button type="button" id="Genealogy" name="detail" class="btn btn-deep-orange waves-effect waves-light">Jugadores de mi grupo personal</button> 


   </div>
  @endsection




  @section('Content')

    @foreach($data as $Section)
    <div class="container" id="D1">

        <div class="row">
          <div class="col-sm-3">
              <h3 style="text-align: center" class="titulo"></h3>
              <img src="{{ asset($Section['titulo']) }}" class="titulo">
          </div>
          <div class="col-sm-4">  
            <div id="{{ $Section['chart'] }}"></div>
              <p class="percent" id="percent">{{ $Section['percent'] }}%</p>      
          </div>
          <div class="col-sm-5">
              <h3>Tus ganancias actuales:</h3> 
            <p class="amount" id="amount">{{ $Section['simboloPrecio'] }}{{ $Section['amount'] }}</p>
            <p class="simulator">{{ $Section['simulator'] }}</p>
            <button type="button hidden" id="{{ $Section['id'] }}" name="detail" class="{{ $Section['detail'] }}">Detalles</button> 
          </div>
        </div>
    </div>

    @endforeach
 
<!--MODAL GANADOR-->
    <!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true" style="height: auto;">
  <div class="modal-dialog modal-notify modal-success" role="document" style="height: auto;">
    <!--Content-->
    <div class="modal-content text-center" style="height: auto;">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center" >
        <p class="heading simulator">¡FELICIDADES HAS COMPLETADO EL KINTAI!</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-trophy fa-4x animated rotateIn mb-4"></i>
       <!-- <img src="{{ asset('../img/logo_kinmaster.png') }}" class="logoKinmaster" > -->

        <p class="simulator">¡Has vencido en el NIKKEN Challenge!</p>
        <p class="simulator">HAS GANADO {{ $simboloPrecio }}{{ $PriceKintai }}</p>
        <p><strong>Reconocemos tu esfuerzo.</strong></p>
        <p><strong>Aún puedes obtener más ganancias.</strong></p>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a type="button" class="btn btn-light-green waves-effect" data-dismiss="modal" id="continue" onclick="reset()">Continuar</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

  @endsection 





<!-- BOTON DETALLE (KINYA)-->
@section('Boton')

<div class="modal fade" id="modalTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning modal-xl" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4 class="heading simulator" id="myModalLabel" style="font-size: 30px ">Detalles <img src="{{ asset('../img/kinya_white.png') }}" style="height: 50px; width: 150px;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body" style="overflow: auto" >
        <form action="../excel/{{$abi}}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-default btn-rounded"><i class="fas fa-file-excel"></i> Descargar a Excel</button>
        </form>
          
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Cód. Asesor</th>
              <th>Nombre</th>
              <th># de Documento</th>
              <th>Documento</th>
              <th width="100px">Fecha</th>
              <th>Item</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Bonificación</th>
              <th>Total Bonificación</th>
            </tr>
          </thead>
          <tbody>
          <!-- Mostrando registros-->
            @foreach($queryKinyaDetail as $item)
            <tr>
              <td scope="row">{{ $item->Associateid }}</td> 
            <!-- <td scope="row">0000001</td> -->
               <td scope="row">{{ $item->Nombre }}</td> 
            <!--  <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $item->OrderNum }}</td>
               @if($item->TipDoc == "OV")
              <td scope="row">ORDEN DE VENTA</td>
              @elseif($item->TipDoc == "NC")
              <td scope="row">NOTA DE CREDITO</td>
              @endif
              <td scope="row">  {{ date("d-m-Y", strtotime($item->OrderDate)) }}</td>
              <td scope="row">{{ $item->Itemcode }}</td>
              <td scope="row">{{ $item->Descripcion }}</td>
              <td scope="row">{{ $item->Qty }}</td>
              <td scope="row">{{ number_format($item->Bonificacion,2) }}</td>  
              <td scope="row">{{ number_format($item->TotalBonificacion,2) }}</td>          
            </tr>
             @endforeach 
              <tr >
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <th><strong> Total:</strong></th>
              <th><strong>{{ $simboloPrecio }}{{ $PriceKinya }}</strong></th>
            </tr>            
              @if($quantity < 3)
              <div class="alert alert-warning" role="alert" style="text-align: center;">
               "ANIMATE A COMPRAR 3 ARTICULOS PARA VER REFLEJADA TU INFORMACIÓN DE BONIFICACIONES"
              </div>
             @endif
           
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalTable -->


<!-- BOTON DETALLE (KINYA+)-->
<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success modal-xl" role="document" >
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="heading simulator" id="myModalLabel" style="font-size: 30px ">Detalles <img src="{{ asset('../img/kinyaplus_white.png') }}" style="height: 50px; width: 150px;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body" style="overflow: auto">
        <form action="../excelKinyaPlus/{{$abi}}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-default btn-rounded"><i class="fas fa-file-excel"></i> Descargar a Excel</button>
        </form>
        <br>
        <label style="color: #D64000"><strong>KINYA+ NIVEL 1</strong></label>
        <table class="table table-hover" >
          <thead>
            <tr style="color: #000">
              <th>Cód. Asesor</th> 
              <th>Nombre</th>
              <th>Línea</th>
              <th>Nivel</th>
              <th># de Documento</th>
              <th>Documento</th>
              <th width="100px">Fecha</th>
              <th>Item</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Bonificación</th>
              <th>Total Bonificación</th>
            </tr>
          </thead>
          <tbody>
            <!-- Mostrando registros-->
            @foreach($queryKinyaLV1Detail as $iteml1)
            <tr>
              <td scope="row">{{ $iteml1->Associateid }}</td> 
            <!--  <td scope="row">0000001</td> -->
              <td scope="row">{{ $iteml1->Nombre }}</td>
           <!--  <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $iteml1->pata }}</td>
              <td scope="row">{{ $iteml1->level }}</td>
              <td scope="row">{{ $iteml1->OrderNum }}</td>
               @if($iteml1->TipDoc == "OV")
              <td scope="row">ORDEN DE VENTA</td>
              @elseif($iteml1->TipDoc == "NC")
              <td scope="row">NOTA DE CREDITO</td>
              @endif
              <td scope="row">  {{ date("d-m-Y", strtotime($iteml1->OrderDate)) }}</td>
              <td scope="row">{{ $iteml1->Itemcode }}</td>
              <td scope="row">{{ $iteml1->Descripcion }}</td>
              <td scope="row">{{ $iteml1->Qty }}</td>
              <td scope="row">{{ number_format($iteml1->Bonificacion,2) }}</td>  
              <td scope="row">{{ number_format($iteml1->TotalBonificacion,2) }}</td>          
            </tr>
             @endforeach 
              @if($PriceKinyaPlus == 0)
              <div class="alert alert-warning" role="alert" style="text-align: center;">
               "LA INFORMACIÓN SE MOSTRARÁ UNA VEZ ACREDITADO EL KINYA+"
              </div>
             @endif
           <!-- <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>-->
          </tbody>
        </table>
        <!--KinyaLV2-->
        <br>
        <label style="color: #D64000"><strong>KINYA+ NIVEL 2</strong></label>
        <table class="table table-hover" >
          <thead>
            <tr style="color: #000">
              <th>Cód. Asesor</th>
              <th>Nombre</th>
              <th>Línea</th>
              <th>Nivel</th>
              <th># de Documento</th>
              <th>Documento</th>
              <th width="100px">Fecha</th>
              <th>Item</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Bonificación</th>
              <th>Total Bonificación</th>
            </tr>
          </thead>
          <tbody>
            <!-- Mostrando registros-->
            @foreach($queryKinyaLV2Detail as $iteml2)
            <tr>
              <td scope="row">{{ $iteml2->Associateid }}</td> 
           <!--  <td scope="row">0000001</td> -->
              <td scope="row">{{ $iteml2->Nombre }}</td> 
            <!-- <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $iteml2->pata }}</td>
              <td scope="row">{{ $iteml2->level }}</td>
              <td scope="row">{{ $iteml2->OrderNum }}</td>
               @if($iteml2->TipDoc == "OV")
              <td scope="row">ORDEN DE VENTA</td>
              @elseif($iteml2->TipDoc == "NC")
              <td scope="row">NOTA DE CREDITO</td>
              @endif
              <td scope="row">  {{ date("d-m-Y", strtotime($iteml2->OrderDate)) }}</td>
              <td scope="row">{{ $iteml2->Itemcode }}</td>
              <td scope="row">{{ $iteml2->Descripcion }}</td>
              <td scope="row">{{ $iteml2->Qty }}</td>
              <td scope="row">{{ number_format($iteml2->Bonificacion,2) }}</td>  
              <td scope="row">{{ number_format($iteml2->TotalBonificacion,2) }}</td>          
            </tr>
             @endforeach 
           <!-- <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>-->
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
       <label style="color: #000"><strong>Total: {{ $simboloPrecio }}{{ $PriceKinyaPlus }} </strong></label> <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->

<!-- BOTON DETALLE (KINTAI)-->
<div class="modal fade" id="modalKintai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info modal-xl" role="document" >
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center" >
        <h4 class="heading simulator" id="myModalLabel" style="font-size: 32px ">Detalles<img src="{{ asset('../img/kintai_white.png') }}" style="height: 50px; width: 150px; "></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body" style="overflow: auto" >

        <form action="../excelKintai/{{$abi}}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-default btn-rounded"><i class="fas fa-file-excel"></i> Descargar a Excel</button>
        </form>

        <table class="table table-hover">
          <thead>
            <tr>
              <th>Cód. Asesor</th>
              <th>Nombre</th>
              <th>Línea</th>
              <th>Nivel</th>
              <th># de Documento</th>
              <th>Documento</th>
              <th width="100px">Fecha</th>
              <th>Item</th>
              <th>Descripción</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>
          <!-- Mostrando registros-->
            @foreach($queryKintai as $itemKintai)
            <tr>
              <td scope="row">{{ $itemKintai->Associateid }}</td> 
           <!--  <td scope="row">0000001</td> -->
              <td scope="row">{{ $itemKintai->Nombre }}</td> 
           <!--  <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $itemKintai->pata }}</td>
              <td scope="row">{{ $itemKintai->level }}</td>
              <td scope="row">{{ $itemKintai->OrderNum }}</td>
              @if($itemKintai->TipDoc == "OV")
              <td scope="row">ORDEN DE VENTA</td>
              @elseif($itemKintai->TipDoc == "NC")
              <td scope="row">NOTA DE CREDITO</td>
              @endif
              <td scope="row">  {{ date("d-m-Y", strtotime($itemKintai->OrderDate)) }}</td>
              <td scope="row">{{ $itemKintai->Itemcode }}</td>
              <td scope="row">{{ $itemKintai->Descripcion }}</td>
              <td scope="row">{{ $itemKintai->Qty }}</td>         
            </tr>
             @endforeach 
             @if($queryKintai == [])
              <div class="alert alert-warning" role="alert" style="text-align: center;">
               "LA INFORMACIÓN SE MOSTRARÁ UNA VEZ ACREDITADO EL KINTAI"
              </div>
             @endif
          
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalTable -->




<!-- BOTON Genealogy -->
<!-- Modal: modalGenealogy -->
<div class="modal fade" id="modalGenealogy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog modal-notify modal-danger modal-lg" role="document" >
    <div class="modal-content" >
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4 class="heading simulator" id="myModalLabel">JUGADORES DE MI GRUPO PERSONAL</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body" style="overflow: auto">
        <form action="../exceljugadores/{{$abi}}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-default btn-rounded"><i class="fas fa-file-excel"></i> Descargar a Excel</button>
        </form>
        <table class="table table-hover">
          <thead>
            <tr>
              <th style="color: #000">Patrocinador</th>
              <th style="color: #000">Cód. Asesor</th>
              <th style="color: #000">Nombre</th>
              <th style="color: #000">Nivel </th>
              <th style="color: #000">Cantidad</th>
              <th style="color: #000">Correo</th>
            </tr>
          </thead>
          <tbody>
          <!-- Mostrando registros-->
            @foreach($queryGenealogy as $itemgenealogy)
            <tr>
              <th scope="row">{{ $itemgenealogy->sponsorid }}</th> 
            <!-- <td scope="row">0000001</td> -->
              <th scope="row">{{ $itemgenealogy->associateid }}</th> 
            <!-- <td scope="row">0000001</td> -->
              <th scope="row">{{ $itemgenealogy->Name }}</th> 
            <!-- <td scope="row">NIKKEN</td> -->
              <th scope="row">{{ $itemgenealogy->level }}</th>
              <th scope="row" style="text-align: center;">{{ $itemgenealogy->QTY }}</th>
              <th scope="row">{{ $itemgenealogy->e_mail }}</th>
            </tr>
             @endforeach 
             <div class="alert alert-warning" role="alert" style="text-align: center;">
               "HAZ TÚ KINYA PARA VER A TUS JUGADORES QUE HAN ADQUIRIDO 1 Ó 2 ARTICULOS."
            </div>
           
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalTable -->
@endsection






  @section('Update')
  <div class="notas fuente" style="font-size: 16px;"> 
    <h4 style="text-align: center;"><strong>NOTAS IMPORTANTES</strong></h4>
    <br>
        <p>* Recuerda que los cambios de rango se ven reflejados el día 15 de cada mes y afectan tu grupo personal para los resultados de NIKKEN Challenge.</p>
        <p>** Recuerda que hay personas que no son frontales y pueden variar tus ganancias.</p> 
        <p>*** Esta plataforma actualiza los rangos el día 15 de cada mes. </p> 
  </div>
  @endsection

  @section('javascript')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>
  <!-- CHART JavaScript -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>

  <!--GRAFICAS TEMPLATE-->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
      <script src="{{ asset('assets/NikkenChallengeP/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
      <script src="{{ asset('assets/NikkenChallengeP/bootstrap/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/NikkenChallengeP/bootstrap/js/bootstrap.min.js') }}"></script> 
      <script src="{{ asset('assets/NikkenChallengeP/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script> 
      <script src="{{ asset('assets/NikkenChallengeP/plugins/blockui/jquery.blockUI.min.js') }}"></script>
      <script src="{{ asset('assets/NikkenChallengeP/assets/js/app.js') }}"></script> 

      <script>
          $(document).ready(function () {
              App.init();
          });
      </script> 
      <script src="{{ asset('assets/NikkenChallengeP/assets/js/custom.js') }}"></script>
      <!-- END GLOBAL MANDATORY SCRIPTS -->

      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <script src="{{ asset('assets/NikkenChallengeP/plugins/charts/d3charts/d3.v3.min.js') }}"></script>
      <!-- END PAGE LEVEL PLUGINS -->

      <!-- BEGIN PAGE LEVEL SCRIPTS -->
      <script src="{{ asset('assets/NikkenChallengeP/plugins/charts/c3charts/c3.min.js') }}"></script> 
      <script src="{{ asset('assets/NikkenChallengeP/plugins/charts/c3charts/c3-chart-script.js') }}"></script>
      <!-- END PAGE LEVEL SCRIPTS -->
  <!--END GRAFICAS TEMPLATE-->
  


  <!-- Archivos personalizados JS -->
<script type="text/javascript">

//GRAFICAS TEMPLATE
pie_short_Kinya_3_0();
     function pie_short_Kinya_3_0() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kinya_3_0',
                data: {
                    columns: [
                        ["1 Artículo", 34],
                        ["2 Artículos", 34],
                        ["3 Artículos", 34],
                    ],
                    type: 'pie',
                },
                color: {
                    pattern: ['#C0C0C0', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

    pie_short_Kinya_3_1();
     function pie_short_Kinya_3_1() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kinya_3_1',
                data: {
                    columns: [
                        ["1 Artículo", 34],
                        ["2 Artículos", 34],
                        ["3 Artículos", 34],
                    ],
                    type: 'pie',
                },
                color: {
                    pattern: ['#F7464A', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kinya_3_2();
     function pie_short_Kinya_3_2() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kinya_3_2',
                data: {
                    columns: [
                        ["1 Artículo", 34],
                        ["2 Artículos", 34],
                        ["3 Artículos", 34],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#F7464A', '#FF5733', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kinya_3_3();
     function pie_short_Kinya_3_3() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kinya_3_3',
                data: {
                    columns: [
                        ["1 Artículo", 34],
                        ["2 Artículos", 34],
                        ["3 Artículos", 34],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#F7464A', '#FF5733', '#FDB45C']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kinya_plus_2_0();
     function pie_short_Kinya_plus_2_0() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_KinyaPlus_2_0',
                data: {
                    columns: [
                        ["Nivel 1", 50],
                        ["Nivel 2", 50],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kinya_plus_2_1();
     function pie_short_Kinya_plus_2_1() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_KinyaPlus_2_1',
                data: {
                    columns: [
                        ["Nivel 1", 50],
                        ["Nivel 2", 50],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#86af49', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kinya_plus_2_2();
     function pie_short_Kinya_plus_2_2() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_KinyaPlus_2_2',
                data: {
                    columns: [
                        ["Nivel 1", 50],
                        ["Nivel 2", 50],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#86af49', '#9cd634']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_3_0();
     function pie_short_Kintai_3_0() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_3_0',
                data: {
                    columns: [
                        ["1 Línea", 34],
                        ["2 Líneas", 34],
                        ["3 Líneas", 34],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#C0C0C0', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_3_1();
     function pie_short_Kintai_3_1() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_3_1',
                data: {
                    columns: [
                        ["1 Línea", 34],
                        ["2 Líneas", 34],
                        ["3 Líneas", 34],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_3_2();
     function pie_short_Kintai_3_2() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_3_2',
                data: {
                    columns: [
                        ["1 Línea", 34],
                        ["2 Líneas", 34],
                        ["3 Líneas", 34],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#4684BF', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_3_3();
     function pie_short_Kintai_3_3() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_3_3',
                data: {
                    columns: [
                        ["1 Línea", 34],
                        ["2 Líneas", 34],
                        ["3 Líneas", 34],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#4684BF', '#46BFBD']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_6_0();
     function pie_short_Kintai_6_0() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_6_0',
                data: {
                    columns: [
                        ["1 Persona", 16],
                        ["2 Personas", 16],
                        ["3 Personas", 16],
                        ["4 Personas", 16],
                        ["5 Personas", 16],
                        ["6 Personas", 16],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_6_1();
     function pie_short_Kintai_6_1() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_6_1',
                data: {
                    columns: [
                        ["1 Persona", 16],
                        ["2 Personas", 16],
                        ["3 Personas", 16],
                        ["4 Personas", 16],
                        ["5 Personas", 16],
                        ["6 Personas", 16],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_6_2();
     function pie_short_Kintai_6_2() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_6_2',
                data: {
                    columns: [
                        ["1 Persona", 16],
                        ["2 Personas", 16],
                        ["3 Personas", 16],
                        ["4 Personas", 16],
                        ["5 Personas", 16],
                        ["6 Personas", 16],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#8046BF', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_6_3();
     function pie_short_Kintai_6_3() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_6_3',
                data: {
                    columns: [
                        ["1 Persona", 16],
                        ["2 Personas", 16],
                        ["3 Personas", 16],
                        ["4 Personas", 16],
                        ["5 Personas", 16],
                        ["6 Personas", 16],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#8046BF', '#4684BF', '#C0C0C0', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_6_4();
     function pie_short_Kintai_6_4() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_6_4',
                data: {
                    columns: [
                        ["1 Persona", 16],
                        ["2 Personas", 16],
                        ["3 Personas", 16],
                        ["4 Personas", 16],
                        ["5 Personas", 16],
                        ["6 Personas", 16],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#8046BF', '#4684BF', '#4684BF', '#C0C0C0', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_6_5();
     function pie_short_Kintai_6_5() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_6_5',
                data: {
                    columns: [
                        ["1 Persona", 16],
                        ["2 Personas", 16],
                        ["3 Personas", 16],
                        ["4 Personas", 16],
                        ["5 Personas", 16],
                        ["6 Personas", 16],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#8046BF', '#4684BF', '#4684BF', '#46BFBD', '#C0C0C0']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

pie_short_Kintai_6_6();
     function pie_short_Kintai_6_6() {
        var sort = true;
        var generate = function () {
            return c3.generate({
                bindto: '#NikkenChallengeChart_Kintai_6_6',
                data: {
                    columns: [
                        ["1 Persona", 16],
                        ["2 Personas", 16],
                        ["3 Personas", 16],
                        ["4 Personas", 16],
                        ["5 Personas", 16],
                        ["6 Personas", 16],
                    ],
                    type: 'pie',
                },
                color: {   
                    pattern: ['#8046BF', '#8046BF', '#4684BF', '#4684BF', '#46BFBD', '#46BFBD']
                },
                axis: {
                    x: {
                        label: 'Sepal.Width'
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                },
            });
        }, chart = generate();
    }

//END GRAFICAS TEMPLATE

 
//MODAL WINNER
var ganador =document.getElementById("winner").value;
  if (ganador = 1) {
    winner();
  }

  function winner() {
     $("#modalPush").modal({backdrop: 'static', keyboard: false});
      //Confetti Animation

      var end = Date.now() + (15 * 1000);

var interval = setInterval(function() {
    if (Date.now() > end) {
        return clearInterval(interval);
    }

    confetti({
        startVelocity: 30,
        spread: 360,
        ticks: 60,
        origin: {
            x: Math.random(),
            // since they fall down, start a bit higher than random
            y: Math.random() - 0.2
        }
    });
}, 200);

        // do this for 15 seconds
        var duration = 15 * 1000;
        var end = Date.now() + duration;

        (function frame() {
          // launch a few confetti from the left edge
          confetti({
            particleCount: 15,
            angle: 60,
            spread: 55,
            origin: { x: 0 }
          });
          // and launch a few from the right edge
          confetti({
            particleCount: 15,
            angle: 120,
            spread: 55,
            origin: { x: 1 }
          });

          // keep going until we are out of time
          if (Date.now() < end) {
            requestAnimationFrame(frame);
          }
        }());
      //END Confetti Animation

  }
  

  var continuar = $("#continue");
  var pricereset= 0;
 var contador =document.getElementById("contador").value;
 //alert(contador);
 //contador=1;

    continuar.on("click", function() {
       pricereset= 0;
       document.getElementById("Kinmaster").style='block';
      document.getElementById("exponente").textContent = contador;
    });

    function reset() {

  document.getElementById("amount").innerText='$0';
    
    }


</script>


<script>
window.addEventListener("load", postSize, false);
function postSize(e){
var target = parent.postMessage ? parent : (parent.document.postMessage ? parent.document : undefined);
if (typeof target != "undefined" && document.body.scrollHeight)
target.postMessage( document.body.scrollHeight, "*");


}


</script>

@endsection



 
