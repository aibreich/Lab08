<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: index.class.php
 * Description: The methods for showing a form to create a user
 */
class Index extends  View
{
    public function display(){
        //Display the header
        parent:: header();
        ?>

        <!-- Code to display the registration form for users to sign up in -->
        <!-- username, password, email, firstname, lastname-->
        <form action="/index.php?action=register" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" min="5" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" required><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>

        <?php
        //Display the footer
        parent::footer();
    }
}