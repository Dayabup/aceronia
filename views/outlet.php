<?php
require_once "../templates/headersec.php";
?>

<section class="container p-2">
  <article class="m-4">
    <h1 class="playfair">OUTLET</h1>
    <p>Ofertas hasta 50%</p>
  </article>
  <article class="container-fluide d-flex flex-wrap justify-content-around gap-4">
    <?php
    $prueba = new Producto;
    foreach ($prueba->Outlet() as $producto) : ?>
      <div class="card col-2">
        <img src="../img/pulsera-circulos-oro.webp" class="d-block w-100" alt="pendientes">
        <div class="card-body">
          <h5 class="card-title text-center"><?= $producto->nombre ?></h5>
          <br>
          <p class="card-text text-center"><?= $producto->precio ?>
          </p>
          <p class="text-center">
            <a href="#" class="btn">Ver más</a>
          </p>
        </div>
      </div>
    <?php endforeach; ?>
  </article>

</section>
<?php
require_once "../templates/footersec.php"; ?>