<?php 
	session_start();
	$vidusr = $_POST['subleyid'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/transparencia.php");
	$objLey = new leyes;
	$DelLey = $objLey->delete($vidusr);
	if (!empty($vidusr)) {
			echo '<script type="text/javascript">
				          alert("El Usuario Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=transparencia&j=leyes&crud=read";
				          
				          </script>';
		}	

 ?>