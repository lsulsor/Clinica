<html>

<head>
    
    <title>Área Privada</title>
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
    <script src="include/funciones.js"></script>
</head>

<body>
    <?php
    include('menuPrincipal.php')
    ?>
    <?php
    if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
        echo "<div class='alert alert-danger' role='alert'>
                    Usuario/Contraseña no son correctos
                  </div>";
    }
    ?>
    <div class="d-flex justify-content-center align-items-center container pt-lg-5 pb-5">
        <div class="col-lg-4 col-lg-offset-4">
            <!--Formuario de loguin-->
            <form class="col-md-20" action="comprueba_login.php" method="POST">
                <TABLE class="table table-light table-hover">
                    <tr>
                        <td class="text-secondary"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd" />
                            </svg> Login</td>
                        <td><input class="border border-secondary rounded form-control form-control-sm" type="text" name="login" id="login" required autofocus></td>
                    </tr>
                    <tr>
                        <td class="text-secondary"><svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 00-1 1v5a1 1 0 001 1h7a1 1 0 001-1V9a1 1 0 00-1-1zm-7-1a2 2 0 00-2 2v5a2 2 0 002 2h7a2 2 0 002-2V9a2 2 0 00-2-2h-7zm0-3a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd" />
                            </svg> Contraseña</td>
                        <td><input class="border border-secondary rounded form-control form-control-sm" type="password" name="password" id="password" requ nameired></td>
                    </tr>
                    <small id="passwordHelpInline" class="text-muted">
                        Escribe tu usuario y contraseña para acceder
                    </small>
                </TABLE>

                <input class="btn btn-dark d-flex justify-content-center align-items-center container" type="submit" name="enviar" value="Enviar">
            </form>
        </div>
    </div>

    <script src="js/clockpicker.js"></script>
</body>

</html>