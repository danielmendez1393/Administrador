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
                                              <form class="col l12"  method="POST"   enctype="multipart/form-data" name="inscripcion" action="<?= $CONFIG['pathpln']?>relacion/Resolagregar.php">
                                                <div class="row">
                                                  <input type="hidden" name="id_nts" placeholder="ID DE USUARIO" >
                                                  
                                                  

                                                  <div class="input-field col s12">
                                                    <input name="Expediente"  type="text" class="validate" required="">
                                                    <label for="Expediente">Expediente</label>
                                                  </div>                                               
                                               
                                                  <div class="input-field col s12">
                                                    <input name="SujetoOblig" type="text" class="validate" >
                                                    <label for="SujetoOblig">Nombre de Sujeto Obligado</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="Recurrente" type="text" class="validate" >
                                                    <label for="Recurrente">Nombre de Recurrente</label>
                                                  </div>  

                                                  <div class="input-field col s12">
                                                    <input name="AResolucion" type="number" class="validate" min="2000" max="2020" step="1" value="<?=date('Y')?>" >
                                                    <label for="AResolucion">Año de Resolucion</label>
                                                  </div>  

                                                  <div class="input-field col s12">                                                      
                                                    <input id="nombre" type="text" class="datepicker" name="fecha_rsl" required >
                                                    <label for="nombre">Fecha de Resolucion</label>
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
