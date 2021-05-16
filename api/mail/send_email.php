<?php

include("../../config/mail.config.php");
$root = "../../";  
include($root.'config/config.inc.php');
is_login($root); 

error_reporting(E_ERROR | E_PARSE);
header('Content-type: application/json');
header("access-control-allow-origin: *");

$message=array();

$to="";
$cc="";
$id="";

if(isset($_REQUEST['to'])){
    $to=$_REQUEST['to'];
}

if(isset($_REQUEST['cc'])){
    $cc=$_REQUEST['cc'];
}

if(isset($_REQUEST['pid'])){
    $id=$_REQUEST['pid'];
}

if(empty($id) || empty($to)){
    $message['status']='failure';
    $message['message']='TO Email id or profile id is missing.';
    echo json_encode($message);
    return;
}
//echo $root_name.'templates/template1.php?profilechecksum='.$id;
$html =file_get_contents($root_name.'templates/template1.php?profilechecksum='.$id);
if(empty($html)){
    $message['status']='failure';
    $message['message']='Mail Content Not found';
    echo json_encode($message);
    return;
}
$message = sendEmail($to,$cc,"test subject",$html);

echo json_encode($message);

?>