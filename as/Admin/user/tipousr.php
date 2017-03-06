<?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'create';
              ?>   
               
                        <div class="">
                        <h2 style="text-align: center;">Tipos de Areas</h2>
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=usuarios&j=tipousr&crud=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=usuarios&j=tipousr&crud=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'tipousr/' . 'agregar'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'tipousr/' . 'consulta'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'tipousr/' . 'modificar'. '.php';
                                break;
                                     

                              default:
                                require_once 'crud/' .'tipousr/' . 'agregar'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>
