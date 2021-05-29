<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Usuario Dirección</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">

</head>

<body>
    <section class="col text-center">
        <a href="gestionDireccion.php" style="text-decoration: none"><button type="button" class="btn btn-outline-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <button type="button" class="btn btn-info btn-lg btn-block" id="mostrarUsu" name="mostrarUsu">Ver</button>
        <button type="button" class="btn btn-outline-info btn-lg btn-block" id="mostrarUsuO" name="mostrarUsuO">Ocultar</button>
        <button type="button" class="btn btn-success btn-lg btn-block mb-4" id="insertFUsu" name="insertFUsu">Insertar</button>
        <button type="button" class="btn btn-outline-danger btn-lg btn-block mb-4" id="insertFUsuO" name="insertFUsuO">Cancelar</button>

    </section>

    <div class="m-auto w-50" id="insertFormUsu">
        <h2 class="text-center text-lg-start mb-4" id="titInserRegUsu">Nuevo Usuario</h2>
        <h2 class="text-center text-lg-start mb-4" id="titActRegUsu">Actualizar</h2>
        <h2 class="text-center text-lg-start mb-4" id="titBorRegUsu">Borrar Registro</h2>
        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formUsu" name="task-formUsu">

                    <div class="form-group ">

                        <input type="text" name="dniUsu" id="dniUsu" placeholder="Debe tener 8 numeros y una letra" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombreUsu" id="nombreUsu" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidoUsu" id="apellidoUsu" placeholder="Apellidos" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaNacUsu" id="fechaNacUsu" placeholder="Fecha de Nacimiento" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="responsableUsu" id="responsableUsu" placeholder="Responsable" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="calleUsu" id="calleUsu" placeholder="Calle" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="numeroUsu" id="numeroUsu" placeholder="Número" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="pisoUsu" id="pisoUsu" placeholder=Piso class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="letraUsu" id="letraUsu" placeholder="Letra" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cpUsu" id="cpUsu" placeholder="CP" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="provinciaUsu" id="provinciaUsu" placeholder="Provincia" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefonoUsu" id="telefonoUsu" placeholder="Teléfono" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="correoUsu" id="correoUsu" placeholder="Correo electrónico" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="usuarioUsu" id="usuarioUsu" placeholder="Usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="contraUsu" id="contraUsu" placeholder="Minimo 6 carácter, minuscula, mayuscula y un número" class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="password" name="contraUsuR" id="contraUsuR" placeholder="Repite Contraseña" class="form-control">
                        <div id="mensaje">
                            <img src="img/error.png" class="contraTest" id="contraDifUsu" alt="Contraseñas diferentes">
                            <img src="img/check.png" class="contraTest" id="contraIguaUsu" alt="Contraseñas iguales">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaAltaUsu" id="fechaAltaUsu" placeholder="Fecha de Alta" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaBajaUsu" id="fechaBajaUsu" placeholder="Fecha de Baja" class="form-control">
                    </div>
                    <strong>Estado del profesional</strong>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoUsu" id="estadoUsuAlta" value="alta" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Alta
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoUsu" id="estadoUsuBaja" value="baja">
                        <label class="form-check-label" for="exampleRadios2">
                            Baja
                        </label>
                    </div>

                    <button type="submit" class="btn btn-outline-success btn-block text-center m-2" id="anadirRegUsu" name="anadirRegUsu">
                        Añadir Registro
                    </button>
                    <button type="submit" class="btn btn-outline-info btn-block text-center m-2" id="actRegUsu" name="actRegUsu">
                        Actualizar Registro
                    </button>
                    <button type="submit" class="btn btn-outline-danger btn-block text-center m-2" id="borrRegUsu" name="borrRegUsu">
                        Borrar Registro
                    </button>
                    <button type="submit" class="btn btn-outline-dark btn-block text-center m-2" id="cancelarT" name="cancelarT">
                        Cancelar
                    </button>
                </form>

            </div>
        </div>
    </div>

    <!-- Formulario Cambiar contraseña -->
    <div class="m-auto w-50" id="contraFormUsu">
        <h2 class="text-center text-lg-start mb-4" id="titCambiarContraUsu">Cambiar Contraseña</h2>

        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formContraUsu">
                    <div class="form-group">
                        <div class="form-group ">
                            <input type="text" name="dniUsuC" id="dniUsuC" class="form-control">
                        </div>
                        <input type="password" name="contraUsuC" id="contraUsuC" placeholder="Minimo 6 carácter, minuscula, mayuscula y un número" class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="password" name="contraUsuCR" id="contraUsuCR" placeholder="Repite Contraseña" class="form-control">
                        <div id="mensajeC">
                            <img src="img/error.png" class="contraTest" id="contraDifC" alt="Contraseñas diferentes">
                            <img src="img/check.png" class="contraTest" id="contraIguaC" alt="Contraseñas iguales">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-danger btn-block text-center m-2" id="cambiarContraUsu" name="cambiarContraUsu">
                        Cambiar contraseña
                    </button>
                    <button type="submit" class="btn btn-outline-dark btn-block text-center m-2" id="cancelarT" name="cancelarT">
                        Cancelar
                    </button>
            </div>



            </form>

        </div>
    </div>

    <!-- Formulario Asignar Profesional -->
    <div class="m-auto w-50" id="asigProfesional">
        <h2 class="text-center text-lg-start mb-4" id="titAsigProf">Asignar Profesional</h2>

        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-asigProf">
                    <div class="form-group ">
                        <input type="text" name="dniUsuAP" id="dniUsuAP" class="form-control">
                        <div class="form-group">
                        <label for="sDniProfesionalAP">Profesional</label>
                            <select name="sDniProfesionalAP" id="sDniProfesionalAP" class="form-control">
                             
                            </select>

                        </div>

                        <div class="form-group">
                        <label for="sTipoAP">Especialidad</label>
                            <select name="sTipoAP" id="sTipoAP" class="form-control">
                                
                            </select>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-outline-info btn-block text-center m-2" id="asigProf" name="asigProf">
                        Asignar Profesional
                    </button>

                </form>

            </div>
        </div>

</body>

</html>