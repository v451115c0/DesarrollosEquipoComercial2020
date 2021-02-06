<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <style type="text/css">
      .logo{
         height: 100px;
         width: 800px;
      }

      .title{
        text-align: center;
        font-size: 30px;
        font-weight:bold;
      }

      .info{
        font-size: 16px; 
        font-weight:bold;
      }

      .logokin{
        height: 75px; 
        width: 200px;
        /*margin-top: 50px;*/
      }

      .amount {
       font-weight:bold;
       font-size: 50px;
       color: #D64000;
       margin: 0 20 ; 
       text-align:right;
     }

     .amounttable {
       font-weight:bold;
       font-size: 20px;
       color: #D64000;
       margin: 20 50 20 50;
       text-align:right;
     }

     .center{
      text-align: center;
     }

     .text{
      text-align: justify;
      font-size: 16px;
     }

   

     table{
      width: 100%;
      font-size: 10px;
     }

     .gray{
      background: #D8D8D8 !important;
     }

     .white{
      background: white !important;
     }

     .fuente{
      font-family: 'Roboto', sans-serif;
      font-size: 12px !important;
     
     }

     .nota {
       font-weight:bold;
       font-size: 68px;
       margin: 0 20 ; 
       text-align:right;
     }


    </style>

    <title>Estado de Cuenta NikkenChallenge</title>
  </head>
  <body>
  @if($Total != 0)

     <!--  <div class="container"> -->

        <div class="row">
            <div class="col-12">
            <img src="./img/NIKKEN-Challenge.jpg" style="height: 90px; width: 700px;">
            </div> 
           
        </div> 

          <div class="row" >
              <div class="col-12"> 
                <h1 class="title">ESTADO DE CUENTA</h1><br>
               </div>
          </div> 

            <div class="row">
              <div class="col-12">          
                <label style="text-align: center "><strong><?php echo $CountryName  ?></strong></label>
                <br>
              </div>
            </div>

            <div class="row">
              <div class="col-12">          
                <label class="info"><?php echo $abi ." - " . $name?></label><br> 
             <!--  <label class="info">000001 - NIKKEN</label><br> -->
                <label class="info">PERIODO: <?php echo $mes ." ". $year  ?></label>
                <br>
                <br>
              </div>
            </div>

      
          <div class="row col-lg-12">
            <table  style="width: 100%;" >
              <tbody>
                <tr>
                  <td>
                    <div class="col-lg-6" style="text-align: left">
                      <img src="./img/Kin-Ya!.jpg"   style="height: 130px;  width: 350px; ">

                    </div>
                  </td>
                  <td>
                    <div class="col-lg-6" >
                      <p class="amount" style="text-align:right;">{{ $simboloPrecio }}<?php echo $PriceKinya ?></p>
                      <br>
                    </div>
                    
                  </td>

                </tr>
              </tbody>
            </table>            
          </div>

          <div class="row col-lg-12">
            <table  style="width: 100%;" >
              <tbody>
                <tr>
                  <td>
                    <div class="col-lg-6" style="text-align: left">
                      <img src="./img/Kin-Ya+.jpg" style="height: 130px;  width: 350px; ">
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-6 " >
                      <p class="amount" style="text-align:right;">{{ $simboloPrecio }}<?php echo $PriceKinyaPlus ?></p>
                      <br>
                    </div>
                    
                  </td>

                </tr>
              </tbody>
            </table>            
          </div>
      
           <div class="row col-lg-12">
            <table  style="width: 100%;" >
              <tbody>
                <tr>
                  <td>
                    <div class="col-lg-6" style="text-align: left">
                      <img src="./img/Kin-Tai.jpg" style="height: 130px;  width: 350px; ">
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-6 "  >
                      <p class="amount" style="text-align:right;">{{ $simboloPrecio }}<?php echo $PriceKintai ?></p>
                      <br>
                    </div>
                    
                  </td>

                </tr>
              </tbody>
            </table>            
          </div>

          <div class="row">
            <div class="col-lg-12 "  style="border-top: 8px solid #FF8C00; text-align: right;">
                      <p class="amount" style="text-align:center;">{{ $simboloPrecio }}<?php echo $Total ?></p>
                      <br>
            </div>
        </div> 
      

            <div class="row">
              <div class="col-12">  
                <br>
                <p class="text">Este estado de cuenta, contiene las operaciones y ganancias <u><strong>sin el descuento de impuestos.</strong></u> El Estado de Cuenta de Bonificaciones, contiene el monto total de ganancias por Nikken Challenge y la información de impuestos.</p>
                <br>
              </div>
            </div>

            
        <!--  </div> -->

   
   <!--AGREGAR CIERRE BODY -->
    <!--HOJA SIG-->
    <header>
      <table>
        <tbody>
          <tr>
            <th>
              <img src="./img/NIKKEN-Challenge.jpg" style="height: 90px; width: 700px;">
            </th>
          </tr>
        </tbody>
      </table>
    </header>

    <h1 class="title">ESTADO DE CUENTA</h1><br>

   <!-- <div class="row">
      <div class="col-12">  
        <img src="C:\xampp\htdocs\nikkenChallenge\public\img\logo_kinya.png" class="logokin" >
        <p class="amounttable" style="text-align: right"> $<?php echo $PriceKinya ?></p><br>
      </div>
    </div> -->

          <div class="row col-lg-12">
            <table  style="width: 100%; border-top:4px dotted #FF8C00;">
              <tbody>
                <tr>
                  <td>
                    <div class="col-lg-6" >
                      <br>
                      <img src="./img/Kin-Ya!.jpg" class="logokin">
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-6 " >
                      <p class="amounttable" style="text-align: right"> {{ $simboloPrecio }}<?php echo $PriceKinya ?></p>
                    </div>
                    
                  </td>

                </tr>
              </tbody>
            </table>            
          </div>

    <div class="row">
      <div class="col-12">
        <table class="fuente">
          <thead>
            <tr style="background: rgb(253, 180, 92) !important;">
              <th>Asesor</th>
              <th>Nombre</th>
              <th>Orden</th>
              <th>Fecha</th>
              <th>Item</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Bonificación</th>
              <th>Total Bonificación</th>
            </tr>
          </thead>
          <tbody>
           <?php $i = 1; ?>
          <!-- Mostrando registros --> 
            @foreach($queryKinyaDetail as $item)
              @if($i%2==0)
                <tr class="gray">
              @else
                <tr class="white">
              @endif
            
              <td scope="row">{{ $item->Associateid }}</td> 
            <!--  <td scope="row">000001</td> -->
              <td scope="row">{{ $item->Nombre }}</td> 
            <!-- <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $item->OrderNum }}</td>
              <td scope="row">  {{ date("d-m-Y", strtotime($item->OrderDate)) }}</td>  
              <td scope="row" style="text-align: center">{{ $item->Itemcode }}</td>
              <td scope="row">{{ $item->Descripcion }}</td>
              <td scope="row" style="text-align: center">{{ $item->Qty }}</td>
              <td scope="row">{{ $simboloPrecio }} {{ number_format($item->Bonificacion,2) }}</td>  
              <td scope="row">{{ $simboloPrecio }} {{ number_format($item->TotalBonificacion,2) }}</td>          
            </tr>
            {{$i = $i + 1}}
             @endforeach 
             <tr class="total">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <th style="font-size: 16px !important;">Total</th>
              <th style="font-size: 16px !important;  color: #D64000 !important; ">{{ $simboloPrecio }}<?php echo $PriceKinya ?></th>
              <td></td>
            </tr>         
          </tbody>
        </table>
        <br>
      </div>
    </div>

@if ($PriceKinyaPlus != 0)
   <!-- <div class="row">
      <div class="col-12">
        <br>
        <img src="C:\xampp\htdocs\nikkenChallenge\public\img\logo_kinyaplus.png" class="logokin" ">
        <p class="amounttable">$<?php echo $PriceKinyaPlus ?></p><br>
      </div>
    </div> -->

          <div class="row col-lg-12" >
            <table  style="width: 100%; border-top:4px dotted #FF8C00;">
              <tbody>
                <tr>
                  <td>
                    <div class="col-lg-6" >
                      <br>
                      <img src="./img/Kin-Ya+.jpg" class="logokin">
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-6 " >
                      <p class="amounttable">{{ $simboloPrecio }}<?php echo $PriceKinyaPlus ?></p>
                    </div>
                    
                  </td>

                </tr>
              </tbody>
            </table>            
          </div>

    <div class="row">
      <div class="col-12">
        <table class="fuente">
          <thead>
            <tr style="background: rgb(156, 214, 52) !important;">
              <th>Asesor</th>
              <th>Nombre</th>
              <th>Orden</th>
              <th>Fecha</th>
              <th>Item</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Bonificación</th>
              <th>Total Bonificación</th>
            </tr>
          </thead>
          <tbody>
               <?php $i2 = 1; ?>
          <!-- Mostrando registros LV1-->
            @foreach($queryKinyaLV1Detail as $iteml1)
             @if($i2%2==0)
                <tr class="gray">
              @else
                <tr class="white">
              @endif
              <td scope="row">{{ $iteml1->Associateid }}</td> 
            <!-- <td scope="row">000001</td> -->
              <td scope="row">{{ $iteml1->Nombre }}</td> 
            <!-- <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $iteml1->OrderNum }}</td>
              <td scope="row">  {{ date("d-m-Y", strtotime($iteml1->OrderDate)) }}</td>
              <td scope="row" style="text-align: center">{{ $iteml1->Itemcode }}</td>
              <td scope="row">{{ $iteml1->Descripcion }}</td>
              <td scope="row" style="text-align: center">{{ $iteml1->Qty }}</td>
              <td scope="row">{{ $simboloPrecio }} {{ number_format($iteml1->Bonificacion,2) }}</td>  
              <td scope="row">{{ $simboloPrecio }} {{ number_format($iteml1->TotalBonificacion,2) }}</td>          
            </tr>
            {{$i2 = $i2 + 1}}
             @endforeach  
             <!-- Mostrando registros LV2-->
            @foreach($queryKinyaLV2Detail as $iteml2)
           @if($i2%2==0)
                <tr class="gray">
              @else
                <tr class="white">
              @endif
              <td scope="row">{{ $iteml2->Associateid }}</td> 
            <!-- <td scope="row">000001</td> -->
              <td scope="row">{{ $iteml2->Nombre }}</td> 
            <!-- <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $iteml2->OrderNum }}</td>
              <td scope="row">  {{ date("d-m-Y", strtotime($iteml2->OrderDate)) }}</td> 
              <td scope="row" style="text-align: center">{{ $iteml2->Itemcode }}</td>
              <td scope="row">{{ $iteml2->Descripcion }}</td>
              <td scope="row" style="text-align: center">{{ $iteml2->Qty }}</td>
              <td scope="row">{{ $simboloPrecio }} {{ number_format($iteml2->Bonificacion,2) }}</td>  
              <td scope="row">{{ $simboloPrecio }} {{ number_format($iteml2->TotalBonificacion,2) }}</td>          
            </tr>
            {{$i2 = $i2 + 1}}
             @endforeach
             <tr class="total">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <th style="font-size: 16px !important;">Total</th>
              <th style="font-size: 16px !important;  color: #D64000 !important; ">{{ $simboloPrecio }}<?php echo $PriceKinyaPlus ?></th>
            </tr>                 
          </tbody>
        </table>
        <br>
      </div>
    </div>
@endif

@if ($PriceKintai != 0)
  <!--  <div class="row">
      <div class="col-12">
        <br>
        <img src="C:\xampp\htdocs\nikkenChallenge\public\img\logo_kintai.png" class="logokin" ">
        <p class="amounttable">$<?php echo $PriceKintai ?></p><br>
      </div>
    </div> -->

          <div class="row col-lg-12">
            <table  style="width: 100%; border-top:4px dotted #FF8C00;">
              <tbody>
                <tr>
                  <td>
                    <div class="col-lg-6" >
                      <br>
                      <img src="./img/Kin-Tai.jpg" class="logokin">
                    </div>
                  </td>
                  <td>
                    <div class="col-lg-6 " >
                      <p class="amounttable">{{ $simboloPrecio }}<?php echo $PriceKintai ?></p>
                    </div>
                    
                  </td>

                </tr>
              </tbody>
            </table>            
          </div>

    <div class="row">
      <div class="col-12">
        <table class="fuente">
          <thead>
            <tr style="background: rgb(70, 132, 191) !important;">
              <th>Asesor</th>
              <th>Nombre</th>
              <th>Orden</th>
              <th>Fecha</th>
              <th>Item</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Bonificación</th>
              <th>Total Bonificación</th>
            </tr>
          </thead>
          <tbody>
               <?php $ik = 1; ?>
          <!-- Mostrando registros-->
            @foreach($queryKintai as $itemKintai)
              @if($ik%2==0)
                <tr class="gray">
              @else
                <tr class="white">
              @endif
              <td scope="row">{{ $itemKintai->Associateid }}</td> 
             <!-- <td scope="row">000001</td> -->
              <td scope="row">{{ $itemKintai->Nombre }}</td> 
            <!-- <td scope="row">NIKKEN</td> -->
              <td scope="row">{{ $itemKintai->OrderNum }}</td>
              <td scope="row">  {{ date("d-m-Y", strtotime($itemKintai->OrderDate)) }}</td> 
              <td scope="row" style="text-align: center">{{ $itemKintai->Itemcode }}</td>
              <td scope="row">{{ $itemKintai->Descripcion }}</td>
              <td scope="row" style="text-align: center">{{ $itemKintai->Qty }}</td>
              <td scope="row">{{ $simboloPrecio }} {{ number_format($itemKintai->Bonificacion,2) }}</td>  
              <td scope="row">{{ $simboloPrecio }} {{ number_format($itemKintai->TotalBonificacion,2) }}</td>          
            </tr>
             {{$ik = $ik + 1}}
             @endforeach  
              <tr class="total">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <th style="font-size: 16px !important;">Total</th>
              <th style="font-size: 16px !important;  color: #D64000 !important; ">{{ $simboloPrecio }}<?php echo $PriceKintai ?></th>
              <td></td>
            </tr>               
          </tbody>
        </table>
        <br>
      </div>
    </div>
@endif

    <div class="row">
      <div class="col-11">  
        <br>
        <p class="center"><strong>¡FELICIDADES! POR TUS LOGROS DE ESTE MES</strong></p><br>
        @if ($PriceKintai == 0)
        <p class="text">Si hubieras completado el Kintai hubieras ganado: <strong>{{ $simboloPrecio }}<?php echo $PriceKintaiCountry ?></strong>  </p>
        @endif
      </div>
    </div>

   @else

    <div class="row">
      <div class="col-12">
          <img src="./img/NIKKEN-Challenge.jpg" style="height: 90px; width: 700px;">
      </div>    
    </div> 

     <div class="row" >
        <div class="col-12"> 
            <h1 class="title">ESTADO DE CUENTA</h1><br>
        </div>
      </div> 

      <div class="row">
        <div class="col-lg-12 "  style="border-top: 8px solid #FF8C00; text-align: right;">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
            <p class="nota" style="text-align:center ">"ANÍMATE A INICIAR NIKKEN CHALLENGE "</p>
          <br>
          <br>
            <p class="amount" style="text-align:center;">¡COMIENZA EL RETO YA!</p>
        </div>
      </div> 

   @endif 




  </body>
</html>
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>