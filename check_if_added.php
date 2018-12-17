<?php
function check_if_added_to_cart($item_id){
	require "includes/common.php";
	$user_id=$_SESSION['id'];
	$query="SELECT * FROM users_items WHERE user_id='$user_id' AND item_id='$item_id' AND status='Added to cart'";
    $run_query=mysqli_query($con,$query) or die(mysqli_error($con));
	$nrows=mysqli_num_rows($run_query);
	if($nrows>0){return 1;} 
	else{return 0;} 
}
?>