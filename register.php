<?php

$root = "./";  
include('config/config.inc.php');
include_once("config/db.php");

    if(isset($_POST["empName"])){
        //requested action is post the add the user.
        $name=$_POST["empName"];
        $password=$_POST["password"];
        $confirmpassword=$_POST["confirmpassword"];

        if($password!=$confirmpassword){
            echo "<div class='row'><div class='col-md-4'></div><div class='col-md-4'><div class='alert alert-danger'>Password and Confirm Password not matching</div></div></div>";
        }

        $server = new Server($mysqli);
        if( $server->IsConnected()){
            $server->AddParam("emp_id",$name);
            $server->AddParam("name",$name);
            $server->AddParam("password",my_crypt($password,'e'));

            if($server->InsertQuery("login_user")){
                header('location:index.php');        
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
        <div class="container">
            <div class="row m_top_15">
                <div class="col-xl-8 offset-xl-2 py-5">
                    <div class="controls frm_container">
                        <form autocomplete="off" id="registerForm" method="post" action="">
                            <div>
                                Register YourSelf
                            </div>
                            <div class="row form-group">
                                <label>Name</label>
                                <input type="text" autocomplete="nope" id="empName" name="empName" class="form-control"/>
                            </div>
                            <div class="row form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control"/>
                            </div>
                            <div class="row form-group">
                                <label>Confirm Password</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" class="form-control"/>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <input type="submit" id="register" class="btn btn-primary" value="Register"/>
                                    <input type="button" id="cancel" class="btn btn-primary" value="Cancel"/>                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>