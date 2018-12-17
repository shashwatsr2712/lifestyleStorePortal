<?php require "includes/common.php";
$userid=$_SESSION['id'];$iid=$_GET['id'];
$query="DELETE FROM users_items WHERE user_id='$userid' AND item_id='$iid'";
$run=mysqli_query($con,$query) or die(mysqli_error($con));
header('location:cart.php');
?>