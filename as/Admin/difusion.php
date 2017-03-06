		                    <?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'notas';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'notas' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=difusion&j=notas'">Notas</a></li>
              					
              					<li class="<?php echo $pagina == 'material' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=difusion&j=material'">Material</a></li>
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'notas':
							    		//include("capacitacion.php");
							    		require_once 'Difs/' . 'notas'. '.php';
							    		break;
							    	
							    	
							    	case 'material':
							    		require_once  'Difs/' . 'material' . '.php';
							    		# code...
							    		break;			    	

							    	default:
							    		require_once 'Difs/' . 'notas'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>
		                 
