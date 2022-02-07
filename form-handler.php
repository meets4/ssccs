<?php

$name = $_POST['name'];
$visitior_emalil = POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@ssccs.com';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name.\n". 
                "User Name : $visitor_email.\n". 
                "User Name : $subject.\n". 
                "User Name : $message.\n" ;

$to = 'mdsolanki321@gmail.com';

$headers = "From : $email_from \r\n";

$header .= "Reply-To: $visitior_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");




?>