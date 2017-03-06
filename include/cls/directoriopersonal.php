<?php
// Consulta directorio de empleados del ISTAI

class directorioPersonal{
	
	
	function consultarDirPersonal(){
		global $link;
		$sql = "CALL consultarDirectorioPersonal() ";
		//$sql = sprintf($sql, $tipo);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;	
		}
		$result->close();
		$link->next_result();	
		return $resultado;	
	}
	
	
	
	
}


?>