			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/notas.php");
				$objUser = new notas;
				$notas = $objUser->consultanota(1);
				//echo "<pre>".print_r($dato,1)."</pre>";
				//$delete = $objUser->Borrar_datos()
			 ?>
			 <script type="text/javascript">
			 	function editarnota(nts_id){
			 		
			 		frmEditNts.elements['nts_id'].value = nts_id;					
					frmEditNts.submit();
			 	}

			 	function Borrarnota(nts_id){
			 		//print_r(id_usr);
			 		//frmEditUser.elements['id_usr'].value = id_usr;					
					//frmEditUser.submit();
			 		frmDeleNts.elements['nts_id'].value = nts_id;					
					frmDeleNts.submit();
			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th>FECHA</th>
			        <th>TITULO PRINCIPAL</th>
			        <th>TITULO</th>		        
			        <th></th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      <?php 
			      	foreach ($notas as $row => $dato) {
			      		
			      		?> 
			      			
			      			<?php 
			      				//foreach ($row as $dato) {
			      			?>
			      			<!--<td><?=$dato?></td>-->
							<td><?=$dato['nts_fecha']?></td>
				      		<td><?=$dato['nts_ptitulo']?></td>
				      		<td><?=$dato['nts_titulo']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editarnota('<?=$dato["nts_id"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      			</td>

			      			<td style="text-align: center;" >
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
			      						<a href="#" onclick="javascript:Borrarnota('<?=$dato["nts_id"]?>');">
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
			  <form target="deletenota" name="frmDeleNts" action="<?=$CONFIG['sitio']?>Administrador/borrarnota.php" method="post">
			  <input type="hidden" name="nts_id">
			  </form>

			  <form  name="frmEditNts" action="paneladm.php?p=difusion&j=notas&k=modificar" method="post" > 
			  <input type="hidden" name="nts_id">
			  </form>
			  <iframe name="deletenota"  height="0" width="0"  ></iframe>