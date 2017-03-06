<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes;
    $datley = $objLey->consult(1);/*
    $objArt = new articulos;
    $datArt = $objArt->read(1);*/
    /*$objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>

  <!--div class="row">
    <div class="col s12">
      <ul class="tabs">
      <?php 
        foreach ($datley as $row => $dato) {                                        
        ?> 
        <li class="tab col s3"><a href="#<?=$dato['id_leyes']?>"><?=$dato['tipo']?></a></li>
        <?php 
           }
        ?>  
      </ul>
    </div>
    <?php 
    foreach ($datley as $row => $dato) {                                        
    ?> 

    <div id="<?=$dato['id_leyes']?>" class="col s12"><?=$dato['descripcion']?>
      <ul class="tabs">
       
        <li class="tab col s3"><a href="#<?=$data['id_art']?>"><?=$data['descripcion']?></a></li>
        
      </ul>

    </div>
    <?php 
       }
    ?> 
  </div-->
  <div style="text-align: center; align-items: center;">
   <img src="construccion.png" align="center">
 </div>
        