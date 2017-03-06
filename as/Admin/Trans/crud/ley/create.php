<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes;
   /* $objArt = new articulos;
    $objFrac = new fracciones;
    $objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form"  method="POST">
                        

                           

                        <div class="input-field col s12">
                          <input name="ley" id="ley" type="text" class="validate" required >
                          <label for="ley">Nombre de Ley</label>
                        </div>                      

                        <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="descripcionley" length="120"></textarea>
                            <label for="icon_prefix2">Descripcion de la Ley</label>
                        </div> 

                        <div class="input-field col s12">
                          <input name="acti" id="acti" type="hidden" max="1" min="0" class="validate" value="1" >
                        </div>     

                        <div align="center" class="col l12" style="align-items: center;">
                            <!--input type="submit" value="Enviar" class="form-button" /-->
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubmitAgregar" >Enviar
                                <i class="material-icons "></i>
                              </button>
                        </div>
                        <?php 
                                $V_leyidusr = $_SESSION['id_usr'];
                                $v_leytipo = $_POST['ley'];
                                $v_leydesc = $_POST['descripcionley'];
                                $v_activo = $_POST['acti'];


                               if (isset($_POST['SubmitAgregar'])) {
                                 
                                   if (empty($v_leytipo) && empty($v_leydesc)) {
                                     echo '<script type="text/javascript">
                                                                          alert("Todos los Campos son Requeridos");
                                                                          window.parent.location="paneladm.php?p=transparencia&j=leyes&crud=create"
                                                                          </script>';
                                    }else{
                                        if (empty($v_activo)) {
                                         $IngresarLey = $objLey->replace($v_leydesc,$v_leytipo,$V_leyidusr,$v_activo);
                                             echo '<script type="text/javascript"> 
                                                                                  alert("Los Datos se Guardaron Satisfactoriamente");
                                                                                  window.parent.location="paneladm.php?p=transparencia&j=leyes&crud=read"
                                                                                  </script>';
                                                                                  exit();
                                        }else{
                                          if ($v_activo == 0) {
                                            $IngresarLey = $objLey->replace($v_leydesc,$v_leytipo,$V_leyidusr,$v_activo);
                                             echo '<script type="text/javascript"> 
                                                                                  alert("Los Datos se Guardaron Satisfactoriamente");
                                                                                  window.parent.location="paneladm.php?p=transparencia&j=leyes&crud=read"
                                                                                  </script>';
                                          }else{
                                            $IngresarLey = $objLey->replace($v_leydesc,$v_leytipo,$V_leyidusr,$v_activo);
                                            var_dump($IngresarLey);
                                             echo '<script type="text/javascript"> 
                                                                                  alert("Los Datos se Guardaron Satisfactoriamente");
                                                                                  window.parent.location="paneladm.php?p=transparencia&j=leyes&crud=read"
                                                                                  </script>';
                                          }
                                          
                                        }
                                       
                                      }

                                      
                                       
                                      

                                    
                                }
                               


                             ?>
                    </form>

                </div>
