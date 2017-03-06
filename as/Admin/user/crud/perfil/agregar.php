  <?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
 ?>
    <section class="services-style-3 main-contain">
    
    <div  class="container">
          <div class=" col s12" style="align-items: center; text-align: left;" align="center">
                <h3>Agregar</h3>   
                                      
                                        <div class="form-main" style="text-align: left; align-items: center;" align="center">
                                            <div class="row">
                                              <form class="col l12" target="Modifi" method="POST" action="<?=$CONFIG['sitio']?>Administrador/Admin/user/relacion/tiposagregar.php" autocomplete="off">
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input id="nombre" type="text" class="validate" name="name" required>
                                                    <label for="first_name">Nombre del Area</label>
                                                  </div>

                                                  <div align="center" class="col l12" style="align-items: center;">
                                                    <!--input type="submit" value="Enviar" class="form-button" /-->
                                                    <button class="btn waves-effect waves-light col l12" type="submit" name="action" >Enviar
                                                        <i class="material-icons ">send</i>
                                                      </button>
                                                </div>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

  <iframe id="Modicar" name="Modifi" height="0" width="0"  ></iframe> 

    

