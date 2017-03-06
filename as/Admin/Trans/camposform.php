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
  <!-- Start Breadcrumb -->
                            <div class="no-subtitle">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2>Campos Formatos</h2>
                                        </div>
                                        <div class="text-center">
                                            <ul class="breadcrumbs">
                                                <li><a href="?p=transparencia">Transparencia</a></li>
                                                <li>Campos Formatos</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Breadcrumb -->
<div style="text-align: center; align-items: center;">
   <img src="construccion.png" align="center">
<!--section class="services-style-3 main-contain"  id="dos" >        
    <div  class="container">

        <h2>Articulos</h2>
          <ul class="nav nav-pills">
            <li><a data-toggle="pill" href="#menu4">Agregar</a></li>
            <li><a data-toggle="pill" href="#menu5">Consulta</a></li>
            <li><a data-toggle="pill" href="#menu6">Modificar</a></li>
          </ul>
          
          <div class="tab-content">                    
                <div id="menu4" class="tab-pane fade">
                  <h3>Menu 1</h3>
                    <form class="form"  method="POST">
                        <input type="hidden" name="p" value="transparencia" class="feedback-input">
                        <input type="hidden" name="j" value="obligaciones" class="feedback-input">
                        
                       <p>
                            <input name="idusr" type="hidden" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                        </p> 

                        <p >
                            <input name="name" type="text" class="feedback-input" placeholder="NOMBRE" id="name" />
                        </p>

                        <p >
                            <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" />
                        </p>                          

                        <div class="submit">
                            <input type="submit" value="Enviar" class="form-button" />
                        </div>
                    </form>
                </div>

                <div id="menu5" class="tab-pane fade">
                  <h3></h3>
                  <?php 
                    $datos = $objLey->consult(1);
                   ?>
                  <script type="text/javascript">
                                function editar(id_leyes){
                                    
                                    frmEditUser.elements['id_leyes'].value = id_leyes;                  
                                    frmEditUser.submit();
                                }

                                function BorrarId(id_leyes){
                                    //print_r(id_usr);
                                    //frmEditUser.elements['id_usr'].value = id_usr;                    
                                    //frmEditUser.submit();
                                    frmDeleUsr.elements['id_leyes'].value = id_leyes;                   
                                    frmDeleUsr.submit();
                                }
                             </script>
                             <div class="table-responsive" >
                              <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr style="background: #737677;">
                                    <th>ID</th>
                                    <th>LEY</th>
                                    <th>DESCRIPCION</th>
                                    <th>USUARIO</th>                  
                                    <th></th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  <?php 
                                    foreach ($datos as $row => $dato) {
                                        
                                        ?> 
                                            
                                            <?php 
                                                //foreach ($row as $dato) {
                                            ?>
                                            

                                            <td><?=$dato['id_leyes']?></td>
                                            <td><?=$dato['descripcion']?></td>
                                            <td><?=$dato['tipo']?></td>
                                            <td><?=$dato['fk_user_leyes']?></td>
                                            
                                            <?php       
                                            //  }
                                             ?>
                                            <td style="text-align: center;" >
                                                
                                                <div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                                        <a href="#" onclick="javascript:editar('<?=$dato["id_leyes"]?>');">
                                                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                              
                                                </div>
                                            </td>

                                            <td style="text-align: center;" >
                                                <div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                                        <a href="#" onclick="javascript:BorrarId('<?=$dato["id_leyes"]?>');">
                                                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                              
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    <?php 
                                    }
                                  ?>
                                    
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                              <form name="frmDeleUsr"  action="<?=$CONFIG['pathtrans']?>leyborrar.php" method="post">
                              <input type="hidden" name="id_leyes">
                              </form>

                              <form  name="frmEditUser" action="paneladm.php?p=usuarios&j=modificar" method="post" > 
                              <input type="hidden" name="id_leyes1">
                              </form>
                              <iframe name="IFBorrar"  height="500" width="500"></iframe>
                </div>

                <div id="menu6" class="tab-pane fade">
                  <h3>Menu 3</h3>
                      <form class="form"  method="POST">
                        <input type="hidden" name="p" value="transparencia" class="feedback-input">
                        <input type="hidden" name="j" value="obligaciones" class="feedback-input">
                        
                        <p>
                            <input name="idusr" type="hidden" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                        </p> 

                        <p >
                            <input name="name" type="text" class="feedback-input" placeholder="NOMBRE" id="name" />
                        </p>

                        <p >
                            <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" />
                        </p>                                    

                        <div class="submit">
                            <input type="submit" value="Enviar" class="form-button" />
                        </div>
                    </form>
                </div>
          </div>                  
    </div>
</section-->   