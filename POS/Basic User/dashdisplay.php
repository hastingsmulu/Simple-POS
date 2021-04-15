
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
?>

<script type="text/javascript" src="../app-assets/vendors/js/charts/chart.min.js"></script>
<script type="text/javascript" src="../app-assets/vendors/js/charts/chart.min.js"></script>
<script type="text/javascript" src="../app-assets/js/scripts/charts/chartjs/bar/bar.js"></script>
<script type="text/javascript" src="../Administrator/js/jquery.min.js"></script>
<script type="text/javascript" src="../Administrator/js/Chart.min.js"></script>
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        
        <div class="content-body">

<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-dashboard2">  </i>
<cite>Welcome, </cite><span class="tag tag tag-pill tag-info float-xs-center"><?=$_SESSION['SESS_FIRSTNAME']?></span>
  </div>

<hr>

<?php 
			if(isset($_SESSION['message1'])){
				?>
				
					<?php echo $_SESSION['message1']; ?>
				</div>
				<?php
				unset($_SESSION['message1']);
			}

			?>
<?php 
			if(isset($_SESSION['message'])){
				?>
				
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>



<section id="justified-top-border">
	<form method="post" action="Dashboard.php?page=Dashboard" style="text-align:left;">
    
  Search   
<fieldset class="form-group position-relative">

            <input type="text" name="search" class="form-control form-control-lg input-lg" id="iconLeft" >
            <div class="form-control-position">
                <i class="icon-search7 font-medium-2"></i>
            </div>
        </fieldset>
    </form>

 <div class="table-responsive">
<table id="resultTable"  class="table table-hover  table-bordered mb-0" >
	

    <?php
    if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "searchitems.php";
      
      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
         
           ?>

<tr class="record">
			
					<td class="blue-grey font-medium-1 text-bold-300"><i class="icon-cubes" ></i> <?php echo $r['name']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"><i class="icon-banknote" ></i> Ksh: <?php echo $r['price']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"><i class="icon-barcode" ></i> <?php echo $r['code']; ?></td>
			<td><a href="add_cart.php?id=<?php echo $r['id']; ?>" id="butsend" data-toggle="tooltip" data-placement="top" title="Add To Cart" data-original-title="Tooltip on top"><i class="icon-android-cart" ></i> Add</a> 
</td>
<?php
        }
      } else {
        echo "<div class='alert alert-danger alert-dismissible fade in mb-2' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button><i class='icon-android-hand'></i> No Items found";
      }
    }
    ?>
  </tr> 
	</tbody>
</table><hr>
<br><br>
<?php
if(isset($_SESSION['msg'])){
				?>
				<div style="text-align:left;" class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-checkmark-circle">  </i>
					<?php echo $_SESSION['msg']; ?>
				</div>
				<?php
				unset($_SESSION['msg']);
			}
                
		

?>

<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Item List</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
<div class="table-responsive">
<table id="resultTable"  class="table table-hover " >
	<thead class="table-inverse">
		<tr>
            
			<th> Name </th>
			<th> Price </th>
            <th> Code </th>
            <th> Qty </th>
            <th> Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
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
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY name ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['name']; ?></td>
			
			<td>Ksh: <?php
			$pprice=$row['price'];
			echo formatMoney($pprice, true);
			?></td>
			
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['qty']; ?></td>
			<td><a href="add_cartsilent.php?id=<?php echo $row['id']; ?>" id="butsend" data-toggle="tooltip" data-placement="top" title="Add <?php echo $row['name']; ?> To Cart" data-original-title="Tooltip on top"><i class="font-medium-2 text-bold-800 icon-cart31" ></i> </a> 
</td>
			</tr>
			<?php
				}unset($db);
			?>
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>

<hr>


 </div>
          </div>
        </div>
            

</section>
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Item Quantity Data Chart</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
        <canvas id="graphCanvas1" height="500"></canvas>

    </div>

    <script>
        $(document).ready(function (Cartegory) {
            showGraph(Cartegory);
        });


        function showGraph(Cartegory)
        {
            {
                $.post("datac.php",
                function (chartdata)
                {
                    console.log(chartdata);
                     var cartegory = [];
                    var total = [];
                    var status=[];

                    for (var x in chartdata) {
                        cartegory.push(chartdata[x].name);
                        total.push(chartdata[x].qty);
                    }

                    var chartdata = {
                        labels: cartegory,
                        datasets: [
                            {
                                label: 'Quantity',
                                backgroundColor: '#80CBC4',
                                borderColor: '#f3f3f3',
                                hoverBackgroundColor: '#004D40',
                                hoverBorderColor: '#004D40',
                                data: total
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas1");

                    var lineGraph = new Chart(graphTarget, {
                        type: 'horizontalBar',
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

</section>   </div>
    </div>

</section> 
<br>
 
</div></div></div>

<script type="text/javascript" src="../app-assets/vendors/js/charts/chart.min.js"></script>
<script type="text/javascript" src="../app-assets/vendors/js/charts/chart.min.js"></script>
<script type="text/javascript" src="../app-assets/js/scripts/charts/chartjs/bar/bar.js"></script>
<script type="text/javascript" src="../Administrator/js/jquery.min.js"></script>
<script type="text/javascript" src="../Administrator/js/Chart.min.js"></script>