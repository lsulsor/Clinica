<?php
//Incluimos el archivo de  conexión
include('claseDB.php');
//Almacenamos los valores
$dniProf = trim($_POST["dniProf"]);
$nombreProf = trim($_POST["nombreProf"]);
$apellidoProf = trim($_POST["apellidoProf"]);
$numColegiadoProf = trim($_POST["numColegiadoProf"]);
$telefonoProf = trim($_POST["telefonoProf"]);
$calleProf = trim($_POST["calleProf"]);
$numeroProf = trim($_POST["numeroProf"]);
$pisoProf = trim($_POST["pisoProf"]);
$letraProf = trim($_POST["letraProf"]);
$cpProf = trim($_POST["cpProf"]);
$provinciaProf = trim($_POST["provinciaProf"]);
$usuarioProf = trim($_POST["usuarioProf"]);
$fechaAltaProf = trim($_POST["fechaAltaProf"]);
$fechaBajaProf = trim($_POST["fechaBajaProf"]);
$estadoProf = trim($_POST["estadoProf"]);

//Llamamos al método
echo DB::actualizarProfesional($dniProf, $nombreProf, $apellidoProf, $numColegiadoProf, $telefonoProf, $calleProf, $numeroProf, $pisoProf, $letraProf, $cpProf, $provinciaProf, $usuarioProf, $fechaAltaProf, $fechaBajaProf, $estadoProf);