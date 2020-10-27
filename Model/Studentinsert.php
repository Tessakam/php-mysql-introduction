<?php


class Studentinsert extends Database
{
    public function __construct()
    {
        $connection = new Database();
        $handle = $connection->openConnection($dbuser, $dbpass);

        $handle = $handle->prepare("INSERT * FROM student");

        foreach ($handle->fetchAll() as $student) {
            $this->student[$student['id']] = new $student ($student['firstname'], $student['lastname'], $student['email']);
        }
    }
}