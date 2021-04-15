<?php
session_start();
	include('POS/connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM shopdetails WHERE sid= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();

$_SESSION['message'] = 'Shop account Deleted.! ';
    header('location:index.php?page=Alert');
?>