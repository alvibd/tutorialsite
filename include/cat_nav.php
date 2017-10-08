<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="search"></span></a></li>
            <li><a href="#menu-toggle" id="menu-toggle">Side Bar</a></li>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catagory <span class="caret"></span></a>
              <ul class="dropdown-menu">
              	<?php 
        					require_once("class/category.php");
        					$allCategory= new Category();
        					$data["allCat"]= $allCategory->getAllCategory();

        				?>
              	<?php 
              		foreach ($data["allCat"] as $value) {
              			echo "<li><a href='category.php?id=".$value['category_id']."'>" . $value['category_name']. "</a></li>";
              		}
              		
               ?>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Try Editor <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tryit.php" target="_blank">HTML/CSS/Java Editor</a></li>
                <li><a href="https://www.ideone.com/" target="_blank">Other Editor</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="singin">SignIn</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
</div>