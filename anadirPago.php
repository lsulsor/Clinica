<?php

include('claseDB.php');

$pagoFamilia = trim($_POST["pagoFamilia"]);
$pagoTipo = trim($_POST["pagoTipo"]);
$pagoCantidad = trim($_POST["pagoCantidad"]);
$pagoNum = trim($_POST["pagoNum"]);
$pagoMet = trim($_POST["pagoMet"]);
$pagoFecha = trim($_POST["pagoFecha"]);


echo DB::anadirPago($pagoFamilia, $pagoTipo, $pagoCantidad, $pagoNum, $pagoMet, $pagoFecha);