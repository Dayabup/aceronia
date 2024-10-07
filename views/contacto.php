<?php
require_once "../templates/headersec.php"

?>
<main class="container mt-2 p-3">
  <h1 class="playfair">Contacta con nosotros</h1>
  <h5>Te responderemos lo antes posible.</h5>
  <br>
  <form>
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Ingrese su email" required>
    </div>
    <div class="form-group">
      <label for="asunto">Asunto</label>
      <input type="text" class="form-control" id="asunto" placeholder="Ingrese el asunto" required>
    </div>
    <div class="form-group">
      <label for="mensaje">Mensaje</label>
      <textarea class="form-control" id="mensaje" rows="3" placeholder="Ingrese su mensaje" required></textarea>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="terminos" required>
      <label class="form-check-label" for="terminos">Acepto los términos y condiciones.</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
  </form>
</main>

<?php
require_once "../templates/footersec.php";
?>