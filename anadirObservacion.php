<?php

include('claseDB.php');

$ObservacionUsuProf = trim($_POST["ObservacionUsuProf"]);
$ObservacionDniFam = trim($_POST["ObservacionDniFam"]);
$ObservacionFec = trim($_POST["ObservacionFec"]);
$ObservacionCom = trim($_POST["ObservacionCom"]);



echo DB::anadirObservacion($ObservacionUsuProf, $ObservacionDniFam, $ObservacionFec, $ObservacionCom);