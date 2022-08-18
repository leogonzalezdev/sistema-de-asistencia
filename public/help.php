<?php session_start();

if (isset($_SESSION['usuario'])) {
  include_once "header.php";
  include_once "nav.php";
} else {
  header('location: ../login.php');
}
?>
<h3 class="fs-4 text-center mt-2">Contacto con Soporte IT</h3>
<form method="POST" class="container-fluid g-3 my-3">
  <div class="row">
    <div class="form-group col-md-4 mb-3">
      <label for="user" class="form-label">Usuario</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="user">@</span>
        <input value="<?php echo $_SESSION['usuario']; ?>" type="text" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" readonly>
      </div>
    </div>
    <div class="form-group col-md-4 mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="form-group col-md-4 mb-3">
      <label for="cargo" class="form-label">Seleccione su cargo en la empresa</label>
      <select id="cargo" class="form-select" aria-label="Cargo en la empresa">
        <option selected>Administrador</option>
        <option value="1">Gerente</option>
        <option value="2">Secretario</option>
        <option value="3">Asesor</option>
      </select>
    </div>
    <div class="form-group col-md-12 mb-3">
      <label for="" class="form-label">Comentarios</label>
      <div class="form-floating">
        <textarea class="form-control" style="height: 100px;min-height:70px; max-height:200px;" placeholder="Comentanos tu duda" id="comentarios"></textarea>
        <label for="comentarios">Contanos sobre el inconveniente</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary col-md-4 mx-auto">
       Enviar comentarios <i class='bx bx-mail-send' ></i>
    </button>
  </div>
  </div>
</form>