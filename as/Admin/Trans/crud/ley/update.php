<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes;
    $UpLey = $objLey->read($_POST['subleyid']);
 ?>
<div >
              <h3></h3>
                  <form class="form"  method="POST" target="update"  action="<?=$CONFIG['pathtrans']?>leymodificar.php">
                        <input type="hidden" name="leyid" value="<?=$UpLey['id_leyes']?>">
                        <input value="<?=$UpLey['fk_user_leyes']?>" name="idley" id="ley" type="hidden" class="validate" >
                    <div class="input-field col s12">
                          <input value="<?=$UpLey['tipo']?>" name="ley" id="ley" type="text" class="validate" required>
                          <label for="ley">Nombre de Ley</label>
                        </div>                                              

                        <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="descripcionley" ><?=$UpLey['descripcion']?></textarea>
                            <label for="icon_prefix2">Descripcion de la Ley</label>
                          </div>

                        <div class="input-field col s12">
                          <input value="<?=$UpLey['usr_nombre'].$UpLey['usr_apellido'] ?>" name="ley" id="ley" type="hidden" class="validate" disabled> 
                          
                        </div>      

                        <div align="center" class="col l12" style="align-items: center;">
                            <!--input type="submit" value="Enviar" class="form-button" /-->
                            <button class="btn waves-effect waves-light col l12" type="submit" name="Submitmodificar" >Enviar
                                <i class="material-icons "></i>
                              </button>
                        </div>
                </form>

                            <iframe name="update" height="0" width="0" ></iframe>
            </div>


