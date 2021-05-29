<?php

//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$sesionUsuPD =($_POST['sesionUsuPD']);
//Llamamos al método
echo json_encode(DB::verSesiones($sesionUsuPD));