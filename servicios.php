<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Servicios</title>
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
        <div div id="intro" class="view">
            <div class="full-bg-img">
                <div class="card-body text-center">
                    <h3 class="display-4 text-center">Nuestros servicios</h3><br><br>
                    <blockquote class="blockquote">En esta sección puede encontrar información detallada sobre los servicios de nuestra clinica</blockquote>

                </div>
            </div>
        </div>
    </div>
    <section class="container">


        <div>
            <button type="button" class="btn btn btn btn-outline-info btn-lg btn-block m-5 p-5" data-toggle="modal" data-target=".bd-psicologia-lg">Psicología</button>
            <div class="modal fade bd-psicologia-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" id="modales">
                            <h4 class="modal-title font-weight-bold">Servicios de Psicología</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="modBody">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Terapia Individual</li>
                                <li class="list-group-item">Terapia de grupo</li>
                                <li class="list-group-item">Terapia de pareja</li>
                                <li class="list-group-item">Terapia Infantil y adolescentes</li>
                                <li class="list-group-item">Psicología Online</li>
                            </ul>

                        </div>
                      

                    </div>
                </div>
            </div>

        </div>
        <div>
            <button type="button" class="btn btnbtn btn-outline-info btn-lg btn-block btn-block m-5 p-5" data-toggle="modal" data-target=".bd-logopedia-lg">Logopedia</button>
            <div class="modal fade bd-logopedia-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" id="modales">
                            <h4 class="modal-title font-weight-bold">Servicios de Logopedia</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="modBody">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Logopedia Infantil</li>
                                <li class="list-group-item">Logopedia para Adultos</li>
                                <li class="list-group-item">Logopedia para Personas Mayores</li>
                                <li class="list-group-item">Logopedia a Domicilio</li>
                                <li class="list-group-item">Logopedia Online</li>
                            </ul>

                        </div>
                   

                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn btn btn-outline-info btn-lg btn-block btn-block m-5 p-5" data-toggle="modal" data-target=".bd-pt-lg">Pedagogía Terapéutica</button>
            <div class="modal fade bd-pt-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" id="modales">
                            <h4 class="modal-title font-weight-bold">Pedagodía Terapéutica</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="modBody">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Necesidades Educativas Especiales</li>
                                <li class="list-group-item">Orientación Académica</li>
                                <li class="list-group-item">Técnicas de Estudios</li>
                                <li class="list-group-item">Servicio a Domicilio</li>
                                <li class="list-group-item">Servicio Online</li>
                            </ul>

                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn btn btn-outline-info btn-lg btn-block m-5 p-5" data-toggle="modal" data-target=".bd-clases-lg">Clases Particulares</button>
            <div class="modal fade bd-clases-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" id="modales">
                            <h4 class="modal-title font-weight-bold">Clases Particulares</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="modBody">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Educación Primaria</li>
                                <li class="list-group-item">Educación Secundaría</li>
                                <li class="list-group-item">Bachillerato</li>
                                <li class="list-group-item">Preparación a la Selectiviadad</li>
                                <li class="list-group-item">Preparación Prueba de Acceso a la Universidad</li>
                            </ul>

                        </div>
                     

                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn btn btn-outline-info btn-lg btn-block m-5 p-5" data-toggle="modal" data-target=".bd-fisio-lg">Fisioterapia</button>
            <div class="modal fade bd-fisio-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" id="modales">
                            <h4 class="modal-title font-weight-bold">Servicios de Fisioterapia</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="modBody">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Fisioterapia Adulta</li>
                                <li class="list-group-item">Fisioterapia Infantil</li>
                                <li class="list-group-item">Rehabilitación muscular</li>
                                <li class="list-group-item">Servicio a Domicilio</li>

                            </ul>

                        </div>
                       

                    </div>
                </div>
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