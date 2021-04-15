<?php
session_start();
 $token = md5(uniqid(mt_rand(), true));
	include('connect.php');
	$id=$_GET['sid'];
	$result = $db->prepare("SELECT * FROM shopdetails WHERE sid= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
    		session_regenerate_id();
    $_SESSION['SESS_SHOP'] = $row['sname'];
    $_SESSION['SESS_SNAME'] = $row['sname'];
    $_SESSION['SESS_CURREMY'] = $row['currency'];
    $_SESSION['SESS_TOKEN'] =  $id;
		session_write_close();
    header('location:login.php');



  ?><?php
}
unset($db);
?>