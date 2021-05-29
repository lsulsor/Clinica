<?php

include('claseDB.php');

$sesionUsuProf = trim($_POST["sesionUsuProf"]);
$sesionDniFam = trim($_POST["sesionDniFam"]);
$sesionFec = trim($_POST["sesionFec"]);
$sesionHora = trim($_POST["sesionHora"]);



echo DB::anadirSesion($sesionUsuProf, $sesionDniFam, $sesionFec, $sesionHora);
