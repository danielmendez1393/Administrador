 <?php
 	session_start();
    require_once("../../../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes; 
    $v_leyid = $_POST['leyid'];
	$v_leyidusr = $_POST['idley'];
    $v_leytipo = $_POST['ley'];
    $v_leydesc = $_POST['descripcionley'];
    
       if (empty($v_leytipo) && empty($v_leydesc)) {
         echo '<script type="text/javascript">
                                              alert("Todos los Campos son Requeridos");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=leyes&crud=read";
                                              </script>';
    }else{
        $IngresarLey = $objLey->update($v_leyid,$v_leydesc,$v_leytipo,$v_leyidusr);
         echo '<script type="text/javascript">
                                              alert("Los Datos se Guardaron Satisfactoriamente");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=leyes&crud=read";
                                              </script>';

    	}
    
   



 ?>