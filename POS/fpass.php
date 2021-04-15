<?php
session_start();
$msg_arr = array();
$msg_arr[] = 'Oops!! Contact the admin (admin.admin@fastmail.com) to reset your account.';
    			$_SESSION['ERRMSG_ARR'] = $msg_arr;
    			header("location: login.php?page=&ok-login- pqE#f45rg1xd");
  ?>