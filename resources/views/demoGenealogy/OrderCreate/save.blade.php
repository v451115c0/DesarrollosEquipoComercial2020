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
                                        <h4 style="color:#e7515a; font-weight:bold;">Order Entry</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="save-order" method="get">

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label style="color: #0aa6b6; font-weight:bold;">Order Number:</label>
                                            <input type="text" required class="form-control" id="ordernum" name="ordernum" onkeypress="return justNumbers(event);">
                                        </div>
                                        
                                        <div class="form-group col-md-1">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="pais"  style="color: #0aa6b6; font-weight:bold;">Country</label>
                                             <select id="pais" name="pais" class="form-control  form-control-lg">

                                               
                                                <option value="CAN">CANADA</option>
                                                <option value="USA">USA</option>
                                             </select>
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="ID" style="color: #0aa6b6; font-weight:bold;">ID</label>
                                            <input type="text" required class="form-control" id="abiID" name="abiID" placeholder="ID" onkeypress="return justNumbers(event);">
                                        </div>

                                        <div class="form-group col-md-1">
                                        </div>

                                        <div class="form-group col-md-6">
                                             <label for="name" style="color: #0aa6b6; font-weight:bold;">Name</label> 
                                             <input type="text" id="name" name="name" class="form-control" style="color: #000; font-weight:bold;" readonly='readonly'>
                                        </div>


                                        
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="item"  style="color: #0aa6b6; font-weight:bold;">Item</label>
                                             <select id="item" name="item" class="form-control  form-control-lg" >
                                                <option value="">Select Item</option>
                                               <!-- <option value="10189303">One</option>
                                                <option value="10189803">Two</option> -->
                                                <option value="001">001</option>
                                                <option value="002">002</option>
                                                <option value="003">003</option>
                                                <option value="004">004</option>
                                             </select>
                                        </div>

                                        <div class="form-group col-md-1">
                                            
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="nameitem" style="color: #0aa6b6; font-weight:bold;">Item Name</label>
                                           <input type="text" id="itemname" name="itemname" readonly class="form-control" style="color: #000; font-weight:bold;">
                                            <!-- 
                                                    <div id="nameitem"></div>
                                                    <br>
                                                    <div id="respuesta2"></div> 
                                            -->
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="name" style="color: #0aa6b6; font-weight:bold;">Points</label>
                                           <input type="text" id="itempoints" name="itempoints" readonly class="form-control" style="color: #000; width:15px; font-weight:bold; ">
                                            <!-- 
                                                    <div id="pointsitem"></div>
                                                    <br>
                                                    <div id="respuesta3"></div> 
                                            -->
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="ID" style="color: #0aa6b6; font-weight:bold;">Quantity</label>
                                            <input type="text" required class="form-control" id="qty" name="qty" onkeypress="return justNumbers(event);"> 
                                        </div>

                                        <div class="form-group col-md-1">
                                            
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="name" style="color: #0aa6b6; font-weight:bold;">Total Points</label>
                                           <input type="text" id="total" name="total" readonly class="form-control" style="color: #000; font-weight:bold;">
                                            <!-- 
                                                    <div id="totalPoints"></div>
                                                    <br>
                                                    <div id="respuesta4"></div> 
                                             -->
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
