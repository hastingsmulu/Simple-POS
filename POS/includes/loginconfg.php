<?php
ob_start();
    	//Start session
    	 session_start();
     
    	//Include database connection details

include('db.php');
       	
    	//Array to store validation errors
    	$errmsg_arr = array();
     
    	//Validation error flag
    	$errflag = false;
     
    	//Function to sanitize values received from the form. Prevents SQL injection
    	function clean($str) {
    		echo "str: ".$str;
    		$str = @trim($str);
    		if(get_magic_quotes_gpc()) {
    			$str = stripslashes($str);
    		}
    		return mysqli_real_escape_string($str);
    	}
     
    	//Sanitize the POST values
    	$username = $_POST['username'];
        $token = md5(uniqid(mt_rand(), true));

    	//Input Validations
    	if($username == '') {
    		$errmsg_arr[] = '<img src="assets/img/system-error.svg"> incorrect Username or Password ';
    		$errflag = true;
    	}
//If there are input validations, redirect back to the login form
    	if($errflag) {
           
    		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    		session_write_close();
    		header("location: login.php");
    		exit();
    	}


	$sql = "SELECT * FROM users WHERE username=:uname";
		$pdo_statement = $pdo_conn->prepare( $sql );
$result = $pdo_statement->execute( array( ':uname'=>	$username,));
	$result = $pdo_statement->fetchAll();

        
       

    		if(!empty($result)) { 
		foreach($result as $row) {
    			//Login Successful
               //generate session data for next page only
    			session_regenerate_id();
    			
        		    $_SESSION['SESS_MEMBER_ID'] = $row['id'];
                $_SESSION['BOOHOO'] =$token;
        		 $_SESSION['SESS_USERNAME'] = $row['username'];
        		 $_SESSION['SESS_EMAIL'] = $row['email'];
        		 $_SESSION['SESS_FIRSTNAME'] = $row['firstname'];
                $_SESSION['SESS_LASTNAME'] = $row['lastname'];
                $_SESSION['SESS_BIOGRAPHY'] = $row['usertype'];
                $_SESSION['SESS_ACTIVITY'] = $row['active'];

                	
                
                    		
                    			
               }
$conn = mysqli_connect("localhost","root","","posxdb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	if (isset($_SESSION['SESS_ACTIVITY'])){
		$query=mysqli_query($conn,"select * from users where active='".$_SESSION['SESS_ACTIVITY']."'");
		$row=mysqli_fetch_array($query);
		
		if ($row['active']=='Active'){
                header("location: ../index.php?page=&ok-signin- E0Zr3&K5d q6");
    			exit();}




//Login failed
    			$errmsg_arr[] = '<br><img src="assets/img/system-error1.svg"> <br>This User is Locked.<br> Please Contact Administrator to Activate your Account. ';
    			$errflag = true;
    			if($errflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: ../login.php");
    				exit();
    			}}
}






    		$errmsg_arr[] = '<br><img src="assets/img/system-error.svg"><br> Incorrect Username or Password, Try Again. ';
    			$errflag = true;
    			if($errflag) {
                      
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: ../login.php");
    				exit();
    			}


unset($db);
   
    ?>
