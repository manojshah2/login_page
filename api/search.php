<?php
$root = "../";  
include_once($root."config/config.inc.php");
include_once($root."config/db.php");
include_once($root."field_mapping.php");
header('Content-type: application/json');
header("access-control-allow-origin: *");

$current_user=getCurrentUser();
if($_SERVER['REQUEST_METHOD']!='POST'){
    $message["status"]='failure';
    $message["message"]='Request method not supported';
    echo json_encode($message);
    return; 
}

$data = json_decode(file_get_contents('php://input'), true);

function parseInput($param) {
    if(isset($_REQUEST[$param]) && $_REQUEST[$param]!=''){
        return $_REQUEST[$param];
    }else{
        return '';
    }
} 

$server = new Server($mysqli);
if(!$server->IsConnected()){
    $message["status"]='failure';
    $message["message"]='Unable to Communicate with Server';
    echo json_encode($message);
    return;   
}

$server->AddParam("SEARCH",json_encode($data));
$server->AddParam('ADDED BY',$current_user);
$message1=$server->InsertQuery("tblsearch");
$record_id='';
if ($message1['status']==1){
    $record_id=$message1['data'];
}

$message["status"]="success";
$message["data"]="results.php?searchid=".$record_id;

echo json_encode($message);

?>