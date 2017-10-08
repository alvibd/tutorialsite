<?php 
	
	session_start();
	 if (!isset($_SESSION['SESS_MEMBER'])) {
	  # code...
	  	header('Location:../login.php');
	  
	 }

	require_once('../class/Tutorial.php'); 	
	$tutid= $_GET['id'];
	$tname= $_POST['tname'];
	$vlink= $_POST['vlink'];
	$description= $_POST['description'];
	

	$tut= new Tutorial();

	$tut->editTutorial($tutid, $tname, $vlink, $description);
	header('Location: showalltutorial.php');

 ?>