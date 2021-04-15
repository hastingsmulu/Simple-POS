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
           <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-user-plus2 font-medium-4"> </i> Add New User </h4>
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
	
	<div class="row match-height">
		<div class="col-md-6 col-sm-12 text-xs-center text-md-right">
			<div class="mb-1">
				<h5 class="mb-0"></h5>
						</div>
			<div id="accordionWrapa2" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div id="heading4"  class="card-header">
						<a data-toggle="collapse" data-parent="#accordionWrapa4" href="#accordion4" aria-expanded="false" aria-controls="accordion4" class="card-title lead collapsed"><p>Click Here To Add New User</p></a>
					</div>
<div id="accordion4" role="tabpanel" aria-labelledby="heading4" class="card-collapse collapse" aria-expanded="false">
					<div class="card-body">
							<div class="card-block">
								<form class="form-horizontal form-simple"  method="POST" action="addnewuser.php">
						<fieldset class="form-group position-relative has-icon-left mb-1">
                             <h5 class="mb-0 ">Username</h5>
							<input type="text" class="form-control form-control-lg input-lg" name="user-name" placeholder="User Name">
							<div class="form-control-position">
							    <i class="icon-head warning"></i>
							</div>
						</fieldset>
                         <fieldset class="form-group position-relative has-icon-left mb-1">
                                <h5 class="mb-0 ">First Name</h5>
							<input type="text" class="form-control form-control-lg input-lg" name="first-name" placeholder="First Name">
							<div class="form-control-position">
							    <i class="icon-head warning"></i>
							</div>
						</fieldset>
                         <fieldset class="form-group position-relative has-icon-left mb-1">
                            <h5 class="mb-0 ">Last Name</h5>
							<input type="text" class="form-control form-control-lg input-lg" name="last-name" placeholder="Last Name">
							<div class="form-control-position">
							    <i class="icon-head warning"></i>
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left mb-1">
                              <h5 class="mb-0 ">Your Email Address</h5>
							<input type="email" class="form-control form-control-lg input-lg" name="user-email" placeholder="Your Email Address" required>
							<div class="form-control-position">
							    <i class="icon-mail6 warning"></i>
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left">
                                 <h5 class="mb-0 ">Enter Password</h5>
							<input type="password" class="form-control form-control-lg input-lg" name="user-password" placeholder="Enter Password" required>
							<div class="form-control-position">
							    <i class="icon-key3 warning"></i>
							</div>

<input type="hidden"  name="shop" value="<?=$_SESSION['SESS_SSHOP']?>">
<input type="hidden"  name="activity" value="Active">
						</fieldset>
<fieldset class="form-group position-relative has-icon-left mb-1">
                             <h5 class="mb-0 "> Select Usertype </h5>
							<select id="projectinput5" name="usertype" class="form-control form-control-lg input-lg">
<option selected="" disabled="">  </option>
<option value="Administrator">Administrator</option>
<option value="Cashier">Cashier</option>
</select>
							<div class="form-control-position">
							    <i class="icon-head warning"></i>
                                    
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-floppy-disk" data-toggle="tooltip" data-placement="top" title="Save" data-original-title="Tooltip on right""></i> </button>
					</form>
							</div>
			
</section>


<hr>
<br>
<div class="mb-1">
<h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-profile font-medium-4"> </i> Registered Users </h4>
				<h5 class="mb-0"></h5>
						</div>


<section id="stacked-to-horizontal" class="row">

	<div class="row">


	



			<?php
		//end info message
		//fetch our products	
		//connection
		include('../connect.php');
				$result = $db->prepare("SELECT * FROM users ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                 $_SESSION['SESS_ACTIVITY'] = $row['active'];
			?>

			
<section id="block" class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title teal lighten-2 font-medium-3 text-bold-800">Active Users</h4>
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
								
		
			<?php
			$ud='Active';
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM users where active=:dd");
				$result->execute( array( ':dd'=>	$ud,));
				for($i=0; $row = $result->fetch(); $i++){
			?>


			<div class="card-body collapse in">
				<div class="card-block">
					<div class="bs-example">
						<span><img src="../assets/img/user.png" alt="company logo" class="" data-toggle="tooltip" data-placement="top" title="Click to Edit your Profile details here." data-original-title="Tooltip on right""/></span>
						<div class="row">
							<div class="col-md-6">
								<span><p class="font-medium-3 text-bold-200"><code ><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></code ></p></span>
            <span><p class="font-medium-3 text-bold-200">Email: <?php echo $row['email']; ?></p></span>
			<span><p class="font-medium-3 text-bold-200">Username: <?php echo $row['username']; ?></p></span>
			<span><p class="font-medium-1 tag tag-pill tag-default">Account Type:</p> <p class="font-medium-1 tag tag-pill tag-info"><?php echo $row['usertype']; ?></p></span>
			<span><p class="font-medium-1 tag tag-pill tag-default">Account Status:</p> <p class="font-medium-1 tag tag-pill tag-success"> <?php echo $row['active']; ?> </p></span>
			<span class="font-medium-3"> 

 <a href="deactivateuser.php?id=<?php echo $row['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Lock to Dectivate User" data-original-title="Tooltip on top" ><i class="icon-unlocked"></i></a>

| <a href="edituser.php?id=<?php echo $row['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Edit User" data-original-title="Tooltip on top" >
<i class="icon-android-create"></i></a>

|<a href="deleteuser.php?id=<?php echo $row['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Remove User" data-original-title="Tooltip on top" ><i class="icon-bin"></i></a>
</span>
							</div>
							
						</div>
						<hr>
				
					
				
			</div>
                    </div>
                </div>
         
			
			<?php
				}

unset($db);
			?>
			<?php
		}
		
		
		//end product row 
	?>
</section>
<hr>
					<?php
	
		include('../connect.php');
				$result = $db->prepare("SELECT * FROM users ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                 $_SESSION['SESS_ACTIVITY'] = $row['active'];

unset($db);
			?>
<?php
			$ud='Deactivated';
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM users where active=:dd");
				$result->execute( array( ':dd'=>	$ud,));
				for($i=0; $row = $result->fetch(); $i++){
                    if(!empty($result)){
			?>
<section id="block" class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
<h2 class="card-title teal lighten-2 font-medium-3 text-bold-800">Deactivated Users</h2>
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
				<div class="card-block">
					<div class="bs-example">
						<img src="../assets/img/user.png" alt="company logo" class="" data-toggle="tooltip" data-placement="top" title="Click to Edit your Profile details here." data-original-title="Tooltip on right""/>
						<div class="row">
							<div class="col-md-6">
								<span><p class="font-medium-3 text-bold-200"><code ><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></code ></p></span>
            <span><p class="font-medium-3 text-bold-200">Email: <?php echo $row['email']; ?></p></span>
			<span><p class="font-medium-3 text-bold-200">Username: <?php echo $row['username']; ?></p></span>
			<span><p class="font-medium-1 tag tag-pill tag-default">Account Type:</p> <p class="font-medium-1 tag tag-pill tag-info"><?php echo $row['usertype']; ?></p></span>
			<span><p class=" font-medium-1 tag tag-pill tag-default">Account Status:</p> <p class="font-medium-1 tag tag-pill tag-danger"> <?php echo $row['active']; ?> </p></span>
			<span class="font-medium-3"> 

 <a href="activateuser.php?id=<?php echo $row['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Unlock to Activate User" data-original-title="Tooltip on top" ><i class="icon-locked"></i></a>

| <a href="edituser.php?id=<?php echo $row['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Tooltip on top" >
<i class="icon-android-create"></i></a>

|<a href="deleteuser.php?id=<?php echo $row['id']; ?>"  data-toggle="tooltip" data-placement="top" title="Remove" data-original-title="Tooltip on top" ><i class="icon-bin"></i></a>
</span>


			</div></div>
</div></div>
			
			<?php
				}}

unset($db);
			?>
				
			<?php
		}
		
		
unset($db);
		//end product row 
	?>
</section>
		

</div></div></div></div>	