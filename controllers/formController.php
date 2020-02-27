<?php


class formController {

    public function render(){

        //connect
        $connection = new connection();
        $connection->connect();

        //create object from getData and run method that gets me the profile of selected user
        $testObj = new getData();

        if(isset($_POST['submitForm'])){
            $testObj->insert($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author'],$_POST['created_at']);
        }

        require 'View/form.php';

    }

}
