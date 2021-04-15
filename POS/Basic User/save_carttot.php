<?php
	

session_start();

include('../connect.php');
$e= $_POST ['total'];
$k= $_POST['date']; 
$p= $_POST['status'];
	



// query
$sql = "INSERT INTO totaldayearn (date,total,status) VALUES (:i,:a,:h)";
$q = $db->prepare($sql);
$q->execute(array(':i'=>$k,':a'=>$e,':h'=>$p));


 $_SESSION['message'] = "Today Sales Closed ";
		
		header('location: Dashboard.php?page=Day Closed');
	
?>
