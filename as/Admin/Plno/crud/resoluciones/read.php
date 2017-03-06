			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/pleno.php");
				$objResol = new resoluciones;
				$Lectura = $objResol->read();
				//echo "<pre>".print_r($dato,1)."</pre>";
				//$delete = $objUser->Borrar_datos()
			 ?>
			 <script type="text/javascript">
			 	function editarnota(rsl_id){
			 		
			 		frmEditNts.elements['rsl_id'].value = rsl_id;					
					frmEditNts.submit();
			 	}

			 	function Borrar(rsl_id){
			 		frmDeleRes.elements['rsl_id'].value = rsl_id;					
					frmDeleRes.submit();
			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th>EXPEDIENTE</th>
			        <th>SUJETO OBLIGADO</th>
			        <th>FECHA DE RESOLUCION</th>		           
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

							<td><?=$dato['rsl_expediente']?></td>
				      		<td><?=$dato['rsl_sobligado']?></td>
				      		<td><?=$dato['rsl_fecha']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editarnota('<?=$dato["rsl_id"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
			      						<a href="#" onclick="javascript:Borrar('<?=$dato["rsl_id"]?>');">
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
			  <form name="frmDeleRes" action="<?=$CONFIG['pathpln']?>relacion/Resolborrar.php" target="deletenota"  method="post">
			  <input type="hidden" name="rsl_id">
			  </form>

			  <form  name="frmEditNts" action="paneladm.php?p=pleno&j=resoluciones&crud=update" method="post" > 
			  <input type="hidden" name="rsl_id">
			  </form>
			  <iframe name="deletenota"  height="0" width="0"  ></iframe>