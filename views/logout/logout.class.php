<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: logout.class.php
 * Description: Displays a confirmation page that the user has logged out
 */
class Logout extends  View
{
    public function display(){
        //Display the header
        parent:: header();
        ?>

        <!-- Code to display the confirmation of a logout -->

        <?php
        //Display the footer
        parent::footer();
    }
}