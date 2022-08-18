<?php
include_once "conexion.php";
$name = $_POST["name"];
$surname = $_POST["surname"];
$birth = $_POST["birth"];
$age = $_POST["age"];
$dni = $_POST["dni"];
$sex = $_POST["sex"];
$tel = $_POST["tel"];

$sql = "INSERT INTO lideres(name, surname, birth, age, dni, sex, tel) VALUES ('$name', '$surname', '$birth', '$age', '$dni', '$sex', '$tel')";
$res = $mysqli->query($sql) or die ("Error al cargar los datos");
mysqli_close($mysqli);

header("Location: lideres.php");
