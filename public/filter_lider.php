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

	$employees = "SELECT * FROM lideres $where ORDER BY surname ASC";

	$resEmployees = $mysqli->query($employees);
	if (mysqli_num_rows($resEmployees) == 0) {
		$mensaje = "<h1>No hay registros que coincidan con su criterio de búsqueda.		</h1>";
	}

?>

<div class="container-fluid mt-2">
	<div class="row">
		<div class="card bg-dark text-light text-center mb-4">
			<div class="card-header text-center col-md-12">
				<h2 class="display-3">LIDERES</h2>
			</div>
			<div class="card-body">
				<form class="row gy-2 gx-3 align-items-center mb-2" method="POST">
					<h4>FILTRO DE BUSQUEDA</h4>
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
						<button name="search" type="submit" class="btn btn-outline-success w-100">Buscar  <i class="fa fa-search"></i></button>
					</div>
					<div class="col-md-2">
						<a href="lider_add.php" class="btn btn-outline-info w-100">Añadir Lider <i class="fa fa-plus"></i></a>
					</div>
				</form>
				<div class="table-responsie col-md-12">
					<table class="table table-responsive-sm bg-dark text-light" style="margin-bottom:35px;">
					<tr>
					<th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nacimiento</th>
                    <th>Edad</th>
                    <th>DNI</th>
                    <th>Sexo</th>
                    <th>Tel</th>
                    <th>Editar</th>
                    <th>Borrar</th>
				</tr>
				<?php
				while ($registroemployees = $resEmployees->fetch_array(MYSQLI_BOTH))
				{

					echo'<tr>
						<td>'.$registroemployees['id'].'</td>
						<td>'.$registroemployees['name'].'</td>
						<td>'.$registroemployees['surname'].'</td>
						<td>'.$registroemployees['birth'].'</td>
						<td>'.$registroemployees['age'].'</td>
						<td>'.$registroemployees['dni'].'</td>
						<td>'.$registroemployees['sex'].'</td>
						<td>'.$registroemployees['tel'].'</td>
						<td>
							<a class="btn btn-warning" href="lider_edit.php?id='.$registroemployees["id"].'">
								Modificar <i class="fa fa-edit"></i>
							</a>
						</td>
						<td>
							<a class="btn btn-danger" href="lider_delete.php?id='.$registroemployees["id"].'">
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