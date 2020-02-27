<?php


class profileController
{
    public function render(){
        $testObj = new getData();
        $user = $testObj->getProfile();
        require 'View/profile.php';
    }

}