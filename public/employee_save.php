<?php
include_once "conexion.php";
$name = $_POST["name"];
$surname = $_POST["surname"];
$birth = $_POST["birth"];
$age = $_POST["age"];
$dni = $_POST["dni"];
$sex = $_POST["sex"];
$wsp = $_POST["wsp"];

$sql = "INSERT INTO employees(name, surname, birth, age, dni, sex, wsp) VALUES ('$name', '$surname','$birth', '$age', '$dni', '$sex', '$wsp')";
$res = $mysqli->query($sql) or die ("Error al cargar los datos");
mysqli_close($mysqli);

header("Location: employees.php");
