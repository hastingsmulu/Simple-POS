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
       $id=$_POST['nullval'];  
    	$password=password_hash($_POST['repass'],PASSWORD_DEFAULT);


    	//Input Validations
    	
$sql="UPDATE users SET grsxcvg_passsword=? WHERE id=?";
    	$pdo_statement = $pdo_conn->prepare( $sql );
$result = $pdo_statement->execute([$password,$id]);
        
       
        if(!empty($result) )
        {
    		    $msg_arr[] = '<img src="assets/img/icon_success.svg"> You have successifuly updated your password, please login. ';
    			$msgflag = true;
    			if($msgflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $msg_arr;
    				session_write_close();
    			header("location: ../login.php");
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
    				header("location: ../Administrator/dashboard.php?page=My-Profile");
    				exit();
    			}
}






    		die("Query failed");
    $conn->close();
    	ob_end_flush();
    ?>
