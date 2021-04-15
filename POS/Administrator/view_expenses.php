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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-tasks font-medium-4"> </i> Expenses Info </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
            
            </div>
          </div>
        </div>
       

<br>

 <div class="content-body"><!-- gmaps basic maps section start -->
<?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

              if(isset($_SESSION['msg'])){
				?>
				<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
					<?php echo $_SESSION['msg']; ?>
				</div>
				<?php
				unset($_SESSION['msg']);
			}
			?>

<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Expenses Info</h4>
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
					<div class="card-block">
						
						<form class="form" action="saveexpensesInfo.php" method="post">
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Cartegory</label>
											<select id="projectinput5" name="cartegory" required="" class="form-control">
<option  value="None" selected="" disabled="" >Select Cartegory of the Expense</option>
<option value="Lunch">Lunch</option>
<option value="Shop Repairs">Shop Repairs</option>

<option value="Employee">Employee</option>

<option value="Transport">Transport</option>

<option value="Other">Other</option>



</select></div>
									</div>
									
								<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Ammount in Ksh:</label>
											<input type="number" id="projectinput1" class="form-control" placeholder="amount" required=""name="amount">
										</div>
									</div>

																	<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput4">Description</label>
											<textarea type="text"  rows="6" class="form-control square" required="" placeholder="Type your Name and Describe the nature of the expense" name="comments"></textarea>
										

										</div>
									</div>
								
								</div>

								</div>


								

							<div class="form-actions">
								<button type="button" class="btn btn-warning mr-1 ">
									<a data-action="close"><i class="icon-cross2"></i> Cancel</a>
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> Save
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>





</section>

<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 </div>
          </div>
        </div>