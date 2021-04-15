<?php
/*
Author: hastingsmumo

*/

session_start();

include('../connect.php');

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


        session_regenerate_id();

        unset($_SESSION['SESS_MEMBER_ID']);
    	unset($_SESSION['SESS_FIRSTNAME']);
    	unset($_SESSION['SESS_LASTNAME']);
        unset($_SESSION['SESS_NICKNAME']);
    	unset($_SESSION['SESS_USERNAME']);
    	unset($_SESSION['SESS_EMAIL']);
        unset($_SESSION['SESS_PASS']);
    	unset($_SESSION['SESS_PHONE']);
        unset($_SESSION['SESS_WEB']);
        unset($_SESSION['SESS_BIOGRAPHY']);
        unset($_SESSION['SESS_TOKEN']);
        unset($_SESSION['SESS_SHOP']);
        unset($_SESSION['SESS_ID']);
        unset($_SESSION['SESS_SNAME']);
        unset($_SESSION['SESS_SSHOP']); 
        unset($_SESSION['SESS_ID']);
    session_destroy();
session_write_close();
header("Location: ../../index.php?page=shop account"); // Redirecting To Home Page

?>