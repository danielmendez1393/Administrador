<?php 
	session_start();
	$vid = $_POST['rsl_id'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/pleno.php");
	$objres = new resoluciones;
	
	if (!empty($vid)) {
		$BorrarResol = $objres->delete($vid);
			echo '<script type="text/javascript">
				          alert("La Resolucion Fue Borrada con Exito!");
				          window.parent.location="../../paneladm.php?p=pleno&j=resoluciones&crud=read"
				          </script>';
				          
		}	

 ?>