<?php
session_start();
 if(!isset($_SESSION['SESS_SHOP'])) {
    		header("location: ../index.php");
    		exit();
    	}

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">                   
                    <title>Receipt</title>
                    <!--<base href="https://spos.tecdiary.net/">--><base href=".">
                    <meta http-equiv="cache-control" content="max-age=0">
                    <meta http-equiv="cache-control" content="no-cache">
                    <meta http-equiv="expires" content="0">
                    <meta http-equiv="pragma" content="no-cache">
                   

                    <style type="text/css" media="all">
                        body { background-color: #E0E0E0; }
                        #wrapper { max-width: 520px; margin: 0 auto; padding-top: 20px; }
                        .btn { margin-bottom: 5px; }
                        .table { border-radius: 3px; }
                        .table th { background: #f5f5f5; }
                        .table th, .table td { vertical-align: middle !important; }
                        h3 { margin: 5px 0; }

                        @media print {
                            .no-print { display: none; }
                            #wrapper { max-width: 480px; width: 100%; min-width: 250px; margin: 0 auto; }
                        }
                                                    tfoot tr th:first-child { text-align: right; }
#d-wrapper {
background-color: #fff;
}
#d-wrapper * {

margin:0;
padding:0;}

#d-wrapper	div.sep {
		min-height: 200px;
		padding: 32px 0;

	}

#d-wrapper	.zig-zag-top:before{
		background: 
					linear-gradient(-45deg, #fff 16px, red 16px, blue 16px,  transparent 0), 
					linear-gradient(45deg, #fff 16px, transparent 0);
        background-position: left top;
        background-repeat: repeat-x;
        background-size: 22px 32px;
        content: " ";
        display: block;

        height: 32px;
		width: 100%;

		position: relative;
		bottom: 64px;
		left:0;
	}

#d-wrapper	div > * {
		margin: 0 40px;
	}

#d-wrapper	.zig-zag-bottom{
		margin: 32px 0;
		margin-top: 0;
		background: #fff;
	}

#d-wrapper	.zig-zag-top{
		margin: 32px 0;
		margin-bottom: 0;
		background: #fff;
	}

#d-wrapper	.zig-zag-bottom,
#d-wrapper	.zig-zag-top{
			  padding: 32px 0;
	}



#d-wrapper	.zig-zag-bottom:after{
		background: 
					linear-gradient(-45deg, transparent 16px, #fff 0), 
					linear-gradient(45deg, transparent 16px, #fff  0);
        background-repeat: repeat-x;
		background-position: left bottom;
        background-size: 22px 32px;
        content: "";
        display: block;

		width: 100%;
		height: 32px;

 	    position: relative;
		top:64px;
		left:0px;
	}

                                            </style>
                </head>
                <body>
                                    <div id="wrapper">
                    <div id="receiptData" style="width: auto; max-width: 580px; min-width: 250px; margin: 0 auto;">
                        <div class="no-print">
                                    
<span class="">
                                <a class="btn btn-block btn-orange" href="Dashboard.php?page=Create Sale">Back to POS</a>
                            </span>  
<form method="post" id="my_form" action="save_cartx.php" style="text-align:center;">

                                <button type="submit" class="btn btn-block btn-info " id="butsave" name="save">Print</button> 
                                            <div id="d-wrapper">
        <div class="zig-zag-bottom">  
                                      <p style="text-align:center;"> Recipt Details</p>
              </div></div>
                        <div id="receipt-data">
                            <div>
                                <div style="text-align:center;">
                               
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
						$conn = new mysqli('localhost', 'root', '', 'posxdb');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
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
 <th  class="text-right">Total KSh </th>   
<th  class="text-right"> <?php echo number_format($total, 2); ?></th>
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

  <div id="d-wrapper">

        <div class="zig-zag-top">  <p>Recipt Print End Line</p>                                                                                             <hr style="color:black;"> </div></div><br>
                        <!-- start -->

                                <button type="submit" class="btn btn-block btn-info " id="butsave" name="save">Print</button> 
                        <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print">

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

			?><br>
 </div></div>

Total <input type="text" name="totals" class=" hidden form-control" readonly value="<?php echo($total); ?>" id="total">
Paticulars <select id="projectinput5" name="status" class="form-control hidden" required>
<option selected="" disabled=""> Sellect Pariculars  </option>
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
Date <input type="text" name="date" class=" hidden form-control" readonly value="<?php echo date("m/ d/ yy"); ?>"  id="date">
Ref/No <input type="text" name="refno" class=" hidden form-control" readonly value="<?php echo date("dmy-hmin"); ?>"  id="refno">
Payment method <input type="text" name="pmetho" class=" hidden form-control" readonly value="<?php echo $_SESSION['pmethod']; ?>"  id="pmetho">
<?php if($_SESSION['pmethod']=='M-pesa'){
echo 'Enter M-pesa code Below <br><input type="text" name="pmethos" class="form-control" required=""  id="pmethos">';

}
else{
echo '';
}
?>
Sales person<input type="text" name="spn" class=" hidden form-control" readonly value="<?php echo $_SESSION['SESS_USERNAME']; ?>"  id="spn">
Customer name:
<input type="text" name="customer" class=" hidden form-control" readonly value="<?php echo  $_SESSION['customer']; ?>"  id="selesprsn">
Qty <input type="text" name="qty" class=" hidden form-control" readonly value="<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'root', '', 'posxdb');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){

                            $name = array($row['name']);
                            $price = array($row['price']);

								?>
<?php 
$qty = array ($_SESSION['qty_array'][$index]);
$name_str = implode(",",$qty);
echo $name_str;
?>
<?php
								$index ++;

}
}
else
{
?>
<?php
}
?>"  id="qty">
Cart <input type="text" name="item" class=" hidden form-control" readonly value="<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'root', '', 'posxdb');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){

                            $name = array($row['name']);
                            $price = array($row['price']);
								?>
<?php 

echo $row['name'];

 ?>
<?php
								$index ++;
}
}
else
{
?>
<?php
}
?> "  id="item">
					</tr>
Enter customer name then click save<input name="suspend" class=" hidden  form-control" value="
					<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'root', '', 'posxdb');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
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
					?> 
			
" rows="10"></input> 
    </form>
 
                            

<br>
<form method="post" id="my_form" action="save_cartxh.php" style="text-align:center;">
<p> Hold Reciept here</p>
<span class="col-xs-12">
                                <button type="submit" class="btn btn-block btn-warning">Hold</button> 
                            </span>

<select id="projectinput5" name="comment" class="form-control">
<option value="Not Paid" selected="" > Sellect paid to collect or not paid to hold recipt.</option>
<option value="Not Paid">Not Paid</option>
 <option value="Paid & To collect">Paid & To collect</option>											
</select>
Total
<input type="text" name="total" class=" hidden form-control" readonly value="<?php echo number_format($total, 2); ?>" id="total">
Paticulars
<input type="hidden" name="status" value="Suspended">
Date
<input type="text" name="date" class=" hidden form-control" readonly value="<?php echo date("d/ m/ yy"); ?>" id="date">
Ref/No:
<input type="text" name="refno" class=" hidden form-control" readonly value="<?php echo date("dmy-hmin"); ?>"  id="refno">
Sales Person:
<input type="text" name="selesprsn" class=" hidden form-control" readonly value="<?php echo $_SESSION['SESS_USERNAME']; ?>"  id="selesprsn">
Customer name:
<input type="text" name="selesprsn" class=" hidden form-control" readonly value="<?php echo $_POST['customer']; ?>"  id="selesprsn">
					</tr>
Enter customer name then click hold<input name="suspend" class=" hidden  form-control" value="
					<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'root', '', 'posxdb');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
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
					?> 
			
                      
| Payment Method: <?php echo $_SESSION['pmethod'];?>
					Total KSh <?php echo number_format($total, 2); ?> " rows="10"></input> 









<br>
</form><br>
                                                       
                            
                                                        <div style="clear:both;"></div>
                        </div>
                        <!-- end -->
                    </div>
                </div>
                <!-- start -->
                                    
                                
                    <!-- end -->
    
    </body></html>