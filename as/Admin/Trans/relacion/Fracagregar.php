<?php 
  session_start();
  require_once("../../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/transparencia.php");  
  $objFrac = new fracciones;
  $v_fkart = $_POST['fkart'];
  $v_numfrac = $_POST['Numfracc'];
  $v_desfrac = $_POST['fraccdesc'];
  $v_activo = $_POST['actiFracc'];
  $v_titulofrac = $_POST['tituloFracc'];
  $v_documento = $_POST['fracclink'];
  #$v_activo = $_POST['acti'];


   
     if (empty($v_fkart) && empty($v_numfrac) && empty($v_desfrac)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=create";
                                            </script>';
      }else{
            $IngresarFrac = $objFrac->create($v_desfrac,$v_numfrac, $v_fkart, $v_activo,$v_titulofrac,$v_documento);        
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=read";
                                                    </script>';                                
         
        }                      
        

      
  
 


?>