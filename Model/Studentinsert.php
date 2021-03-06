<?php


class Studentinsert extends Database
{
    public function __construct($firstname, $lastname, $email)
    {
        $handle = $this->openConnection()->prepare('INSERT INTO student (first_name, last_name, email) VALUES (:firstname, :lastname, :email)');
        $handle->bindValue(':firstname', $firstname);
        $handle->bindValue(':lastname', $lastname);
        $handle->bindValue(':email', $email);
        $handle->execute();
        //echo $message = 'Your record has been added';
    }
}