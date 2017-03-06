<?php 
  session_start();
  require_once("../../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objCnv = new convocatorias;
  $v_convenio = $_POST['convenio'];
  $v_fecha = $_POST['fecha_cnv'];
  $v_archivo = $_FILES["Arch"]["name"];
  $v_anio = $_POST['v_numanio'];
  #$v_activo = $_POST['acti'];
   
 # definimos la carpeta destino
    $carpetaDestino=$CONFIG['path'].$CONFIG['convocatorias'];
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

     if (empty($v_convenio) && empty($v_fecha) && empty($v_archivo)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    
                                            </script>';
      }else{        
              $Ingresar = $objCnv->create($v_fecha,$v_convenio, $v_archivo,$v_anio); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=convocatorias&crud=read";
                                                    </script>';                                                   
        }                      
?>