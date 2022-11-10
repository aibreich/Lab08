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
        //
        User_Model::verify_user();

        <?php
        //Display the footer
        parent::footer();
    }
}
