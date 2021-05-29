<?php

include('claseDB.php');

$dniProfEsp = trim($_POST['dniProfEsp']);
$esp = trim($_POST['esp']);
$sHab= trim($_POST['sHab']);


echo DB::anadirEspecialidad($dniProfEsp, $esp, $sHab);