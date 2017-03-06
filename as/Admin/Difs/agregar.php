    <?php
    session_start();
        require_once("../../include/config/config.php");
    ?>
    <section class="services-style-3 main-contain">
    
    <div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Agregar Notas</h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        
                  <div class="form-main" >
                      <div class="row">
                        <form class="col l12"  method="POST" target=""  enctype="multipart/form-data" name="inscripcion" action="../insertarnota.php">
                          <div class="row">
                            <input type="hidden" name="id_nts" placeholder="ID DE USUARIO" >
                            
                            <div class="input-field col s12">

                              <!--input type="date" class="datepicker validate"  name="fecha_nts" required-->        
                              <input id="nombre" type="text" class="datepicker" name="fecha_nts" required >
                              <label for="nombre">Fecha</label>
                            </div>

                            <div class="input-field col s12">
                              <input name="ptitulo_nts" id="apellidos" type="text" class="validate" required="">
                              <label for="last_name">Titulo Principal</label>
                            </div>                                               
                         
                            <div class="input-field col s12">
                              <input name="titulo_nts" id="nombre_usuario" type="text" class="validate" >
                              <label for="username">Titulo</label>
                            </div>                      

                            <div class="input-field col s12">
                                <i class="material-icons prefix">note</i>
                                <textarea id="icon_prefix2" class="materialize-textarea" name="descripcioncorta_nts" length="200" required=""></textarea>
                                <label for="icon_prefix2">Descripcion Corta</label>
                              </div>

                              <div class="input-field col s12">
                                <i class="material-icons prefix">note</i>
                                <textarea length="500" id="icon_prefix2" class="materialize-textarea" name="descripcion_nts" required=""></textarea>
                                <label for="icon_prefix2">Descripcion</label>
                              </div>
                     
                          
                              <div class="input-field col s12">
                                <textarea id="icon_prefix2" length="120" class="materialize-textarea" name="nota_nts" required=""></textarea>
                               
                              </div>   

                              <div class="input-field col s12">
                                <i class="material-icons prefix">note</i>
                                <textarea id="icon_prefix2" length="400" class="materialize-textarea" name="pie_nts"></textarea>
                                <label for="icon_prefix2">Pie de Nota</label>
                              </div>   


                            <div class="input-field col s12">
                              <input name="url_nts" type="text" class="validate" >
                              <label for="url_nts">URL</label>
                            </div>

                              <div class="col s12">
                                  <div class="file-field input-field">
                                    <div class="btn">
                                      <i class="material-icons">attach_file</i>
                                      <span>Archivo</span>
                                      <input type="file" name="Arch" >
                                    </div>
                                    <div class="file-path-wrapper">
                                      <input class="file-path validate" type="text">
                                    </div>
                                  </div>
                              </div>
                              <div class="col s12">
                                  <div class="file-field input-field">
                                    <div class="btn">
                                      <i class="material-icons">photo</i>
                                      <span>IMAGEN</span>
                                      <input type="file" name="archivo" required >
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
                       
                      </div>
                    </form>
                            <iframe name="ingre" width="0" height="0"></iframe>
                  </div>
                </div>
              </div>
          </div>
      </section>
	
<script>
  jQuery.extend( jQuery.fn.pickadate.defaults, {
                    
                    format: 'yyyy/mm/dd',
                    formatSubmit: 'yyyy/mm/dd'
    
});
</script>