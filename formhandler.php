<?php
$name  = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'NEW FORM SUBMISSION';
$email_body = "User Name : $name.\n".
                "User Email: $visitor_email.\n".
                "Subject :$subject.\n".
                "User Message : $message.\n";
$to ='jay2002yadav@gmail.com' 
$headers = "Form: $email_form\r\n";
$headers .= "Reply-TO: $visitor_email\r\n";
mail($to,$email_subject,$emai_body,$headers);
header("Location: contact.html");

?>