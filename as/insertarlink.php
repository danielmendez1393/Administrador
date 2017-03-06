<?php 
	session_start();
	//$vidusr = $_POST['idusr'];
	$vnombre = $_POST['name'];
	$vapellido = $_POST['lastname'];
	$vnombreusuario = $_POST['usrname'];
	$vcontra = $_POST['password'];
	$vperfil = "Administrador";
	$vtipousr = $_POST['tipo'];

	require_once("../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/usuario.php");
	$objUsr = new Datos;
	$UsrCon = $objUsr->Consulta_All();
	/*foreach ($variable as $UsrCon => $value) {
		var_dump($variable);

	}*/
	$comparacion = $vnombreusuario;
	$confirmacion = false;
	 foreach($UsrCon as $valor => $value) {
	 	//echo count($value);
	 	//var_dump($value=>[]); echo '<br />';
	 	if ($comparacion == $value[usr_username]) {
	 		$confirmacion = true;
	 	}


	}
	if ($confirmacion) {
		echo '<script type="text/javascript">
				          alert("El Usuario que Desea Agregar ya Existe");
				          
				          window.parent.location="Admin/paneladm.php?p=usuarios&j=agregar"
				          </script>';
	}else{
		if (empty($vnombreusuario) and empty($vnombre) and empty($vapellido) and empty($vcontra) and empty($vperfil) and empty($vtipousr)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          window.parent.location="Admin/paneladm.php?p=usuarios&j=agregar"
				          </script>';
		}else{
			$Usr = $objUsr->ingresar_datos($vnombreusuario, $vcontra, $vperfil,$vnombre, $vapellido,  $vtipousr);
		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");				          
				          window.parent.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          </script>';
				          
		}
	}
	
		
	
 ?>