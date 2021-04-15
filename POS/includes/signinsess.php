<?php
ob_start();
    	//Start session
    	session_start();

if(!isset($_SESSION['SESS_FIRST_NAME']) || (trim($_SESSION['SESS_FIRST_NAME']) == '')) {
    		header("location: login.php");
    		exit();
    	}
if(!isset($_SESSION['SESS_LAST_NAME']) || (trim($_SESSION['SESS_LAST_NAME']) == '')) {
    		header("location: login.php");
    		exit();
    	}
if(!isset($_SESSION['SESS_EMAIL']) || (trim($_SESSION['SESS_EMAIL']) == '')) {
    		header("location: login.php");
    		exit();
    	}

ob_end_flush();
    ?>