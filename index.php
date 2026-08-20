<?php
 $ruta="";
$titol = "Agencia de Viajes";

include ("includes/header.php");

?>

<section class="cards">
  <article class="card">
    <h1>Agencia de Viajes</h1>

    <p>
       Descubre los mejores destinos para tus vacaciones.
    </p>
 </article>
</section>

<section class="cards">

    <article class="card">

        <h2>París</h2>

        <p>
            La ciudad de la luz y de la Torre Eiffel.
        </p>

    </article>

    <article class="card">

        <h2>Roma</h2>

        <p>
            Historia, cultura y gastronomía.
        </p>

    </article>

    <article class="card">

        <h2>Londres</h2>

        <p>
            Descubre sus monumentos emblemáticos.
        </p>

    </article>

</section>

    <?php
        $h=2;
        include "includes/destins.php";
    ?>

<section class="cards">

    <article class="card">
    <?php
        $h=2;
        include "includes/formcontacte.php";
    ?>
    </article></section>
</div>

<?php include "includes/footer.php"; ?>