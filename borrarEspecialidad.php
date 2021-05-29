<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$id =($_POST['id']);
//Llamamos al método
echo json_encode(DB::borrarEspecialidad($id));