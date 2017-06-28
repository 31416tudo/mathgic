<!Doctype HTML>

<html lang="es">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mathgic</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<body background="img/facu.jpg">
  <div style="width: 100%; position: fixed; z-index: 10000; padding-left: 0; padding-right: 0; margin-left: 91px; margin-right:91px; overflow-y:auto;">
    
      <a href="{{route('welcome')}}"><img am-TopLogo alt="SECUREVIEW" align="center" src="img/logo2.jpg" class="img-responsive"></a>
    
  </div>
	<div class="container">
  <!-- Topper w/ logo -->
   <!-- End Topper -->
  <!-- Navigation -->
  <div style="margin-top: 146px;" class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class">
            <li><a href="{{route('welcome')}}">Inicio</a></li>
            <li><a href="{{route('conocemas')}}" method="get">Quiénes Somos</a></li>
            <li><a href="">Nuestro Compromiso</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right js-nav-add-active-class">
            <li><a href="{{route('login')}}">Iniciar Sesión</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicia Sesión<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="careers.html">Careers</a></li>
                <li><a href="press-release.html">Press Release</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <a type="button" class="navbar-btn btn btn-gradient-blue" am-latosans="bold" href="{{route('registro')}}">Regístrate</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
      
      
     
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>	