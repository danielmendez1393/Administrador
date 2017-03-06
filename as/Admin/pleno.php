
		                    <?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'convocatorias';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'convocatorias' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=pleno&j=obligaciones'">Convocatorias</a></li>
              					<li class="<?php echo $pagina == 'listas' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=pleno&j=listas'">Lista de Acuerdos</a></li>
              					<li class="<?php echo $pagina == 'resoluciones' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=pleno&j=resoluciones'">Resoluciones</a></li>
              					<li class="<?php echo $pagina == 'acta' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=pleno&j=acta'">Actas</a></li>
              					<li class="<?php echo $pagina == 'informe' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=pleno&j=informe'">Informes</a></li>
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'convocatorias':
							    		//include("capacitacion.php");
							    		require_once 'Plno/' . 'convocatorias'. '.php';
							    		break;
							    	
							    	case 'listas':
							    		require_once  'Plno/' . 'listas' . '.php';
							    		# code...
							    		break;		

							    	case 'resoluciones':
							    		//include("capacitacion.php");
							    		require_once 'Plno/' . 'resoluciones'. '.php';
							    		break;
							    	
							    	case 'acta':
							    		require_once  'Plno/' . 'acta' . '.php';
							    		# code...
							    		break;	

							    	case 'informe':
							    		//include("capacitacion.php");
							    		require_once 'Plno/' . 'informe'. '.php';
							    		break;	    	

							    	default:
							    		require_once 'Plno/' . 'convocatorias'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>