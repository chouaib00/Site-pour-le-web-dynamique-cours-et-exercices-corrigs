<?php
require 'PHPMailer/PHPMailerAutoload.php';


$mail = new PHPMailer;

$mail->isSMTP();                                   // Paramétrer le Mailer pour utiliser SMTP
$mail->Host = 'smtp.gmail.com';                    // Spécifier le serveur SMTP
$mail->SMTPAuth = true;                            // Activer authentication SMTP
$mail->Username ='webdynsiteinternet@gmail.com';         // Votre adresse email d'envoi
$mail->Password = 'azertysara'; //Le mot de passe de cette adresse email
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('webdynsiteinternet@gmail.com','Webdyn');
$mail->addReplyTo('webdynsiteinternet@gmail.com','Webdyn'); 
$mail->addAddress($email);   // Add a recipient
//$mail->addAddress('mohamedali1995maroc@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

 
$bodyContent =$login_session.' votre Mot de passe est : '.$pass;

$mail->Subject ='Recuperation de Mot de passe';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
	$err="Le mot de passe  n'est pas envoye". $mail->ErrorInfo;
    echo "<script>alert('".$err."')</script>";
    
} else {
    echo "<script>alert('Le mot de passe est envoyé a votre adresse email')</script>";
}
?>
