<?php
// Create an auth.php file and write both the login and registration logic in them

class Controllerlogin
{
    public function render(array $GET, array $POST)
    {
        session_start();
        $auth = new Auth();


        // Check if email is valid. Must contain a valid email address (with @ and .)
        if (empty($_POST["email"])) {
            $emailerror = "Username is required";
        } else {
            $email = ($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
            }
        }
        // Submit login + all fields completed + compare password
        if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

            $password = $_POST['password'];
            require 'includes/config.php';
            $h_password = openConnection($hashed_password);

            $checkAuth = $auth->checkPassword($password,$h_password);

            require 'View/register.php'; // insert.php
            require 'Model/Auth.php';
        }
    }
}
/*
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
 */