<?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'create';
              ?>   
               
                        <div class="">
                        <h2 style="text-align: center;">Tipo de Perfil</h2>
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=usuarios&j=perfil&crud=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=usuarios&j=perfil&crud=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'perfil/' . 'agregar'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'perfil/' . 'consulta'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'perfil/' . 'modificar'. '.php';
                                break;
                                     

                              default:
                                require_once 'crud/' .'perfil/' . 'agregar'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>
