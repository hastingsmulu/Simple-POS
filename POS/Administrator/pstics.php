<?php
 if(!isset($_SESSION['SESS_SHOP'])) {
    		header("location: ../index.php");
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


counter("count12", 0,,3000);
counter("count11", <?php

//connection
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
	echo  ($rrrr);
 }
			
	mysqli_close($con);		
			?>,<?php
		//connection
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

});

</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<div class="app-content content container-fluid">
      <div class="content-wrapper">
         <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-stats-dots font-medium-4"> </i> Purchase History </h4>

          </div>
        <div class="content-body">

<section id="chartjs-line-charts popover-positions">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Day Total-cash Made Data Chart</h4>
<button type="button" class="btn bg-cyan"  data-toggle="popover" data-placement="bottom" data-container="body" data-original-title="Popover on bottom" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie."><p class="text-bold-800" >Today: <?php echo date("Hr"); ?> <i class="icon-stats-bars"></i></p></button> 

<h3 class="card-title text-xs-right">Total Earning</h3>
                    <h6 class="font-medium-2 text-xs-right"> Ksh: <span class="font-medium-5 tag  tag-info"><?php
//connection
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
	echo number_format($rrr, 2);
 }
			
	mysqli_close($con);		
			?></h6>
<br>

                        <h3 class="card-title text-xs-right">Todays Total Earnings
<?php

//connection
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
mysqli_close($con);
?> 

<?php
$b=date("m/ d/ yy");
//connection
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
<br> *
<span class="tag  tag-warning"> <code>Plus Paid to collect Cart</code></span>';

}else{

echo '';
}
mysqli_close($con);
?></h3>
                        <h5 class="font-medium-2 text-xs-right"> Ksh: <span class="font-medium-5 tag  tag-info"><?php


			
//connection
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
	echo number_format($rrr, 2);
 }
			
		mysqli_close($con);	
			?> </span></h5>

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
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
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

                    var chartdata = {
                        labels: date,
                        datasets: [
                            {
                                label: 'Total Ksh',
                                backgroundColor: '#66BB6A',
                                borderColor: '#004D40',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#1B5E20',
                                data: total
                            }


                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }
        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> <hr>
</div>
					</div>
				</div>
			</div>
		</div>