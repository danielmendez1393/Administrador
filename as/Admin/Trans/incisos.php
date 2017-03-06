 <?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'read';
              ?>            
               <div class="col l12" align="center" style="text-align: center;">
                 <!-- Start Breadcrumb -->
                            <div class="no-subtitle">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2>Incisos</h2>
                                        </div>
                                        <div class="text-center">
                                            <ul class="breadcrumbs">
                                                <li><a href="?p=transparencia">Transparencia</a></li>
                                                <li>Incisos</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Breadcrumb -->

                                 <a class="waves-effect waves-light btn-large btn tooltipped" onclick="window.location='?p=transparencia&j=leyes'" data-position="bottom" data-delay="50" data-tooltip="Leyes"><i class="fa fa-book"></i></a>
                                <a class="waves-effect waves-light btn-large btn tooltipped" onclick="window.location='?p=transparencia&j=articulos'" data-position="bottom" data-delay="50" data-tooltip="Articulos"><i class="fa fa-institution"></i></a>
                                <a class="waves-effect waves-light btn-large btn tooltipped"  onclick="window.location='?p=transparencia&j=fraciones'" data-position="bottom" data-delay="50" data-tooltip="Fracciones"><i class="fa fa-legal"></i></a>
                                <a class="waves-effect waves-light btn-large btn tooltipped"  onclick="window.location='?p=transparencia&j=incisos'" data-position="bottom" data-delay="50" data-tooltip="Incisos"><i class="fa fa-archive"></i></a>
                              </div>
                                       
              <div class="col l12" >
               
                        <div class="">
                          <ul class="nav nav-pills">
                            <button type="button" class="btn btn-primary btn-lg" onclick="window.location='?p=transparencia&j=incisos&crud=create'">
                             <h6>Agregar</h6>
                            </button>
                            <button type="button" class="btn btn-primary btn-lg" onclick="window.location='?p=transparencia&j=incisos&crud=read'">
                             <h6>Consulta</h6>
                            </button>
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'inciso/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'inciso/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'inciso/' . 'update'. '.php';
                                break;                                                                  

                              default:
                                require_once 'crud/' .'inciso/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>

