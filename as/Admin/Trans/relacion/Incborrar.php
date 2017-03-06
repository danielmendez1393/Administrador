<?php 
	session_start();
	$v_idInc = $_POST['SubIncid'];
	
	require_once("../../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/transparencia.php");
	$objInc = new incisos;
	$BorrarInc = $objInc->delete($v_idInc);
	if (!empty($v_idInc)) {
			echo '<script type="text/javascript">
				          alert("El Inciso Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=read";
				          
				          </script>';
		}	

 ?>