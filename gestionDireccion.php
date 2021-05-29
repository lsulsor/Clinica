<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Gestión de Dirección</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <?php
    //Inicio la sesión
    session_start();
    ?>
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
    <div class="d-flex justify-content-center align-items-center container pt-lg-4 pb-4">
        <!--Formulario con las diferentes opciones-->
        <form name="form" action="menuDireccion.php" method="POST">

            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Profesionales" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Usuarios" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Horarios" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Materiales" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Pagos" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Gastos" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Consultar Sesiones" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Datos de la Empresa" /><br><br>
            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Mis Datos" /><br><br>

            <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Desconectar" /><br><br>
        </form>
    </div>

    <?php
    include('footer.php')
    ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>