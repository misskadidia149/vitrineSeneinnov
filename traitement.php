<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Configuration de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'kd1807319@gmail.com'; 
        $mail->Password = 'cerp xwoy ruxb wjep'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->SMTPDebug = 2; 
        // Paramètres de l'e-mail
        $mail->setFrom('kd1807319@gmail.com', 'SeneInnov');
        $mail->addAddress('kd1807319@gmail.com'); 
        $mail->Subject = $subject;
        $mail->Body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

        // Envoi de l'e-mail
        $mail->send();
        echo 'Le message a été envoyé avec succès';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
    }
    // if (mail($to, $email_subject, $email_body, $headers)) {
    //     echo "Votre message a été envoyé avec succès.";
    // } else {
    //     error_log("Erreur lors de l'envoi de l'e-mail.");
    //     echo "Erreur lors de l'envoi de l'e-mail. Veuillez réessayer.";
    // }
    
}

