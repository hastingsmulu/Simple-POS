<?php
	

session_start();

include('../connect.php');
$a = $_POST['suspend'];
$e= $_POST ['total'];
$k= $_POST['date'];
$f= $_POST['ammountgaiven'];
$g= $_POST['customer'];
$v= $_POST['pmhod'];

if(isset($_POST['save'])){


	
	foreach($_POST['indexes'] as $key){
			$_SESSION['qty_array'][$key] = $_POST['qty_'.$key];
            $_SESSION['amm_array']= $_POST['ammountgaiven'];
            $_SESSION['customer']= $_POST['customer'];
            $_SESSION['discount']= $_POST['discount'];
             $_SESSION['pmethod']= $v;
		}







		header('location: Dashboard.php?page=View%20Cart');
	}


?>
