<?php
ob_start();
    	//Start session
    	 session_start();
     
    	//Include database connection details

          require_once("db.php");
    	//Array to store validation errors
    	$msg_arr = array();
     $msg_arra = array();
    	//Validation error flag
    	$msgflag = false;
     
        
     
    	//Sanitize the POST values
         
   
$noobmaster=$_POST['noobsmater'];
    $name=$_POST['name'];
    $lname=$_POST['lastname'];
    $nname=$_POST['nickname'];
    $uname=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['tel'];
    $web=$_POST['web'];
    $utype=$_POST['class'];
    	//Input Validations
    	
$sql="UPDATE users SET 
                        grsxcvg_firstname=? WHERE id=?";
 $sqlvii="UPDATE users SET grsxcvg_lastname=? WHERE id=?";
  $sqli="UPDATE users SET grsxcvg_nickname=? WHERE id=?";
   $sqlii="UPDATE users SET group_username=? WHERE id=?";
  $sqliii="UPDATE users SET grsxcvg_email=? WHERE id=?";
   $sqliv="UPDATE users SET grsxcvg_phone=? WHERE id=?";
   $sqlv="UPDATE users SET grsxcvg_website=? WHERE id=?";
  $sqlvi="UPDATE users SET gvsax_usertype=? WHERE id=?";
    	$pdo_statement = $pdo_conn->prepare( $sql, );
 $result = $pdo_statement->execute([$name,$noobmaster]);
	$pdo_statement = $pdo_conn->prepare( $sqlvii, );
 $result = $pdo_statement->execute([$lname,$noobmaster]);
 	$pdo_statement = $pdo_conn->prepare( $sqli, );
$result = $pdo_statement->execute([$nname,$noobmaster]);
 	$pdo_statement = $pdo_conn->prepare( $sqlii, );
$result = $pdo_statement->execute([$uname,$noobmaster]);
 	$pdo_statement = $pdo_conn->prepare( $sqliii, );
$result = $pdo_statement->execute([$email,$noobmaster]);
 	$pdo_statement = $pdo_conn->prepare( $sqliv, );
$result = $pdo_statement->execute([$phone,$noobmaster]);
 	$pdo_statement = $pdo_conn->prepare( $sqlv, );
$result = $pdo_statement->execute([$web,$noobmaster]);
 	$pdo_statement = $pdo_conn->prepare( $sqlvi, );
    $result = $pdo_statement->execute([$utype,$noobmaster]);
        
       
        if(!empty($result) )
        {
    		    $msg_arr[] = 'Well done! You successfully submitted new profile info, please login. ';
    			$msgflag = true;
    			if($msgflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $msg_arr;
    				session_write_close();
    			header("location: ../Administrator/dashboard.php?page=My-Profile");
                exit();
    			}
    		}else 
{

//failed
    			$msg_arra[] = 'Oh snap! Change a few things up and try submitting again.';
    			$msgflag = true;
    			if($msgflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $msg_arra;
    				session_write_close();
    				header("location: ../Administrator/dashboard.php?page=My-Profile");
    				exit();
    			}
}






    		die("Query failed");
    $conn->close();
    	ob_end_flush();
    ?>
