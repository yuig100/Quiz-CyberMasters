<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../lib/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$phpmailer = new PHPMailer(true);

try {
    //Server settings ultilizando o MailTrap
    $phpmailer->CharSet = 'UTF-8';
    $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $phpmailer->isSMTP();                                           //Send using SMTP
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '23851f247b8a8d';
    $phpmailer->Password = 'ab4a5996148c25';
    $phpmailer->setLanguage('pt-br', '../lib/vendor/phpmailer/phpmailer/language/phpmailer.lang-pt_br.php');

    //Recipients
    $phpmailer->setFrom('QuizTCC@admin.com', 'Admin');
    $phpmailer->addAddress($usuario['email'], $usuario['nome']);     //Add a recipient

    //Content
    $phpmailer->isHTML(true);                                  //Set email format to HTML
    $phpmailer->Subject = $titulo_email;
    $phpmailer->Body    = $conteudo_email;
    
    $phpmailer->send();
    
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}

?>