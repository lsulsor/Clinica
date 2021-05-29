<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$searchS= trim($_POST['searchS']);
//Llamamos al método
echo json_encode(DB::buscarSesiones($searchS));