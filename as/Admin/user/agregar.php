    <?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/usuario.php");
    $objUser = new Datos;
    $datos = $objUser->Tipo_usuario(1);
 ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col s12" style="align-items: center; text-align: left;" align="center">
                <h3>Agregar Usuarios</h3>  
                                        <div class="form-main" style="text-align: left; align-items: center;" align="center">
                                            <div class="row">
                                              <form target="" action="<?=$CONFIG['sitio']?>Administrador/insertarlink.php" method="POST" name="">
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input id="nombre" type="text" class="validate" name="name" required>
                                                    <label for="first_name">Nombre</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="lastname" id="apellidos" type="text" class="validate">
                                                    <label for="last_name">Apellidos</label>
                                                  </div>                                                
                                               
                                                  <div class="input-field col s12">
                                                    <input name="usrname" id="nombre_usuario" type="text" class="validate">
                                                    <label for="username">Nombre de usuario</label>
                                                  </div>                                               
                                                
                                                  <div class="input-field col s12">
                                                    <input name="password" id="password" type="password" class="validate">
                                                    <label for="password">Contraseña</label>
                                                  </div>


                                                  <select class="form-control col s12" name="tipo">
                                                     <option value="" disabled selected>Elige el Area del Usuario</option>
                                                           <?php 
                                                               foreach ($datos as $row => $dato) {                                        
                                                            ?> 
                                                            <option value="<?=$dato['id_tipousr']?>" required><?=$dato['tusr_nombre']?></option>
                                                            <?php 
                                                               }
                                                            ?>         
                                                  </select>

                                                  <div align="center" class="col s12" style="align-items: center;">
                                                    <button type="submit" class="btn btn-lg" style="background-color: #9A2EFE">
                                                      <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Ingresar
                                                    </button>
                                                </div>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

	<iframe id="Modicar" name="Modifi" height="0" width="0"  ></iframe> 

		

