<?php
// configuration
include('../connect.php');
session_start();
// new data
$id = $_POST['memid'];
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['cost'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$v = $_POST['status'];
// query
$sql = "UPDATE products 
        SET code=?, name=?, cost=?, price=?, supplier=?, qty=?, status=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$v,$id));
$_SESSION['msg'] = 'Product Description Updated successfully. ';
header("location: Dashboard.php?page=Dashboard");

?>