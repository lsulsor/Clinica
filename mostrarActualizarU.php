<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$dniU =($_POST['dniU']);

//Llamamos al método
echo json_encode(DB::obtenerUsuario($dniU));