<!Doctype HTML>
<html>
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/carousel.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
@include ('templates/navbar')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="img/libros.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><div class="dropdown"> 
                                    <ul class="dropdown-menu" role="menu"> 
                                        <li>
                                            <a href="#">Action</a>
                                        </li>                                         
                                        <li>
                                            <a href="#">Another action</a>
                                        </li>                                         
                                        <li>
                                            <a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>                                         
                                        <li>
                                            <a href="#">Separated link</a>
                                        </li>
                                    </ul>                                     
                                </div>Matematicas para todos</h1>
                            <p>Mathgic es un entorno de estudio para alumnos de secundaria desarrollado por estudiantes de la Facultad de Ciencias de la Computación BUAP</p>
                            <p><a class="btn btn-lg btn-primary" href="{{route('conocemas')}}" role="button">Regístrate Ahora</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="img/jardin.jpeg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dale un vistazo a nuestra oferta</h1>
                            <p>Mathgic cuenta con más de 10 temas de aritmética, geometría y mucho más, repasa desde la comodidad de tu casa y realiza test de aprendizaje rápido</p>
                            <p><a class="btn btn-lg btn-primary" href="{{route('conocemas')}}" role="button">Conoce Más</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="img/grad.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Prueba Mathgic ahora sin ningún costo</h1>
                            <p>Mathgic es un proyecto sin fines de lucro, registrate ahora y comienza a reforzar tus conocimientos en matemáticas, ¡serás la envidia de tus compañeros!</p>
                            <p><a class="btn btn-lg btn-primary" href="{{route('conocemas')}}" role="button">Conoce nuestro Compromiso</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>

    

        <div class="container marketing" name="cursos">
        	<div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="img/matematicas.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Geometría</h2>
                    <p>Se conoce como matemática o matemáticas, según corresponda a la costumbre, al estudio de todas aquellas propiedades y relaciones que involucran a los entes abstractos, como ser los números y...</p>
                    <p><a class="btn btn-default" href="matematicas.php" role="button">Detalles &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="img/lenguaje.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Aritmética</h2>
                    <p>El lenguaje es el sistema a través del cual el hombre o los animales comunican sus ideas y sentimientos, ya sea a través del habla, la escritura u otros signos convencionales, pudiendo utilizar todos los sentidos...</p>
                    <p><a class="btn btn-default" href="lenguaje.php" role="button">Detalles &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="img/ingles.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Álgebra</h2>
                    <p>El álgebra es la rama de la matemática que estudia la combinación de elementos de estructuras abstractas acorde a ciertas reglas. Originalmente esos elementos podían ser interpretados como números o cantidades, por lo que el álgebra en cierto modo originalmente fue una generalización y extensión de la aritmética....</p>
                    <p><a class="btn btn-default" href="ingles.php" role="button">Detalles &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
	        <hr class="featurette-divider">
	            <div class="row featurette">
	                <div class="col-md-7 col-md-push-5">
	                    <h2 class="featurette-heading">Más de 1000 libros disponibles.</h2>
	                    <p class="lead">Disfruta de nuestra biblioteca, contamos con más de 1000 libros a tu disposición listos para ser descargados.</p>
	                </div>
	                <div class="col-md-5 col-md-pull-7">
	                    <img class="featurette-image img-responsive center-block" src="img/aprende.png" alt="Generic placeholder image">
	                </div>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row featurette">
	                <div class="col-md-7">
	                    <h2 class="featurette-heading">Solicita cursos personalizados de alto nivel*</h2>
	                    <p class="lead">¿Quieres un curso personalizado?¿Algún tema en específico que te gustaria dominar? Contactanos, tenemos a un grupo de profesionales que diseñaran un curso para ti.</p>
	                </div>
	                <div class="col-md-5">
	                    <img class="featurette-image img-responsive center-block" src="img\salon.JPG" alt="Generic placeholder image">
	                </div>
	            </div>
	            </hr class="featurette-divider">
	            <hr class="featurette-divider">
	            
	            </hr class="featurette-divider">
	            <footer>
	                <p class="pull-right"><a href="#">Back to top</a></p>
	                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	            </footer>
</div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="assets/js/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>