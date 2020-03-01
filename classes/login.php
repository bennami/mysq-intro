<?php


class login extends getData
{
    public function loginForm(){
        if (isset($_POST['submitLogin'])) {

            $loginPwd = $_POST['loginPassword'];
            $loginEmail = $_POST['loginEmail'];
            //put login info inside session
            $_SESSION['loginEmail']= $_POST['loginPassword'];
            $_SESSION['loginPassword']= $_POST['loginEmail'];

            $sql = "SELECT * FROM becode WHERE email = ?";
            $stmt = $this->connect()->prepare($sql);


            $stmt->execute([$loginEmail]);
            $user  =  $stmt->fetch();
            if(  $_POST['loginPassword'] == $user['Password'] ){
                $_SESSION['loginKey'] = true;
                 return $user;
            }

        }

    }


    public static function error(){
        echo '<script>alert("Your password or email is incorrect, please try again. If you do not have an account, register first")</script>';
    }









}