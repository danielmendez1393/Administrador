
		                <?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'obligaciones';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'programa' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=capacitacion&j=programa'">Programas</a></li>
              					<li class="<?php echo $pagina == 'solicitudes' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=capacitacion&j=solicitudes'">Solicitudes</a></li>
              
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'programa':
							    		//include("capacitacion.php");
							    		require_once 'Capa/' . 'programa'. '.php';
							    		break;
							    	
							    	case 'solicitudes':
							    		require_once  'Capa/' . 'solicitudes' . '.php';
							    		# code...
							    		break;			    	

							    	default:
							    		require_once 'Capa/' . 'programa'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>