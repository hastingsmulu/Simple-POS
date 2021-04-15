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
         
    	$password=$_POST['passwd'];


    	//Input Validations
    	
$sql="INSERT INTO users(grsxcvg_firstname,grsxcvg_lastname,grsxcvg_nickname,group_username,grsxcvg_email,grsxcvg_passsword,grsxcvg_phone,grsxcvg_website,gvsax_usertype) VALUES(:fname,:lname,:nname,:uname,:email,:password,:phone,:web,:usertype)";
    	$pdo_statement = $pdo_conn->prepare( $sql );
$result = $pdo_statement->execute( array( 
':fname'=>$_POST[''],
':lname'=>$_POST[''],
':nname'=>$_POST[''],
':uname'=>$_POST['username']
':email'=>$_POST['email'],
':password'=>password_hash($password,PASSWORD_DEFAULT),
':phone'=>$_POST[''],
':web'=>$_POST[''],
':usertype'=>$_POST['class']));
        
       
        if(!empty($result) )
        {
    		    $msg_arr[] = '<img src="assets/img/icon_success.svg"> Your signup info is submitted, please login. ';
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
    			$msg_arr[] = '<img src="assets/img/system-error.svg"> Something went wrong, Try Again. ';
    			$msgflag = true;
    			if($msgflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $msg_arr;
    				session_write_close();
    				header("location: ../signup.php");
    				exit();
    			}
}






    		die("Query failed");
    $conn->close();
    	ob_end_flush();
    ?>
