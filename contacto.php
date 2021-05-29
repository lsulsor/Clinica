<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Production version -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
</head>

<body>
    <?php
    include('menuPrincipal.php')
    ?>
     <?php
    if (isset($_GET["enviado"]) && $_GET["enviado"] == 'true') {
        echo "<div class='alert alert-success' role='alert'>
                    Mensaje enviado correctamente
                  </div>";
    }
    if (isset($_GET["enviado"]) && $_GET["enviado"] == 'false') {
        echo "<div class='alert alert-warning' role='alert'>
                    No se ha podido enviar el mensaje
                  </div>";
    }
    ?>
    <div class="card">
        <div class="card-header">
            <h1 class="display-4 text-center"></h1>
        </div>
        <div div id="intro" class="view">
            <div class="full-bg-img">
                <div class="card-body text-center">
                    <h3 class="display-4 text-center">Contacto</h3><br><br>
                    <blockquote class="blockquote"></blockquote>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <h3 class="mt-5">Formulario de Contacto</h3><br />

        <div class="row">
            <div class="col-md-8">
                <form  method="post" name="formContacto" id="formContacto" action="enviarEmail.php"> 
                    <input class="form-control" name="nombreEmail" id="nombreEmail" placeholder="Nombre" required /><br />
                    <input class="form-control" name="apellidosEmail" id="apellidosEmail" placeholder="Apellidos" required/><br />
                    <input class="form-control" name="email" id="email" placeholder="Correo Electrónico" required/><br />
                    <textarea class="form-control" name="comentario" id="comentario" placeholder="Escribe tu consulta" style="height:150px;" required></textarea><br />
   
                    <input class="btn btn-outline-info" name="enviarEmail" id="enviarEmail" type="submit" value="Enviar" /><br /><br />
                </form>
            </div>
            <div class="col-md-4">
                <b>Dirección</b> <br />
                Calle Clinica numero 1<br />
                <br /><br />
                <b>Teléfono de Contacto:</b><br />
                00000000<br />



                <br /><br />
                <b>Horario de Atención:</b><br />
                Lunes a Viernes <br />
                10:00 a 20:00<br />



            </div>
        </div>

    </div>

    <div id="errores">
    
    </div>

    <?php
    include('footer.php')
    ?>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>