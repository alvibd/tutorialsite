<?php
 
 session_start();
 if (!isset($_SESSION['SESS_MEMBER'])) {
  # code...
 	header('Location:login.php');
  
 } 

 ?>
<?php 
  
  require_once('class/category.php');
  $cat= new category();
  $catid= $_GET['catid'];
  $catname= $_POST['catname']; 
  $data= $cat->editCategory($catid, $catname);
  header('Location: updatecat.php');
   
?>
