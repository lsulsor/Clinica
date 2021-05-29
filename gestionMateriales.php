<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Gestión de Materiales</title>
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
    <h1>Gestión de Materiales</h1>
    </div>
    <section class="col text-center">
        <a href="gestionDireccion.php" style="text-decoration: none"><button type="button" class="btn btn-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <button type="button" class="btn btn-info btn-lg btn-block" id="verMaterial" name="vermaterial">Consultar Materiales</button>
        <button type="button" class="btn btn-outline-info btn-lg btn-block" id="verMaterialO" name="vermaterial0">Ocultar Materiales</button>
        <button type="button" class="btn btn-success btn-lg btn-block mb-4"" id="bInsertarMaterial" name="bInsertarMaterial">Registrar Material</button>
        <button type="button" class="btn btn-outline-danger btn-lg btn-block mb-4" id="bInsertarMaterialO" name="bInsertarMaterialO">Cancelar</button>


    </section>
    <div class="m-auto w-50" id="insertMaterial">
        <h2 class="text-center text-lg-start mb-4" id="titInsertarM">Registrar Material </h2>
        <div class="card-body">
            <form id="task-formMaterial">


                <div class="form-group">
                    <input type="text" name="nombreMat" id="nombreMat" placeholder="Material" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="descripcionMat" id="descripcionMat" placeholder="Descripción" class="form-control">
                </div>
                <div class="form-group">
                    <input type="date" name="fechaMat" id="fechaMat" placeholder="Fecha de Compra" class="form-control">
                </div>


                <button type="submit" class="btn btn-success btn-block text-center mb-2" id="anadirRegMat" name="anadirReg">
                    Añadir Registro del Material
                </button>
                <button type="submit" class="btn btn-dark btn-block text-center mb-2" id="cancelarT" name="cancelarT">
                        Cancelar
                </button>

            </form>

        </div>



    </div>
    <div id="errores">

    </div>


    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaMaterial">

        <thead class="table-dark">
            <tr class="text-monospace font-weight-bold">
                <td>ID</td>
                <td>Material</td>
                <td>Descripción</td>
                <td>Fecha de Compra</td>

            </tr>
        </thead>
        <tbody id="tablaMat"></tbody>
    </table>

    <script src="js/clockpicker.js"></script>

    <div class="footer">
 <?php
        include('footer.php')
        ?>
 </div>
</body>

</html>