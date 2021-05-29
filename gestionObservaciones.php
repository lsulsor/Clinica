<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Sesiones</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">

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
        <h1>Gestión Observaciones</h1>
    </div>

    <section class="col text-center">
        <a href="gestionProfesional.php" style="text-decoration: none"><button type="button" class="btn btn-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <form id="task-formSesionPDni">

            <input id="observacionUsuPD" name="observacionUsuPD" type="hidden" value="<?php if (isset($_SESSION["usuario"])) echo $_SESSION["usuario"]; ?>">
            <button type="button" class="btn btn-success btn-lg btn-block mb-2" id="insertarObservaciones" name="insertarObservaciones">Insertar</button>
            <button type="button" class="btn btn-outline-danger btn-lg btn-block mb-2" id="insertarObservacionesO" name="insertarObservacionesO">Cancelar</button>
            <button type="button" class="btn btn-info btn-lg btn-block mb-4" id="mostrarObservaciones" name="mostrarObservaciones">Ver Observaciones</button>
            <button type="button" class="btn btn-outline-info btn-lg btn-block mb-4" id="mostrarObservacionesO" name="mostrarObservacionesO">Ocultar</button>
        </form>

    </section>

    <form id="task-formObservaciones">
        <div class="m-auto w-50" id="insertObservaciones">
            <h2 class="text-center text-lg-start mb-4" id="titInsertarO">Insertar Observación</h2>



            <div class="form-group ">
            
                <input type="text" name="sdniProfObs" id="sdniProfObs" class="form-control" required>
            </div>


            <div class="form-group ">

                <input type="text" name="sNomApeProfObs" id="sNomApeProfObs" class="form-control" required>
            </div>


            <div class="form-group">
            <label for="sdniFamObs">Usuario/a</label>
                <select name="sdniFamObs" id="sdniFamObs" class="form-control">
                   
                </select>
            </div>
            <div class="form-group">
            <label for="fechaUObs">Fecha</label>
                <input type="date" name="fechaUObs" id="fechaObs" placeholder="Fecha" class="form-control">
            </div>
      
            <div class="md-form">
            <label for="comentarioObs">Comentario</label>
                <textarea id="comentarioObs" name="comentarioObs" class="md-textarea form-control" rows="3" placeholder="Observación de la sesión"></textarea>

            </div>


            <button type="submit" class="btn btn-success btn-block text-center m-2" id="bInsertObservacion" name="bInsertObservacion">
                Agregar Nuevo Horario
            </button>
            <button type="submit" class="btn btn-dark btn-block text-center m-2" id="cancelarT" name="cancelarT">
                        Cancelar
            </button>
        </div>
    </form>

    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaObservaciones">

        <thead class="table-dark">
            <tr class="text-monospace font-weight-bold">
                <td>ID</td>
                <td colspan="2">Datos de la Familia</td>
                <td>Fecha</td>
                <td>Comentario</td>

            </tr>
        </thead>
        <tbody id="tablaObs"></tbody>
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