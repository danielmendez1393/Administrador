							<?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'obligaciones';
							?>            
		                    
		                      	<?php 
				            	switch ($pagina) {
							    	case 'obligaciones':
							    		//include("capacitacion.php");
							    		require_once 'Trans/' . 'obligaciones'. '.php';
							    		break;
							    	
							    
							    	case 'leyes':
							    		//include("capacitacion.php");
							    		require_once 'Trans/' . 'leyes'. '.php';
							    		break;
							    	
							    	case 'articulos':
							    		require_once  'Trans/' . 'articulos' . '.php';
							    		# code...
							    		break;	
							    	case 'fraciones':
							    		//include("capacitacion.php");
							    		require_once 'Trans/' . 'fraciones'. '.php';
							    		break;
							    	
							    	case 'incisos':
							    		require_once  'Trans/' . 'incisos' . '.php';
							    		# code...
							    		break;	
							    	case 'camposform':
							    		//include("capacitacion.php");
							    		require_once 'Trans/' . 'camposform'. '.php';
							    		break;
							    	
							    	case 'formatos':
							    		require_once  'Trans/' . 'formatos' . '.php';
							    		# code...
							    		break;	
							    	
							    	case 'llenarinfo':
							    		require_once  'Trans/' . 'llenarinfo' . '.php';
							    		# code...
							    		break;		    	

							    	default:
							    		require_once 'Trans/' . 'obligaciones'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>