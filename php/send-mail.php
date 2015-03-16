<?php

    // Assigning data from the $_POST array to variables
    $fName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mailFrom = $_POST['emailAddress'];
    $message = $_POST['messageContent'];
    $name = $fName . ' ' . $lastName;
 
    $mail_to = 'gadiaz3@gmail.com'; // specify your email here

    // Construct email subject
    $subject = 'GUSDIAZ.ME Message from: ' . $name;
 
    // Construct email body
    $body_message = 'Hello user, ' . $name . ' has send you a message from your contact form in gusdiaz.me.' . "\r\n" . "\r\n";
    $body_message .= 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mailFrom . "\r\n" . "\r\n";
    $body_message .= 'Message: ' . "\r\n" . "\r\n" . $message;
 
    // Construct email headers
    $headers = 'From: ' . $mailFrom . "\r\n";
    $headers .= 'Reply-To: ' . $mailFrom . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    echo "Message Sent!";
    
?>