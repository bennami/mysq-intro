<?php


class Register extends Connection
{


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
            array_push($errors, "The two passwords do not match");
        }

        //validate pwd
        if (filter_var($password_1, PASSWORD_DEFAULT)) {
             $password_1 = true;
        } else {
             $password_1 = false;
        }




        //validate pwd

        //password hash
       $pwd =password_hash($password_1, PASSWORD_DEFAULT);

        $sql = "INSERT INTO becode(first_name, email,password)VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $email, $pwd]);

        return $stmt->fetch();
    }

//session_start();
    public function reg()
    {

        // initializing variables
        $username = "";
        $email = "";
        $errors = array();

        // connect to the database
        $db = $this->connect();

        // REGISTER USER
        if (isset($_POST['submitRegister'])) {
            // receive all input values from the form
            $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
            $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
            $email = mysqli_real_escape_string($db, $_POST['emailReg']);
            $password_1 = mysqli_real_escape_string($db, $_POST['passwordReg']);
            $password_2 = mysqli_real_escape_string($db, $_POST['passwordReg2']);

            // form validation
            // by adding (array_push()) corresponding error unto $errors array
            if (empty($firstName)) {
                array_push($errors, "first name is required");
            }
            if (empty($lasttName)) {
                array_push($errors, "last name is required");
            }
            if (empty($email)) {
                array_push($errors, "Email is required");
            }
            if (empty($password_1)) {
                array_push($errors, "Password is required");
            }
            if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
            }

            // first check the database to make sure a user does not already exist with the same username and/or email
            $user_check_query = "SELECT * FROM becode WHERE email=?";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);

            if ($user) { // if user exists
                if ($user['username'] === $username) {
                    array_push($errors, "Username already exists");
                }

                if ($user['email'] === $email) {
                    array_push($errors, "email already exists");
                }
            }

            // Finally, register user if there are no errors in the form
            if (count($errors) == 0) {
                $password = md5($password_1);//encrypt the password before saving in the database

                $query = "INSERT INTO becode (first_name, last_name, password) 
  			  VALUES('$username', '$email', '$password')";
                mysqli_query($db, $query);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }
        }

    }

}


