<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","posxdb");

$sqlQuery = "SELECT cartegory,qty,status,name FROM products ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$chartdata = array();
foreach ($result as $row) {
	$chartdata[] = $row;
}

mysqli_close($conn);

echo json_encode($chartdata);
?>