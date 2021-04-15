<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['cartegory'];
$d = $_POST['price'];
$g = $_POST['cost'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$h = $_POST['status'];
// query
$sql = "INSERT INTO products (code,name,cartegory,price,cost,supplier,qty,status) VALUES (:a,:b,:c,:d,:e,:f,:k,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$g,':f'=>$e,':k'=>$f,':h'=>$h));
// query


$_SESSION['msg'] = 'Product Description Saved successfully.! ';
$_SESSION["sas"]= $c ;

header("location:Dashboard.php?page=Add product");


unset($db);
?>