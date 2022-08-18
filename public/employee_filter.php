<?php
include_once "partials/header.php";
include_once "partials/nav.php";
include_once "partials/filter.php";
include_once "functions.php";
///////////// VARIABLES DE LA CONEXION ///////////////
$dbhost = "localhost";
$dbname = "employees";
$dbuser = "root";
$dbpass = "";
$mysqli = mysqli_connect("localhost", "root", "", "employees") or  die("Problemas con la conexión");
//$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Problemas en la conexion");
///////////// VARIABLES DEL PROCESADOR ///////////////
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$sex = $_POST['sex'];
//include_once "conexion.php";
    $cadena='SELECT * FROM employees WHERE name ="'.$name.'" AND surname = "'.$surname.'" AND age ="'.$age.'" AND sex ="'.$sex.'" ';
    $registros = mysqli_query($mysqli, $cadena) or die("Problemas en el select:" . mysqli_error($mysqli));
$employees = getEmployees();
?>
<div class="mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">PRECURSORES</h1>
        </div>
        <div class="col-12">
            <a href="employee_add.php" class="btn btn-info mb-2">Añadir Precursor <i class="fa fa-plus"></i></a>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Lider</th>
                            <th>Nacimiento</th>
                            <th>Edad</th>
                            <th>DNI</th>
                            <th>Sexo</th>
                            <th>Wsp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($reg = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td>
                                    <?php echo $reg['name'] ?>
                                </td>
                                <td>
                                    <?php echo $reg['surname'] ?>
                                </td>
                                <td>
                                    <?php echo $reg['lider'] ?>
                                </td>
                                <td>
                                    <?php echo $reg['birth'] ?>
                                </td>
                                <td>
                                    <?php echo $reg['age'] ?>
                                </td>
                                <td>
                                    <?php echo $reg['dni'] ?>
                                </td>
                                <td>
                                    <?php echo $reg['sex'] ?>
                                </td>
                                <td>
                                    <?php echo $reg['wsp'] ?>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
mysqli_close($mysqli);
include_once "footer.php";
?>