<?php
session_start();
include('../connect.php');

$a = $_POST['user-name'];
$b = $_POST['first-name'];
$c = $_POST['last-name'];
$d = $_POST['user-email'];
$g = $_POST['user-password'];
$k = $_POST['activity'];
$hashed_password = password_hash($g, PASSWORD_DEFAULT);



$f = $_POST['usertype'];
$h = $_POST['shop'];


// query
$sql = "INSERT INTO users (firstname,lastname,email,username,passord,usertype,shopname,active) VALUES (:a,:b,:c,:d,:e,:f,:h,:k)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$b,':b'=>$c,':c'=>$d,':d'=>$a,':e'=>$hashed_password,':f'=>$f,':h'=>$h,':k'=>$k));
$_SESSION['message1'] = 'User Added successfully, Please <a href="logout.php"> Logout</a> to login to your new profile.';
header("location: Dashboard.php?page=My-Profile");


?>