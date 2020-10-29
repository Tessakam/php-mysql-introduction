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
require "Model/Auth.php";

//Folder Controller

if (isset($_GET['page'])){
    require "Controller/Controllertable.php";
    $controller = new Controllertable();
} else {
    require "Controller/Controller.php";
    $controller = new Controller(); // link with Controller.php = new record
}

// http://mysqlintroduction.local/?page=table
// To do: create seprate if statements
// 1. New student= register first
// 2. Becode stuent = login
// Add SESSION so the page doesn't go automatically to the overview

$controller->render($_GET, $_POST);

//Config file for database login
//require "includes/config.php";



