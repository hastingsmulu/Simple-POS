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
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="Dashboard.php?page=Dashboard">Home</a>
                </li>
                <li class="breadcrumb-item text-bold-800"><a href="#">Close Day</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">

<hr>


<div class="container">
	
	   <div class="card-header">
	    <h6 class="card-title teal font-medium-3 text-bold-800" style="text-align:center;">Total Sales in Summary</h6>
	   
	    </div>
	


	<div class="row">

			<div class="container" style="margin-top: 50px">
<?php 

// Close Sales Notifications
			if(isset($_SESSION['message1'])){
				?>
				
					<strong><?php echo $_SESSION['message1']; ?></strong>
				</div>
				<?php
				unset($_SESSION['message1']);
			}

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
 <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
<h3 class="teal">Today : <?php
$m=date("d-m-Y");

echo $m;
?></h3>
                            <div class="media-left media-middle">
                                <i class="icon-gold2 teal font-large-2 float-xs-left"></i>
                            </div>
                            <div class="media-body text-xs-right">
                                <span>Total Sales Today</span>
                                <h3 class="blue">Ksh <?php


			
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
    $_SESSION['total'] = $rrr;
	echo number_format($rrr, 2);
 }
			mysqli_close($con);
			
			?></h3>
                             <div class="tag tag-default"> <br>Closed</div>   
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>


 <!-- Sum of row Totals begining-->
		
 
</div></div>
	    <hr> <!-- Sum of row Totals End-->
		   

	    
	
		  
	   
		</div>
			</div>
<div class="card-header">
<h6 class="card-title teal font-medium-3 text-bold-800" style="text-align:center;">Today's Sales in Summary</h6>
</div>
			<div class="table-bordered">
<table id="resultTable"  class="table table-hover table-bordered mb-0" data-responsive="table">
	<thead>
		<tr>
		
            <th class="indigo font-medium-2 text-bold-800"> Item Details </th>
			
             <th class="indigo font-medium-2 text-bold-800">   Subtotal  </th>
             
			<th class="indigo font-medium-2 text-bold-800">   Action  </th>
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
			<td class="blue-grey font-medium-2 text-bold-500">KSh <?php echo $row['total']; ?></td>
			<td><a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a></td>
			</tr>

			<?php
				}
	unset($db);	
			?>
<thead>
		<tr>
<th class="indigo font-medium-2 text-bold-800" style="text-align:right;">   Total : </th>

</thead>
	
		<tr>
			<td class="blue-grey font-medium-2  text-bold-800" style="text-align:right;"> Ksh <?= $_SESSION['total'] ?>.00
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