<?php
session_start();
if ($_SESSION['SESS_BIOGRAPHY'] !='Administrator'){
header("Location: ../../index.php?page=shop account");
			$_SESSION['message'] = 'You need Admin-Rights to view this page.';}
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM sales_order WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();

$_SESSION['message'] = 'Mpesa Transaction Deleted.! ';
    header('location:Dashboard.php?page=Mpesa Transactions');
unset($db);
?>