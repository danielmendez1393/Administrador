<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objArt = new articulos;
    $UpArt = $objArt->readall($_POST['SubIncid']);
 ?>
<div >
              <h3></h3>
                  <form class="form" target="updh"  method="POST"  action="<?=$CONFIG['pathtrans']?>Incmodificar.php">
                        <input type="hidden" name="frac_id" value="">
                                        
                          <select name="fkfracc">
                             <option value="<?=$UpArt['id_frac']?>" selected disabled><?=$UpArt['num_frac']?></option>
                             <?php 
                                 foreach ($datos as $row => $dato) {                                        
                              ?> 
                              <option value="<?=$dato['id_frac']?>" required><?=$dato['num_frac']?></option>
                              <?php 
                                 }
                              ?>                          
                          </select>
                          <label>Numero de Articulo</label>
                                                          

                        <div class="input-field col s12">
                          <input name="NameForm"  type="text" class="validate" value="" required >
                          <label for="NameForm">Nombre de Formato</label>
                        </div>                                          

                        <div class="input-field col s12">
                          <input name="NameForCor"  type="text" class="validate" value="" required >
                          <label for="NameForCor">Nombre Corto de Formato</label>
                        </div> 

                        <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="FormDesc" length="120" required></textarea>
                            <label for="icon_prefix2">Descripcion del Formato</label>
                        </div> 

                        <div align="center" class="col l12" style="align-items: center;">
                            <!--input type="submit" value="Enviar" class="form-button" /-->
                            <button class="btn waves-effect waves-light col l12" type="submit" name="Submitmodi" >Enviar
                                <i class="material-icons "></i>
                              </button>
                        </div>
                </form>

                            <iframe name="updh" height="0" width="0" ></iframe>
            </div>


