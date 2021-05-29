<?php

include('claseDB.php');

$horaProf = trim($_POST["horaProf"]);
$horaFam = trim($_POST["horaFam"]);
$horaDia = trim($_POST["horaDia"]);
$horaH = trim($_POST["horaH"]);
$horaTipo = trim($_POST["horaTipo"]);


echo DB::anadirHorario($horaProf, $horaFam, $horaDia, $horaH, $horaTipo);
	
 
