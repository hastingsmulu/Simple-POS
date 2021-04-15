<?php
session_start();
if ($_SESSION['SESS_BIOGRAPHY'] !='Administrator'){
header("Location: ../../index.php?page=shop account");
			$_SESSION['message'] = 'You need Admin-Rights to view this page.';}

include('../connect.php');
$id = $_POST['id'];

$d = $_POST['location'];
$e = $_POST['category'];
$f = $_POST['shopname'];
$l = $_POST['email'];
$s = $_POST['address'];
$r = $_POST['currency'];
$v = $_POST['contct'];

// query
$sql = "UPDATE shopdetails 
        SET sname=?, location=?,address=?,contacts=?,email=?, category=?, currency=?
		WHERE sid=?";
$q = $db->prepare($sql);
$q->execute(array($f,$d,$s,$v,$l,$e,$r,$id));
// query



$_SESSION['message'] = 'Shop Details Changed Successfully, Please <a href="logout.php"> Logout</a> to reflect changes on page.';
header("location: Dashboard.php?page=Shops");

unset($db);
?>