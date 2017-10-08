<?php 
	 session_start();
	 if (!isset($_SESSION['SESS_MEMBER'])) {
	  # code...
	 	header('Location:../login.php');
    if (isset($_GET['id'])) {
      # code...
      echo "<script> alert('tutorial already exists')</script>";
    }
  
 } 
 ?>

<!DOCTYPE html>
<html>
<head>
 	<title>Panel Home</title>
 	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="../css/panel.css">
  	<script src="../js/jquery.js"></script>
  	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
  	<meta charset="utf-8">
</head>
<body>
	<header class="container">
		<h1 id="logo" class="col l12 m12 s12">Tutorial Site</h1>
	</header>
	<nav class="container">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="panelhome.php">Panel home</a></li>
        <li><a href="adminsearch.php">Search</a></li>
        <li><a href="showalltutorial.php">Tutorial archive</a></li>
        <li><a href="../logout.php">Log out</a></li>
      </ul>
	  <ul id="slide-out" class="side-nav">
	    <li><a href="panelhome.php">Panel home</a></li>
        <li><a href="adminsearch.php">Search</a></li>
        <li><a href="showalltutorial.php">Tutorial archive</a></li>
        <li><a href="../logout.php">Log out</a></li>
	  </ul>
  	  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

    </div>
  </nav>

  <div class="container">
    <form action="createtutorial.php" method="post" class="col s12">
    	<div class="row">
    		<div class="input-field col s12">
    			<input name="tname" id="tname" type="text">
    			<label for="tname">Tutorial Name</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input name="vlink" id="vlink" type="text">
    			<label for="vlink">Video link</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<label for="editor1">Description</label><br><br>
    			<textarea id="editor1" class="materialize-textarea" name="description"></textarea>
    		</div>
    	</div>
    	<div class="row">
    		<button class="btn waves-effect waves-light" type="submit" name="action">Add tutorial
 			 </button>
    	</div>
    </form>
  </div>
</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $(".button-collapse").sideNav();
  });
        CKEDITOR.replace( 'editor1' );
</script>
</html>