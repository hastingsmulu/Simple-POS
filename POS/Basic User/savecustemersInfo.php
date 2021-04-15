<?php
session_start();
include('../connect.php');
$a = $_POST['cname'];
$b = $_POST['caddress'];
$c = $_POST['comments'];

// query
$sql = "INSERT INTO custemers (name,address,comment) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c));

$_SESSION['msg'] = 'Customers Infomation Saved successfully.! ';


header("location:Dashboard.php?page=Customers");


?>