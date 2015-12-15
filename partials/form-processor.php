<?php

// Get Details

$name = $_POST['fname'] . " " . $_POST['lname'];
$email = $_POST['email'];
$company = $_POST['company'];
$days = $_POST['days'];

$admin_email = "info@zoller-uk.com";
$email = $email;
$subject = "Zoller UK Open House February 2016 - Sign Up - " . $name . " - " . $company;
$message = "Name: " . $name . "\r\nEmail: " . $email . "\r\nCompany: " . $company . "\r\nDays: " . $days; // date troubles

//send email
mail($admin_email, "$subject", $message, "From:" . $email);
?>