<?php
session_start();
 if(!isset($_SESSION['SESS_PASS'])) {
    		header("location: ../login.php");
    		exit();
    	}
if(!isset($_SESSION['SESS_MEMBER_ID'])) {
    		header("location: ../login.php");
    		exit();
    	}
if(!isset($_SESSION['SESS_USERNAME'])){
    		header("location: ../login.php");
    		exit();
    	}
 if(!isset($_SESSION['SESS_SHOP'])) {
    		header("location: ../index.php");
    		exit();
    	}
?>


<!DOCTYPE html >
<!-- saved from url=(0036)https://spos.tecdiary.net/pos/view/5 -->
<html  class="window.print();">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">                   
                    <title>Receipt</title>
                    <!--<base href="https://spos.tecdiary.net/">--><base href=".">
                    <meta http-equiv="cache-control" content="max-age=0">
                    <meta http-equiv="cache-control" content="no-cache">
                    <meta http-equiv="expires" content="0">
                    <meta http-equiv="pragma" content="no-cache">
                   <script>
window.print();
</script>

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
                                            </style>
                </head>
                <body>
                                    <div id="wrapper">
                    <div id="receiptData" style="width: auto; max-width: 580px; min-width: 250px; margin: 0 auto;">
                        <div class="no-print">
<div id="buttons" style="padding-top:10px; " class="no-print">
 

               
 <span class="pull-right col-xs-12">
                                <button onclick="window.print();" class="btn btn-block btn-success">Print</button> </span>                           
                            

<br><br>

                                                       
                            <span class="col-xs-12">
                                <a class="btn btn-block btn-secondary btn-orange" href="Dashboard.php?page=Create Sale">Back to POS</a>
                            </span>
                                                        
<p style="text-align:center; color:gray;">Recipt Printing Starts Below </p><br>
<p style="text-align:center;color:gray;">
-------------------------------------------------------------------------------------------------------</p>


                        </div>                                                        
                                                    </div>
                        <div id="receipt-data">
                            <div>
                                <div style="text-align:center;">
                                   <?php
$shop=$_SESSION['SESS_SHOP'];
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM shopdetails WHERE sname='$shop'");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
<p style="text-align:center;">
<h2><strong><?php echo $row['sname']; ?></h2>
----------------------------------------------------------------------------<br>
P.O Box: <?php echo $row['location']; ?><br>
<?php echo $row['address']; ?><br>

                                   Email: <?php echo $row['email']; ?><br><?php
	}
	?>
 Date:  <?php echo date("d/ m/ yy"); ?> | Time:  <?php echo date("h:i:s"); ?> <br>

                                    Sale No/Ref: <?php echo date("dmy-hmin"); ?><br>
                                    Customer: <?=$_SESSION['customer']?> <br>
                                    Sales Person: <?=$_SESSION['SESS_USERNAME']?> <br>
                                </strong></p>
</div>
	<p style="text-align:center;color:gray;">
 -------------------------------------------------------------------------------------------------------</p>
<div class="card-header" style="text-align:center; background-Color:#E0E0E0;">
Sales Receipt
  </div>
                                <div style="clear:both;"></div>
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
                                        
                                        <td class="text-center" style="width: 25%; border-bottom: 0.2px solid #000;border-top: 0.2px solid #000;border-left: 0.2px solid #000;border-right:0.2px solid #000;"><?php echo $row['name']; ?> </td>
                                       <td style="text-align:left; border-bottom: 0.5px solid #000;border-top: 0.5px solid #000;border-left: 0.5px solid #000;border-right:0.5px solid #000;"><?php echo $_SESSION['qty_array'][$index]; ?> x <?php echo number_format($row['price'], 2); ?></td>
                                        
                                        <td class="text-right" style="text-align:left; border-bottom: 0.5px solid #000;border-top: 0.5px solid #000;border-left: 0.5px solid #000;border-right:0.5px solid #000;"><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
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
					?> 
                                        
                                                        </tfoot>

							<table class="table table-striped text-right table-condensed" style="margin-top:2px; text-align: right;">
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

                                </table>
		
                                        <hr>
       <div class="well well-sm" style="margin-top:10px;">
                
         <p style="text-align:center;"><b> You Saved KSh: <?=$_SESSION['discount']?></b>!</p>

<p style="text-align:center;color:gray;">
                                  ============================================================</p>
                                     Goods once sold are not returnable nor exchangeable <br><p style="text-align:center;color:gray;">
                                  ============================================================</p>
                    
                                            You Were Served By: <?=$_SESSION['SESS_FIRSTNAME']?> <?=$_SESSION['SESS_LASTNAME']?> <br><p style="text-align:center;color:gray;">
============================================================</p>
                                     <div style="text-align: center;">Thank You For Shopping</div>
                                </div>
                                                            </div>
                            <p style="text-align:center;color:gray;">
                         ============================================================</p></div>
<div style="text-align: center;">
<small style="text-align:center;">Developed By: <strong>Haxkull Tech</strong> <br>Contact: <strong>+254790714621</strong> Email: <strong>hastingsmumo@gmail.com</strong></small></div>
<p style="text-align:center;color:gray;">
============================================================</p>   
<div id="buttons" style="padding-top:10px; text-align:center;color:gray; text-transform:uppercase;">
fiscal receipt    <br>

                                   <p style=" text-align:right;color:gray; text-transform:uppercase;"> SN: <?php echo date("dmy-hmin"); ?></p></div>                 
 <div class="no-print">
<!-- start -->
 
<p style="text-align:center;color:gray;">Reciept Printing End</p><br>

                        <!-- end -->
                    </div>
                </div>
                <!-- start -->
                                    
                                    
                                
                  

    
    </body></html>