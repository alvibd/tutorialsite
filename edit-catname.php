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
  $catid= $_POST['catid'];
  $data = $cat->getCategoryName($catid);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rename category</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <?php include('include/nav2.php'); ?>
  </nav>
  
  <form class="all add-cat" action="update-catname.php?catid=<?php echo $catid; ?>" method="POST">
  	<fieldset>
  		<legend>Rename category</legend>
  		<label>Category Name: </label>
  		<input type="text" name="catname" value="<?php echo $data; ?>" style="width:40%"><br><br>
  		<input class="btn btn-default" type="submit" name="submit" value="Rename">
      <a class="btn btn-default back-btn" href="rename-cat.php" role="button"><-Back</a>
  	</fieldset>
  </form>
</body>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>