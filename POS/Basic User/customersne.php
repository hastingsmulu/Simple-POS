<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Dashboard.php?page=Dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Add Customer Info</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
       

<br>

 <div class="content-body"><!-- gmaps basic maps section start -->
<?php 

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
					<h4 class="card-title" id="basic-layout-form">Customer Info</h4>
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
						
						<form class="form" action="savecustemersInfo.php" method="post">
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Customer:</label>
											<input type="text" id="projectinput1" class="form-control" placeholder="name" name="cname"></div>
									</div>
									
								<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Address:</label>
											<input type="text" id="projectinput1" class="form-control" placeholder="Address" name="caddress">
										</div>
									</div>

																	<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput4">Comments</label>
											<textarea type="text"  rows="6" class="form-control square" placeholder="Type your Comment About The Customer" name="comments"></textarea>
										

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
<div class="container">
	<hr>
<?php 
			if(isset($_SESSION['msg2'])){
				?>
				<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
					<?php echo $_SESSION['msg2']; ?>
				</div>
				<?php
				unset($_SESSION['msg2']);
			}?>
	   <div class="card-header">
	    <h6 class="card-title warning text-bold-800 font-medium-3" style="text-align:center;">Customer List</h5>
	   
	    </div>
	  

	<hr>
	<?php
		//info message
		if(isset($_SESSION['msg'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
						<?php echo $_SESSION['msg']; ?>

					</div>
				</div>
			</div><br>



			<?php
			unset($_SESSION['msg']);
		}
		//end info message
		//fetch our products	
		//connection
		include('../connect.php');
				$result = $db->prepare("SELECT * FROM custemers ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>

<div class="table-responsive">
								<table id="resultTable"  class="table table-hover table-bordered mb-0" >
	<thead>
		<tr>
			<th class="teal font-medium-2 text-bold-300">Name </th>
			<th class="teal font-medium-2 text-bold-300">Address </th>
             <th class="teal font-medium-2 text-bold-300">Comment </th>
             
		</tr>
	</thead>
	<tbody>
		
			<?php
			
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM custemers ORDER BY id ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			
		
			<td class="blue-grey font-medium-1 text-bold-300"><?php echo $row['name']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"><?php echo $row['address']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"><?php echo $row['comment']; ?></td>
			


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