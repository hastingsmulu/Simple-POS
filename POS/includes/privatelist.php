<?php

    	//Start session
    	session_start();
    	//Check whether the session variable SESS_MEMBER_ID is present or not
    if(!isset($_SESSION['SESS_PASS'])) {
    		header("location: ../../index.php?page=shop%20account");
    		exit();
    	}
if(!isset($_SESSION['SESS_MEMBER_ID'])) {
    		header("location: ../../index.php?page=shop%20account");
    		exit();
    	}
if(!isset($_SESSION['SESS_USERNAME'])){
    		header("location: ../../index.php?page=shop%20account");
    		exit();
    	}



    ?>