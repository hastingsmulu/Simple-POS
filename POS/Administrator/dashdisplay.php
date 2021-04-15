
<?php
 if(!isset($_SESSION['SESS_PASS'])) {
    		header("location: ../login.php");
    		exit();
    	}
if(!isset($_SESSION['SESS_MEMBER_ID'])) {
    		header("location: ../login.php");
    		exit();
    	}
if(!isset($_SESSION['SESS_USERNAME'])){
    		header("location: ../login.php");
    		exit();
    	}

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
<script>

document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : 0,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 0, <?php
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    
$sql = "SELECT * FROM products WHERE status='Available'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 3000);

 counter("count2", 0, <?php


$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql = "SELECT * FROM sales_order";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 2500);


 counter("count4", 0, <?php
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM saved_cart WHERE comment='Not Paid'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 3000);


 counter("count5", 0, <?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM users WHERE active='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 30);


 counter("count6", 0, <?php
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM Product_Category WHERE status='Available'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 3000);

 counter("count7", 0, <?php


$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM products WHERE qty='0'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 300);

 counter("count8", 0, <?php


$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM shopdetails ";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 300);

 counter("count9", 0, <?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Check connection

$sql = "SELECT * FROM supliers";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 300);

counter("count10", 0,<?php

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
 $counter='1000';


$sql="SELECT sum(total) FROM sales_order WHERE status='Paid' AND date='$b'";
$result1 = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result1))
{
    $rrr=$row['sum(total)'];
    $_SESSION['total'] = $rrr;
	
echo $rrr;
 }
		mysqli_close($con);
			
			?>,3000);

counter("count12", 0,<?php
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

		
$a=date("m/ d/ yy");
$b=date("m/ d/ yy");
 $counter='1000';

$sql="SELECT sum(total) FROM sales_order WHERE date BETWEEN '$a' AND '$b'";
$result1 = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result1))
{
    $rrr=$row['sum(total)'];
    $_SESSION['total'] = $rrr;
	echo $rrr;
 }
		mysqli_close($con);	
			
			?>,3000);

counter("count11", <?php
		
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
		


$sqlr="SELECT sum(total) FROM totaldayearn";
$result2 = mysqli_query($con,$sqlr);


while($row = mysqli_fetch_array($result2))
{
    $rrr=$row['sum(total)'];
    $_SESSION['total'] = $rrr;
$rrrr=$rrr-$counter;
	echo ($rrrr);
 }
			
		mysqli_close($con);	
			?>,<?php
		
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }	


$sqlr="SELECT sum(total) FROM totaldayearn";
$result2 = mysqli_query($con,$sqlr);


while($row = mysqli_fetch_array($result2))
{
    $rrr=$row['sum(total)'];
    $_SESSION['total'] = $rrr;
	echo ($rrr);
 }
			
			mysqli_close($con);
			?>,0);


counter("count18", 0,<?php
		
$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM sales_order WHERE status='Paid'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
			
		mysqli_close($con);	
			?>,300);


 counter("count15", 0, <?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM users WHERE active='Deactivated'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 30);

 counter("count19", 0, <?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM sales_order WHERE status='Not Paid'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 30);

counter("count20", 0, <?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM sales_order WHERE status='Not Paid'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?>, 30);




});

</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        
        <div class="content-body">

<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-dashboard2">  </i>
<span class="tag tag tag-pill tag-info float-xs-center"><?=$_SESSION['SESS_FIRSTNAME']?></span><cite>, Welcome to your Point of Sale Dashboard!!. </cite>

									
  </div>
									
								

<div class="row">
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card bg-grey bg-darken-2">
            <div class="card-body">
               <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-cubes font-large-2 white "></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5> Listed Products</h5>
<span id="count1" class="font-medium-5"></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
  
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card bg-green bg-darken-4">
            <div class="card-body">
               <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-banknote font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Todays Total Earnings</h5>
                        <h5 class="font-medium-2"> <?php echo $_SESSION['SESS_CURREMY'];?>: <span id="count10" class="font-medium-5"> </span></code>

</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card bg-deep-orange bg-darken-2">
            <div class="card-body">
                <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-bag font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Total Sales Made </h5>
                       <span id="count2" class="font-medium-5"></span>
<h2 class="text-bold-800">

</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card  bg-orange bg-darken-3">
            <div class="card-body">
                <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-stack font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Suspended transaction</h5>
                        <h2 class="text-bold-800"><span id="count4" class="font-medium-5"></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   </div>	

 </div>				
</section>




	

                   
				
							

							

<div class="row">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Listed Items</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="card-block">
                    <p class="m-0"><span class="float-xs-right"><a href="Dashboard.php?page=Products" >View Full List <i class="icon-arrow-right2"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0"> 
	<thead class="table-inverse table-bordered">
		<tr>
			
			<th > Name </th>
			<th > Cartegory </th>
			<th > Price </th>
			<th > Supplier </th>
			<th > Qty </th>
			<th > Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			function format_Moni($number, $fractional=false) {
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
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY name ASC LIMIT 12");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['name']; ?></td>
            <td><?php echo $row['cartegory']; ?></td>
			<td><?php echo $_SESSION['SESS_CURREMY'];?> <?php
			$pprice=$row['price'];
			echo format_Moni($pprice, true);
			?></td>
			<td><?php echo $row['supplier']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td class=" table-bordered"><a rel="facebox" href="editproduct.php?id=<?php echo $row['id']; ?>"> <i class="icon-android-create" data-toggle="tooltip" data-placement="top" title="Edit <?php echo $row['name']; ?>" data-original-title="Tooltip on top"></i> </a>   <a href="deleteproduct.php?id=<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete <?php echo $row['name']; ?>" data-original-title="Tooltip on top"></i></a></td>
			</tr>
			<?php
				}
unset($db);
			?>
		
	</tbody>
</table>
                </div>
            </div>
        </div>
    </div>
<div class="col-xl-4 col-lg-12">
        <div class="card bg-success bg-darken-4 ">
            <div class="card-body">
               <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Active Users </h5>
                        <h2 class="text-bold-800">
<span id="count5" class="font-medium-5"></span>
</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<div class="col-xl-4 col-lg-12">
    
        <div class="card bg-cyan bg-darken-2">
            <div class="card-body">
                <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-user-times font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Deactiveted users</h5>
                        <h5 class="text-bold-8400"> <span id="count15" class="font-medium-5"></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
<div class="col-xl-4 col-lg-12">
    
        <div class="card bg-indigo bg-darken-4">
            <div class="card-body">
               <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-box font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Available Item Cartegory</h5>
                        <h5 class="text-bold-800"><span id="count6" class="font-medium-5"></span>


</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> </div>	
 <div class="col-xl-4 col-lg-12">
    
        
       <div class="card bg-brown bg-darken-4">
            <div class="card-body">
                <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-alert-circled font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Out of Stoke</h5>
                        <h5 class="text-bold-8400"><span id="count7" class="font-medium-5"></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>	

<div class="col-xl-4 col-lg-12">
    
        <div class="card bg-teal bg-darken-2">
            <div class="card-body">
                <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-shop2 font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Listed Shops</h5>
                        <h5 class="text-bold-8400"> <span id="count8" class="font-medium-5"></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div> </div>
       <div class="col-xl-4 col-lg-12">
<div class="card bg-pink bg-accent-4">
            <div class="card-body">
                <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle">
                        <i class="icon-android-boat font-large-2 white"></i>
                    </div>
                    <div class="media-body white text-xs-right">
                        <h5>Listed Supliers</h5>
                        <h2 class="text-bold-800"><span id="count9" class="font-medium-5"></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> </div>
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
            <div class="card bg-cyan bg-darken-4">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <i class="icon-arrow-graph-up-right white font-large-2 float-xs-left"></i>
                            </div>
                                <div class="media-body white text-xs-right">
                               <h3 id="count18" class="font-medium-2 text-xs-right" ></h3>
                                <span>Total paid invoices</span>
                                    </br><a class="tag tag-default font-medium-1" href="Dashboard.php?page=Manage reports">Go to Invoice Summary</a></span></div></br></br></br></br></br>
<?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM sales_order WHERE status='Not Paid'";
	$qsql = mysqli_query($con,$sql);
	$rapid = mysqli_num_rows($qsql);
$_SESSION['RAID'] = $rapid;
?>
<?php

$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM sales_order WHERE status='Not Paid'";
	$qsql = mysqli_query($con,$sql);
$row=mysqli_num_rows($qsql);

if($row=='0'){

echo $rapid;
echo  '
 <h3 class="font-medium-2 text-xs-right" ></h3>
<span>Total Not-Paid invoices</span></div>';

}else{
echo '<div class="media-left media-middle">
                                <i class="icon-android-alert red font-large-2 float-xs-left"></i>
                            </div><div class="media-body white text-xs-right">
                               <h3 id="count20" class="font-medium-2 text-xs-right" ></h3>
            
                                <span >Total Not-Paid invoices</span></div>';
}
mysqli_close($con);
?>
                                </br>
                                
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>


  
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Not-Paid Invoice</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
              
                <div class="table-responsive">
                   <table class="table table-hover table-responsive  mb-0">
                        <thead class="table-inverse table-bordered">
                            <tr>
            <th > Ref/No:</th>
            <th > Item Details </th>
            <th > Paticulars </th>
            <th > Pay Method & Amount </th>
            <th > Customer</th>
             <th >   Sales Person  </th>
                            </tr>
                        </thead>
                        <tbody>
		
			<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE status='Not Paid' ORDER BY id DESC  ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td class="blue-grey font-medium-2 text-bold-500" style="width: 10%;"><?php echo $row['refno']; ?></td>
			<td class="blue-grey font-medium-2 text-bold-500" style="width: 19%;"><?php echo $row['cart_details']; ?></td>
			<td class="text-truncate ">
<?php if($row['status']=='Paid'){

echo '<span class="tag tag-default font-medium-1 "  >'.$row['status'].'</span>'; 

}
else{


echo '<button class="btn btn-lg btn-danger"><a class="tag tag-danger " href="updatestats.php?id='.$row['id'].'" class="button" title=""><span class="font-medium-1 " data-toggle="tooltip" data-placement="bottom" data-original-title="Cart is '.$row['status'].'! Click to update Paid" >'.$row['status'].'</span></button></a>'; 
}

?>
</td>
			<td class="text-truncate font-medium-2 text-bold-500"> <code><?php echo $row['pmeth']; ?></code> => <?php if($row['pmeth']=='M-pesa'){
echo '<span class="tag tag-default tag-success font-medium-1 ">'.$row['mpesacode'].'</span> <br><br> Amount => <p class="tag tag-default tag-info font-medium-2 ">  ';
echo  $_SESSION['SESS_CURREMY'] ;
echo number_format ($row['total'],2);
echo '</p>'; 

}
else{
$cash= number_format ($row['total'],2);
echo '<p class="tag tag-default tag-info font-medium-2 "> ';
echo $_SESSION['SESS_CURREMY'] ;
echo  $cash;
echo '</p>';
}
?></td>
			<td class="text-truncate font-medium-2 text-bold-500">
<?php if($row['customer']=='Walk-in Customer'){
echo '<span class="tag tag-default font-medium-1 "  >'.$row['customer'].'</span>'; 

}
else{
echo '<p class="tag tag-info font-medium-2 "> '.$row['customer'].'</p>';
}
?></a></td>
			<td >
<?php if($row['slpn']=='Admin'){

echo '<span class="tag tag-default tag-warning font-medium-1 "  >'.$row['slpn'].'</span>'; 

}
else{
echo '<span class="tag tag-primary font-medium-1 ">'.$row['slpn'].'</span>';
}
?>

</td>
</tr>
			<?php
				}
unset($db);
			?>
		
            
                               
	</tbody>
                    </table><hr>
 <span class="font-medium-2 text-xs-right" >Total Not-Paid invoices</span> <span id="count20" class="font-medium-2 tag tag-danger text-xs-left" ></span>
 
                </div>
            </div>
        </div>
    </div>

</div>
    
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                <div class="card-header ">
<br>
                        
              
                    <h3 class="card-title text-xs-right">Total Earning</h3>
                    <h6 class="font-medium-2 text-xs-right"> <?php echo $_SESSION['SESS_CURREMY'];?>  <span id="count11" class="font-medium-5 tag tag-info"></h6>
<a href="Dashboard.php?page=Purchase%20Statistics" class="btn bg-cyan mr-1 white">Go to Statistics <i class="icon-stats-bars"></i></a> 

                        <h3 class="card-title text-xs-right">Todays Total Earnings 
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
<br> *<span class="tag  tag-warning"> <code>Plus Not Paid Cart</code></span>';

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


echo  '
 *
<span class="tag  tag-warning"> <code>Plus Paid to collect Cart</code></span>';

}else{

echo '';
}
mysqli_close($con);
?> </h3>
                        <h5 class="font-medium-2 text-xs-right"> <?php echo $_SESSION['SESS_CURREMY'];?>: <span id="count12" class="font-medium-5 tag  tag-info"> </span></h5>

                    <a class="heading-elements-toggle"><i class="icon-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block chartjs">
                        <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function (total) {
            showGraph(total);
        });


        function showGraph(total)
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var date = [];
                    var total = [];

                    for (var i in data) {
                        
                        date.push(data[i].date);
                        total.push(data[i].total);
                    }

                    var data = {
                        labels: date,
                        datasets: [
                            {
                                label: 'Day Earnings',
                                backgroundColor: '#97E1CE',
                                borderColor: '#30A487',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: total
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: data
                    });
                });
            }
        }
        </script><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>  
 </div>
    </div>

     
<br>
 
</div></div></div>
