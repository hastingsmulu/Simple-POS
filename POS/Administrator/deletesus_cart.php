<?php
session_start();
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM saved_cart WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
    $_SESSION['message'] = ' <div class="alert alert-green alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-checkbox-outline"></i> Suspended Cart deleted ';
    header('location:Dashboard.php?page=Suspended items');
unset($db);
?>