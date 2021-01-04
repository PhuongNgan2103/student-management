<?php
class Manager{
    const FILE_DATA_NAME = 'data.json';
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

    public function search()
    {

    }

    public function saveData()
    {
        $data = [];
        foreach (self::$students as $student){
            $data = $student->toArray();
        }
        $dataJson = json_encode($data);
        file_put_contents(self::FILE_DATA_NAME,$dataJson);
    }


    public function arrayToStudent($array)
    {
        return new Student($array[0], $array[1], $array[2], $array[3], $array[4], $array[5]);
    }

}