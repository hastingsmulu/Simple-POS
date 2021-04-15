
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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-shop text-bold-800 font-medium-9"> </i> Manage Shops </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              
            </div>
          </div>
        </div>
<hr>
        <div class="content-body"><!-- gmaps basic maps section start -->

<?php 
			if(isset($_SESSION['message'])){
				?>
				
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>



<section id="gmaps-basic-maps">
    <!-- Basic Map -->

<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Active Shops</h4>
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

<div class="table-bordered">
<table id="resultTable"  class="table table-bordered mb-0" data-responsive="table">
	<thead>
		<tr>
            <th class="indigo font-medium-2 text-bold-800"> Shop Name  </th>
			<th class="indigo font-medium-2 text-bold-700">  Address  </th>
			<th class="indigo font-medium-2 text-bold-700">   Category  </th>
			<th class="indigo font-medium-2 text-bold-800">   Action  </th>
            	
        </tr>
	</thead>
	<tbody>
		
			<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM shopdetails where status='Active' ORDER BY sid ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['sname']; ?></td>
			<td><?php echo $row['location']; ?> <?php echo $row['address']; ?></td>
			<td><?php echo $row['category']; ?></td>
			
			<td><a rel="facebox" href="editshop.php?id=<?php echo $row['sid']; ?>"> <i class="icon-android-create" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Tooltip on top"></i></a> | <a href="deactivateshops.php?id=<?php echo $row['sid']; ?>"   title="Lock"><i class="icon-unlocked2" data-toggle="tooltip" data-placement="top" title="Click To Lock this Account" data-original-title="Tooltip on top"></i></a></td>
			</tr>
			<?php
				}
unset($db);
			?>
		
	</tbody>
</table>


<br><br><hr><br><br> 
<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM shopdetails where status='Deactivated' ORDER BY sid ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
<div class="card-header">
 <h4 class="card-title">Deactivated Shops</h4></div>
<div class="table-bordered">
<table id="resultTable"  class="table table-bordered mb-0" data-responsive="table">
	<thead>
		<tr>
            <th class="indigo font-medium-2 text-bold-800"> Shop Name  </th>
			<th class="indigo font-medium-2 text-bold-700">  Address  </th>
			<th class="indigo font-medium-2 text-bold-700">   Category  </th>
			<th class="indigo font-medium-2 text-bold-800">   Action  </th>
            	
        </tr>
	</thead>
	<tbody>
		
			
			<tr class="record">
			<td><?php echo $row['sname']; ?></td>
			<td><?php echo $row['location']; ?> <?php echo $row['address']; ?></td>
			<td><?php echo $row['category']; ?></td>
			
			<td><a rel="facebox" href="editshop.php?id=<?php echo $row['sid']; ?>"> <i class="icon-android-create" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Tooltip on top"></i></a> | <a href="activateshops.php?id=<?php echo $row['sid']; ?>"   title="Lock"><i class="icon-lock" data-toggle="tooltip" data-placement="top" title="Click To Activate This Account" data-original-title="Tooltip on top"></i></a></td>
			</tr>
			<?php
				}


	
unset($db);
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
   url: "deletesupplier.php",
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
        </div>
    </div>
</div>
<hr>
</section>
<br><br><br><br><br><br><br><br><br>

<br>

  </div></div></div>