<?php
include_once("config/config.inc.php");
include_once("config/db.php");
include_once("field_mapping.php");
header('Content-type: application/json');
header("access-control-allow-origin: *");
error_reporting(E_ERROR | E_PARSE);

function exception_handler($exception) {
    $message["status"]="failure";
    $message["message"]=$exception->getMessage();
    echo json_encode($message);
}
set_exception_handler('exception_handler');

$current_user=getCurrentUser();

if($_SERVER['REQUEST_METHOD']!='POST'){
    $message["status"]='failure';
    $message["message"]='Request method not supported';
    echo json_encode($message);
    return; 
}

$data = json_decode(file_get_contents('php://input'), true);

$uniqueId="";
if(isset($_REQUEST['uniqueId'])){
    $uniqueId= $_REQUEST['uniqueId'];
}

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
        
    if (array_key_exists($key, $header)){
        $server_header=$header[$key];        
        if(strlen($server_header)>0){            
            //echo $server_header."\n";  //for checking if value is coming or not.
            $server->AddParam($server_header,$data[$key]);    
        }
    }
}

$message_status='';
try{
    if(empty($uniqueId)){
        $server->AddParam("ADDED BY",$current_user);
        $server->AddParam("ADDED DATE",date('Y-m-d H:i:s'));
        $message1=$server->InsertQuery("tblprofiles");
        $message_status='Profile has been added';
    }else{
        $server->AddParam("MODIFIED BY",$current_user);
        $server->AddParam("MODIFIED DATE",date('Y-m-d H:i:s'));
        $server->AddParam("ID",$uniqueId,true);
        $message1=$server->UpdateQuery("tblprofiles");
        $message_status='Profile has been Updated.';
    }
}catch(Exception $e){
    $message["status"]="failure";
    $message["message"]=$e->getMessage();
    $message1=$e->getMessage();
}


if($message1["status"]){
    $message["status"]="success";
    $message["message"]=$message_status;
    $message["data"]=$message1["data"];
}else{
    $message["status"]="failure";
    $message["message"]=$message1["error"];
    //$message["failure"]=$data;
}

    echo json_encode($message);

?>