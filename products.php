<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>



<head> 
  <title>Products-Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>



<body>

  <?php include "includes/header.php"; include "check_if_added.php";error_reporting(0);?>
  
  <div class="container">
    <div class="jumbotron"><h1>Welcome to our Lifestyle Store.</h1><p>The best Cameras, Watches and Shirts for you. No need to hunt
around. We have all in one place.</p>
    </div>
  
    <div class="row text-center">
      <div class="col-md-3 col-sm-6">
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage.jpg" alt="Sony Alpha 100" class="img-thumbnail">
		  <div class="caption"><h3>Sony Alpha 100</h3><p>Price:Rs. 36000</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(1)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	      } else{ ?><a href="cart_add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
		</div>
	  </div>
	  <div class="col-md-3 col-sm-6">
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (1).jpg" alt="Canon EOS M5">
		  <div class="caption"><h3>Canon EOS M5</h3><p>Price:Rs. 39999</p></div>
	      <?php if (!isset($_SESSION['email'])) {?>
  		      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(2)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
		   } else { ?><a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
	      <?php }} ?>
	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (6).jpg" alt="Olympus OMD E-M5">
		  <div class="caption"><h3>Olympus OMD E-M5</h3><p>Price:Rs. 42999</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(3)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else { ?><a href="cart_add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">  
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (8).jpg" alt="Sony Alpha 77">
		  <div class="caption"><h3>Sony Alpha 77</h3><p>Price:Rs. 46900</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(4)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
    </div>
    <div class="row text-center">  
      <div class="col-md-3 col-sm-6">	
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (2).jpg" alt="Fastrack Digital E1358">
		  <div class="caption"><h3>Fastrack Digital E1358</h3><p>Price:Rs. 5190</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(5)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
  	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">  
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (9).jpg" alt="Titan Neo Black R5467">
		  <div class="caption"><h3>Titan Neo Black R5467</h3><p>Price:Rs. 10900</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(6)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">  
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (10).jpg" alt="Titan Analog Classic R4236">
		  <div class="caption"><h3>Titan Analog Classic R4236</h3><p>Price:Rs. 14099</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(7)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">  
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (12).jpg" alt="Rolex UK D8907">
		  <div class="caption"><h3>Rolex Vintage UK D8907</h3><p>Price:Rs. 89999</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(8)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
    </div>
    <div class="row text-center">
	  <div class="col-md-3 col-sm-6">
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (7).jpg" alt="Ralph Lauren Polo TShirt">
		  <div class="caption"><h3>Ralph Lauren Polo TShirt</h3><p>Price:Rs. 4900</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(9)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">  
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (5).jpg" alt="Armani Men's Shirt">
		  <div class="caption"><h3>Armani Men's Euro Collection</h3><p>Price:Rs. 6999</p></div>
		  <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(10)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">  
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (3).jpg" alt="Gucci Paris Collection">
		  <div class="caption"><h3>Gucci Paris Collection</h3><p>Price:Rs. 6490</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(11)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
	  <div class="col-md-3 col-sm-6">  
	    <div class="thumbnail">
	      <img src="module_2_assignment/Webp.net-resizeimage (4).jpg" alt="Banana Republic Majka Riza">
		  <div class="caption"><h3>Banana Republic 'Majka Riza'</h3><p>Price:Rs. 8899</p></div>
	      <?php if(!isset($_SESSION['id'])){?>
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
		  <?php } else{
			  if(check_if_added_to_cart(12)){echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
	       } else{ ?><a href="cart_add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
		  <?php }}?>
	    </div>
	  </div>
    </div>
  </div>
  
  <?php include "includes/footer.php";?>

</body>



</html>