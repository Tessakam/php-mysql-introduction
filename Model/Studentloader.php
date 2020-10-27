<?php


class Studentloader extends Database
{
    private array $students = [];

    public function __construct(array $students)

    {
        //$connection = new Database($pdo);
        //$handle = $connection->openConnection();

        $handle = $this->Connection()->prepare("INSERT * FROM student");
        $handle->execute();
        foreach ($handle->fetchAll() as $student) {
        $this->student[$student['id']] = new $student ($student['firstname'], $student['lastname'], $student['email']);
        }

        $allStudents = new Studentloader($students);
        return $allStudents;
        //var_dump($allStudents);

    }

    public function getStudents(): array
    {
        return $this->students;
    }

}
