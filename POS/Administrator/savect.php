



<?php
session_start();
include('../connect.php');
$a = $_POST['suspend'];
$c = $_POST['status'];
$d= $_POST ['comment'];

// query
$sql = "INSERT INTO saved_cart (cart_details,status,comment) VALUES (:a,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c,':d'=>$d));



$_SESSION['message'] = '<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-checkmark-circle"></i> Cart Suspended successfully, You will add Quality when checking out.';
unset($db);
header("location: Dashboard.php?page=Suspended items");

?>