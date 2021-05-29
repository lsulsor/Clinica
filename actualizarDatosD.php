<?php

include('claseDB.php');




$nombreD= trim($_POST["nombreD"]);
$apellidoD = trim($_POST["apellidoD"]);
$calleD = trim($_POST["calleD"]);
$numeroD = trim($_POST["numeroD"]);
$pisoD = trim($_POST["pisoD"]);
$letraD = trim($_POST["letraD"]);
$cpD = trim($_POST["cpD"]);
$provinciaD = trim($_POST["provinciaD"]);
$telefonoD = trim($_POST["telefonoD"]);
$usuarioD = trim($_POST["usuarioD"]);



echo DB::actualizarDatosDirector($nombreD, $apellidoD , $calleD, $numeroD, $pisoD, $letraD, $cpD, $provinciaD, $telefonoD, $usuarioD);