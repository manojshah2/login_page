<?php

$root = "../";  
include($root.'config/config.inc.php');
include_once($root."config/db.php");
is_login($root); 

header('Content-type: application/json');
header("access-control-allow-origin: *");

$message=array();

if(isset($_REQUEST["profilechecksum"]) && isset($_REQUEST["comment"])){
    $pid=$_REQUEST["profilechecksum"];
    $comment=$_REQUEST["comment"];

    $server = new Server($mysqli);
    if( $server->IsConnected()){
        $server->AddParam('PID',$pid);
        $server->AddParam("Comments",$comment);
        $server->AddParam('ADDED BY',getCurrentUser());
        $cur=date("Y-m-d h:i:s");
        
        $server->AddParam('Date',$cur);

        if($server->InsertQuery("tblcomments")){
            $message['status']="success"; 
            $message["message"]="Added Successfully";
        }else{
            $message['status']="failure";
        }
    }else{
        $message['status']="failure";
        $message['message']="unable to establish connection";
    }
}else{
    $message['status']="failure";
    $message['message']="Please check data";
}

echo json_encode($message);

?>