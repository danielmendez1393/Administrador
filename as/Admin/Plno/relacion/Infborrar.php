<?php 
	session_start();
	$vid = $_POST['id_inf'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/pleno.php");
	$objres = new informe;
	
	if (!empty($vid)) {
		$BorrarResol = $objres->delete($vid);
			echo '<script type="text/javascript">
				          alert("El Informe Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=pleno&j=informe&crud=read"
				          </script>';
				          
		}	

 ?>