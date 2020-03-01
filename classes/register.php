<?php


class Register extends Connection
{
        public static function errorPwd(){
            echo '<script>alert("Your passwords dont match")</script>';
        }

    public function validateReg(){

        // receive all input values from the form
        $firstName =  $_POST['firstName'];
        $lastName =  $_POST['lastName'];
        $email =  $_POST['emailReg'];
        $password_1 =  $_POST['passwordReg'];
        $password_2 =  $_POST['passwordReg2'];

        //validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $email = true;
        } else {
             $email = false;
        }

        if ($password_1 != $password_2) {
          self::errorPwd();
        }

        //validate pwd
        if (filter_var($password_1, PASSWORD_DEFAULT)) {
             $password_1 = true;
        } else {
             $password_1 = false;
        }

        //password hash
        $pwd = password_hash($password_1, PASSWORD_DEFAULT);

        //insert into db
        if($password_1 =true && $email == true){
            $sql = "INSERT INTO becode(first_name,last_name, email,password)VALUES (?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstName,$lastName, $email, $pwd]);
            return $stmt->fetch();
        }

    }
}


