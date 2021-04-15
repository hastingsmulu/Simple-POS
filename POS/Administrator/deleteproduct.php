<?php
session_start();
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM products WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
$_SESSION['msg'] = "Product deleted from Database";
    header('location:Dashboard.php?page=Products');
unset($db);
?>