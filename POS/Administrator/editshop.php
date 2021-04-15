<?php
	session_start();
if ($_SESSION['SESS_BIOGRAPHY'] !='Administrator'){
header("Location: ../../index.php?page=shop account");
			$_SESSION['message'] = 'You need Admin-Rights to view this page.';}
include('../connect.php');
$id =$_GET['id'];

	$result = $db->prepare("SELECT * FROM shopdetails WHERE sid= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

    $_SESSION['SESS_SSHOP_ID'] = $row['sid'];
    $_SESSION['SESS_SHNAME'] = $row['sname'];
    $_SESSION['SESS_SLOCATION'] = $row['location'];
    $_SESSION['SESS_SADDRESS'] =  $row['address']; 
    $_SESSION['SESS_SCONTACT'] = $row['contacts'];
    $_SESSION['SESS_SSEMAIL'] = $row['email'];
    $_SESSION['SESS_SCATEGORY'] = $row['category'];
    header('location: Dashboard.php?page=Edit Shops');
}
unset($db);

?>