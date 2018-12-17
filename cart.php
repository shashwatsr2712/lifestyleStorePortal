<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>



<head>
  <title>Shopping Cart-Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
</head>



<body>

  <?php include "includes/header.php";
  if(!isset($_SESSION['id'])){header('location:index.php');} 
  $uid=$_SESSION['id'];
  $query="SELECT ui.id,ui.item_id,i.name,i.price FROM users_items ui INNER JOIN items i ON ui.item_id=i.id WHERE ui.user_id='$uid'";
  $run_query=mysqli_query($con,$query) or die(mysqli_error($con));$number=mysqli_num_rows($run_query);
  if($number==0){echo '<br><br><br><br>';echo '<h1 class="text-center">Add items to cart first !</h1>';}
  else{ 

  echo '<br><br><br><br>'
      . '<div class="container"><div class="table-responsive">'
          . '<table class="table table-bordered table-striped table-hover">'
          . '<tbody>'
          . '<tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>';
	  $sum=0;$n=1; while($row=mysqli_fetch_array($run_query))
                  {$sum=$sum+$row['price'];		
	              echo "<tr><td>".$n."</td><td>".$row['name']."</td><td>".$row['price'].'</td><td><a href="cart_remove.php?id=';echo $row['item_id'].'" class="remove-item-link">Remove</a></td></tr>';
                  $n=$n+1;}
      echo "<tr><td></td><td>TOTAL</td><td>Rs. ".$sum.'</td><td><a href="success.php?id=';echo $uid.'"><button type="button" class="btn btn-success" value="confirm">Confirm Order</button></a></td></tr></tbody></table></div></div>';
  
  }include "includes/footer.php";?>
  
</body>



  </html>