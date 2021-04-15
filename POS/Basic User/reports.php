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

function format_Moni($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
?>

<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
                        <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-wpforms font-medium-4"> </i> Purchases </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
             
            </div>
          </div>
        </div>

        <div class="content-body"><!-- Search section start -->

<?php
			if(isset($_SESSION['msg'])){
				?>
				<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-android-checkmark-circle"></i>
					<?php echo $_SESSION['msg']; ?>
				</div>
				<?php
				unset($_SESSION['msg']);
			}

			?>
<br>

<form method="post" action="Dashboard.php?page=Manage reports" style="text-align:left;">
    
  Search Sale No/Ref: 
<fieldset class="form-group position-relative">

            <input type="number" name="search" class="form-control form-control-lg input-lg" id="iconLeft" >
            <div class="form-control-position">
                <i class="icon-search7 font-medium-2"></i>
            </div>
        </fieldset>
    </form>

 <div class="table-responsive">
<table id="resultTable"  class="table table-hover table-responsive  mb-0" >
<?php
  if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "searchplist.php";
      
      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
         
           ?>
<thead class="table-inverse table-bordered">
		<tr>
			<th >   Date  </th>
            <th > Ref/No:</th>
            <th > Item Details </th>
            <th > Payment Method & Amount </th>
            <th > Paticulars </th>
            <th> Sales Person </th>
            <th> Customer name </th>
			<th >   Action  </th>
		</tr>
	</thead>
<tr class="record">
            <td class="blue-grey table-bordered text-bold-400 table-bordered"><?php echo $r['date']; ?></td>
			<td class="blue-grey font-medium-2 text-bold-500"><?php echo $r['refno']; ?></td>
			<td class="blue-grey font-medium-2 text-bold-500" style="width: 19%;"><?php echo $r['cart_details']; ?></td>
             <td class="text-truncate font-medium-2 text-bold-500"> <code><?php echo $r['pmeth']; ?></code> => <?php if($r['pmeth']=='M-pesa'){
echo '<span class="tag tag-default tag-success font-medium-1 ">'.$r['mpesacode'].'</span> <br><br>Phone #: => <p class="tag tag-default tag-primary font-medium-2 "> '.$r['pno'].'</p><br><br> Amount => <p class="tag tag-default tag-info font-medium-2 "> ';
echo  $_SESSION['SESS_CURREMY'] ;
echo number_format ( $r['total'],2);
echo '</p>'; 
}
else{
$cash= number_format ($r['total'],2);
echo '<p class="tag tag-default tag-info font-medium-2 "> ';
echo $_SESSION['SESS_CURREMY'] ;
echo  $cash;
echo '</p>';
}
?></td>
			<td class="text-truncate ">
<?php if($r['status']=='Paid'){

echo '<span class="tag tag-default font-medium-1 "  >'.$r['status'].'</span>'; 

}
else{


echo '<button class="btn btn-lg btn-danger"><a class="tag tag-danger " href="updatestats.php?id='.$r['id'].'" class="button" title=""><span class="font-medium-1 " data-toggle="tooltip" data-placement="bottom" data-original-title="Cart is '.$r['status'].'! Click to update Paid" >'.$r['status'].'</span></button></a>'; 
}

?>
</td>
			<td >
<?php if($r['slpn']=='Admin'){

echo '<span class="tag tag-default tag-warning font-medium-1 "  >'.$r['slpn'].'</span>'; 

}
else{
echo '<span class="tag tag-primary font-medium-1 ">'.$r['slpn'].'</span>';
}
?>

</td>

            <td class="text-truncate font-medium-2 text-bold-500">
<?php if($r['customer']=='Walk-in Customer'){
echo '<span class="tag tag-default font-medium-1 "  >'.$r['customer'].'</span>'; 

}
else{
echo '<p class="tag tag-info font-medium-2 "> '.$r['customer'].'</p>';
}
?></a></td>


			
			
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

    <!-- Purchase List -->
    <div class="row">
<div class="row match-height">
		<div class="col-xs-12">
		
				
				<div class="card-body collapse in">
					<div class="card-block">

<div class="table-hover">
<table id="resultTable"  class="table table-hover table-responsive  mb-0" data-responsive="table">
	<thead class="table-inverse table-bordered">
		<tr>
			<th >   Date  </th>
            <th > Ref/No:</th>
            <th > Item Details </th>
            <th > Payment Method & Amount </th>
            <th > Paticulars </th>
            <th> Sales Person </th>
            <th> Customer name </th>
			<th >   Action  </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
$qto=date('r');
echo '<p class="tag tag-default tag-info font-medium-2 "> '.$qto.'</p><br><br>';
$names=$_SESSION['SESS_BIOGRAPHY'];
include('../connect.php');
				$result = $db->prepare("SELECT username FROM users WHERE usertype='$names' ORDER BY id DESC ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
$n=$row['username'];

		}
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE slpn='$n' ORDER BY id DESC ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){

			?>
			<tr class="record">
            <td class="blue-grey table-bordered text-bold-400"><?php echo $row['date']; ?></td>
			<td class="blue-grey font-medium-2 text-bold-500"><?php echo $row['refno']; ?></td>
			<td class="blue-grey font-medium-2 text-bold-500" style="width: 19%;"><?php echo $row['cart_details']; ?></td>
            <td class="text-truncate font-medium-2 text-bold-500"> <code><?php echo $row['pmeth']; ?></code> => <?php if($row['pmeth']=='M-pesa'){
echo '<span class="tag tag-default tag-success font-medium-1 ">'.$row['mpesacode'].'</span> <br><br>Phone #: => <p class="tag tag-default tag-primary font-medium-2 "> '.$row['pno'].'</p><br><br> Amount => <p class="tag tag-default tag-info font-medium-2 "> ';
echo  $_SESSION['SESS_CURREMY'] ;
echo number_format ( $row['total'],2);
echo '</p>'; 
}
else{
$cash= number_format ($row['total'],2);
echo '<p class="tag tag-default tag-info font-medium-2 "> ';
echo $_SESSION['SESS_CURREMY'] ;
echo  $cash;
echo '</p>';
}
?></td>
			<td class="text-truncate ">
<?php if($row['status']=='Paid'){

echo '<span class="tag tag-default font-medium-1 "  >'.$row['status'].'</span>'; 

}
else{


echo '<button class="btn btn-lg btn-danger"><a class="tag tag-danger " href="updatestats.php?id='.$row['id'].'" class="button" title=""><span class="font-medium-1 " data-toggle="tooltip" data-placement="bottom" data-original-title="Cart is '.$row['status'].'! Click to update Paid" >'.$row['status'].'</span></button></a>'; 
}

?>
</td>
 <td class="text-truncate font-medium-2 text-bold-500">
<?php if($row['customer']=='Walk-in Customer'){
echo '<span class="tag tag-default font-medium-1 "  >'.$row['customer'].'</span>'; 

}
else{
echo '<p class="tag tag-info font-medium-2 "> '.$row['customer'].'</p>';
}
?></a></td>
			<td >
<?php if($row['slpn']=='Admin'){

echo '<span class="tag tag-default tag-warning font-medium-1 "  >'.$row['slpn'].'</span>'; 

}
else{
echo '<span class="tag tag-primary font-medium-1 ">'.$row['slpn'].'</span>';
}
?>

</td>
			<td class="table-bordered" > <a href="delete.php?id=<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"></i></a></td>
			</tr>
			<?php
				}
			?>
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>

        </div>
    </div>
</div>

</section>
<br><br>



  
<br><br><br><br><br><br><br>

<br>

  </div></div></div></div>