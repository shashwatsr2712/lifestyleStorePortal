<?php require "includes/common.php";
if(!isset($_SESSION['id'])){header('location:index.php');}
?>
<!DOCTYPE html>
<html>



<head>
  <title>Settings-Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="bootstrap&jquery/css/bootstrap.min.css"/>
  <script type="text/javascript" src="bootstrap&jquery/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="bootstrap&jquery/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>



<body>
  
  <?php include "includes/header.php";$usid=$_SESSION['id'];
  $query="UPDATE users_items SET status='Confirmed' WHERE user_id='$usid'";
  $r_query=mysqli_query($con,$query) or die(mysqli_error($con));?>
	  
  
  <div class="container"><div class="panel panel-default">
    <div class="panel-heading"></div>
	<div class="panel-body">
      <h1>Your order is confirmed.</h1><p>Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
    </div>
	<div class="panel-footer"></div>
  </div></div>
  
<?php include "includes/footer.php";?>
  
</body>



</html>