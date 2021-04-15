
<!DOCTYPE html>
<!-- saved from url=(0036)https://spos.tecdiary.net/pos/view/5 -->
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
                        body { color: #000; }
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
                                  <div id="d-wrapper">
        <div class="zig-zag-bottom">                      
                                      <p style="text-align:center;">Proceed To Print Recipt After Saving The Cart Details</p>
              </div></div>
                        <div id="receipt-data">
                            <div>
                                <div style="text-align:center;">
                                   




                                
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr><h3>
                                            
                                            <th class="text-center" style="width: 50%; border-bottom: 2px solid #ddd;">Item Description</th>
                                            <th class="text-center" style="width: 12%; border-bottom: 2px solid #ddd;">Qty</th>
                                            <th class="text-center" style="text-align:center; width: 24%; border-bottom: 2px solid #ddd;">@</th>
                                            <th class="text-center" style="width: 26%; border-bottom: 2px solid #ddd;">Subtotal</th>
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
                                        
                                        <td><?php echo $row['name']; ?> </td>
                                       <td style="text-align:center;"><?php echo $_SESSION['qty_array'][$index]; ?> X</td>
                                        <td class="text-right"><?php echo number_format($row['price'], 2); ?></td>
                                        <td class="text-right"><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
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
mysqli_close($conn);
					?> <br>
                                        <tr>
                                            
                                        </tr>
                                                        </tfoot>

							

                                </table>
		
                                       <table class="table table-striped text-right table-condensed" style="margin-top:10px; text-align: right;">
                                        <tbody class="text-right">
<th colspan="2" class="text-right">Total KSh </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th>   
<th colspan="3" class="text-right"> </th> 
<th colspan="3" class="text-right"> </th>
<th colspan="3" class="text-right"> <?php echo number_format($total, 2); ?></th>
                                        </tr><br>

                                        <tr>
 <th colspan="2" class="text-right">Cash Tendered</th><th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>
   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>
                                            <th colspan="3" class="text-right"> </th>
                                             <th colspan="3" class="text-right"> <?php echo number_format($_SESSION['amm_array'], 2); ?></th></tr><br>
 <tr>
 <th colspan="2" class="text-right">Discount</th><th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>
   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>
                                            <th colspan="3" class="text-right"> </th>
                                             <th colspan="3" class="text-right"> <?php echo number_format($_SESSION['discount'], 2); ?></th></tr><br>
                                        <tr>
 <th colspan="2" class="text-right">Change Due </th><th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>
   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>   <th colspan="3" class="text-right"> </th>
                                            <th colspan="3" class="text-right"> </th>
                                             <th colspan="3" class="text-right"> <?php echo number_format($_SESSION['amm_array']-$total+$_SESSION['discount'], 2); ?></th></tr><br>
                                            
                                        </tbody>
                                        </table> <br>
  <div id="d-wrapper">
        <div class="zig-zag-top">                                                                                                </div></div>
                        <!-- start -->
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
 
<p>Click Save Before you print</p></div></div>
<form method="post" id="my_form" action="save_cartx.php" style="text-align:center;">

<input type="text" name="totals" class=" hidden form-control" value="<?php echo ($total); ?>" id="total">

<input type="text" name="status" class=" hidden form-control" value="New" id="status">

<input type="text" name="date" class=" hidden form-control" value="<?php echo date("m/ d/ yy"); ?>"  id="date">
<input type="text" name="refno" class=" hidden form-control" value="<?php echo date("dmy-hmin"); ?>"  id="date">
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
 | Payment Method: <?php echo $_SESSION['pmethod'];?>
<-------------->

								<?php

								$index ++;


							}
						}
						else{
							?>
							
							

							<?php
						}
mysqli_close($conn);
					?> 
			
                      

					Total KSh <?php echo number_format($total, 2); ?> " rows="10"></input> 









<br>

                            <span class="col-xs-12">
                                <button type="submit" class="btn btn-block btn-info " id="butsave" name="save">Save and print recipt</button> 
                            </span></form>
 
                            

<br><br><br>
<p> Hold Reciept here</p>
<form method="post" id="my_form" action="save_cartxh.php" style="text-align:center;">

<select id="projectinput5" name="comment" class="form-control">
<option value="Not Paid" selected="" > Sellect paid to collect or not paid to hold recipt. Not Paid As Default</option>
<option value="Not Paid">Not Paid</option>
 <option value="Paid & To collect">Paid & To collect</option>											
</select>
<input type="text" name="total" class=" hidden form-control" value="<?php echo number_format($total, 2); ?>" id="total">
<input type="hidden" name="status" value="New">
<input type="text" name="date" class=" hidden form-control" value="<?php echo date("d/ m/ yy"); ?>" id="date">
<input type="text" name="refno" class=" hidden form-control" value="<?php echo date("dmy-hmin"); ?>"  id="date">
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
mysqli_close($conn);
					?> 
			
                      

					Total KSh <?php echo number_format($total, 2); ?> " rows="10"></input> 









<br>
<span class="col-xs-12">
                                <button type="submit" class="btn btn-block btn-warning">Hold</button> 
                            </span></form><br>
                                                       
                            <span class="col-xs-12">
                                <a class="btn btn-block btn-orange" href="Dashboard.php?page=Create Sale">Back to POS</a>
                            </span>
                                                        <div style="clear:both;"></div>
                        </div>
                        <!-- end -->
                    </div>
                </div>
                <!-- start -->
                                    
                                
                    <!-- end -->
    
    </body></html>