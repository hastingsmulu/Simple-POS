<?php
session_start();
include("../con.php");
$sql = "SELECT * FROM shopdetails";
	$qsql = mysqli_query($con,$sql);
	$count= mysqli_num_rows($qsql);
if($count==1){

$_SESSION['message2'] = '<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-alert"></i> This is a Free Trial Software For Only  One Shop Account, <code>Please Buy the Full Version</code> at our website <a href="https//www.hastingsmumo.co.ke/POS">Hastingsmumo.co.ke</a>.';
header("location: index.php?page=shop%20account");
    			exit();

}

include('POS/connect.php');
$a = $_POST['shopname'];
$b = $_POST['address'];
$c = $_POST['location'];
$d = $_POST['contact'];
$g = $_POST['email'];
$f = $_POST['category'];
$k = $_POST['perticulars'];
$kiki = $_POST['currency'];
$as='Active';
// query
$sql = "INSERT INTO shopdetails (sname,location,address,contacts,email,category,particulars,status,currency) VALUES (:a,:b,:c,:d,:e,:f,:x,:h,:vc)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$c,':c'=>$b,':d'=>$d,':e'=>$g,':f'=>$f,':x'=>$k,':h'=>$as,':vc'=>$kiki));
$_SESSION['message2'] = '<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-checkmark-circle"></i> Shop Details Added successfully.';
header("location: index.php?page=shop%20account");
unset($db);

mysqli_close($con);
?>