<?php


class Student
{
    private string $firstname;
    private string $lastname;
    private string $email;
    private int $id;
    private $created_at;

    public function __construct(string $firstname, string $lastname, string $email, int $id)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->id = $id;
    }


    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }


}