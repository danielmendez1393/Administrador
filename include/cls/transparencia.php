<?php 

	/**
	* 
	*/
	class leyes
	{
		function read($idley){
			global $link;
			$sql = "select le.id_leyes,le.descripcion, le.tipo,le.fk_user_leyes, ct.usr_nombre, ct.usr_apellido from leyes as le
    	inner join ct_usr as ct on id_usr = fk_user_leyes
    	where id_leyes = ('%1\$s')";
			$sql = sprintf($sql, $idley);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}
			return $resultado;
		}

		function consult($idusr)
		{
			global $link;
			$sql = "select * from leyes where activo =(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}		
			return $resultado;
		}
		function replace($descripcion, $tipo, $idusr,$activo)
		{
			global $link;
			$sql = "insert INTO leyes (descripcion, tipo,fk_user_leyes) 
				values ('%1\$s','%2\$s','%3\$s')";
			$sql = sprintf($sql, $descripcion, $tipo, $idusr,$activo);
			$result = $link->query($sql);
			return $result;
		}
		function update($id_ley, $descripcion, $tipoley, $user)
		{
			global $link;
			$sql = "update leyes set descripcion=('%2\$s'), tipo=('%3\$s'),fk_user_leyes=('%4\$s') where id_leyes = ('%1\$s');";
			$sql = sprintf($sql,$id_ley, $descripcion, $tipoley, $user);
			$result = $link->query($sql);
			
			return $result;
		}

		function delete($id)
		{
			global $link;
			$sql = "update leyes set leyes.activo = 0 where id_leyes = ('%1\$s')";
			$sql = sprintf($sql, $id);
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/		
						return $result;	
		}
	}

	
	class articulos
	{
		
		function create($descripcion, $articulo, $ley,$activo)
		{
			global $link;
			$sql = "insert INTO articulos (descripcion, num_art, fk_idleyes_art) 
					values ('%1\$s','%2\$s','%3\$s')";
			$sql = sprintf($sql, $descripcion, $articulo, $ley, $activo);
			echo $sql;
			$result = $link->query($sql);
			return $result;
		}
		function read($idusr)
		{
			global $link;
			$sql = "select * from articulos  where activo =(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}
			return $resultado;
		}
		function update($idart,$descripcion,$numart,$ley)
		{
			global $link;
			$sql = "update articulos set descripcion = ('%2\$s'), num_art = ('%3\$s'),fk_idleyes_art =('%4\$s')
                where id_art = ('%1\$s')";
			$sql = sprintf($sql,$idart,$descripcion,$numart,$ley);
			$result = $link->query($sql);		
			return $result;
		}
		function delete($id)
		{
			global $link;
			$sql = "update articulos set activo = 0 where id_Art = ('%1\$s')";
			$sql = sprintf($sql, $id);
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/		
						return $result;
		}

		function readall($idart)
		{
			global $link;
			$sql = "SELECT id_art, articulos.descripcion, num_art, fk_idleyes_art, ley.tipo FROM articulos inner join leyes as ley on id_leyes = fk_idleyes_art where id_art = ('%1\$s')";
			$sql = sprintf($sql, $idart);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}
					
						return $resultado;	
		}

		function readwhere($idley){
			global $link;
			$sql = "select * from articulos where fk_idleyes_art = ('%1\$s')";			
			$sql = sprintf($sql, $idley);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}	
			return $resultado;	
		}
	}


	class fracciones
	{
		
		function create($descripcion, $numfrac, $fkart, $activo,$v_titulofrac,$v_documento)
		{
			global $link;
			$sql = "insert INTO fracciones (descripcion, num_frac, fk_idart_frac,titulo_frac,doc_frac) 
						values ('%1\$s','%2\$s','%3\$s','%5\$s','%6\$s')";
			$sql = sprintf($sql, $descripcion, $numfrac, $fkart, $activo,$v_titulofrac,$v_documento);
			$result = $link->query($sql);	
						return $result;	
		}
		function read($idusr)
		{
			global $link;
			$sql = "select * from fracciones  where activo =(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}
						return $resultado;
		}
		function readall($idfrac){
			global $link;
			$sql = "	select id_frac,titulo_frac, doc_frac, fracciones.descripcion, num_frac, articulos.id_art, articulos.num_art, leyes.id_leyes, leyes.tipo
			    from fracciones
			    inner join articulos on id_art = fk_idart_frac
			    inner join leyes on id_leyes = fk_idleyes_art
			    where id_frac = ('%1\$s')";
			$sql = sprintf($sql, $idfrac);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}			
						return $resultado;	
		}
		function update($fracid, $descripcion, $numfrac, $fkart,$v_titulofrac,$v_documento)
		{
			global $link;
			$sql = "	update fracciones set descripcion = ('%2\$s'), num_frac =('%3\$s'), fk_idart_frac = ('%4\$s'),titulo_frac = ('%5\$s'),doc_frac = ('%6\$s')
                    where id_frac =('%1\$s')";
			$sql = sprintf($sql,$fracid, $descripcion, $numfrac, $fkart,$v_titulofrac,$v_documento);
			$result = $link->query($sql);		
			return $result;
		}
		function delete($id)
		{
			global $link;
			$sql = "update fracciones set activo = 0 where id_frac = ('%1\$s')";
			$sql = sprintf($sql, $id);
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/		
						return $result;
		}
		function consulta_conArticulo($idArt){
			global $link;
			$sql = "select * from fracciones where fk_idart_frac = $idArt and activo = 1";
			$sql = sprintf($sql, $idArt);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}		
						return $resultado;
		}
	}

	/**
	* 
	*/
	class incisos
	{
		
		function create($descripcion, $numfinc, $fkfrac, $activo)
		{
			global $link;
			$sql = "insert INTO incisos (descripcion, num_inc, fk_idfrac_inc) 
						values ('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql, $descripcion, $numfinc, $fkfrac, $activo);
			$result = $link->query($sql);		
						return $result;	
		}
		function read($idusr)
		{
			global $link;
			$sql = "	select * from incisos  where activo =(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}		
						return $resultado;
		}
		function readall($idinc){
			global $link;
			$sql = "select incisos.id_inc, incisos.descripcion, incisos.num_inc, fracciones.id_frac, fracciones.num_frac, articulos.id_art, articulos.num_art, 
			leyes.id_leyes, leyes.tipo
		    from incisos
		    inner join fracciones on id_frac = fk_idfrac_inc
		    inner join articulos on id_art = fk_idart_frac
		    inner join leyes on id_leyes = fk_idleyes_art
		    where id_inc = ('%1\$s')";
			$sql = sprintf($sql, $idinc);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}	
						return $resultado;	
		}
		function update($incid, $descripcion, $numfinc, $fkfrac)
		{
			global $link;
			$sql = "update incisos set descripcion = ('%2\$s'), num_inc =('%3\$s') , fk_idfrac_inc = ('%4\$s')
                    where id_inc =('%1\$s')";
			$sql = sprintf($sql,$incid, $descripcion, $numfinc, $fkfrac);
			$result = $link->query($sql);		
			return $result;
		}
		function delete($id)
		{
			global $link;
			$sql = "update incisos set activo = 0 where id_inc =('%1\$s')";
			$sql = sprintf($sql, $id);
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/		
						return $result;
		}
	}

	/**
	* 
	*/
	/*class formatos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}

	/**
	* 
	*/
	/*class camposformatos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}

	/**
	* 
	*/
	/*class ingresardatos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}*/
 ?>