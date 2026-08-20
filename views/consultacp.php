<?php 
$ruta = "../";
$titol = "Consulta por id";
include("../includes/header.php"); 
?>
<section>
<h1>Consulta reserva por clave primaria</h1>
<form action="../actions/consultar.php" method="POST">
   <label>Introduce la clave primaria</label> 
    <input type="number" name="fid"/>
    

    <button type="submit">Consultar</button>

</form>
</section>
<?php include("../includes/footer.php"); ?>