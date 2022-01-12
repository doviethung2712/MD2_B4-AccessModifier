<?php
include_once 'Employee.php';
include_once 'Data.php';
$data = new Data();
if(isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $arr = $data->getEmployeeById($id);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" value="<?php echo $arr->getName();?>">
    <input type="date" name="day" value="<?php echo $arr->getDay();?>">
    <input type="text" name="addrees" value="<?php echo $arr->getAddrees();?>">
    <input type="text" name="position" value="<?php echo $arr->getPosition();?>">
    <button>ADD</button>
</form>


</body>
</html>
<?php
include_once 'Employee.php';
include_once "Data.php";
$data = new Data();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['name'];
    $day = $_REQUEST['day'];
    $addrees = $_REQUEST['addrees'];
    $position = $_REQUEST['position'];
    $employee = new Employee($name, $day, $addrees, $position);
    $data->updateEmloyee($id,$employee);
    header("Location:index.php");

}