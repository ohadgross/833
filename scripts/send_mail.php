<?php

global $first_name;
global $phone1;
global $phone2;
global $to;
global $subject;
global $message;
global $headers;
global $street;
global $city;
global $remarks;
global $email1;

$first_name = $_POST['first_name'];
$phone1 = $_POST['phone1'] . "@";
$phone2 = $_POST['phone2']. "@";
$street= $_POST['street']. "@";
$city = $_POST['city']. "@";
$remarks = $_POST['remarks']. "@";
$email1 = $_POST['email1']. "@";

$to      = 'ohad_gross@hotmail.com';
$subject = 'New customer from 833';
$message .= 'You have a new message from :' . $first_name . "\n" .  ' Phone Number: ' . $phone1 . "\n" . ' Second Phone:' . $phone2 . "\n" . 'Email:' . $email1 . "\n" . ' Street:' . $street . "\n" . ' City: ' . $city . "\n" . ' Comments:' . "\n" . $remarks;


$headers = 'From: ohad_gross@hotmail.com' . "\r\n" .
    'Reply-To: ohad_gross@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    mail($to, $subject, $message, $headers);
    sleep(3);
    $subject = 'Copy and Email Backup';
    mail($to, $subject, $message, $headers);
    sleep(3);

    echo "<script language='javascript'>". "\n" ."window.location.href = 'http://www.833.co.il';". "\n" .'</script>';


    ?>