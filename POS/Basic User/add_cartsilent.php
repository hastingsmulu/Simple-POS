<?php
	session_start();


$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$ad=$_GET['id'];
$sql = "SELECT status FROM products WHERE id=$ad";
	$qsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qsql)){

if($row['status']=='Out of Stoke'){
$_SESSION['message1'] = '<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-alert-circled"></i> This Product is out of stock or unavailable! Please Restock.';
}
	
//check if product is already in the cart


	if(!in_array($_GET['id'], $_SESSION['cart'])){

		array_push($_SESSION['cart'], $_GET['id']);

		$_SESSION['message'] ='<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-checkmark-circle"></i>   Product added to cart.';
	}
	else{
		$_SESSION['message'] = '<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-hand"></i> Product already in cart.';
	}

	header('location: Dashboard.php?page=Dashboard');}
?>