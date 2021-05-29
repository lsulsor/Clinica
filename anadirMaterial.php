<?php

include('claseDB.php');

$nombreMat = trim($_POST["nombreMat"]);
$descripcionMat = trim($_POST["descripcionMat"]);
$fechaMat = trim($_POST["fechaMat"]);



echo DB::anadirMaterial($nombreMat, $descripcionMat, $fechaMat);