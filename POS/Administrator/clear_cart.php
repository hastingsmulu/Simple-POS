<?php
	session_start();
	unset($_SESSION['cart']);
    unset($_SESSION['amm_array']);
    unset($_SESSION['pmethod']);
    $_SESSION['message'] = '<div class="alert alert-red alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button><i class="icon-checkmark"></i> Cart cleared successfully';
	header('location:Dashboard.php?page=Create Sale');
?>