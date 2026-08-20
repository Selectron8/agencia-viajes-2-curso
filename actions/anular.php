<?php
 /** @var mysqli $conexion */
$ruta = "../";
$titol = "Consultar por id";
include("../includes/header.php");
include("../db/connexion.php");
include("../db/consultas.php");
echo "<h1>Anular reserva por id</h1>";
$id = $_POST['fid'];

$resultado = anularReserva(
    $conexion,
    $id
);



if($resultado){
    echo "<p>La reserva nº $id está eliminada.</p>";
}else{
    echo "Error: " . mysqli_error($conexion);
}


?>