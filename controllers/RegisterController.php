<?php


class RegisterController
{
    public function render(){
        $register = new Register();
        if(empty($_POST['submitRegister'])){

            $register->registerUser();

    }
        require 'View/register.php';
}
}