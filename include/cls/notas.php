<?php
// Consulta notas rotativas y todas las notas de Difusión 

class notas{
	
	
	function consultarNotas($tipo){
		global $link;
		$sql = "CALL consultarNotas(%1\$s) ";
		$sql = sprintf($sql, $tipo);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;	
		}
		$result->close();
		return $resultado;	
	}
	
	function detalleNota($id_nota){
		global $link;
		$sql = "CALL consultarNota(%1\$s) ";
		$sql = sprintf($sql, $id_nota);
		//echo $sql;
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado = $row;	
		}
		//print_r($resultado);
		$result->close();
		return $resultado;	
		
	}
	
	function NotasHistorial($mes,$año,$inicio){
		global $link;
		$sql = "CALL consultarNotasHistorial(%1\$s,%2\$s,%3\$s) ";
		$sql = sprintf($sql, $mes,$año,$inicio);
		//echo $sql;
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;	
		}
		//print_r($resultado);
		$result->close();
		return $resultado;	
		
	}
	
	function NumNotasTotal($mes,$año,$texto){
		global $link;
		$sql = "CALL consultarNumNotas(%1\$s,%2\$s,'%3\$s') ";
		$sql = sprintf($sql, $mes, $año, $texto);
		//echo $sql;
		$result = $link->query($sql);
		
		while( $row = mysqli_fetch_assoc($result) ){
			//print_r($row);
			$resultado = $row['numero'];	
		}
		//print_r($resultado);
		$result->close();
		return $resultado;	
		
	}
	
	function NotasBuscar($texto,$inicio){
		global $link;
		$sql = "CALL buscarNota('%1\$s',%2\$s) ";
		$sql = sprintf($sql, $texto,$inicio);
		//echo $sql;
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;	
		}
		//print_r($resultado);
		$result->close();
		$link->next_result();	
		return $resultado;	
		
	}
	
	function agregarnota($fecha,$ptitulo, $titulo, $descripcioncorta, $descripcion, $nota, $pie, $imagen,$archivo,$url){
		global $link;
			$sql = "insert into dfs_notas(nts_fecha,nts_ptitulo,nts_titulo, nts_descripcioncorta, nts_descripcion, nts_nota,nts_pie, nts_imagen  nts_archivo, nts_url ) ('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s','%8\$s','%9\$s','%10\$s')";
			$sql = sprintf($sql, $fecha,$ptitulo, $titulo, $descripcioncorta, $descripcion, $nota, $pie, $imagen,$archivo,$url);
			$result = $link->query($sql);
			return $result;

	}

	function borrarnota($id){
			global $link;
			$sql = "update dfs_notas set activo = 0 where nts_id = ('%1\$s')";
			$sql = sprintf($sql, $id);
			echo $sql;
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/
			$result->close();
			$link->next_result();	
			return $result;		
	}

	function consultanota($vactivo){

			global $link;
			$sql = "select nts_id, nts_fecha, nts_ptitulo, nts_titulo from dfs_notas where activo = ('%1\$s') order by nts_fecha DESC;";
			$sql = sprintf($sql, $vactivo);
			//echo $sql;
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado[]=$row;
				//array_push($resultado,$row);
			}
			$result->close();
			return $resultado;
		

	}

	function consultarnotaModif($idnts){

			global $link;
			$sql = "select nts_id, nts_fecha as FECHA, nts_ptitulo, nts_titulo, nts_descripcioncorta, nts_descripcion, nts_descinteriorcorta, nts_nota, nts_pie, nts_imagen, nts_isrotativa, nts_archivo, nts_url from dfs_notas 
    			where nts_id = ('%1\$s')";
			$sql = sprintf($sql, $idnts);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado=$row;
				//array_push($resultado,$row);
			}
			$result->close();	
			//print_r($resultado);
			return $resultado;
		

	}

	function modificarNota($idnota,$fecha,$ptitulo, $titulo,$rotativa, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen,$archivo,$url){
		global $link;
			$sql = "CALL Notas_modificar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s','%8\$s','%9\$s','%10\$s','%11\$s','%12\$s','%13\$s')";
			$sql = sprintf($sql,$idnota,$fecha,$ptitulo, $titulo,$rotativa, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen,$archivo,$url);
			$result = $link->query($sql);
			$result->close();
			$link->next_result();	
			return $result;
	}
	
	
}


?>