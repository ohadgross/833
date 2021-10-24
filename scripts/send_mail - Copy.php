<?php

global $first_name;
global $comments;
global $to;
global $subject;
global $message;
global $headers;

$first_name = $_POST['first_name'];
$comments = $_POST['comments'];

$to      = 'ohad_gross@hotmail.com';
$subject = 'New customer';
$message = 'You have a new message from ' . $first_name . '<br/><br/>';
$message .= $comments;

$headers = 'From: ohad_gross@hotmail.com' . "\r\n" .
    'Reply-To: ohad_gross@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo "Thank you for leaving your details. Click <a href='http://www.833.co.il'>here</a> to go back to main screen.";

mail($to, $subject, $message, $headers);
?>