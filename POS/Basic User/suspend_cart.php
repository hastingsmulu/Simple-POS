<?php
session_start();


include('../connect.php');
$c = $_POST['qty'];
$d = $_POST['total'];
$e = $_POST['cashier'];


$sql1 = "INSERT INTO totaldayearn (amount,qty,usertype) VALUES (:a,:b,:c)";
$q = $db->prepare($sql1);
$q->execute(array(':a'=>$d,':b'=>$d,':c'=>$e));

$_SESSION['message'] = 'Cart Saved successfully';
		
		header('location: Dashboard.php?page=Create Sale');
?>
