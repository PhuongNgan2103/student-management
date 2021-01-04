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
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="Edit.php"><button type="submit">Sửa</button></a></td>
    </tr>
</table>
</body>
</html>
<?php

