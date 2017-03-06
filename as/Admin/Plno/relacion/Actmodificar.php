<?php 
  session_start();
  require_once("../../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objAct = new actas;
  $v_idacta = $_POST['id_acta'];
  $v_numeroacta = $_POST['numActa'];
  $v_Anio = $_POST['anioActa'];
  $v_fecha = $_POST['fecha_acta'];
  $v_archivo = $_FILES["Arch"]["name"];
  $v_archivohidden = $_POST['archhidden'];
   # definimos la carpeta destino 
    $carpetaDestino=$CONFIG['path'].$CONFIG['actas'];
    //$carpetaDestino= $CONFIG['sitioimgnotas'];
    
    # si hay algun archivo que subir
    if ($v_archivohidden == $_FILES["Arch"]["name"]) {
       echo "Es Igual";
     } else{
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
    }
     if (empty( $v_numeroacta) && empty($v_Anio) && empty($v_fecha)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=acta&crud=create";
                                            </script>';
      }else{        
        if($v_archivo == "" && $v_archivohidden ==""){
          $IngresarResol = $objAct->update($v_idacta,$v_fecha,$v_Anio,$v_archivo,$v_numeroacta); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=acta&crud=read";
                                                    </script>';   
        }elseif($v_archivo =="" && $v_archivohidden !=""){
          $IngresarResol = $objAct->update($v_idacta,$v_fecha,$v_Anio,$v_archivohidden,$v_numeroacta); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=acta&crud=read";
                                                    </script>';           
        }else{
          $IngresarResol = $objAct->update($v_idacta,$v_fecha,$v_Anio,$v_archivo,$v_numeroacta); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=acta&crud=read";
                                                    </script>';   
        }                                                
      }    



?>