<?php
 /** @var mysqli $conexion */
$ruta = "../";
$titol = "Consultar por id";
include("../includes/header.php");
include("../db/connexion.php");
include("../db/consultas.php");
echo "<h1>Consulta reserva por id</h1>";
$id = $_POST['fid'];

$resultado = consultarReserva(
    $conexion,
    $id
);

if($resultado){
    $fila = mysqli_fetch_assoc($resultado);
    echo "<p>La reserva nº $id está realizada por $fila[nombre], con DNI $fila[dni], a $fila[destino], para $fila[numpersonas] personas durante $fila[numdias] días.</p>";
}else{
    echo "Error: " . mysqli_error($conexion);
}


?>