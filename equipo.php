<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Equipo</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">

</head>
<?php
include('menuPrincipal.php')
?>

<body>

    <div class="card">
        <div class="card-header">
            <h1 class="display-4 text-center"></h1>
        </div>
        <div div id="intro" class="view">
            <div class="full-bg-img">
                <div class="card-body text-center">
                    <h3 class="display-4 text-center">Nuestro Equipo</h3><br><br>
                    <blockquote class="blockquote">Cada uno de los profesionales de nuestra clinica, cuenta con más de 10 años de experiencias, con mención en diferentes áreas para poder
                        atender cada una de tus necesidades.</blockquote>

                </div>
            </div>
        </div>
    </div>

    <section id="galeria" class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-3 mx-auto border-0 shadow" style="width: 18rem;">
                    <img src="img/directoraSer.png" class="card-img-top" alt="Directora">
                    <div class="card-body">
                        <h5 class="card-title">Directora</h5>
                        <p class="card-text">Psicóloga General Sanitaria<br>Licenciada en Psicología por la Universidad Autónoma de Madrid </p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-directora-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></button>
                    <div class="modal fade bd-directora-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" id="modales">
                                    <h4 class="modal-title font-weight-bold">Directora</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="modBody">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active list-group-item-warning" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Formación</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Especialización</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Experiencia</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Datos de interés</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active text-justify" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Doctora en Psicología por la Universidad Autónoma de Madrid</div>
                                                <div class="tab-pane fade text-justify" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Psicóloga Especialista en Psicoterapia</div>
                                                <div class="tab-pane fade text-justify" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">He tratado más de 10 años en diferentes clínicas psicológicas en donde he podido tratar
                                                    a pacientes con diferentes necesidades y problemas. Actualmente soy directora del nuestro centro PsicoPlusLog desde hace 3 años, en donde lidero un equipo multidisciplinar
                                                </div>
                                                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">He organizado diferentes sesiones clínicas en el Colegio Oficial de Psicólogos de Madrid y publicaciones en su revista</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-3 border-0 shadow" style="width: 18rem;">
                    <img src="img/secretariaSer.png" class="card-img-top" alt="Secretaria">
                    <div class="card-body">
                        <h5 class="card-title">Secretaria</h5>
                        <p class="card-text">Grado en Gestión y Administración Pública por la Universidad de Sevilla</p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-secretaria-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></button>
                    <div class="modal fade bd-secretaria-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" id="modales">
                                    <h4 class="modal-title font-weight-bold">Secretaría</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="modBody">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active list-group-item-warning" id="list-formSec-list" data-toggle="list" href="#list-formSec" role="tab" aria-controls="home">Formación</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-espSec-list" data-toggle="list" href="#list-espSec" role="tab" aria-controls="profile">Especialización</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-expSec-list" data-toggle="list" href="#list-expSec" role="tab" aria-controls="messages">Experiencia</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-intSec-list" data-toggle="list" href="#list-intSec" role="tab" aria-controls="settings">Datos de interés</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active text-justify" id="list-formSec" role="tabpanel" aria-labelledby="list-formSec-list">Grado en Gestión y Administración Pública por la Universidad de Sevilla</div>
                                                <div class="tab-pane fade text-justify" id="list-espSec" role="tabpanel" aria-labelledby="list-espSec-list">Diploma de especialización en Contabilidad por la Universidad de Sevilla </div>
                                                <div class="tab-pane fade text-justify" id="list-expSec" role="tabpanel" aria-labelledby="list-expSec-list"> Secretaría en otros centro médicos y de clínicas dentales.
                                                </div>
                                                <div class="tab-pane fade" id="list-intSec" role="tabpanel" aria-labelledby="list-intSec-list">He realizado funcioens de secretaría, asi como de ayuda a dirección duranete más de 5 años.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-3 border-0 shadow" style="width: 18rem;">
                    <img src="img/psiologaSer.png" class="card-img-top" alt="Psicóloga">
                    <div class="card-body">
                        <h5 class="card-title">Psicóloga</h5>
                        <p class="card-text">Licenciada en Psicología por la Universidad de Sevilla con habilitación Sanitaria</p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-psicologa-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></button>
                    <div class="modal fade bd-psicologa-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" id="modales">
                                    <h4 class="modal-title font-weight-bold">Psicóloga Sanitaria</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="modBody">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active list-group-item-warning" id="list-formPsi-list" data-toggle="list" href="#list-formPsi" role="tab" aria-controls="home">Formación</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-espPsi-list" data-toggle="list" href="#list-espPsi" role="tab" aria-controls="profile">Especialización</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-expPsi-list" data-toggle="list" href="#list-expPsi" role="tab" aria-controls="messages">Experiencia</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-intPsi-list" data-toggle="list" href="#list-intPsi" role="tab" aria-controls="settings">Datos de interés</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active text-justify" id="list-formPsi" role="tabpanel" aria-labelledby="list-formPsi-list">Master en Psicología General Sanitaria por la Universidad a Distancia de Madrid </div>
                                                <div class="tab-pane fade text-justify" id="list-espPsi" role="tabpanel" aria-labelledby="list-espPsi-list">Curso de Experto en Mediación Familiar por la Universidad a Distancia de Madrid </div>
                                                <div class="tab-pane fade text-justify" id="list-expPsi" role="tabpanel" aria-labelledby="list-expPsi-list"> He trabajado en diferentes clínicas, en donde he podido tratar a pacientes de difertens edades, además de intervención a nivel familiar y de pareja.
                                                </div>
                                                <div class="tab-pane fade" id="list-intPsi" role="tabpanel" aria-labelledby="list-intPsi-list">Curso Universitario de Especialización en Terapia familiar por la Universidad Europea</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-3 border-0 shadow" style="width: 18rem;">
                    <img src="img/logopedaSer.png" class="card-img-top" alt="Logopeda">
                    <div class="card-body">
                        <h5 class="card-title">Logopeda</h5>
                        <p class="card-text">Grado en Logopedia por la Universidad Complutense de Madrid</p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-logopeda-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></button>
                    <div class="modal fade bd-logopeda-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" id="modales">
                                    <h4 class="modal-title font-weight-bold">Logopeda</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="modBody">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active list-group-item-warning" id="list-formLog-list" data-toggle="list" href="#list-formLog" role="tab" aria-controls="home">Formación</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-espLog-list" data-toggle="list" href="#list-espLog" role="tab" aria-controls="profile">Especialización</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-expLog-list" data-toggle="list" href="#list-expLog" role="tab" aria-controls="messages">Experiencia</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-intLog-list" data-toggle="list" href="#list-intLog" role="tab" aria-controls="settings">Datos de interés</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active text-justify" id="list-formLog" role="tabpanel" aria-labelledby="list-formLog-list">Grado en Logopedia por la Universidad Complutense de Madrid</div>
                                                <div class="tab-pane fade text-justify" id="list-espLog" role="tabpanel" aria-labelledby="list-espLog-list">Máster en Intervención Logopédica por la Universidad Complutense de Madrid </div>
                                                <div class="tab-pane fade text-justify" id="list-expLog" role="tabpanel" aria-labelledby="list-expLog-list"> Experiancia en intervención en niños con trastorno del desarrollo del lenguaje.
                                                </div>
                                                <div class="tab-pane fade" id="list-intLog" role="tabpanel" aria-labelledby="list-intLog-list">Formación específica en la rehabilitación integral de paciente laringectomizado</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-3 border-0 shadow" style="width: 18rem;">
                    <img src="img/ptSer.png" class="card-img-top" alt="PT">
                    <div class="card-body">
                        <h5 class="card-title">Pedagoga Terapéutica</h5>
                        <p class="card-text">Grado de Pedagogia por la Universidad Internacional de la Rioja</p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-pt-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></button>
                    <div class="modal fade bd-pt-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" id="modales">
                                    <h4 class="modal-title font-weight-bold">Pedagoga Terapéutica</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="modBody">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active list-group-item-warning" id="list-formPt-list" data-toggle="list" href="#list-formPt" role="tab" aria-controls="home">Formación</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-espPt-list" data-toggle="list" href="#list-espPt" role="tab" aria-controls="profile">Especialización</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-expPt-list" data-toggle="list" href="#list-expPt" role="tab" aria-controls="messages">Experiencia</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-intPt-list" data-toggle="list" href="#list-intPt" role="tab" aria-controls="settings">Datos de interés</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active text-justify" id="list-formPt" role="tabpanel" aria-labelledby="list-formPt-list">Grado de pedagogia por la Universidad Internacional de la Rioja</div>
                                                <div class="tab-pane fade text-justify" id="list-espPt" role="tabpanel" aria-labelledby="list-espPt-list">Máster Universitario en Psicopedagogía por la Univeridad Internacional de Valencia</div>
                                                <div class="tab-pane fade text-justify" id="list-expPt" role="tabpanel" aria-labelledby="list-expPt-list"> Experiancia en intervención en niño con Necesidades Educativas Especiales.
                                                </div>
                                                <div class="tab-pane fade" id="list-intPt" role="tabpanel" aria-labelledby="list-intPt-list">Curso en Técnicas de Estudio por Educa Business School</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-3 border-0 shadow" style="width: 18rem;">
                    <img src="img/profesoraSer.png" class="card-img-top" alt="Profesora">
                    <div class="card-body">
                        <h5 class="card-title">Profesora</h5>
                        <p class="card-text">Grado en Eduación Primaria y Eduación Infantil por la Universidad de Sevilla</p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-profesora-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></button>
                    <div class="modal fade bd-profesora-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" id="modales">
                                    <h4 class="modal-title font-weight-bold">Profesora</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="modBody">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active list-group-item-warning" id="list-formProf-list" data-toggle="list" href="#list-formProf" role="tab" aria-controls="home">Formación</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-espProf-list" data-toggle="list" href="#list-espProf" role="tab" aria-controls="profile">Especialización</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-expProf-list" data-toggle="list" href="#list-expProf" role="tab" aria-controls="messages">Experiencia</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-intProf-list" data-toggle="list" href="#list-intProf" role="tab" aria-controls="settings">Datos de interés</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active text-justify" id="list-formProf" role="tabpanel" aria-labelledby="list-formProf-list">Grado en Eduación Primaria y Eduación Infantil por la Universidad de Sevilla</div>
                                                <div class="tab-pane fade text-justify" id="list-espProf" role="tabpanel" aria-labelledby="list-espProf-list">Máster Universitario en Neuropsicología y Educación por la Univeridad Internacional de la Rioja</div>
                                                <div class="tab-pane fade text-justify" id="list-expProf" role="tabpanel" aria-labelledby="list-expProf-list"> Experiancia tanto con adolescentes como niños de infantil y primaria.
                                                </div>
                                                <div class="tab-pane fade" id="list-intProf" role="tabpanel" aria-labelledby="list-intProf-list">LanguageCert International ESOL C1 Expert</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-3 border-0 shadow" style="width: 18rem;">
                    <img src="img/fisioSer.png" class="card-img-top" alt="Directora">
                    <div class="card-body">
                        <h5 class="card-title">Fisioterapeuta</h5>
                        <p class="card-text">Grado en Fisioterapia por la Universidad Europea de Madrid</p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-fisio-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></button>
                    <div class="modal fade bd-fisio-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" id="modales">
                                    <h4 class="modal-title font-weight-bold">Fisioterapueta</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="modBody">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active list-group-item-warning" id="list-formFisio-list" data-toggle="list" href="#list-formFisio" role="tab" aria-controls="home">Formación</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-espFisio-list" data-toggle="list" href="#list-espFisio" role="tab" aria-controls="profile">Especialización</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-expFisio-list" data-toggle="list" href="#list-expFisio" role="tab" aria-controls="messages">Experiencia</a>
                                                <a class="list-group-item list-group-item-action list-group-item-warning" id="list-intFisio-list" data-toggle="list" href="#list-intFisio" role="tab" aria-controls="settings">Datos de interés</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active text-justify" id="list-formFisio" role="tabpanel" aria-labelledby="list-formFisio-list">Grado en Fisioterapia por la Universidad Europea de Madrid</div>
                                                <div class="tab-pane fade text-justify" id="list-espFisio" role="tabpanel" aria-labelledby="list-espFisio-list">Máster Universitario en Fisioterapia Neurológica: Técnicas de Valoración y Tratamiento por la Universidad Europea de Madrid </div>
                                                <div class="tab-pane fade text-justify" id="list-expFisio" role="tabpanel" aria-labelledby="list-expFisio-list"> Experiancia en Centros de Alto Rendimiento y Tecnificación Deportiva.
                                                </div>
                                                <div class="tab-pane fade" id="list-intFisio" role="tabpanel" aria-labelledby="list-intFisio-list">Experto Universitario en Fisioterapia en Pediatría</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            

                            </div>
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