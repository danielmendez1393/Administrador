  <?php session_start(); 
    //print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Panel Administrativo</title>
  <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!--  END Meta -->  
  <!--  CSS -->
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/style.css">
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/FlexSlider/jquery.flexslider.css">
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/animate.css">
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/magnific-popup.css">      
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
   <!-- WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
  <!--  END CSS -->

</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>    
    <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/files/js/bootstrap-filestyle.min.js"></script>
    <nav class="navbar navbar-default" style="max-width: 100%">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$CONFIG['sitio']?>Administrador/">
            <img alt="ISTAI" class="header-logo img-responsive"  width="150" height="40" align="center" style="align-items: center;"  src="<?=$CONFIG['sitio']?>logom.jpg">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php 
                if ($_SESSION['fk_tipousuario'] != 2 && $_SESSION['fk_tipousuario'] != 3 && $_SESSION['fk_tipousuario'] != 4 && $_SESSION['fk_tipousuario']!= 6){ 
              ?>        
              <li><a href="<?=$CONFIG['sitio']?>Administrador/transparencia">TRANSPARENCIA</a></li>
              <?php } 
                if ($_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {   
               ?>
              <li><a href="<?=$CONFIG['sitio']?>Administrador/difusion">DIFUSION</a></li>
              <?php }
                  if ($_SESSION['fk_tipousuario'] != 2 & $_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 6) {
              ?>
              <li><a href="<?=$CONFIG['sitio']?>Administrador/capacitacion">CAPACITACION</a></li>
              <?php }
                if ($_SESSION['fk_tipousuario'] != 4) {
               ?>
              <li><a href="<?=$CONFIG['sitio']?>Administrador/pleno">PLENO</a></li>
              <?php  }
                if ($_SESSION['fk_tipousuario'] != 2  & $_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {
              ?>
              <li><a href="<?=$CONFIG['sitio']?>Administrador/evaluacion">EVALUACION</a></li>
              <?php }
                    if ($_SESSION['fk_tipousuario'] != 3 & $_SESSION['fk_tipousuario'] != 4 & $_SESSION['fk_tipousuario'] != 6) {                    
              ?>          
              <li><a href="<?=$CONFIG['sitio']?>Administrador/usuarios">USUARIO</a></li>
              <?php 
              } 
              ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo  $_SESSION['usr_nombre']?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=$CONFIG['sitio']?>Administrador/cerrarsesion.php">Cerrar Sesión</a></li>
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
          <div class="tab-content col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 home-main-contant-style blog-page-blog-style sidebar row" >
        
           