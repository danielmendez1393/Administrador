<?php 
	session_start();
	//$vidusr = $_POST['idusr'];
	$v_idnota = $_POST['id_nts'];
	$v_fecha = $_POST['fecha_nts'];
	$v_titulop = $_POST['ptitulo_nts'];
	$v_titulo = $_POST['titulo_nts'];
	$v_descripcion = $_POST['descripcion_nts'];
	$v_descripcioncorta = $_POST['descripcioncorta_nts'];
	$v_descripcioninterior = $_POST['descripcioninterior_nts'];
	$v_nota = $_POST['nota_nts'];
	$v_pienota = $_POST['pie_nts'];
	$v_rotativo = $_POST['rotativo_nts'];
	$v_imagen = $_FILES["Image"]["name"];
	$v_archivo = $_FILES["Doc"]["type"];
	$v_url = $_POST['url_nts'];
	$iman = $_POST['imagehidden'];
	$Doctipo = $_POST['dochidden'];

	require_once("../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/notas.php");
	$objNts = new notas;	
	//$UsrCon = $objNts->Consulta_All();
	
	  # definimos la carpeta destino
	    $carpetaDestino=$CONFIG['path'].$CONFIG['notas'];
	    //$carpetaDestino= $CONFIG['sitioimgnotas'];
	     
          if ($Doctipo == $_FILES["Doc"]["name"]) {
            echo "Es igual"; }
         else{
	    # si hay algun archivo que subir

	    if($_FILES['Doc']["name"])
	    { 
	        
	            # si es un formato de imagen

	            if( $_FILES["Doc"]["type"]=="application/pdf" || $_FILES["Doc"]["type"]=="application/msword")
	            {
	                # si exsite la carpeta o se ha creado

	                
	                    $origen=$_FILES["Doc"]["tmp_name"];

	                    $destino=$carpetaDestino.$_FILES['Doc']["name"];
	                    
	                    # movemos el archivo

	                    if(move_uploaded_file($origen, $destino))
	                    {
	                        echo "<br>".$_FILES['Doc']["name"]." movido correctamente";
	                    }else{
	                        echo "<br>No se ha podido mover el archivo: ".$_FILES['Doc']["name"];
	                    }

	                

	            }else{
	                echo "<br>".$_FILES['Doc']["name"]." - NO es un archivo .doc  O .pdf";
	            }
	        
	    }else{

	        echo "<br>No se ha subido ningun archivo";

	    }
	}

	     # definimos la carpeta destino
	    $carpetaDestino=$CONFIG['path'].$CONFIG['notas']."img/";
        //$carpetaDestino= $CONFIG['sitioimgnotas'];
        
          if ($iman == $_FILES["Image"]["name"]) {
            echo "Es igual"; }else{
        # si hay algun archivo que subir

	        if($_FILES["Image"]["name"])
	        { 
	            
	                # si es un formato de imagen

	                if($_FILES["Image"]["type"]=="image/jpeg" || $_FILES["Image"]["type"]=="image/pjpeg" || $_FILES["Image"]["type"]=="image/gif" || $_FILES["Image"]["type"]=="image/png" )
	                {
	                    # si exsite la carpeta o se ha creado

	                    
	                        $origen=$_FILES["Image"]["tmp_name"];

	                        $destino=$carpetaDestino.$_FILES["Image"]["name"];
	                        
	                        # movemos el archivo

	                        if(move_uploaded_file($origen, $destino))
	                        {
	                            echo "<br>".$_FILES["Image"]["name"]." movido correctamente";
	                        }else{
	                            echo "<br>No se ha podido mover el archivo: ".$_FILES["Image"]["name"];
	                        }

	                    

	                }else{
	                    echo "<br>".$_FILES["Image"]["name"]." - NO es imagen jpg";
	                }
	            
	        }else{

	            echo "<br>No se ha subido ninguna imagen";

	        }
    }

	//$UsrCon = $objNts->Consulta_All();
	var_dump($iman,$Doctipo);
	var_dump($vimagen,$varchivo);
		
		if (empty($v_fecha) and empty($v_titulo) and empty($v_titulop) and empty($v_descripcion) and empty($vimagen)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");	
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"			          
				          </script>';
		}else{
				if($vimagen == "" && $iman ==""){
					if ($varchivo =="" && $Doctipo=="") {
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$vimagen , $varchivo ,$v_url);
					}
					elseif ($varchivo=="" && $Doctipo != "" ) {
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$vimagen , $Doctipo ,$v_url);
					}
					else{
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$vimagen , $varchivo ,$v_url);
					}
				}elseif($vimagen =="" && $iman !=""){
					
					if ($varchivo =="" && $Doctipo=="") {
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$iman , $varchivo ,$v_url);
					}
					elseif ($varchivo=="" && $Doctipo != "" ) {
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$iman , $Doctipo ,$v_url);
					}
					else{
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$iman , $varchivo ,$v_url);
					}
				
				}else{
					if ($varchivo =="" && $Doctipo=="") {
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$vimagen , $varchivo ,$v_url);
					}
					elseif ($varchivo=="" && $Doctipo != "" ) {
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$vimagen , $Doctipo ,$v_url);
					}
					else{
						echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
						$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$vimagen , $varchivo ,$v_url);
					}
				}		
		}	
?>