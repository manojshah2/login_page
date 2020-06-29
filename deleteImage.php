<?php

include('config/config.inc.php');
include_once("config/db.php");

header('Content-type: application/json');
header("access-control-allow-origin: *");

if (isset($_REQUEST['imgid'])){
    
    $id=trim($_REQUEST['imgid']);
    $result_arr=$mysqli->query("select `IMG PATH` from tblImages where ID=".$id);
    $result = $result_arr->fetch_array();
    $delete = $mysqli->query("delete from tblImages where ID=".$id);
    if($delete){
        unlink($result["IMG PATH"]);
        $message["status"]='success';
        $message["message"]="Image deleted";
        echo json_encode($message);	 
        return;
    }else{
        $message["status"]='failture';
        $message["message"]="Unable to delete image";
        echo json_encode($message);	 
        return;
    }   
}else{
    $message["status"]='failure';
    $message["message"]="Unable to identify image";
    echo json_encode($message);	 
    return;
}
?>