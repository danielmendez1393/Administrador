 <?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'read';
              ?>   
                <!-- Start Breadcrumb -->
                            <div class="no-subtitle">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2>Lista de Acuerdos</h2>
                                        </div>
                                        <div class="text-center">
                                            <ul class="breadcrumbs">
                                                <li><a href="?p=pleno">Pleno</a></li>
                                                <li>Lista de Acuerdos</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Breadcrumb -->
                        <div class="">
                          <ul class="nav nav-pills">
                            <button type="button" class="btn btn-primary btn-lg" onclick="window.location='?p=pleno&j=listas&crud=create'">
                             <h6>Agregar</h6>
                            </button>
                            <button type="button" class="btn btn-primary btn-lg"  onclick="window.location='?p=pleno&j=listas&crud=read'">
                             <h6>Consulta</h6>
                            </button>
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'listas/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'listas/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'listas/' . 'update'. '.php';
                                break;
                                     

                              default:
                                require_once 'crud/' .'listas/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>




                        
                            <!-- -->

