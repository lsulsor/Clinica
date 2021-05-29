<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gestión de Gastos</title>
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
    <h1>Gestión de Gastos</h1>
    </div>
    <section class="col text-center">
        <a href="gestionDireccion.php" style="text-decoration: none"><button type="button" class="btn btn-outline-dark btn-lg btn-block mb-2">Volver al Menu Principal</button></a>
        <button type="button" class="btn btn-info btn-lg btn-block" id="verGastos" name="verGastos">Ver</button>
        <button type="button" class="btn btn-outline-info btn-lg btn-block" id="verGastosO" name="verGastos0">Ocultar</button>
        <button type="button" class="btn btn-success btn-lg btn-block mb-2" id="insertGastos" name="insertGastos">Insertar</button>
        <button type="button" class="btn btn-outline-danger btn-lg btn-block mb-4" id="insertGastosO" name="insertGastosO">Cancelar</button>


    </section>
  
    <div class="m-auto w-50" id="insertFormGast">
        <h2 class="text-center text-lg-start mb-4" id="titInserGast">Registrar Gastos</h2>

        <div class="card border-0 shadow m-4">

            <div class="card-body">
                <form id="task-formGast">


                    <div class="form-group">
                        <input type="text" name="conceptoGast" id="conceptoGast" placeholder="Concepto" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" step="0.01" name="cantidadGast" id="cantidadGast" placeholder="Cantidad 00.00" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="date" name="fechaGast" id="fechaGast" placeholder="Fecha" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="cifGast" id="cifGast" class="form-control">
                    </div>



                    <button type="submit" class="btn btn-outline-success btn-block text-center m-2" id="anadirRegGast" name="anadirRegGast">
                        Añadir Registro
                    </button>

                </form>

            </div>
        </div>
    </div>

    <div id="errores">

    </div>

    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaGastos">

        <thead class="table-dark">
            <tr class="text-monospace font-weight-bold">
                <td>ID</td>
                <td>Concepto</td>
                <td>Cantidad</td>
                <td>Fecha</td>

            </tr>
        </thead>
        <tbody id="tablaGast"></tbody>
    </table>

    <div class="footer">
 <?php
        include('footer.php')
        ?>
 </div>



    <script src="js/clockpicker.js"></script>
</body>

</html>