
<?php

    	$token =$_SESSION['token'] = md5(uniqid(mt_rand(), true));
    
     ?>   	
    	




<div class="page login-page">
     
        <div class="form-outer text-center d-flex align-items-center">
<div class="position" >
<a href="login.php"> <img src="assets/img/homebank.png" alt="logo" style="align: center; ">
 <div class="logo text-uppercase"></div></a><br>
<h2 style="color:gray;"><?=$_SESSION['SESS_SHOP']?> <br>Point Of Sell</h2>
<h4 style="color:gray;">Login</h4>
<br>

<h2 class="icon-ios-contact " style="color:#fff;">  </h2>
<h2><span style="background-color:#fffca;color:gray;"> <?=$_SESSION['SESS_FIRSTNAME']?> <?=$_SESSION['SESS_LASTNAME'] ?>  </span> </h2>
<h4><span style="color:#fff;color:darkgray;">  <?=$_SESSION['SESS_EMAIL']?>  </span></h4>
<?php
    	//Alert msgs i.e. wrong inputs, timeouts,etc.
		if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    			
    			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    				echo '<p style="color:red;" class="thin text-center">',$msg,'</p>'; 
    				}
    			
    			unset($_SESSION['ERRMSG_ARR']);
    			}

?>
<form action="includes/logingonfigII.php"  method="post" autocomplete="on">
<div class="form-group">
                <label for="login-password" class="label-custom"></label>
                <input class="input" type="password" placeholder="Enter your Password " name="passwrd" required=""> 
              </div>
              <input type ="hidden" class="hidden" name="coffee" value="<?php echo $token;  ?>">
<input type ="hidden" class="hidden" name="username" value="<?=$_SESSION['SESS_USERNAME']?>">

<input type ="hidden" class="hidden" name="shopacc" value="<?=$_SESSION['SESS_SHOP']?>">
<input type ="hidden" class="hidden" name="usertype" value="<?=$_SESSION['SESS_BIOGRAPHY']?>">
<br><button type="submit" name="" class="btn btn-success">Sign in</button>
</form>
<br>
<a href="fpass.php" class="forgot-pass" >Forgot Password?</a><br>
<small style="color:gray;">Do not have an account? <a href="noacc.php" class="signup" >Signup</a></small><br>


          <p class="clearfix text-muted text-sm-center mb-0 px-2" style="color:gray;"><span class="float-md-center d-xs-block d-md-inline-block"><a href="http://hastingsmumo.co.ke" target="_blank" class="text-bold-800 grey darken-2">
<img src="Administrator/logo.png" style="width: 64px;height: 64px;"></a></span><br><span class="text-muted float-md-center d-xs-block d-md-inline-block"> All rights reserved. Copyright  &copy; <script type="text/javascript">
var today = new Date()
var year = today.getFullYear()
document.write(year)
</script> </span>
<br><span class="float-md-center d-xs-block d-md-inline-block"> This program makes use of the <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800" style="color:gray;">Robust Bootstrap Admin Template</a> v1.0.</span><br></p>
          </div>
        </div>
      </div>
    </div>
						</div>
			
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
		




