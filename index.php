<?php require "includes/common.php";
if(isset($_SESSIONS['email']))
{header('location:products.php');}
?>
<!DOCTYPE html>
<html>



<head> 
  <title>Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>



<body>
  
  <?php include "includes/header.php";?>
  
  <div id="banner-image">
    <div class="container">
	  <div id="banner-content">
	    <h1>We sell lifestyle.</h1><p>Flat 40% OFF on premium brands.</p><a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
	  </div>
	</div>
  </div>
  
  <div class="container">
    <div class="row">
	  <div class="col-sm-4 col-xs-12">
	    <div class="thumbnail">
	      <a href="#" id="thumb"><img src="module_2_assignment/camera.jpg">
		    <div class="caption"><h2>Cameras</h2><p>Choose among the best available in the world.</p>
		    </div></a>
	    </div>
	  </div>	
	  <div class="col-sm-4 col-xs-12">  
		<div class="thumbnail">
	      <a href="#" id="thumb"><img src="module_2_assignment/watch.jpg">
		    <div class="caption"><h2>Watches</h2><p>Original watches from the best brands.</p>
		    </div></a>
	    </div>
	  </div>
	  <div class="col-sm-4 col-xs-12">  
		<div class="thumbnail">
	      <a href="#" id="thumb"><img src="module_2_assignment/shirt.jpg">
		    <div class="caption"><h2>Shirts</h2><p>Our exquisite collection of shirts.</p>
		    </div></a>
	    </div>
	  </div>	
    </div>
  </div>
  
  <?php include "includes/footer.php";?>
  
</body>



</html>