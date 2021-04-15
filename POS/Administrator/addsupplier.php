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
?>

<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;">Add Supplier Info <i class="icon-android-boat font-medium-4"></i></h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
             
            </div>
          </div>
        </div>
    <hr>   
 <div class="content-body"><!-- gmaps basic maps section start -->


<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Add Supplier Details</h4>
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
						
						<form class="form" action="savesupplier.php" method="post">
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Supplier </label>
											<input type="text" id="projectinput1" class="form-control" required="" placeholder="Product Code" name="name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Contact </label>
											<input type="tel" id="projectinput2" class="form-control" required="" placeholder="Product Name" name="contact">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput3">Address</label>
											<input type="address" id="projectinput3" class="form-control"  name="address">
										</div>
									</div>
									
								</div>

							<div class="form-actions">
								
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
<br><br><br><br><br><br><br><br>
 </div>
          </div>
        </div>