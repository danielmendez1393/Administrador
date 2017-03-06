<?php 
    session_start();
    require_once("../../include/config/config.php");
   /* $objArt = new articulos;
    $objFrac = new fracciones;
    $objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>

<section class="services-style-3 main-contain">
                <div class="container">
                    <div class="row">
                           <div class="col-md-12">
                               <div class=" page-bg-color">
                        <div class="section-title-block text-center">
                            <!-- Start Breadcrumb -->
                            <div class="no-subtitle">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2>Transparencia</h2>
                                        </div>
                                        <div class="text-center">
                                            <ul class="breadcrumbs">
                                                <!--li><a href="?p=transparencia">Transparencia</a></li>
                                                <li>Call To Action</li-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Breadcrumb -->
                            </div>

                                <div class="row text-center">
                                        <div class="col-sm-4 col-md-4 cv-theme-30"  >
                                            <div class="serviceBox_2" id="clickeable"  onclick="window.location='?p=transparencia&j=leyes'" >
                                                <i class="fa fa-book"></i>
                                                <h3>Leyes</h3>
                                               
                                                <!--<button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-lg" > Abrir</button>-->
                                            </div>

                                        </div>
                                        <div class="col-sm-4 col-md-4 cv-theme-30" >
                                            <div class="serviceBox_2"  onclick="window.location='?p=transparencia&j=articulos'">
                                                <i class="fa fa-institution"></i>
                                                <h3>Articulos</h3>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 cv-theme-30">
                                            <div class="serviceBox_2" onclick="window.location='?p=transparencia&j=fraciones'">
                                                <i class="fa fa-legal"></i>
                                                <h3>Fracciones</h3>
                                                
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 cv-theme-30">
                                            <div class="serviceBox_2" onclick="window.location='?p=transparencia&j=incisos'">
                                                <i class="fa fa-archive"></i>
                                                <h3>Incisos</h3>
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 cv-theme-30">
                                            <div class="serviceBox_2" onclick="window.location='?p=transparencia&j=formatos'">
                                                <i class="fa fa-file-excel-o"></i>
                                                <h3>Formatos</h3>
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 cv-theme-30">
                                            <div class="serviceBox_2" onclick="window.location='?p=transparencia&j=camposform'">
                                                <i class="fa fa-ellipsis-h"></i>
                                                <h3>Campos Formatos</h3>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 cv-theme-30">
                                            <div class="serviceBox_2" onclick="window.location='?p=transparencia&j=llenarinfo'">
                                                <i class="fa fa-edit"></i>
                                                <h3>Llenar Formatos</h3>
                                                
                                            </div>
                                        </div>
                                    </div>



            <!-- Start What We Do 
            
            <div class="image-block services-style1 clearfix">
                        <div style="height:660px;background:url(img/about_company.jpg) 50% 50% / cover no-repeat;" class="col-md-6"></div>
                        <div class="col-md-6 cv-padding img-block-right text-center">
                            <div class="img-block-head text-center">
                                <h2>More About Our Company</h2>
                                <h3>Why Choose Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum.</p>
                            </div>


                            <div class="image-block-content">
                                <span class="feature-icon pull-left"><i class="fa fa-bicycle"></i></span>
                                <div class="feature-content">
                                    <h3>Great Features</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum.</p>
                                </div>
                            </div>

                            <div class="image-block-content">
                                <span class="feature-icon pull-left"><i class="fa fa-diamond"></i></span>
                                <div class="feature-content">
                                    <h3>Powerful Theme</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum.</p>
                                </div>
                            </div>

                            <div class="image-block-content">
                                <span class="feature-icon pull-left"><i class="fa fa-street-view"></i></span>
                                <div class="feature-content">
                                    <h3>24/7 Support</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum.</p>
                                </div>
                            </div>
                            <div class="image-block-content" >
                                <span class="feature-icon pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="feature-content">
                                    <h3>SEO Ready</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
             <!-- End What We Do -->
                    </div>
                </div>
                </div>
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
       <h2>Leyes</h2>
          <ul class="nav nav-pills">
            <li><a data-toggle="pill" href="#menu1">Agregar</a></li>
            <li><a data-toggle="pill" href="#menu2">Consulta</a></li>
            <li><a data-toggle="pill" href="#menu3">Modificar</a></li>
          </ul>
          
          <div class="tab-content">                    
                <div id="menu1" class="tab-pane fade">
                  <h3>Menu 1</h3>
                    <form class="form"  method="POST">
                        <input type="hidden" name="p" value="transparencia" class="feedback-input">
                        <input type="hidden" name="j" value="obligaciones" class="feedback-input">
                        
                       <p>
                            <input name="idusr" type="hidden" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                        </p> 

                        <p >
                            <input name="name" type="text" class="feedback-input" placeholder="NOMBRE" id="name" />
                        </p>

                        <p >
                            <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" />
                        </p>                          

                        <div class="submit">
                            <input type="submit" value="Enviar" class="form-button" />
                        </div>
                    </form>
                </div>

                <div id="menu2" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <form class="form"  method="POST">
                    <input type="hidden" name="p" value="transparencia" class="feedback-input">
                    <input type="hidden" name="j" value="obligaciones" class="feedback-input">
                    
                   <p>
                        <input name="idusr" type="hidden" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                    </p> 

                    <p >
                        <input name="name" type="text" class="feedback-input" placeholder="NOMBRE" id="name" />
                    </p>

                    <p >
                        <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" />
                    </p>                                  

                    <div class="submit">
                        <input type="submit" value="Enviar" class="form-button" />
                    </div>
                    </form>
                </div>

                <div id="menu3" class="tab-pane fade">
                  <h3>Menu 3</h3>
                      <form class="form"  method="POST">
                        <input type="hidden" name="p" value="transparencia" class="feedback-input">
                        <input type="hidden" name="j" value="obligaciones" class="feedback-input">
                        
                        <p>
                            <input name="idusr" type="hidden" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                        </p> 

                        <p >
                            <input name="name" type="text" class="feedback-input" placeholder="NOMBRE" id="name" />
                        </p>

                        <p >
                            <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" />
                        </p>                                    

                        <div class="submit">
                            <input type="submit" value="Enviar" class="form-button" />
                        </div>
                    </form>
                </div>
          </div>        


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
                </div>
            </section>