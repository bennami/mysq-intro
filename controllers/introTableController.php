<?php

class IntroTableController {

    public function render(){
        $connection = new connection();
        $connection->connect();
        $testObj = new getData();
        $data = $testObj->getInfoPrepared();
        require 'View/introTable.php';

    }

}