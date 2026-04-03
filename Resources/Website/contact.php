<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "zoefischthal@gmail.com";
$subject = "Website Contact";
$txt="Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: " . $email;
header("Location:last.html");
?>