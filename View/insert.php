<?php

declare(strict_types=1);

class Student
{
    private string $firstname, $lastname, $email;

    public function render(array $GET, array $POST)
    {
        require 'includes/config.php'; //user and password of database
        require 'Model/connection.php';
    }

    public function __construct(string $firstname, string $lastname, string $email)
    {

        $connection = new Connection();
        $handle = $connection->openConnection($dbuser, $dbpass);
        $handle->getPdo();

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;


        $handle = $handle->prepare('INSERT INTO student(first_name, last_name, email) VALUES (:first_name, :last_name, :email)');

        $handle->bindValue(':firstname', $firstname);
        $handle->bindValue(':lastname', $lastname);
        $handle->bindValue(':email', $email);
        $handle->execute();
    }


    /*if (isset($_POST['submit'])) {

        if (!empty($_POST['id']) && !empty($_POST['firstName']) && !empty($_POST['lastname'] && !empty($_POST['email']))) {

            $message = 'Your record has been added';
        } else {
            echo "Error: your record has not been added";
        }*/


    public function addRecord($pdo)
    {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
    }


}




//Loads database into insert.php
//$connection->render($_GET, $_POST);
