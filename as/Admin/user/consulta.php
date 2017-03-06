<?php  
require_once($CONFIG['pathinclude']."config/cx.php");
require_once($CONFIG['pathinclude']."cls/usuario.php");
#$objDatosUsr = new Datos;
#$datos = $objDatosUsr->Tipo_usuario(1);
#$info = $objDatosUsr->Consultar_datos(1);
	//echo "<pre>".print_r($dato,1)."</pre>";
	//$delete = $objUser->Borrar_datos()
 ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar</button>

<div class="modal fade bs-example-modal-lg col l8 offset-l2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div align="center">
    	<h4>Agregar Usuario</h4>	
    </div>
      
      <br>
      <br>
      <br>
      <div class="modal-body">
        <form method="POST" target="Modifi" action="<?=$CONFIG['sitio']?>Administrador/insertarlink.php" >
        <br>
		  <div class="input-field col s8 offset-s2">
		    <input id="nombre" type="text" class="validate" name="name" required>
		    <label for="first_name">Nombre</label>
		  </div>

		  <div class="input-field col s8 offset-s2">
		    <input name="lastname" id="apellidos" type="text" class="validate">
		    <label for="last_name">Apellidos</label>
		  </div>                                                

		  <div class="input-field col s8 offset-s2">
		    <input name="usrname" id="nombre_usuario" type="text" class="validate">
		    <label for="username">Nombre de usuario</label>
		  </div>                                               

		  <div class="input-field col s8 offset-s2">
		    <input name="password" id="password" type="password" class="validate">
		    <label for="password">Contraseña</label>
		  </div>
		  <br>
		  <select class="form-control col s8 offset-s2" name="tipo">
			   <option value="" disabled selected >Elige el Area del Usuario</option>
               <?php 
                   foreach ($datos as $row => $dato) {                                        
                ?> 
                <option value="<?=$dato['id_tipousr']?>" required><?=$dato['tusr_nombre']?></option>
                <?php 
                   }
                ?>         
			</select>
			<br>
			<br>
			<div class="col s8 offset-s2" align="center" style="padding: 5px">
				<button type="submit" name="action" class="btn btn-info">Agregar <i class="material-icons ">send</i></button>
		  		<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
			</div>
			 
        </form>
      </div>
    
  </div>
</div>


	<iframe id="Modicar" name="Modifi" height="0" width="0"  ></iframe> 
      		 <script type="text/javascript">
			 $('#myModal').modal(options)
			 	function editar(id_usr){
			 		
			 		frmEditUser.elements['id_usr'].value = id_usr;					
					frmEditUser.submit();
			 	}

			 	function BorrarId(id_usr){
			 		//print_r(id_usr);
			 		//frmEditUser.elements['id_usr'].value = id_usr;					
					//frmEditUser.submit();
			 		frmDeleUsr.elements['id_usr'].value = id_usr;					
					frmDeleUsr.submit();
			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th>USUARIO</th>
			        <th>NOMBRE</th>
			        <th>APELLIDO</th>
			        <th>PERFIL</th>
			        <th>DEPARTAMENTO</th>			        
			        <th></th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      <?php 
			      	foreach ($info as $row => $dato) {
			      		
			      		?> 
			      			
			      			<?php 
			      				//foreach ($row as $dato) {
			      			?>
			      			<!--<td><?=$dato?></td>-->

							<td><?=$dato['USUARIO']?></td>
				      		<td><?=$dato['NOMBRE']?></td>
				      		<td><?=$dato['APELLIDO']?></td>
				      		<td><?=$dato['PERFIL']?></td>
				      		<td><?=$dato['DEPARTAMENTO']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editar('<?=$dato["ID"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      			</td>

			      			<td style="text-align: center;" >
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
			      						<a href="#" onclick="javascript:BorrarId('<?=$dato["ID"]?>');">
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
			  <form name="frmDeleUsr" target="IFBorrar" action="<?=$CONFIG['sitio']?>Administrador/borrarlink.php" method="post">
			  <input type="hidden" name="id_usr">
			  </form>

			  <form  name="frmEditUser" action="paneladm.php?p=usuarios&j=modificar" method="post" > 
			  <input type="hidden" name="id_usr">
			  </form>
			  <iframe name="IFBorrar"  height="500" width="500"></iframe>