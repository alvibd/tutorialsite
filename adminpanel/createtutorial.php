<?php 
	
	session_start();
	 if (!isset($_SESSION['SESS_MEMBER'])) {
	  # code...
	  	header('Location:../login.php');
	  
	 }

	require_once('../class/Tutorial.php'); 	
	$catid= $_SESSION['catid'];
	$tname= $_POST['tname'];
	$vlink= $_POST['vlink'];
	$description= $_POST['description'];

	$tut= new Tutorial();

	$data= $tut->getTutorialByCategoryId($catid);

	foreach ($data as $value) {
		# code...
		if ($value['tutorial_name']== $tname) {
			# code...
			header('Location: addnewtutorial.php?id=exists');
			exit();
		}
	}

	$tut->addTutorial($tname, $vlink, $catid, $description);
	//session_unset($_SESSION['catid']);
	header('Location: showalltutorial.php');

 ?>