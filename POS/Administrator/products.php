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
            $.get("searchitemsx.php", {term: inputVal}).done(function(data){
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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-cubes font-medium-4"> </i> Product list </h4>
          </div>

          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
             
            </div>
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

<?php 
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
<section id="gmaps-basic-maps">
    <!-- Basic Map -->
   

				<div class="card-body collapse in">
					<div class="card-block">
					
						<div class="row">


<div class="search-box">
<p class="black text-bold-900 ">Search Item</p>
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

	


</div>
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
            <div class="card-body collapse in">
<div class="table-responsive">
<table id="resultTable"  class="table table-hover " >
	
		<thead class="thead-inverse">
		<tr>
			
			<th class="">Item Name </th>
			<th class=""> Price </th>
			<th class=" ">Item Code</th>
			<th class="">Category</th>
			<th class="">Qty</th>
			<th class="">Status</th>
			<th class=""> Action </th>
             
		</tr>
	</thead>
	
	<tbody>
		
			<?php
			function formatMoney($number, $fractional=false) {
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
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY name ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['name']; ?></td>
			
			<td>Ksh: <?php
			$pprice=$row['price'];
			echo formatMoney($pprice, true);
			?></td>
			
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['cartegory']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td><?php echo $row['status']; ?></td>
			<td><a href="add_cartsilent.php?id=<?php echo $row['id']; ?>" id="butsend" data-toggle="tooltip" data-placement="top" title="Add <?php echo $row['name']; ?> To Cart" data-original-title="Tooltip on top"><i class="font-medium-2 text-bold-800 icon-cart31" ></i> </a> 
| <a rel="facebox" href="editproduct.php?id=<?php echo $row['id']; ?>"> <i class="icon-android-create" data-toggle="tooltip" data-placement="top" title="Edit <?php echo $row['name']; ?>" data-original-title="Tooltip on top"></i> </a> | <a href="deleteproduct.php?id=<?php echo $row['id']; ?>" class=".delbutton" title="Click To Delete"><i class="icon-android-delete" data-toggle="tooltip" data-placement="top" title="Delete <?php echo $row['name']; ?>" data-original-title="Tooltip on top"></i> |</a></td>
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
   url: "deleteproduct.php",
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

<hr>


 </div>
          </div>
        </div>
            
</section>


 </div>
          </div>
    </div>
    
   
   


