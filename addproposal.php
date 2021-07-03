<?php
include_once("config/config.inc.php");
include_once("config/db.php");
include_once("config/comfunc.php");
include_once("field_mapping.php");
header('Content-type: application/json');
header("access-control-allow-origin: *");
error_reporting(E_ERROR | E_PARSE);

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

$server = new Server($mysqli);
if(!$server->IsConnected()){
    $message["status"]='failure';
    $message["message"]='Unable to Communicate with Server';
    echo json_encode($message);
    return;   
}

$profile_id=getKeyValue($data,'unique_id');
$profile_shortlisted_id=getKeyValue($data,'profile_shortlisted_id');

$res_data1 = $mysqli->query("select `FIRST NAME`,`LAST NAME`,`Data Taken From` from tblprofiles where ID=".$profile_id);
$fetch_data1 = $res_data1->fetch_array();
$data['profile_name'] = $fetch_data1['FIRST NAME']." ".$fetch_data1['LAST NAME']; 
$data['profile_source'] = $fetch_data1['Data Taken From']; 

$res_data1 = $mysqli->query("select `FIRST NAME`,`LAST NAME`,`Data Taken From` from tblprofiles where ID=".$profile_shortlisted_id);
$fetch_data1 = $res_data1->fetch_array();
$data['profile_shortlisted_name'] = $fetch_data1['FIRST NAME']." ".$fetch_data1['LAST NAME']; 
$data['profile_shortlisted_source'] = $fetch_data1['Data Taken From']; 

$comment_status='';
$copy_profile=getKeyValue($data,'copy_profile');

$col_comments = array (
    "profile_shortlisted_id"=>"profile_shortlisted_id",
    "profile_shortlisted_name"=>"profile_shortlisted_name",
    "profile_shortlisted_source"=>"profile_shortlisted_source",
    "profile_shortlisted_status"=>"profile_shortlisted_status",    
    "meeting_type"=>"meeting_type",
    "meeting_date"=>"meeting_date",
    "meeting_time"=>"meeting_time",
    "meeting_place"=>"meeting_place",
    "rejection_reason"=>"rejection_reason",
    "rejection_reason_comments"=>"rejection_reason_comments"
);

$col_comments1 = array (
    "unique_id"=>"unique_id",
    "profile_name"=>"profile_name", 
    "profile_source"=>"profile_source", 
    "profile_status"=>"profile_status",    
    "meeting_type"=>"meeting_type",
    "meeting_date"=>"meeting_date",
    "meeting_time"=>"meeting_time",
    "meeting_place"=>"meeting_place",
    "rejection_reason"=>"rejection_reason",
    "rejection_reason_comments"=>"rejection_reason_comments"
);

//Update in current profile.
$server = new Server($mysqli);
$server->AddParam("PID",getKeyValue($data,"unique_id"));
$comments_data= array();    
foreach($data as $key => $value){        
    $final_col=getKeyValue($col_comments,$key);        
    $final_value=getKeyValue($data,$final_col);        
    if(strlen($final_value)>0){
        array_push($comments_data,$final_value);
    }    
}

$server->AddParam("Comments",implode(" : ",$comments_data));
$server->AddParam("ADDED BY",$current_user);
$server->AddParam("Date",date('Y-m-d H:i:s'));
$message1=$server->InsertQuery("tblcomments");    
$comment_status='Comment has been added';

if($copy_profile=="on"){

    

    $server = new Server($mysqli);
    $server->AddParam("PID",getKeyValue($data,"profile_shortlisted_id"));
    $comments_data= array();
        
    foreach($data as $key => $value){        
        $final_col=getKeyValue($col_comments1,$key);        
        $final_value=getKeyValue($data,$final_col);        
        if(strlen($final_value)>0){
            array_push($comments_data,$final_value);
        }    
    }
    
    $server->AddParam("Comments",implode(" : ",$comments_data));
    $server->AddParam("ADDED BY",$current_user);
    $server->AddParam("Date",date('Y-m-d H:i:s'));
    $message1=$server->InsertQuery("tblcomments");    
    $comment_status='Comment has been added';
}

function parseInput($param) {
    if(isset($_REQUEST[$param]) && $_REQUEST[$param]!=''){
        return $_REQUEST[$param];
    }else{
        return '';
    }
} 
$server = new Server($mysqli);
foreach($data as $key => $value) {          
    if (array_key_exists($key, $proposalheader)){
        $server_header=$proposalheader[$key];  
        
        if(strlen($server_header)>0){            
            
            //echo $server_header."\n";  //for checking if value is coming or not.
            $server->AddParam($server_header,$data[$key]);    
        }
    }
}

$message_status='';
if(empty($uniqueId)){
    
    $server->AddParam("ADDED BY",$current_user);
    $server->AddParam("DATE SENT",date('Y-m-d H:i:s'));
    $message1=$server->InsertQuery("tblproposal");
    $message_status='Proposal has been added';
}else{
    $server->AddParam("MODIFIED BY",$current_user);
    $server->AddParam("MODIFIED DATE",date('Y-m-d H:i:s'));
    $server->AddParam("ID",$uniqueId,true);
    $message1=$server->UpdateQuery("tblproposal");
    $message_status='Proposal has been Updated.';
}

if($message1["status"]){
    $message["status"]="success";
    $message["message"]=$message_status;
    $message["comment"]=$comment_status;
    $message["data"]=$message1["data"];
}else{
    $message["status"]="failure";
    $message["message"]=$message1["error"];
    //$message["failure"]=$data;
}

    echo json_encode($message);

?>