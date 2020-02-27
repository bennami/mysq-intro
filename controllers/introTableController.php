<?php

class IntroTableController {

    public function render(){
        $testObj = new getData();
        $data = $testObj->getInfoPrepared();
        require 'View/introTable.php';
    }

}