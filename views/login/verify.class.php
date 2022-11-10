<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: verify.class.php
 * Description: The methods to display a confirmation of a login or a failure
 */
class Verify extends  View
{
    public function display($veri){
        //Display the header
        parent:: header("You're Verified");
        ?>

        <!-- Code to display the confirmation of a successful login or an unsuccessful login-->
<?php
        if ($veri) {
            echo var_dump($veri);

            ?>
            <div class="verify">
                <p>Account Log in Successful!</p>
<!--                <p>Please login!</p>-->
            </div>
            <?php
        }else {
            echo var_dump($veri);
            ?>
            <div class="verify">
                <p>Account Log in Failed!</p>
                                <p>Please Try again!</p>
            </div>
                <?php
        }
        ?>



        <?php
        //Display the footer
        parent::footer('verify');
    }
}
