<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
<!-- CSS -->
<link href="{{ asset('../css/style.css') }}" rel="stylesheet">
<link href="{{ asset('../css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('../css/main.css?v=1.1.8') }}" rel="stylesheet">

<!-- JS -->
<script src="http://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<script src="{{ asset('../js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('../js/libs/bootstrap.min.js') }}"></script>
<!-- GenesisUI main scripts -->


<h3 class="text-center"><img src="{{ asset('../img/list.png') }}"  width="10%" id="img-request"></img><br/>NUEVA SOLICITUD</h3> 
 <hr style="border-top: 2px solid #333 !important; border-bottom: 2px solid #333 !important; border-left:none !important; border-right:none !important; height: 6px !important; width:50% !important; ">  
 <br></br> 
<!-- Custom js -->
 <div class="row">
	<div class="col-lg-3"></div>
 	<div class="col-lg-6">
 		<section class="panel">
 			<div class="panel-body">
 				<div class="form-group border-bottom-grey margin-bottom-30">
	                <h5>
	                    <strong>
	                       Validación de factura:
	                    </strong>  
	                    <strong class="pull-right">
	                    	<a href="../rma">Listado de solicitudes creadas</a>
	                    </strong>  
	                </h5>
	            </div>
                <div class="col-sm-12 col-md-12">
	                <form id="frmSave" action="#" method="POST" autocomplete="OFF">
	                 {{ csrf_field() }}	
						<fieldset>
							<div class="row">
			 					
			                    <div class="form-group col-md-6">
			                          <label for="bill"># Factura:</label>
			                          <input type="text" name="bill" id="bill" class="form-control form-control-sm"  value="" maxlength="10" />
			                          <input type="hidden" name="country" id="country" class="form-control form-control-sm"  value="MEX" />
			                    </div>
			                    <div class="form-group col-md-6">
			                          <label for="date_r">Fecha Recibido:</label>
			                          <input type="text" name="date_r" id="date_r" class="form-control form-control-sm"  value="" readonly="true" />
			                    </div>
			                    <div class="form-group col-md-6">
				                    <button type="button" class="btn btn-sm submit" id="btnvalidate" style="background-color: #28a745;color: white;">
				                        <i class="fa fa-check-circle"></i> Validar
				                    </button>
				                </div>
			                </div>
		 				</fieldset>
		 				
		 			</form>
		 			<div class="alert alert-dismissible fade hiden" role="alert" id="message-display">
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                    <strong>Mensaje:</strong> <span id="message-user"></span>
!					</div>	
	               
	                <div class="table-responsive fade hidden disyplay-data">
	                	<div class="form-group border-bottom-grey margin-bottom-30">
			                <h5>
			                    <strong>
			                       Listado de productos:
			                    </strong>  
			                </h5>
			            </div>
			            <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Mensaje: </strong> Estimado asesor, estos son los productos que aun cuenta con garantía.
                        </div><br>
                        <table class="table table-striped table-hover table-hover table-detail show" id="table_products">
                            <thead class="table-orange" style="background-color: #28a745;color: white;">
                                <tr>
                                    <th class="text-center">
                                        Seleccione    
                                    </th>
                                    <th class="text-center">
                                        Código
                                    </th>
                                    <th class="text-center">
                                        Descripción
                                    </th>
                                    <th class="text-center">
                                        Cantidad
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	
                            </tbody>
                        </table>
                        <form id="frmSaveRma" action="save-rma" method="POST" autocomplete="OFF" enctype="multipart/form-data">
                        	{{ csrf_field() }}
                        	 <input type="hidden" name="contry_save" id="contry_save" class="form-control form-control-sm"  value="MEX" readonly="true"/>
                        	 <input type="hidden" name="bill_save" id="bill_save" class="form-control form-control-sm"  value="" readonly="true"/>
                        	 <input type="hidden" name="date_save" id="date_save" class="form-control form-control-sm"  value="" readonly="true"/>
                        	 <input type="hidden" name="num_ci" id="num_ci" class="form-control form-control-sm"  value="" readonly="true"/>
                        	 <input type="hidden" name="name_ci" id="name_ci" class="form-control form-control-sm"  value="" readonly="true"/>
                        	 <input type="hidden" name="email_ci" id="email_ci" class="form-control form-control-sm"  value="" readonly="true"/>
                        <div class="row fade hidden disyplay-data">
	                        
	                        	<div class="form-group col-md-4">
				                    <label for="code"># Código:</label>
				                     <input type="text" name="code" id="code" class="form-control form-control-sm"  value="" readonly="true"/>
				                </div>
				                
				                <div class="form-group col-md-4">
				                    <label for="days">Dias de garatia:</label>
				                     <input type="text" name="days" id="days" class="form-control form-control-sm"  value="" readonly="true"/>
				                </div>
				                <div class="form-group col-md-4">
				                    <label for="amount">Cantidad</label>
				                     <input type="text" name="amount" id="amount" class="form-control form-control-sm"  value="" readonly="true"/>
				                </div>
				                <div class="form-group col-md-12">
				                    <label for="desc">Descripción:</label>
				                     <input type="text" name="desc" id="desc" class="form-control form-control-sm"  value="" readonly="true"/>
				                </div>
				                <div class="form-group col-md-6">
	                                <label class="form-control-label" for="search">
	                                        Tipo de defecto
	                                </label>
	                                <select name="defect_type" id="defect_type" class="form-control form-control-sm" style="width: 100%;">
	                                    <option value="" selected>
	                                            -- Seleccione una opción --
	                                    </option>
	                                </select>
	                            </div>
	                            <div class="form-group col-md-6">
				                    <label for="adress">Dirección de envio</label>
				                     <input type="text" name="adress" id="adress" class="form-control form-control-sm"  value="Insrugentes Sur" / readonly="true">
				                </div>
				                <div class="form-group col-md-12">
				                    <label for="adtional_email">Correo Adicional</label>
				                     <input type="text" name="adtional_email" id="adtional_email" class="form-control form-control-sm"  value="" />
				                </div>
				                <div class="form-group col-md-12">
	                                <label for="comments">Comentarios:</label>
	                                <textarea name="comments" id="comments" rows="2" class="form-control form-control-sm" maxlength="750"></textarea>
	                            </div>
	                            <div class="form-group col-md-12">
							  		<input type="file" name="uploadfile[]" id="uploadfile" value="Cargar archivo" multiple="true">
							    </div>

	                            <div class="form-group col-md-6">
	                            	<label style="color: red;"> Seleccionar solo archivo con las siguientes extensiones jpg,png ó mp4</label>
				                    <button type="submit" class="btn btn-sm submit" id="submitsave" style="background-color: #28a745;color: white;">
				                        <i class="fa fa-check-circle"></i> Aceptar
				                    </button>
				                </div>
	                        
                        </div>
                        </form>
                       
	                </div>
 				</div>
 			</div>
 			
 		</section>
	</div>
	<div class="col-lg-3"></div>
</div>
<!--Modal imagenes-->
<!--Init modal detail -->
    <div class="modal" id="openDetail1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header" style="background-color: #28a745;color: white;">
	         
	          <h4 class="modal-title">Imegenes cargadas</h4>
	        </div>
	       
	          <div class="modal-body">
	            <!-- Form add VoBo -->
	            <div align="center">
	              <fieldset>
	                 <img src="../../assets/img/list2.png" style="width: auto; height: auto;">
	              </fieldset>
	            </div>
	          </div>
	          <div class="modal-footer">
	          
	          </div>
	     
	      </div>
	    </div>
	  </div>
	  <div class="modal" id="openDocument" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header" style="background-color: #28a745;color: white;">
	          <h4 class="modal-title">Documentos cargadas</h4>
	        </div>
	       
	          <div class="modal-body">
	            <!-- Form add VoBo -->
	            <div align="center">
	              
	                <iframe src="http://docs.google.com/gview?url=https://www.nikken.com/themes_wordpress_/assets/documents/TOPPDF/Rank_Advancements_FR.pdf&embedded=true" 
style="width:500px; height:500px;" frameborder="0"></iframe>
	                 
	              </fieldset>
	            </div>
	          </div>
	          <div class="modal-footer">
	          
	          </div>
	     
	      </div>
	    </div>
	  </div>
	  <div class="modal" id="openVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header" style="background-color: #28a745;color: white;">
	          <h4 class="modal-title">Videos cargados</h4>
	        </div>
	       
	          <div class="modal-body">
	            <!-- Form add VoBo -->
	            <div align="center">
	              <fieldset>
	                <div class="embed-responsive embed-responsive-16by9" style="width: auto; height: auto;">
	                	<source src="../assets/rma_images/8954-MEX/Ane Summer! 1.mp4">
	                </div>
	              </fieldset>
	            </div>
	          </div>
	          <div class="modal-footer">
	          
	          </div>
	     
	      </div>
	    </div>
	  </div>


<!--/ Modal imagenes-->

<script src="{{ asset('../js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('../js/libs/jquery.validate.min.js') }}"></script>
<script src="{{ asset('../js/libs/messages_es.js') }}"></script>
<script src="{{ asset('../js/libs/select2.min.js') }}"></script>
<!-- JS Nikken -->
<script src="{{ asset('../js/rma/rma.js?v=1.5.5') }}"></script>

