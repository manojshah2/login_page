<?php
$root = "./";  
include('config/config.inc.php');
include_once("config/db.php");
#### already login=====
if(isset($_SESSION[PRE.'emp_id']) && $_SESSION[PRE.'emp_id']!=''){
	header('location:home.php' );
} 
 
#### get login here==================
if(isset($_REQUEST['login_profile']))
{
	$emp_id = addslashes(trim($_REQUEST['emp_id']));
	$password = addslashes(trim($_REQUEST['password']));
	### validation condtion===========
	if(empty($emp_id)){
		$error = "Please enter login id";
	}
	else if(empty($password)){
		$error = "Please enter password";	
	}
	else{
		#### login code here=================
		$enc_password = my_crypt($password,'e');
		$select_data = "select * from login_user where trim(emp_id)='".$emp_id."'"; 
		$res_data = $mysqli->query($select_data);
		$fetch_data = $res_data->fetch_array();
		$emp_id_db = $fetch_data['emp_id'];
		$id = $fetch_data['id'];
		if($emp_id==$emp_id_db){
			#### 
			$select_data1 = "select * from login_user where trim(emp_id)='".$emp_id."' and password='".$enc_password."'"; 
			$res_data1 = $mysqli->query($select_data1);
			$fetch_data1 = $res_data1->fetch_array();
			$id_check = $fetch_data1['id']; 
			if($id_check!=''){ 
				if($fetch_data['user_status']=='Deactive'){
					$error = "Your account has been deactivated.";		
				}
				if($fetch_data['user_status']=='Active'){
					$_SESSION[PRE.'id'] = $id;
					$_SESSION[PRE.'emp_id'] = $emp_id;
					$_SESSION[PRE.'name'] = $fetch_data['name'];
					$_SESSION[PRE.'user_type'] = $fetch_data['user_type'];
					### redirect to landing page

					### add logs
					$server = new Server($mysqli);
					if( $server->IsConnected()){
						$server->AddParam("IP Address",$_SERVER["REMOTE_ADDR"]);
						$server->AddParam("Login Id",$emp_id);

						if($server->InsertQuery("tblloginlogs")){
							
						}					

					}
					header('location:home.php');
				}
			}else{
				$error = "Wrong password.";	
			} 
		}else{
			$error = "Login ID not exist.";	
		}
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet"/>
   <title>Login</title>
  </head>
	<body class="body_bg"> 
		<div class="container" > 
			<div class="row m_top_15" > 
				<div class="col-xl-8 offset-xl-2 py-5"> 
				  	<!-- We're going to place the form here in the next step --> 
				    <div class="controls frm_container" >
				    	<center><h4>Login</h4></center>  
				    	<center><div class="messages text-danger"><?php if(isset($error))echo $error;?></div> </center>
				    	<br> 
				      	<form id="contact-form" method="post" action="" role="form" enctype="multipart/form-data">
					        <div class="row">
					        	<div class="col-md-3">
					                <div class="form-group">
					                    <label for="emp_id">Login ID *</label> 
					                </div>
					            </div> 
					            <div class="col-md-6">
					                <div class="form-group"> 
					                    <input  type="text" name="emp_id" class="form-control" required="required" value="<?php if(isset($_REQUEST['emp_id']))echo $_REQUEST['emp_id'];?>"> 
					                </div>
					            </div> 
					        </div>
					        <div class="row">
					        	<div class="col-md-3">
					                <div class="form-group">
					                    <label for="password">Password *</label> 
					                </div>
					            </div> 
					            <div class="col-md-6">
					                <div class="form-group"> 
					                    <input  type="password" name="password" class="form-control" required="required" value="<?php if(isset($_REQUEST['password']))echo $_REQUEST['password'];?>"> 
					                </div>
					            </div> 
					        </div> 
					        <div class="row">
					        	<div class="col-md-9 text-right" style="padding-top: 10px; ">
					                <div class="form-group"> 
					                    <input type="submit" name="login_profile" class="btn btn-success btn-send" value="Login">&nbsp;&nbsp;&nbsp;
					                    <a href="javascript:void(0);" onclick="window.location.href=''" class="btn btn-success btn-send">Cancel</a>
					                </div>
					            </div> 
					        </div>
				      	</form> 
				    </div> 
				</div> 
			</div> 
		</div> 
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
  	</body>
</html>