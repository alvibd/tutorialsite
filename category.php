<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/carstyle.css">

</head>

<?php 
    require_once("class/Tutorial.php");
    require_once("class/category.php");

    $allTutorials= new Tutorial();
    $allCategory = new Category();

    $data["allTut"]= $allTutorials->getTutorialByCategoryId($_GET['id']);
    if(isset($_GET["tutorial"]))
     {
        $data["currTutorial"]= $allTutorials->getTutorialById($_GET["tutorial"])[0];
    }
    $data["currCategory"]=$allCategory->getCategoryName($_GET['id']);
?>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <?php include('include/cat_nav.php'); ?>
    </nav>
    <div id="wrapper" class="all">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <?php 
              echo "<h1 id='cat-titel'>".$data['currCategory']."</h1>";
              foreach ($data["allTut"] as $value) {
                echo "<li id='side-menu'><a href='category.php?id=".$_GET["id"]."&tutorial=".$value['tutorial_id']."'>" . $value['tutorial_name']. "</a></li>";
                }
              ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="name-frame">
                            <?php 
                            if(isset($_GET["tutorial"]))
                            {
                              echo '<h2><em>'.$data["currTutorial"]["tutorial_name"].' </em></h2>';//get tutorial name for the tutorial video.
                            }
                            
                          ?>
                        </div>

                        <div class="video-frame">
                            <?php 
                              if(isset($_GET["tutorial"])){
                                if ($data["currTutorial"]["video_link"]!=NULL) {
                                    echo '<iframe class="frame" width="65%" height="400px" src="https://www.youtube.com/embed/'.$data["currTutorial"]["video_link"].'" frameborder="0" allowfullscreen></iframe>';
                                }
                              }
                            ?>
                        </div>
                          
                            
                        <div class="description-frame">
                            <?php 
                              if(isset($_GET["tutorial"]))
                              {
                                echo '<div class="code-frame">'.$data["currTutorial"]["description"].' </div>';//get description for the tutorial video.
                              }
                              
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
