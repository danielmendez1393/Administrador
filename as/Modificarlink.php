<?php 
	session_start();
	//$vidusr = $_POST['idusr'];
	$vid_usr = $_POST['idusuario'];
	$vnombre = $_POST['named'];
	$vapellido = $_POST['lastname'];
	$vnombreusuario = $_POST['usrname'];
	$vperfil = $_POST['perfil'];
	$vtipousr = $_POST['tipo'];

	require_once("../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/usuario.php");
	$objUsr = new Datos;	
	$UsrCon = $objUsr->Consulta_All();
	
	if ($vnombreusuario == $UsrCon[usr_nombre]) {
		echo '<script type="text/javascript">
				          alert("El Usuario Ingresado Ya Existe");"
				          window.location="Admin/paneladm.php?p=usuarios&j=consulta"				          
				          </script>';
	}else{
		
		if (empty($vnombreusuario) and empty($vnombre) and empty($vapellido) and empty($vperfil) and empty($vtipousr)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");	
				          window.parent.location="Admin/paneladm.php?p=usuarios&j=consulta"			          
				          </script>';
		}else{
			
				echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=usuarios&j=consulta"				          
				          </script>';
				$Usr = $objUsr->Modificar_datos($vid_usr,$vnombreusuario, $vperfil,$vnombre, $vapellido,  $vtipousr);
				
		
		}
		
			
		
	
	}


	

 ?>