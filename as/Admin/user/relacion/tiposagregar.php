<?php 
session_start();
$vnombre = $_POST['name'];
require_once("../../../../include/config/config.php");
require_once($CONFIG['pathinclude']."config/cx.php");
require_once($CONFIG['pathinclude']."cls/usuario.php");
$objUsr = new tiposusr;

echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");				          
				          window.parent.location="../../paneladm.php?p=usuarios&j=tipousr&crud=read"
				          </script>';
				          $Usr = $objUsr->agregar($vnombre);
 ?>