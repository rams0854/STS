 <?php
session_start();

include_once 'phpmailer/class.phpmailer.php';
$mail = new PHPMailer;

$email = $_SESSION['email'];
$recipient = $email;
$mailMsg = "click this url for pasword reset ".$_SESSION['emailMsg']."  token is :".$_SESSION['token'];

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sreedazzler@gmail.com';
$mail->Password = 'exhausting';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('sreedazzler@gmail.com', 'CodexWorld');
$mail->addReplyTo('sreedazzler@gmail.com', 'CodexWorld');

// Add a recipient
$mail->addAddress($recipient);

// Add cc or bcc 
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'Reset password';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = $mailMsg;
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else{

    echo '<h4 align="center">Message has been sent.Check your email to reset password </h4>';
}
$mail->addAddress($recipient);

?>