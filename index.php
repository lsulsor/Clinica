<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

    <?php
    include('menuPrincipal.php')
    ?>

    <div id="carouselExampleControls" class="carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slidePsico.jpg" alt="Psicología">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Servicio de Psicología</h2>
                    <p>Evaluamos cada caso de forma individual</p>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slideLogo.jpg" alt="Logopedía">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Servicio de Logopedía</h2>
                    <p>Atendemos a todas las edades</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slidePT.jpg" alt="Pedagogía Terapéutica">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Pedagogía Terapéutica</h2>
                    <p>Nos adaptamos a cada una de las necesidades educativas</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slideClase.jpg" alt="Clases Particulares">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Clases Particulares</h2>
                    <p>Un apoyo a los estudios en cada asginatura</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slideFisio.jpg" alt="Fisioterapia">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Servicio de Fisioterapia</h2>
                    <p>Consigue una completa recuperación</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Posterior</span>
        </a>

    </div>
    <div class="card">
        <div class="card-header">
            <h1 class="display-4 text-center">Con un equipo multipisciplinar con más de 10 años de experiencia</h1>
        </div>
        <div class="card-body text-center">
            <h3 class="display-4 text-center">Nuestra filosofía de trabajo</h3><br><br>
            <blockquote class="blockquote">Nuestro equipo realizará un plan de intervención adaptado a ti, y de forma multidisciplinar. Contarás en todo momento del apoyo que
                necesitas. En una primera entrevista podrás contarnos todo aquello que te preocupe, esta información siempre será de forma confidencial, y nuestro equipo se
                reunirá para evaluar tu plan de trabajo.</blockquote>

            <a href="contacto.php" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-square" viewBox="1 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>Contáctanos</a>
        </div>
    </div>

    <?php
    include('footer.php')
    ?>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>