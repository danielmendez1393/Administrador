		               
		               <?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'registrar';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'registrar' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=evaluacion&j=registrar'">Registrar Evaluaciones</a></li>
              					
              
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'registrar':
							    		//include("capacitacion.php");
							    		require_once 'Eval/' . 'registrar'. '.php';
							    		break;

							    	default:
							    		require_once 'Eval/' . 'registrar'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>