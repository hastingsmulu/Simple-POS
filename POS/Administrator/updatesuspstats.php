
<?php
session_start();
	include('../connect.php');

$i=$_GET['id'];
$a='Paid';

$sql = "UPDATE saved_cart 
        SET comment=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$i));
   
 $_SESSION['message'] = ' <div class="alert alert-green alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-checkbox-outline"></i> Suspended Cart Updated ';
   unset($db);
header('location:Dashboard.php?page=Suspended items');

?>

?>