<?php

// Importar as classes 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Carregar o autoloader do composer
require '../vendor/autoload.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Instância da classe
$mail = new PHPMailer(true);
try {
    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'lucaswsb52@gmail.com';
    $mail->Password   = 'Lukaum123@@';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'tls';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    // Define o remetente
    $mail->setFrom('lucaswsb52@gmail.com', 'Lucas Steinbach');
    // Define o destinatário
    $mail->addAddress('lucaswsb52@gmail.com', $nome);
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Assunto';
    $mail->Body    = 'Olá, meu nome é ' . $nome . ' Meu email é ' . $email . ', ' . $mensagem;
    $mail->AltBody = $mensagem;
    // Enviar
    $mail->send();
    header("Location: ../index.php");
    echo "Mensagem enviada com sucesso";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
