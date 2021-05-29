<?php

include('claseDB.php');
DB::conectar();

$contador = 0;

//Almacenamos las variables
$login = htmlentities(addslashes($_POST["login"]));
$password = htmlentities(addslashes($_POST["password"]));


if (empty($login) OR empty($password)) {
    header('Location: areaPrivada.php');
}


$sql = "SELECT usuario, contrasenia FROM director WHERE usuario= :login";

$consulta = DB::conectar()->prepare($sql);

$consulta->execute(array(":login" => $login));
//Recorro el array e incremento contador si existe un resultado coincidente
while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
    //Como esta encriptado para saber si esta en la base de datos utilizo la funcion password_verify
    if ($login == $registro['usuario'] and password_verify($password, $registro['contrasenia'])) {
        //Si son iguales quiero que me incremente la variable contador
        $contador++;
    }
}

if ($contador > 0) {

            //Si el usuario se encuentra en la base de datos abre una sesion
            session_start();
            //Se almacena en la variable superglobal SESSION los datos de login
            //Dentro del corchete de session el nombre con el que queramos identificar
            $_SESSION["usuario"] = $_POST["login"];
            $_SESSION['hora'] = time();
            $_SESSION["direccion"] = "directora";

            //En el caso que el usuario exita en la base datos se redirige a la pagian de ususairos registrados
            header("location:gestionDireccion.php");
        } else {
            
              header("location:areaPrivada.php?fallo=true");
            
        }
        

        
        
        
