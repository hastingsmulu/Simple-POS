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
<script type="text/javascript" src="../app-assets/vendors/js/charts/chart.min.js"></script>
<script type="text/javascript" src="../app-assets/vendors/js/charts/chart.min.js"></script>
<script type="text/javascript" src="../app-assets/js/scripts/charts/chartjs/bar/bar.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        
        <div class="content-body">
<div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-stats-dots font-medium-4"> </i>Item Quantity </h4>
          </div>

<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Available Item Quantity Data Chart</h4>
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
                                backgroundColor: '#80ABC4',
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

</section> <hr>

    </div>
            </div>
        </div>
    </div>