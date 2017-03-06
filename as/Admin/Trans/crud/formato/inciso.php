 <?php  
                $pagina = isset($_GET['format']) ? strtolower($_GET['format']) : 'read';
              ?>    
              <div class="col l12" align="center" style="text-align: center;">
                 <!-- Start Breadcrumb -->
                  <div class="no-subtitle">
                      <div class="container">
                          <div class="row">
                              <div class="text-center">
                                  <h2>Formatos Incisos</h2>
                              </div>
                              <div class="text-center">
                                  <ul class="breadcrumbs">
                                      <li><a href="?p=transparencia">Transparencia</a></li>
                                      <li><a href="?p=transparencia&j=formatos">Formatos</a></li>
                                      <li>Incisos</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Breadcrumb -->
                      <a class="waves-effect waves-light btn-large btn tooltipped" onclick="window.location='?p=transparencia&j=formatos&crud=fraccion'" data-position="bottom" data-delay="50" data-tooltip="Fracciones"><i class="fa fa-legal"></i></a>
                      <a class="waves-effect waves-light btn-large btn tooltipped" onclick="window.location='?p=transparencia&j=formatos&crud=inciso'" data-position="bottom" data-delay="50" data-tooltip="Incisos"><i class="fa fa-archive"></i></a>
                </div>

                        <div class="" > 
                          <ul class="nav nav-pills">
                            <button type="button" class="btn btn-primary btn-lg" onclick="window.location='?p=transparencia&j=formatos&crud=inciso&format=create'" >
                             <h6>Agregar</h6>
                            </button>
                            <button type="button" class="btn btn-primary btn-lg"  onclick="window.location='?p=transparencia&j=formatos&crud=inciso&format=read'" >
                             <h6>Consulta</h6>
                            </button>
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'inciso/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'inciso/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'inciso/'  . 'update'. '.php';
                                break;

                              default:
                                require_once 'inciso/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>