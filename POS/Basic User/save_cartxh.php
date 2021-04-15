<?php
	

session_start();

include('../connect.php');
$a = $_POST['suspend'];
$e= $_POST ['total'];
$k= $_POST['date']; 
$f= $_POST['status']; 
$g= $_POST['comment']; 	
$h= $_POST['refno'];


// query
$sql = "INSERT INTO saved_cart (date,cart_details,refno,total,status,comment) VALUES (:i,:a,:h,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':i'=>$k,':a'=>$a,':h'=>$h,':b'=>$e,':c'=>$f,':d'=>$g));


 $_SESSION['message'] = '<div class="alert alert-red alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-checkmark"></i> Cart Hold Successfully';
		
		header('location: Dashboard.php?page=Create Sale');
	
?>
