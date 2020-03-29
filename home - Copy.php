<?php
$root = "./";  
include('config/config.inc.php');
$root='./';
is_login($root); 
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
   <title>Admin Page</title>
  </head>
	<body>
		<div class="header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky">
		<a class="navbar-brand" href=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item  active">
					<a class="nav-link" href="home.php"> Home </a>
				</li> 
			   <?php
		        if(isset($_SESSION[PRE.'emp_id'])){
		        ?> 
		          <li class="nav-item">
		            <a class="nav-link" href="logout.php"> Logout </a>
		          </li> 
		        <?php
		          }
		        ?>
			</ul>
			<span class="navbar-text">
			<?php
	        if(isset($_SESSION[PRE.'emp_id'])){
	        	echo 'Welcome '.$_SESSION[PRE.'emp_id'];
		  	}
		  	?> 
			</span>
		</div>
	</nav>
	</div> 
		<div class="container" > 
			<div class="row m_top_15" > 
				<div class="col-md-12">
				    <center><h4>Welcome Home</h4></center> 
				</div> 
			</div> 
		</div> 
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
  	</body>
</html>