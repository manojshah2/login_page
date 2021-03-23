<?php

$root = "../";  
include($root.'config/config.inc.php');
include_once($root."config/db.php");
is_login($root); 

header('Content-type: application/json');
header("access-control-allow-origin: *");

$message=array();
$con=$mysqli;

if(isset($_REQUEST["profilechecksum"]) && strlen($_REQUEST["profilechecksum"])>0){
    $pid=$_REQUEST["profilechecksum"];
    
    $commentQuery="select Comments,Date from tblcomments where PID=".$pid." order by Date desc";
    $comments = mysqli_query($con, $commentQuery);
    $data =[];
    while ($row = mysqli_fetch_assoc($comments)) {
        $alldata =array();
        $alldata["comments"]=$row["Comments"];
        $alldata["Date"]=$row["Date"];        
        array_push($data,$alldata);
     }
     $message["status"]="success";
     $message["message"]="Records pulled";
     $message["data"]=$data;
}else{
    $message['status']="failure";
    $message['message']="Please check data";
}

echo json_encode($message);

?>