<?php

declare(strict_types=1);

class Connection
{
    public function render(array $GET, array $POST)
    {
        require 'includes/config.php'; //user and password of database
        $pdo = openConnection($dbuser, $dbpass); //connects with database

        session_start();

        if (!isset($_SESSION["id"])) {
            $_SESSION["id"] = "";
        }
        if (!isset($_SESSION["firstname"])) {
            $_SESSION["firstname"] = "";
        }
    }
}

class addData
{
    public function __construct($pdo)
    {
        if (isset($_POST['submit'])) {

            if (!empty($_POST['id']) && !empty($_POST['firstName']) && !empty($_POST['lastname'] && !empty($_POST['email']))) {
                $handle = $pdo->prepare('INSERT INTO student(id, first_name, last_name, email) VALUES (:id, :first_name, :last_name, :email, :date)');
                $message = 'Your record has been added';
            }

            $handle->bindValue(':id', $_POST['id']);
            $handle->bindValue(':firstname', $_POST['firstname']);
            $handle->bindValue(':lastname', $_POST['lastname']);
            $handle->bindValue(':email', $_POST['email']);
            //$handle->bindValue(':date', date('Y'));
            $handle->execute();
        }
    }
}

$connection = new Connection();

//Loads database into insert.php
$connection->render($_GET, $_POST);

// session_start();