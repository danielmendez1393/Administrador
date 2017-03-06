			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/usuario.php");
				$objUser = new tiposusr;
				$datos = $objUser->ver();
				//echo "<pre>".print_r($dato,1)."</pre>";
				//$delete = $objUser->Borrar_datos()
			 ?>
			 <script type="text/javascript">
			 	function editar(id_tipousr){
			 		
			 		frmEditUser.elements['id_tipousr'].value = id_tipousr;					
					frmEditUser.submit();
			 	}

			 	function BorrarId(id_tipousr){
			 		//print_r(id_usr);
			 		//frmEditUser.elements['id_usr'].value = id_usr;					
					//frmEditUser.submit();
			 		frmDeleUsr.elements['id_tipousr'].value = id_tipousr;					
					frmDeleUsr.submit();
			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th>ID</th>
			        <th>NOMBRE</th>		        
			        <th></th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      <?php 
			      	foreach ($datos as $row => $dato) {
			      		
			      		?> 
			      			
			      			<?php 
			      				//foreach ($row as $dato) {
			      			?>
			      			<!--<td><?=$dato?></td>-->

			      			<td><?=$dato['id_tipousr']?></td>
				      		<td><?=$dato['tusr_nombre']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editar('<?=$dato["id_tipousr"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      			</td>

			      			<td style="text-align: center;" >
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
			      						<a href="#" onclick="javascript:BorrarId('<?=$dato["id_tipousr"]?>');">
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
			  <form name="frmDeleUsr" target="IFBorrar" action="<?=$CONFIG['sitio']?>Administrador/Admin/user/relacion/tiposborrar.php" method="post">
			  <input type="hidden" name="id_tipousr">
			  </form>

			  <form  name="frmEditUser" action="paneladm.php?p=usuarios&j=tipousr&crud=update" method="post" > 
			  <input type="hidden" name="id_tipousr">
			  </form>
			  <iframe name="IFBorrar"  height="00" width="00"></iframe>