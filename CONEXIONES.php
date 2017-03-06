<?php
//Conexión BD con excepciones 

//define("MYSQL_CONN_ERROR", "Imposible conectarse a la Base de Datos."); 


//mysqli_report(MYSQLI_REPORT_STRICT); 

$dbhost ="localhost";
$user = "itiesorg_root1";
$password = "OGP]5}8rNBTN";
$dbname = "itiesorg_dbistai";

// Funcion de conexio BD 
function connect($usr,$pw,$db,$host) { 
   global $link;
   try { 
      $link = new mysqli($host,$usr,$pw,$db); 
      $connected = true; 
   } catch (mysqli_sql_exception $e) { 
      throw $e; 
   } 
} 

try { 
  connect($user,$password,$dbname,$dbhost); 
  //echo 'Connected to database'; 
} catch( Exception $e) { 
  echo "Error al conectar en BD mensaje :".$e; 
} 
$acentos = $link->query("SET NAMES 'utf8'");
?>






<?php
ini_set('default_charset','UTF-8');
$_SERVER['HTTP_ACCEPT_CHARSET'] = "UTF-8";
$charset = "UTF-8";
error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$CONFIG['path'] = "/home/itiesorg/admin.ities.org/";
$CONFIG['pathpleno'] = "/home/itiesorg/public_html/";
$CONFIG['sitio'] = "http://".$_SERVER['HTTP_HOST']."/";


$CONFIG['pathtrans'] = $CONFIG['sitio']."Administrador/Admin/Trans/relacion/";
$CONFIG['pathtranscrud'] = $CONFIG['sitio']."Administrador/Admin/Trans/crud/";
$CONFIG['pathformato'] = $CONFIG['sitio']."Administrador/Admin/Trans/crud/formato/";
$CONFIG['pathpln'] = $CONFIG['sitio']."Administrador/Admin/Plno/";
$CONFIG['resoluciones'] =  "files/resoluciones/";
$CONFIG['actas'] =  "files/actas/";
$CONFIG['acuerdos'] =  "files/acuerdos/";
$CONFIG['convocatorias'] =  "files/convocatorias/";
$CONFIG['informes'] =  "files/informes/";
$CONFIG['notas'] =  "files/notas/";

$CONFIG['pathinclude'] = "/home/itiesorg/admin.ities.org/include/";
$CONFIG['sitioimgnotas'] = $CONFIG['sitio']."files/notas/img/";
$CONFIG['sitiodirectorio'] = $CONFIG['sitio']."files/directorio/";
$CONFIG['pathrrfacil'] =  $CONFIG['path']."files/recursos/";
$CONFIG['sitiorrfacil'] =  $CONFIG['sitio']."files/recursos/";
$CONFIG['pathdenuncia'] =  $CONFIG['path']."files/denuncia/";
$CONFIG['sitiodenuncia'] =  $CONFIG['sitio']."files/denuncia/";
?>