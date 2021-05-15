<?php
session_start();
date_default_timezone_set('asia/kolkata'); // use according to country
$root_name="";
//default database
if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='localhost:80' || $_SERVER['HTTP_HOST']=='localhost:8000'){
	$default_db = array(
	    "Database_Server" => "localhost",
	    "User_Id" => "root",
	    "Password" => "",
	    "Database_Name" => "dbluv",
	);
	$root_name="http://localhost/";
}else{
	$default_db = array(
	    "Database_Server" => "localhost",
	    "User_Id" => "luvuser",
	    "Password" => "luvuser",
	    "Database_Name" => "dbluv",
	);
	$root_name="http://crm.luvmatrimony.com/";
}

$default_db_server      = $default_db['Database_Server'];
$default_db_user        = $default_db['User_Id'];
$default_db_password    = $default_db['Password'];
$default_db_name        = $default_db['Database_Name'];

$mysqli = new mysqli($default_db_server, $default_db_user, $default_db_password, $default_db_name);
 
// constant for prefix for session variable======
define('PRE','al_');

### check login or not=============
function is_login($root='./'){
	if(!isset($_SESSION[PRE.'emp_id'])){
		header('location:'.$root.'index.php');
	}
}

function is_admin($root="./"){
	if(!isset($_SESSION[PRE.'user_type']) || $_SESSION[PRE.'user_type']!="Admin"){
		header('location:'.$root.'index.php');
	}
}

function getCurrentUser(){
	if(isset($_SESSION[PRE.'name'])){
		return $_SESSION[PRE.'name'];
	}
}

function isAdmin(){
	if(isset($_SESSION[PRE.'user_type']) && $_SESSION[PRE.'user_type']=="Admin"){
		return true;
	}else{
		return false;
	}
}

### encription and decription function for password========
function my_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';
 
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
 
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    return $output;
}
?>