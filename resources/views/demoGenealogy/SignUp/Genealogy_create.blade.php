@include('demoGenealogy.layout.menu')

<!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container" style="background-color: #fff;">
            <!--<div class="page-header">
                    <div class="page-title">
                        <h3>Create</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.php"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Administration</a></li>
                                <li><a href="#">Autoship operation</a> </li>
                                <li class="active"><a href="#">Create</a> </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                    <div class="row">
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="border-top:4px dotted #0aa6b6;">
                                        <h4 style="color:#e7515a; font-weight:bold;">Sign Up</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="save-signup" method="get">

                                    <div class="form-row mb-4">
                                        
                                        <div class="form-group col-md-3">
                                            <label for="ID" style="color: #0aa6b6; font-weight:bold;">ID</label>
                                            <input type="text" required class="form-control" id="abi" name="abi" placeholder="ID" onkeypress="return justNumbers(event);" >
                                        </div>

                                        <div class="form-group col-md-1">

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name" style="color: #0aa6b6; font-weight:bold;">Name</label>
                                            <input type="text" required class="form-control" id="nameabi" name="nameabi" placeholder="NAME" >
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                      <!-- NO cambiar name de SponsorID y SponsorName porque trae el valor del nombre -->
                                        <div class="form-group col-md-3">
                                            <label for="ID" style="color: #0aa6b6; font-weight:bold;">Sponsor ID</label>
                                            <input type="text" required class="form-control" id="abiID" name="abiID" placeholder="SPONSOR ID" onkeypress="return justNumbers(event);">
                                        </div>

                                        <div class="form-group col-md-1">

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name" style="color: #0aa6b6; font-weight:bold;">Sponsor Name</label> 
                                            <input type="text" id="name" name="name" class="form-control" style="color: #000; font-weight:bold;" readonly='readonly'>
                                            <!-- 
                                        
                                                    <div id="name"></div>
                                                    <br>
                                                    <div id="respuesta"></div> 
                                             -->
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                      
                                        <div class="form-group col-md-3">
                                            <label for="type"  style="color: #0aa6b6; font-weight:bold;">Type</label>
                                             <select id="type" name="type" class="form-control  form-control-lg">

                                                <option value="100">Distributor</option>
                                                <option value="105">Costumer</option>
                                             </select>
                                        </div>

                                        <div class="form-group col-md-1">

                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="country"  style="color: #0aa6b6; font-weight:bold;">Country</label>
                                             <select id="country" name="country" class="form-control  form-control-lg">

                                               
                                                <option value="CAN">CANADA</option>
                                                <option value="USA">USA</option>
                                             </select>
                                        </div>


                                    </div>
    
                                  <button type="submit" class="btn btn-button-7 mb-4 mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                                               

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MY FUNCTIONS -->
        <script type="text/javascript" src="{{ asset('js/Genealogy/functions.js') }}"></script>
        <!-- END MY FUNCTIONS -->
                
              

@include('demoGenealogy.layout.footer')