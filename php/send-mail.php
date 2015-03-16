<?php

    // Assigning data from the $_POST array to variables
    $fName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mailFrom = $_POST['emailAddress'];
    $message = $_POST['messageContent'];
    $name = $fname . $lastName;
 
    $mail_to = 'gadiaz3@gmail.com'; // specify your email here

    // Construct email subject
    $subject = 'gusdiaz-me : Message from: ' . $name;
 
    // Construct email body
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mailFrom . "\r\n";
    $body_message .= 'Message: ' . $message;
 
    // Construct email headers
    $headers = 'From: ' . $mailFrom . "\r\n";
    $headers .= 'Reply-To: ' . $mailFrom . "\r\n";
 
    echo $name;
?>