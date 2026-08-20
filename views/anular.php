<?php 
$ruta = "../";
$titol = "Anular reserva por id";
include("../includes/header.php"); 
?>
<section>
<h1>Anular reserva por clave primaria</h1>
<form action="../actions/anular.php" method="POST">
   <label>Introduce la clave primaria</label> 
    <input type="number" name="fid"/>
    

    <button type="submit">Anular</button>

</form>
</section>
<?php include("../includes/footer.php"); ?>