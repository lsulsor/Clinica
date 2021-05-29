<?php

include('claseDB.php');


$contraD = trim($_POST['contraD']);
$contraDR = trim($_POST['contraDR']);


echo DB::cambiarContraDir($contraD, $contraDR);