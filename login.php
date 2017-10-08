<?php
	//Start session
	session_start();
	if(isset($_GET["msg"]))
	{
		if($_GET["msg"]=="Wrong")
		{
			echo "<script>";
			echo "alert('Incorrect Password');";
			echo "</script>";
		}
	}
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Upload File</title>

		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/login.css">
    </head>

    

	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
	      <?php include('include/nav.php'); ?>
	    </nav>

		<center>

			<div class="divstyle">
				<form id="login" method="post" action="login_back.php">
					
					<br><label>User Name:</label><br/><input type="text" name="username" id="loginEmail" /><br/>
					<label>Password:</label><br/><input type="password" name="password" id="loginPass" /><br/>
					<br><input class="btn btn-default" type="submit" name="submit" value="Login"/><br><br>

				</form>
			</div>
		</center>

	</body>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</html>