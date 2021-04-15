<?php
	

session_start();

include('../connect.php');
$a = $_POST['suspend'];
$e= $_POST ['total'];
$k= $_POST['date']; 
$f= $_POST['status']; 
$g= $_POST['comment']; 	
$h= $_POST['refno'];
$c= $_POST['selesprsn'];

if($g=='Paid & To collect'){
// query
$sql = "INSERT INTO saved_cart (date,cart_details,refno,slpasn,total,status,comment) VALUES (:i,:a,:h,:x,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':i'=>$k,':a'=>$a,':h'=>$h,':x'=>$c,':b'=>$e,':c'=>$f,':d'=>$g));

// query
$sql = "INSERT INTO sales_order (date,cart_details,refno,slpasn,total,status) VALUES (:i,:a,:h,:x,:b,:n)";
$q = $db->prepare($sql);
$q->execute(array(':i'=>$k,':a'=>$a,':h'=>$h,':x'=>$c,':b'=>$e,':n'=>$f));

 $_SESSION['message'] = '<div class="alert alert-red alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-checkmark"></i> Cart Hold Successfully';
		
		header('location: print.php');
	}

if($g=='Not Paid'){
$sql = "INSERT INTO saved_cart (date,cart_details,refno,slpasn,total,status,comment) VALUES (:i,:a,:h,:x,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':i'=>$k,':a'=>$a,':h'=>$h,':x'=>$c,':b'=>$e,':c'=>$f,':d'=>$g));
$_SESSION['message'] = '<div class="alert alert-red alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-checkmark"></i> Cart Hold Successfully';
		
		header('location: print.php');}
unset($db);
?>
