    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/pleno.php");
            $objResMod = new acuerdos;
            $ConsulModi = $objResMod->readid($_POST['acr_id']);
            //var_dump($ConsulModi['nts_fecha']);
    ?>
    <section class="services-style-3 main-contain">
 	 	
		    <div  class="container">
          <div class=" col l11 col m4 col s12" style="align-items: center; text-align: center;" align="center">
                   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" <h2>Modificar Notas</h2>-->
                                        
                <div class="form-main" >
                    <div class="row">
                      <form class="col l12"  method="POST" target="updatenota"  enctype="multipart/form-data" name="inscripcion" action="<?= $CONFIG['pathpln']?>relacion/Acumodificar.php">
                        <div class="row">
                          <input type="hidden" name="id_Acu" placeholder="ID DE USUARIO" value="<?=$ConsulModi['acr_id']?>" >
                          
                            <div class="input-field col s12">
                              <i class="material-icons prefix">note</i>
                              <textarea id="icon_prefix2" length="400" class="materialize-textarea" name="expedien"><?=$ConsulModi['acr_expedientes']?></textarea>
                              <label for="icon_prefix2">Expedientes</label>
                            </div>   

                            <div class="input-field col s12">
                              <input name="v_numanio" type="number" class="validate" min="2000" max="2020" step="1"  required="" value="<?=$ConsulModi['acr_anio']?>">
                              <label for="v_numanio">Año de Acuerdo</label>
                            </div>  

                            <div class="input-field col s12">                                                      
                              <input id="nombre" type="text" class="datepicker" name="fecha_lista" required  value="<?=$ConsulModi['acr_fecha']?>">
                              <label for="nombre">Fecha de Acuerdo</label>
                            </div>                                               


                            <div class="col s12">
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <i class="material-icons">attach_file</i>
                                    <span>Archivo</span>
                                    <input type="file" name="Arch"  >
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?=$ConsulModi['acr_archivo']?>">
                                  </div>
                                </div>
                            </div> 
                            <input type="hidden" name="archhidden" value="<?=$ConsulModi['acr_archivo']?>">                           
                          <div align="center" class="col l12" style="align-items: center;">
                            <!--input type="submit" value="Enviar" class="form-button" /-->
                            <button class="btn waves-effect waves-light col l12" type="submit" name="InSend" >Enviar
                                <i class="material-icons "></i>
                              </button>
                        </div>
                      </form>
                    </div>
                </div>                                        
          </div>
        </div>
    </section>
    <iframe name="updatenota" height="0" width="0"></iframe>
	
<script>
  jQuery.extend( jQuery.fn.pickadate.defaults, {
                    
                    format: 'dd/mm/yyyy',
                    formatSubmit: 'dd/mm/yyyy',
    
});
</script>