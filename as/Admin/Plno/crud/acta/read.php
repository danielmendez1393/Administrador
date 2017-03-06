			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/pleno.php");
				$objActa = new actas;
				$Lectura = $objActa->read();
				//echo "<pre>".print_r($dato,1)."</pre>";
				//$delete = $objUser->Borrar_datos()
			 ?>
			 <script type="text/javascript">
			 	function editarnota(act_id){
			 		
			 		frmEditNts.elements['act_id'].value = act_id;					
					frmEditNts.submit();
			 	}

			 	function Borrar(act_id){
			 		frmDeleRes.elements['act_id'].value = act_id;					
					frmDeleRes.submit();
			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th># ACTA</th>
			        <th>FECHA DE ACTA</th>		             
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

							<td><?=$dato['act_num']?></td>
				      		<td><?=$dato['act_fecha']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editarnota('<?=$dato["act_id"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
			      						<a href="#" onclick="javascript:Borrar('<?=$dato["act_id"]?>');">
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
			  <form name="frmDeleRes" action="<?=$CONFIG['pathpln']?>relacion/Actborrar.php" target="deletenota"  method="post">
			  <input type="hidden" name="act_id">
			  </form>

			  <form  name="frmEditNts" action="paneladm.php?p=pleno&j=acta&crud=update" method="post" > 
			  <input type="hidden" name="act_id">
			  </form>
			  <iframe name="deletenota"  height="0" width="0"  ></iframe>