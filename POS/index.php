
 

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="">
<meta name="">
<meta name="author" content="Hastin">

<title>login</title>

<link rel="" href="">
<link rel="stylesheet" href="assets/css/template.css" media="screen" >
<link rel="stylesheet" media="screen" href="">
<link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="" media="screen">

<link rel="stylesheet" href="">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body style="background-color: #263238;">

<?php

session_start();
include_once("includes/signin.php");
  if(!isset($_SESSION['BOOHOO'])) {
    		header("location: ../index.php?page=shop%20account");
    		exit();
    	}
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
		  ?>

	</body>
	</html>