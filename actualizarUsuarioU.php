<?php

include('claseDB.php');



$dniUsuU = trim($_POST["dniUsuU"]);
$nombreUsuU = trim($_POST["nombreUsuU"]);
$apellidoUsuU = trim($_POST["apellidoUsuU"]);
$fechaNacUsuU = trim($_POST["fechaNacUsuU"]);
$responsableUsuU = trim($_POST["responsableUsuU"]);
$calleUsuU = trim($_POST["calleUsuU"]);
$numeroUsuU = trim($_POST["numeroUsuU"]);
$pisoUsuU = trim($_POST["pisoUsuU"]);
$letraUsuU = trim($_POST["letraUsuU"]);
$cpUsuU = trim($_POST["cpUsuU"]);
$provinciaUsuU = trim($_POST["provinciaUsuU"]);
$telefonoUsuU = trim($_POST["telefonoUsuU"]);
$correoUsuU = trim($_POST["correoUsuU"]);


echo DB::actualizarUsuarioU($dniUsuU, $nombreUsuU, $apellidoUsuU, $fechaNacUsuU, $responsableUsuU, $calleUsuU, $numeroUsuU, $pisoUsuU, $letraUsuU, $cpUsuU, $provinciaUsuU, $telefonoUsuU, $correoUsuU);