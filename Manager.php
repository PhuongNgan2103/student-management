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

    public function read($index)
    {
        return self::$students[$index];
    }

    public function delete($index)
    {
        array_splice(self::$students,$index,1);
    }

    public function sortAZ()
    {
        sort(self::$students);
    }

    public function sortZA()
    {
        rsort(self::$students);
    }
}