<?php

include('claseDB.php');

$tipoEsp = trim($_POST['tipoEsp']);

echo DB::anadirTipoEspecialidad($tipoEsp);