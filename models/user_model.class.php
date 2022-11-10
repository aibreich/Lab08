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
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }

    //add user method
    public function add_user($username, $password, $firstname, $lastname, $email)
    {
        //Get POST information
//        $password = $_POST['password'];
//        $username = $_POST['username'];
//        $firstname = $_POST['fname'];
//        $lastname = $_POST['lname'];
//        $email = $_POST['email'];
        //hash password
        $hashToStoreInDb = password_hash($password, PASSWORD_DEFAULT);
        $addUser = "INSERT INTO users (email, firstname, lastname, password, username)
VALUES ('$email', '$firstname', '$lastname', '$hashToStoreInDb', '$username')";


        //make database query
        $this->dbConnection->query($addUser);
        
    }
    
    //Verify registration is complete
    public function verify_register(){
        if($query===1){
            echo "This account has been registered!";
        } else if ($query ===0){
            echo "The account could not be created.";
        }
    }

// $isPasswordCorrect = password_verify($_POST['password'], $existingHashFromDb);

    //verify user method
    public function verify_user($username, $password) {
//        $username = validate($username);
//
//        $password = validate($password);

        //IF error user didn't put in username
        if (empty($username)) {
//            header("User Name is required");
//            exit();
            return 'user';
        }

        //IF error user didn't put in password
        else if(empty($password)){
//            header("Password is required");
//            exit();
            return 'pass';
        }

        //ELSE getting the database
        else {
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

            $result = $this->dbConnection->query($sql);

            if (mysqli_num_rows($result) === 0) {

                $row = mysqli_fetch_assoc($result);
                //IF Password and Username match -- logging in user
                $hashToStoreInDb = password_hash($password, PASSWORD_DEFAULT);

                if ($row['username'] === $username && $row['password'] === $hashToStoreInDb) {

                    echo "Logged in!";

                    $_SESSION['username'] = $row['username'];

                    $_SESSION['name'] = $row['name'];

                    $_SESSION['id'] = $row['id'];

//                    header("Logged in");
//
//                    exit();

                    return 'true';
                } //ELSE error username and password don't match in database
                else {

//                    header("Incorrect Username or password");
//
//                    exit();
                    return 'something';

                }


            } else {
                return 'this if';
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
