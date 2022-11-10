<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: login.class.php
 * Description: The methods to display a form for logging in
 */
class Login extends  View
{
    public function display(){
        //Display the header
        parent:: header();
        ?>

        <!-- Code to display the form for logging in -->

        <?php
        //Display the footer
        parent::footer();
    }
}