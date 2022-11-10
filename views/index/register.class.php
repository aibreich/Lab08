<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: register.class.php
 * Description: The methods to show a confirmation of a new user or a failed registration
 */
class Register extends  View
{
    public function display(){
        //Display the header
        parent:: header();
        ?>

        <!-- Code to display the confirmation of a successful registration attempt or the failure of an attempt -->
        <?php
            User_Model::verify_register();
        ?>

        <?php
        //Display the footer
        parent::footer();
    }
}
