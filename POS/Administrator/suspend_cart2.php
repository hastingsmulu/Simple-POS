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
<h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-pause3 font-medium-4"> </i> Suspended Cart </h4>
            <div class="col-md-6">
										<div class="form-group">

              

</div></div>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              
            </div>
          </div>
        </div>

        <div class="content-body"><!-- gmaps basic maps section start -->

<form method="post" action="Dashboard.php?page=Suspended items" style="text-align:left;">
    
  Search Sale No/Ref: 
<fieldset class="form-group position-relative">

            <input type="text" name="search" class="form-control form-control-lg input-lg" id="iconLeft" >
            <div class="form-control-position">
                <i class="icon-search7 font-medium-2"></i>
            </div>
        </fieldset>
    </form>

 <div class="table-responsive">
<table id="resultTable"  class="table table-hover table-responsive table-bordered mb-0" >
<?php
  if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "searchsusplist.php";
      
      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
         
           ?>

<tr class="record">
			
					<td class="blue-grey font-medium-1 text-bold-300"> <?php echo $r['date']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300"> <?php echo $r['cart_details']; ?></td>
<td class="text-truncate"><a href="updatesuspstats.php?id=<?php echo $r['id']; ?>" id="<?php echo $r['id']; ?>" class="button" title=""><span class="tag tag-default tag-info" data-toggle="tooltip" data-placement="bottom" data-original-title="Click to pay update if Cart not paid"><?php echo $r['status']; ?></span></a></td>
			<td class="blue-grey font-medium-2 text-bold-500"><?php echo $r['slpasn']; ?></td>
			<td class="blue-grey font-medium-1 text-bold-300" style="width: 15%;">KSh: <?php echo number_format ($r['total'],2); ?></td>
			<td> <a href="delete.php?id=<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a></td>
<?php
        }
      } else {
        echo "<div class='alert alert-danger alert-dismissible fade in mb-2' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button><i class='icon-android-hand'></i> No Records found";
      }
    }
    ?>
  </tr> 
	</tbody>
</table>
<br>
<section id="gmaps-basic-maps">
    <!-- Basic Map -->
    <div class="row">
<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM saved_cart WHERE comment='Not Paid' ORDER BY date DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
<div class="row match-height">
		<div class="col-xs-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Suspended cart List</h4>
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
<?php 
			if(isset($_SESSION['message'])){
				?>
				
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
<div class="row">
									<div class="col-md-6">
										<div class="form-group">
</div></div></div>
<div class="table-hover ">
<table id="resultTable"  class="table table-hover table-responsive  mb-0" data-responsive="table">
	<thead class="table-inverse table-bordered">
		<tr>
			<th > Date   </th>
            <th > Item Details  </th>
            <th > Paticulars  </th>
			<th >  Status  </th>
<th>   Ref No  </th>
             
			<th>   Delete  </th>
		</tr>
	</thead>
	<tbody>
		
			
			<tr class="record">
            <td class="table-bordered"><?php echo $row['date']; ?></td>
			<td><?php echo $row['cart_details']; ?></td>
<td class="text-truncate "><a href="updatesuspstats.php?id=<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="button" title=""><span class="tag tag-default tag-info" data-toggle="tooltip" data-placement="bottom" data-original-title="Click to pay update if Cart not paid"><?php echo $row['status']; ?></span></a></td>
			<td>
<blockquote class="blockquote border-left-teal border-left-3">


<code><?php echo $row['comment']; ?></code>


</blockquote>

</td>
<td><?php echo $row['refno']; ?></td>
			<td class="table-bordered"> <a class="delbutton" href="deletesus_cart.php?id=<?php echo $row['id']; ?>"  title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a></td>
			</tr>
			
		
	</tbody>
<?php
				}
unset($db);
			?>
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
 if(confirm("Sure you want to delete this Suspended cart? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletesus_cart.php",
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
  </div></div></div>