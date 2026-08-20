<?php 
$ruta = "../";
include("../includes/header.php"); 
?>
<h1>Registro de reservas</h1>
<form action="../actions/insertar.php" method="POST">

    <input type="text" name="fnombre" placeholder="Nombre"/>
    <input type="text" name="fdni" placeholder="12345678J"/>
    <select name="fdestino">
        <option value="newyork">New York</option>
        <option value="roma">Roma</option>
        <option value="londres">Londres</option>
    </select>
    <input type="number"  name="fnumpersonas" placeholder ="Número personas">

    <input type="number" name="fdias" placeholder="Días">

    <button type="submit">Registrar</button>

</form>

<?php include("../includes/footer.php"); ?>