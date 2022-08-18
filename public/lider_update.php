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
$tel = $_POST["tel"];

updatelider($name, $surname, $birth, $age, $dni, $sex, $tel, $id);
header("Location: lideres.php");

