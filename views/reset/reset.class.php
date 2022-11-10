<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: reset.class.php
 * Description: Display method for displaying the password reset form
 */
class Reset
{
    public function display(){
        //Display the header
        parent:: header();
        ?>

        <!-- Code to display the confirmation of a successful login or an unsuccessful login-->

        <?php
        //Display the footer
        parent::footer();
    }
}