 <?php
 	session_start();
    require_once("../../../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objInc = new incisos; 
    $v_incid = $_POST['id_inc'];
	$v_incnum = $_POST['IncNum'];
    $v_incdes = $_POST['IncDes'];
    $v_frac_id = $_POST['fkfracc'];
    
       if (empty($v_incdes) && empty($v_incnum)) {
         echo '<script type="text/javascript">
                                              alert("Todos los Campos son Requeridos");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=read";
                                              </script>';
    }else{
        $ModiInc = $objInc->update($v_incid,$v_incdes,$v_incnum,$v_frac_id);
         echo '<script type="text/javascript">
                                              alert("Los Datos se Guardaron Satisfactoriamente");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=read";
                                              </script>';

    	}
    
   



 ?>