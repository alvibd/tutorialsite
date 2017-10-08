<?php 
	session_start();
 	if (!isset($_SESSION['SESS_MEMBER'])) {
 		 # code...
 		header('Location:login.php');
   	} 
	$catid= $_POST['catid'];
?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>choose options</title>
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
 </head>

<body>
 	<nav class="navbar navbar-default navbar-fixed-top">
      <?php include('include/nav2.php'); ?>
    </nav>
    
 <form class="all add-cat">
	<fieldset>
		<legend>What do you want to do?</legend>
		<div>
		 	<ul>
				<li><a href="newtutorial.php?id=<?php echo $catid; ?>">Add new Tutorial</a></li>
				<li><a href="selecttutorial.php?id=<?php echo $catid; ?>">Edit tutorial</a></li>
				<li><a href="selecttodeletetutorial.php?id=<?php echo $catid; ?>">Delete Tutorial</a></li>
				<li><a href="#" onclick="myFunction()">Delete This Category</a></li>
			</ul> 
		</div>
		<a class="btn btn-default back-btn" href="editcat.php" role="button"><-Back</a>
	</fieldset>
</form>

</body>

<script>
	function myFunction() {
	    var r = confirm("Are you Sure!");
	    if (r == true) {
	        window.location="selecttodeletecategory.php?id=<?php echo $catid;?>";
	    } else {
	        alert("Delete Unsuccessfull");
	    }
	}
</script>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>