<?php
ini_set('default_charset','UTF-8');
$_SERVER['HTTP_ACCEPT_CHARSET'] = "UTF-8";
$charset = "UTF-8";
error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$CONFIG['path'] = "c://xampp/htdocs/administrador/";
$CONFIG['pathpleno'] = "/home/itiesorg/public_html/";
$CONFIG['sitio'] = "http://".$_SERVER['HTTP_HOST']."/administrador/";


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

$CONFIG['pathinclude'] = "c://xampp/htdocs/administrador/include/";
$CONFIG['sitioimgnotas'] = $CONFIG['sitio']."files/notas/img/";
$CONFIG['sitiodirectorio'] = $CONFIG['sitio']."files/directorio/";
$CONFIG['pathrrfacil'] =  $CONFIG['path']."files/recursos/";
$CONFIG['sitiorrfacil'] =  $CONFIG['sitio']."files/recursos/";
$CONFIG['pathdenuncia'] =  $CONFIG['path']."files/denuncia/";
$CONFIG['sitiodenuncia'] =  $CONFIG['sitio']."files/denuncia/";
?>