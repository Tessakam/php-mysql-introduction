<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'connection.php';
require 'insert.php;


$controller = new HomepageController();

//$controller =new LoginController();
//if(isset($_SESSION['valid']) && $_SESSION['valid'] === true) {
//  $controller = new HomepageController();
//}


Loads the view - Allows templating and then sending an array of data into the view.
$controller->render($_GET, $_POST);