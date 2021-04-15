<?php

include "db.php";

session_start();
// Indexed Array

						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'root', '', 'posxdb');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){

                            $name = array($row['name']);
                            $price = array($row['price']);
								?>
<?php 
$name = $row['name'];
   $name_explode = explode(" , ",$row['name']);  

//Get each item QTY value from database by name
  $sqlr="SELECT qty FROM products WHERE name=('".$name."')";
$result2 = mysqli_query($conn,$sqlr);
while($row = mysqli_fetch_array($result2)){

$fff=$row['qty'];
$xx='Out of Stoke';


}


?>

<?php 
$qty = ($_SESSION['qty_array'][$index]);
$set=$fff-$qty;//subtract Qty
if($set<='0'){
include('../connect.php');
$sql = "UPDATE products 
        SET status=?
		WHERE name=?";
$q = $db->prepare($sql);
$q->execute(array($xx,$name));
}


include('../connect.php');
//update Qty 
$sql = "UPDATE products 
        SET qty=?
		WHERE name=?";
$q = $db->prepare($sql);
$q->execute(array($set,$name));



?>
<?php
								$index ++;
}
}
else
{
?>
<?php
}
?> 

<?php
	





$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
include('../connect.php');
$a = $_POST['suspend'];
$e= $_POST ['totals'];
$k= $_POST['date']; 
$h= $_POST['refno'];
$p= $_POST['status'];
$d= $_POST['suspend'];
$q= $fff;	
$v=$_POST['spn'];
$xx=$_POST['pmetho'];
$mcode=$_POST['pmethos'];
$pop=$_POST['spn'];
$noob=$_POST['customer'];
$phome=$_POST['phno'];
if($mcode == '') {
    		$mcode='null';
    	}
// save query
$sql = "INSERT INTO sales_order (date,cart_details,qty,pmeth,refno,mpesacode,total,slpn,customer,pno,status) VALUES (:i,:a,:m,:f,:h,:r,:b,:c,:s,:qt,:n)";
$q = $db->prepare($sql);
$q->execute(array(':i'=>$k,':a'=>$a,':m'=>$index,':f'=>$xx,':h'=>$h,':r'=>$mcode,':b'=>$e,':c'=>$pop,':s'=>$noob,':qt'=>$phome,':n'=>$p));


 $_SESSION['message'] = "<div class='alert alert-info alert-dismissible fade in mb-2' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button><i class='icon-android-checkmark-circle'></i> Cart Saved Successful!";
		
		header('location: print.php');
	
?>
