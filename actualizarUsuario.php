<?php

include('claseDB.php');

$dniUsu = trim($_POST["dniUsu"]);

$nombreUsu = trim($_POST["nombreUsu"]);

$apellidoUsu = trim($_POST["apellidoUsu"]);
$fechaNacUsu = trim($_POST["fechaNacUsu"]);
$responsableUsu = trim($_POST["responsableUsu"]);
$calleUsu = trim($_POST["calleUsu"]);
$numeroUsu = trim($_POST["numeroUsu"]);
$pisoUsu = trim($_POST["pisoUsu"]);
$letraUsu = trim($_POST["letraUsu"]);
$cpUsu = trim($_POST["cpUsu"]);
$provinciaUsu = trim($_POST["provinciaUsu"]);
$telefonoUsu = trim($_POST["telefonoUsu"]);
$correoUsu = trim($_POST["correoUsu"]);
$usuarioUsu = trim($_POST["usuarioUsu"]);
$fechaAltaUsu = trim($_POST["fechaAltaUsu"]);
$fechaBajaUsu = trim($_POST["fechaBajaUsu"]);
$estadoUsu = trim($_POST["estadoUsu"]);

echo DB::actualizarUsuario($dniUsu, $nombreUsu, $apellidoUsu, $fechaNacUsu, $responsableUsu, $calleUsu, $numeroUsu, $pisoUsu, $letraUsu, $cpUsu, $provinciaUsu, $telefonoUsu, $correoUsu, $usuarioUsu, $fechaAltaUsu, $fechaBajaUsu, $estadoUsu);

