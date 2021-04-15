
<?php

include_once("main.php");
  
?>

<div class="login-page">

				

		<div class="login-page">

			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				
			<p>	<br>
			<br><br>	
		
			
			</p>
	

<div class="page login-page">
     
        <div class="form-outer text-center d-flex align-items-center">
<div class="position" >
<img src="assets/img/homebank.svg" alt="logo" style="align: center; ">
<a href="index.php"> <div class="logo text-uppercase"><h4 style="color:dark;"><strong class="text-primary">Huxkull Tech Systems</strong></h4></div></a>
<span style="color:gray;"> Dashboard.</span><hr><br><br>
<?php
session_start();
//Alert msgs i.e. wrong inputs, timeouts,etc.
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    			
    			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    				echo '<p style="color:red;" class="thin text-center">',$msg,'</p>'; 
    				}
    			
    			unset($_SESSION['ERRMSG_ARR']);
    			}


?>
<br>
<form action="includes/registconfg.php" method="post" >
<div class="form-group">
                <label for="login-username" class="label-custom"></label>
                <input class="input"type="text" placeholder=" Username " name="username" required="">
              </div>
<div class="form-group">
                <label for="login-username" class="label-custom"></label>
                <input class="input" type="Email" placeholder="Your Email" name="email" required="">
              </div>
<div class="form-group">
                <label for="login-username" class="label-custom"></label>
                <input class="input" type="password" placeholder="Password" name="passwd" required="">
              </div>
<div class="form-group">
                <label for="login-username" class="label-custom"></label>
                <select  name="class" class="input" required="">
												<option value="none" selected="" disabled="">Select usertype</option>
												<option value="basic">Basic</option>
												<option value="guest">Guest</option></select>
              </div>
 <input class="input" type="hidden"  name="kbs" value="" required="">
<br><button type="submit" name="add_record" class="btn btn-success">Signup</button>
             
            </form><br>
<br>
<hr>

<?php
// information alert section
if( isset($_SESSION['MSG4']) && is_array($_SESSION['MSG4']) && count($_SESSION['MSG4']) >0 ) {
    			
    			foreach($_SESSION['MSG4'] as $msg) {
    				echo '<p style="color:#ffaa00;" class="thin text-center">',$msg,'</p>'; 
    				}
    			
    			unset($_SESSION['MSG4']);
    			}
?>

          <p style="align: center;">	
          <br>
			<br><br>	
			<br><br>	<br>
			<br>
	Designed And Developed by <a href="#">Huxkull Tech</a><br>
               <?php echo date("Y"); ?> &copy; Copyright - All rights reserved.
			</p>
          </div>
        </div>
      </div>
    </div>
						</div>
			
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
