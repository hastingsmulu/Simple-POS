

<p>Message Alerts!</p>
<hr>
<?php
if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info alert-dismissible mb-2" role="alert"><i class="icon-android-checkmark-circle"></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                									</button>					
                <?php echo $_SESSION['message']; ?>
				</div>

		<?php
				unset($_SESSION['message']);
			}

			?> 
