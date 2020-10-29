<?php

// To do: Check if the filled in email can be found on a user with that credential
// Needs to be added in Connection

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