<?php


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST["email"] ;
    $to = "laurassdaw@gmail.com";
    $subject = $_POST["nombreEmail"] ." ";
    $subject .= $_POST["apellidosEmail"];

    $message = $_POST["comentario"];
    $headers = "From:" . $from;
     $exito =mail($to,$subject,$message, $headers);
  
if($exito){

    header("location:contacto.php?enviado=true");


}else {
    header("location:contacto.php?enviado=false");
}

?>