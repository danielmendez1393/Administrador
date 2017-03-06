    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/notas.php");
            $objConMod = new notas;
            $ConsulModi = $objConMod->consultarnotaModif($_POST['nts_id']);
            //var_dump($ConsulModi['nts_fecha']);
    ?>
    <section class="services-style-3 main-contain">
    
    <div  class="container">
          <div class=" col l11 col m4 col s12" style="align-items: center; text-align: center;" align="center">
                <h2>Modificar Notas</h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        <div class="form-main" >
                                            <div class="row">
                                              <form class="col l12"  target="updatenota" method="POST" action="<?=$CONFIG['sitio']?>Administrador/modificarnota.php"  enctype="multipart/form-data">
                                                <div class="row">
                                                  <input type="hidden" name="id_nts" placeholder="ID DE USUARIO" value="<?=$_POST['nts_id']?>" >
                                                   <div class="input-field col s12">

                                                    <!--input type="date" class="datepicker validate"  name="fecha_nts" required-->        
                                                    <input id="nombre" type="text" class="datepicker" name="fecha_nts" required value="<?=$ConsulModi['FECHA']?>">
                                                    <label for="nombre">Fecha</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="ptitulo_nts" id="apellidos" type="text" class="validate" value="<?=$ConsulModi['nts_ptitulo']?>">
                                                    <label for="last_name">Titulo Principal</label>
                                                  </div>                                               
                                               
                                                  <div class="input-field col s12">
                                                    <input name="titulo_nts" id="nombre_usuario" type="text" class="validate" value="<?=$ConsulModi['nts_titulo']?>" >
                                                    <label for="username">Titulo</label>
                                                  </div>                      

                                                  <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="descripcioncorta_nts"><?=$ConsulModi['nts_descripcioncorta']?></textarea>
                                                      <label for="icon_prefix2">Descripcion Corta</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="descripcion_nts"><?=$ConsulModi['nts_descripcion']?></textarea>
                                                      <label for="icon_prefix2">Descripcion</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="descripcioninterior_nts"><?=$ConsulModi['nts_descinteriorcorta']?></textarea>
                                                      <label for="icon_prefix2">Descripcion Interior</label>
                                                    </div>                        
                                                
                                                    <div class="input-field col s12">

                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="nota_nts"><?=$ConsulModi['nts_nota']?></textarea>
                                                      
                                                    </div>   

                                                    <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="pie_nts"><?=$ConsulModi['nts_pie']?></textarea>
                                                      <label for="icon_prefix2">Pie de Nota</label>
                                                    </div>   

                                                  <div class="input-field col s12">
                                                    <input name="rotativo_nts" type="number" max="1" min="0" class="validate" value="<?=$ConsulModi['nts_isrotativa']?>">
                                                    <label for="rotativo_nts">Tipo de Rotativo</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="url_nts" type="text" class="validate" value="<?=$ConsulModi['nts_url']?>">
                                                    <label for="url_nts">URL</label>
                                                  </div>

                                                    <div class="col s12">
                                                        <div class="file-field input-field">
                                                          <div class="btn">
                                                            <i class="material-icons">attach_file</i>
                                                            <span>Archivo</span>
                                                            <input type="file" name="Doc"  >
                                                          </div>
                                                          <div class="file-path-wrapper">
                                                            <input class="file-path validate" name="path" type="text" value="<?=$ConsulModi['nts_archivo']?>" >
                                                          </div>
                                                        </div>
                                                    </div>
                                                     <input type="hidden" name="dochidden" value="<?=$ConsulModi['nts_archivo']?>">
                                                    
                                                    <div class="col s12">
                                                        <div class="file-field input-field">
                                                          <div class="btn">
                                                            <i class="material-icons">photo</i>
                                                            <span>IMAGEN</span>
                                                            
                                                            <input type="file" name="Image" value="<?=$CONFIG['sitioimgnotas'].$ConsulModi['nts_imagen']?>"   >
                                                          </div>
                                                          <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" value="<?=$ConsulModi['nts_imagen']?>">
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="imagehidden" value="<?=$ConsulModi['nts_imagen']?>">

                                                   

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
                    
                    format: 'yyyy/mm/dd',
                    formatSubmit: 'yyyy/mm/dd',
    
});
</script>