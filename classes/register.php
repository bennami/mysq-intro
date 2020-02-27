<?php


class Register extends Connection
{
    public function registerUser(){
        if(isset($_POST['submitRegister'])){

            $name = $_POST['name'];
            $lastname = $_POST['lastName'];
            $email = $_POST['lastName'];
            $password = $_POST['password'];
            $password2 = $_POST['password_confirmation'];

           

        }

        //check for  unique passwords

        //password hash
        password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO becode(first_name,last_name,username,linkedin, github, email, preferred_language, avatar,video, quote ,quote_author,created_at)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor, $createdAt]);

        return $stmt->fetch();




    }




}