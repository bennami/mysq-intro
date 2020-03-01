<?php

class IntroTableController {

    public function render(){

        //if login key is set, enter intro table
        if($_SESSION['loginKey'] == true){
            //get intro page
            $testObj = new getData();
            $data = $testObj->getInfoPrepared();
        }
        //if you submit for to enter a user and you are logged in, insert user in db and go back to intro table with success alert.
        if($_SESSION['loginKey'] == true && isset($_GET['submitForm']) && $_GET['submitForm'] == 'form' ){

         $insertUser = new getData();
         $insertUser->insert($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author'],$_POST['created_at']);

        }
        //if you are not logged in for some reason, go to log in page and alert error message
        else{
            require 'View/introTable.php';
            login::error();
        }
        require 'View/introTable.php';
    }

}