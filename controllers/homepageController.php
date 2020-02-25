<?php


class Controller{

    public function render(){
        $connection = new connection();
        $connection->connect();
        $testObj = new getData();
        //$testObj->getInfo();
        $data = $testObj->getInfoPrepared();

        //check if theres a connection to db
        if($connection){
            echo 'connected'.'<br>';
        }


        if(!empty($_POST)){
            $testObj->setUserStmt($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['linkedin'],$_POST['github'],$_POST['email'],$_POST['preferred_language'],$_POST['avatar'],$_POST['video'],$_POST['quote'],$_POST['quote_author'],$_POST['created_at']);

        }

        require 'View/form.php';
    }

}
