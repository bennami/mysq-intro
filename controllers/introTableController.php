<?php

class IntroTableController {

    public function render(){

        //if you submit for to enter a user and you are logged in, insert user in db and go back to intro table with success alert.
        if($_SESSION['loginKey'] == true || isset($_GET['submitForm']) && $_GET['submitForm'] == 'form' ){
         //insert new student in database and get data for intro table
         $insertUser = new getData();
         if(!empty($_POST['first_name'])){
             $insertUser->insert($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author'],$_POST['created_at']);
         }
         $data = $insertUser->getInfoPrepared();
        }
        //if you are not properly logged in, go back to login page with error alert
        else{
            require 'View/login.php';
            login::error();
        }
        require 'View/introTable.php';
    }

}