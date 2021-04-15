
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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-android-boat font-medium-4"> </i> Manage Supplier </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              
            </div>
          </div>
        </div>
<hr>
        <div class="content-body"><!-- gmaps basic maps section start -->


<section id="gmaps-basic-maps">
    <!-- Basic Map -->
    <div class="row">
<div class="row match-height">
		<div class="col-xs-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Suppliers List</h4>
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
<form method="post" action="Dashboard.php?page=Manage Suppliers" text-align:left;">
    
 
<fieldset class="form-group position-relative" id="tooltip-triggers">

            <input type="text" id="tooltip-triggers" name="search" class="form-control form-control-lg input-lg" id="iconLeft" id="toggle-method" >
            <div class="form-control-position">
                <i class="icon-search7 font-medium-2"  data-popup="tooltip" data-original-title="Search " data-trigger="hover"></i>
            </div>
        </fieldset>
    </form> <div class="table-responsive">
<table id="resultTable"  class="table table-hover  table-bordered mb-0" >
	<thead class="thead-inverse">
		<tr>
			
			<th class="white font-medium-2 text-bold-800"> Supplier Name  </th>
			<th class="white font-medium-2 text-bold-700">  Contact  </th>
			<th class="white font-medium-2 text-bold-700">   Address  </th>
			<th class="white font-medium-2 text-bold-800">   Action  </th>
             
		</tr>
	</thead>

    <?php
    if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "searchit.php";
      
      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
         
           ?>

<tr class="record">
			
					<td class="blue-grey font-medium-1 text-bold-300"> <?php echo $r['name']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"> <?php echo $r['location']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"><?php echo $r['contact']; ?></td>
			
 <td><a rel="facebox" href="editsupplier.php?id=<?php echo $r['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Tooltip on top"> <i class="icon-android-create" ></i> </a> 
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

unset($db);
    ?>
  </tr> 
	</tbody>
</table>

	


</div>
  </div></div></div>
<div class="row">
									<div class="col-md-6">
										<div class="form-group">

              

</div></div></div>
<div class="row">
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

<div class="table-bordered">
<table id="resultTable"  class="table table-bordered mb-0" data-responsive="table">
	<thead>
		<tr>
            <th class="indigo font-medium-2 text-bold-800"> Supplier Name  </th>
			<th class="indigo font-medium-2 text-bold-700">  Contact  </th>
			<th class="indigo font-medium-2 text-bold-700">   Address  </th>
			<th class="indigo font-medium-2 text-bold-800">   Action  </th>
            	
        </tr>
	</thead>
	<tbody>
		
			<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM supliers ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['location']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			
			<td><a rel="facebox" href="editsupplier.php?id=<?php echo $row['id']; ?>"> <i class="icon-android-create" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Tooltip on top"></i></a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a></td>
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