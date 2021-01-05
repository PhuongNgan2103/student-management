<?php
include_once "Student.php";
include_once "Manager.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
<table>
    <caption id="caption"><h1>Danh sách sinh viên</h1></caption>

        <form method="post">
        Tìm kiếm:<input type="text" name="tìm kiếm sinh viên" placeholder="Tìm kiếm sinh viên" id="search">
            <button type="submit" id="button_search">search</button>
        </form>
    <caption><a href="Add.php"><button id="button_add">Thêm</button></a></caption>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Quê quán</th>
        <th>Hành động</th>
    </tr>
<?php if (Manager::$students == null):?>
    <tr>
        <td colspan="7" style="text-align: center"><h3><i>Không có dữ liệu</i></h3></td>
    </tr>
<?php else:?>
    <?php foreach (Manager::$students as $key=>$student):?>
        <tr>
            <td><?php echo $key?></td>
            <td><?php echo $student->getOder()?></td>
            <td><?php echo $student->getFullName()?></td>
            <td><?php echo $student->getDateOfBirth()?></td>
            <td><?php echo $student->getGender()?></td>
            <td><?php echo $student->getHomTOwn()?></td>
            <td><?php echo $student->getAction()?></td>
            <td>
                <form action="Edit.php" method="post" style="display: inline">
                    <input type="text" name="action" value="edit" hidden="hidden">
                    <input type="text" name="index" value="<?php echo $key?>" hidden="hidden">
                    <button type="submit">Sửa</button>
                </form>

            </td>
        </tr>
    <?php endforeach;?>
<?php endif;?>
</table>
</body>
</html>
<?php

