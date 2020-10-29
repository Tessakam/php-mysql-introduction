<?php


class Auth
{

    public function checkPassword($password, $hashed_password): string

    {
        if (password_verify($password, $hashed_password)) {
            echo "Password is valid!";
        } else {
            echo "Incorrect username or password. Please try again.";
        }

        require 'includes/config.php'; // store hash password
    }

}