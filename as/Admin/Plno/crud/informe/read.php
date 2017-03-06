			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/pleno.php");
				$objResol = new informe;
				$Lectura = $objResol->read();
				//echo "<pre>".print_r($dato,1)."</pre>";
				//$delete = $objUser->Borrar_datos()
			 ?>
			 <script type="text/javascript">
			 	function editarnota(id_inf){
			 		
			 		frmEditNts.elements['id_inf'].value = id_inf;					
					frmEditNts.submit();
			 	}

			 	function Borrar(id_inf){
			 		frmDeleRes.elements['id_inf'].value = id_inf;					
					frmDeleRes.submit();
			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th>DESCRIPCION</th>
			        <th>AÑO</th>	        
			        <th>ACCIONES</th>
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

							<td><?=$dato['descripcion']?></td>
				      		<td><?=$dato['anio']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editarnota('<?=$dato["id_inf"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
			      						<a href="#" onclick="javascript:Borrar('<?=$dato["id_inf"]?>');">
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
			  <form name="frmDeleRes" action="<?=$CONFIG['pathpln']?>relacion/Infborrar.php" target="deletenota"  method="post">
			  <input type="hidden" name="id_inf">
			  </form>

			  <form  name="frmEditNts" action="paneladm.php?p=pleno&j=informe&crud=update" method="post" > 
			  <input type="hidden" name="id_inf">
			  </form>
			  <iframe name="deletenota"  height="0" width="0"  ></iframe>