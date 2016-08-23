<?php

$form_message = stripslashes($_POST['message']);
    
$recipient = "info@suncoastmartialarts.com"; // Recipients Email Address
$subject = "SuncoastMartialArts.com Contact Form Submission"; // Email Subject

$message = "- Name: " . $_POST['name'] . "\r\n";
$message .= "- Email: " . $_POST['email'] . "\r\n\r\n";
$message .= "- Message: " . $form_message . " \r\n";   

/* additional headers */
$headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . "> \r\n";
$headers .= "Reply-To: ". $_POST['email'] ."\r\n";

/* and now mail it */
mail($recipient, $subject, $message, $headers);
?>