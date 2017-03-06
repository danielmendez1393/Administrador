<?php 
  session_start();
  require_once("../../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/transparencia.php");  
  $objInc = new incisos;
  $v_fkfracc = $_POST['fkfracc'];
  $v_numinc = $_POST['Numinc'];
  $v_desinc = $_POST['incdesc'];
  $v_activo = $_POST['actiInc'];
  #$v_activo = $_POST['acti'];


   
     if (empty($v_fkfracc) && empty($v_numinc) && empty($v_desinc)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=create";
                                            </script>';
      }else{
            $IngresarInc = $objInc->create($v_desinc,$v_numinc, $v_fkfracc, $v_activo);        
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=read";
                                                    </script>';                                
         
        }                      
        

      
  
 


?>