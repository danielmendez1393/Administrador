<?php 
  session_start();
  require_once("../../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/transparencia.php");  
  $objArt = new articulos;
  $v_ley = $_POST['fkley'];
  $v_art = $_POST['idarticulo'];
  $v_descart = $_POST['artdesc'];
  $v_activo = $_POST['actiArt'];
  #$v_activo = $_POST['acti'];


   
     if (empty($v_ley) && empty($v_art) && empty($v_descart)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=create";
                                            </script>';
      }else{        
              $IngresarArt = $objArt->create($v_descart,$v_art, $v_ley,$v_activo); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=read";
                                                    </script>';

                                                   
         
        }                      
        

      
  
 


?>