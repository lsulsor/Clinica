<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$search = trim($_POST['search']);
//Llamamos al método
echo json_encode(DB::buscarUsuarios($search));