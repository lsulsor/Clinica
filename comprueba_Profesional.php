<?php

include('claseDB.php');
DB::conectar();

$contadorProf = 0;

//Almacenamos las variables
$loginProf = htmlentities(addslashes($_POST["loginProf"]));
$passwordProf = htmlentities(addslashes($_POST["passwordProf"]));


	
$sql = "SELECT usuario, contrasenia FROM profesional WHERE usuario= :usu";

        $consulta = DB::conectar()->prepare($sql);

        $consulta->execute(array(":usu" => $loginProf));
//Recorro el array e incremento contador si existe un resultado coincidente
        while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
            
            //Como esta encriptado para saber si esta en la base de datos utilizo la funcion password_verify
            if ($loginProf == $registro['usuario'] and password_verify($passwordProf, $registro['contrasenia'])) {
                //Si son iguales quiero que me incremente la variable contador
                $contadorProf++;
                
           
                
            } else {
              echo "Contraseña o usuario incorrecto";
            }
        }

       
    if ($contadorProf > 0) {

            //Si el usuario se encuentra en la base de datos abre una sesion
            session_start();
            //Se almacena en la variable superglobal SESSION los datos de login
            //Dentro del corchete de session el nombre con el que queramos identificar
            $_SESSION["usuario"] = $_POST["loginProf"];
            $_SESSION['hora'] = time();
            $_SESSION["direccion"] = "profesional";
            //En el caso que el usuario exita en la base datos se redirige a la pagian de ususairos registrados
            header("location:gestionProfesional.php");
        } else {
           
              header("location:areaProfesional.php?fallo=true");
            
        }    
        


