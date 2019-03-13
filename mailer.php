<?php

// Conta de email que irá enviar as mensagens
$username = "no-reply@ligauniversitariaesports.com.br";
$password = "4Mx~&enz=TsUq1";

// Servidor SMTP  e porta
$host_smtp = "mx1.hostinger.com.br";
$porta_smtp = 587;

// Recebe valores via POST
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

include 'lib/phpmailer/Exception.php';
include 'lib/phpmailer/PHPMailer.php';
include 'lib/phpmailer/SMTP.php';

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

try {
    //Server settings
    //$mail->SMTPDebug = 4;                                 // Enable verbose debug output
    $mail->isSMTP();
    $mail->Host = $host_smtp;
    $mail->SMTPAuth = true;
    $mail->SMTPAutoTLS = false;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->Port = $porta_smtp;

    // Quem enviou
    $mail->setFrom($username, "Liga Univesitária de E-Sports");
    // Quem recebe
    $mail->addAddress("vhiiny@hotmail.com", "Vinicius Mármoro"); // Para fins de teste

    // Attachments caso sejá necessário adicionar algum arquivo futuramente
    //$mail->addAttachment('bp.jpg');
    //$mail->addAttachment('c.jpg');

    // Seta o tipo do conteúdo do email, no caso um documento html
    $mail->isHTML(true);
    $mail->Subject = "[SITE LUE] " . $assunto;
    $mail->Body    = "<p>De: " . $nome . " ( " . $email . " )<br><p>" . nl2br($mensagem) . "</p>";

    $mail->send();
} catch (Exception $e) {
    echo 'A mensagem não pode ser enviada.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} finally {
    echo "Mensagem enviada com sucesso!";
}

?>
