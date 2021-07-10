<?php

$root = "../";  
include($root.'config/config.inc.php');
include_once($root."config/db.php");
is_login($root); 

header('Content-type: application/json');
header("access-control-allow-origin: *");

error_reporting(E_ERROR | E_PARSE);

$message=array();
$con=$mysqli;


if(isset($_REQUEST["id"]) && strlen($_REQUEST["id"])>0){
    $pid=$_REQUEST["id"];
    
    $query="select `FIRST NAME`,`LAST NAME`,`Data Taken From` from tblprofiles where ID=".$pid." ";
    $profiles = mysqli_query($con, $query);
    $data =[];
    while ($row = mysqli_fetch_assoc($profiles)) {
        $alldata =array();
        $alldata["name"]=$row["FIRST NAME"].' '.$row["LAST NAME"];
        $alldata["source"]=$row["Data Taken From"];                
        
     }
     $message["status"]="success";
     $message["message"]="Records pulled";
     $message["data"]=$alldata;
}else{
    $message['status']="failure";
    $message['message']="Please check data";
}

echo json_encode($message);

?>