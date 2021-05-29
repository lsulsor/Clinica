<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

<head>
    <meta charset="UTF-8">
    <title>Gestión de Horarios</title>
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
        <h1>Gestión horarios</h1>
    </div>
    <section class="col text-center">
        <a href="gestionDireccion.php" style="text-decoration: none"><button type="button" class="btn btn-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <button type="button" class="btn btn-info btn-lg btn-block" id="verHorario" name="verHorario">Consultar Horario</button>
        <button type="button" class="btn btn-outline-info btn-lg btn-block" id="verHorarioO" name="verHorarioO">Ocultar</button>
        <button type="button" class="btn btn-success btn-lg btn-block mb-4" id="insertFHorario" name="insertFHorario">Crear Horario</button>
        <button type="button" class="btn btn-outline-danger btn-lg btn-block mb-4" id="insertFHorarioO" name="insertFHorarioO">Cancelar</button>


    </section>
    <div class="m-auto w-50" id="insertHorario">
        <h2 class="text-center text-lg-start mb-4" id="titInsertarH">Insertar Horario</h2>


        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formHor">
                    <div class="form-group">
                    <label for="sDniProfesional">Profesional</label>
                        <select name="sDniProfesional" id="sDniProfesional" class="form-control">
                         
                        </select>

                    </div>

                    <div class="form-group">
                    <label for="sDniFamilia">Usuario/a</label>
                        <select name="sDniFamilia" id="sDniFamilia" class="form-control">
                          
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="sDia">Día</label>
                        <select name="sDia" id="sDia" class="form-control">
                          
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miércoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sábado</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control clockpicker" value="18:00" id="hora" data-placement="right" data-align="top" data-autoclose="true" readonly="true">
                    </div>

                    <div class="form-group">
                    <label for="sTipo">Especialidad</label>
                        <select name="sTipo" id="sTipo" class="form-control">
                        
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-block text-center m-2" id="bInsertHorario" name="bInsertHorario">
                        Agregar Nuevo Horario
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
    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaHorario">

        <thead class="table-dark">
            <tr class="text-monospace font-weight-bold">
                <td>ID</td>
                <td colspan="2">Datos de la Familia</td>
                <td colspan="2">Datos del Profesional</td>
                <td>Día de la semana</td>
                <td>Hora</td>
                <td>Tipo</td>

            </tr>
        </thead>
        <tbody id="tablaHor"></tbody>
    </table>

    <div class="footer">
 <?php
        include('footer.php')
        ?>
 </div>


    <script src="js/clockpicker.js"></script>

</body>

</html>