<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Datos Director/a</title>
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
    <h1>Mis datos</h1>
    </div>
    <section class="col text-center">
        <a href="gestionDireccion.php" style="text-decoration: none"><button type="button" class="btn btn-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <button type="button" class="btn btn-info btn-lg btn-block mb-4" id="verMisDatos" name="verMisDatos">Ver Mis Datos</button>
        <button type="button" class="btn btn-outline-warning btn-lg btn-block mb-4" id="verMisDatosO" name="verMisDatosO">Ocultar Mis Datos</button>


    </section>

    <div class="m-auto w-50" id="formEmpresaD">
        <h2 class="text-center text-lg-start mb-4" id="titInsertarD">Datos dE Dirección </h2>
        <div class="card-body text-center">
            <form id="task-formEmpresaD">


                <div class="form-group">
                    <input type="text" name="nombreD" id="nombreD" placeholder="Nombre" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="apellidoD" id="apellidoD" placeholder="Apellidos" class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="calleD" id="calleD" placeholder="Calle" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="numeroD" id="numeroD" placeholder="Número" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="pisoD" id="pisoD" placeholder=Piso class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="letraD" id="letraD" placeholder="Letra" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" name="cpD" id="cpD" placeholder="CP" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="provinciaD" id="provinciaD" placeholder="Provincia" class="form-control">
                </div>
                <div class="form-group">
                    <input type="tel" name="telefonoD" id="telefonoD" placeholder="Teléfono" class="form-control">
                </div <div class="form-group">
                <input type="text" name="usuarioD" id="usuarioD" placeholder="Usuario" class="form-control">
        </div>

        <button type="submit" class="btn btn-success btn-block  text-center m-2" id="aceptarD" name="aceptarE">
            Aceptar
        </button>
        <button type="submit" class="btn btn-warning btn-block text-center m-2" id="modifD" name="modifE">
            Modificar
        </button>
        <button type="submit" class="btn btn-info btn-block text-center m-2" id="mContraD" name="mContraD">
            Cambiar Contraseña
        </button>
        </form>

    </div>



    </div>
    <div class="m-auto w-50" id="contraFormD">
        <h2 class="text-center text-lg-start mb-4" id="titCambiarContra">Cambiar Contraseña</h2>

        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formContraD">
                    <div class="form-group">

                        <input type="password" name="contraD" id="contraD" placeholder="Minimo 6 carácter, minuscula, mayuscula y un número" class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="password" name="contraDR" id="contraDR" placeholder="Repite Contraseña" class="form-control">
                        <div id="mensajeC">
                            <img src="img/error.png" class="contraTest" id="contraDifD" alt="Contraseñas diferentes">
                            <img src="img/check.png" class="contraTest" id="contraIguaD" alt="Contraseñas iguales">

                        </div>
                    </div>
            <button type="submit" class="btn btn-outline-danger btn-block text-center m-2" id="cambiarContraD" name="cambiarContra">
                Cambiar contraseña
            </button>

            </div>

           

            </form>

        </div>
    </div>
    </div>
    <div id="errores">

    </div>

 <div class="footer">
 <?php
        include('footer.php')
        ?>
 </div>
       
 

    <script src="js/clockpicker.js"></script>
</body>

</html>