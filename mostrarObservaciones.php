<?php

//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$observacionUsuPD =($_POST['observacionUsuPD']);
//Llamamos al método
echo json_encode(DB::verObservaciones($observacionUsuPD));