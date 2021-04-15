<?php
ob_start();
    	//Start session
    	

$classflag = false;

$class=$_SESSION['SESS_CLASS'];

if($class=='Data_Entry'){
           $classflag[]=true;
        }
       	 
        

    	//Check whether the session variable SESS_MEMBER_ID is present or not
    	 if ($classflag){
    		header("location: login.php");
    		exit();
            }


ob_end_flush();
    ?>