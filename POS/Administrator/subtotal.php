<?php


			
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}		
$a=date("m/ d/ yy");
$b=date("m/ d/ yy");
 

$sql="SELECT sum(total) FROM sales_order WHERE date BETWEEN '$a' AND '$b'";
$result1 = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result1))
{
    $rrr=$row['sum(total)'];
	echo money_format('%(#10n', $rrr);
 }

			mysqli_close($con);	
			
			?>