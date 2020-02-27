<?php


class Register extends Connection
{



        //validate email

        function validateEmail($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $email = true;
            } else {
                return $email = false;
            }
        }


        public  function validatePassword($password){
            if(filter_var($password, PASSWORD_DEFAULT)){
                return $password = true;
            }else{
                return $password = false;
            }
        }





        //check for  unique passwords
        //password validation
        public function hash(){

                 //password hash
                password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO becode(first_name, email,password)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$firstName, $email, $password]);

                return $stmt->fetch();
        }



}


