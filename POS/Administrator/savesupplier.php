<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['contact'];
$c = $_POST['address'];

// query
$sql = "INSERT INTO supliers (name,location,contact) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c));
header("location: Dashboard.php?page=Manage Suppliers");


unset($db);
?>