<?php
	session_start();
include('../connect.php');
$id = $_POST['memid'];
$a = $_POST['f-name'];
$b = $_POST['l-name'];
$c = $_POST['u-name'];
$d = $_POST['email'];
$e = $_POST['shopname'];

$names=$_SESSION['SESS_BIOGRAPHY'];
$daty=date('r');
$in='Successfully Updated User Profile';

$result = $db->prepare("SELECT * FROM users WHERE id='$id' ORDER BY id DESC LIMIT 1 ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                $n=$row['username'];

		}
                $sql = "INSERT INTO session_activity_log (date,info,status,sid,user_name,account_type) VALUES (:a,:k,:m,:g,:f,:h)";
                $q = $db->prepare($sql);
                $q->execute(array(':a'=>$daty,':k'=>$n,':m'=>$in,':g'=>$id,':f'=>$c,':h'=>$names));


// query
$sql = "UPDATE users 
        SET firstname=?, lastname=?, username=?, email=?, shopname=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));

$_SESSION['message'] = 'Details update successfully, Please <a href="logout.php"> Logout</a> to reflect changes on your profile page.';
header("location: Dashboard.php?page=My-Profile");


?>