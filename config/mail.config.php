<?php




function sendEmail($to,$cc,$subject,$msg){
    $message=array();
    include("../../phpmailer/class.phpmailer.php");
    $account="match@matrimonialgurus.com";
    $password="roka@2021"; 
    $from="match@matrimonialgurus.com";
    $from_name="Match";
    $host="smtpout.secureserver.net";
    $charset="UTF-8";
    $port=465;
    $smtpsecure="ssl";

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->isHTML(true);
    $mail->CharSet = $charset;
    $mail->Host = $host;
    $mail->SMTPAuth= true;
    $mail->Port = $port;
    $mail->Username= $account;
    $mail->Password= $password;
    $mail->SMTPSecure = $smtpsecure;
    $mail->From=$from;
    $mail->FromName=$from_name;
    

    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->addAddress($to);
    try
    {
        if($mail->send()){
            $message['status']="success";
            $message['message']="Email has been Sent";
            
        }
    }catch(exception $e)
    {
        $message['status']="failure";
        $message['message']=$mail->ErrorInfo;        
    }
    return $message;
}
?>