<?php
require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "mail.lucassteinbach.tk";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "lucassteinbach@lucassteinbach.tk";
$mail->Password = "Lucas123@";
$mail->SetFrom("lucassteinbach@lucassteinbach.tk");
$mail->Subject = "Assunto da mensagem";
$mail->Body = "Meu nome " . $nome . ', meu email é ' . $email . ', e essa é minha mensagem: ' . $mensagem;
$mail->AddAddress("lucaswsb52@gmail.com");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: contato.php?emailenviadocomsucesso=yes");
    exit();
}
?>