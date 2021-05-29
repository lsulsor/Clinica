<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Gestión de Trabajadores</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <!-- Añadimos la libreria clockpicker -->
    <link rel="stylesheet" type="text/css" href="js/clockpicker.css">
    <?php
    //Inicio la sesión
    session_start();
    ?>
    <script src="include/funciones.js"></script>
</head>

<body>

    <?php
    //Si  NO se ha almacenado algo en la vairable superglobal session usuarios
    if (!isset($_SESSION["usuario"])) {
        //lo redirigimos al index.php
        header("Location:index.php");
    }
    ?>
    <?php
    include('menuPrincipal.php')
    ?>

    <div class="mensajeUsuario">
        <?php
        //Mostramos el nombre de usuario y la fecha de conexión
        echo "<p>Hola " . $_SESSION["usuario"] . ", se ha conectado a las " . date("H:i", $_SESSION['hora']) . "<br><br></p>";
      
        ?>
    </div>

    <div class="jumbotron jumbotron-fluid">
    <h1>Gestión de los Profesionales</h1>
    </div>
    <section class="col text-center">
        <a href="gestionDireccion.php" style="text-decoration: none"><button type="button" class="btn btn-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <button type="button" class="btn btn-info btn-lg btn-block mb-2" id="verProf" name="verProf">Ver</button>
        <button type="button" class="btn btn-outline-info btn-lg btn-block" id="verProfO" name="verProfO">Ocultar</button>
        <button type="button" class="btn btn-success btn-lg btn-block mb-4" id="insertFProf" name="insertFProf">Insertar</button>
        <button type="button" class="btn btn-outline-danger btn-lg btn-block mb-4" id="insertFProfO" name="insertFProfO">Cancelar</button>


    </section>
    <div class="m-auto w-50" id="insertFormProf">
        <h2 class="text-center text-lg-start mb-4" id="titInserReg">Nuevo profesional</h2>
        <h2 class="text-center text-lg-start mb-4" id="titActReg">Actualizar</h2>
        <h2 class="text-center text-lg-start mb-4" id="titBorReg">Borrar Registro</h2>
        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-form">

                    <div class="form-group ">

                        <input type="text" name="dniProf" id="dniProf" placeholder="Debe tener 8 numeros y una letra" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombreProf" id="nombreProf" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidoProf" id="apellidoProf" placeholder="Apellidos" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="numColegiadoProf" id="numColegiadoProf" placeholder="Número de Colegiado" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefonoProf" id="telefonoProf" placeholder="Teléfono" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="calleProf" id="calleProf" placeholder="Calle" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="numeroProf" id="numeroProf" placeholder="Número" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="pisoProf" id="pisoProf" placeholder=Piso class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="letraProf" id="letraProf" placeholder="Letra" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cpProf" id="cpProf" placeholder="CP" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="provinciaProf" id="provinciaProf" placeholder="Provincia" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="usuarioProf" id="usuarioProf" placeholder="Usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="contraProf" id="contraProf" placeholder="Minimo 6 carácter, minuscula, mayuscula y un número" class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="password" name="contraProfR" id="contraProfR" placeholder="Repite Contraseña" class="form-control">
                        <div id="mensaje">
                            <img src="img/error.png" class="contraTest" id="contraDif" alt="Contraseñas diferentes">
                            <img src="img/check.png" class="contraTest" id="contraIgua" alt="Contraseñas iguales">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaAltaProf" id="fechaAltaProf" placeholder="Fecha de Alta" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaBajaProf" id="fechaBajaProf" placeholder="Fecha de Baja" class="form-control">
                    </div>
                    <strong>Estado del profesional</strong>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoProf" id="estadoProfAlta" value="alta" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Alta
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoProf" id="estadoProfBaja" value="baja">
                        <label class="form-check-label" for="exampleRadios2">
                            Baja
                        </label>
                    </div>

                    <button type="submit" class="btn btn-outline-success btn-block text-center m-2" id="anadirReg" name="anadirReg">
                        Añadir Registro
                    </button>
                    <button type="submit" class="btn btn-outline-info btn-block text-center m-2" id="actReg" name="actReg">
                        Actualizar Registro
                    </button>
                    <button type="submit" class="btn btn-outline-danger btn-block text-center m-2" id="borrReg" name="borrReg">
                        Borrar Registro
                    </button>
                    <button type="submit" class="btn btn-outline-dark btn-block text-center m-2" id="cancelarT" name="cancelarT">
                        Cancelar
                    </button>
                </form>

            </div>
        </div>
    </div>
    <div class="m-auto w-50" id="contraFormProf">
        <h2 class="text-center text-lg-start mb-4" id="titCambiarContra">Cambiar Contraseña</h2>

        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formContra">
                    <div class="form-group">
                        <div class="form-group ">
                            <input type="text" name="dniProfC" id="dniProfC" class="form-control">
                        </div>
                        <input type="password" name="contraProfC" id="contraProfC" placeholder="Minimo 6 carácter, minuscula, mayuscula y un número" class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="password" name="contraProfCR" id="contraProfCR" placeholder="Repite Contraseña" class="form-control">
                        <div id="mensajeC">
                            <img src="img/error.png" class="contraTest" id="contraDifC" alt="Contraseñas diferentes">
                            <img src="img/check.png" class="contraTest" id="contraIguaC" alt="Contraseñas iguales">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-block text-center m-2" id="cambiarContra" name="cambiarContra">
                        Cambiar contraseña
                    </button>
            </div>



            </form>

        </div>
    </div>
    </div>
    <div id="errores">

    </div>


    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaProf">

        <thead class="table-dark">
            <tr class="text-monospace font-weight-bold">
                <td>DNI</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Num. Colegiado</td>
                <td>Teléfono</td>
                <td>Calle</td>
                <td>Num</td>
                <td>Piso</td>
                <td>Letra</td>
                <td>C.P</td>
                <td>Provincia</td>
                <td>Usuario</td>
                <td>Fecha Alta</td>
                <td>Fecha Baja</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody id="tabla"></tbody>
    </table>

    <div class="m-auto w-50" id="asignarSerivicio">
        <h2 class="text-center text-lg-start mb-4" id="titasigServicio">Asignar Especilidad</h2>

        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formAsigSer">


                    <div class="form-group ">
                        <input type="text" name="dniProfEsp" id="dniProfEsp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="esp" class="form-label">Especialidad</label>
                        <select name="esp" id="esp" class="form-control">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sHab" class="form-label">Habilitación Sanitaria</label>
                        <select name="sHab" id="sHab" class="form-control">
                            <option value="si">Si</option>
                            <option value="no">No</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-outline-info btn-block text-center m-2" id="anadirEsp" name="anadirEsp">
                        Añadir Registro
                    </button>
                    <button type="submit" class="btn btn-outline-warning btn-block text-center m-2" id="modTipoEsp" name="modTipoEsp">
                        Modificar Especialidades
                    </button>

                </form>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 mx-auto">

            <table class="table table-sm table-borderless text-center" id="tablaTipoEspecialidad">

                <thead class="table-dark text-monospace font-weight-bold">
                    <tr>
                        <td>Especialidad</td>
                        <td> <button type="submit" class="task-anadirTipoEsp btn btn-light  btn-block" id="formAnadirTipoEsp" name="formAnadirTipoEsp"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                                    <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                </svg>
                                Añadir
                            </button>
                        </td>
                        <td> <button type="submit" class="task-volver btn btn-outline-light  btn-block" id="volverFormTipoEsp" name="volverFormTipoEsp"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                                </svg>
                                Volver
                            </button>
                        </td>
                    </tr>
                </thead>
                <tbody id="tablaTipoEsp"></tbody>
            </table>
        </div>
    </div>

    <div class="m-auto w-50" id="formAnadirEsp">
        <h2 class="text-center text-lg-start mb-4" id="titAnadirEspecialidad">Añadir Especialidad</h2>

        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formTipoEsp">
                    <div class="form-group">
                        <div class="form-group ">
                            <input type="text" name="tipoEsp" id="tipoEsp" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-block text-center m-2" id="insertTipoEsp" name="insertTipoEsp">
                        Añadir Especialidad
                    </button>
            </div>



            </form>

        </div>
    </div>

    <div class="footer">
 <?php
        include('footer.php')
        ?>
 </div>

    <script src="js/clockpicker.js"></script>

</body>

</html>