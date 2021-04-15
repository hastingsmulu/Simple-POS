<?php
session_start();
include('../connect.php');
$id = $_GET['id'];
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
$q->execute(array($k,$id));
$_SESSION['message'] = 'Details update successfully, User profile Activated.';
header("location: Dashboard.php?page=Manage User Accounts");

}

$conn = mysqli_connect("localhost","root","","posxdb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	if (isset($_SESSION['SESS_ACTIVITY'])){
		$query=mysqli_query($conn,"select * from users where active='".$_SESSION['SESS_ACTIVITY']."'");
		$row=mysqli_fetch_array($query);
		
		if ($row['active']=='Active'){
            $_SESSION['message'] = ' User profile Is Already Active.';
			header("location: ../Administrator/Dashboard.php?page=Manage User Accounts");
    			exit();
		}}


?>