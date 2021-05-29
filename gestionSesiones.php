<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Gestsión de Sesiones</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">

</head>

<body>
    <section class="col text-center">




        <form id="task-formSesionPDni">

            <input id="sesionUsuPD" name="sesionUsuPD" type="hidden" value="<?php if (isset($_SESSION["usuario"])) echo $_SESSION["usuario"]; ?>">

            <button type="button" class="btn btn-info btn-lg btn-block mb-2" id="mostrarUSesiones" name="mostrarUSesiones">Ver Sesiones Registradas</button>
            <button type="button" class="btn btn-outline-info btn-lg btn-block mb-2" id="mostrarUSesionesO" name="mostrarUSesionesO">Ocultar</button>
            <button type="button" class="btn btn-success btn-lg btn-block mb-4" id="insertarUSesiones" name="insertarUSesiones">Registrar Nueva Sesión</button>
            <button type="button" class="btn btn-outline-danger btn-lg btn-block mb-4" id="insertarUSesionesO" name="insertarUSesionesO">Cancelar</button>
        </form>




    </section>
    <form id="task-formUSesiones">
        <div class="m-auto w-50" id="insertUSesiones">
            <h2 class="text-center text-lg-start mb-4" id="titInsertarS">Registrar Sesión</h2>



            <div class="form-group ">

                <input type="text" name="sdniProfSUs" id="sdniProfSUs" class="form-control" required>
            </div>


            <div class="form-group ">

                <input type="text" name="sNomApeProfSUs" id="sNomApeProfSUs" class="form-control" required>
            </div>
        

            <div class="form-group">
            <label for="sdniFamSUs">Usario/a</label>
                <select name="sdniFamSUs" id="sdniFamSUs" class="form-control">
                
                </select>
            </div>
            <div class="form-group">
            <label for="fechaUSesiones">Fecha</label>
                <input type="date" name="fechaUSesiones" id="fechaUSesiones" placeholder="Fecha de Ingreso" class="form-control">
            </div>
            <div class="form-group">
            <label for="horaSesiones">Hora</label>
                <input type="text" class="form-control clockpicker" value="18:00" id="horaSesiones" data-placement="right" data-align="top" data-autoclose="true" readonly="true">
            </div>


            <button type="submit" class="btn btn-success btn-block text-center m-2" id="bInsertUSesiones" name="bInsertUSesiones">
                Agregar Nuevo Regsitro
            </button>

    </form>



    </div>
    </div>
    </div>

    <div id="errores">

    </div>
    <table class="table table-sm table table-hover table-striped table-borderless text-center" id="tablaSesionesU">

        <thead class="table-dark"> 
            <tr class="text-monospace font-weight-bold">
                <td>ID</td>
                <td colspan="2">Datos de la Familia</td>
                <td>Fecha</td>
                <td>Hora</td>

            </tr>
        </thead>
        <tbody id="tablaSU"></tbody>
    </table>


</body>

</html>