<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Datos de la empresa</title>
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
    <h1>Gestión Empresa</h1>
    </div>
    <section class="col text-center">
        <a href="gestionDireccion.php" style="text-decoration: none"><button type="button" class="btn btn-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <button type="button" class="btn btn-info btn-lg btn-block mb-4" id="verDatosE" name="verDatosE">Ver Datos de la Empresa</button>
        <button type="button" class="btn btn-outline-warning btn-lg btn-block mb-4" id="verDatosEO" name="verDatosEO">Ocultar Datos de la Empresa</button>



    </section>

    <div class="m-auto w-50" id="formEmpresa">
        <h2 class="text-center text-lg-start mb-4" id="titInsertarE">Datos de la empresa </h2>
        <div class="card-body text-center">
            <form id="task-formEmpresa">


                <div class="form-group">
                    <input type="text" name="cifE" id="cifE" placeholder="CIF" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="nombreE" id="nombreE" placeholder="Nombre de la empresa" class="form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="directorE" id="directorE" placeholder="Nombre del directo/a" class="form-control">
                </div>


                <button type="submit" class="btn btn-success  text-center m-2" id="aceptarE" name="aceptarE">
                    Aceptar
                </button>
                <button type="submit" class="btn btn-warning  text-center m-2" id="modifE" name="modifE">
                    Modificar
                </button>

            </form>

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