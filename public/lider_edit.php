<?php
if (!isset($_REQUEST["id"])) exit("No id provided");
$id = $_REQUEST["id"];
include_once "header.php";
include_once "nav.php";
include_once "conexion.php";
include_once "functions.php";
$dirigente = getliderById($id);
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">EDITAR DIRIGENTE</h1>
    </div>
    <div class="col-12">
        <form action="lider_update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dirigente->id ?>">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input value="<?php echo $dirigente->name ?>" name="name" placeholder="Name" type="text" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="surname">Apellido</label>
                <input value="<?php echo $dirigente->surname ?>" name="surname" placeholder="Apellido" type="text" id="surname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="birth">Nacimiento</label>
                <input value="<?php echo $dirigente->birth ?>" name="birth" placeholder="Nacimiento" type="date" id="birth" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input value="<?php echo $dirigente->age ?>" name="age" placeholder="Edad" type="number" id="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input value="<?php echo $dirigente->dni ?>" name="dni" placeholder="DNI" type="number" id="dni" class="form-control">
            </div>
            <div class="form-group">
                <label for="sex">Sexo</label>
                <select class="form-control" name="sex" id="sex">
                    <option value="<?php echo $dirigente->sex ?>" selected><?php echo $dirigente->sex ?></option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tel">Telefono</label>
                <input value="<?php echo $dirigente->tel ?>" name="tel" placeholder="Telefono" type="number" id="tel" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success mb-5">
                    Save <i class="fa fa-check"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<?php
include_once "footer.php";
