<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes;
    $datos = $objLey->consult(1);
    $objArt = new articulos;
    /*$objFrac = new fracciones;
    $objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathtrans']?>Artagregar.php">

                        
                        <div class="input-field col s12">                              
                                 
                          <select name="fkley">
                             <option value="" disabled selected>Elige la ley</option>
                             <?php 
                                 foreach ($datos as $row => $dato) {                                        
                              ?> 
                              <option value="<?=$dato['id_leyes']?>" required><?=$dato['tipo']?></option>
                              <?php 
                                 }
                              ?>                            
                          </select>
                          <label>Tipo de Ley</label>
                        </div>

                        <div class="input-field col s12">
                          <input name="idarticulo"  type="number" class="validate" required >
                          <label for="idarticulo">Numero de Articulo</label>
                        </div>  

                         <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="artdesc" length="400" required></textarea>
                            <label for="icon_prefix2">Descripcion del Articulo</label>
                        </div> 

                        <div class="input-field col s12">
                          <input name="actiArt" id="acti" type="hidden" max="1" min="0" class="validate"  value="1">
                        </div>                           

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe id="Modicar" name="agregar" height="0" width="0"  ></iframe> 

                </div>
