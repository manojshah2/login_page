<?php
$body = ' <html>This is test message</html>';

$account="match@matrimonialgurus.com";
$password="P@ssw0rd"; 
$from="match@matrimonialgurus.com";
$from_name="Match";
$to="manoj.shh1@gmail.com";
$msg=$body; // HTML message
$subject="HTML message";
/*End Config*/

include("../phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtpout.secureserver.net";
$mail->SMTPAuth= true;
$mail->Port = 465;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'tls';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "E-Mail has been sent";
}
?>
