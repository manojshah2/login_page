<?php

include('config/config.inc.php');
include_once("config/db.php");

header('Content-type: application/json');
header("access-control-allow-origin: *");

$imgid="";
$profileId="";

if(isset($_REQUEST['imgid'])){
    $imgid=$_REQUEST['imgid'];
}

if(isset($_REQUEST['profileId'])){
    $profileId=$_REQUEST['profileId'];
}

if (empty($imgid)|| empty($profileId)){
    $message["status"]='failure';
    $message["message"]="Unable to identify image";
    echo json_encode($message);	 
    return;
}else{
    $id=trim($imgid);
    $update_status=$mysqli->query("update tblimages set `MAIN PHOTO`='0' where PID=".$profileId);
    $update=$mysqli->query("update tblimages set `MAIN PHOTO`='1' where ID=".$id);
    
    if($update){        
        $message["status"]='success';
        $message["message"]="Default photo selected";
        echo json_encode($message);	 
        return;
    }else{
        $message["status"]='failture';
        $message["message"]="Unable to makedefault";
        echo json_encode($message);	 
        return;
    }   
}
?>