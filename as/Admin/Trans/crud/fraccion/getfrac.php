<?php 
    session_start();
    require_once("../../../../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");

    $objArt = new fracciones;
    
    $q = intval($_GET['q']);


    if ($q == "0") {
 
   $datos	= $objArt->read(1);
    	/* Datos SQL */
       /*global $link;
        $sql = "select * from fracciones where activo = 1 order by num_frac";
        $sql = sprintf($sql);
        $result = $link->query($sql);
        $resultado = array();
 		var_dump($result);
        /* Tabla  */
         echo'<table class="table table-striped table-bordered table-hover table-condensed">';
                                echo'<thead>';
                                  echo'<tr style="background: #737677;">';
                                    echo'<th>FRACCION</th>';
                                    echo'<th>DESCRIPCION</th> '; 
                                    echo'<th>s</th> ';            
                                    echo'<th></th>';
                                    echo'<th></th>';
                                  echo'</tr>';
                                echo'</thead>';
                                echo'<tbody>';
                                  echo'<tr>';
         /* echo'<table class="table">
          		<tr class= "active">
          		<th>FRACCION</th>
          		<th>DESCRIPCION</th>
          		<tr>';

        /* Tabla donde se veran  los registros */

        /*while( $row = mysqli_fetch_assoc($result) ){*/
           								foreach ($datos as $row => $dato) {
           									echo'<tr>
                                            <td>'.$dato['num_frac'].'</td>
                                            <td>'.$dato['descripcion'].'</td>
                                            <tr>';                                            
                                            echo'<td style="text-align: center;" >';                                                
                                                echo'<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >';
                                                        echo'<a href="#" onclick="javascript:editar("'.$dato["id_frac"].'");">';
                                                            echo'<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>';
                                                        echo'</a>';                                                              
                                                echo'</div>';
                                            echo'</td>';

                                            echo'<td style="text-align: center;" >';
                                                echo'<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >';
                                                        echo'<a href="#" onclick="javascript:BorrarIdar("'.$dato["id_frac"].'");">';
                                                            echo'<i class="fa fa-trash fa-2x" aria-hidden="true"></i>';
                                                        echo'</a>';                                                               
                                                echo'</div>';
                                                
                                            echo'</td>';
                                        echo'</tr>';
           								}
                                            
                                    
        #}
                              echo "</tbody>";
                              echo'</table>';
    }else{

$datos	= $objArt->consulta_conArticulo($q);
    	 echo'<table class="table table-striped table-bordered table-hover table-condensed">';
                                echo'<thead>';
                                  echo'<tr style="background: #737677;">';
                                    echo'<th>FRACCION</th>';
                                    echo'<th>DESCRIPCION</th> ';            
                                    echo'<th></th>';
                                    echo'<th></th>';
                                  echo'</tr>';
                                echo'</thead>';
                                echo'<tbody>';
                                  echo'<tr>';
           								foreach ($datos as $row => $dato) {
           									echo'<tr>
                                            <td>'.$dato['num_frac'].'</td>
                                            <td>'.$dato['descripcion'].'</td>
                                            <tr>';                                            
                                            echo'<td style="text-align: center;" >';                                                
                                                echo'<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >';
                                                        echo'<a href="#" onclick="javascript:editar("'.$dato["id_frac"].'");">';
                                                            echo'<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>';
                                                        echo'</a>';                                                              
                                                echo'</div>';
                                            echo'</td>';

                                            echo'<td style="text-align: center;" >';
                                                echo'<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >';
                                                        echo'<a href="#" onclick="javascript:BorrarIdar("'.$dato["id_frac"].'");">';
                                                            echo'<i class="fa fa-trash fa-2x" aria-hidden="true"></i>';
                                                        echo'</a>';                                                               
                                                echo'</div>';
                                                
                                            echo'</td>';
                                        echo'</tr>';
           								}
                                               

                                          
                              echo "</tbody>";
                              echo'</table>';

       /* global $link;
        $sql = "select * from fracciones where activo =1 and fk_idart_frac ='".$q."' order by num_frac;";
        $sql = sprintf($sql);
        $result = $link->query($sql);
        $resultado = array();
          /* Tabla  */
        /* echo'<table class="table table-striped table-bordered table-hover table-condensed">';
                                echo'<thead>';
                                  echo'<tr style="background: #737677;">';
                                    echo'<th>FRACCION</th>';
                                    echo'<th>DESCRIPCION</th> ';            
                                    echo'<th></th>';
                                    echo'<th></th>';
                                  echo'</tr>';
                                echo'</thead>';
                                echo'<tbody>';
                                  echo'<tr>';*/
          /*echo'<table class="table">
          		<tr class= "active">
          		<th>FRACCION</th>
          		<th>DESCRIPCION</th>
          		<tr>';

        /* Tabla donde se veran  los registros */
        #while( $row = mysqli_fetch_assoc($result) ){
        /*   
                                            echo'<tr>
                                            <td>'.$row['num_frac'].'</td>
                                            <td>'.$row['descripcion'].'</td>
                                            <tr>';                                            
                                            /*echo'<td style="text-align: center;" >';                                                
                                                echo'<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >';
                                                        echo'<a href="#" onclick="javascript:editar("'.$row["id_frac"].'");">';
                                                            echo'<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>';
                                                        echo'</a>';                                                              
                                                echo'</div>';
                                            echo'</td>';

                                            echo'<td style="text-align: center;" >';
                                                echo'<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >';
                                                        echo'<a href="#" onclick="javascript:BorrarIdar("'.$row["id_frac"].'");">';
                                                            echo'<i class="fa fa-trash fa-2x" aria-hidden="true"></i>';
                                                        echo'</a>';                                                               
                                                echo'</div>';
                                                
                                            echo'</td>';
                                        echo'</tr>';*/
                                    
        /*}

                              echo'</table>';*/
    }   
 ?>