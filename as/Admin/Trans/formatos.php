 <?php  
 $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'inicio';
              ?>            
              

                            <?php 
                                switch ($pagina) {

                              case 'inicio':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'inicio'. '.php';
                                break;                           
                              
                              case 'fraccion':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'fraccion'. '.php';
                                break;
                              
                              case 'inciso':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'inciso'. '.php';
                                break;                                                         

                              default:
                                require_once 'crud/' .'formato/' . 'inicio'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          

                        </div>
