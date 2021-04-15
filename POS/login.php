

<?php
include_once("verfy.php");
include_once("main.php");
include_once("includes/capoe.php");
?>
	<?php

 @$page= $_GET['page'];
		 if($page!="")
		 {
			 switch($page)
			 {
			 case '&ok-login- pqE#f45rg1xd':
			 include('login.php');
			 break;
			 
			 case '&ok-signin- E0Zr3&K5d q6':
			 include('signin.php');
			 break;
		
			case '&ok-signup- 3Fg14q5 s8':
			 include('signup.php');
			 break;
			 
			 case 'fogot password-&ok- 7g6Qv&ui':
			 include('fpass.php');
			 break;
			 
			 
			 case '&ok-redir1- 4g6Gs&wi':
			 include('includes/loginconfg.php');
			 break;
			 
            case '&ok-redir2- 7g6r6rf&wiz#':
			 include('includes/logingonfigII.php');
			 break;
            


			 }
		 }
		 else
		 {
                    
		 ?>
 <?php 
		 }
		  ?><!-- /container -->
		</body>
	</html>

