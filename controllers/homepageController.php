<?php


class Controller{

    public function render(){
        $connection = new connection();
        $connection->connect();
        $testObj = new getData();
        $testObj->getName();
        //$testObj->getUserStmt('Daniel','smith','id','id','id','id','id','id','id','id','id');
        if($connection){
            echo 'connected'.'<br>';
        }
        if(!empty($_POST)){

            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $username = $_POST['username'];
            $github = $_POST['linkedin'];
            $email = $_POST['email'];
            $preferred_language = $_POST['preferred_language'];
            $avatar = $_POST['avatar'];
            $video = $_POST['video'];
            $quote = $_POST['quote'];
            $quote_author = $_POST['quote_author'];
            $testObj->setUserStmt($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author'],$_POST['first_name']);

        }

        require 'View/form.php';
    }

}
