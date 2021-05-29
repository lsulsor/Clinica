<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor


//Llamamos al método
echo json_encode(DB::obtenerDatosDirector());