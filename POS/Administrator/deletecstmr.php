<?php
session_start();
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM custemers WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();

$_SESSION['msg'] = 'Expense Deleted.! ';
    header('location:Dashboard.php?page=Customers');
unset($db);
?>