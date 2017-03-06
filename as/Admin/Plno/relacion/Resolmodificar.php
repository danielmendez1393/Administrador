<?php 
  session_start();
  require_once("../../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objRes = new resoluciones;
  $v_idres = $_POST['id_rsl'];
  $v_expediente = $_POST['Expediente'];
  $v_SujetoObl = $_POST['SujetoOblig'];
  $v_Recurrente = $_POST['Recurrente'];
  $v_Anio = $_POST['AResolucion'];
  $v_fecha = $_POST['fecha_rsl'];
  $v_archivo = $_FILES["Arch"]["name"];
  $v_archivohidden = $_POST['archhidden'];

  #$v_activo = $_POST['acti'];
   
  # definimos la carpeta destino
  $carpetaDestino="../../../files/archivo/";
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

     if (empty( $v_expediente) && empty($v_Anio) && empty($v_fecha)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=resoluciones&crud=create";
                                            </script>';
      }else{        
                        
            if($v_archivo == "" && $v_archivohidden ==""){
          $IngresarResol = $objRes->update($v_idres,$v_expediente,$v_SujetoObl, $v_Recurrente,$v_fecha, $v_archivo,$v_Anio); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=resoluciones&crud=read";
                                                    </script>';  
        }elseif($v_archivo =="" && $v_archivohidden !=""){
         $IngresarResol = $objRes->update($v_idres,$v_expediente,$v_SujetoObl, $v_Recurrente,$v_fecha, $v_archivohidden,$v_Anio); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=resoluciones&crud=read";
                                                    </script>';           
        }else{
          $IngresarResol = $objRes->update($v_idres,$v_expediente,$v_SujetoObl, $v_Recurrente,$v_fecha, $v_archivo,$v_Anio); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=resoluciones&crud=read";
                                                    </script>';  
        }                                            
        }                      
?>