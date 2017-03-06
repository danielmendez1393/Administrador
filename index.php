<!DOCTYPE html>
<html>
<head>
  <title>Panel Administrativo</title>
  <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  END Meta -->  
  <!--  CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/pestanas.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   
   <!-- WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

   <!-- REVOLUTION STYLE ICON/FONT -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/layers.css">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/navigation.css">


  <!--  END CSS -->

</head>
<body style="background-color: #D8D8D8">

  <div class="panel panel-default col-md-4 col-md-offset-4" style="position: absolute;top: 25%; ">
    <div class="panel-body">
    <div align="center"><img src="logom.jpg" class="img-responsive" width="50%" height="50%" ></div>
    <br>
    <div id="ajaxlogin"></div>
    
    <form id="loginform" target="" method="POST" name="">
      <div  class="input-group margin-bottom-sm" >
        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
        <input class="form-control" type="text" placeholder="Usuario" name="nnombre">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" placeholder="Contraseña" name="npassword" id="pass">
        <span class="input-group-addon"><i id="show" class="fa fa-eye fa-fw"></i></span>
      </div>
      
      <div align="center" style="padding:5px;top-align:8px; align-content: center; position: center;" >
        <button type="submit" class="btn btn-lg" style="background-color: #9A2EFE">
          <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Ingresar
        </button>
      </div>
    </form>
    </div>
    </div>
  </div>
  
<!-- JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jquery libs -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        
         <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
        The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/filter.js"></script>
        <script type="text/javascript" src="plugins/waypoints/waypoints.min.js"></script>
        <script type="text/javascript" src="plugins/counterup/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="plugins/FlexSlider/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/jquery.selectBox.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script src="js/login.js"></script>
  
  <!-- END JS -->
</body>
</html>