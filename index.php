<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'controllers/homepageController.php';
require 'classes/getData.php';
print_r(PDO::getAvailableDrivers());


$testObj = new getData();
$testObj->getName();

?>


