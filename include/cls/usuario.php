<?php 
	
	class Datos
	{
		
		function ingresar_datos($nombreusr,$passwd, $perfil, $nombre, $apellido,  $tipousr )
		{
			global $link;
			$contrasena = crypt($passwd);
			$sql = "insert into ct_usr(usr_username, usr_passwd, usr_perfil, usr_nombre, usr_apellido, fk_tipousuario) 
				values ('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s');";
			$sql = sprintf($sql, $nombreusr, $contrasena, $perfil,$nombre, $apellido, $tipousr);
			$result = $link->query($sql);
			
			return $result;
		}

		function Borrar_datos($idusr){
			global $link;
			$sql = "update ct_usr set activo = 0 where id_usr = ('%1\$s')";
			$sql = sprintf($sql, $idusr);
			echo $sql;
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/$result->close();
			$link->next_result();
			
			return $result;
			

		}

		function Consultar_datos($tipo){
			global $link;
			$sql = "select cu.id_usr as ID, cu.usr_username as USUARIO, cu.usr_nombre AS NOMBRE, cu.usr_apellido AS APELLIDO, cu.usr_perfil AS PERFIL, ctu.tusr_nombre AS DEPARTAMENTO  from ct_usr as cu 
				inner join ct_tipousr as ctu on ctu.id_tipousr = cu.fk_tipousuario
				where cu.activo=1 ;";
			$sql = sprintf($sql, $tipo);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado[]=$row;
			}
			return $resultado;
			
		}

		function Consultar_usuario($idusr){
			global $link;
			$sql = "select cu.id_usr as ID, cu.usr_username as USUARIO, cu.usr_nombre AS NOMBRE, cu.usr_apellido AS APELLIDO, cu.usr_perfil AS PERFIL, ctu.tusr_nombre AS DEPARTAMENTO, ctu.id_tipousr as TIPO  from ct_usr as cu 
				inner join ct_tipousr as ctu on ctu.id_tipousr = cu.fk_tipousuario
				where id_usr= ('%1\$s')";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}
				
			$result->close();
			return $resultado;	
		}

		function Consulta_All(){
			global $link;
			$sql = "select usr_username from ct_usr where activo = 1";
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado[] =$row;
				//array_push($resultado,$row);
			}
			
			$result->close();
			return $resultado; 
		}

		function Modificar_datos($idusr,$nombreusr,  $perfil,$nombre, $apellido, $tipousr )
		{
			
			global $link;
			$sql = "update ct_usr set usr_username = ('%2\$s'), usr_perfil = ('%3\$s'), usr_nombre = ('%4\$s'), usr_apellido = ('%5\$s'), fk_tipousuario = ('%6\$s') 
                    where id_usr = ('%1\$s');";
			$sql = sprintf($sql,$idusr, $nombreusr, $perfil,$nombre, $apellido, $tipousr);
			//echo $sql;
			$result = $link->query($sql);
			//$resultado = array();
			/*while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/
			$result->close();
			$link->next_result();
			return $result;
			
		}

		function Tipo_usuario($idusr){
			global $link;
			//echo "idusr=".$idusr;
			$sql = "select * from ct_tipousr ";
			$sql = sprintf($sql,$idusr);

			$result = $link->query($sql);
			if($result == false)
					echo $link->error;
			$resultado = array();
			//echo $sql;
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado[] = $row;
				//array_push($resultado,$row);
			}
			
			return $resultado; 
		}

		
	}


 ?>