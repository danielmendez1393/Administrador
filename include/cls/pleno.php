<?php

class pleno{
	var $anio;
	
	function actas(){
		
		global $CONFIG,$link;
		if( $this->anio > 1 ){
			$condition = " AND act_anio = %d";
			$condition = sprintf( $condition, $this->anio);
		}
		$sql = "SELECT act_num, act_descripcion, act_fecha, act_archivo, act_anio , act_id
				FROM pln_actas
				WHERE activo = 1 %s 
				ORDER BY act_anio, act_num";
		$sql = sprintf($sql,$condition);
		//echo $sql;
		$result = $link->query($sql);
		if($result == false){
			return false;	
		}
		$resultados = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultados[]=$row;	
		}
		$result->close();
		// 	
		return $resultados;
	}
		
	function resoluciones($expediente=''){
		global $CONFIG,$link;
		if( $this->anio > 1 ){
			$condition = " AND rsl_anio = %d";
			$condition = sprintf( $condition, $this->anio);
		}
		if( strlen(trim($expediente)) > 0 ){
			$condition .= " AND rsl_expediente = '%s'";
			$condition .= sprintf( $condition, $expediente);
		} 
		$sql = "SELECT rsl_expediente,rsl_sobligado, rsl_recurrente, rsl_fecha,rsl_anio,rsl_archivo, rsl_id
				FROM pln_resoluciones
				WHERE activo = 1 %s 
				ORDER BY rsl_anio,rsl_expediente";
		$sql = sprintf($sql,$condition);
		//echo $sql;
		$result = $link->query($sql);
		if($result == false){
			return false;	
		}
		$resultados = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultados[]=$row;	
		}
		$result->close();
		// 	
		return $resultados;
	}
		
		
	function convocatorias(){
		global $CONFIG,$link;
		if( $this->anio > 0 ){
			$condition = " AND cnv_anio = %d";
			$condition = sprintf( $condition, $this->anio);
		}
		$sql = "SELECT cnv_id,cnv_fecha, date_format(STR_TO_DATE(cnv_fecha,'%d-%m-%Y'),'%Y-%m-%d') as fecha,cnv_archivo, cnv_tipo
				FROM pln_convocatorias
				WHERE activo = 1 ";

		if( $this->anio > 0 ){
			$sql .= " AND cnv_anio = ".$this->anio;
		}
		$sql .="  ORDER BY cnv_anio, fecha desc";
		//$sql = sprintf($sql,$condition);
		//echo $sql;
		$result = $link->query($sql);
		if($result == false){
			return false;	
		}
		$resultados = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultados[]=$row;	
		}
		$result->close();
		//if(count($resultados) > 0)
		//	 	
		return $resultados;
	}
		
		
	function informes(){
		global $CONFIG,$link;
		if( $this->anio > 1 ){
			$condition = " AND anio = %d";
			$condition = sprintf( $condition, $this->anio);
		}
		$sql = "SELECT archivo, descripcion, anio, id_inf
				FROM pln_informe
				WHERE activo = 1 %s 
				ORDER BY anio";
		$sql = sprintf($sql,$condition);
		//echo $sql;
		$result = $link->query($sql);
		if($result == false){
			return false;	
		}
		$resultados = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultados[]=$row;	
		}
		$result->close();
		// 	
		return $resultados;
		}
		
		
	function acuerdos($actual=0){
		global $CONFIG,$link;
		if($actual==1){
			$sql = "SELECT acr_id, acr_expedientes, acr_fecha, acr_archivo, acr_anio 
				FROM pln_acuerdos
				WHERE activo = 1 AND acr_id=( SELECT MAX(acr_id) FROM pln_acuerdos WHERE activo = 1)";
			}
		else{
			if( $this->anio > 1 ){
				$condition = " AND acr_anio = %d";
				$condition = sprintf( $condition, $this->anio);
			}
			$sql = "SELECT acr_id, acr_expedientes, acr_fecha, acr_archivo, acr_anio 
					FROM pln_acuerdos
					WHERE activo = 1 %s 
					ORDER BY acr_anio, acr_fecha";
			$sql = sprintf($sql,$condition);
		}
		//echo $sql;
		$result = $link->query($sql);
		if($result == false){
			return false;	
		}
		$resultados = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultados[]=$row;	
		}
		$result->close();
		// 	
		return $resultados;
	}
}
class resoluciones
{
	
	function create($v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "insert into pln_resoluciones(rsl_expediente, rsl_sobligado, rsl_recurrente, rsl_fecha, rsl_archivo, rsl_anio) values('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s')";
		$sql = sprintf($sql, $v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio);
		$result = $link->query($sql);
		 			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "	select * from pln_resoluciones where activo = 1 order by rsl_fecha desc; ";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		 			
		return $resultado;
	}
	function update($v_idresol,$v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "update pln_resoluciones set rsl_expediente= ('%2\$s'), rsl_sobligado= ('%3\$s'), rsl_recurrente=('%4\$s') , rsl_fecha= ('%5\$s'), rsl_archivo =('%6\$s') , rsl_anio=('%7\$s')
    where rsl_id = ('%1\$s')";
		$sql = sprintf($sql,$v_idresol,$v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio);
		$result = $link->query($sql);	
		 		
		return $result;
	}
	function delete($v_idresol)
	{
		global $link;
		$sql = "update pln_resoluciones set activo = 0 where rsl_id = ('%1\$s')";
		$sql = sprintf($sql, $v_idresol);
		$result = $link->query($sql);			
		 			
		return $result;							
	}
	function readid($v_idresol)
	{
		global $link;
		$sql = "select * from pln_resoluciones where rsl_id = ('%1\$s')";
		$sql = sprintf($sql, $v_idresol);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		 
		return $resultado;
	}
}

class convocatorias
{
	
	function create($v_fecha,$v_tipo,$v_archivo, $anio)
	{
		global $link;
		$sql = "insert into pln_convocatorias (cnv_fecha,cnv_tipo, cnv_archivo, cnv_anio) values('%1\$s','%2\$s','%3\$s','%4\$s')";
		$sql = sprintf($sql, $v_fecha,$v_tipo,$v_archivo, $anio);
		$result = $link->query($sql);
		 			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "select * from pln_convocatorias where activo =1 order by cnv_fecha desc;";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		 			
		return $resultado;
	}
	function update($v_idcnv,$v_fecha,$v_tipo,$v_archivo, $anio)
	{
		global $link;
		$sql = "	update pln_convocatorias set cnv_fecha=('%2\$s'), cnv_tipo=('%3\$s'), cnv_archivo=('%4\$s'), cnv_anio=('%5\$s')  where cnv_id=('%1\$s')";
		$sql = sprintf($sql,$v_idcnv,$v_fecha,$v_tipo,$v_archivo, $anio);
		$result = $link->query($sql);	
		 		
		return $result;
	}
	function delete($v_idcnv)
	{
		global $link;
		$sql = "update pln_convocatorias set activo = 0 where cnv_id =('%1\$s')";
		$sql = sprintf($sql, $v_idcnv);
		$result = $link->query($sql);			
		 			
		return $result;							
	}
	function readid($v_idcnv)
	{
		global $link;
		$sql = "select * from pln_convocatorias where cnv_id =('%1\$s')";
		$sql = sprintf($sql, $v_idcnv);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		 
		return $resultado;
	}
}

class actas
{
	
	function create($v_fecha,$v_numani,$v_archivo,$v_numact)
	{
		global $link;
		$sql = "insert into pln_actas (act_fecha, act_anio, act_archivo, act_num) values('%1\$s','%2\$s','%3\$s','%4\$s')";
		$sql = sprintf($sql, $v_fecha,$v_numani,$v_archivo,$v_numact);
		$result = $link->query($sql);
		 			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "select * from pln_actas where activo =1 order by act_fecha desc ;";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		 			
		return $resultado;
	}
	function update($v_idacta,$v_fecha,$v_numani,$v_archivo,$v_numact)
	{
		global $link;
		$sql = "	update pln_actas set act_fecha=('%2\$s'), act_anio=('%3\$s'), act_archivo=('%4\$s'), act_num=('%5\$s') where act_id=('%1\$s')";
		$sql = sprintf($sql,$v_idacta,$v_fecha,$v_numani,$v_archivo,$v_numact);
		$result = $link->query($sql);	
		 		
		return $result;
	}
	function delete($v_idacta)
	{
		global $link;
		$sql = "update pln_actas set activo = 0 where act_id = ('%1\$s')";
		$sql = sprintf($sql, $v_idacta);
		$result = $link->query($sql);			
		 			
		return $result;							
	}
	function readid($v_idacta)
	{
		global $link;
		$sql = "select * from pln_actas where act_id = ('%1\$s')";
		$sql = sprintf($sql, $v_idacta);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		 
		return $resultado;
	}
}

class acuerdos
{
	
	function create($v_expedientes,$v_archivo,$v_anio,$v_fecha)
	{
		global $link;
		$sql = "insert into pln_acuerdos (acr_expedientes, acr_archivo, acr_anio, acr_fecha) values('%1\$s','%2\$s','%3\$s','%4\$s')";
		$sql = sprintf($sql, $v_expedientes,$v_archivo,$v_anio,$v_fecha);
		$result = $link->query($sql);
		 			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "	select * from pln_acuerdos where activo =1 order by acr_fecha desc;";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		 			
		return $resultado;
	}
	function update($v_idacuerdo,$v_expedientes,$v_archivo,$v_anio,$v_fecha)
	{
		global $link;
		$sql = "update pln_acuerdos set acr_expedientes=('%2\$s'), acr_archivo=('%3\$s'), acr_anio=('%4\$s'), acr_fecha=('%5\$s') where acr_id=('%1\$s')";
		$sql = sprintf($sql,$v_idacuerdo,$v_expedientes,$v_archivo,$v_anio,$v_fecha);
		$result = $link->query($sql);	
		 		
		return $result;
	}
	function delete($v_idacuerdo)
	{
		global $link;
		$sql = "update pln_acuerdos set activo = 0 where acr_id = ('%1\$s')";
		$sql = sprintf($sql, $v_idacuerdo);
		$result = $link->query($sql);			
		 			
		return $result;							
	}
	function readid($v_idacuerdo)
	{
		global $link;
		$sql = "select * from pln_acuerdos where acr_id = ('%1\$s')";
		$sql = sprintf($sql, $v_idacuerdo);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		 
		return $resultado;
	}
}

class informe
{
	
	function create($v_informe,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "	insert into pln_informe ( descripcion, archivo, anio) values('%1\$s','%2\$s','%3\$s')";
		$sql = sprintf($sql,$v_informe,$v_archivo,$v_anio);
		$result = $link->query($sql);
		 			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "select * from pln_informe where activo =1 order by anio DESC; ";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		 			
		return $resultado;
	}
	function update($v_idinf,$v_informe,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "update pln_informe  set descripcion=('%2\$s'), archivo=('%3\$s'), anio=('%4\$s') where id_inf =('%1\$s')";
		$sql = sprintf($sql,$v_idinf,$v_informe,$v_archivo,$v_anio);
		$result = $link->query($sql);	
		 		
		return $result;
	}
	function delete($v_idinf)
	{
		global $link;
		$sql = "	update pln_informe set activo = 0 where id_inf = ('%1\$s')";
		$sql = sprintf($sql, $v_idinf);
		$result = $link->query($sql);			
		 			
		return $result;							
	}
	function readid($v_idinf)
	{
		global $link;
		$sql = "select * from pln_informe where id_inf = ('%1\$s')";
		$sql = sprintf($sql, $v_idinf);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		 
		return $resultado;
	}
}

?>