<?php

include('claseDB.php');

$dniProfC = trim($_POST['dniProfC']);
$contraProfC = trim($_POST['contraProfC']);
$contraProfCR = trim($_POST['contraProfCR']);


echo DB::cambiarContraProfesional($dniProfC, $contraProfC, $contraProfCR);