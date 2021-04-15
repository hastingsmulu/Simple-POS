<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","posxdb");
$k="Available";
$sqlQuery = "SELECT * FROM products WHERE status='Available' ORDER BY qty ASC";

$result = mysqli_query($conn,$sqlQuery);

$chartdata = array();
foreach ($result as $row) {
	$chartdata[] = $row;
}

mysqli_close($conn);

echo json_encode($chartdata);
?>