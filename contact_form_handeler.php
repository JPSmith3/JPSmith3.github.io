<?php

    $name = $_POST['name'];
    $vistitor_email = $_POST['email'];
    $message = $_POST['message']


    $email_from = 'legendarylex99@gmail.com';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                     "User Email: $vistitor_email.\n".
                        "User Message: $message.\n";
    
    $to = "jaivenpsmith@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply to: $vistitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html")

?>