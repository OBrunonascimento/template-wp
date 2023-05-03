<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$msg = '';
$name = '';
$email = '';
$phone = '';
$ddd = '';
$servico = '';

function clean_text($string) {
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {
    if (!empty($_POST["name"])) $name = clean_text($_POST["name"]);
    if (!empty($_POST["email"])) $email = clean_text($_POST["email"]);
    if (!empty($_POST["phone"])) $phone = clean_text($_POST["phone"]);
    if (!empty($_POST["ddd"])) $ddd = clean_text($_POST["ddd"]);
    if (!empty($_POST["servico"])) $servico = clean_text($_POST["servico"]);

    if(!empty($_POST["msg"])) {
        $msg = clean_text($_POST["msg"]);

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'no-reply@email.com.br';
            
            $mail->Password = '9H7mBXWN@';
            $mail->Port = 587;

            $mail->setFrom('no-reply@email.com.br', $name);
            $mail->addAddress('comercial@email.com.br');
            
            $mail->addReplyTo($email, $name);
            $mail->isHTML(true);
            $mail->CharSet = "UTF-8";

            $mail->Subject = 'Informações Site - '. $servico;
            $mail->Body    = '<p><strong>Nome: </strong> '. $name .'<br>
                              <strong>E-mail: </strong> '. $email .'<br>
                              <strong>Telefone: </strong> ('. $ddd .') '. $phone .'<br>
                              <strong>Tipo de Serviço: </strong> '. $servico .'</p>
                              <p>'. nl2br($msg) .'</p>';

            $mail->send();

            $msg = '';
            $name = '';
            $email = '';
            $phone = '';
            $ddd = '';
            $servico = '';

            ?>
            <script>
                window.location = '';
                alert('E-mail enviado com sucesso!')
            </script>
            <?php
        }
        catch (Exception $e) {
            ?>
            <script>
                alert('Não foi possível enviar o e-mail!')
                window.location = '';
            </script>
            <?php
        };
    };
};
