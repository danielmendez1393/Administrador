<?php 
	session_start();
	$vid = $_POST['acr_id'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/pleno.php");
	$objres = new acuerdos;
	
	if (!empty($vid)) {
		$BorrarResol = $objres->delete($vid);
			echo '<script type="text/javascript">
				          alert("El Acuerdo Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=read"
				          </script>';
				          
		}	

 ?>