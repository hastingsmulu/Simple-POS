
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>POS Dashboard</title>
    <link rel="apple-touch-icon" sizes="60x60" href="POS/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="POS/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="POS/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="POS/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="POS/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="POS/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="POS/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="POS/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="POS/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="POS/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="POS/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="POS/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="POS/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="POS/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="POS/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="POS/app-assets/css/pages/under-maintenance.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="POS/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>

  <body data-open="click" data-menu="vertical-menu" data-col="1-column" style="background-color: #263238;" >
   
 <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php
session_start();
include("nav.php");
require_once("noac.php");
?>

<?php 


			if(isset($_SESSION['message1'])){
				?><div class="card-body collapse in">
				<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
									</button>

<?php echo $_SESSION['message1']; ?>
				</div>
				

<?php
				unset($_SESSION['message1']);
			}?>
<?php
if(isset($_SESSION['message2'])){
				?>

<?php echo $_SESSION['message2']; ?>
				</div>
				<?php
				unset($_SESSION['message2']);
			}

			?> 

<?php
	//initialize pages
	

 @$page= $_GET['page'];
		 if($page!="")
		 {
			 switch($page)
			 {
			 case 'back up data':
			 include('backup.php');
			 break;
			 
			 case 'help':
			 include('help.php');
			 break;
		
			case 'settings':
			 include('settings.php');
			 break;
            
            case 'add shop':
			 include('addshop.php');
			 break;

             case 'shop account':
			 include('list.php');
			 break;

             case 'Admin':
			 include('Login/index.php');
			 break;

            case 'Alert':
			 include('msg.php');
			 break;

			 }
		 }
		 else {

			
		}

		 
		 ?>
<div class=" text-xs-center">
 <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-center d-xs-block d-md-inline-block"><a href="http://hastingsmumo.co.ke" target="_blank" class="text-bold-800 grey darken-2">
<img src="POS/Administrator/logo.png" style="width: 64px;height: 64px;"></a></span><br><span class="text-muted float-md-center d-xs-block d-md-inline-block"> All rights reserved. Copyright  &copy; <script type="text/javascript">
var today = new Date()
var year = today.getFullYear()
document.write(year)
</script> </span>
<br><span class="float-md-center d-xs-block d-md-inline-block"> This program makes use of the <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey lighten-2">Robust Bootstrap Admin Template</a> v1.0.</span><br></p></div>

    <!-- BEGIN VENDOR JS-->
    <script src="POS/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="POS/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="POS/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="POS/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="POS/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="POS/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="POS/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="POS/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="POS/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="POS/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="POS/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
