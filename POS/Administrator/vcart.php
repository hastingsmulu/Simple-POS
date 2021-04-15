 <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">View Cart</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Dashboard.php?page=Dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="Dashboard.php?page=Create Sale">My cart</a>
                </li>
                <li class="breadcrumb-item active">View Cart
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!--native-font-stack -->

<?php
	
if(!isset($_SESSION['amm_array'])) {
    		


		$_SESSION['empty'] ='<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-warning2"> </i>   Cart Empty.!! Click <a href="Dashboard.php?page=Products"  class="menu-item">Here</a> to add products to cart';

			if(isset($_SESSION['empty'])){
?>
				
					<?php echo $_SESSION['empty']; ?>
				
				<?php
				unset($_SESSION['empty']);
			}
exit();
			}

 if(!isset($_SESSION['SESS_SHOP'])) {
    		header("location: ../index.php");
    		
    	}


if ($_SESSION['SESS_BIOGRAPHY'] !='Administrator'){
			$_SESSION['message'] = 'You need Admin-Rights to view this page.';
if(isset($_SESSION['message'])){
				?>
			 <?php
			if(isset($_SESSION['message'])){
				?>
				
					<?php echo $_SESSION['message']; ?>
				
				<?php
				unset($_SESSION['message']);
			}

			?>	
					<?php echo $_SESSION['message']; ?>
			
				<?php
				unset($_SESSION['message']);
			}
                exit();
		}

?>
</div>

 
<br>
                                                 
              <section id="html-headings-default" class="row match-height">
    <div class="col-sm-12 col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Confirm Cart Details Before<small class="text-muted"> Checkout</small></h4>
                
            </div>
            <div class="card-body collapse in">
              <form method="post" id="my_form" action="save_cartx.php" style="text-align:center;">
<span class="">
                                <a class="btn btn-block btn-orange" href="Dashboard.php?page=Create Sale">Back to POS</a>
                            </span>
                                            <div id="d-wrapper">
        <div class="zig-zag-bottom">  
                <div class="table-responsive">
                    <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr><h3>
                                            
                                            <th class="text-center" style="width: 50%; border-bottom: 2px solid #000;border-top: 2px solid #000;border-left: 2px solid #000;border-right: 2px solid #000;">Item Description</th>
                                            <th class="text-center" style="width: 25%; border-bottom: 2px solid #000;border-top: 2px solid #000;border-left: 2px solid #000;border-right: 2px solid #000;">Qty x Price</th>
                                           
                                            <th class="text-center" style="width: 26%; border-bottom: 2px solid #000;border-top: 2px solid #000;border-left: 2px solid #000;border-right: 2px solid #000;">Subtotal</th>
                                       </h3> </tr>
                                    </thead>
<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
				$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $con->query($sql);
							while($row = $query->fetch_assoc()){

                            $name = array($row['name']);
                            $price = array($row['price']);
                     

								?>
                                    <tbody>
                                        <tr><h4>
                                        
                                        <td class="text-center" style="width: 25%; border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right:1px solid #000;"><?php echo $row['name']; ?> </td>
                                       <td style="text-align:left; border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right:1px solid #000;"><?php echo $_SESSION['qty_array'][$index]; ?> x <?php echo number_format($row['price'], 2); ?></td>
                                        
                                        <td class="text-right" style="text-align:left; border-bottom: 1px solid #000;border-top: 1px solid #000;border-left: 1px solid #000;border-right:1px solid #000;"><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
                                        </h4></tr> <?php $total += ($_SESSION['qty_array'][$index]*$row['price']); ?>                                   
                                        </tbody>

							

                                    <tfoot>
<?php

								$index ++;


							}
						}
						else{
							?>
							<?php
						}
mysqli_close($con);
					?> <br>
                                        <tr>
                                            
                                        </tr>
                                                        </tfoot>

							

                                </table>
		
                                       <table class="table table-striped text-right table-condensed" style="margin-top:10px; text-align: right;">
                                        <tbody class="text-right">
                                      <tr>
 <th class="text-right">Payment Method</th>
 <th  class="text-right"> <?php echo $_SESSION['pmethod'];?></th>
</tr>

                                       
<tr>
 <th  class="text-right">Total <?php echo $_SESSION['SESS_CURREMY'];?> </th>   
<th  class="text-right"> <?php echo number_format($total-$_SESSION['discount'], 2); ?></th>
 </tr>

<tr>
 <th class="text-right">Cash Tendered</th>
                                             <th  class="text-right"> <?php echo number_format($_SESSION['amm_array'], 2); ?></th>
</tr>

 <tr>
 <th  class="text-right">Discount</th>                                          
 <th  class="text-right"> <?php echo number_format($_SESSION['discount'], 2); ?></th>
</tr>

<tr>
 <th  class="text-right">Change Due </th>
<th  class="text-right"> <?php echo number_format($_SESSION['amm_array']-$total+$_SESSION['discount'], 2); ?></th>
</tr>
                                            
                                        </tbody>
                                        </table>  
        </div>
    </div>  </div>  </div> </div> </div>


    <div class="col-sm-12 col-md-6">
        <div class="card">
           <br>    <br>   
                        <div class="card-body collapse in">

                                        
                                
                                		<div class="col-md-6">
                                		<div class="form-group">
                                <label  class="font-medium-3">Paticulars</label>
                                <select id="projectinput5" name="status" class="form-control " required="">
                                <option selected="" value="Paid"> Select Paticulars  </option>
                                <option value="Paid">Paid</option>
                                <option value="Paid to collect">Paid to collect</option>
                                <option value="<?php if($_SESSION['pmethod']=='M-pesa'){
                                echo ' ';
                                
                                }
                                else{
                                echo 'Not Paid';
                                }
                                ?>"><?php if($_SESSION['pmethod']=='M-pesa'){
                                echo ' ';
                                
                                }
                                else{
                                echo 'Not Paid';
                                }
                                ?></option>
                                </select>
                                										</div>
                                									</div>
                                

									<div class="col-md-6">
										<div class="form-group">
                                        <label  class="font-medium-3">Date </label>
											 <input type="text" name="date" class="  form-control" readonly value="<?php echo date("m/ d/ yy"); ?>"  id="date">
										</div>
									</div>
<div class="col-md-6">
										<div class="form-group">
											<label class="font-medium-3">Total in Ksh:</label>
											<input type="text" name="totals" readonly value="<?php echo ($total-$_SESSION['discount']); ?>"  class="form-control" placeholder="total" >
										  </div>
    									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="font-medium-3">Ref/No </label>
											<input type="text" name="refno" class="  form-control" readonly value="<?php echo date("dmy-hmin"); ?>"  id="refno">
										</div>
									</div>
															


											
											


											
                                   <div class="col-md-6">
										<div class="form-group">
                                <label class="font-medium-3">Payment method</label>
<input type="text" name="pmetho" class="  form-control" readonly value="<?php echo $_SESSION['pmethod']; ?>"  id="pmetho">
<?php if($_SESSION['pmethod']=='M-pesa'){
echo '<br>
<span class="tag tag-danger">Enter M-pesa code Below </span><br><input type="text" name="pmethos" class="form-control" required=""  id="pmethos">
<br>
<span class="tag tag-danger">Enter Phone Number Below </span><br><input type="text" name="phno" class="form-control" required=""  id="phno">';

}
else{
echo '<br><span class="tag tag-danger">Enter Phone Number Below </span><br><input type="text" name="phno" class="form-control" required=""  id="phno">';
}
?>
										</div>
									</div>


<div class="col-md-6">
<div class="form-group">
                               <label class="font-medium-3">Sales Person</label>

<input type="text" name="spn" class="  form-control" readonly value="<?php echo $_SESSION['SESS_USERNAME']; ?>"  id="spn">
										</div>
									</div>



<div class="col-md-6">
										<div class="form-group">
<label class="font-medium-3">Customer name:</label>

<input type="text" name="customer" class="  form-control" readonly value="<?php echo  $_SESSION['customer']; ?>"  id="selesprsn">
										</div>
									</div>


<input name="suspend" class=" hidden   form-control" readonly value="
					<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
					$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $con->query($sql);
							while($row = $query->fetch_assoc()){

                            $name = array($row['name']);
                            $price = array($row['price']);
								?>

							
									
									

 |  Item name: <?php echo $row['name']; ?>
 | Price: <?php echo number_format($row['price'], 2); ?>
 | Qty:<?php echo $_SESSION['qty_array'][$index]; ?>
 | Subtotal:<?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?> 
 |  <?php $total += $_SESSION['qty_array'][$index]*$row['price']; ?>
 
<-------------->

								<?php

								$index ++;


							}
						}
						else{
							?>
							
							

							<?php
						}
mysqli_close($con);
					?> 
			
" rows="10"></input> 
										
</div><br>
                        <!-- start -->

                                <button type="submit" class="btn btn-block btn-info " id="butsave" name="save">Print</button> 
                        <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print"></div></div>
										

    </form>
 
                            

<br>
            </div>
        </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</section>
<!--/ Headings -->      <!-- end -->
    
    </body></html>