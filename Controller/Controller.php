<?php


class Controller
{
    public function render(array $GET, array $POS)
    {
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];

            $students = new Studentinsert ($firstname, $lastname, $email);
            return $students;
        }
        echo $message = 'Your record has been added';
    }
}