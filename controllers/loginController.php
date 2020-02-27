<?php


class loginController
{
    public function render(){


            $register = new login();
            $register->loginForm();
            require 'View/login.php';

    }
}