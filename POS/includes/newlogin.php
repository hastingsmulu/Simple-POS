<?php
//Start session
    	session_start();
//Include database connection details

        require_once('dbconfig.php');

//Array to store validation errors
    	$errmsg_arr = array();
     
    	//Validation error flag
    	$errflag = false;

// GET username from input
        $username =$conn->real_escape_string( $_POST['username']);

//prepare inputs

        $query="SELECT * FROM grsxcvg_users WHERE username=?";

// Bind a variable to the parameter as a string. 
        
        $stmt=$conn­>prepare($query);

// Execute the statement.
       
        $stmt->execute();

        if(mysqli_num_rows($stmt) > 0) {
    			//Login Successful
    			session_regenerate_id();
    		   $member = mysqli_fetch_assoc($result);
    		   $_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
               $_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
               $_SESSION['SESS_LAST_NAME'] = $member['LastName'];
               $_SESSION['SESS_EMAIL'] = $member['Email'];
    		   $_SESSION['SESS_USERNAME'] = $member['username'];
    		   $_SESSION['SESS_CLASS'] = $member['class'];

    			session_write_close();
    			header("location: ../pages/signin.php");
    			exit();
    		
    		}else {

//Login failed
    			$errmsg_arr[] = '<img src="../assets/img/system-error.svg"> Incorrect Username or Password, Try Again. ';
    			$errflag = true;
    			if($errflag) {
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: ../pages/login.php");
    				exit();
    			}
// Close the prepared statement.
        
        $stmt->close();
    }

die("Query failed");
    $conn->close();

?>