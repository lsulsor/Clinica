<?php

include('claseDB.php');



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
$contraProf = trim($_POST["contraProf"]);
$contraProfR = trim($_POST["contraProfR"]);
$fechaAltaProf = trim($_POST["fechaAltaProf"]);
$fechaBajaProf = trim($_POST["fechaBajaProf"]);
$estadoProf = trim($_POST["estadoProf"]);



echo DB::anadirprofesional($dniProf, $nombreProf, $apellidoProf, $numColegiadoProf , $telefonoProf , $calleProf, 
$numeroProf, $pisoProf, $letraProf, $cpProf , $provinciaProf, $usuarioProf, $contraProf , $contraProfR , $fechaAltaProf , $fechaBajaProf, $estadoProf);
	
 




