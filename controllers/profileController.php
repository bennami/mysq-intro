<?php


class profileController
{


    public function render(){
        $loginCheck =new login;
        $check = $loginCheck->checkLogin();
        if($check ==false){
            $loginCheck->loginForm();
        }else{
            $testObj = new getData();
            $user = $testObj->getProfile();
        }
        require 'View/profile.php';
    }

}