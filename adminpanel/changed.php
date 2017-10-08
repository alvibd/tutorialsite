<?php 
    # code...
    session_start();
    $npass=$_POST['npass'];
    $rpass=$_POST['rpass'];
    $user_name=$_SESSION['SESS_MEMBER'];
    
    if ($npass==$rpass) {
      # code...
      require_once("../class/database.php");
      $db= new Database();
      $db->update("admin","password","'$rpass'","user_name",$user_name);

      header("Location: panelhome.php");
      exit();
    }
    else header("Location: changepassword.php?id=mismatch");
 ?>