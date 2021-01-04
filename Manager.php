<?php
class Manager{
    public static $students = [];

    public function add($student)
    {
        self::$students = $student;
    }

    public function update($index,$data)
    {
        self::$students[$index] = $data;
    }

    public function read()
    {

    }
}