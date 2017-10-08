<?php
//Start session
session_start();
 
//Include database connection details
require_once("class/database.php");
 
///Sanitize the POST values
$db= new database();
$username = $_POST['username'];
$password = $_POST['password'];

//Create query
$qry= "SELECT COUNT(*) FROM admin WHERE user_name='$username'AND password='$password'";
$field = $db->select($qry);

if($field[0]["COUNT(*)"]=="1")
{
	$_SESSION['SESS_MEMBER'] = $username;
	header("location:adminpanel/panelhome.php");
	exit();
}
else
{
	header("location:login.php?msg=wrong");
	exit();
}

