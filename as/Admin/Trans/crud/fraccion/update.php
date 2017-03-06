<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objArt = new articulos;
    $datos = $objArt->read(1);
    $objFracc = new fracciones;
    $UpFracc = $objFracc->readall($_POST['SubFracid']);
 ?>
<div >
              <h3></h3>
                  <form class="form" target="updh"  method="POST"  action="<?=$CONFIG['pathtrans']?>Fracmodificar.php">
                        <input type="hidden" name="frac_id" value="<?=$UpFracc['id_frac']?>">
                                        

                        <div class="input-field col s12">      
                          <select name="fkley" disabled >
                             <option value="<?=$UpFracc['id_leyes']?>" ><?=$UpFracc['tipo']?></option>
                          </select>
                          <label>Tipo de Ley</label>
                        </div> 

                        <div class="input-field col s12" >      
                          <select name="fkart" >
                             <option value="<?=$UpFracc['id_art']?>" selected  ><?=$UpFracc['num_art']?></option>
                             <?php 
                                 foreach ($datos as $row => $dato) {                                        
                              ?> 
                              <option value="<?=$dato['id_art']?>" required><?=$dato['num_art']?></option>
                              <?php 
                                 }
                              ?>  
                          </select>
                          <label>Numero de Articulo</label>
                        </div>                                              

                        <div class="input-field col s12">
                          <input name="fracnum"  type="text" class="validate" value="<?=$UpFracc['num_frac']?>" required >
                          <label for="fracnum">Numero de Fraccion</label>
                        </div> 

                        <div class="input-field col s12">
                          <input name="tituloFracc"  type="text" class="validate" value="<?=$UpFracc['titulo_frac']?>"  required >
                          <label for="tituloFracc">Titulo del documento de la Fraccion</label>
                        </div> 

                        <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="fraccdesc" length="120" required><?=$UpFracc['descripcion']?></textarea>
                            <label for="icon_prefix2">Descripcion de la Fraccion</label>
                        </div> 

                        <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="fracclink"  required><?=$UpFracc['doc_frac']?></textarea>
                            <label for="icon_prefix2">Link del documento de la Fraccion</label>
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


