<?php
$name =  $_POST["name"];
$email = $_POST["email"];
$phoneno = $_POST["phoneno"];
$sub = $_POST["sub"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;


$mail->Username = "nishanthiniram23@gmail.com";
$mail->Password = "Nisha@123";


$mail->setFrom($email, $name);
$mail->addAddress("dave@example.com", "Dave");

$mail->Subject = $sub;
$mail->Body = $message;

$mail->send();


header("Location: thank-you.html");*/