<?php

/**
 * Author: Aiden Eichenour, Eli Sample, Seth Howell, Marielle Harrell
 * date: 11/7/22
 * File: user_model.class.php
 * Description:
 */
class UserModel {

    //private attributes
    private $db; //database object
    private $dbConnection; //database connection


    //constructor
    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }

    //add user method
    public function add_user($username, $password, $firstname, $lastname, $email){
        //hash password
        $hashToStoreInDb = password_hash($password, PASSWORD_DEFAULT);
        //sql statement
        $addUser = "INSERT INTO users (email, firstname, lastname, password, username)
VALUES ('$email', '$firstname', '$lastname', '$hashToStoreInDb', '$username')";
        //make database query
        $this->dbConnection->query($addUser);
    }
    
    //Verify registration is complete
    public function verify_register(){
        //if statement for if the account is registered
        if($query===1){
            echo "This account has been registered!";
        } else if ($query ===0){
            echo "The account could not be created.";
        }
    }

    //verify user method
    public function verify_user($username, $password) {


        //IF error user didn't put in username
        if (empty($username)) {

            return 'user';
        }

        //IF error user didn't put in password
        else if(empty($password)){

            return 'pass';
        }

        //ELSE getting the database
        else {
            //sql statement
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            //result from db
            $result = $this->dbConnection->query($sql);
            //if statement
            if (mysqli_num_rows($result) === 0) {
                //row to show result in
                $row = mysqli_fetch_assoc($result);
                //IF Password and Username match -- logging in user
                $hashToStoreInDb = password_hash($password, PASSWORD_DEFAULT);
                //if statement for if its a match
                if ($row['username'] === $username && $row['password'] === $hashToStoreInDb) {

                    echo "Logged in!";

                    $_SESSION['username'] = $row['username'];

                    $_SESSION['name'] = $row['name'];

                    $_SESSION['id'] = $row['id'];
                    return 'true';
                } //ELSE error username and password don't match in database
                else {
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
