<?php
session_start();
include('../connect.php');

$a = $_POST['mdate'];
$e= $_POST ['sname'];
$k= $_POST['bio']; 
$h= 'New';
$x='not-replied';
$g='null';
$t='Not Seen';
// save query
$sql = "INSERT INTO misc (date,name,details,status,reply,replyname,sstat) VALUES (:a,:my,:f,:h,:b,:q,:m)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':my'=>$e,':f'=>$k,':h'=>$h,':b'=>$x,':q'=>$g,':m'=>$t));


 $_SESSION['message'] = "<div class='alert alert-info alert-dismissible fade in mb-2' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button><i class='icon-android-checkmark-circle'></i> Message sent";
		
		header('location: Dashboard.php?page=contact admin');
	
?>