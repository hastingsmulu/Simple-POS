<?php
	session_start();
include('../connect.php');
  



$idm = $_POST['memid'];
$a = $_POST['o-password'];
$b = $_POST['new-password'];
$c = $_POST['newretype-password'];

$names=$_SESSION['SESS_BIOGRAPHY'];
$daty=date('r');
$in='Updated Password';
$ju='Successfully';



$hashed_password = password_hash($c, PASSWORD_DEFAULT);

if(password_verify($b,$hashed_password)){

    		

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','posxdb');
// Establish database connection.
try
{
$pdo_conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
 
$sql = "SELECT * FROM users WHERE id=:uname";
		$pdo_statement = $pdo_conn->prepare( $sql );
$rows = $pdo_statement->execute( array( ':uname'=>	$idm,));
	$rows = $pdo_statement->fetchAll();
//verifying Password
if(isset($rows[0])){
foreach($rows as $row) {
 if(password_verify($_POST['o-password'], $row['passord']))
        {
//fetch Query
$result = $db->prepare("SELECT * FROM users WHERE id='$idm' ORDER BY id DESC LIMIT 1 ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                $n=$row['username'];

		}
// Save Query Session Activity
                $sql = "INSERT INTO session_activity_log (date,info,status,sid,user_name,account_type) VALUES (:a,:k,:m,:g,:f,:h)";
                $q = $db->prepare($sql);
                $q->execute(array(':a'=>$daty,':k'=>$ju,':m'=>$in,':g'=>$idm,':f'=>$n,':h'=>$names));
//Update password query
$sql = "UPDATE users 
        SET passord=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($hashed_password,$idm));


$_SESSION['message'] = '<i class="icon-android-checkmark-circle"></i> Password Changed successfully.';
header("location: Dashboard.php?page=My-Profile");
    				exit();
}
}
{
$_SESSION['message1'] = ' <i class="icon-android-warning"></i> Old Password Did not Match, try again.';
    				header("location: Dashboard.php?page=My-Profile");
    				exit();
}
}

    			}
else{
$_SESSION['message1'] = ' <i class="icon-android-warning"></i> New Password And Retyped New Password Did not Match, try again.';
    				header("location: Dashboard.php?page=My-Profile");
    				exit();
}


    			
    		
    			
?>