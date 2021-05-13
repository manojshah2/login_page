<?php
$root = "./";  
include('config/config.inc.php');
$root='./';
is_login($root); 

#### Change password here===================
if(isset($_REQUEST['change_password'])){
	global $mysqli;
	$old_password = addslashes(trim($_REQUEST['old_password']));
	$new_password = addslashes(trim($_REQUEST['new_password'])); 
	$confirm_password = addslashes(trim($_REQUEST['confirm_password']));  
	 
	if(empty($old_password)){
		$error = "Please enter old password!";
	}
	elseif(empty($new_password)){
		$error = "Please enter new password!";
	}
	elseif(empty($confirm_password)){
		$error = "Please enter confirm password!";
	}
	elseif(!empty($confirm_password) && $confirm_password!=$new_password){
		$error = "Confirm password do not match!";
	}
	else
	{
		$enc_old_password = my_crypt($old_password,'e');
		$select_data = "select id from login_user where password='".$enc_old_password."' and id='".$_SESSION[PRE.'id']."'";
		$res_sele = $mysqli->query($select_data);
		$total_row = $res_sele->num_rows;
		if($total_row<1){
			$error = "Old password is wrong.";
		}else{
			$enc_new_password = my_crypt($new_password,'e');
			$update_data = "update login_user set password='".$enc_new_password."' where id='".$_SESSION[PRE.'id']."'";
			$res = $mysqli->query($update_data); 
			setcookie('update', 'success', time()+2); // 86400 = 1 day
			header('location:change_password.php');	
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
   <title>change Password</title>
   <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/css/fm.tagator.jquery.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript" src="/scripts/js/variables.js?ver=1.0000001"></script>
  </head>
	<body class="page-top">
		<div id="wrapper">
			<?php include 'include/sidebar.php';?>
			<div id="content-wrapper" class="d-flex flex-column">
				<div id="content">
					<?php include 'include/topbar.php';?>
					<div class="container-fluid" > 
						<div class="row m_top_15"> 
						<div class="col-xl-8 offset-xl-2 py-5"> 
							<!-- We're going to place the form here in the next step --> 
							<div class="controls frm_container" > 
								<center><h4>Change Password</h4></center> 
								<br>
								<center><div class="messages text-danger"><?php if(isset($error))echo $error;?></div> </center> 
								<?php
								if(isset($_COOKIE['update']) && $_COOKIE['update'] == 'success'){ 
									echo '<center><div class="messages text-success">Password has been changed successfully.</div></center>';  
								} 
								?>	
								<form name="search_frm" method="post" action="">
									<div class="form">
										<div class="form-group row"> 
											<label for="old_password">Old Password <span class="red">*</span></label>
											<?php 
											$old_password = '';
											if(isset($_REQUEST['old_password'])) $old_password = $_REQUEST['old_password']; 
											?> 
											<input type="password" name="old_password" class="form-control" value="<?php echo $old_password;?>"> 
										</div> 
										<div class="form-group row"> 
											<label for="new_password">New Password  <span class="red">*</span></label>
											<?php 
											$new_password = '';
											if(isset($_REQUEST['new_password'])) $new_password = $_REQUEST['new_password']; 
											?>    
											<input type="password" name="new_password" class="form-control" value="<?php echo $new_password;?>" placeholder="" autocomplete="off">
										</div>
										<div class="form-group row"> 
											<label for="confirm_password">Confirm Password  <span class="red">*</span></label>
											<?php
											$confirm_password = ''; 
											if(isset($_REQUEST['confirm_password'])) $confirm_password = $_REQUEST['confirm_password']; 
											?>    
											<input type="password" name="confirm_password" class="form-control confirm_password" value="<?php echo $confirm_password;?>" placeholder="" autocomplete="off">
										</div>
									</div> 
									<div class="form-row"> 
										<div class="form-group col-md-12" style="text-align:center;margin-top: 20px;"> 
											<a href="" class="btn btn-secondary btn-sm">Cancel</a>
											&nbsp;&nbsp;&nbsp;&nbsp;
											<button type="submit" name="change_password" class="btn btn-primary btn-sm">Change Password</button>
										</div>
									</div> 
								</form> 
							</div> 
						</div> 
					</div> 
					</div>
				</div>
			</div>
		</div>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
  	</body>
</html>