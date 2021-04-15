<?php
	session_start();
include('../connect.php');
$id = $_POST['memid'];
$a = $_POST['f-name'];
$b = $_POST['l-name'];
$c = $_POST['u-name'];
$d = $_POST['email'];
$e = $_POST['shopname'];

// query
$sql = "UPDATE users 
        SET firstname=?, lastname=?, username=?, email=?, shopname=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));

$_SESSION['message'] = 'Details update successfully, Please <a href="logout.php"> Logout</a> to reflect changes on your profile page.';
header("location: Dashboard.php?page=My-Profile");

unset($db);
?>