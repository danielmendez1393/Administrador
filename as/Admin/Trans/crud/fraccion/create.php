<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objArt = new articulos;
    $datos = $objArt->read(1);
    /*$objFrac = new fracciones;
    /*$objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathtrans']?>Fracagregar.php">

                        
                        <div class="input-field col s12">                              
                                 
                          <select name="fkart">
                             <option value="" disabled selected>Elige el Articulo</option>
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
                          <input name="Numfracc"  type="number" class="validate" required >
                          <label for="Numfracc">Numero de Fraccion</label>
                        </div>  

                        <div class="input-field col s12">
                          <input name="tituloFracc"  type="text" class="validate" required >
                          <label for="tituloFracc">Titulo del documento de la Fraccion</label>
                        </div> 

                         <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="fraccdesc" length="120" required></textarea>
                            <label for="icon_prefix2">Descripcion de la Fraccion</label>
                        </div>  

                         <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="fracclink"  required></textarea>
                            <label for="icon_prefix2">Link del documento de la Fraccion</label>
                        </div> 

                        <div class="input-field col s12">
                          <input name="actiFracc" id="actiFracc" type="hidden" max="1" min="0" class="validate" value="1" >
                        </div>
                       

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe name="agregarfraccion" height="0" width="0"  ></iframe> 

                </div>
