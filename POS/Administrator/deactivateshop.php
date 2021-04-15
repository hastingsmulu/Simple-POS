<?php
	session_start();
if ($_SESSION['SESS_BIOGRAPHY'] !='Administrator'){
header("Location: ../../index.php?page=shop account");
			$_SESSION['message'] = 'You need Admin-Rights to view this page.';}
include('../connect.php');

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$shp=$_SESSION['SESS_SNAME'];
$id = $_GET['id'];
$f = 'Deactivated';
$k = 'Active';



$sql = "SELECT * FROM shopdetails WHERE sname=$shp AND status=$k";
	$qsql = mysqli_query($con,$sql);
$count= mysqli_num_rows($qsql);
  if($count==1)   
 
{
$sql = "UPDATE shopdetails 
        SET status=?
		WHERE sid=?";
$q = $db->prepare($sql);
$q->execute(array($k,$id));
$_SESSION['message'] = 'Shop Account is activated ';
header("location: Dashboard.php?page=Shops"); exit();
// query

}
else
{

$sql = "UPDATE shopdetails 
        SET status=?
		WHERE sid=?";
$q = $db->prepare($sql);
$q->execute(array($f,$id));
$_SESSION['message'] = 'Shop Account deactivated.';
header("location: Dashboard.php?page=Shops");
}
unset($db);
mysqli_close($con);
?>