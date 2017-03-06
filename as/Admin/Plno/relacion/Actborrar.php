<?php 
	session_start();
	$vid = $_POST['act_id'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/pleno.php");
	$objres = new actas;
	
	if (!empty($vid)) {
		$BorrarResol = $objres->delete($vid);
			echo '<script type="text/javascript">
				          alert("El Acta Fue Borrada Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=pleno&j=acta&crud=read"
				          </script>';
				          
		}	

 ?>