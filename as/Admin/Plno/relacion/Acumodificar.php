<?php 
  session_start();
  require_once("../../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objAcu = new acuerdos;
  $v_idacu = $_POST['id_Acu'];
  $v_expediente = $_POST['expedien'];
  $v_Anio = $_POST['v_numanio'];
  $v_fecha = $_POST['fecha_lista'];
  $v_archivo = $_FILES["Arch"]["name"];
  $v_archivohidden = $_POST['archhidden'];

  #$v_activo = $_POST['acti'];
   
  # definimos la carpeta destino
    $carpetaDestino=$CONFIG['path'].$CONFIG['acuerdos'];
    //$carpetaDestino= $CONFIG['sitioimgnotas'];
    
    # si hay algun archivo que subir

    if($_FILES["Arch"]["name"])
    { 
        
            # si es un formato de imagen

            if( $_FILES["Arch"]["type"]=="application/pdf")
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
   
     if ( empty($v_Anio) && empty($v_fecha)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=create";
                                            </script>';
      }else{        
             
            if($v_archivo == "" && $v_archivohidden ==""){
           $IngresarResol = $objAcu->update($v_idacu,$v_expediente, $v_archivo,$v_Anio,$v_fecha); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=read";
                                                    </script>';
        }elseif($v_archivo =="" && $v_archivohidden !=""){
           $IngresarResol = $objAcu->update($v_idacu,$v_expediente, $v_archivohidden,$v_Anio,$v_fecha); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=read";
                                                    </script>';   
        }else{
           $IngresarResol = $objAcu->update($v_idacu,$v_expediente, $v_archivo,$v_Anio,$v_fecha); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=read";
                                                    </script>'; 
        }                                                       
        }                      
?>