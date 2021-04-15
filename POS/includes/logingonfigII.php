<?php
ob_start();
    	//Start session
    	session_start();
     
    	//Include database connection details
     	
include('db.php');
include('../connect.php');
    	//Array to store validation errors
    	$errmsg_arr = array();
      

    //User Class Flag
    $classflag = false;
     
    	//Validation error flag
    	$errflag = false;
     
    	
     
        	//Sanitize the POST values
        

        $username=($_POST['username']);
    	$password=($_POST['passwrd']);
        $shop =($_POST['shopacc']);
        $token = md5(uniqid(mt_rand(), true));
$u='Successfuly';
$_SESSION['loggedin_time'] = time();  

$daty=date('r');
$in='Loged in';
    	//Input Validations
    	if($password == '') {
    		$errmsg_arr[] = '<img src="assets/img/system-error.svg"> Incorrect Username or Password. Try Again.';
    		$errflag = true;
    	}
        
       	 
       

    //If there are input validations, redirect back to the login form
    	    if($errflag) {
    		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    		session_write_close();
    		header("location: ../signin.php");
    		exit();
    	}

     

 

 $sql = "SELECT * FROM users WHERE username=:uname";
		$pdo_statement = $pdo_conn->prepare( $sql );
$rows = $pdo_statement->execute( array( ':uname'=>	$username,));
	$rows = $pdo_statement->fetchAll();


//verifying Password
if(isset($rows[0])){
foreach($rows as $row) {
 if(password_verify($_POST['passwrd'], $row['passord']))
        {

$id=$row['id'];
$names=$row['usertype'];
//log infor for admin loginclude('../connect.php');

		


// save query
              


    			//Login Successful
    			session_regenerate_id();
    			
           /* Store there credentials */
    		    $_SESSION['SESS_MEMBER_ID'] = $row['id'];
                $_SESSION['SESS_FIRSTNAME'] = $row['firstname'];
                $_SESSION['SESS_LASTNAME'] = $row['lastname'];
    		    $_SESSION['SESS_USERNAME'] = $row['username'];
    		    $_SESSION['SESS_UEMAIL'] = $row['email'];
    		    $_SESSION['SESS_PASS'] =  $token;
                $_SESSION['SESS_BIOGRAPHY'] = $row['usertype'];
                $shopname=$_SESSION['SESS_SHOP'];	

  $sql = "INSERT INTO session_activity_log (date,info,status,sid,user_name,account_type) VALUES (:a,:k,:m,:g,:f,:h)";
                $q = $db->prepare($sql);
                $q->execute(array(':a'=>$daty,':k'=>$u,':m'=>$in,':g'=>$id,':f'=>$username,':h'=>$names));
	$sql = "SELECT * FROM shopdetails WHERE sname=:uname";
		$pdo_statement = $pdo_conn->prepare( $sql );
$result = $pdo_statement->execute( array( ':uname'=>	$shop,));
	$result = $pdo_statement->fetchAll();
foreach($result as $row) {
    			//Login Successful
               //generate session data for next page only
    			session_regenerate_id();
    			
        		 $_SESSION['SESS_SHOP_ID'] = $row['sid'];
        	    $_SESSION['SESS_SNAME'] = $row['sname'];
        	    $_SESSION['SESS_SEMAIL'] = $row['email'];
        		$_SESSION['SESS_LOCATION'] = $row['location'];
                $_SESSION['SESS_ADDRESS'] = $row['address'];
                $_SESSION['SESS_CATEGORY'] = $row['category'];
                $_SESSION['SESS_CONTACT'] = $row['contacts'];	
                $_SESSION['SESS_CURREMY'] = $row['currency'];	


    			session_write_close();
}


	$conn = mysqli_connect("localhost","root","","posxdb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	if (isset($_SESSION['SESS_BIOGRAPHY'])){
		$query=mysqli_query($conn,"select * from users where usertype='".$_SESSION['SESS_BIOGRAPHY']."'");
		$row=mysqli_fetch_array($query);
		
		if ($row['usertype']=='Administrator'){
			header("location: ../Administrator/Dashboard.php?page=Dashboard");
    			exit();
		}
		if ($row['usertype']=='Cashier'){
			header('location:../Basic User/Dashboard.php?page=Create Sale');
                exit();
		}
	}




    			
    			}
    		
}
    		} 

{
                



//Login failed
              

    			
    			$errmsg_arr[] = ' <img src="assets/img/system-error.svg"> Incorrect Username or Password, try again.';
    			$errflag = true;
    			if($errflag) {
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: ../index.php?page=&ok-signin- E0Zr3&K5d q6");
    				exit();
    			}
}
    		$errmsg_arr[] = ' <img src="assets/img/system-error.svg"> Incorrect Username or Password, try again.';
    			$errflag = true;
    			if($errflag) {
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: ../index.php?page=&ok-signin- E0Zr3&K5d q6");
    				exit();
    			}
    ?>
