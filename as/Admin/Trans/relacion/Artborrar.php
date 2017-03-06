<?php 
	session_start();
	$v_idart = $_POST['SubArtid'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/transparencia.php");
	$objTrans = new articulos;
	$Borrarart = $objTrans->delete($v_idart);
	if (!empty($v_idart)) {
			echo '<script type="text/javascript">
				          alert("El Usuario Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=read";
				          
				          </script>';
		}	

 ?>