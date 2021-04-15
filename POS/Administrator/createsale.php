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
<style>
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
.search-box{
        width:  400px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
         background: #fff;
    }
    .result p:hover{
        background: #EEEEEE;
    }

</style>
<script src="jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("searchitems.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-shopping-basket font-medium-4"> </i> My Cart </h4>
          </div>
          
        </div>
        <div class="content-body"><!-- gmaps basic maps section start -->
<?php 
			if(isset($_SESSION['message1'])){
				?>
				
					<?php echo $_SESSION['message1']; ?>
				</div>
				<?php
				unset($_SESSION['message1']);
			}

			?>
<?php 
			if(isset($_SESSION['message'])){
				?>
				
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>



<div class="container">

	<div class="row">
<div class="card-header">

<div class="search-box">
<p class="black text-bold-900 ">Search Item</p>
        <input type="text" autocomplete="off" placeholder="" />
        <div class="result"></div>
    </div>
<br><br><br><br>
	  
 
	 	
 
<br>
<div id="">
        <div class="zig-zag-bottom">

            <div class="form-control-position">
			<?php 
if(isset($_SESSION['name_array'])){
				?>
				
					<?php echo $_SESSION['name_array']; ?>
				</div>
				<?php
				unset($_SESSION['name_array']);
			}


			?><br><?php 
if(isset($_SESSION['price_array'])){
				?>
				
					<?php echo $_SESSION['price_array']; ?>
				</div>
				<?php
				unset($_SESSION['price_array']);
			}


			?>
            </div>
        
		<br>
			
		<form method="post" id="my_form" action="save_cart.php" style="text-align:left;">	
<p class="black text-bold-900 ">Select Customer
<select id="projectinput5" name="customer" class="form-control" required="">
 <option value="Walk-in Customer">Walk-in Customer</option>
<?php
	include('../connect.php');

	$result = $db->prepare("SELECT * FROM custemers");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
       
		<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
	<?php
	}
	?>
											</select></p>
<br>
			<span class="black text-bold-900 "><cite>Discount <?php echo $_SESSION['SESS_CURREMY'];?>:</span>

<input type="number" name="discount" value="0" class="form-control" id="discount">
					<br>
		
			<table class="table table-bordered table-striped">
				<thead>
					 <th class="indigo font-medium-2 text-bold-300"  style="text-align:center;"><span class="icon-bin"></span></th>
					<th class="indigo font-medium-2 text-bold-300">Item Name</th>
					<th class="indigo font-medium-2 text-bold-300">Price</th>
					<th class="indigo font-medium-2 text-bold-300">Quantity</th>
					<th class="indigo font-medium-2 text-bold-600">Subtotal</th>
                   
				</thead>
				<tbody>
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
								?>
								<tr>
<td><a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>"  data-toggle="tooltip" data-placement="top" title="Remove" data-original-title="Tooltip on top" ><span class="icon-bin"></span></a>
									</td>
									<td><?php echo $row['name']; ?></td><input type="text" name="name" class=" hidden form-control" id="sname">
									<td><?php echo number_format($row['price'], 2); ?></td><input type="text" name="price" class=" hidden form-control" id="price">
									<input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
<input type="hidden" name="cashier" value="<?=$_SESSION['SESS_USERNAME']?>"><input type="text" name="cashier" class=" hidden form-control" id="cashier">
									<td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td><input type="text" name="qty" class=" hidden form-control" id="qty">
									<td><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
									<?php $total += $_SESSION['qty_array'][$index]*$row['price']; ?>

								</tr>
								<?php
								$index ++;
							}
						}
						else{
							?>
							<tr>
								<td colspan="4" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}

					?>

					<tr>


						<td colspan="4" align="right">
<p class="indigo text-bold-900 text-uppercase font-medium-3"><cite>Total</p>
                        </td>
						<td>
<h4 class=" text-bold-900 black font-medium-3"><?php echo $_SESSION['SESS_CURREMY'];?>: <?php echo number_format($total, 2); ?></h4>
                        </td>


<input type="text" name="total" class=" hidden " value="<?php echo number_format($total, 2); ?>" id="total">

<input type="text" name="date" class=" hidden " value="<?php echo date("d,m,y"); ?>" id="date">
					</tr>
<input name="suspend" class=" hidden" value="
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
			
                      

					Total <?php echo $_SESSION['SESS_CURREMY'];?>: <?php echo number_format($total, 2); ?> " rows="10"></input> 
				</tbody>
			</table>


									
<br>

	<p class="black text-bold-900 ">Select Payment Method :
<select id="projectinput5" name="pmhod" class="form-control" >

        <option value="M-pesa">M-pesa</option>
		<option value="Cash">Cash</option>
										</select></p><br>

		<p class="black text-bold-900 " align="left">Paid Amount  <?php echo $_SESSION['SESS_CURREMY'];?>:</p>

 <input type="number" name="ammountgaiven" value="" class="form-control " id="discount" required=""></div></div>
</div><br><br>

	<div class="col-xs-6 text-xs-center">
			<button type="submit" class="btn btn-primary mr-1 font-medium-5" id="butsave" name="save">Checkout</button></div>
	<div class="col-xs-6 text-xs-center">
			<a href="clear_cart.php" style="text-align:center;" class="btn btn-danger mr-1 font-medium-5">Clear Cart</a></div>
</form>

	
</div></div>
</div>
</div>




  <!-- [SEARCH RESULTS] -->

<?php

	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	//unset qunatity
	unset($_SESSION['qty_array']);
?>

	


</div>
  </div></div></div>


