<?php
$nameArr = json_decode($_POST["name"]);
$priceArr = json_decode($_POST["price"]);
$qtyArr = json_decode($_POST["qty"]);
$totalArr = json_decode($_POST["total"]);
$statusArr = json_decode($_POST["status"]);

$con=mysqli_connect("localhost","root","","posxdb");
/* Check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
for ($i = 0; $i < count($nameArr); $i++) {

    if(($nameArr[$i] != "")){   /* not allowing empty values and the row which has been removed. */
    $sql="INSERT INTO saved_cart (date,name,price,qty,total,status)
VALUES
('$nameArr[$i]','$priceArr[$i]','$qtyArr[$i]','$totalArr[$i]')";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }
    }
}
Print  "Data added Successfully !";
$_SESSION['message'] = "Cart Suspended Successfully";
mysqli_close($con);

header('location: Dashboard.php?page=Checkout');
?>

