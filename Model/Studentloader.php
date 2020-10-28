<?php


class Studentloader extends Database
{
    private array $students = [];

    public function __construct()

    {
        //$connection = new Database($pdo);
        //$handle = $connection->openConnection();

        $handle = $this->openConnection()->prepare("SELECT * FROM student"); // select all from database student
        $handle->execute();

        //$handle fetch already array
        foreach ($handle->fetchAll() as $student) {
        array_push($this->students, new Student($student['first_name'], $student['last_name'], $student['email'], $student['id']));

        //$student['id'] = new Student ($student['first_name'], $student['last_name'], $student['email'], $student['id']);

            //make sure the order is the same as the properties - as indicated in student!!
        }
    }

    public function getStudents(): array
    {
        return $this->students;
    }

}
