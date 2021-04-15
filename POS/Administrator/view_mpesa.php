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
            $.get("searchitempsx.php", {term: inputVal}).done(function(data){
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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-tasks font-medium-4"> </i> M-pesa Transaction Info </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
            
            </div>
          </div>
        </div>
      
<div class="card-body collapse in">
					<div class="card-block">
					
						<div class="row">


<div class="search-box">
<p class="black text-bold-900 ">Search M-pesa Transaction Info</p>
        <input type="text" autocomplete="off" placeholder="" />
        <div class="result"></div>
    </div>
<br><br><br><br>
<?php

	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	//unset qunatity
	unset($_SESSION['qty_array']);
?>

	

 <div class="content-body">
<?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
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
			
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE pmeth='M-pesa' ORDER BY date ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			
		
			<td class="table-bordered"> <?php echo $row['date']; ?></td>
			<td class=" font-medium-1 "><span class="tag tag-default tag-info"><?php echo $row['mpesacode']; ?></span> <br><br>
<span class="tag tag-default "><?php echo $_SESSION['SESS_CURREMY'];?>:  <?php echo number_format ($row['total'],2); ?></span>
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
 unset($db);
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