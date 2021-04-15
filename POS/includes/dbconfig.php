




<?php 

// database connection
$conn=new mysqli('localhost','root','','workdata');
if (mysqli_connect_errno()) {
	# code...
	echo "Could Not Connect to MYSQL database".mysqli_connect_error();
}

 ?>