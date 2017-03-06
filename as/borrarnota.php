<?php 
	session_start();
	$vid = $_POST['nts_id'];
	
	require_once("../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/notas.php");
	$objUsr = new notas;
	
	if (!empty($vid)) {
				         
			echo '<script type="text/javascript">
				          alert("Nota Borrada Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"
				          
				          </script>';
				           $BorrarUsr = $objUsr->borrarnota($vid);
				           
		}	

 ?>