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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-cubes font-medium-4"> </i>Add Product Info </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
             
            </div>
          </div>
        </div>
       
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
					<h4 class="card-title" id="basic-layout-form">Product Info</h4>
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
						
						<form class="form" action="saveproduct.php" method="post">
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Product Code</label>
											<input type="number" id="projectinput1" class="form-control" value="<?php echo date("dmyhsin"); ?>" placeholder="Product Code" name="code">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Product Name</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Product Name" name="name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput3">Actual Cost</label>
											<input type="currency" id="projectinput3" class="form-control"  name="cost" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput4">Price</label>
											<input type="currency" id="projectinput4" class="form-control"  name="price" required>
										</div>
									</div>
								</div>
<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput3">Cartegory</label>
											<select id="projectinput5" name="cartegory" class="form-control">
												
<?php
	include('../connect.php');

	$result = $db->prepare("SELECT * FROM Product_Category");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id']; ?>"><?php echo $row['category_description']; ?></option>
	<?php
	}
	?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput4">Status</label>
											<select id="projectinput5" name="status" class="form-control" required>
<option>Select Status of the product</option>
<option value="Available">Available</option>
<option value="Out of Stoke">Out of Stoke</option>
</select>
										</div>
									</div>
								</div>
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>
<div class="row">
									<div class="col-md-6">
								<div class="form-group">
									<label for="companyName">Qty</label>
									<input type="text" id="companyName" class="form-control" placeholder="Company Name" name="qty" required>
								</div>
</div>
								
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Supplier</label>
											<select id="projectinput5" name="supplier" class="form-control" required>
                                                    <option selected="" disabled="">Select Item Supplier</option>
												<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM supliers");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['name']; ?></option>
	<?php
	}
	?>
											</select>
										</div>
									</div>

									</div>

								

							<div class="form-actions">
								<button type="button" class="btn btn-warning mr-1">
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
 </div>
          </div>
        </div>