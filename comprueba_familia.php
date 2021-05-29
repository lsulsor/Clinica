<?php

include('claseDB.php');
DB::conectar();

$contadorFam = 0;

//Almacenamos las variables
$loginFam = htmlentities(addslashes($_POST["loginFam"]));
$passwordFam = htmlentities(addslashes($_POST["passwordFam"]));


	
$sql = "SELECT usuario, contrasenia FROM familia WHERE usuario= :usu";

        $consulta = DB::conectar()->prepare($sql);

        $consulta->execute(array(":usu" => $loginFam));
//Recorro el array e incremento contador si existe un resultado coincidente
        while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
            //Como esta encriptado para saber si esta en la base de datos utilizo la funcion password_verify
            if ($loginFam == $registro['usuario'] and password_verify($passwordFam, $registro['contrasenia'])) {
                //Si son iguales quiero que me incremente la variable contador
                $contadorFam++;
             
                
            } else {
                
                
            }
        }

       
    if ($contadorFam > 0) {

            //Si el usuario se encuentra en la base de datos abre una sesion
            session_start();
            //Se almacena en la variable superglobal SESSION los datos de login
            //Dentro del corchete de session el nombre con el que queramos identificar
            $_SESSION["usuario"] = $_POST["loginFam"];
            $_SESSION['hora'] = time();
            //En el caso que el usuario exita en la base datos se redirige a la pagian de ususairos registrados
            header("location:gestionFamiliar.php");
        } else {
            
              header("location:areaFamiliar.php?fallo=true");
            
        }    
        

