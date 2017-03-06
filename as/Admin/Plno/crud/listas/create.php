    <?php
    session_start();
        require_once("../../include/config/config.php");
    ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col m11 s12 l12 " style="align-items: center; text-align: center;" align="center">
                <h2></h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        
                                        <div class="form-main" >
                                            <div class="row">
                                              <form class="col l12"  method="POST" target="ingre"  enctype="multipart/form-data"  action="<?= $CONFIG['pathpln']?>relacion/Acuagregar.php">
                                                <div class="row">
                                                 <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" length="500" class="materialize-textarea" name="expedien"></textarea>
                                                      <label for="icon_prefix2">Expedientes</label>
                                                    </div>   

                                                  <div class="input-field col s12">
                                                    <input name="v_numanio" type="number" class="validate" min="2000" max="2020" step="1" value="<?=date('Y')?>" required="">
                                                    <label for="v_numanio">Año de Acuerdo</label>
                                                  </div>  

                                                  <div class="input-field col s12">                                                      
                                                    <input id="nombre" type="text" class="datepicker" name="fecha_lista" required >
                                                    <label for="nombre">Fecha de Acuerdo</label>
                                                  </div>                                               

                                                  

                                                    <div class="col s12">
                                                        <div class="file-field input-field">
                                                          <div class="btn">
                                                            <i class="material-icons">attach_file</i>
                                                            <span>Archivo</span>
                                                            <input type="file" name="Arch" required="" >
                                                          </div>
                                                          <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text">
                                                          </div>
                                                        </div>
                                                    </div>
                                                  <div align="center" class="col l12" style="align-items: center;">
                                                    <!--input type="submit" value="Enviar" class="form-button" /-->
                                                    <button class="btn waves-effect waves-light col l12" type="submit" name="InSend" >Enviar
                                                        <i class="material-icons "></i>
                                                      </button>
                                                </div>
                                              </form>
                                               <iframe name="ingre" height="0" width="0"></iframe>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                            </section>

	
<script>
  jQuery.extend( jQuery.fn.pickadate.defaults, {
                    
                    format: 'dd/mm/yyyy',
                    formatSubmit: 'dd/mm/yyyy',
    
});
</script>