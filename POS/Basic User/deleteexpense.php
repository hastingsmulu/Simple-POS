<?php

session_start();
	include('../connect.php');
	$id=$_GET['id'];
$names=$_SESSION['SESS_BIOGRAPHY'];
$daty=date('r');
$in='Deleted Expense Details';




$result = $db->prepare("SELECT * FROM expenses WHERE id='$id' ORDER BY id DESC LIMIT 1 ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                $nd=$row['category'];

		}

 $sql = "INSERT INTO session_activity_log (date,info,status,sid,user_name,account_type) VALUES (:a,:k,:m,:g,:f,:h)";
                $q = $db->prepare($sql);
                $q->execute(array(':a'=>$daty,':k'=>$nd,':m'=>$in,':g'=>$id,':f'=>$n,':h'=>$names));

	$result = $db->prepare("DELETE FROM expenses WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();

$_SESSION['msg'] = 'Expense Deleted.! ';
    header('location:Dashboard.php?page=Expenses');
?>