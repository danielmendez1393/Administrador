<?php 
	session_start();
	$v_idfrac = $_POST['SubFracid'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/transparencia.php");
	$objFrac = new fracciones;
	$Borrarfrac = $objFrac->delete($v_idfrac);
	if (!empty($v_idfrac)) {
			echo '<script type="text/javascript">
				          alert("El Usuario Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=read";
				          
				          </script>';
		}	

 ?>