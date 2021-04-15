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

$id = $_GET['id'];
$f = 'Deactivated';
$k = 'Active';



$sql = "SELECT * FROM shopdetails WHERE sid=$id AND status=$k";
	$qsql = mysqli_query($con,$sql);
$count= mysqli_num_rows($qsql);
  if($count==1)   
 
{
$_SESSION['message'] = '<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-alert-circled"></i>Oops! Something Went Wrong, Please try Again';
header("location: Dashboard.php?page=Manage Shops");

}
else
{
$sql = "UPDATE shopdetails 
        SET status=?
		WHERE sid=?";
$q = $db->prepare($sql);
$q->execute(array($f,$id));
$_SESSION['message'] = '<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-alert-circled"></i> Shop Account deactivated.';
header("location: Dashboard.php?page=Manage Shops");
// query


}
unset($db);
mysqli_close($con);
?>