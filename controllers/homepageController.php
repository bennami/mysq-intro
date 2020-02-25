<?php
require 'classes/connection.php';
require 'classes/insert.php';
$connection = new connection();
$connection->connect();
if($connection){
    echo 'connected'.'<br>';
}
if(isset($_POST['firstName'])){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $preferred_language = $_POST['preferred_language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quote_author = $_POST['quote_author'];

}
