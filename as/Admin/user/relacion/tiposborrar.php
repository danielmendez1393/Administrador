<?php 
	session_start();
	$vidusr = $_POST['id_tipousr'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/usuario.php");
	$objUsr = new tiposusr;
	
	if (!empty($vidusr)) {
			echo '<script type="text/javascript">
				          alert("El Usuario Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=usuarios&j=tipousr&crud=read"
				          
				          </script>';$BorrarUsr = $objUsr->borrar($vidusr);
		}	

 ?>