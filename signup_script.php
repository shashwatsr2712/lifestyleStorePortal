<?php require "includes/common.php";
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$phone=$_POST['contact'];
$password=$_POST['password'];
if(strlen($password)<8){header('location:signup.php?signup_error=Password too short!');}
$password=md5($password);
$query="SELECT id FROM users WHERE email='$email'";
$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
$num=mysqli_num_rows($run_query);
if($num>0){
	echo "User id already exists !";
}
else{
	$query="INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$phone','$city','$address')";
	$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
	$_SESSION['id']=mysqli_insert_id($con);
	$_SESSION['email']=$email;echo "SignUp successful !";
	header('location:products.php');
}
?>