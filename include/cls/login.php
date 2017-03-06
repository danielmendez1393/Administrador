<?php 
	
	class login{
		function conexion_login($usuario, $pass){
			global $link;	
			$contrasena = crypt($pass);
			$sql = "select * from ct_usr where usr_username = ('%1\$s') ;";
			$sql = sprintf($sql, $usuario);
			$result = $link->query($sql);
			echo $result->num_rows;
			
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
					
					if (crypt($pass, $resultado['usr_passwd'])) {
						var_dump($resultado);
						echo'<script type="text/javascript">
					         window.parent.location="Administrador"
					          </script>';
					}else{
						echo'<script type="text/javascript">
					          alert("Contraseña Incorrecta");
					         window.parent.location="../index.php"
					          </script>';
					      }
			}
			if ($result->num_rows == 0) {
				echo'<script type="text/javascript">
					          alert("Usuario Incorrecto");
					         window.parent.location="../index.php"
					          </script>';
			}	
			
			$this->register_Vars($resultado);
			return $resultado;
		}

		


		function register_Vars($datosuser){
			global $link;
			#print_r($datosuser);
			$_SESSION['id_usr'] = $datosuser['id_usr'];
			$_SESSION['usr_username'] = $datosuser['usr_username'];
			$_SESSION['fk_tipousuario'] = $datosuser['fk_tipousuario'];
			$_SESSION['usr_nombre'] = $datosuser['usr_nombre'].' '.$datosuser['usr_apellido'];
			$_SESSION['usr_perfil'] = $datosuser =['usr_perfil'];

			return true;	
		}
		
		function Mostrar_Datos(){

		}
	}

 ?>