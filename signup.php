<?php require "includes/common.php";
if(isset($_SESSION['id'])){
header('location:products.php');}
else{
?>
<!DOCTYPE html>
<html>



<head>
  <title>SignUp-Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>



<body>

  <?php include "includes/header.php";error_reporting(0);?>

  <div class="panel panel-default">
    <div class="panel-heading">
	</div>
	<div class="panel-body">
      <div class="row"><div class="col-sm-offset-3 col-sm-6 col-xs-12"><p class="text-warning"><h3>SignUp Now</h3></p>
	  <form method="post" action="signup_script.php">
        <div class="form-group">
	      <label for="name">Name</label>
	      <input type="text" name="name" placeholder="Enter your name" class="form-control" required="true">
	    </div>
	    <div class="form-group">
	      <label for="email">Email</label>
	      <input type="email" name="email" placeholder="Enter your email id" class="form-control" required="true">
	    </div>
	    <div class="form-group">
	      <label for="password">Password</label>
	      <input type="password" name="password" placeholder="Enter your password" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		  <div><?php echo $_GET['signup_error'];?></div>
		</div>
	    <div class="form-group">
	      <label for="contact">Contact No.</label>
	      <input type="number" name="contact" placeholder="Enter your phone number" class="form-control" required="true" pattern=".{10,}">
	    </div>
	    <div class="form-group">
	      <label for="city">City</label>
	      <input type="text" name="city" placeholder="Enter your city" class="form-control" required="true">
	    </div>
	    <div class="form-group">
	      <label for="address">Address</label>
	      <input type="text" name="address" placeholder="Enter your Address" class="form-control" required="true">
	    </div>
	    <button type="submit" value="submit" class="btn btn-primary">SignUp</button>
      </form>
	  </div></div>
    </div>
	<div class="panel-footer"><p>Already have an account? <a href="login.php">Login</a></p>
	</div>
  </div>
  
  <?php include "includes/footer.php";?>
  
</body>



</html>
<?php }?>