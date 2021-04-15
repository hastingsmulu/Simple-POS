<?php
 if(!isset($_SESSION['SESS_SHOP'])) {
    		header("location: ../index.php");
    		exit();
    	}
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
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h4 class="card-title teal font-medium-5 text-bold-800" style="text-align:left;"><i class="icon-android-chat
 font-medium-4"> </i> My inbox  </h4>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              
            </div>
          </div>
        </div>
       

<br>

 <div class="content-body"><!-- gmaps basic maps section start -->
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
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM misc  ORDER BY id DESC LIMIT 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-colored-form-control"><i class="icon-android-chat"></i> Chat</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse" data-action="reload" data-toggle="tooltip" data-placement="top" title="collapse" data-original-title="Tooltip on top"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload" data-toggle="tooltip" data-placement="top" title="reload" data-original-title="Tooltip on top"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand" data-toggle="tooltip" data-placement="top" title="expand" data-original-title="Tooltip on top"><i class="icon-expand2"></i></a></li>
							<li><a href="deletesms.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Tooltip on top"><i class="icon-trash4"></i></a></li>
						</ul>
					</div>
				</div>
<br>
<small class="media-right">Date: <?php
$date= $row['date'];
if($row['date']==(date('m/d/yy'))){
echo 'Today';
}
else{
echo $date; }?></small>
<div class="card-body collapse in">
					<div class="card-block">
<div class="text-xs-right" id="heading2" class="card-header">

                  <a href="Dashboard.php?page=My-Inbox" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>


                        <div class="media-body"><br>
                          <h6 class="media-heading"><?php echo $row['name']; ?></h6>
                          <p class="notification-text font-small-3 text-muted media-center"><?php echo $row['details']; ?></p><small>
                            

</div>
<div class="text-xs-left" id="heading2" class="card-header">

 <span class="avatar avatar-sm avatar-online rounded-circle"><i class="text-xs-right"></i><img src="../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"></span>
 <h6 class="media-heading" ><code>You</code></h6>
                          <p class="notification-text font-small-3 text-muted media-center"><?php
$date= $row['reply'];
if($row['reply']=='not-replied'){
echo "<b class='tag tag-pill tag-danger' >Not-Replied</b>";
}
else{
echo $date; }?></p><small>
                            


<div class="text-xs-left" id="heading2" class="card-header">
<?php
$date= $row['sstat'];
if($row['sstat']=='Not Seen'){
echo '<i class="icon-android-done" data-toggle="tooltip" data-placement="left" title="" data-original-title="Message Recieved "></i>';
}
else{
echo '<i class="icon-check2
" data-toggle="tooltip" data-placement="left" title="" data-original-title="Message Seen"></i><i class="icon-check2
" data-toggle="tooltip" data-placement="left" title="" data-original-title="Message Seen"></i>'; }?>
	<form class="form" action="sessmsms.php" method="post">
									<input class="form-control border-primary hidden" type="num" readonly placeholder="id" name="id" value="<?php echo $row['id']; ?>" id="userinput5">
<input class="form-control border-primary hidden" type="text" readonly placeholder="id" name="user" value="<?php echo $row['name'];?>" id="fr">
<input class="form-control border-primary hidden" type="text" readonly placeholder="id" name="sdate" value="<?php echo $row['date']; ?>" id="fg">

<button type="submit" class="btn btn-primary" >Reply</button>
</form>
	</div>
</div></div>


                        
                      </div>
</a>

</li></div>
				</div></div>
				</div>
<br><br>
<?php
				}

unset($db);
			?>
      </div>
          </div>
        </div>      </div>
          </div>
        </div>