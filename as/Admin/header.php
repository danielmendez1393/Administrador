  <?php 
  require_once("../../include/config/config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Panel Administrativo</title>
	<!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS Global -->
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/css/style.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/plugins/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/plugins/FlexSlider/jquery.flexslider.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/css/animate.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/css/magnific-popup.css">       
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Materialize-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?=$CONFIG['sitio']?>administrador/Administrador/materialize/css/materialize.min.css"  media="screen,projection"/>

    <!-- WEB FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
          

</head>
<body>
        <script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>administrador/Administrador/materialize/js/materialize.min.js"></script>


        <!-- REVOLUTION STYLE ICON/FONT -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>administrador/plugins/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>administrador/plugins/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>administrador/plugins/revolution/css/layers.css">

        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>administrador/plugins/revolution/css/navigation.css">

        <!-- -->




       <nav class="navbar navbar-default" style="max-width: 100%">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="paneladm.php?p=inicio">
            <img alt="Brand" class="header-logo"  img width="150" height="40"   src="<?=$CONFIG['sitio']?>administrador/logom.jpg">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php 
                if ($_SESSION['fk_tipousuario'] != 2 && $_SESSION['fk_tipousuario'] != 3 && $_SESSION['fk_tipousuario'] != 4 && $_SESSION['fk_tipousuario']!= 6){ 
              ?>        
              <li><a href="paneladm.php?p=transparencia">TRANSPARENCIA</a></li>
              <?php } 
                if ($_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {   
               ?>
              <li><a href="paneladm.php?p=difusion">DIFUSION</a></li>
              <?php }
                  if ($_SESSION['fk_tipousuario'] != 2 & $_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 6) {
              ?>
              <li><a href="paneladm.php?p=capacitacion">CAPACITACION</a></li>
              <?php }
                if ($_SESSION['fk_tipousuario'] != 4) {
               ?>
              <li><a href="paneladm.php?p=pleno">PLENO</a></li>
              <?php  }
                if ($_SESSION['fk_tipousuario'] != 2  & $_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {
              ?>
              <li><a href="paneladm.php?p=evaluacion">EVALUACION</a></li>
              <?php }
                    if ($_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {                    
              ?>          
              <li><a href="paneladm.php?p=usuarios">USUARIO</a></li>
              <?php 
              } 
              ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo  $_SESSION['usr_nombre']?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=$CONFIG['sitio']?>administrador/Administrador/cerrarsesion.php">Cerrar Sesión</a></li>
                  </ul>
                </li>
              
            </ul>
          </div>
        </div>
      </nav>

    <aside class="right-side">
        <!-- 
            ***Trasnparencia
                -Obligaciones
                -Unidades
            ***Difusion
                -notas
                -convocatorias
                -material
            ***Capacitacion
                -programa
                -solicitudes
            ***Pleno
                -convocatorias
                -lista de acuerdos
                -resoluciones
                -actas
                -informes
            ***Evaluacion
                -registrar evaluaciones
            ***Galerias
                -abc
            -->

        <section>
        	<div class="tab-content col-md-12 col-sm-9 col-xs-9 home-main-contant-style blog-page-blog-style sidebar row" >
        
           
           