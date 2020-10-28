<?php
// Create an auth.php file and write both the login and registration logic in them

class Controllerlogin
{
    public function render(array $GET, array $POST)
    {
        // Check if email is valid. Must contain a valid email address (with @ and .)
        if (empty($_POST["email"])) {
            $email = "Username is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = "Invalid email format";
            }
        }

        // Submit login + completed
        if (isset($_POST['login']) && !empty($_POST['username'])
            && !empty($_POST['password'])) {

            if ($_POST['username'] == 'username@email.com' &&
                $_POST['password'] == '1234') {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'username@email.com';
                $successmessage = 'Sign-in successful!';

            } else {
                $errormessage = 'Wrong username or password';
            }

            if (isset ($_SESSION['valid']) && $_SESSION['valid'] == true) ;


            require 'View/register.php';
        }
    }
}