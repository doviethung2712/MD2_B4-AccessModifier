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
<table border="1px" cellspacing="0" cellpadding="5px">
    <tr>
        <td>STT: <?php echo $id+1?></td>
    </tr>
    <tr>
        <td>Name: <?php echo $arr->getName()?></td>
    </tr>
    <tr>
        <td>Day: <?php echo $arr->getDay()?></td>
    </tr>
    <tr>
        <td>Địa Chỉ: <?php echo $arr->getAddrees()?></td>
    </tr>
    <tr>
        <td>Vị Trí: <?php echo $arr->getPosition()?></td>
    </tr>
</table>
<a href="index.php">Quay lại danh sách</a>
</body>
</html>
