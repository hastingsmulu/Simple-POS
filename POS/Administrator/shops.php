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
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-shop2 font-medium-4"> </i> Shop info </h4>
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
		<div class="col-lg-12 col-xl-6">
			<div class="mb-1">
		
						</div>
			<div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
				<div class="card">
					
							<div id="heading12" role="tab" class="card-header border-bottom-grey border-bottom-lighten-2">
					<div id="heading2"  class="card-header">
						<a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="card-title lead collapsed"> 
<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<img src="../assets/img/shop.png" alt="company logo" class="" data-toggle="tooltip" data-placement="top" title="Click to Edit your Shop details here." data-original-title="Tooltip on right""/><hr>
				<ul class="px-0 list-unstyled">
					<li class="font-medium-3 text-bold-800 " data-toggle="tooltip" data-placement="top" title="Click to Edit your Shop details here." data-original-title="Tooltip on right">  <code><?=$_SESSION['SESS_SNAME']?></code></li><hr>
<p>Address</p>
			<li><i class="icon-map-marker danger"> </i> <code><?=$_SESSION['SESS_LOCATION']?><br> <?=$_SESSION['SESS_ADDRESS']?></code></li><hr>
<p>Contacts</p>
			<li><i class="icon-android-call danger"> </i><code> <?=$_SESSION['SESS_CONTACT']?></code></li>
			<li><i class="icon-android-mail danger"><code><?=$_SESSION['SESS_SEMAIL']?></code> </i> </li>	
				</ul>
			</div> </a>
					</div>
					<div id="accordion2" role="tabpanel" aria-labelledby="heading2" class="card-collapse collapse" aria-expanded="false">
						<div class="card-body">
							<div class="card-block text-md-right">
								<form class="form-horizontal form-simple" method="post" action="editshopdetail.php" >

							<input type="text" class="form-control hidden form-control-lg input-lg " name="id" value="<?=$_SESSION['SESS_SHOP_ID']?>">
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                             <h5 class="mb-0 ">Shop name </h5>
							<input type="text" class="form-control form-control-lg input-lg " name="shopname" Required="">
							<div class="form-control-position">
							    <i class="icon-shop danger"></i>
                                    
							</div>
						</fieldset>
<fieldset class="form-group position-relative has-icon-left mb-1">
                             
                                    <h5 class="mb-0 "> Zip Code</h5>
							<input type="text" class="form-control form-control-lg input-lg " name="location" Required="">
							<div class="form-control-position">
							    <i class="icon-ios-location danger"></i>
							</div>
						</fieldset>
 <fieldset class="form-group position-relative has-icon-left mb-1">
                             
                                    <h5 class="mb-0 ">Address </h5>
							<input type="text" class="form-control form-control-lg input-lg " name="address" Required="">
							<div class="form-control-position">
							    <i class="icon-globe danger"></i>
							</div>
						</fieldset>
 <fieldset class="form-group position-relative has-icon-left mb-1">
                             
                                    <h5 class="mb-0 "> Contact </h5>
							<input type="text" class="form-control form-control-lg input-lg " name="contct" Required="">
							<div class="form-control-position">
							    <i class="icon-phone danger"></i>
							</div>
						</fieldset> <fieldset class="form-group position-relative has-icon-left mb-1">
                             
                                    <h5 class="mb-0 ">Email </h5>
							<input type="email" class="form-control form-control-lg input-lg " name="email" Required="">
							<div class="form-control-position">
							    <i class="icon-email danger"></i>
							</div>
						</fieldset>
<fieldset class="form-group position-relative has-icon-left mb-2">
                              <h5 class="mb-0 ">Currency </h5>
							<select id="projectinput6" name="currency" class="form-control">
                            <option selected="" disabled="">   Set Currency</option>
                            <option value="Ksh">Kenya Shilling</option>
                            <option value="$">Dollah</option>
                            <option value="￥">Yen</option>
</select>
							<div class="form-control-position">
							    <i class="icon-money danger"></i>
                                    <h5 class="mb-0 "> </h5>
							</div>
						</fieldset>
<fieldset class="form-group position-relative has-icon-left mb-1">
                             <h5 class="mb-0 ">Service/Industry </h5>
							<select id="projectinput5" name="category" class="form-control">
<option selected="" disabled="">Select Category Service/Industry</option>
<option value="Hardware">Hardware</option>
<option value="Wholesale">Wholesale</option>
<option value="Other">Other</option>
</select>
							<div class="form-control-position">
							    <i class="icon-industry danger"></i>
                                    <h5 class="mb-0 "> </h5>
							</div>
						</fieldset>
                       
						
						<button type="submit" class="btn btn-primary btn-lg ">Save</button>
					</form>
							</div>
						</div><hr>
							</div>
						</div>
					</div>	</div>	</div>	
 </div></div>
					</div>	</div>	</div>	
