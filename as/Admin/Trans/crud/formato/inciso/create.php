<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objInc = new incisos;
    $datos = $objInc->read(1);
    /*$objFrac = new fracciones;
    /*$objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathtrans']?>Incagregar.php">

                        
                        <div class="input-field col s12 l12 m12">                              
                                 
                          <select name="fkArt">
                             <option value="" disabled selected>Elige el Inciso</option>
                             <?php 
                                 foreach ($datos as $row => $dato) {                                        
                              ?> 
                              <option value="<?=$dato['id_inc']?>" required><?=$dato['num_inc']?></option>
                              <?php 
                                 }
                              ?>                            
                          </select>
                          <label>Numero de Inciso</label>
                        </div>

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomfor"  type="text" class="validate" required >
                          <label for="Nomfor">Titulo de Formato</label>
                        </div>  

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomcor" id="" type="text" class="validate" >
                          <label for="Nomcor">Nombre Corto de Formato</label>
                        </div>

                         <div class="input-field col s12 l12 m12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="Descform" length="120" required></textarea>
                            <label for="icon_prefix2">Descripcion del Formato</label>
                        </div> 
                       

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe name="agregarfraccion" height="0" width="0"  ></iframe> 

                </div>
