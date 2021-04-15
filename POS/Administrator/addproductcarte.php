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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-cubes font-medium-4"> </i> Product Cartegory Info </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
             
            </div>
          </div>
        </div>
       

							

 <div class="content-body"><!-- gmaps basic maps section start -->

<button type="button" class="btn btn-secondary mr-1 ">
									<a href="http://localhost/work4/POS/Administrator/Dashboard.php?page=Add product"><i class="icon-android-arrow-forward"></i> Skip</a>
								</button>
<br><br><br>
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Product Cartegory Info</h4>
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
						
						<form class="form" action="saveproductcartegory.php" method="post">
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Product Cartegory</label>
											<input type="text" id="projectinput1" class="form-control" placeholder="Product Code" required="" name="cartegory">
										</div>
									</div>
									
								

																	<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput4">Status</label>
											<select id="projectinput5" name="status" class="form-control" required="">
<option selected="" disabled="">Select Status of the product</option>
<option value="Available">Available</option>
<option value="Out of Stoke">Out of Stoke</option>
</select>

										</div>
									</div>
								
								</div>
<div class="form-actions">
								
								<button type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> Save
								</button>
							</div>
								</div>


								

						</form>
					</div>
				</div>
			</div>
		</div>





</section>

	  

	<hr>
	<?php
		//info message
		if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
						<?php echo $_SESSION['message']; ?>

					</div>
				</div>
			</div><br>



			<?php
			unset($_SESSION['message']);
		}
		//end info message
		//fetch our products	
		//connection
		include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
<div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Full List</h4>
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
								<table id="resultTable"  class="table table-hover table-bordered mb-0" >
	<thead class="thead-inverse">
		<tr>
			
			<th class=" font-medium-2 text-bold-300">Item Name </th>
			<th class=" font-medium-2 text-bold-300">Cartegory </th>
             <th class=" font-medium-2 text-bold-300">Supplier </th>
			<th class=" font-medium-2 text-bold-300"> Price </th>
			<th class=" font-medium-2 text-bold-300">Item Code</th>
			<th class=" font-medium-2 text-bold-600"> Action </th>
             
		</tr>
	</thead>
	<tbody>
		
			<?php
			
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY name ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			
			<td class="blue-grey font-medium-1 text-bold-300"><?php echo $row['name']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"><?php echo $row['cartegory']; ?></td>
            <td class="blue-grey font-medium-1 text-bold-300"><?php echo $row['supplier']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300">Ksh: <?php echo $row['price']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"><?php echo $row['code']; ?></td>
			<td><a href="deleteproduct.php?id=<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a>
| <a rel="facebox" href="editproduct.php?id=<?php echo $row['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Tooltip on top"> <i class="icon-android-create" ></i> </a> 
</td>


			</tr>
			<?php
				}
			?>
		
	</tbody>
</table>

							</div></div>

				</div>
			</div>
			<?php
		}
		
		
		//end product row 
	?>
	

</div>
  </div></div></div><hr>
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