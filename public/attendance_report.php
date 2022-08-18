<?php
session_start();
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$start = date("Y-m-d");
$end = date("Y-m-d");
if (isset($_GET["start"])) {
    $start = $_GET["start"];
}
if (isset($_GET["end"])) {
    $end = $_GET["end"];
}
$employees = getEmployeesWithAttendanceCount($start, $end);
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">VER ASISTENCIA</h1>
    </div>
    <div class="col-12">

        <form action="attendance_report.php" class="form-inline mb-2">
            <label for="start" class="text-muted">Inicio:&nbsp;</label>
            <input required id="start" type="date" name="start" value="<?php echo $start ?>" class="form-control mr-2">
            <label for="end" class="text-muted">Fin:&nbsp;</label>
            <input required id="end" type="date" name="end" value="<?php echo $end ?>" class="form-control">
            <button class="btn btn-success ml-2 mt-2">Filtrar <i class='bx bx-filter' ></i></button>
        </form>
    </div>
    <div class="col-12">
        <div class="table-responsive mb-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Presentes</th>
                        <th>Ausentes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee) { ?>
                        <tr>
                            <td>
                                <?php echo $employee->name ?>
                            </td>
                            <td>
                                <?php echo $employee->surname ?>
                            </td>
                            <td>
                                <?php echo $employee->presence_count ?>
                            </td>
                            <td>
                                <?php echo $employee->absence_count ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="mt-4 mb-4"></div>
<?php
include_once "footer.php";
