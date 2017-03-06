<?php  
require_once("../../include/config/config.php");
require_once("../../include/cls/usuario.php");
?>
		                  <div>
                          <!-- Start Breadcrumb -->
                            <div class="no-subtitle">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2>INICIO</h2>
                                        </div>
                                        <div class="text-center">
                                            <ul class="breadcrumbs">
                                                <li><a>Inicio</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Breadcrumb -->
		                    
            <section class="progress-style main-contain">
                
                    <div class="row">
                        <div class="col l12 m12 s12" background="#cfd8dc">
                           <div class="row text-center">
                            <?php 
                                if ($_SESSION['fk_tipousuario'] != 2 && $_SESSION['fk_tipousuario'] != 3 && $_SESSION['fk_tipousuario'] != 4 && $_SESSION['fk_tipousuario'] != 6){ 
                            ?>
                                <div class="col-sm-4 col-md-4 col-xs-6 cv-theme-30"  >
                                    <div class="serviceBox_2" id="clickeable"  onclick="window.location='?p=transparencia'" >
                                        <i class="material-icons">find_in_page</i>
                                        <h3>Transparencia</h3>
                                       
                                        <!--<button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-lg" > Abrir</button>-->
                                    </div>
                                </div>
                            <?php 
                                } 
                                if ($_SESSION['fk_tipousuario'] != 3 &$_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {                                
                            ?>
                                <div class="col-sm-4 col-md-4 col-xs-6 cv-theme-30" >
                                    <div class="serviceBox_2"  onclick="window.location='?p=difusion'">
                                        <i class="material-icons">announcement</i>
                                        <h3>Difusion</h3>
                                        
                                    </div>
                                </div>
                            <?php }
                                  if ($_SESSION['fk_tipousuario'] != 2 & $_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 6) {                                   
                            ?>
                                <div class="col-sm-4 col-md-4 col-xs-6 cv-theme-30">
                                    <div class="serviceBox_2" onclick="window.location='?p=capacitacion'">
                                        <i class="material-icons">question_answer</i>
                                        <h3>Capacitacion</h3>
                                        
                                    </div>
                                </div>
                            <?php }
                                if ($_SESSION['fk_tipousuario']!= 4) {
                            ?>
                                <div class="col-sm-4 col-md-4 col-xs-6 cv-theme-30">
                                    <div class="serviceBox_2" onclick="window.location='?p=pleno'">
                                        <i class="material-icons">gavel</i>
                                        <h3>Pleno</h3>
                                    </div>
                                </div>
                            <?php  }
                                if ($_SESSION['fk_tipousuario'] != 2  & $_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {
                             ?>
                                <div class="col-sm-4 col-md-4 col-xs-6 cv-theme-30">
                                    <div class="serviceBox_2" onclick="window.location='?p=evaluacion'">
                                        <i class="material-icons">trending_up</i>
                                        <h3>Evaluacion</h3>
                                    </div>
                                </div>
                            <?php }
                                    if ($_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {
                            ?>          
                                <!--div class="col-sm-4 col-md-4 cv-theme-30">
                                    <div class="serviceBox_2" onclick="window.location='?p=galeria'">
                                        <i class="material-icons">view_carousel</i>
                                        <h3>Galerias</h3>
                                    </div>
                                </div-->
                            <?php }
                                  if ($_SESSION['fk_tipousuario'] != 2  & $_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {
                            ?>                
                                <div class="col-sm-4 col-md-4 col-xs-6 cv-theme-30">
                                    <div class="serviceBox_2" onclick="window.location='?p=usuarios'">
                                        <i class="material-icons">account_box</i>
                                        <h3>Usuarios</h3>
                                    </div>
                                </div>
                            <?php 
                              } 
                             ?>                                
                            </div>          
                        </div>
                    </div>
            </section>
		                  </div >

		                 