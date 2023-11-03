<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'efluidschool@gmail.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n"
              "User Email: $visitor_email.\n"
              "Subject: $subject.\n"
              "User Message: $Message.\n";

$to = 'barak7486@gmail.com';

$headers = "From $email_from \r\n";
$headers .= "Reply-To: $visitor-email \r\n"


mail($to,$email_body,$headers);
header("Location: contact.html");

?>