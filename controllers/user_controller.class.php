<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: user_controller.class.php
 * Description: this is the user controller class which defines the 8 actions
 */
class UserController {

    private $login_model;

    //default constructor
    public function __construct() {
        //create an instance of the UserModel class
//        $this->login_model = UserModel::class;
        $this->login_model = new UserModel;

    }

    //index
    public function index(){
        //display
        $view = new Index();
        $view->display();
    }

    //register
    public function register(){
        //display
//        UserModel::addUser();
        $user_model = new UserModel();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $status = $user_model->add_user($username, $password, $firstname, $lastname, $email);
        $view = new Register();
        $view->display($status);
    }

    //login
    public function login(){
        //display


        $view = new Login();
        $view->display();
    }

    //verify
    public function verify(){
        $user_model = new UserModel();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $veri = $user_model->verify_user($username, $password);


        $view = new Verify();
        $view->display($veri);
    }

    //logout
    public function logout(){
        $view = new Logout();
        $view->display();
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