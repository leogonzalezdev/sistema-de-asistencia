<?php
session_start();
if (!isset($_REQUEST["id"])) exit("No id provided");
include_once "header.php";
include_once "nav.php";
$id = $_REQUEST["id"];
include_once "functions.php";
include_once "conexion.php";
$employee = getEmployeeById($id);
?>
<div class="container-fluid">
    <div class="card text-light" style="background: #11101d;">
        <div class="card-header text-center">
            <h1 class="display-6">Editar registro</h1>
            <span><?php echo $employee->name, ' ', $employee->surname; ?></span>
        </div>
        <form action="employee_update.php" method="POST">
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $employee->id ?>">
                    <div class="form-group col-md-4 mb-2">
                        <label for="name">Nombre</label>
                        <input value="<?php echo $employee->name ?>" name="name" placeholder="Name" type="text" id="name" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 mb-2">
                        <label for="surname">Apellido</label>
                        <input value="<?php echo $employee->surname ?>" name="surname" placeholder="Apellido" type="text" id="surname" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4 mb-2">
                        <label for="birth">Nacimiento</label>
                        <input value="<?php echo $employee->birth ?>" name="birth" placeholder="Nacimiento" type="date" id="birth" class="form-control" required>
                    </div>

                    <div class="form-group col-md-2  mb-2">
                        <label for="age">Edad</label>
                        <input value="<?php echo $employee->age ?>" name="age" placeholder="Edad" type="number" id="age" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4 mb-2">
                        <label for="dni">DNI</label>
                        <input value="<?php echo $employee->dni ?>" name="dni" placeholder="DNI" type="number" id="dni" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2 mb-2">
                        <label for="sex">Sexo</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="<?php echo $employee->sex ?>" selected><?php echo $employee->sex ?></option>
                            <option value="F">F</option>
                            <option value="M">M</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 mb-2">
                        <label for="wsp">Telefono</label>
                        <input value="<?php echo $employee->wsp ?>" name="wsp" placeholder="Whatsapp" type="number" id="wsp" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="card-footer mb-3">
                <div class="form-group">
                    
                    <button class="btn btn-success m-1">
                        Guardar <i class="fa fa-check"></i>
                    </button>
                    <button type="reset" class="btn btn-danger m-1">
                        Restablecer <i class='bx bx-reset'></i>
                    </button>                  
                </div>
            </div>
        </form>
    </div>
<?php
include_once "footer.php";
