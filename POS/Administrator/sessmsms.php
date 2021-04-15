<?php
session_start();
$_SESSION['messageid']=$_POST['id'];
$_SESSION['messageuser']=$_POST['user'];
$_SESSION['messagedate']=$_POST['sdate'];
header('location: Dashboard.php?page=Reply');
?>