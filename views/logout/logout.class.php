<?php

/**
 * Author: Seth Howell
 * date: 11/7/22
 * File: logout.class.php
 * Description: Displays a confirmation page that the user has logged out
 */
class Logout extends  View
{
    public function display(){
        //Display the header
        parent:: header("Logged Out");
        ?>

        <!-- Code to display the confirmation of a logout -->
        <div class="verify">
            <p>Logged Out Successful!</p>
            <p>Have a good one!</p>
        </div>

        <?php
        //Display the footer
        parent::footer('logout');
    }
}