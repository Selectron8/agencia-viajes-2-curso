<?php
mysqli_report(MYSQLI_REPORT_OFF);

include("../db/variables.php");

$conexion=@mysqli_connect($servidor,$usuario,$password,$bd) or die("Problemas en la connexión");



?>