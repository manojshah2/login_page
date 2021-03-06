<?php
$root = "../";  
include_once($root."config/config.inc.php");
include_once($root."config/db.php");
include_once($root."field_mapping.php");
header('Content-type: application/json');
header("access-control-allow-origin: *");

if($_SERVER['REQUEST_METHOD']!='POST'){
    $message["status"]='failure';
    $message["message"]='Request method not supported';
    //echo json_encode($message);
    //return; 
}


if (!isset($_REQUEST['id'])) {
    $message["status"]='failure';
    $message["message"]='id is required';
    echo json_encode($message);
    return; 
}
$profile_id = $_REQUEST["id"];
if(!is_numeric($profile_id)){
    $message["status"]='failure';
    $message["message"]='Valid id is required';
    echo json_encode($message);
    return; 
}

$delete = $mysqli->query("delete from tblproposal where ID=".$profile_id);
if ($delete) {
    $message["status"]='success';
    $message["message"]='Proposal has been deleted';
    echo json_encode($message);
    return; 
} else {
    $message["status"]='failure';
    $message["message"]='Unable to delete proposal';
    echo json_encode($message);
    return; 
}

?>