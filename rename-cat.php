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

  $data['allcats'] = $cat->getAllCategory();
   
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

 	<form class="all add-cat" action="edit-catname.php" method="post">
 	
   	<fieldset>
    	<legend>Edit Category</legend>
      <table>
    		<tr>
        		<td>Checkbox</td>
        		<td>Number</td>		
        		<td>Category Name</td>
        	</tr>

        	<?php 
        foreach ($data['allcats'] as $value) {
          # code...
          $i=0;
        ?>
          <tr>
            <td>
              <input type="radio" name="catid" value="<?php  echo $value['category_id']; ?>"><br>

            </td>
            
            <td> 
               <?php echo $i; ?>
            </td>   
            
            <td>
              <?php echo $value['category_name']; ?>
            </td>
          </tr>
          <?php $i++; }?>


      	</table>

    		<br>
    		<input class="btn btn-default" type="submit" name="submit" value="Update"/> 
        <a class="btn btn-default back-btn" href="updatecat.php" role="button"><-Back</a>
    </fieldset>
  </form>

</body>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>