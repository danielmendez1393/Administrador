<?php
 	session_start();
    require_once("../../../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new articulos;     
	  $v_idart = $_POST['art_id'];
	  $v_art = $_POST['idarticulo'];
	  $v_descart = $_POST['artdesc'];
	  $v_ley = $_POST['fkley'];
    
       if (empty($v_art) && empty($v_descart)) {
         echo '<script type="text/javascript">
                                              alert("Todos los Campos son Requeridos");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=read";
                                              </script>';
    }else{
       
        $IngresarLey = $objLey->update($v_idart,$v_descart,$v_art,$v_ley);
         echo '<script type="text/javascript">
                                              alert("Los Datos se Guardaron Satisfactoriamente");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=read";
                                              </script>';

    	}
    
   



 ?>