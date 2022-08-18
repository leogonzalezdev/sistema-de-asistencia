<?php
if (!isset($_POST["name"]) || !isset($_POST["id"])) {
    exit("No data provided");
}
include_once "functions.php";

$id = $_POST["id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$birth = $_POST["birth"];
$age = $_POST["age"];
$dni = $_POST["dni"];
$sex = $_POST["sex"];
$wsp = $_POST["wsp"];

updateEmployee($name, $surname, $birth, $age, $dni, $sex, $wsp, $id);
header("Location: employees.php");

