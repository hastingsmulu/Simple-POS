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
?>

 <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
           <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-profile font-medium-4"> </i> My Profile </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
            
            </div>
          </div>
        </div><hr>
<?php
			

if(isset($_SESSION['message1'])){
				?>
				<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
					<?php echo $_SESSION['message1']; ?>
				</div>
				<?php
				unset($_SESSION['message1']);
			}

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

			?>
        <div class="content-body">
<section id="accordion">
	<div class="row">
		<div class="col-xs-12 mt-1">
		
			
		</div>
	</div>
	<div class="row match-height text-md-right">
		<div class="col-lg-12 col-xl-6 ">
			<div class="mb-1">
						</div>
			<div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
				<div class="card ">
					
					<div id="heading2"  class="card-header ">
						<a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="card-title lead collapsed"> <div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<img src="../assets/img/user.png" alt="company logo" class="" data-toggle="tooltip" data-placement="top" title="Click to Edit your Profile details here." data-original-title="Tooltip on right"/>
				<ul class="px-0 list-unstyled" data-toggle="tooltip" data-placement="top" title="Click to Edit your Profile details here." data-original-title="Tooltip on left">
					<li class="font-medium-3 text-bold-800 "><code><?=$_SESSION['SESS_FIRSTNAME']?> <?=$_SESSION['SESS_LASTNAME']?></code></li>
					<li class="teal font-medium-1 text-bold-300">Email: <?=$_SESSION['SESS_UEMAIL']?></li>
					<li class="teal font-medium-1 text-bold-300">Account Type: <?=$_SESSION['SESS_BIOGRAPHY']?></li>
					
				</ul>
			</div> </a>
					</div>
					<div id="accordion2" role="tabpanel"   aria-labelledby="heading2" class="card-collapse collapse" aria-expanded="false">
						<div class="card-body">
							<div class="card-block">
								<form class="form-horizontal form-simple" method="POST" action="editprofdetail.php" >
<input type="hidden"  name="memid" value="<?=$_SESSION['SESS_MEMBER_ID']?>">
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                             <h5 class="mb-0 "><i class="icon-head warning"></i> First Name:  </h5>
							<input type="text" class="form-control form-control-lg input-lg" name="f-name" placeholder="User Name">
							<div class="form-control-position">
							   
							</div>
						</fieldset>

                        <fieldset class="form-group position-relative has-icon-left mb-1">
                             <h5 class="mb-0 "><i class="icon-head warning"></i> Last Name:  </h5>
							<input type="text" class="form-control form-control-lg input-lg" name="l-name" placeholder="User Name">
							<div class="form-control-position">
							   
							</div>
						</fieldset>

						<fieldset class="form-group position-relative has-icon-left mb-1">
                             <h5 class="mb-0 "><i class="icon-head warning"></i> Username:  </h5>
							<input type="text" class="form-control form-control-lg input-lg" name="u-name" placeholder="User Name">
							<div class="form-control-position">
							   
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left mb-1">
                              <h5 class="mb-0 "><i class="icon-mail6 warning"></i> Your Email Address: </h5> 
							<input type="email" class="form-control form-control-lg input-lg" name="email" placeholder="Your Email Address" required>
							<div class="form-control-position">
							   
							</div>
<input type="hidden"  name="shopname" value="<?=$_SESSION['SESS_SSHOP']?>">
						</fieldset>
						
						<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-floppy-disk" data-toggle="tooltip" data-placement="top" title="Save" data-original-title="Tooltip on right""></i> </button>
					</form>
							</div>
						</div><hr>
					</div>
					<div id="heading3"  class="card-header">
						<a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="card-title lead collapsed">Change Your Password </a>
					</div>
					<div id="accordion3" role="tabpanel" aria-labelledby="heading3" class="card-collapse collapse" aria-expanded="false">
						<div class="card-body">
							<div class="card-block"><br>
<form class="form-horizontal form-simple"  method="POST" action="editprofpass.php">
<input type="hidden"  name="memid" value="<?=$_SESSION['SESS_MEMBER_ID']?>">
						<fieldset class="form-group position-relative has-icon-left">
                                 <h5 class="mb-0 "> Old New Password:  </h5>
							<input type="password" class="form-control form-control-lg input-lg" name="o-password" placeholder="Enter Password" required>
							<div class="form-control-position">
							    
							</div>
						</fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                 <h5 class="mb-0 "> Enter New Password:  </h5>
							<input type="password" class="form-control form-control-lg input-lg" name="new-password" placeholder="Enter Password" required>
							<div class="form-control-position">
							    
							</div>
						</fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                 <h5 class="mb-0 "> Retype New Password:  </h5>
							<input type="password" class="form-control form-control-lg input-lg" name="newretype-password" placeholder="Enter Password" required>
							<div class="form-control-position">
							   
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-floppy-disk" data-toggle="tooltip" data-placement="top" title="Save" data-original-title="Tooltip on right""></i> </button>
					</form>
							</div>
						</div><hr>
					</div>
		</div>
			</div>
		</div></div>

	
	
	
		

</div></div></div></div>	<br><br>