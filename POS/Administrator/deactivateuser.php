<?php
	session_start();
include('../connect.php');

// new data
$id = $_GET['id'];

$f = 'Deactivated';
$k = 'Active';
$n=$_SESSION['SESS_FIRSTNAME'];

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM users WHERE id=$id AND active=$k";
	$qsql = mysqli_query($con,$sql);
$count= mysqli_num_rows($qsql);
  if($count==1)    
{
$sql = "UPDATE users 
        SET active=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($f,$id));
$_SESSION['message'] = 'User profile is deactivated ';
header("location: Dashboard.php?page=Manage User Accounts"); exit();
// query

}

{
$sql = "UPDATE users 
        SET active=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($k,$id));
$_SESSION['message'] = 'Details update successfully, User profile Activated.';
header("location: Dashboard.php?page=Manage User Accounts");

}
?>