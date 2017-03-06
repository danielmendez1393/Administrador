    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/pleno.php");
            $objInf = new informe;
            $ConsulModi = $objInf->readid($_POST['id_inf']);
            //var_dump($ConsulModi['nts_fecha']);
    ?>
    <section class="services-style-3 main-contain">
 	 	
		    <div  class="container">
          <div class=" col l11 col m4 col s12" style="align-items: center; text-align: center;" align="center">
                   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" <h2>Modificar Notas</h2>-->
                                        
                <div class="form-main" >
                    <div class="row">
                      <form class="col l12"  method="POST"   enctype="multipart/form-data" name="inscripcion" action="<?= $CONFIG['pathpln']?>relacion/Infmodificar.php">
                        <div class="row">
                          <input type="hidden" name="id_inf" placeholder="ID DE USUARIO" value="<?=$ConsulModi['id_inf']?>" >
                          
                           <div class="input-field col s12">
                              <i class="material-icons prefix">note</i>
                              <textarea length="500" id="icon_prefix2" class="materialize-textarea" name="descripcion_informe"><?=$ConsulModi['descripcion']?></textarea>
                              <label for="icon_prefix2">Descripcion del Informe</label>
                            </div>

                          <div class="input-field col s12">
                            <input name="anio_inf" type="number" class="validate" min="2000" max="2020" step="1" value="<?=$ConsulModi['anio']?>" >
                            <label for="anio_inf">Año de Informe</label>
                          </div>      

                            <div class="col s12">
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <i class="material-icons">attach_file</i>
                                    <span>Archivo</span>
                                    <input type="file" name="Arch"  >
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?=$ConsulModi['archivo']?>">
                                  </div>
                                </div>
                            </div>
                          <input type="hidden" name="archhidden" value="<?=$ConsulModi['archivo']?>">

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