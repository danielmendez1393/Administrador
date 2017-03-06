    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/usuario.php");
            $objUsr = new datos;
            $Modi = $objUsr->Consultar_usuario($_POST['id_usr']); 
             $datos = $objUsr->Tipo_usuario(1);
    ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Modificar Usuarios</h2>   
                                       
                                        <div class="form-main" style="text-align: left; align-items: center;" align="center">
                                            <div class="row">
                                              <form class="col l12" target="update" method="POST" action="<?=$CONFIG['sitio']?>Administrador/Modificarlink.php">
                                                <div class="row">
                                                  <input type="hidden" name="idusuario" id="idusr" placeholder="ID DE USUARIO"  value="<?=$_POST['id_usr']?>" >
                                                  <div class="input-field col s12">
                                                    <input id="nombre" type="text" class="validate" name="named" required value="<?=$Modi['NOMBRE']?>">
                                                    <label for="first_name">Nombre</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="lastname" id="apellidos" type="text" class="validate" value="<?=$Modi['APELLIDO']?>">
                                                    <label for="last_name">Apellidos</label>
                                                  </div>                                                
                                               
                                                  <div class="input-field col s12">
                                                    <input name="usrname" id="nombre_usuario" type="text" class="validate" value="<?=$Modi['USUARIO']?>">
                                                    <label for="username">Nombre de usuario</label>
                                                  </div>   
                                                  <br>                                           
                                                <select class="form-control col s12" name="tipo">
                                                    <option value="<?=$Modi['TIPO']?>"  selected><?=$Modi['DEPARTAMENTO']?></option>
                                                         <?php 
                                                             foreach ($datos as $row => $dato) {                                        
                                                            ?> 
                                                          <option value="<?=$dato['id_tipousr']?>" required><?=$dato['tusr_nombre']?></option>
                                                          <?php 
                                                             }
                                                          ?>         
                                                </select>
                                                <br>
                                                   
                                                  <div align="center" class="col l12" style="align-items: center;">
                                                    <!--input type="submit" value="Enviar" class="form-button" /-->
                                                    <button class="btn waves-effect waves-light col l12" type="submit" name="action" >Enviar
                                                        <i class="material-icons "></i>
                                                      </button>
                                                </div>

                                              </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <iframe name="update" height="0" width="0" ></iframe>

	