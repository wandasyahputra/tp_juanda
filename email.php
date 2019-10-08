<?php
$message = "Name: ".$_POST['name']."\r\nPhone Number: ".$_POST['phone']."\r\nEmail: ".$_POST['email']."\r\nMessage: ".$_POST['message'];
$message = wordwrap($message, 70, "\r\n");
mail('pradiptagung@workmail.com', 'Question From '.$_POST['email'], $message);
?>