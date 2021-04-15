<?php
session_start();
include('../connect.php');

$id = $_GET['id'];
$k = 'Paid';
$ke = 'Paid & Collected';
$r= date("m/ d/ yy");
$s='Paid to collect';

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql = "SELECT status FROM sales_order WHERE id=$id AND date=$r";
	$qsql = mysqli_query($con,$sql);
$count= mysqli_num_rows($qsql);
  if($count=='1')    

{
$_SESSION['msg'] = 'Oops! Something went wrong, Try again.';
header("location: Dashboard.php?page=Manage reports");

}
$sql = "SELECT status FROM sales_order WHERE id=$id AND status=$s";
	$qsql = mysqli_query($con,$sql);
$count= mysqli_num_rows($qsql);
if($count=='0'){

     $sql = "UPDATE sales_order 
        SET status=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($ke,$id));
$_SESSION['msg'] = 'Cart details update successfully.';
header("location: Dashboard.php?page=Manage reports");
}

$sql = "UPDATE sales_order 
        SET status=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($k,$id));
$_SESSION['msg'] = 'Cart details update successfully.';
mysqli_close($con);
unset($db);
header("location: Dashboard.php?page=Manage reports");

?>