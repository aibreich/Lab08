<?php

/*
 * Author: Elijah Sample
 * Date: today's date
 * Name: index.php
 * Description: The code necessary to change what action is being taken
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file

//Default action is to go to the registration form
$action="index";
if (isset($_GET['action']) && !(empty($_GET['action'])))
    $action = $_GET['action'];

//Change the action of what to call
if($action === 'index'){
    $user_controller->index();
} else if ($action === 'register'){
    $user_controller->register();
} else if ($action === 'login'){
    $user_controller->login();
} else if ($action === 'verify'){
    $user_controller->verify();
} else if ($action === 'logout'){
    $user_controller->logout();
} else if ($action === 'reset'){
    $user_controller->reset();
} else if ($action === 'do_reset'){
    $user_controller->do_reset();
} else if ($action ===  'error'){
    //Set a default message
    $message = "There was an error processing your request.";

    //retrieve the error message
    if ((isset($_GET['message'])) && !(empty($_GET['message'])))
        $message = $_GET['message'];

    $user_controller->error($message);
} else {
    $message = "An invalid action was requested.";
    $user_controller->error($message);
}
