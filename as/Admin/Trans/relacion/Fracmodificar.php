<?php
 	session_start();
    require_once("../../../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objFrac = new fracciones;
    $v_idfrac = $_POST['frac_id'];
    $v_descfrac = $_POST['fraccdesc'];
    $v_fracnum = $_POST['fracnum'];
    $v_fkart = $_POST['fkart'];
    $v_titulofrac = $_POST['tituloFracc'];
    $v_documento = $_POST['fracclink'];
    
       if (empty($v_fracnum) && empty($v_descfrac)) {
         echo '<script type="text/javascript">
                                              alert("Todos los Campos son Requeridos");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=read";
                                              </script>';
    }else{
        $ModificaFrac = $objFrac->update($v_idfrac,$v_descfrac,$v_fracnum,$v_fkart,$v_titulofrac,$v_documento);
         echo '<script type="text/javascript">
                                              alert("Los Datos se Guardaron Satisfactoriamente");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=read";
                                              </script>';

    	}
    
   



 ?>