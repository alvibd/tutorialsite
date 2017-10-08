

<!DOCTYPE html>
<html>
  <head>
  	<title></title>
  	<link rel="stylesheet" href="css/bootstrap.css" />
  	<link rel="stylesheet" type="text/css" href="css/search.css">
  </head>

  <body>
  	
      <nav class="navbar navbar-default navbar-fixed-top">
       <?php include('include/nav.php'); ?>
      </nav>
    <div class="container">
    	<div class="col-lg-offset-2 col-lg-8" id="search">
        <form action="search.php" method="get">
          <input type="text" name="search" value="" placeholder="Search for..." style=" width:500px;">
          <input class="btn btn-default" type="submit" name="submit" value="Search">
        </form>
        
      </div>
    </div>
    <div class="container">
        <ol>
          <?php 
            if (isset($_GET['submit'])) {
              require_once("class/category.php");
              $cat = new Category();
              # code...
              //include("class/database.php");
              $search=$_GET['search'];
              $db = new Database();

              $results= $db->select("SELECT category_id,tutorial_id, tutorial_name FROM tutorial_table WHERE tutorial_name LIKE '%".$search."%'");
              //var_dump($results);
              if (empty($results)) {
                # code...
                echo "<h3>no results found</h3>";
              }
              foreach($results as $result)
              {
                echo '<li><span class="categoryname">' . $cat->getCategoryName($result["category_id"]) . '</span> &nbsp; <span class="tutorialname"><a href="category.php?id=' . $result["category_id"] . '&tutorial=' .$result["tutorial_id"] .'">'. $result["tutorial_name"] . '</a></span></li>';
              }
            }
           ?>
        </ol>
      </div>

  </body>

  <script src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</html>