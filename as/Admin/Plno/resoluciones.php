 <?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'read';
              ?>   
                <!-- Start Breadcrumb -->
                            <div class="no-subtitle">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2>Resoluciones</h2>
                                        </div>
                                        <div class="text-center">
                                            <ul class="breadcrumbs">
                                                <li><a href="?p=pleno">Pleno</a></li>
                                                <li>Resoluciones</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Breadcrumb -->
                        <div class="">
                          <ul class="nav nav-pills">
                            <button type="button" class="btn btn-primary btn-lg" onclick="window.location='?p=pleno&j=resoluciones&crud=create'">
                             <h6>Agregar</h6>
                            </button>
                            <button type="button" class="btn btn-primary btn-lg"  onclick="window.location='?p=pleno&j=resoluciones&crud=read'">
                             <h6>Consulta</h6>
                            </button>
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'resoluciones/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'resoluciones/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'resoluciones/' . 'update'. '.php';
                                break;
                                     

                              default:
                                require_once 'crud/' .'resoluciones/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>




                        
                            <!-- -->
