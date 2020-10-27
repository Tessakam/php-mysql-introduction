<?php


class Studentloader extends Database
{
    private array $students = [];

    public function __construct(array $students)
    {
        $connection = new Database();
        $handle = $connection->openConnection($dbuser, $dbpass);

        $handle = $handle->prepare("INSERT INTO student (first_name, last_name, email) VALUES (:firstname, :lastname, :email)");
        $handle->bindValue(':firstname', $_POST['firstname']);
        $handle->bindValue(':lastname', $_POST['lastname']);
        $handle->bindValue(':email', $_POST['email']);
        $handle->execute();
    }

    public function getStudents(): array
    {
        return $this->students;
    }
}
