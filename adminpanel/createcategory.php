<?php
 
 session_start();
 if (!isset($_SESSION['SESS_MEMBER'])) {
  # code...
 	header('Location:../login.php');
  
 } 

 ?>


<?php 

	$catname = $_POST['cname'];
	require_once("../class/category.php");

	$category = new category();
	$data= $category-> getAllCategory();
	foreach ($data as $value) {
		if($value['category_name']== $catname)
		{
			header('Location:addnew.php?id=exist');
			exit();

		}
	}
	$category-> addCategory($catname);
	$data= $category-> getAllCategory();

	foreach ($data as $value) {
		if($value['category_name']== $catname)
		{
			$_SESSION['catid']= $value["category_id"];
			header('Location:addnewtutorial.php');
			exit();

		}

		else {echo "error";}
	}
