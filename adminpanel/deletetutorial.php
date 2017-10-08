<?php 
	
	session_start();
	 if (!isset($_SESSION['SESS_MEMBER'])) {
	  # code...
	  	header('Location:../login.php');
	  
	 }

	require_once('../class/Tutorial.php'); 	
	$tutid= $_GET['id'];
	

	$tut= new Tutorial();

	$tut->deleteTutorial($tutid);
	//echo $tutid;
	header('Location: showalltutorial.php');

 ?>