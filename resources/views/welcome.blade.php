<!Doctype HTML>

@include ('templates/navbar')
<link href="css/carousel.css" rel="stylesheet">

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
                            <p><a class="btn btn-lg btn-primary" href="registro.php" role="button">Regístrate Ahora</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="img/jardin.jpeg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dale un vistazo a nuestra oferta</h1>
                            <p>Mathgic cuenta con más de 10 temas de aritmética, geometría y mucho más, repasa desde la comodidad de tu casa y realiza test de aprendizaje rápido</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Conoce Más</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="img/grad.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Prueba Mathgic ahora sin ningún costo</h1>
                            <p>Mathgic es un proyecto sin fines de lucro, registrate ahora y comienza a reforzar tus conocimientos en matemáticas, ¡serás la envidia de tus compañeros!</p>
                            <p><a class="btn btn-lg btn-primary" href="compromiso.php" role="button">Conoce nuestro Compromiso</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
        </div>