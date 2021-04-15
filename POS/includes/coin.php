<?php
ob_start();
    	//Start session
    	 session_start();
     
    	//Include database connection details

          require_once("db.php");
    	//Array to store validation errors
    	$msg_arr = array();
     
    	//Validation error flag
    	$msgflag = false;
     
        
     
    	//Sanitize the POST values
         
   

    $name=$_POST['ename'];
    $projectname=$_POST['title'];
    $description=$_POST['description'];
    $priority=$_POST['priority'];
    $startdate=$_POST['starttime'];
    $deadline=$_POST['endtime'];
    $status=$_POST['status'];
    $notes=$_POST['notes'];
    	//Input Validations
    	
$sql="INSERT INTO Tasks(id,name,project,description,prio,start, dead,stat,notes)VALUES (?,?,?,?,?,?,?,?)";
    	$pdo_statement = $pdo_conn->prepare($sql);
$result = $pdo_statement->execute( array(
$name,
$projectname,
$description,
$priority,
$startdate,
$deadline,
$status,
$notes));
        
       
        if(!empty($result))
        {
    		    $msg_arr[] = '<img src="../assets/img/icon_success.svg"> Your Tasks info is submitted.';
    			$msgflag = true;
    			if($msgflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $msg_arr;
    				session_write_close();
    			header("location: ../Administrator/dashboard.php?page=Task");
                exit();
    			}
    		}else 
{

//failed
    			$msg_arr[] = '<img src="../assets/img/system-error.svg"> Something went wrong, Try Again. ';
    			$msgflag = true;
    			if($msgflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $msg_arr;
    				session_write_close();
    				header("location: ../Administrator/dashboard.php?page=Task");
    				exit();
    			}
}






    		die("Query failed");
    $conn->close();
    	ob_end_flush();
    ?>