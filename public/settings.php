<?php
session_start();
include "header.php";
include "nav.php";
?>
<div class="container">
  <form class="row">
    <h3 class="fs-4 text-center">Ajustes del sistema</h3>
    <div class="form-group col-md-4">
      <label for="">Tema</label>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="darkmode">
        <label class="form-check-label" for="darkmode">Dark mode</label>
      </div>
    </div>
    <div class="form-group col-md-4 mt-2">
      <label for="isioma" class="form-label">Cambiar Idioma</label>
      <select id="idioma" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Spanish</option>
        <option value="1">English</option>
      </select>
    </div>
    <div class="row">
      <button class="btn btn-primary mt-3 col-md-4 mx-auto" type="submit">
        Aplicar cambios <i class='bx bxs-adjust-alt'></i>
      </button>

    </div>
  </form>
</div>