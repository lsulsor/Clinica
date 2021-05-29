<?php

include('claseDB.php');

$dniUsufC = trim($_POST['dniUsuC']);
$contraUsuC = trim($_POST['contraUsuC']);
$contraUsuCR = trim($_POST['contraUsuCR']);


echo DB::cambiarContraUsuario($dniUsufC, $contraUsuC, $contraUsuCR);