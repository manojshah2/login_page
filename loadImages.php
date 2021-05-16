<?php
include('config/config.inc.php');
include_once("config/db.php");

header('Content-type: application/json');
header("access-control-allow-origin: *");

if (isset($_REQUEST['pid'])){
    $id=$_REQUEST['pid'];
    $image_arr=$mysqli->query("select ID,`IMG PATH`,`MAIN PHOTO` from tblimages where PID=".$id);
    $data=[];
    while($row =$image_arr->fetch_array()){        
        $imgData['id']=$row['ID'];
        $imgData['path']=$row['IMG PATH'];
        $imgData['main_photo']=$row['MAIN PHOTO'];
        array_push($data,$imgData);
    }    
    echo json_encode($data);	 
    return;
}else{
    $message["status"]='failure';
    $message["message"]="Unable to identify profile id";
    echo json_encode($message);	 
    return;
}
?>