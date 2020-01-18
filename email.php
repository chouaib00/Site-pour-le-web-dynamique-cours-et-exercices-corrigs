<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username ='lpsigl3@gmail.com';          // SMTP username
$mail->Password = 'azertysara'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addReplyTo($_POST['email'],$_POST['name']);
$mail->addAddress('webdynsiteinternet@gmail.com');   // Add a recipient
//$mail->addAddress('mohamedali1995maroc@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

 
$bodyContent = '<p>'.$_POST['message'].'</p>';

$mail->Subject =$_POST['subject'];
$mail->Body    = $bodyContent;

if(!$mail->send()) {
	$err="Message n'est pas envoye". $mail->ErrorInfo;
    echo "<script>alert('".$err."')</script>";
    
} else {
    echo "<script>alert('Message Envoyé')</script>";
}
?>
