<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $email_from = 'siddhilomte25@gmail.com' ;
    
    $email_subject = 'New Form Submission';

    $email_body =   "User Name: $name.\n".
                    "User Email: $email.\n".
                    "Subject: $subject.\n".
                    "Message: $message.\n";

    $to = 'lomtesiddhi25@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    
    email($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
    ?>