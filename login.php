<?php require "includes/common.php";error_reporting(0);?>
<!DOCTYPE html>
<html>



<head>
  <title>Login-Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>



<body>

  <?php include "includes/header.php";?>

  <div class="panel panel-default">
    <div class="panel-heading">
	</div>
	<div class="panel-body">
	  <div class="row"><div class="col-sm-offset-3 col-sm-6 col-xs-12"><p class="text-warning"><h3>Login to make a purchase</h3></p>
	  <form method="post" action="login_submit.php">
	    <div class="form-group">
		  <label for="email">Email</label>
		  <input type="email" placeholder="Enter your email id" name="email" class="form-control" required="true">
		</div>
		<div class="form-group">
		  <label for="password">Password</label>
	      <input type="password" placeholder="Enter your password" name="password" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		  <div><?php echo $_GET['login_error'];?></div>
		</div>
		<button type="submit" class="btn btn-primary" value="submit">Login</button>
	  </form>
	  </div></div>
	</div>
	<div class="panel-footer">
	  <p>Don't have an account? <a href="signup.php">Register</a></p>
	</div>
  </div>
  
  <?php include "includes/footer.php";?>
  
</body>



</html>