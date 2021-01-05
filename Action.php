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

        switch ($action){
            case 'create':
                $student = new Student($oder,$fullName,$dateOfBirth,$gender,$homeTown,$action);
                $manager->add($student);
                unset($student);
                break;
            case 'update':

                break;
            case 'delete':
                $index = $_POST['index'];
                $manager->delete($index);
                break;
        }
        header('location: index.php');
}