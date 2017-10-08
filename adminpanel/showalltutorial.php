<?php 
	 session_start();
	 if (!isset($_SESSION['SESS_MEMBER'])) {
	  # code...
	 	header('Location:../login.php');
 } 
 ?>
 <?php 
    require_once('../class/database.php');
    require_once('../class/category.php');
    $cat= new Category();
    $db= new Database();

    $data['alltuts']= $db->select("SELECT * FROM tutorial_table");
    $i=0;
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
    <table class="responsive-table hoverable bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Category name</th>
          <th>tutorial name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php foreach ($data['alltuts'] as $value) {?>
        <td><?php echo $i; ?></td>
        <td><?php echo $cat->getCategoryName($value['category_id']); ?></td>
        <td>
          <?php echo '<a href="edittutorial.php?id='.$value["tutorial_id"].'">'.$value["tutorial_name"].'</a>'; ?>
        </td>
        <td><?php echo '<a href="edittutorial.php?id='.$value["tutorial_id"].'">Edit</a>'; ?></td>
        <td><?php echo '<a href="deletetutorial.php?id='.$value["tutorial_id"].'">Delete</a>'; ?></td>
        </tr>
        <?php $i++;
        } ?>
      </tbody>
    </table>
  </div>

</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $(".button-collapse").sideNav();
  });
        
</script>
</html>