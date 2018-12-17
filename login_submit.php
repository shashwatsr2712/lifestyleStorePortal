<?php require "includes/common.php";
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=($_POST['password']);
$pass=md5($password);
$query="SELECT id,email FROM users WHERE email='$email' AND password='$pass'";
$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($run_query);
if($num_rows==0){
	header('location:login.php?login_error=Incorrect Password!');}
else{
	$row=mysqli_fetch_array($run_query);
	$_SESSION['id']=$row['id'];
	$_SESSION['email']=$row['email'];
	header('location:products.php');
	}
?>