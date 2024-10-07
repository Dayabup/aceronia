<?php

// require_once "../models/productos.modelo.php";

class InicioControlador
{
  public function Inicio()
  {
    //si hay sesion iniciada que se vaya al inicio
    // if (isset($_GET['c'])) {
    // require_once "inicioprueba.php";
    require_once "templates/header.php"; //header
    require_once "views/inicio.php"; //main
    require_once "templates/footer.php"; //footer
    // } else {
    //   require_once "../templates/header.php"; //header
    //   require_once "../views/inicio.php"; //main
    //   require_once "../templates/footer.php"; //footer
  }
}
//}
