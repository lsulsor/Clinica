<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consultar Sesiones</title>
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
    <?php
    if ($_SESSION["direccion"] == "directora") {
        echo " <div class='jumbotron jumbotron-fluid'>";
        echo  "<h1>Consulta de Sesiones</h1>";
        echo "</div>";
    } else {
        echo " <div class='jumbotron jumbotron-fluid'>";
        echo "<h1>Gestión de Sesiones</h1>";
        echo "</div>";
    }
    ?>


    <?php
    if ($_SESSION["direccion"] == "directora") {
        echo  "<a href='gestionDireccion.php' style='text-decoration: none'><button type='button' class='btn btn-dark btn-lg btn-block mb-2'>Volver al Menu Principal</button></a>";
        
    } else {

        echo "<a href='gestionProfesional.php' style='text-decoration: none'><button type='button' class='btn btn-dark btn-lg btn-block mb-2'>Volver al Menu Principal</button></a>";
        include "gestionSesiones.php";
    }
    ?>
    <!-- Formulario de búsqueda -->
   
    <form class="form-inline justify-content-center mb-5" id="buscadorSesiones" name="buscadorSesiones">
        <input id="searchSesiones" class="form-control mr-sm-2" type="search" placeholder="Nombre del profesional" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0 " type="submit" id="borrar_searchSesiones">Eliminar resultados</button>
    </form>
    <!-- Se muestra el resultado de la búsqueda -->
    <div class="col-md-12" id="resultBusquedaSesiones">
       
        <table class="table table-sm table table-hover table-striped table-borderless text-center">

            <thead class="table-dark">
                <tr class="text-monospace font-weight-bold">
                    <td>ID</td>
                    <td colspan="2">Datos del Profesional</td>
                    <td colspan="2">Datos de la Familia</td>
                    <td>Fecha</td>
                    <td>Hora</td>
                </tr>
            </thead>
            <tbody id="tablaBuscarSesiones"></tbody>
        </table>
    </div>

    <div id="resultadoS">

   </div>
   <div class="footer">
 <?php
        include('footer.php')
        ?>
 </div>
    <script src="js/clockpicker.js"></script>
</body>

</html>