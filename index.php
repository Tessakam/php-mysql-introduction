<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

//Folder Model
require "Model/Connection.php";
require "Model/Student.php";
require "Model/Studentloader.php";
require "Model/Studentinsert.php";
require "Auth";

//Folder Controller
require "Controller/Controllerlogin.php";

if(isset($_GET['page'])){ // http://mysqlintroduction.local/?page=table
    require "Controller/Controllertable.php";
    $controller = new Controllertable();
} else{
    require "Controller/Controller.php";
    $controller = new Controller(); // link with Controller.php = new record
}

$controller->render($_GET, $_POST);

//Config file for database login
//require "includes/config.php";

