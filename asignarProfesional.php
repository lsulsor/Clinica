<?php

include('claseDB.php');

$dniUsuAP = trim($_POST['dniUsuAP']);
$sDniProfesionalAP = trim($_POST['sDniProfesionalAP']);
$sTipoAP = trim($_POST['sTipoAP']);


echo DB::asignarProf($dniUsuAP, $sDniProfesionalAP, $sTipoAP);