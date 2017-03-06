    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/usuario.php");
            $objUsr = new tiposusr;
            $Modi = $objUsr->verall($_POST['id_tipousr']); 
    ?>
    <section class="services-style-3 main-contain">
    
    <div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2></h2>   

                                        <div class="form-main" style="text-align: left; align-items: center;" align="center">
                                            <div class="row">
                                              <form class="col l12" target="update" method="POST" action="<?=$CONFIG['sitio']?>Administrador/Admin/user/relacion/tiposmodificar.php">
                                                <div class="row">
                                                  <input type="hidden" name="idusuario" id="idusr" placeholder="ID DE USUARIO"  value="<?=$_POST['id_tipousr']?>" >
                                                  <div class="input-field col s12">
                                                    <input id="nombre" type="text" class="validate" name="named" required value="<?=$Modi['tusr_nombre']?>">
                                                    <label for="first_name">Nombre</label>
                                                  </div>
                                                 

                                                  
                                                 
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

  