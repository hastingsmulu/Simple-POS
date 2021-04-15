<?php
session_start();
include('../connect.php');

$f = $_POST['cartegory'];
$h = $_POST['status'];
// query
$sql = "INSERT INTO Product_Category (category_description,status) VALUES (:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':g'=>$f,':h'=>$h));
$_SESSION["sas"]= $f ;
$_SESSION['message'] = 'Category Description Saved successfully, Add Products Here..! ';
header("location:Dashboard.php?page=Add product");


unset($db);
?>