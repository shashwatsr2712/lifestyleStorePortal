<?php require "includes/common.php";
$idi=$_GET['id'];$userid=$_SESSION['id'];
$query="INSERT INTO users_items(user_id,item_id,status) VALUES ('$userid','$idi','Added to cart')";
$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
header('location:products.php');
?>