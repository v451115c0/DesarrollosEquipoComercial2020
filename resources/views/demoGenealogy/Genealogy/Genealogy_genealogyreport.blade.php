@include('demoGenealogy.layout.menu')

 <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container" style="background-color: #fff;">
 <!--           <div class="page-header">
                    <div class="page-title">
                        <h3>Items Sold</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.php"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Reports</a></li>
                                <li><a href="#">General Report</a> </li>
                                <li class="active"><a href="#">Items Sold</a> </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                
                <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="border-top:4px dotted #0aa6b6;">
                                        <h4 style="color:#e7515a; font-weight:bold;">Genealogy Report</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                              <!--  <div>
                                <button class="btn btn-success btn-rounded mb-4 mr-2">Genealogy Report</button>
                                </div> -->

                                <form action="../genealogyreport" method="get" id="formSearch">

                                   <div class="form-row mb-4">
                                        
                                        <div class="form-group col-md-3">
                                            <label for="ID" style="color: #0aa6b6; font-weight:bold;">ID</label>
                                            <input type="text" required class="form-control" name="abiID" id="abiID" placeholder=" ID" onkeypress="return justNumbers(event);" form="formSearch">
                                        </div>

                                         <div class="form-group col-md-1">
                                            
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                         <div class="form-group col-md-3">
                                            <button type="submit" id="info"  class="btn btn-button-7 mb-4 mt-3">Submit</button>
                                        </div> 
                                    </div>

                               </form>



                                <div class="table-responsive mb-4">
                                   <!-- <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%; color: #000;">-->
                                    <table id="vertical-horizontal-scroll" class="table table-striped table-bordered nowrap table-hover" style="width:100%; color: #000;">
                                        <thead style="background-color: #0aa6b6;">
                                            <tr>
                                                <th style="color: #fff;">LINE</th>
                                                <th style="color: #fff;">LEVEL</th>
                                                <th style="color: #fff;">CONSULTANT ID</th>
                                                <th style="color: #fff;">NAME</th>
                                                <th style="color: #fff;">SPONSOR ID</th>
                                                <th style="color: #fff;">STATUS</th>
                                                <th style="color: #fff;">COUNTRY</th>
                                                <th style="color: #fff;">VP</th>
                                                <th style="color: #fff;">VGP</th>
                                                <th style="color: #fff;">VO</th>
                                                <th style="color: #fff;">VO-LDP</th>
                                                <th style="color: #fff;">VO-LDPYS</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($queryGenealogy as $info)
                                         <tr>
                                           <td scope="row">{{ $info->linea }}</td>
                                           <td scope="row">{{ $info->Nivel }}</td>
                                           <td scope="row">{{ $info->AssociateId }}</td>
                                         <!--  <td scope="row">{{ $info->ApFirstName }}</td> -->
                                                    @if ($info->Nivel == 0)
                                                      <td scope="row">{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 1)
                                                      <td scope="row">.{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 2)
                                                      <td scope="row">. .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 3)
                                                      <td scope="row">. . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 4)
                                                      <td scope="row">. . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 5)
                                                      <td scope="row">. . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 6)
                                                      <td scope="row">. . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 7)
                                                      <td scope="row">. . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 8)
                                                      <td scope="row">. . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 9)
                                                      <td scope="row">. . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 10)
                                                      <td scope="row">. . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 11)
                                                      <td scope="row">. . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 12)
                                                      <td scope="row">. . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 13)
                                                      <td scope="row">. . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 14)
                                                      <td scope="row">. . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 15)
                                                      <td scope="row">. . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 16)
                                                      <td scope="row">. . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 17)
                                                      <td scope="row">. . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 18)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 19)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 20)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 21)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 22)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 23)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 24)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 25)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 26)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 27)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>
                                                      @elseif ($info->Nivel == 28)
                                                      <td scope="row">. . . . . . . . . . . . . . . . . . . . . . . . . . . .{{ $info->ApFirstName }}</td>

                                                    @endif    
                                           <td scope="row">{{ $info->SponsorId }}</td>
                                           <td scope="row">{{ $info->AssociateType }}</td>
                                           <td scope="row">{{ $info->Pais }}</td>
                                           <td scope="row">{{ $info->vp }}</td>
                                           <td scope="row">{{ $info->vgp }}</td>
                                           <td scope="row">{{ $info->vo }}</td>
                                           <td scope="row">{{ $info->VoLDP }}</td>
                                           <td scope="row">{{ $info->VoLDPyS }}</td>      
                                         </tr>
                                          @endforeach 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

@include('demoGenealogy.layout.footer')

