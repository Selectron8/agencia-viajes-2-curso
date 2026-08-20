<?php 
$ruta = "../";
$titol = "Actualizar reserva por id";
include("../includes/header.php"); 
?>
<section>
<h1>Actualitzar número de días por clave primaria</h1>
<form action="../actions/actualitzar.php" method="POST">
    <label>Introduce la clave primaria
    <input type="number" name="fid"/></label> 
    <label>Introduce el número de días actualizado
    <input type="number" name="fdies"/></label>
    <button type="submit">Actualizar</button>
</form>
</section>
<?php include("../includes/footer.php"); ?>