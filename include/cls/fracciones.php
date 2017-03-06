<?php

class fracciones{
	
		function addFraccion($descripcion,$detalle,$anio_ref){
			
			}
		function editFraccion($id_frc, $descripcion, $detalle, $anio_ref){
			
			}
		function allFracciones(){
			global $link;
			$sql = "SELECT id_frc, descripcion, detalle, id_art,frc_num 
					FROM inf_pub_frc 
					WHERE activo = 1
					ORDER BY orden ";
			$result = $link->query($sql);
			if( $result == false ){
				echo "Ocurrio un error al consultar las fracciones";
			}
			$resultados = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultados[$row["id_art"]][] = $row;
			}
			$result->close();
			//$link->next_result();	
			return $resultados;		
		}
		
		function allArticulos(){
			global $link;
			$sql = "SELECT id_art, descripcion, detalle 
					FROM inf_articulos 
					WHERE activo = 1
					ORDER BY orden ";
			$result = $link->query($sql);
			if( $result == false ){
				echo "Ocurrio un error al consultar los articulos";
			}
			$resultados = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultados[] = $row;
			}
			$result->close();
			//$link->next_result();	
			return $resultados;		
			
		}
		
		function fraccion( $id_frc ){
			global $link;
			$sql = "SELECT id_frc, descripcion, detalle, id_art,frc_num 
					FROM inf_pub_frc 
					WHERE activo = 1 AND id_frc = %1\$s 
					ORDER BY orden ";
			
			$sql = sprintf($sql,$id_frc);
			//echo $sql;
			$result = $link->query($sql);
			if( $result == false ){
				echo "Ocurrio un error la fraccion ";
			}
			$resultados = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultados = $row;
			}
			$result->close();
			//$link->next_result();	
			return $resultados;		
		}
		
		function articulo( $id_art ){
			global $link;
			$sql = "SELECT id_art, descripcion, detalle 
					FROM inf_articulos 
					WHERE activo = 1 AND id_art = %1\$s
					ORDER BY orden ";
			$sql = sprintf($sql,$id_art);
			$result = $link->query($sql);
			if( $result == false ){
				echo "Ocurrio un error al consultar el articulo ";
			}
			$resultados = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultados = $row;
			}
			$result->close();
			//$link->next_result();	
			return $resultados;		
			
		}
	
	}


?>