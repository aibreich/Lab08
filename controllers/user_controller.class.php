<?php

/**
 * Author: Marielle Harrell
 * date: 11/7/22
 * File: user_controller.class.php
 * Description: this is the user controller class which defines the 8 actions
 */
class UserController {

    private $login_model;

    //default constructor
    public function __construct() {
        //create an instance of the UserModel class
        $this->login_model = new UserModel;

    }

    //index function
    public function index(){

        $view = new Index(); //instance
        $view->display();//display
    }

    //register function
    public function register(){
        //grab the details from the form
        $user_model = new UserModel();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        //create status
        $status = $user_model->add_user($username, $password, $firstname, $lastname, $email);
        $view = new Register();//instance
        $view->display($status); //display
    }

    //login function
    public function login(){
        $view = new Login();//instance
        $view->display();//display
    }

    //verify
    public function verify(){
        //grab the data from the form
        $user_model = new UserModel();
        $username = $_POST['username'];
        $password = $_POST['password'];
        //create veri to verify
        $veri = $user_model->verify_user($username, $password);
        $view = new Verify();//instance
        $view->display($veri);// display
    }

    //logout function
    public function logout(){
        $view = new Logout();//instance
        $view->display();//display
    }

    //reset
    public function reset(){

    }

    //do reset
    public function do_reset(){

    }

    //error
    public function error($message){
        //create an object of the Error class
        $error = new UserError();

        //display error message
        $error->display($message);
    }

}