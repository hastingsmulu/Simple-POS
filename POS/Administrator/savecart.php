<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['price'];
$c = $_POST['qty'];
$d = $_POST['total'];
// query
$sql = "INSERT INTO saved_cart (name,price,qyt,total) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c, ':d'=>$d));
$_SESSION['message'] = 'Cart Saved successfully';
unset($db);
header("location: Dashboard.php?page=Create Sale");


?>