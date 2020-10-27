<?php


class Studentloader extends Connection
{
    private array $students = [];

    public function __construct(array $students)
    {

        $handle = $this->openConnection()->prepare("INSERT * FROM student");
        $handle->execute();
        foreach ($handle->fetchAll() as $student) {
            $this->student[$student['id']] = new $student ($student['firstname'], $student['lastname'], $student['email']);
        }
    }

    public function getStudents(): array
    {
        return $this->Students;
    }
}