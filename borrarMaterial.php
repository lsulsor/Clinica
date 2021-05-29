<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$idMat =($_POST['idMat']);
//Llamamos al método
echo json_encode(DB::borrarMaterial($idMat));