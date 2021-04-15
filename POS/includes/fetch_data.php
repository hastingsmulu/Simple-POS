<?php 


function getrecentpayments($table){
	include("dbconfig.php");
	$sql="SELECT * FROM $table ORDER BY id DESC ";
	if ($result=mysqli_query($conn,$sql)) {
		# code...
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			# code...
			echo "No Payments Made Yet";
		}
		foreach ($result as $paymentskey => $paymentsvalue) {
			# code...
			$tenantid=$paymentsvalue['tenant'];
			$sql="SELECT full_names AS tenantname FROM grsxcvg_shop_tenants WHERE id='$tenantid'";
			$actualtenant=mysqli_query($conn,$sql);
			foreach ($actualtenant as $atkey => $atvalue) {
				# code...
				$storename=$atvalue['tenantname'];
			}
			echo '<a href="payments_view.php?SelectedID='.$paymentsvalue['id'].'" class="list-group-item">
                                    <i class="fa fa-user fa-fw"></i> '.$storename.' <span class="fa fa-money"><b>:$ '.$paymentsvalue['paid_amount'].'</b></span>
                                    <span class="pull-right text-muted small label label-info">'.$paymentsvalue['date'].'
                                    </span>
                                </a>';
		}
	}
	mysqli_close($conn);
}
function defaultedinvoices(){
	include("dbconfig.php");
	#select all invoice ids
	$sql="SELECT id AS inid FROM grsxcvg_invoces";
	if ($result=mysqli_query($conn,$sql)) {
		# code...
		foreach ($result as $allinvoices => $invoicevalue) {
			# code...store the invoice ids
			$storeinvid=$invoicevalue['inid'];
			#select all invoice ids that appear in payments record
			$query="SELECT * FROM grsxcvg_rent WHERE expected_amount='$storeinvid'";
			$results=mysqli_query($conn,$query);
			#count how many results have been returned for each id
			$countresults=mysqli_num_rows($results);
			#if no record exists then automatically no payment has been done for that invoice
			if ($countresults==0) {
				# code..get details for the invoices without payment record
				$sql="SELECT * FROM grsxcvg_invoces WHERE id='$storeinvid'";
				$result=mysqli_query($con,$sql);
				foreach ($result as $definvoices => $defvalue) {
					# code...store tenant id
					$storetenantid=$defvalue['tenant'];
					#get actual tenant name using id stored above
					$query="SELECT full_names AS tentantsname FROM grsxcvg_shop_tenants WHERE id='$storetenantid'";
					$feedback=mysqli_query($conn,$query);
					foreach ($feedback as $actualnamekey => $actualnamevalue) {
						# code...store the name
						$getactualname=$actualnamevalue['tentantsname'];
					}
					echo '<a href="invoices_view.php?SelectedID='.$defvalue['id'].'" class="list-group-item">
                                    <i class="fa fa-user fa-fw"></i> '.$getactualname.' <span class="fa fa-money"><b>:$ '.$defvalue['total'].'</b></span>
                                    <span class="pull-right text-muted small label label-primary">'.$defvalue['year'].' /'.$defvalue['month'].' 
                                    </span>
                                </a>';
				}
			}
		}
	}
	mysqli_close($conn);

}

 ?>