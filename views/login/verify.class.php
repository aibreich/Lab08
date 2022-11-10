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
        if(isset($_POST['login_verify'])){
            if($_POST['login_verify'] === 0){
                $message = "Add User Failed";
                UserError::display($message);
            } else if ($_POST['login_user'] === 1){
                echo "<h1>You have logged in successfully!</h1>";
            }
        }

        <?php
        //Display the footer
        parent::footer();
    }
}
