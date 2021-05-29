<?php
   $nombre =($_POST["opcion"]); 

   
   if($nombre=="Gestión Sesiones"){
       header("Location:consultarSesiones.php");
       
   }
    if($nombre=="Gestión de Usuarios"){
       header("Location:gestionUsuarios.php");
       
   }
     if($nombre=="Gestión de Observaciones"){
       header("Location:gestionObservaciones.php");
       
   }

     if($nombre=="Desconectar"){
       header("Location:desconectar.php");
       
   }