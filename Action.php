<?php
include_once "Manager.php";
include_once "Student.php";

$manager = new Manager();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $oder = $_POST['oder'];
    $fullName = $_POST['fullName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    $homeTown = $_POST['homeTown'];
    $action = $_POST['action'];


}