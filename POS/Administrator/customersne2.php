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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-user5 font-medium-4"> </i> Customer List </h4>
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

<div class="container">
	
	  
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
				$result = $db->prepare("SELECT * FROM custemers ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>

<div class="table-responsive">
								<table id="resultTable"  class="table table-hover  mb-0" >
	<thead class="table-bordered thead-inverse">
		<tr>
			<th >Name </th>
			<th >Address </th>
             <th >Comment </th>
             <th >Action </th>
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
			
		
			<td ><?php echo $row['name']; ?></td>
			<td ><?php echo $row['address']; ?></td>
			<td ><?php echo $row['comment']; ?></td>
			<td class="table-bordered font-medium-1 text-bold-300"style="width:5%"><a href="deletecstmr.php?id=<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a>

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