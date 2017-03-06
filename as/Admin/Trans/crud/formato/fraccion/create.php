
<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    /*$objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
 <script type="text/javascript">
   function getLey(){
  if (window.XMLHttpRequest) {
    xmlhttp3 = new XMLHttpRequest();
  }else{
    xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp3.onreadystatechange=function(){
    if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
      document.getElementById("leyList").innetHTML=xmlhttp3.responseText;
    }
  }

  xmlhttp3.open("GET","getLey.php");
  xmlhttp3.send();
}
 </script>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathtrans']?>Incagregar.php">

                        
                        <div class="col s12 l12 m12" onload="getLey();">
                          <div id="leyList"></div>
                        </div>

                        <div class="col s12 l12 m12" id="articuloList">    
                        </div>

                        <div class="col s12 l12 m12" id="fraccionList">    
                        </div>

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomfor"  type="text" class="validate" required >
                          <label for="Nomfor">Titulo de Formato</label>
                        </div>  

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomcor" id="" type="text" class="validate" >
                          <label for="Nomcor">Nombre Corto de Formato</label>
                        </div>

                         <div class="input-field col s12 l12 m12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="Descform" length="120" required></textarea>
                            <label for="icon_prefix2">Descripcion del Formato</label>
                        </div> 
                       

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe name="agregarfraccion" height="0" width="0"  ></iframe> 

                </div>
