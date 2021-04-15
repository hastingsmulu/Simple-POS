<?php 
if ($_SESSION['SESS_BIOGRAPHY'] !='Cashier'){
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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-tasks font-medium-4"> </i> M-pesa Transaction Info </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
            
            </div>
          </div>
        </div>
       
<form method="post" action="Dashboard.php?page=Mpesa Transactions" >
    
 
<fieldset class="form-group position-relative" id="tooltip-triggers">
Search M-Pesa code:
            <input type="text" id="tooltip-triggers" name="search" class="form-control form-control-lg input-lg" id="iconLeft" id="toggle-method" >
            <div class="form-control-position">
                <i class="icon-search7 font-medium-2"  data-popup="tooltip" data-original-title="Search " data-trigger="hover"></i>
            </div>
        </fieldset>
    </form>
 <div class="table-responsive">
<table id="resultTable"  class="table table-hover  mb-0" >
	

    <?php
    if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "searchmpesa.php";
      
      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
         
           ?>
	<thead class="table-inverse table-bordered">
		<tr>
			<th >Date </th>
			<th >M-Pesa Code & Amount</th>
             <th>Cart Details </th>
			<th>Sales Person </th>

			<th >Action </th>
             
		</tr>
	</thead>
<tr class="record">
			
					<td class="table-bordered"> <?php echo $r['date']; ?></td>
			<td class=" font-medium-1 "><span class="tag tag-default tag-info"><?php echo $r['mpesacode']; ?></span> <br><br>
<span class="tag tag-default ">Ksh:  <?php echo number_format ($r['total'],2); ?></span>
</td>
			<td > <?php echo $r['cart_details']; ?></td>
<td > 
<?php if($r['slpn']=='Admin'){

echo '<span class="tag tag-default tag-warning font-medium-1 "  >'.$r['slpn'].'</span>'; 

}
else{
echo '<span class="tag tag-primary font-medium-1 ">'.$r['slpn'].'</span>';
}
?></td>
			<td class="table-bordered"><a href="deletecartmps.php?id=<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a>

</td>
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

<?php
$qto=date('r');
echo '<hr><br><br><p class="tag tag-default tag-info font-medium-2 "> '.$qto.'</p><br><br>';
	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	//unset qunatity
	unset($_SESSION['qty_array']);
?>

	

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
		
			?>

<div class="table-responsive">
								<table id="resultTable"  class="table table-hover   mb-0" >
	<thead class="table-inverse table-bordered">
		<tr>
			<th >Date </th>
			<th >M-Pesa Code & Amount</th>
             <th>Cart Details </th>
			<th>Sales Person </th>

			<th >Action </th>
             
		</tr>
	</thead>
	<tbody>
		
			<?php
			
$names=$_SESSION['SESS_BIOGRAPHY'];
include('../connect.php');
				$result = $db->prepare("SELECT username FROM users WHERE usertype='$names' ORDER BY id DESC ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
$n=$row['username'];

		}
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE pmeth='M-pesa' AND slpn='$n' ORDER BY date ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			
		
			<td class="table-bordered"> <?php echo $row['date']; ?></td>
			<td class=" font-medium-1 "><span class="tag tag-default tag-info"><?php echo $row['mpesacode']; ?></span> <br><br>
<span class="tag tag-default ">Ksh:  <?php echo number_format ($row['total'],2); ?></span>
</td>
			<td class="blue-grey "><?php echo $row['cart_details']; ?></td>
            <td >
<?php if($row['slpn']=='Admin'){

echo '<span class="tag tag-default tag-warning font-medium-1 "  >'.$row['slpn'].'</span>'; 

}
else{
echo '<span class="tag tag-primary font-medium-1 ">'.$row['slpn'].'</span>';
}
?>

</td>
			<td><a href="deletecartmps.php?id=<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a>

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