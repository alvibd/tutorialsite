<?php
 
 session_start();
 if (!isset($_SESSION['SESS_MEMBER'])) {
  # code...
  header('Location:login.php');
  
 } 
  $catid= $_GET['id'];
?>

<!DOCTYPE html>
 <html>
 <head>
  <title>Update Tutorial</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
 </head>

 <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <?php include('include/nav2.php'); ?>
    </nav>
    
  <center>
    <form class="all add-tut" action="addtutorial.php?id=<?php echo $catid; ?>" method="post">
    
      <fieldset>
        <legend>Update Tutorial</legend>
         
        <label>Tutorial Name: &nbsp;</label>
        <input type="text" name="tname" style="width:40%"> <br><br>

        <label>Video Link: &nbsp; &nbsp; &nbsp;</label>
        <input type="text" name="vlink" placeholder="Only the last part(after the final /) ex: saxBXBb-f8c"style="width:40%"> <br><br>

        <label>Description: &nbsp;</label> <br><br>
        <textarea name="description" id="editor1"rows="4" cols="50"></textarea>
        <br><br>
       
        <input class="btn btn-default" type="submit" name="submit" value="ADD"/> 
        <a class="btn btn-default back-btn" href="editcat.php" role="button"><-Back</a>
        </fieldset>

     </form>
  </center>
</body>

 <script type="text/javascript">
  CKEDITOR.replace( 'editor1' );
 </script>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
 </html>