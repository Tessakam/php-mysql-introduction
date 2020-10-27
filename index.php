<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//Folder Model
require_once "Model/Connection.php";
require_once "Model/Student.php";
require_once "Model/Studentloader.php";

//Folder View
require_once "View/insert.php";

//Folder Controller
require_once "Controller/Controller.php";

$controller = new Controller();
$controller->render($_GET, $_POST);