<?php
require_once "views/carrusel.php";
require_once "templates/newsinicio.php";
require_once "models/productos.modelo.php"
?>
<section>
  <article class="text-center mt-5 mb-2">
    <h1 class="playfair">outlet</h1>
    <p>Hasta 50% de descuento </p>
  </article>
  <article class="container-fluide d-flex flex-wrap justify-content-around gap-4">
    <?php
    $prueba = new Producto;
    foreach ($prueba->Outlet() as $producto) : ?>
      <div class="card col-2">
        <img src="img/pulsera-circulos-oro.webp" class="d-block w-100" alt="pendientes">
        <div class="card-body">
          <h5 class="card-title text-center" style="font-size: small;"><?= $producto->nombre ?></h5>
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