<?php

include("../includes/privatelist.php");


?>

<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>POS Dashboard</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.png">
    <link rel="shortcut icon" type="image/png" href="../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
<?php
include("mainnav.php")
?>
<?php @$page= $_GET['page'];
		 if($page!="")
		 {
			 switch($page)
			 {
			 case 'My-Profile':
			 include('editprof.php');
			 break;

             case 'Manage User Accounts':
			 include('editprofs.php');
			 break;
			 
			 case 'My-Inbox':
			 include('inbox.php');
			 break;

			 case 'Reply':
			 include('rep.php');
			 break;

              case 'Dashboard':
			 include('dashdisplay.php');
			 break;		

			 case 'Create Sale':
			 include('createsale.php');
			 break;

              case 'Manage sales':
			 include('manage.php');
			 break;
			 
			 case 'Products':
			 include('products.php');
			 break;
			 
              case 'Manage Products':
			 include('manageproduct.php');
			 break;
			 case 'Add product':
			 include('addproduct.php');
			 break;

             case 'Add product Cartegory':
			 include('addproductcarte.php');
			 break;
              case 'Manage Suppliers':
			 include('managesuppliers.php');
			 break;
                
              case 'Add Suppliers':
			 include('addsupplier.php');
			 break;

			 case 'Manage users':
			 include('booking.php');
			 break;
			 		 
              case 'Manage reports':
			 include('reports.php');
			 break;

             case 'Checkout':
			 include('view_cart.php');
			 break;

              case 'Suspended items':
			 include('suspend_cart2.php');
			 break;      

             case 'Print':
			 include('view_cart.php');
			 break;

             case 'Expenses':
			 include('view_expenses.php');
			 break;

             case 'Close Day':
			 include('clone.php');
			 break;
               
            case 'Day Closed':
			 include('clones.php');
			 break;
               

            case 'Customers':
			 include('customersne.php');
			 break;

            case 'Manage expenses':
			 include('view_man_expenses.php');
			 break;

            case 'Mpesa Transactions':
			 include('view_mpesa.php');
			 break;
            
            case 'Manage Customers':
			 include('customersne2.php');
			 break;

            case 'Shops':
			 include('shops.php');
			 break;

            case 'Shop Settings':
			 include('shopset.php');
			 break;

            case 'Statistics':
			 include('stics.php');
			 break;

            case 'View Cart':
			 include('vcart.php');
			 break;

            case 'Purchase Statistics':
			 include('pstics.php');
			 break;

            case 'Session Activity':
			 include('ssactvty.php');
			 break;
        
             case 'Manage Shops':
			 include('manshops.php');
			 break;

            case 'Edit Shops':
			 include('edshops.php');
			 break;

 }

		 }
		 else
		 {
		 ?>
 <?php 
		 }
		  ?>

 <footer class="footer footer-static footer-dark navbar-border">
      
 <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-center d-xs-block d-md-inline-block"><a href="http://hastingsmulu.co.ke" target="_blank" class="text-bold-800 grey darken-2">
<img src="logo.png" style="width: 44px;height: 44px;"></a></span><br><span class="text-muted float-md-center d-xs-block d-md-inline-block"> All rights reserved. Copyright  &copy; <script type="text/javascript">
var today = new Date()
var year = today.getFullYear()
document.write(year)
</script> </span>
<br></p>
    </footer>


    <!-- BEGIN VENDOR JS-->
    <script src="../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->

    <script src="../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <script src="../app-assets/js/scripts/charts/chartjs/line/line.js" type="text/javascript"></script>
    <script src="../app-assets/js/scripts/charts/chartjs/line/line-area.js" type="text/javascript"></script>
    <script src="../app-assets/js/scripts/charts/chartjs/line/line-stacked-area.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
