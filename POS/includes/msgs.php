<?php




			
//Alert msgs i.e. wrong inputs, timeouts,etc.
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    			
    			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    				echo '
<section id="dismissible-alerts">
	<div class="row">
		<div class="col-md-12">
			
								<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									 ',$msg,'
								</div>
</div>
						</div>
					
</section>';
 
    				}
    			
    			unset($_SESSION['ERRMSG_ARR']);
    			}

if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    			
    			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    				echo '
<section id="dismissible-alerts">
	<div class="row">
		<div class="col-md-12">
			
								<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									 ',$msg,'
								</div>
</div>
						</div>
					
</section>';
 
    				}
    			
    			unset($_SESSION['ERRMSG_ARR']);
    			}


?>
								
