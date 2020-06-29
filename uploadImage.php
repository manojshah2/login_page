<?php
$root = "./";  
include('config/config.inc.php');
include_once("config/db.php");

header('Content-type: application/json');
header("access-control-allow-origin: *");

if(isset($_REQUEST['id'])){
	$id=trim($_REQUEST['id']);
	$path = 'images/'.$id;
	$ext_arr = array('jpg','jpeg','png','gif');
    $msg='';$err='';$succ='';
    
	if(count($_FILES['file']['name'])==0){        
        $message["status"]='failure';
        $message["message"]='Please choose image';
        echo json_encode($message);	 
        return;
	}else{ 
        // upload multiple files===========
        
	    for($j=0;$j<count($_FILES['file']['name']); $j++){ 

	        $file_name = $_FILES['file']['name'][$j];
	        $file_name = str_replace("'", "-", $file_name);
	        $file_tmp =$_FILES['file']['tmp_name'][$j];
	        $tmp = explode('.', $file_name);
	        $file_extension = strtolower(end($tmp)); 
	       
	        if(!empty($file_name)){
	            if(!in_array($file_extension, $ext_arr) && $file_name!=''){
                    $err.= "Wrong file uploaded. Only ".implode(',',$ext_arr)." allowed!, "; 
                    
                    $message["status"]='failure';
                    $message["message"]=$err;
                    echo json_encode($message);	 
                    return;
	            }else{ 
	                if (!file_exists($path)) {
	                    mkdir($path, 0777, true); 
	                } 
	                ### clean file name============ 
	                $clean_file_name = $file_name;
                    $full_path = $path.'/'.$clean_file_name;
                    
                    $count=$mysqli->query("select count(*) as count from tblImages where PID=".$id);
                    if($count->fetch_array()['count']>9){
                        $message["status"]='failure';
                        $message["message"]='Images upload limit exceeded';
                        echo json_encode($message);	 
                        return;
                    }

	                 
	                if(move_uploaded_file($file_tmp, $full_path)) 
	                { 
                        $server = new Server($mysqli);
                        if( $server->IsConnected()){
                            $server->AddParam("PID",$id);
                            $server->AddParam("IMG PATH",$full_path);
                            if($server->InsertQuery("tblImages")){                                
                                $message["status"]='success';
                                $message["message"]=$full_path;
                                echo json_encode($message);	 
                                return;
                            }
                            else{
                                $message["status"]='failure';
                                $message["message"]='Image'.$file_name.' Not Uploaded';
                                echo json_encode($message);	 
                                return;
                            }
                        }else{
                            $message["status"]='failure';
                            $message["message"]='Image'.$file_name.' Not Uploaded';
                            echo json_encode($message);	 
                            return;
                        }	                    
	                }else{ 
                        $err.= "File ".$file_name." not uploaded. Please try again, ";
                        $message["status"]='failure';
                        $message["message"]=$err;
                        echo json_encode($message);	 
                        return; 
	                }  
	                   
	            }   
	        }else{
                $err.= 'Please choose file.';
                $message["status"]='failure';
                $message["message"]=$err;
                echo json_encode($message);	 
                return; 
                
	        } 
	    }	    
	}
}

?>