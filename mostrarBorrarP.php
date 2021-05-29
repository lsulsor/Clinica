<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$dniP =($_POST['dniP']);

//Llamamos al método
echo json_encode(DB::obtenerBorrarProfesional($dniP));