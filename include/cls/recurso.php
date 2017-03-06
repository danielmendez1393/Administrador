<?php

class recurso{

	var $datos;
	
	function addRR($solicitud){
		global $link, $datos;
		$sql = "INSERT into pln_rrfacil(rr_solicitante, rr_rsocial, rr_representante, rr_email, rr_so, rr_acto, rr_hechos, rr_pruebas, rr_sol) 
				values ('%1\$s', '%2\$s', '%3\$s', '%4\$s','%5\$s', '%6\$s', '%7\$s', '%8\$s', '%9\$s')";
		$sql = sprintf($sql,$datos['solicitante'],$datos['razonsocial'],$datos['representante'],$datos['email'],$datos['sobligado'],$datos['queja'],$datos['agravio'],$datos['descpruebas'],$solicitud);
		echo $sql;
		$result = $link->query($sql);
		if( $result == false ){
			echo "Ocurrio un error al guardar el recurso de revision";
			return false;
		}
		echo $link->insert_id;
		return $link->insert_id;
		
	}

	function subirArchivo($archivo,$path,$id){
		global $CONFIG;
		$tamano = $_FILES[$archivo]['size'];
		$tipo = $_FILES[$archivo]['type'];
		$name_archivo = $_FILES[$archivo]['name'];
		$destino =  $path.$id."/".$name_archivo;
		//echo $path.$id;
		if( !file_exists($path.$id) ) mkdir($path.$id,0755);
		
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