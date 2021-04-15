
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
       

<p class="notification-text font-small-3 text-muted media-center"> This Message will Autodelete after 10 days</p>
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
                            
                  <a href="Dashboard.php?page=My-Inbox" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>

                        <div class="media-body"><br>
                          <h6 class="media-heading">You</h6>
                          <p class="notification-text font-small-3 text-muted media-center"><?php echo $row['details']; ?></p><small>
                            <small class="media-right"><?php
$date= $row['date'];
if($row['date']==(date('m/d/yy'))){
echo 'Today';
}
else{
echo $date; }?></small></div>

<div class="media-body">
<p class="media-right "><?php
$date= $row['sstat'];
if($row['sstat']=='Not Seen'){
echo '<i class="icon-android-done" data-toggle="tooltip" data-placement="left" title="" data-original-title="Message Recieved "></i>';
}
else{
echo '<i class="icon-check2
" data-toggle="tooltip" data-placement="left" title="" data-original-title="Message Seen"></i><i class="icon-check2
" data-toggle="tooltip" data-placement="left" title="" data-original-title="Message Seen"></i>'; }?></p>


<div class="text-xs-right" id="heading2" class="card-header">
 
 <h6 class="media-heading" ><code><?php echo $row['replyname']; ?></code></h6>
                          <p class="notification-text font-small-3 text-muted media-center"><?php
$date= $row['reply'];
if($row['reply']=='not-replied'){
echo "<b class='tag tag-pill tag-danger' >Not-Replied</b>";
}
else{
echo $date; }?></p><small>
                            <small class="media-right">
<?php
$date= $row['date'];
if($row['date']==(date('m/d/yy'))){
echo 'Today';
}
else{
echo $date; }?></small>


<div class="text-xs-right" id="heading2" class="card-header">

	</div>
</div></div>


                        
                      </div>
</a>

</li>
<br>
<?php
				}
			?>
      </div>
          </div>
        </div>      </div>
          </div>
        </div>