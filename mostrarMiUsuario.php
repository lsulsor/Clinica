<?php

//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$usuarioUsu =($_POST['usuarioUsu']);
//Llamamos al método
echo json_encode(DB::verMiUsuario($usuarioUsu));