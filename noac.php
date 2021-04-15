<?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM shopdetails";
	$qsql = mysqli_query($con,$sql);
	$g=mysqli_num_rows($qsql);
 if(!mysqli_num_rows($qsql)==0)
{

    }
else{
$_SESSION['message1'] = '<p><i class="icon-alert-circled"></i> No Shop Account Available!</p>  Please Click <a href="index.php?page=add shop" class="alert-link">Add Shop</a> Then Preceed To Login.';
		}

?>