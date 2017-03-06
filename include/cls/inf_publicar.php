<?php


class inf_publicar{
	
	function addInfo($id_art,$id_frc,$descripcion,$anio,$tipo,$archivo){
		global $CONFIG,$link;	
		$sql = "INSERT INTO inf_pub_det(id_frc,descripcion,anio,archivo,orden,tipo_info,usr_id) VALUES('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s'";
		$sql = sprintf($sql,$id_frc,$descripcion,$anio,$archivo,$orden,$tipo,$usr_id);
		$result = $link->query($sql);
		if( $result == false ){
			$errorInterno['function'] = "inf_publicar->addInfo($id_art,$id_frc,$descripcion,$anio,$tipo,$archivo):";
			$errorInterno['msg'] = ' \n Ocurrio un problema al agregar la informacion publica basica'.$sql;
			$errorInterno['sqlmsg'] = mssql_get_last_message();
			require_once($CONFIG['path']."/inc/regError.php");
			$objError = new bitErrores();
			$objError->registerError($errorInterno);
			unset($objError);
			return false;	
		}
		return true;
	}
	
		
	/*function consultarInfo($id_frc){
		global $CONFIG,$link;
		$sql = "SELECT id_frc,descripcion,anio,archivo,tipo_info,orden
				FROM inf_pub_det 
				WHERE id_frc = %1\$s AND activo = 1
				ORDER BY anio DESC,orden DESC";	
		$sql = sprintf($sql,$id_frc);		
		$result = mysql_query($sql,$link);
		if( $result == false ){
			$errorInterno['function'] = "inf_publicar->consultarInfo($id_frc):";
			$errorInterno['msg'] = ' \n Ocurrio un problema al consultar la informacion publica basica'.$sql;
			$errorInterno['sqlmsg'] = mssql_get_last_message();
			require_once($CONFIG['path']."/inc/regError.php");
			$objError = new bitErrores();
			$objError->registerError($errorInterno);
			unset($objError);
			return false;	
		}
		$resultado = array();
		while( $row = mysql_fetch_assoc($result) ){
			$resultado[$row['anio']][] = $row;
		}
		return $resultado;
		
	}*/
	
	function consultarInfo($id_frc){
		global $CONFIG,$link;
		//Consultamos que tipo de información requerimos
		$sql = sprintf($this->infPubtabla($id_frc),$id_frc);
		if( strlen($sql) == 0 ){
			$sql = sprintf("SELECT * FROM inf_pub_det WHERE activo = 1 AND id_frc = %1\$s ORDER BY anio DESC",$id_frc);
		}
		$result = $link->query($sql);
		//echo $sql;
		if($result == false){
			return false;	
		}
		$resultados = array();
		while( $row = mysqli_fetch_assoc($result)){
			if( $row['id_grupo'] > 0 ){
				$resultados[$row['id_grupo']][] = $row;
			}
			else{
				$resultados[$row['anio']][] = $row;
			}
		}
		return $resultados;
	}
	
	
	function infPubtabla($id_frc){
		global $CONFIG,$link;
		$sql = "SELECT query FROM inf_pub_tabla WHERE id_frc = %1\$s";	
		$sql = sprintf($sql,$id_frc);
		//echo $sql;
		$result = $link->query($sql);
		if($result == false){
			return false;	
		}
		$query = "";
		while( $row = mysqli_fetch_assoc($result) ){
			$query = $row['query'];	
		}
		return $query;	
		
		
	}
	
	function secciones($id_frc){
		global $CONFIG,$link;
		$sql = "SELECT id_group, descripcion, orden 
				FROM ct_grupos_infpub
				WHERE activo = 1 AND id_frc = %1\$s 
				ORDER BY orden " ;	
		$sql = sprintf($sql,$id_frc);
		//echo $sql;
		$result = $link->query($sql);
		if($result == false){
			return false;	
		}
		$resultados = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultados[$row['id_group']] = $row['descripcion'];	
		}
		return $resultados;		
		
	}
	
}

?>