<?php
session_start();
include('../connect.php');
	$id=$_GET['id'];

$n=$_SESSION['SESS_USERNAME'];
$names=$_SESSION['SESS_BIOGRAPHY'];
$daty=date('r');
$in='Deleted Sale Order';
//log infor for admin loginclude('../connect.php');


// fetch query
$result = $db->prepare("SELECT * FROM sales_order WHERE id='$id'  LIMIT 1 ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                $nd=$row['cart_details'];

		}


// save query
                $sql = "INSERT INTO session_activity_log (date,info,status,sid,user_name,account_type) VALUES (:a,:k,:m,:g,:f,:h)";
                $q = $db->prepare($sql);
                $q->execute(array(':a'=>$daty,':k'=>$nd,':m'=>$in,':g'=>$id,':f'=>$n,':h'=>$names));


//delete code
	$result = $db->prepare("DELETE FROM sales_order WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();

$_SESSION['msg'] = 'Cart Details Deleted. ';
    header('location:Dashboard.php?page=Manage reports');

?>