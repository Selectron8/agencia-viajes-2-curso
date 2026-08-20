<?php
 /** @var mysqli $conexion */
 $ruta="../";
 $titol = "Registrar reserva";
include("../includes/header.php");
include("../db/connexion.php");
include("../db/consultas.php");

$dni = $_POST['fdni'];
$nombre = $_POST["fnombre"];
$destino = $_POST["fdestino"];
$numpersonas = $_POST["fnumpersonas"];
$dias = $_POST["fdias"];

if ($destino=="newyork") $destino="Nueva York";
if ($destino=="londres") $destino="Londres";
if ($destino=="roma") $destino="Roma";

$resultado = insertarReserva(
    $conexion,
    $dni,
    $nombre,
    $destino,
    $numpersonas,
    $dias
);



if($resultado){
    echo "Reserva registrada correctamente.";
}else{
    echo "Error: " . mysqli_error($conexion);
}

include("../includes/footer.php");
?>