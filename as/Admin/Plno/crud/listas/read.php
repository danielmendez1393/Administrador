			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/pleno.php");
				$objAcu = new acuerdos;
				$Lectura = $objAcu->read();
			 ?>
			 <script type="text/javascript">
			 	function editarnota(acr_id){
			 		
			 		frmEditNts.elements['acr_id'].value = acr_id;					
					frmEditNts.submit();
			 	}

			 	function Borrar(acr_id){
			 		frmDeleRes.elements['acr_id'].value = acr_id;					
					frmDeleRes.submit();
			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th>EXPEDIENTES</th>
			        <th>FECHA DE ACUERDOS</th>		        
			        <th>EDITAR</th>
			        <th>ELIMINAR</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      <?php 
			      	foreach ($Lectura as $row => $dato) {
			      		
			      		?> 
			      			
			      			<?php 
			      				//foreach ($row as $dato) {
			      			?>
			      			<!--<td><?=$dato?></td>-->

							<td><?=$dato['acr_expedientes']?></td>
				      		<td><?=$dato['acr_fecha']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editarnota('<?=$dato["acr_id"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      			</td>

			      			<td style="text-align: center;" >
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
			      						<a href="#" onclick="javascript:Borrar('<?=$dato["acr_id"]?>');">
			      							<i class="fa fa-trash fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      				
							</td>
			      		</tr>
			      	<?php 
			      	}
			      ?>
			        
			      </tr>
			    </tbody>
			  </table>
			  </div>
			  <form name="frmDeleRes" action="<?=$CONFIG['pathpln']?>relacion/Acuborrar.php" target="deletenota"  method="post">
			  <input type="hidden" name="acr_id">
			  </form>

			  <form  name="frmEditNts" action="paneladm.php?p=pleno&j=listas&crud=update" method="post" > 
			  <input type="hidden" name="acr_id">
			  </form>
			  <iframe name="deletenota"  height="0" width="0"  ></iframe>