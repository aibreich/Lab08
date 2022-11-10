<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: user_model.class.php
 * Description:
 */
class UserModel {

    //private attributes
    private $db; //database object
    private $dbConnection; //database connection



    public function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
    }

    //add user method
    public function add_user()
    {
        //Get POST information
//        $password = $_POST['password'];
        $username = $_POST['username'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        //hash password
        $hashToStoreInDb = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $addUser = "INSERT INTO users (email, firstname, lastname, password, username)
VALUES ('$email', '$firstname', '$lastname', '$hashToStoreInDb', '$username')";


        //make database query
        $query =$this->db->query($addUser);

        if($query != true) {
            $_POST['adduser']=0;
        }elseif ($query != false) {
            $_POST['adduser']=1;
        }

    }

// $isPasswordCorrect = password_verify($_POST['password'], $existingHashFromDb);

    //verify user method
    public function verify_user() {
        $username = validate($_POST['username']);

        $password = validate($_POST['password']);

        //IF error user didn't put in username
        if (empty($user)) {
            header("User Name is required");
            exit();
        }

        //IF error user didn't put in password
        else if(empty($password)){
            header("Password is required");
            exit();
        }

        //ELSE getting the database
        else {
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

            $result = mysqli_query($sql);

            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);
                //IF Password and Username match-- logging in user
                if ($row['user_name'] === $username && $row['password'] === $password) {

                    echo "Logged in!";

                    $_SESSION['user_name'] = $row['user_name'];

                    $_SESSION['name'] = $row['name'];

                    $_SESSION['id'] = $row['id'];

                    header("Logged in");

                    exit();

                } //ELSE error username and password don't match in database
                else {

                    header("Incorrect Username or password");

                    exit();

                }


            }


        }
    }

    //logout method
    public function logout() {
            //unset all the session variables
            $_SESSION = array();

            //delete the session cookie
            setcookie(session_name(), "", time() - 3600);

            //destroy the session
            session_destroy();
        //return true after
    }

    //reset password function
    public function reset_password() {
        //grab username and password from the reset form

        //then update users password in the database

        //make sure password is hashed before update then return true when successful
    }
}
