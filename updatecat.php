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
 	<title>Update Category</title>
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
 </head>
 <body>
 	<nav class="navbar navbar-default navbar-fixed-top">
      <?php include('include/nav2.php'); ?>
    </nav>
 <form class="all add-pan">
	 <fieldset>
	 <legend>Admin Panel</legend>
		 <div>
		 	<ul>
		 		<li class="edit-cat"><a href="addnew.php"> Add New Category</a> </li>
		 		<li class="edit-cat"><a href="rename-cat.php"> Rename Category</a> </li>
		 		<li class="edit-cat"><a href="editcat.php">Edit Or Update Category </a></li>

		  	</ul> 

		 </div>
	</fieldset>
</form>
 </body>
 <script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
 </html>