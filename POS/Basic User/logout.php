<?php
/*
Author: hastingsmumo

*/
include('../connect.php');
session_start();


$daty=date('r');
$in='Loged out';
$id=$_SESSION['SESS_MEMBER_ID'];
$username=$_SESSION['SESS_USERNAME'];
$u='Successfuly';
$names=$_SESSION['SESS_BIOGRAPHY'];
// save query
                $sql = "INSERT INTO session_activity_log (date,info,status,sid,user_name,account_type) VALUES (:a,:k,:m,:g,:f,:h)";
                $q = $db->prepare($sql);
                $q->execute(array(':a'=>$daty,':k'=>$u,':m'=>$in,':g'=>$id,':f'=>$username,':h'=>$names));


unset($_SESSION['SESS_MEMBER_ID']);
    	unset($_SESSION['SESS_FIRSTNAME']);
    	unset($_SESSION['SESS_LASTNAME']);
        unset( $_SESSION['SESS_NICKNAME']);
    	unset( $_SESSION['SESS_USERNAME']);
    	unset($_SESSION['SESS_EMAIL']);
        unset($_SESSION['SESS_PASS']);
    	unset( $_SESSION['SESS_PHONE']);
        unset( $_SESSION['SESS_WEB']);
        unset( $_SESSION['SESS_BIOGRAPHY']);
         unset( $_SESSION['SESS_TOKEN']);
    session_destroy();

header("Location: ../../index.php?page=shop account"); // Redirecting To Home Page

?>