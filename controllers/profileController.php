<?php


class profileController
{
    public function render(){
        $connection = new connection();
        $connection->connect();
        $testObj = new getData();
        //$data = $testObj->getInfoPrepared();
        $user = $testObj->getProfile();
        require 'View/profile.php';

    }

}