<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Nuestra Clinica</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">

</head>

<body>

    <?php
    include('menuPrincipal.php')
    ?>
    <div class="card">
        <div class="card-header">
            <h1 class="display-4 text-center"></h1>
        </div>
        <div id="intro" class="view">
            <div class="full-bg-img">
                <div class="card-body text-center">
                    <h3 class="display-4 text-center">Nuestra Clinica</h3><br><br>
                    <blockquote class="blockquote">Cada uno de los espacios está pensado y diseñado para nuestros clientes. Cada sala esta insonorizada para garantizar la confidencialidad,
                        además de mayor concentración. También disponemos de una sala de espera, en donde podrás consultar cualquier duda a la persona
                        de recepción. En total disponemos de 5 salas, cada una con las instalaciones necesarias para su uso. Te inviamos que vengas a conocernos.</blockquote>

                </div>
            </div>
        </div>
    </div>
    <section id="galeria" class="container">

        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12">

                <image src="img/galeriaRecepcion.jpg" alt="Recepción">

                    <div class="card-title text-center pt-3 lead text-secondary font-weight-bold bg-light mt-3 pb-3">Recepción</div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <image src="img/galeriaPsicologia.jpg" alt="Psicología">
                    <div class="card-title text-center pt-3 lead text-secondary font-weight-bold bg-light mt-3 pb-3">Psicología</div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <image src="img/galeriaLogo.jpg" alt="Logopedia">
                    <div class="card-title text-center pt-3 lead text-secondary font-weight-bold bg-light mt-3 pb-3">Logopedía</div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <image src="img/galeriaPt.jpg" alt="Pedagogía Terapéutica">
                    <div class="card-title text-center pt-3 lead text-secondary font-weight-bold bg-light mt-3 pb-3">Pedagogía Terapéutica</div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <image src="img/galeriaClase.jpg" alt="Clases Particulares">
                    <div class="card-title text-center pt-3 lead text-secondary font-weight-bold bg-light mt-3 pb-3">Clases Particulares</div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <image src="img/galeriaFisio.jpg" alt="Fisioterapia">
                    <div class="card-title text-center pt-3 lead text-secondary font-weight-bold bg-light mt-3 pb-3">Fisioterapia</div>
            </div>

        </div>


    </section>
    <?php
    include('footer.php')
    ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>