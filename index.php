<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'classes/connection.php';
require 'classes/getData.php';
require 'classes/register.php';
require 'classes/login.php';
require 'classes/logOut.php';

require 'controllers/formController.php';
require 'controllers/introTableController.php';
require 'controllers/profileController.php';
require 'controllers/RegisterController.php';
require 'controllers/loginController.php';

session_start();
//var_dump($_SESSION);


//page navigation, should change this into a switch case
if( isset($_GET['addStudent']) && $_GET['addStudent'] == 'addStudent'){
    $controller = new  formController();

}elseif(isset($_POST['submitLogin']) || isset($_GET['submitForm']) && $_GET['submitForm'] == 'form' ||isset($_SESSION['loginKey']) && $_SESSION['loginKey'] == true){
    $controller = new introTableController();
}
elseif(isset($_GET['id'])){
    $controller = new profileController();
}elseif(isset($_POST['submitRegister'] )){
    $controller  = new RegisterController();
}elseif (isset($_GET['reg'])){
    $controller  = new RegisterController();
}
elseif(isset($_GET['login']) && $_GET['login'] == 'login' || isset($_SESSION['loginKey']) && $_SESSION['loginKey'] == false ) {
    $controller = new loginController();
}elseif (isset($_GET['logout'])){
    logOut::destroySession();
    $controller = new loginController();

}


else{
    $controller = new loginController();
}
$controller->render();


