<?php
if ($_SESSION['SESS_BIOGRAPHY'] !='Administrator'){
			$_SESSION['message'] = 'You need Admin-Rights to view this page.';
if(isset($_SESSION['message'])){
				?>
				<div style="text-align:right;" class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}
                exit();
		}

?>

<div class="app-content content container-fluid">
      <div class="content-wrapper">
             <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-calendar"></i> Today Sales Summary </h4>
          </div> 
        <div class="content-body">
<div class="container">

	<div class="row">

			<div class="container" style="margin-top: 50px">
<?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
					<strong><?php echo $_SESSION['message']; ?></strong>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
<hr>
 <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
 <div class="card-header">
                <h4 class="card-title">Sales Invoice</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li ><a  data-action="reload" href="Dashboard.php?page=Close Day"><i class="icon-reload"  ></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
<h3 class="teal">Today : <?php
$m=date("d-m-Y");
echo $m;
?></h3>
                            <div class="media-left media-middle"><br> 
                                <i class="icon-gold2 teal font-large-3 float-xs-left"></i>
                            </div>
                            <div class="media-body text-xs-right">
                                <span class="tag tag-info">Total Sales</span>
<?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$kx="Paid to collect";
$sql = "SELECT * FROM sales_order WHERE status='Not Paid'";
	$qsql = mysqli_query($con,$sql);
$row=mysqli_num_rows($qsql);

if($row=='1'){


echo  '
<br><i class="icon-tag3"></i><span class="tag  tag-warning"> <code>Plus Not Paid Cart</code></span>';

}else{

echo '';
}
?> 
<br>
<?php
$b=date("m/ d/ yy");
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$kx="Paid to collect";
$sql = "SELECT * FROM sales_order WHERE status='Paid to collect' AND date='$b'";
	$qsql = mysqli_query($con,$sql);
$row=mysqli_num_rows($qsql);

if($row=='1'){


echo  '*
<span class="tag  tag-warning"> <i class="icon-tag3"></i> <code>Plus Paid to collect Cart</code></span>';

}else{

echo '';
}
mysqli_close($con);
?>
                                <br><h3 class="blue">
<?php echo $_SESSION['SESS_CURREMY'];?>: <?php

include('../connect.php');
		
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
$j='Open';
$d=date("Y-m-d");
$v=date("d-m-Y");
$x=date("h-i-s");



$sqlr="SELECT * FROM totaldayearn WHERE date='$d'";
$result2 = mysqli_query($con,$sqlr);
while($row = mysqli_fetch_array($result2)){

$fff=$row['id'];
$ff=$row['date'];
}

$sql="SELECT sum(total) FROM sales_order WHERE date BETWEEN '$a' AND '$b'";
$result1 = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result1))
{
    $rrr=$row['sum(total)'];
    $_SESSION['total'] = $rrr;

If(!$ff==$d){
$sql = "INSERT INTO totaldayearn (date,total,status) VALUES (:i,:a,:h)";
                            $q = $db->prepare($sql);
                            $q->execute(array(':i'=>$d,':a'=>$rrr,':h'=>$j));
                            
                            		
                                               

 }
echo number_format($rrr, 2);  
			}
	unset($db);	
			mysqli_close($con);
			?></h3><br>
                                
                            </div>

                        </div>
<form method="post" id="my_form" action="save_carttot.php" style="text-align:center;">


<input type="text" name="status" class=" hidden form-control" value="Closed" id="status">
<input type="text" name="total" class=" hidden form-control" value="<?php echo $rrr;?> ">
<input type="text" name="id" class=" hidden form-control" value="<?php echo $fff;?>" >
<input type="text" name="date" class=" hidden form-control" value="<?php echo $d;?>" >
<button type="submit" class="btn btn-sm btn-outline btn-secondary " id="butsave" name="save" data-toggle="tooltip" data-original-title="Click To Save and Close Todays Sales" data-placement="bottom">Close Sales</button> 
                            </form><br>
<?php

$d=date("Y-m-d");
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM totaldayearn WHERE status='Open' AND date='$d'";
	$qsql = mysqli_query($con,$sql);
	$count= mysqli_num_rows($qsql);
    if($count>=1){
echo "<p style='text-align:center;color:gray;'>Todays Sales Still <code> Open</code> </p>";
}else{
echo "<p style='text-align:center;color:gray;'>Todays Sales <code> Closed</code></p>";}
mysqli_close($con);
?>

                    </div>
                </div>
            </div>
        </div>



		

 <div class="col-xl-3 col-lg-6 col-xs-12">
<div class="card">
 <div class="card-header">
                <h4 class="card-title">Expenses</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li class="  font-medium-2 "><a href="Dashboard.php?page=Manage expenses"><i class="icon-android-open" data-toggle="tooltip" data-original-title="Click To View Expenses list " data-placement="bottom" ></i></a></li>
                        <li ><a  data-action="reload" href="Dashboard.php?page=Close Day"><i class="icon-reload"  ></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
<h3 class="teal">Today : <?php
$m=date("d-m-Y");
echo $m;
?></h3>
                            <div class="media-left media-middle">
                                <i class="icon-ios-pie-outline cyan  font-large-3 float-xs-left"></i>
                            </div>
                            <div class="media-body text-xs-right">

<span class="tag tag-info">Total Expenses</span><br><br><h3 class="blue"><?php echo $_SESSION['SESS_CURREMY'];?>: <?php
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$m=date("d-m-Y");
$sqlr="SELECT sum(amount) FROM expenses WHERE date='$m'";
$result5 = mysqli_query($con,$sqlr);
while($row = mysqli_fetch_array($result5)){

$fff=$row['sum(amount)'];
if ($fff=='0'){
echo number_format($fff, 2);
}

}
   echo number_format($fff, 2);     
mysqli_close($con);
?>  </h1><br><br><br> <br>          </div>
                </div>
            </div>
        </div>

</div>

		<br><br>
	   
<!-- Sum of row Totals End-->
		   

	    
	
		  
	   
		</div>
			</div><hr>
			<div class="table-bordered">
<table id="resultTable"  class="table table-hover  mb-0" data-responsive="table">
	<thead class="table-inverse">
		<tr>
		
            <th> Item Details </th>
			
            <th>  Items Sold </th>
             <th>   Subtotal  </th>
             
		</tr>
	</thead>
	<tbody>
		


			<?php

$c= date("m/ d/ yy"); 
$d=date("m/ d/ yy");

				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE date BETWEEN '$c' AND '$d'");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td class="blue-grey font-medium-2 text-bold-500"><?php echo $row['cart_details']; ?></td>
<td class="blue-grey font-medium-2 text-bold-500"><?php echo $row['qty']; ?></td>
			<td class="blue-grey font-medium-2 text-bold-500"><?php echo $_SESSION['SESS_CURREMY'];?>: <?php echo number_format ($row['total'],2); ?></td>
			</tr>

			<?php
				}
	unset($db);	
			?>
<thead>
		<tr>
<th class="indigo font-medium-2 text-bold-800" style="text-align:right;">   Total : </th>

</thead>
	
		<tr class="bg-info">
			<td class="white font-medium-2  text-bold-800" style="text-align:right;"><?php echo $_SESSION['SESS_CURREMY'];?>: <?=  number_format($_SESSION['total'],2)?>
</tr>
	</tbody>
</table>

</div>
  </div></div></div><hr>
</div>
</div>
</div>
</div>
</div>
</div>