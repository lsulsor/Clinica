<?php

include('claseDB.php');

$conceptoGast = trim($_POST["conceptoGast"]);
$cantidadGast = trim($_POST["cantidadGast"]);
$fechaGast = trim($_POST["fechaGast"]);
$cifGast = trim($_POST["cifGast"]);



echo DB::anadirGasto($conceptoGast, $cantidadGast, $fechaGast, $cifGast);