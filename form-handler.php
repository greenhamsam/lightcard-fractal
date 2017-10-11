<?php
$email = $_POST['email'];
$formcontent=" New Lightcard signup: $email \n";
$recipient = "bcksam002@gmail.com";
$subject = "New Lightcard signup";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
