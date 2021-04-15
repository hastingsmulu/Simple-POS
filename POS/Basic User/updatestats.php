<?php
session_start();
include('../connect.php');
include('../con.php');
$id = $_GET['id'];
$k = 'Paid';
$r= date("m/ d/ yy");




$daty=date('r');
$in='Sales record updated';

$username=$_SESSION['SESS_USERNAME'];
$u='Successfuly';
$names=$_SESSION['SESS_BIOGRAPHY'];
// save query
                $sql = "INSERT INTO session_activity_log (date,info,status,sid,user_name,account_type) VALUES (:a,:k,:m,:g,:f,:h)";
                $q = $db->prepare($sql);
                $q->execute(array(':a'=>$daty,':k'=>$k,':m'=>$in,':g'=>$id,':f'=>$username,':h'=>$names));


$sql = "SELECT status FROM sales_order WHERE id=$id AND date=$r";
	$qsql = mysqli_query($con,$sql);
$count= mysqli_num_rows($qsql);
  if($count=='1')    

{
$_SESSION['msg'] = 'Oops! Something went wrong, Try again.';
header("location: Dashboard.php?page=Manage reports");

}
$sql = "UPDATE sales_order 
        SET status=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($k,$id));
$_SESSION['msg'] = 'Cart details update successfully.';
header("location: Dashboard.php?page=Manage reports");

?>