<?php

//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos el valor
$usuarioP =($_POST['usuarioP']);
//Llamamos al método
echo json_encode(DB::verHorarioProfesional($usuarioP));