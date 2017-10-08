<?php 
   session_start();
   if (!isset($_SESSION['SESS_MEMBER'])) {
    # code...
    header('Location:../login.php');

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
    <form method="get" action="" class="col s12">
      <div class="input-field">
        <input type="text" name="search" style="width: 200px;">
        <input type="submit" name="submit" id="search" value="Search">
        <label for="search">Search</label>
      </div>
      <div class="container">
          <?php 
            if (isset($_GET['submit'])) {
              require_once("../class/category.php");
              $cat = new Category();
              $i=0;
              # code...
              //include("class/database.php");
              $search=$_GET['search'];
              $db = new Database();

              $results= $db->select("SELECT category_id,tutorial_id, tutorial_name FROM tutorial_table WHERE tutorial_name LIKE '%".$search."%'");
              //var_dump($results);
              if (empty($results)) {
                # code...
                echo "<h3>no results found</h3>";
              }else{
                echo '<table class="responsive-table hoverable bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Category name</th>
          <th>tutorial name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      </tbody>';
              foreach($results as $value)
              {
                echo "<tr>";
                echo '<td>'.$i.'</td>';
                echo '<td>'.$cat->getCategoryName($value['category_id']).'</td>';
                echo '<td><a href="edittutorial.php?id='.$value["tutorial_id"].'">'.$value['tutorial_name'].'</a></td>';
                echo '<td><a href="edittutorial.php?id='.$value["tutorial_id"].'">Edit</a></td>';
                echo '<td><a href="deletetutorial.php?id='.$value["tutorial_id"].'">Delete</a></td>';
                echo "</tr>";
                $i++;
              }
              echo "</tbody>
                    </table>";
            }
            }
           ?>
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
        
</script>
</html>