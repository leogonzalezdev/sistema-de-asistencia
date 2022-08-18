<?php

////////////////// CONEXION A LA BASE DE DATOS /////////////////////////////
include_once "conexion.php";
////////////////// VARIABLES DE CONSULTA////////////////////////////////////
error_reporting(0);
$where   = "";
$name    = $_POST['name'];
$surname = $_POST['surname'];
$sex = $_POST['sex'];
////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['search'])) {
	if ($name != "" && $surname == "" && $sex == "") {
		$where = "where name like '%$name%'";
	} else if ($surname != "" && $name == "" && $sex == "") {
		$where = "where surname like '%$surname%'";
	} else if ($sex != "" && $name == "" && $surname == "") {
		$where = "where sex like '%$sex%'";
	} else if ($name != "" && $sex != "" && $surname == "") {
		$where = "where name like '%$name%' and sex like '%$sex%'";
	} else if ($surname != "" && $sex != "" && $name == "") {
		$where = "where surname like '%$surname%' and sex like '%$sex%'";
	} else if ($name != "" && $surname != "" && $sex == "") {
		$where = "where name like '%$name%' and surname like '%$surname%'";
	} else if ($name != "" && $sex != "" && $surname != "") {
		$where = "where name like '%$name%' and surname like '%$surname%' and 		sex like '%$sex%'";
	}
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$employees = "SELECT * FROM employees $where ORDER BY surname ASC";

$resEmployees = $mysqli->query($employees);
if (mysqli_num_rows($resEmployees) == 0) {
	$mensaje = "<h1>No hay registros que coincidan con su criterio de búsqueda.		</h1>";
}

?>

<div class="container-fluid">
	<div class="row">
		<div class="card text-light text-center mb-4" style="background: #11101d;">
			<div class="card-header text-center col-md-12 mb-0">
				<h2 class="display-3">Base de Datos</h2>
			</div>
			<div class="card-body">
				<form class="row gy-2 gx-3 align-items-center mb-2" method="POST">
					<h4 class="fw-normal">FILTRO DE BUSQUEDA</h4>
					<div class="col-md-3">
						<label class="visually-hidden" for="autoSizingInput">Nombre</label>
						<input class="form-control" id="autoSizingInput" type="search" placeholder="Nombre" name="name">
					</div>
					<div class="col-md-3">
						<label class="visually-hidden" for="autoSizingInput">Apellido</label>
						<input class="form-control" id="autoSizingInput" type="search" placeholder="Apellido" name="surname">
					</div>
					<div class="col-md-2">
						<label class="visually-hidden" for="autoSizingInput">Sexo</label>
						<select class="form-select" id="autoSizingSelect" name="sex">
							<option value="" selected>Sexo</option>
							<option value="F">F</option>
							<option value="M">M</option>
						</select>
					</div>
					<div class="col-md-2 ml-0">
						<button name="search" type="submit" class="btn btn-outline-success w-75">Buscar <i class="fa fa-search"></i></button>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Añadir Empleado <i class='bx bxs-user-plus' ></i>
						</button>
					</div>
				</form>
				<div class="table-responsive col-md-12">
					<table class="table table-responsive-sm text-light" style="margin-bottom:35px; background:#1b1c26;border-radius:10px;">
						<tr>
							<th>Id</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Nacimiento</th>
							<th>Edad</th>
							<th>DNI</th>
							<th>Sexo</th>
							<th>Tel</th>
							<th>Editar</th>
							<th>Borrar</th>
						</tr>
						<?php
						while ($registroemployees = $resEmployees->fetch_array(MYSQLI_BOTH)) {

							echo '<tr>
										<td>' . $registroemployees['id'] . '</td>
										<td>' . $registroemployees['surname'] . '</td>
										<td>' . $registroemployees['name'] . '</td>
						<td>' . $registroemployees['birth'] . '</td>
						<td>' . $registroemployees['age'] . '</td>
						<td>' . $registroemployees['dni'] . '</td>
						<td>' . $registroemployees['sex'] . '</td>
						<td>' . $registroemployees['wsp'] . '</td>
						<td>
							<a class="btn btn-warning"  href="employee_edit.php?id=' . $registroemployees["id"] . '" >
								Modificar <i class="fa fa-edit"></i>
							</a>
						</td>
						<td>
							<a class="btn btn-danger" href="employee_delete.php?id=' . $registroemployees["id"] . '">
								Eliminar <i class="fa fa-trash"></i>
							</a>
						</tr>';
						}
						?>

					</table>
				</div>
				<?php
				echo $mensaje;
				?>
			</div>
		</div>
	</div>
</div>

<!-- AÑADIR empleado -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="employee_save.php" method="POST">
				<div class="modal-header text-light" style="background-color:#1b1c26;">
					<h5 class="modal-title" id="staticBackdropLabel">Añadir empleado</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body bg-light text-dark">
					<?php
					include_once "header.php";
					include_once "nav.php";
					include_once "conexion.php";
					$esp = " ";
					// $sql = "SELECT * FROM lideres";
					// $lider = mysqli_query($mysqli, $sql) or die("Problemas en el select:" . mysqli_error($conexion));
					?>
					<div class="row">

						<div class="col-12">

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
								<input name="age" placeholder="Edad" type="number" id="age" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="dni">DNI</label>
								<input name="dni" placeholder="DNI" type="number" id="dni" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="sex">Sexo</label>
								<select class="form-control" name="sex" id="sex">
									<option value="F">F</option>
									<option value="M">M</option>
								</select>
							</div>
							<div class="form-group">
								<label for="wsp">Telefono</label>
								<input name="wsp" placeholder="Telefono" type="number" id="wsp" class="form-control" required>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer" style="background-color:#1b1c26;">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
						Cancelar <i class='bx bx-x' ></i>
					</button>
					<button class="btn btn-success">
						Guardar <i class="fa fa-save"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- EDITAR Empleado -->

<div class="modal fade" id="staticEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="employee_save.php" method="POST">
				<div class="modal-header text-light" style="background-color:#353f5e;">
					<h5 class="modal-title" id="staticBackdropLabel">EDITAR PRECURSOR</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body bg-dark text-light">
					<?php
						include_once "employee_edit.php";
					?>
				</div>

				<div class="modal-footer" style="background-color:#353f5e;">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button class="btn btn-success">
						Save <i class="fa fa-check"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>