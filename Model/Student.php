<?php


class Student extends Database
{
    private string $firstname;
    private string $lastname;
    private string $email;

    public function __construct(string $firstname, string $lastname, string $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;

    }
}