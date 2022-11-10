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
        $this->login_model = UserModel::class;
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
        $this->login_model->addUser();
        $view = new Register();
        $view->display();
    }

    //login
    public function login(){
        //display
        $view = new Login();
        $view->display();
    }

    //verify
    public function verify(){
        $view = new Verify();
        $view->display();
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