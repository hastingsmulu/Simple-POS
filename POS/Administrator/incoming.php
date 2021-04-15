<?php

include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$d = 0;

$result = $db->prepare("SELECT * FROM products WHERE id= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['price'];
$name=$row['name'];
}

//edit qty
$sql = "UPDATE products 
        SET qty=qty-?
		WHERE id=? and name=?";
$q = $db->prepare($sql);
$q->execute(array($c,$w,$b));
$fffffff=$asasa;
$d=$fffffff*$c;


$discount=0;
$status="New";
$now = new DateTime();// empty argument returns the current date
$interval = new DateInterval('P7D');//this objet represents a 7 days interval
$lastDay = $now->add($interval); //this will return a DateTime object
$formatedLastDay = $lastDay->format('Y-m-d');//this method format the DateTime object and
$date=$formatedLastDay;

// query
$sql = "INSERT INTO sales_order (invoice,product,qty,amount,name,price,discount,status,date) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$name,':f'=>$asasa,':g'=>$discount, ':h'=>$status, ':i'=>$date));
header("location: sales.php?id=$w&invoice=$a");

unset($db);

?>