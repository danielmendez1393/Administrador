<?php 
	$pagina = isset($_GET['k']) ? strtolower($_GET['k']) : 'consulta';

 ?>
 <!-- Start Breadcrumb -->
                            <div class="no-subtitle">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2>Notas</h2>
                                        </div>
                                        <div class="text-center">
                                            <ul class="breadcrumbs">
                                                <li><a href="?p=difusion">Difusion</a></li>
                                                <li>Notas </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Breadcrumb -->

                            
 	<div>
 		<ul class="nav nav-pills">
 			 <button type="button" class="btn btn-primary btn-lg" onclick="window.location='?p=difusion&j=notas&k=agregar'"  >
                             <h6>Agregar</h6>
                            </button>
                            <button type="button" class="btn btn-primary btn-lg" onclick="window.location='?p=difusion&j=notas&k=consulta'" >
                             <h6>Consulta</h6>
                            </button>
 		</ul>
 		
 	</div>
 	<?php 
 		switch ($pagina) {
 			case 'agregar':
 				require_once 'agregar'.'.php';
 				break;
 			case 'consulta': 				
 				require_once 'consulta'.'.php';
 				break;
 			
 			case 'modificar': 				
 				require_once 'modificar'.'.php';
 				break;
 			
 			default:
 				require_once 'agregar'.'.php';
 				break;
 		}
 	 ?>