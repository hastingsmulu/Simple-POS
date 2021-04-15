<?php 


function countrecords($table){
	include("dbconfig.php");
	$sql="SELECT * FROM $table ORDER BY id";
	if ($result=mysqli_query($conn,$sql)) {
		# code...
		$rowcount=mysqli_num_rows($result);
		echo $rowcount;
	}
	mysqli_close($conn);
}
function rentcollected($table){
	include("dbconfig.php");
	$sql="SELECT SUM(paid_amount) AS totalpaid FROM $table ORDER BY id";
	if ($result=mysqli_query($conn,$sql)) {
		# code...
		foreach ($result as $sumkey => $sumvalue) {
			# code...
			echo ''.$sumvalue['totalpaid'].'';
		}	
	}
	mysqli_close($conn);
}
function getbalances($table){
	include("dbconfig.php");
	$sql="SELECT SUM(balance) AS allbalances FROM $table ORDER BY id";
	if ($result=mysqli_query($conn,$sql)) {
		# code...
		foreach ($result as $balancekey => $balancevalue) {
			# code...
			echo ''.$balancevalue['allbalances'].'';
		}
	}
	mysqli_close($conn);
}
function havingbalance($table){
	include("dbconfig.php");
	$sql="SELECT * FROM $table WHERE balance>0 ORDER BY id";
	if ($result=mysqli_query($conn,$sql)) {
		# code...
		$rowcount=mysqli_num_rows($result);
		echo $rowcount;
	}
	mysqli_close($conn);
}
function vaccanthouses($table){
include("dbconfig.php");
$sql="SELECT * FROM $table WHERE status='vaccant' ORDER BY id";
if ($result=mysqli_query($conn,$sql)) {
	# code...
	$rowcount=mysqli_num_rows($result);
	echo $rowcount;
}mysqli_close($conn);}

function occupiedshops($table){
include("dbconfig.php");
$sql="SELECT * FROM $table WHERE status='occupied'ORDER BY id";
if ($result=mysqli_query($conn,$sql)) {
	# code...
	$rowcount=mysqli_num_rows($result);
	echo $rowcount;
}
mysqli_close($conn);
}

 ?>