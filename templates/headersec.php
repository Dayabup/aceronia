<?php
require_once "../models/productos.modelo.php"
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aceronia</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Bebas+Neue&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../img/letter-a.png" type="image/x-icon">
</head>

<body>
  <header>
    <section class="d-flex flex-row justify-content-center bg-dark pt-3">
      <p class="text-light"> -10% de descuento en el primer pedido</p>
    </section>
    <section class="navbar navbar-expand-lg border-0" data-bs-theme="light">
      <section class="mx-3">
        <a class="text-dark" style="font-size:smaller;" href="#">Iniciar sesión</a>
      </section>
      <section class="container-fluid justify-content-around">
        <a class="navbar-brand playfair" href="/Aceronia/index.php">ACERONIA</a>
      </section>
      <form class="d-flex">
        <input class="form-control me-0" type="search" placeholder="Buscar">
        <button class="btn my-0" type="submit"><span class="material-symbols-outlined">
            search
          </span></button>
      </form>
    </section>
    <article class="navbar navbar-expand-lg d-flex justify-content-center border-0">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/novedades.php">Novedades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/bestseller.php">Best Seller</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/pendientes.php">Pendientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/collares.php">Collares</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/pulseras.php">Pulseras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/anillos.php">Anillos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/piercings.php">Piercing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/outlet.php">Outlet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Otros</a>
            </li>
          </ul>
        </div>
      </div>
    </article>
  </header>