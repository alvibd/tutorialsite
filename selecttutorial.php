<?php
 session_start();
 if (!isset($_SESSION['SESS_MEMBER'])) {
  # code...
 	header('Location:login.php');
  //$catid= $_GET['id'];
  //echo "$catid";
 } 
?>

<?php 
  
  require_once('class/Tutorial.php');
  $cat= new Tutorial();

  $data['alltuts'] = $cat->getTutorialByCategoryId( $_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
<style>
    table, th, td 
    {
      border: 1px solid black;
        border-collapse: collapse;
    } 
  th, td 
    {
      padding: 10px;
    }
  </style>
	
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <?php include('include/nav2.php'); ?>
  </nav>
  <form class="all add-cat" action="edittutorial.php" method="post">
   	<fieldset>
    	<legend>Edit Tutorial</legend>
      <table>
    		<tr>
        	<td>Checkbox</td>
        	<td>Number</td>		
        	<td>Category Name</td>
        </tr>

      	<?php 
          foreach ($data['alltuts'] as $value) {
            $i=0;
        ?>

        <tr>
          <td>
            <input type="radio" name="tutid" value="<?php  echo $value['tutorial_id']; ?>"><br>
          </td>
          
          <td> 
             <?php echo $i; ?>
          </td>   
          
          <td>
            <?php echo $value['tutorial_name']; ?>
          </td>
        </tr>
        <?php $i++; }?>
      </table>

    		<br>
    		<input class="btn btn-default" type="submit" name="submit" value="Select"/> 
        <a class="btn btn-default back-btn" href="editcat.php" role="button"><-Back</a>
    </fieldset>
  </form>
</body>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>