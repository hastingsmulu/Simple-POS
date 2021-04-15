 <?php

    	
    	
    	
    ?>

<!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="Dashboard.php?page=Dashboard" class="navbar-brand nav-link"><img alt="branding logo" src="../app-assets/images/logo/robust-logo-light.png" data-expand="../app-assets/images/logo/robust-logo-light.png" data-collapse="../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>

             
             
         
          </ul>

        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">

              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>

              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class=""></i></a></li>
 
 <li class="nav-item hidden-sm-down"><a href="Dashboard.php?page=Customers"  class="btn btn-outline-success  upgrade-to-pro"><i class="icon-users2">         </i> Customers</a> </li><li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class=""></i></a></li>
 <li class="nav-item hidden-sm-down"><a href="Dashboard.php?page=Expenses"  class="btn btn-outline-success  upgrade-to-pro"><i class="icon-tasks">         </i> Expenses</a> </li><li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class=""></i></a></li>

</ul>
          
              

              
                
             
 <ul class="nav navbar-nav float-xs-right">
 <a href="Dashboard.php?page=Create Sale"><li class="dropdown dropdown-notification  nav-item" href="Dashboard.php?page=Create Sale"><a href="Dashboard.php?page=Create Sale"  data-toggle="dropdown" class="nav-link nav-link-label button"><i class="ficon icon-cart4" href="Dashboard.php?page=Create Sale"></i><span class="tag tag-pill tag-info tag-up"  href="Dashboard.php?page=Create Sale">
<?php
	//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'root', '', 'posxdb');
						//create array of initail qty which is 1
 						$index = 0;
                      
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);

 						}  
						$sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
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
?> </span></a> <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  
                    <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2"><a href="Dashboard.php?page=Create Sale" class="text-muted "><button type="button" class="btn mr-0 mb-0 btn-secondary"><i class="ficon icon-shopping-basket"> </i>  Go to My Cart </button>   </a></span><span class="notification-tag tag tag-default tag-info float-xs-right m-0" ></span></h6>
<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
					include("../con.php");

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
 <!-- User Dropdown Content-->
 <ul class="nav navbar-nav float-xs-right">
 <li class="dropdown dropdown-notification  nav-item"><a href="Dashboard.php?page=My-Profile"  data-toggle="dropdown" class="nav-link nav-link-label button"><i class="ficon icon-mail6" href="Dashboard.php?page=My-Profile"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up"  href="Dashboard.php?page=My-Profile"><?php

include("../con.php");

$sql = "SELECT * FROM misc WHERE  sstat='Not Seen' AND status='Replied'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
?></span></a>
                 <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0" ></span></h6>
                  </li>
<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM misc WHERE sstat='Not Seen' AND status='Replied' ORDER BY id DESC LIMIT 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
                  <a href="Dashboard.php?page=My-Inbox" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading" href=""><?php echo $row['replyname']; ?></h6>
                          <p class="notification-text font-small-3 text-muted"><?php echo $row['reply']; ?></p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted"><?php echo $row['date']; ?></time></small>
                      


<div class="text-xs-right" id="heading2" class="card-header">
<form class="form" action="seen.php" method="post">
									<input class="form-control border-primary hidden" type="num" readonly placeholder="id" name="id" value="<?php echo $row['id']; ?>" id="userinput5">
<button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to add to seen messages " ><?php echo $row['sstat']; ?></button>
</form>  </div>  </div>
                      </div></a></li>

<?php
				}
			?>
                  <li class="dropdown-menu-footer"><a href="Dashboard.php?page=My-Inbox" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                </ul>
              </li>

 <li class="dropdown dropdown-user nav-item"> <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"> <i class="icon-ios-contact-outline teal "  data-toggle="tooltip" data-placement="left" title="" data-original-title="Loged in as <?=$_SESSION['SESS_BIOGRAPHY']?>"> <span><?=$_SESSION['SESS_FIRSTNAME']?> <?=$_SESSION['SESS_LASTNAME']?></span></a></i>
                <div class="dropdown-menu dropdown-menu-right">
<a href="Dashboard.php?page=My-Profile" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="" data-original-title="My Profile "> <i class="icon-profile" ></i><code><?=$_SESSION['SESS_FIRSTNAME']?> <?=$_SESSION['SESS_LASTNAME']?></code></a>
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
Shop: <code><?=$_SESSION['SESS_SHOP']?>.</code>      
</div>
      <!-- main menu header-->
    
    
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="Dashboard.php?page=Dashboard"><i class="icon-home3" href="Dashboard.php?page=Dashboard"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
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
<a href=" ">
<i class="icon-wpforms"></i>
<span data-i18n="nav.icons.main" class="menu-title">Invoice</span>
</a>    
 <ul class="menu-content">
              <li><a href="Dashboard.php?page=Manage reports"  class="menu-item">Purchase History</a>
              </li>
              <li><a href="Dashboard.php?page=Mpesa Transactions"  class="menu-item">Mpesa Transactions</a>
              </li>
            </ul>  
</li>
 <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
          </li>
<li class="disabled nav-item"><a href="Dashboard.php?page=Documentation"><i class="icon-ios-paper" href="Dashboard.php?page=Documentation"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Documentation</span></a>
            
          </li> 
<li class="nav-item"><a href="Dashboard.php?page=contact admin"><i class="icon-ios-paper" href="Dashboard.php?page=Documentation"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Contact Admin</span></a>
            
          </li> 
           </div>
     
    </div>      <!-- main menu header end-->