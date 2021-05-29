<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestión Familiar</title>
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
    <script src="html2pdf/dist/html2pdf.bundle.min.js"></script>
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
    <span class="float-right mr-4 mt-2"><a href="desconectar.php" style="text-decoration: none"><button type="button" class="btn btn-dark btn-sm">Desconectar</button></a></span>
    <div class="mensajeUsuario">
        <?php
        //Mostramos el nombre de usuario y la fecha de conexión
        echo "<p>Hola " . $_SESSION["usuario"] . ", se ha conectado a las " . date("H:i", $_SESSION['hora']) . "<br><br></p>";
      
        ?>
    </div>

    <button type="button" class="btn btn-outline-info m-4" id="btnCrearPdf">Guardar Horario</button>

    <section class="col text-center">


        <form id="task-formUsuarioUsu">

            <input id="UsuarioUsu" name="UsuarioUsu" type="hidden" value="<?php if (isset($_SESSION["usuario"])) echo $_SESSION["usuario"]; ?>">
            <button type="button" class="btn btn-success btn-lg btn-block mb-2" id="verHorarioUsu" name="verHorarioUsu">Mostrar mi Horario</button>
            <button type="button" class="btn btn-info btn-lg btn-block mb-2" id="verObsUsu" name="verObsUsu">Mostrar mis observaciones</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block mb-2" id="modificarMiUsu" name="modificarMiUsu">Mostrar mis datos</button>
            <button type="button" class="btn btn-outline-warning btn-lg btn-block mb-2" id="ocultarO" name="ocultarO">Cerrar</button>

        </form>

    </section>
    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaHorarioUsuario">

        <thead class="table-success">
            <tr class="text-monospace font-weight-bold">
                <td>ID</td>
                <td colspan="2">Datos del Profesional</td>
                <td>Día</td>
                <td>Hora</td>
                <td>Tipo</td>

            </tr>
        </thead>
        <tbody id="tablaHUsu"></tbody>
    </table>
    
    <table class="table table-sm table-hover table table-striped table-borderless text-center" id="tablaObservacionesUsuario">

        <thead class="table-info">
            <tr class="text-monospace font-weight-bold">
                <td>ID</td>
                <td colspan="2">Datos del Profesional</td>
                <td>Fecha</td>
                <td>Comentario</td>


            </tr>
        </thead>
        <tbody id="tablaObsUsu"></tbody>
    </table>


    <div class="m-auto w-50" id="modUsuarioUsu">
        <h2 class="text-center text-lg-start mb-4" id="titActRegUsu">Mis Datos Personales</h2>



        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formUsuUsu" name="task-formUsuUsu">
                    <div class="form-group">
                        <input type="hidden" name="dniUsuU" id="dniUsuU" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombreUsuU" id="nombreUsuU" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidoUsuU" id="apellidoUsuU" placeholder="Apellidos" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaNacUsuU" id="fechaNacUsuU" placeholder="Fecha de Nacimiento" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="responsableUsuU" id="responsableUsuU" placeholder="Responsable" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="calleUsuU" id="calleUsuU" placeholder="Calle" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="numeroUsuU" id="numeroUsuU" placeholder="Número" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="pisoUsuU" id="pisoUsuU" placeholder=Piso class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="letraUsuU" id="letraUsuU" placeholder="Letra" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cpUsuU" id="cpUsuU" placeholder="CP" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="provinciaUsuU" id="provinciaUsuU" placeholder="Provincia" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefonoUsuU" id="telefonoUsuU" placeholder="Teléfono" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="correoUsuU" id="correoUsuU" placeholder="Correo electrónico" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-outline-info btn-block text-center m-2" id="actRegUsuU" name="actRegUsuU">
                        Actualizar mis datos
                    </button>
                    <button type="submit" class="btn btn-outline-dark btn-block text-center m-2" id="cancelarT" name="cancelarT">
                        Cancelar
                    </button>

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