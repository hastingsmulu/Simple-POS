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
.checkbox-container {
	display: inline-block;
	position: relative;
}

.checkbox-container label {
	background-color: #ffffff;
	border: 1px solid #757575;
	border-radius: 20px;
	display: inline-block;
	position: relative;
	transition: all 0.3s ease-out;
	width: 45px;
	height: 25px;
	z-index: 2;
}

.checkbox-container label::after {
	content: '';
	background-color: #757575;
	border-radius: 50%;
	position: absolute;
	top: 1.5px;
	left: 1px;
	transform: translateX(0);
	transition: transform 0.3s linear;
	width: 20px;
	height: 20px;
	z-index: 3;
}

.checkbox-container input {
	visibility: hidden;
	position: absolute;
	z-index: 10;
}

.checkbox-container input:checked + label + .active-circle {
	transform: translate(-50%, -50%) scale(15);
    background: #9F75BE;
}

.checkbox-container input:checked + label::after {
	transform: translateX(calc(100% + 0.5px));
    content: '';
    
    background-color: #DA4453;
}
</style>



 <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-shop2 font-medium-4"> </i> <?=$_SESSION['SESS_SNAME']?>  Shop Settings </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              
            </div>
          </div>
        </div>
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

			?>
        <div class="content-body">
<section id="accordion">
	<div class="row">
		<div class="col-xs-12 mt-1">
		
			
		</div>
	</div>
	
<div class="row match-height">
		<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
			<div class="mb-1">
				<h5 class="mb-0"></h5>
						</div>
			<div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div id="heading4"  class="card-header">
						<p> Shop Settings</p>
					</div>
					 <div class="card-body collapse in">
                    <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
						<div class="card panel mb-0 box-shadow-0 no-border">
							
							<div id="accordion12" role="tabpanel" aria-labelledby="heading12" class="card-collapse collapse in" aria-expanded="false">
								<div class="card-block">
                                        
                                        
                                        <h5 class="card-title">Backup</h5>
                                         <p><a href=""> <button type="button" class="btn btn-danger btn-sm">Backup Data </button></a></p><br>
                                       <p class="card-text">Backup all Shop preferences and account data.</p>
                                   <hr><br> <br>
                                       
                                        
                                      <h5 class="card-title">Data Saver <code>On</code> by default</h5>
                                    <div class="checkbox-container ">
                                    <input type="checkbox" checked id="toggle3" />
                                    		<label for="toggle3"></label>
                                        <br>
                                        <p> Data saver enabled to reduce data usage on loading charts.</p><hr>
                                        </div><br><br>
                                        <h5 class="card-title">Language</h5>
<?php
			$ud='English';
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM lang where name=:dd ");
				$result->execute( array( ':dd'=>	$ud,));
				for($i=0; $row = $result->fetch(); $i++){
			?>
<div class="btn-group mr-1 mb-1">
                                        <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row['name']; ?> </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Auto</a>
                                        </div>
                                       <?php
				}

unset($db);
			?>
                                    </div>
 <hr><br> <br><?php
			$ud='Active';
            $k = $_SESSION['SESS_SNAME'];
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM shopdetails where status=:dd AND sname=:gd");
				$result->execute( array( ':dd'=>	$ud,':gd'=> $k));
				for($i=0; $row = $result->fetch(); $i++){
			?>
                                        <h5 class="card-title">Shop Activity is   <code><?php echo $row['status']; ?></code> </h5>
                                    <div class="checkbox-container black">

			 <a href="deactivateshop.php?id=<?php echo $row['sid']; ?>"  data-toggle="tooltip" data-placement="top" title="Lock to Deactivate User" data-original-title="Tooltip on top" ><span class="icon-unlocked  font-medium-1 text-bold-300"></span></a>
	<?php
				}

unset($db);
			?>
		
	
</div> <br>
									
<br> </div>	
   </div>
</section>
            </div>
        </div>
    </div>
			<br><br>
            </div>
        </div>
    </div>
				