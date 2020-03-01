<?php


class loginController
{
    public function render(){


            $login = new login();

            require 'View/login.php';

    }
}