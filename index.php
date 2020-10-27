<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//Folder Model
require "Model/Connection.php";
require "Model/Student.php";
require "Model/Studentloader.php";
require "Model/Studentinsert.php";

//Folder View
require "View/insert.php";

//Folder Controller
require "Controller/Controller.php";

//Config file for database login
require "includes/config.php";

$controller = new Controller();
$controller->render($_GET, $_POST);