<?php 

	include("database.php");

	$db= new database();

	$username= $_POST["uname"];
	$password= $_POST["pass"];
	$retyped= $_POST["retyped"];

	if ($password == $retyped) {
		# code...
		db->insert("admin", "user_name, password", "'".$username."','".$password."'");
		header('Location: login.html');

	}
	else header('Location: registration.html');

 ?>