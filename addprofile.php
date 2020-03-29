<?php
include_once("config/config.inc.php");
include_once("config/db.php");
header('Content-type: application/json');
header("access-control-allow-origin: *");



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

foreach($data as $key => $value) {    
    $server->AddParam($key,$data[$key]);
}

$message1=$server->InsertQuery("tblProfiles");

if($message1["status"]){
    $message["status"]="success";
    $message["message"]="successfully added";
}else{
    $message["status"]="failure";
    $message["message"]=$message1["error"];
}

echo json_encode($message);
?>