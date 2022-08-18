<?php
include_once "header.php";
include_once "nav.php";
include_once "conexion.php";
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">AÑADIR LIDER</h1>
    </div>
    <div class="col-12">
        <form action="lider_save.php" method="POST">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input name="name" placeholder="Nombre" type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="surname">Apellido</label>
                <input name="surname" placeholder="Apellido" type="text" id="surname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="birth">Nacimiento</label>
                <input name="birth" placeholder="Nacimiento" type="date" id="birth" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input name="age" placeholder="Edad" type="number" id="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="dni">D.N.I.</label>
                <input name="dni" placeholder="D.N.I." type="number" id="dni" class="form-control">
            </div>
            <div class="form-group">
                <label for="sex">Sexo</label>
                <select class="form-control" name="sex" id="sex">
                    <option value="-">-</option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tel">Teléfono</label>
                <input name="tel" placeholder="Teléfono" type="number" id="tel" class="form-control">
            </div>
            <div class="form-group mb-5">
                <button class="btn btn-success">
                    Save <i class="fa fa-check"></i>
                </button>
                <button type="reset" class="btn btn-danger">
                    Reset <i class="fa fa-repeat" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<?php
include_once "footer.php";
