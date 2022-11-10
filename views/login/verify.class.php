<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: verify.class.php
 * Description: The methods to display a confirmation of a login or a failure
 */
class Verify extends  View
{
    public function display(){
        //Display the header
        parent:: header();
        ?>

        <!-- Code to display the confirmation of a successful login or an unsuccessful login-->
        //Check if sql statement returned true or false
        if(isset($_POST['adduser'])){
        if($_POST['adduser'] == 0){
        $message = "Add User Failed";
        UserError::display($message);
        } else if ($_POST['adduser'] == 1){
        echo "<h1>Your account has been successfully created</h1>";
        }
        }

        <?php
        //Display the footer
        parent::footer();
    }
}