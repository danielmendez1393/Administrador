<?php 
	session_start();
	$vfecha = $_POST['fecha_nts'];
	$vptitulo = $_POST['ptitulo_nts'];
	$vtitulo = $_POST['titulo_nts'];
	$vdescripcion = $_POST['descripcion_nts'];
	$vdescripcioncorta = $_POST['descripcioncorta_nts'];
	$vdescripcioninterior = $_POST['descripcioninterior_nts'];
	$vnota = $_POST['nota_nts'];
	$vpieimagen = $_POST['pie_nts'];
	$vrotativo = $_POST['rotativo_nts'];
	$vurl = $_POST['url_nts'];
	$varchivo = $_FILES['Arch']["name"];
	$vimagen = $_FILES["archivo"]["name"];

	require_once("../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/notas.php");
	$objNts = new notas;
	 # definimos la carpeta destino
	    $carpetaDestino=$CONFIG['path'].$CONFIG['notas'];
	    //$carpetaDestino= $CONFIG['sitioimgnotas'];
	    
	    # si hay algun archivo que subir

	    if($_FILES["Arch"]["name"])
	    { 
	        
	            # si es un formato de imagen

	            if( $_FILES["Arch"]["type"]=="application/pdf" || $_FILES["Arch"]["type"]=="application/msword")
	            {
	                # si exsite la carpeta o se ha creado

	                
	                    $origen=$_FILES["Arch"]["tmp_name"];

	                    $destino=$carpetaDestino.$_FILES["Arch"]["name"];
	                    
	                    # movemos el archivo

	                    if(move_uploaded_file($origen, $destino))
	                    {
	                        echo "<br>".$_FILES["Arch"]["name"]." movido correctamente";
	                    }else{
	                        echo "<br>No se ha podido mover el archivo: ".$_FILES["Arch"]["name"];
	                    }

	                

	            }else{
	                echo "<br>".$_FILES["Arch"]["name"]." - NO es un archivo .doc  O .pdf";
	            }
	        
	    }else{

	        echo "<br>No se ha subido ningun archivo";

	    }

	     # definimos la carpeta destino
	    $carpetaDestino=$CONFIG['path'].$CONFIG['notas']."img/";
        //$carpetaDestino= $CONFIG['sitioimgnotas'];
        
        # si hay algun archivo que subir

        if($_FILES["archivo"]["name"])
        { 
            
                # si es un formato de imagen

                if($_FILES["archivo"]["type"]=="image/jpeg" || $_FILES["archivo"]["type"]=="image/pjpeg" || $_FILES["archivo"]["type"]=="image/gif" || $_FILES["archivo"]["type"]=="image/png" )
                {
                    # si exsite la carpeta o se ha creado

                    
                        $origen=$_FILES["archivo"]["tmp_name"];

                        $destino=$carpetaDestino.$_FILES["archivo"]["name"];
                        
                        # movemos el archivo

                        if(move_uploaded_file($origen, $destino))
                        {
                            echo "<br>".$_FILES["archivo"]["name"]." movido correctamente";
                        }else{
                            echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"];
                        }

                    

                }else{
                    echo "<br>".$_FILES["archivo"]["name"]." - NO es imagen jpg";
                }
            
        }else{

            echo "<br>No se ha subido ninguna imagen";

        }
	
		if (empty($vfecha) and empty($vtitulo) and empty($vptitulo) and empty($vdescripcion) and empty($vdescripcioncorta) and empty($vnota) and empty($vimagen)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=agregar"
				          </script>';
		}else{
				          $notaingre = $objNts->agregarnota($vfecha, $vptitulo, $vtitulo, $vdescripcioncorta, $vdescripcion, $vnota, $vpieimagen, $vimagen, $varchivo, $vurl);


		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"
				          </script>';
				          		}
	
 ?>