<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'classes/connection.php';
require 'classes/getData.php';
require 'controllers/homepageController.php';
$controller = new Controller();
$controller->render();
//print_r(PDO::getAvailableDrivers());










?>


