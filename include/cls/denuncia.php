<?php

class denuncia{

	var $datos;
	
	function addDenuncia($archivo){
		global $link, $datos;
		$sql = "INSERT into pln_denuncia(dnc_so, dnc_descripcion, dnc_emailnot, dnc_achprueba,dnc_denunciante,dnc_perfil ) 
				values ('%1\$s', '%2\$s', '%3\$s', '%4\$s','%5\$s','%6\$s')";
		$sql = sprintf($sql,$datos['so'],$datos['queja'],$datos['email'],$archivo,$datos['denunciante'],$datos['perfil']);
		//echo $sql;
		$result = $link->query($sql);
		if( $result == false ){
			echo "Ocurrio un error al guardar la denuncia ".$link->error;
			return false;
		}
		//echo $link->insert_id;
		return $link->insert_id;
		
	}

	function subirArchivo($archivo,$path,$id){
		global $CONFIG;
		$tamano = $_FILES[$archivo]['size'];
		$tipo = $_FILES[$archivo]['type'];
		$name_archivo = $_FILES[$archivo]['name'];
		$destino =  $path.$id."/".$name_archivo;
		//echo $path.$id;
		if( !file_exists($path.$id) ) mkdir($path.$id,0777, true);
		
		if (copy($_FILES[$archivo]['tmp_name'],$destino)) {
				$status = "Archivo subido: <b>".$destino."</b>";
				$archivo = $destino;
				return $archivo;
		} 
		else {
			$status = "Error al subir el archivo de ".$path;
			return false;				
		}
		
	}



}

?>