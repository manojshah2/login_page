<?php
$root = "./";
include_once($root."config/config.inc.php");
unset($_SESSION[PRE.'emp_id']);
unset($_SESSION[PRE.'id']);
unset($_SESSION[PRE.'name']);
unset($_SESSION[PRE.'user_type']);
header('location:index.php');
?> 

