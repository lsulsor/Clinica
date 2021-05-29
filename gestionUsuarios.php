<!doctype html>
<html lang="en">

<head>
    <title>Gestión de Usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <!-- Añadimos las funciones de JavaScript -->
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

    <!-- </body> -->

    <?php
    include('menuPrincipal.php')
    ?>

    <div class="mensajeUsuario">
        <?php
        //Mostramos el nombre de usuario y la fecha de conexión
        echo "<p>Hola " . $_SESSION["usuario"] . ", se ha conectado a las " . date("H:i", $_SESSION['hora']) . "<br><br></p>";
      
        ?>

        <?php
        
        if ($_SESSION["direccion"] == "directora") {
            echo "<div class='jumbotron jumbotron-fluid'>";
            echo  "<h1>Gestión de Usuarios</h1>";
            echo "</div>";
            include "usuarioDireccion.php";
        } else {
            echo " <a href='gestionProfesional.php' style='text-decoration: none'><button type='button' class='btn btn-outline-dark btn-lg btn-block mb-2'>Volver al Menu Principal</button></a>";
            echo "<h1>Consulta de los Usuarios</h1>";
        }
        ?>
    </div>

    <form class="form-inline justify-content-center mb-5" id="buscadorUsuario">
        <input id="search" class="form-control mr-sm-2" type="search" placeholder="Nombre del ususario" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0 " type="submit" id="borrar_search">Eliminar resultados</button>
    </form>
    <div class="col-md-12" id="resultBusqueda">
     
        <table class="table table table-condensed">

            <thead>
                <tr class="">
                    <td>DNI</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Fecha Nacimiento</td>
                    <td>Responsable</td>
                    <td>Calle</td>
                    <td>Número</td>
                    <td>Piso</td>
                    <td>Letra</td>
                    <td>CP</td>
                    <td>Provincia</td>
                    <td>Teléfono</td>
                    <td>Correo</td>
                    <td>Usuario</td>
                    <td>Fecha de Alta</td>
                    <td>Fecha de Baja</td>
                    <td>Estado</td>
                </tr>
            </thead>
            <tbody id="tablaBuscar"></tbody>
        </table>
    </div>


<div id="resultadoV">

</div>


    </div>
    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaUsu">

        <thead class="table-dark">
            <tr class="text-monospace font-weight-bold">
                <td>DNI</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Fecha Nacimiento</td>
                <td>Responsable</td>
                <td>Calle</td>
                <td>Num</td>
                <td>Piso</td>
                <td>Letra</td>
                <td>C.P</td>
                <td>Provincia</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Usuario</td>
                <td>Fecha Alta</td>
                <td>Fecha Baja</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody id="tablaRegUsu"></tbody>
    </table>
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