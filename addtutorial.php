<?php 
	
	session_start();
	 if (!isset($_SESSION['SESS_MEMBER'])) {
	  # code...
	  	header('Location:login.php');
	  
	 }

	require_once('class/Tutorial.php'); 	
	$catid= $_GET['id'];
	$tname= $_POST['tname'];
	$vlink= $_POST['vlink'];
	$description= $_POST['description'];

	$tut= new Tutorial();

	$tut->addTutorial($tname, $vlink, $catid, $description);
	header('Location: editcat.php');

 ?>