 <?php

    

function get_server_memory_usage(){
	
	$free = shell_exec('free');
	$free = (string)trim($free);
	$free_arr = explode("\n", $free);
	$mem = explode(" ", $free_arr[1]);
	$mem = array_filter($mem);
	$mem = array_merge($mem);
	$memory_usage = $mem[2]/$mem[1]*100;

	return $memory_usage;
}
 
function get_server_cpu_usage(){

	$load = sys_getloadavg();
	return $load[0];

}	
    	
    	
    ?>

<!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark  navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="Dashboard.php?page=Dashboard" class="navbar-brand nav-link">
<img alt="branding logo" src="../app-assets/images/logo/robust-logo-light.png" data-expand="../app-assets/images/logo/robust-logo-light.png" data-collapse="../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis-v pe-2x icon-icon-rotate-right-right"></i></a></li>

             
             
         
          </ul>

        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">

              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>

              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class=""></i></a></li>
 <li class="nav-item hidden-sm-down">
<a href="Dashboard.php?page=Close Day"  class="btn btn-outline-success  upgrade-to-pro">
<i class="icon-stats-dots">         </i> Close Day</a> </li>
<li class="nav-item hidden-sm-down">
<a href="#" class="nav-link nav-link-expand">
<i class=""></i></a></li>



</ul>
          
              

              
                
             

 <!-- Notifications Area -->
  
 <ul class="nav navbar-nav float-xs-right">
 <a href="Dashboard.php?page=Create Sale"><li class="dropdown dropdown-notification  nav-item" href="Dashboard.php?page=Create Sale"><a href="Dashboard.php?page=Create Sale"  data-toggle="dropdown" class="nav-link nav-link-label button"><i class="ficon icon-cart4" href="Dashboard.php?page=Create Sale"></i><span class="tag tag-pill tag-info  tag-up"  href="Dashboard.php?page=Create Sale">
<?php
	//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
							$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
						//create array of initail qty which is 1
 						$index = 0;
                      
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}  
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
$item = count($_SESSION['cart']);

}
echo  $item ;
?>
<?php
								$index ++;
}
else
{
?>
<?php
}
?> 
</span></a> 
<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  
                    <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2"><a href="Dashboard.php?page=Create Sale" class="text-muted "><button type="button" class="btn mr-0 mb-0 btn-secondary"><i class="ficon icon-shopping-basket"> </i>  Go to My Cart </button>  </a></span><span class="notification-tag tag tag-default float-xs-right m-9" > <br>
                    <?php
	//Count total cart items
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
							$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
						//create array of initail qty which is 1
 						$index = 0;
                      
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}  
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
$item = count($_SESSION['cart']);

}
echo  $item ;
?>
<?php
								$index ++;
}
else
{
?>
<?php
}
?> Items in Cart</span></h6>
<?php
						//Display Cart items
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
								?>
   <div class="dropdown-menu dropdown-menu-right">

                </div>
<a href="Dashboard.php?page=Create Sale" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="" data-original-title="<?php echo $row['name']; ?> "> <i class="icon-profile" ></i><?php echo $row['name']; ?></a>
<?php
								$index ++;
							}
						}
						else{
							?>
							
							<?php
						}

					?>
                  </li>
                </ul>
              </li>

<li class="dropdown dropdown-notification  nav-item"><a href="Dashboard.php?page=My-Profile"  data-toggle="dropdown" class="nav-link nav-link-label button"><i class="ficon icon-mail6" href="Dashboard.php?page=My-Inbox"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up"><?php

	$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM misc WHERE status='New'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?></span></a>
                 <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  
                    <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2"><a href="Dashboard.php?page=My-Inbox" class="text-muted ">Messages</a></span><span class="notification-tag tag tag-default tag-info float-xs-right m-0" ><?php

	$con=mysqli_connect("localhost","root","","posxdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM misc WHERE status='New'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
mysqli_close($con);
?></span></h6>
                  </li>
<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM misc WHERE status='New' ORDER BY id DESC LIMIT 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
                  <a href="Dashboard.php?page=My-Inbox" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading" href=""><?php echo $row['name']; ?></h6>
                          <p class="notification-text font-small-3 text-muted"><?php echo $row['details']; ?></p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted"><?php echo $row['date']; ?></time></small>
                        </div>
                      </div></a></li><?php
				}
unset($db);
			?>
                  <li class="dropdown-menu-footer"><a href="Dashboard.php?page=My-Inbox" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                </ul>
              </li>
 <li class="dropdown dropdown-user nav-item"> <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"> <i class="icon-ios-contact-outline teal "  data-toggle="tooltip" data-placement="left" title="" data-original-title="Loged in as <?=$_SESSION['SESS_BIOGRAPHY']?>"> <span><?=$_SESSION['SESS_FIRSTNAME']?> <?=$_SESSION['SESS_LASTNAME']?></span></a></i>
                <div class="dropdown-menu dropdown-menu-right">
<a href="Dashboard.php?page=My-Profile" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Go to My Profile "> <i class="icon-profile" ></i><code> My Profile</code></a>
<a href="Dashboard.php?page=Session Activity" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Go to User Session Activity"> <i class="icon-street-view" ></i>User Session Activity </a>
<a href="Dashboard.php?page=Manage User Accounts" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Go to Manage User Accounts"> <i class="icon-group" ></i>Manage User Accounts </a>
                  <div class="dropdown-divider"></div><a href="logout.php" class="dropdown-item"><i class="icon-power3"></i>Logout</a>
                </div>
              </li>
            </ul>


        </div>
      </div>
    </nav>

<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">


<div class="main-menu-header">
<i class="icon-ios-contact-outline teal font-large-1 float-xs-left"></i>
Logged in as:  <code><?=$_SESSION['SESS_BIOGRAPHY']?>.</code><br>
Shop: <code><?=$_SESSION['SESS_SNAME']?>.</code>      
</div>
           
             
      <!-- main menu header-->
    
    
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class="nav-item">
<a href="Dashboard.php?page=Dashboard">
<i class="icon-dashboard2" href="Dashboard.php?page=Dashboard"></i>
<span data-i18n="nav.dash.main" class="menu-title ">Dashboard</span>
</a>
        </li>

<li class=" nav-item">
<a href="Dashboard.php?page=Expenses">
<i class="icon-ios-pie-outline text-bold-800"  href="Dashboard.php?page=Manage reports"></i>
<span data-i18n="nav.page_layouts.main" class="menu-title">Expenses</span></a>          
          
</li>
<li class=" nav-item">
<a href=" ">
<i class="icon-shopping-basket"></i>
<span data-i18n="nav.icons.main" class="menu-title">My Cart</span>
</a>    
 <ul class="menu-content">
              <li><a href="Dashboard.php?page=Create Sale"  class="menu-item">Add Cart </a>
              </li>
              <li><a href="Dashboard.php?page=View Cart"  class="menu-item">View Cart</a>
              </li>
            </ul>  
</li>



<li class=" nav-item">
<a href="">
<i class="icon-users2 text-bold-800"  href=""></i>
<span data-i18n="nav.page_layouts.main" class="menu-title">   Customers</span>
</a>
   <ul class="menu-content">
              <li><a href="Dashboard.php?page=Customers"  class="menu-item">Add Customer </a>
              </li>
              <li><a href="Dashboard.php?page=Manage Customers"  class="menu-item">Manage Customers</a>
              </li>
            </ul>
 </li> 

          <li class=" nav-item">
<a href="#"><i class="icon-cubes"  href="#"></i>
<span data-i18n="nav.page_layouts.main" class="menu-title">Inventory</span>
</a>
             <ul class="menu-content">
              <li><a href="Dashboard.php?page=Products"  class="menu-item">Item list</a>
              </li>
              <li><a href="Dashboard.php?page=Add product" class="menu-item">Add Product</a>
              </li>
                <li><a href="Dashboard.php?page=Add product Cartegory" class="menu-item">Add Cartegory</a>
              </li>
                         <li><a href="Dashboard.php?page=Manage Suppliers"  class="menu-item">Suppliers list</a>
              </li>
              <li><a href="Dashboard.php?page=Add Suppliers" class="menu-item">Add Suppliers</a>
              </li>
            </ul>
          </li>

 

 <li class=" nav-item">
<a href="">
<i class="icon-wpforms text-bold-800"  href=""></i>
<span data-i18n="nav.page_layouts.main" class="menu-title">   Invoice</span>
</a>
   <ul class="menu-content">
              <li><a href="Dashboard.php?page=Suspended items"  class="menu-item">Suspended </a>
              </li>
              <li><a href="Dashboard.php?page=Manage reports"  class="menu-item">Purchase History</a>
              </li>
                <li><a href="Dashboard.php?page=Manage expenses"  class="menu-item">Expense History</a>
              </li>
                 <li><a href="Dashboard.php?page=Mpesa Transactions"  class="menu-item">Mpesa Transactions</a>
              </li>
            </ul>
 </li> 

 <li class=" nav-item">
<a href="">
<i class="icon-shop2 text-bold-800"  href=""></i>
<span data-i18n="nav.page_layouts.main" class="menu-title">   Shop</span>
</a>
   <ul class="menu-content">
              <li><a href="Dashboard.php?page=Shops"  class="menu-item"><?=$_SESSION['SESS_SNAME']?> Shop Profile</a>
              </li>
              <li><a href="Dashboard.php?page=Shop Settings"  class="menu-item"><?=$_SESSION['SESS_SNAME']?> Settings</a>
              </li>
                <li><a href="Dashboard.php?page=Manage Shops"  class="menu-item">Manage Other Shops</a>
              </li>
            </ul>
 </li> 

 <li class=" nav-item">
<a href="#">
<i class="icon-stats-dots"  href="#"></i>
<span data-i18n="nav.page_layouts.main" class="menu-title">Statistics</span>
</a>          
          <ul class="menu-content">
              <li><a href="Dashboard.php?page=Statistics"  class="menu-item">Item Quantity </a>
              </li>
              <li><a href="Dashboard.php?page=Purchase Statistics"  class="menu-item">Purchase History</a>
              </li>
            </ul>
</li> 

 <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
          </li>
<li class=" nav-item"><a href="Dashboard.php?page=Documentation"><i class="icon-ios-paper" href="Dashboard.php?page=Documentation"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Documentation</span></a>
            
          </li> <hr>

	

            <div class="card bg-blue-grey bg-darken-4">
                <div class="card-body">
                    <div class="card-header">
                <i class="icon-server">  </i> <span data-i18n="nav.category.support">  Server Utilization</span>
                    <div class="card-block">
                        <div class="media">
                            
                            <div class="media-body text-xs-right">
                               <span data-i18n="nav.page_layouts.main" class="menu-title">Memory Usage:<?

echo number_format (get_server_memory_usage()) ?>%</span><progress class="progress progress-striped" value="<?echo get_server_memory_usage() ?>" max="100" style="height: 5px;" ></progress>
<span class="text-xs-left menu-title" data-i18n="nav.page_layouts.main" id="example-caption-1">CPU Usage: <?echo number_format (get_server_cpu_usage()) ?>% </span>
						<progress class="progress progress-striped" value="<?echo get_server_cpu_usage() ?>" max="100" style="height: 5px;"></progress>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <div class="card bg-blue-grey bg-darken-4">
                <div class="card-body">
                    <div class="card-header">
                <i class="icon-server">  </i> <span data-i18n="nav.category.support">  Server Details</span>
                    <div class="card-block">
                        <div class="media">
                            
                            <div class="media-body text-xs-left">
                               <span data-i18n="nav.page_layouts.main" class="menu-title">Server: Localhost via UNIX socket
Server type: MariaDB
Server connection: SSL is not being used Documentation
Server version: 10.4.17-MariaDB - Source distribution
Protocol version: 10
User: root@localhost
Server charset: UTF-8 Unicode (utf8mb4)
</span>
 
<span class="text-xs-left menu-title" data-i18n="nav.page_layouts.main" id="example-caption-1">Web server: Apache/2.4.46 (Unix) OpenSSL/1.1.1i PHP/7.4.15 mod_perl/2.0.11 Perl/v5.32.1
Database client version: libmysql - mysqlnd 7.4.15
PHP extension: mysqli Documentation curl Documentation mbstring Documentation
PHP version: 7.4.15</span>
						   </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
       </div>
     
           </div>
     
    </div>      <!-- main menu header end-->