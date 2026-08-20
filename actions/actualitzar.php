<?php
 /** @var mysqli $conexion */
$ruta = "../";
$titol = "Actualizar por id";
include("../includes/header.php");
include("../db/connexion.php");
include("../db/consultas.php");
echo "<h1>Actualizar número días por id</h1>";
$id = $_POST['fid'];
$dies = $_POST['fdies'];

$resultado = actualizarReserva(
    $conexion,
    $id,
    $dies
);



if($resultado){
        echo "<p>La reserva nº $id está actualizada a $dies días.</p>";
}else{
    echo "Error: " . mysqli_error($conexion);
}


?>