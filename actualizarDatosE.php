<?php

include('claseDB.php');



$cifE = trim($_POST["cifE"]);
$nombreE = trim($_POST["nombreE"]);
$directorE = trim($_POST["directorE"]);



echo DB::actualizarDatosEmpresa($cifE, $nombreE, $directorE);