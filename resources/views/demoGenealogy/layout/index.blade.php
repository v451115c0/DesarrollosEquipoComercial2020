

@include('demoGenealogy.layout.menu')


 <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container" style="background-color: #fff;">

                <div class="page-header">
                    <h4 class="mb-5 card-title text-center" style="color: #0aa6b6; font-weight:bold;">WELCOME</h4>
                </div>

                <div class="alert alert-success  br-50 mb-4" role="alert"> <i class="flaticon-cancel-12 close text-black" data-dismiss="alert"></i> <strong style="color:#000;"> Type consultant ID to Search and display Volumes </strong>  </div>

              <!--  <div class="row"> -->
                        
                    
                   
                

<!-- CONTENIDO -->


                 <div class="row">
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="border-top:4px dotted #0aa6b6;">
                                        <h4 style="color:#e7515a; font-weight:bold;"></h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="../genealogy" method="get" id="formSearch">

                                   <div class="form-row mb-4">
                                        
                                        <div class="form-group col-md-3">
                                            <label for="ID" style="color: #0aa6b6; font-weight:bold;">ID</label>
                                            <input type="text" class="form-control" name="abiID" id="abiID" placeholder="ID" onkeypress="return justNumbers(event);" form="formSearch">
                                        </div>

                                         <div class="form-group col-md-1">
                                            
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                         <div class="form-group col-md-3">
                                            <button type="submit" id="info"  class="btn btn-button-7 mb-4 mt-3">Submit</button>
                                        </div> 

                                        <!--<div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-button-7 mb-4 mt-3">Upload View</button>
                                        </div>-->
                                    </div>

  </form>
                                    <!-- -->
                            
                            <div class="widget-content widget-content-area pill-justify-centered">
                                
                                <ul class="nav nav-pills mb-3 mt-3 justify-content-center" id="justify-center-pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="justify-center-pills-home-tab" data-toggle="pill" href="#justify-center-pills-home" role="tab" aria-controls="justify-center-pills-home" aria-selected="true">Points</a>
                                    </li>
                                   <!-- <li class="nav-item">
                                        <a class="nav-link" id="justify-center-pills-profile-tab" data-toggle="pill" href="#justify-center-pills-profile" role="tab" aria-controls="justify-center-pills-profile" aria-selected="false">Genealogy</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-center-pills-contact-tab" data-toggle="pill" href="#justify-center-pills-contact" role="tab" aria-controls="justify-center-pills-contact" aria-selected="false">Upline View</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="justify-center-pills-tabContent">
                                    <div class="tab-pane fade show active" id="justify-center-pills-home" role="tabpanel" aria-labelledby="justify-center-pills-home-tab">
                                            <div class="table-responsive mb-4">
                                                <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%; color: #000;">
                                                    <thead style="background-color: #0aa6b6;">
                                                        <tr>
                                                            <th style="color: #fff;">Name</th>
                                                            <th style="color: #fff;">VP</th>
                                                             <th style="color: #fff;">VGP</th>
                                                            <th style="color: #fff;">VO</th>
                                                            <th style="color: #fff;">VO-LDP</th>
                                                            <th style="color: #fff;">VO-LDPYS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         @foreach($queryPoints as $item)
                                                        <tr>
                                                            <td scope="row">{{ $item->ApFirstName }}</td>
                                                            <td scope="row">{{ $item->VP }}</td>
                                                            <td scope="row">{{ $item->VGP }}</td>
                                                            <td scope="row">{{ $item->VO }}</td>
                                                            <td scope="row">{{ $item->VoLDP }}</td>
                                                            <td scope="row">{{ $item->VoLDPyS }}</td>      
                                                        </tr>
                                                        @endforeach 
                                                    </tbody>
                                                </table>
                                            </div>    
                                    </div>
                              
                                    <div class="tab-pane fade" id="justify-center-pills-contact" role="tabpanel" aria-labelledby="justify-center-pills-contact-tab">
                                        <div class="table-responsive mb-4">

                                  <!--  <table id="vertical-horizontal-scroll" class="table table-striped table-bordered nowrap table-hover" style="width:100%; color: #000;"> -->
                                    <table id="horizontal-scroll" class="table table-striped table-bordered nowrap table-hover" style="width:100%; color: #000;">
                                        <thead style="background-color: #0aa6b6;">
                                            <tr>
                                                <th style="color: #fff;">LINE</th>
                                                <th style="color: #fff;">LEVEL</th>
                                                <th style="color: #fff;">CONSULTANT ID</th>
                                                <th style="color: #fff; width: 530px;">NAME</th>
                                                <th style="color: #fff;">SPONSOR ID</th>
                                                <th style="color: #fff;">STATUS</th>
                                                <th style="color: #fff;">COUNTRY</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($queryUpline as $info)
                                         <tr>
                                           <td scope="row">{{ $info->linea }}</td>
                                           <td scope="row">{{ $info->Nivel }}</td>
                                           <td scope="row">{{ $info->AssociateId }}</td>
                                                    @if ($info->Nivel == 0)
                                                      <td scope="row">{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 1)
                                                      <td scope="row">.{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 2)
                                                      <td scope="row">. .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 3)
                                                      <td scope="row">. . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 4)
                                                      <td scope="row">. . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 5)
                                                      <td scope="row">. . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 6)
                                                      <td scope="row">. . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 7)
                                                      <td scope="row">. . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 8)
                                                      <td scope="row">. . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 9)
                                                      <td scope="row">. . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 10)
                                                      <td scope="row">. . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 11)
                                                      <td scope="row">. . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 12)
                                                      <td scope="row">. . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 13)
                                                      <td scope="row">. . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 14)
                                                      <td scope="row">. . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 15)
                                                      <td scope="row">. . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 16)
                                                      <td scope="row">. . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 17)
                                                      <td scope="row">. . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 18)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 19)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 20)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 21)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 22)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 23)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 24)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 25)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 26)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 27)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>
                                                      @elseif ($info->Nivel == 28)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->Nombre }}</td>

                                                    @endif    
                                           <td scope="row">{{ $info->SponsorId }}</td>
                                           <td scope="row">{{ $info->AssociateType }}</td>
                                           <td scope="row">{{ $info->Pais }}</td>
    
                                         </tr>
                                          @endforeach 

                                        </tbody>
                                    </table>
                                </div>
                                    </div>
                                </div>

                            </div>
                            
                                    <!-- -->
                                  

                              
                            </div>
                        </div>
                    </div>
                </div>


                                    
                                    
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>


@include('demoGenealogy.layout.footer')
                   


