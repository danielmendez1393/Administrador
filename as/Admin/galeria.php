						<?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'gale';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'gale' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=galeria&j=gale'">Registrar Evaluaciones</a></li>
              					
              
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'gale':
							    		//include("capacitacion.php");
							    		require_once 'Gale/' . 'gale'. '.php';
							    		break;

							    	default:
							    		require_once 'Gale/' . 'gale'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>
		             