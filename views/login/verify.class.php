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
        parent:: header("You're Verified");
        ?>

        <!-- Code to display the confirmation of a successful login or an unsuccessful login-->
        <?php
            //Call the login verify method in the user model
            User_Model::class;
        ?>
            <div class="verify">
                <p>Account Log in Successful!</p>
<!--                <p>Please login!</p>-->
            </div>


        <?php
        //Display the footer
        parent::footer('verify');
    }
}
