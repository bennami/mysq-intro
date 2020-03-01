<?php


class RegisterController
{
    public function render()
    {
            $register = new Register();
            if (isset($_POST['submitRegister'])) {
            $register->validateReg();
            $register->connect();
            }
        require 'View/register.php';
    }
}



