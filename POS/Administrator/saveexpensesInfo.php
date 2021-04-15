<?php
session_start();
include('../connect.php');
$a = $_POST['cartegory'];
$b = $_POST['amount'];
$c = $_POST['comments'];
$m=date("d-m-Y");
// query
$sql = "INSERT INTO expenses (date,category,amount,comment) VALUES (:v,:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':v'=>$m,':a'=>$a,':b'=>$b,':c'=>$c));

$_SESSION['msg'] = 'Expenses Description Saved successfully.! ';


header("location:Dashboard.php?page=Expenses");


unset($db);
?>