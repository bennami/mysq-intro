<?php


class login extends getData
{
    public function loginForm(){

    if(isset($_POST['submitLogin'])){

        $loginEmail = $_POST['loginEmail'];
        $loginPwd = $_POST['loginPassword'];

        //get array of users
        $data = $this->getInfoPrepared();

        //check if email matches any email in database
        foreach ($data as $student)
        if ($loginEmail == $student['email']){
          //check password

        }


    }



    }
}