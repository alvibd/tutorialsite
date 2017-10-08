<?php
 
 session_start();
 if (!isset($_SESSION['SESS_MEMBER'])) {
  # code...
 	header('Location:login.php');
  
 } 

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<?php 
 		if (isset($_GET['id'])) {
 			# code...
 			echo "<script> alert('This Category already exists'); </script>";
 		}
 	 ?>
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
 </head>

 <body>
  	<nav class="navbar navbar-default navbar-fixed-top">
      <?php include('include/nav2.php'); ?>
    </nav>
    	
 	<form class="all add-cat" action="createcat.php" method="POST">
 		<fieldset>
 			<legend>Add New Category</legend>
	 		<label>Category Name:</label>
	 		<input type="text" name="cname" style="width:40%"> <br> <br>
	 		<input class="btn btn-default" type="submit" name="submit" value="Create"/> 
	 		<a class="btn btn-default back-btn" href="updatecat.php" role="button"><-Back</a>
 		</fieldset>
 	</form>

</body>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>