<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'classes/connection.php';
require 'classes/getData.php';
require 'controllers/homepageController.php';
require 'controllers/introTableController.php';
require 'controllers/profileController.php';

//get variable
if(isset($_GET['page']) && $_GET['page'] == 'student'){
   $controller = new introTableController();
    $controller->render();

}elseif(isset($_GET['id'])){
    $profile =new profileController();
      $profile->render();

}else{
    $controller = new Controller();
    $controller->render();
}




//print_r(PDO::getAvailableDrivers());



?>


