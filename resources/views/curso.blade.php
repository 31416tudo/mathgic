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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Curso</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="js/vendor/modernizr.js"></script>

</head>
@include ('templates/navbar')
<body>        <!-- Nav Bar -->
<div class="container marketing" name="cursos">
    <div class="jumbotron">
                <div class="container">
                <h1>Bloque I</h1>
                <p>Convierte números fraccionarios a decimales y viceversa.</p>
                <p>Conoce y utiliza las convenciones para representar números fraccionarios y decimales en la recta numérica.</p>
                <p></p>
                <p><a class="btn btn-primary btn-lg" href="{{route('examen')}}" role="button">Examen &raquo;</a></p>
                </div>
                </div>
                 <hr class="featurette-divider">
                
                </hr class="featurette-divider">
           
            <div class="row featurette" style="padding-left: 50px; padding-right: 50px;">
            <div class="large-9 columns" role="content">
                <article>
                    <h3><a >Fracciones decimales</a></h3>
                    <div class="row">
                        <div class="large-6 columns">
                            <p></p>
                        </div>
                        <div class="large-6 columns">
                            <img src="img/fracciones1.jpg" width="687px" height="542px" />
                        </div>
                    </div>
                    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
                    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
                </article>
                <hr />
                <article>
                    <h3><a >Fracciones ordinarias</a></h3>
                    <div class="row">
                        <div class="large-6 columns">
                            <p></p>
                        </div>
                        <div class="large-6 columns">
                            <img src="img/fracciones2.jpg"width="711" height="344" />
                        </div>
                    </div>
                    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
                    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
                </article>
            </div>
                
                </div>

               
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>
</div>

</body>
</html>
