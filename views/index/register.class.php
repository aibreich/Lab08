<?php

/**
 * Author: Eli Sample
 * date: 11/7/22
 * File: register.class.php
 * Description: The methods to show a confirmation of a new user or a failed registration
 */
class Register extends  View
{
    public function display($status){
        //Display the header
        parent:: header('Account Registered');
        ?>

<!--            response to the user if account registered-->
        <div class="verify">

            <p>Account Registered Successfully!</p>
            <p>Please login!</p>
        </div>

        <?php
        //Display the footer
        parent::footer('home');
    }
}
