<?php require "includes/common.php"; error_reporting(0);
if(!isset($_SESSION['email'])){header('location:index.php');}
else { ?>
<!DOCTYPE html>
<html>



<head>
  <title>Settings-Lifestyle Store</title>
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
	  <div class="row"><div class="col-sm-offset-3 col-sm-6 col-xs-12"><p class="text-warning"><h3>Change Password</h3></p>
	  <form method="post" action="settings_script.php">
	    <div class="form-group">
		  <label for="password">Old Password</label>
		  <input type="password" placeholder="Enter your old password" name="password" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		  <div><?php echo $_GET['error_dne'];?></div>
		</div>
		<div class="form-group">
		  <label for="newpassword">New Password</label>
	      <input type="password" placeholder="Enter new password" name="newpassword" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		</div>
		<div class="form-group">
		  <label for="rnewpassword">Re-Enter New Password</label>
	      <input type="password" placeholder="Re-Enter new password" name="rnewpassword" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		  <div><?php echo $_GET['error_mismatch'];?></div>
		</div>
		<button type="submit" class="btn btn-primary" value="submit">Change</button>
	  </form><?php }?>
	  </div></div>
	</div>
	<div class="panel-footer">
	</div>
  </div>
 
<?php include "includes/footer.php";?>  
  
</body>



</html>
