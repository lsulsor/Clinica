<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <title>Gestion del Profesional</title>
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
  


<div class="d-flex justify-content-center align-items-center container pt-lg-4 pb-4">
            <!--Formulario con las diferentes opciones-->
            <form name="form" action="menuProfesional.php" method="POST">

                <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión Sesiones" /><br><br>
                <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Usuarios" /><br><br>
                <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Gestión de Observaciones" /><br><br>
                <input class="btn btn-outline-dark btn-lg btn-block" type="submit" name="opcion" value="Desconectar" /><br><br>
            </form>
        </div>
     
<h1 id="tHorProf">Horario de  <?php echo $_SESSION["usuario"] ?></h1>
<form id="task-formSesionP">
<input id="sesionUsuP" name="sesionUsuP" type="hidden" value="<?php if (isset($_SESSION["usuario"])) echo $_SESSION["usuario"]; ?>">
<button type="button" class="btn btn-success btn-lg btn-block mb-4" id="bverHorProf" name="bverHorProf">Consultar Horario</button>  
<button type="button" class="btn btn-outline-warning btn-lg btn-block mb-4" id="bverHorProfO" name="bverHorProfO">Ocultar Horario</button>  
</form>
<table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaProfHorario">

<thead class="table-dark">
    <tr class="text-monospace font-weight-bold">

        <td>Nombre</td>
        <td>Apellido</td>
        <td>Dia</td>
        <td>Hora</td>
        <td>Tipo</td>

    </tr>
</thead>
<tbody id="tablaPH"></tbody>
</table>


<?php
    include('footer.php')
?>

    <script src="js/clockpicker.js"></script>

</body>

</html>