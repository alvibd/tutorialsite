<!DOCTYPE html>
<html>
<head>
	<title>
			Homepage
	</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <?php include('include/nav.php'); ?>
    </nav>


	<h1 id="ini-title"><marquee  id="hi">Welcome to the Tutorial Site</marquee></h1>
	<div class="container">
		<div class="row category">
			<?php 
      			foreach ($data["allCat"] as $value) {
			?>
  					<div class="col-sm-3 col-xs-6">
						<div class="item">
              				<?php echo '<a href="category.php?id='.$value['category_id'].'"" class="element"><h2>' . $value['category_name']. '</h2></a>'; ?>
						</div>
					</div>
			<?php 
          		}	
           	?>
		</div>
	</div>

</body>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>