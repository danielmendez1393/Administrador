<?php 
    session_start();
    require_once("../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    #$objLey = new leyes;
    $objArt = new articulos;
    $objFrac = new fracciones;
    $datos	= $objFrac->read(1);
 ?>
 <script type="text/javascript">
 	function showUser(str){
 		if (window.XMLHttpRequest) {
 			xmlhttp = new XMLHttpRequest();
 		}else{
 			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 		}
 		xmlhttp.onreadystatechange = function(){
 			if (this.readystate == 4 && this.status == 200) {
 				document.getElementById('miTabla').innerHTML = this.responseText;
 			}
 		};
 		if (this.status == 200) {
 				document.getElementById('miTabla').innerHTML = this.responseText;
 			}
 		xmlhttp.open('GET','Trans/crud/fraccion/getfrac.php?q='+str,true);
 		xmlhttp.send();
 	}

   function editar(frac){
        frmEditFrac.elements['SubFracid'].value = frac;
        frmEditFrac.submit();
    }

    function BorrarIdar(frac){
        frmDelFrac.elements['SubFracid'].value = frac;
        frmDelFrac.submit();
    }
 </script>

<!--div >
	<select name="users" onchange="showUser(this.value)">
		<option value="0">Todos los Articulos</option>
		<?php
		foreach ($datos as $row => $dato) {?>
		<option value="<?=$dato['id_art']?>">Articulo <?=$dato['num_art']?></option>	
		<?
		print_r($dato['num_art']);
	}
		?>
	</select>
	<div class="table-responsive" id="miTabla">
		
	</div>        
	<section id="miTabla"></section-->
    <div class="table-responsive" >
                              <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr style="background: #737677;">
                                    <th>FRACCION</th>
                                    <th>TITULO</th>
                                    <th>DESCRIPCION</th>              
                                    <th></th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  <?php 
                                    foreach ($datos as $row => $dato) {
                                        
                                        ?> 
                                            
                                            <?php 
                                                //foreach ($row as $dato) {
                                            ?>
                                            <!--<td><?=$dato?></td>-->

                                            <td><?=$dato['num_frac']?></td>
                                            <td><?=$dato['titulo_frac']?></td>
                                            <td><?=$dato['descripcion']?></td>
                                            
                                            <?php       
                                            //  }
                                             ?>
                                            <td style="text-align: center;" >
                                                
                                                <div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                                        <a href="#" onclick="javascript:editar('<?=$dato["id_frac"]?>');">
                                                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                                </div>
                                            </td>

                                            <td style="text-align: center;" >
                                                <div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                                        <a href="#" onclick="javascript:BorrarIdar('<?=$dato["id_frac"]?>');">
                                                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    <?php 
                                    }
                                  ?>
                                    
                                  </tr>
                                </tbody>
                              </table>
  </div>
  <form  target="lBorrar" name="frmDelFrac"  action="<?=$CONFIG['pathtrans']?>Fracborrar.php" method="post">
  <input type="hidden" name="SubFracid">
  </form>

  <form  name="frmEditFrac" action="paneladm.php?p=transparencia&j=fraciones&crud=update" method="post" > 
  <input type="hidden" name="SubFracid">
  </form>
  <iframe name="lBorrar"  height="0" width="0"></iframe>
    </div>
    <iframe name="lBorrar1"  height="0" width="0"></iframe>
    </div>
