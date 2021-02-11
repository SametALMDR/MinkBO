<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Database\Capsule\Manager as Capsule;

try {
    $port       = Capsule::table('config')->where('c_name','smtp_port')->value('c_value');
    $host       = Capsule::table('config')->where('c_name','smtp_host')->value('c_value');
    $username   = Capsule::table('config')->where('c_name','smtp_username')->value('c_value');
    $password   = Capsule::table('config')->where('c_name','smtp_password')->value('c_value');
    $email      = Capsule::table('config')->where('c_name','smtp_sender_email')->value('c_value');
    $name       = Capsule::table('config')->where('c_name','smtp_sender_name')->value('c_value');
}catch (Exception $e){
    echo $e->getMessage();
}

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host         = $host;
$mail->SMTPAuth     = true;
$mail->Username     = $username;
$mail->Password     = $password;
$mail->SMTPSecure   = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port         = $port;
$mail->CharSet      = 'UTF-8';

$mail->setFrom($email, $name);
$mail->addReplyTo($email, $name);
