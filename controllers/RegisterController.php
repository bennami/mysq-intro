<?php


class RegisterController
{
    public function render(){
        $register = new Register();


            $register->registerUser();


        require 'View/register.php';
}
}