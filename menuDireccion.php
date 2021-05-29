<?php
   $nombre =($_POST["opcion"]); 
 
   
   if($nombre=="Gestión de Profesionales"){
       header("Location:gestionTrabajadores.php");
       
   }
    if($nombre=="Gestión de Usuarios"){
       header("Location:gestionUsuarios.php");
       
   }
     if($nombre=="Gestión de Horarios"){
       header("Location:gestionHorarios.php");
       
   }
     if($nombre=="Gestión de Materiales"){
       header("Location:gestionMateriales.php");
       
   }
     if($nombre=="Gestión de Pagos"){
       header("Location:gestionPagos.php");
       
   }
     if($nombre=="Gestión de Gastos"){
       header("Location:gestionGastos.php");
       
   }
     if($nombre=="Consultar Sesiones"){
       header("Location:consultarSesiones.php");
       
   }
   if($nombre=="Datos de la Empresa"){
    header("Location:datosEmpresa.php");
    
}
   if($nombre=="Mis Datos"){
    header("Location:datosDirector.php");
    
}
     if($nombre=="Desconectar"){
       header("Location:desconectar.php");
       
   }