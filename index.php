<?php
require_once "templates/header.php";

?>
<main class="container-fluide m-3 d-flex row">
  <section class="mx-4 mt-5">
    <h3 class="afacad text-dark">CATEGORÍAS</h3>
  </section>
  <section class="mb-3">
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card">
            <img src="img/Pendientes-acero-inoxidable-perlas-DORADO.jpg" class="d-block w-100" alt="pendientes">
            <div class="card-body">
              <h5 class="card-title">PENDIENTES</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Ver todos</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="img/AST90B_1500x.webp" class="d-block w-100" alt="collares">
            <div class="card-body">
              <h5 class="card-title">COLLARES</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Ver todos</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="img/pikaso_texttoimage_mujer-normal-con-marcas-de-piel-de-cerca-con-pendi (2).jpeg" class="d-block w-100" alt="...">
            <div class="card-body">
              <h5 class="card-title">PULSERAS</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Ver todos</a>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="card">
            <img src="img/pikaso_texttoimage_mujer-normal-con-marcas-de-piel-de-cerca-con-pendi.jpeg" class="d-block w-100" alt="...">
            <div class="card-body">
              <h5 class="card-title">ANILLOS</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Ver todos</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="img/pikaso_texttoimage_mujer-normal-con-marcas-de-piel-de-cerca-con-pendi (1).jpeg" class="d-block w-100" alt="...">
            <div class="card-body">
              <h5 class="card-title">PIERCING</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Ver todos</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="img/pikaso_texttoimage_mujer-normal-con-marcas-de-piel-de-cerca-con-pendi (2).jpeg" class="d-block w-100" alt="...">
            <div class="card-body">
              <h5 class="card-title">OUTLET</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Ver todos</a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </section>
</main>
<?php
require_once "templates/newslettertemplate.php"

?>
<section>
  <article class="text-center mt-4">
    <h1 class="playfair">outlet</h1>
    <p>Hasta 50% de descuento </p>
  </article>
  <article class="container">
    <div class="card col-3">
      <img src="img/20240313-_DSC0083-Edit-2.webp" class="d-block w-100" alt="pendientes">
      <div class="card-body">
        <h5 class="card-title">PENDIENTES</h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Ver todos</a>
      </div>
    </div>
  </article>
</section>

<?php
require_once "templates/footer.php";

?>