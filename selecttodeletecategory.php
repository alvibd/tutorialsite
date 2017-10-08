<?php
 
 session_start();
 if (!isset($_SESSION['SESS_MEMBER'])) {
  # code...
 	header('Location:login.php');
  //$catid= $_GET['id'];
  //echo "$catid";
 } 

 	$catid= $_GET['id'];

 	require_once("class/category.php");
 	$cat= new Category();
 	$cat->deleteCategory($catid);
 	header("Location: updatecat.php");

 ?>