<?php
function getEmployeesWithAttendanceCount($start, $end)
{
    $query = "select employees.name, employees.surname, 
sum(case when status = 'presence' then 1 else 0 end) as presence_count,
sum(case when status = 'absence' then 1 else 0 end) as absence_count 
 from employee_attendance
 inner join employees on employees.id = employee_attendance.employee_id
 where date >= ? and date <= ?
 group by employee_id;";
    $db = getDatabase();
    $statement = $db->prepare($query);
    $statement->execute([$start, $end]);
    return $statement->fetchAll();
}

function saveAttendanceData($date, $employees)
{
    deleteAttendanceDataByDate($date);
    $db = getDatabase();
    $db->beginTransaction();
    $statement = $db->prepare("INSERT INTO employee_attendance(employee_id, date, status) VALUES (?, ?, ?)");
    foreach ($employees as $employee) {
        $statement->execute([$employee->id, $date, $employee->status]);
    }
    $db->commit();
    return true;
}

function deleteAttendanceDataByDate($date)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM employee_attendance WHERE date = ?");
    return $statement->execute([$date]);
}
function getAttendanceDataByDate($date)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT employee_id, status FROM employee_attendance WHERE date = ?");
    $statement->execute([$date]);
    return $statement->fetchAll();
}
function updatelider($name, $surname, $birth, $age,  $dni, $sex, $tel, $id)
{
    $db = getDatabase();
    $statement = $db->prepare("UPDATE lideres SET name = ?, surname = ?, birth = ?, age = ?, dni = ?, sex = ?, tel = ? WHERE id = ?");
    return $statement->execute([$name, $surname, $birth, $age,$dni, $sex, $tel, $id]);
}

function deletelider($id)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM lideres WHERE id = ?");
    return $statement->execute([$id]);
}

function getliderById($id)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT * FROM lideres WHERE id = ?");
    $statement->execute([$id]);
    return $statement->fetchObject();
}

function deleteEmployee($id)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM employees WHERE id = ?");
    return $statement->execute([$id]);
}

function updateEmployee($name, $surname, $birth, $age, $dni, $sex, $wsp, $id)
{
    $db = getDatabase();
    $statement = $db->prepare("UPDATE employees SET name = ?, surname = ?, birth = ?, age = ?, dni = ?, sex = ?, wsp = ? WHERE id = ?");
    return $statement->execute([$name, $surname, $birth, $age, $dni, $sex, $wsp, $id]);
}
function getEmployeeById($id)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT id, name, surname, birth, age, dni, sex, wsp  FROM employees WHERE id = ?");
    $statement->execute([$id]);
    return $statement->fetchObject();
}

function saveEmployee($name, $surname, $birth, $age, $dni, $sex, $wsp)
{
    $db = getDatabase();
    $statement = $db->prepare("INSERT INTO employees(name, surname, birth, age, dni, sex, wsp) VALUES (?)");
    return $statement->execute('$name', '$surname', '$birth', '$age', '$dni', '$sex', '$wsp');
}
function getEmployees()
{
    $db = getDatabase();
    $statement = $db->query("SELECT id, name, surname, birth, age, dni, sex, wsp FROM employees ORDER BY surname ASC");
    return $statement->fetchAll();
}

function getVarFromEnvironmentVariables($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("The environment file ($file) does not exists. Please create it");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("The specified key (" . $key . ") does not exist in the environment file");
    }
}

function getDatabase()
{
    $password = getVarFromEnvironmentVariables("MYSQL_PASSWORD");
    $user = getVarFromEnvironmentVariables("MYSQL_USER");
    $dbName = getVarFromEnvironmentVariables("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
