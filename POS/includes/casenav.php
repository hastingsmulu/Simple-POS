<?php
		 @$page= $_GET['page'];
		 if($page!="")
		 {
			 switch($page)
			 {
            

			 case 'users':
			 include('Registration/users.php');
			 break;
			 
			 case 'my-profile':
			 include('Registration/profile.php');
			 break;
		
			case 'invoice':
			 include('Receipts/invoice.php');
			 break;
			 
			 case 'expenses':
			 include('Receipts/expenses.php');
			 break;
			 
			 case 'rentreciepts':
			 include('Receipts/rentreciept.php');
			 break;
			 
			 case 'rent-payment':
			 include('Payment/rent.php');
			 break;
            
             case 'loan-payment':
			 include('Payment/loan.php');
			 break;

             case 'expenses-payment':
			 include('Payment/expenses.php');
			 break;

            case 'new-house-util':
			 include('Utilities/newhouse.php');
			 break;

            case 'new-shop-util':
			 include('Utilities/newwshop.php');
			 break;

            case 'new-tenants':
			 include('Utilities/newtenants.php');
			 break;

            case 'expenses-util':
			 include('Utilities/expenses.php');
			 break;

            case 'rent-exp-news':
			 include('Utilities/rent.php');
			 break;

            case 'expense-statistics':
			 include('Utilities/expensestatistics.php');
			 break;

            case 'loan-request':
			 include('Utilities/loanrequest.php');
			 break;

            case 'payment-history':
			 include('Utilities/paymenthistory.php');
			 break;

            case 'shop-new-payment':
			 include('Utilities/shops.php');
			 break;

            case 'tenants-news-util':
			 include('Utilities/tenants.php');
			 break;

            case 'loan-mngmnt':
			 include('settings/loanmngmnt.php');
			 break;

            case 'shop-mngmnt':
			 include('settings/shopmngmnt.php');
			 break;

            case 'user-mngmnt':
			 include('settings/usermngmnt.php');
			 break;
			 
            case 'priv-mngmnt':
			 include('settings/privmngmnt.php');
			 break;

           
			 }
		 }
		
		 ?>