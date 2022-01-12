<?php
include_once 'Employee.php';
include_once "Data.php";

$data = new Data();
$arrs = $data->loadData();
//print_r($arrs);
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
<table border="1px" cellpadding="5px" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Day Of Birth</th>
        <th>Addrees</th>
        <th>Position</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($arrs as $key => $arr): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $arr->name; ?></td>
            <td><?php echo $arr->day; ?></td>
            <td><?php echo $arr->addrees; ?></td>
            <td><?php echo $arr->position; ?></td>
            <td><a href="delete.php?id=<?php echo $key ?>">Delete</a></td>
            <!--            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=-->
            <?php //echo $key ?><!--">Delete</a>-->
            <!--            </td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="add.php">Quay lại trang</a>
</body>
</html>