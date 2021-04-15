<?php
session_start();
include('connect.php');
	$result = $db->prepare("SELECT * FROM shopdetails WHERE sid= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
   $x!= $row['sname'];	//Start session
  if($_SESSION['SESS_TOKEN'] == $x){

header('location:index.php');
}
}
  
  		
    	
?>