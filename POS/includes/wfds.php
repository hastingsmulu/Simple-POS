<?php

function invoices_init($memberInfo){
        
        		return TRUE;
        	}
              function user_before_insert($memberInfo){
                    		$memberid1=($memberInfo['username']);
                    		$getrecordcount=sqlValue("SELECT COUNT(*) FROM grsxcvg_users WHERE class='Administrator' AND username='$memberid1'");
                    		if ($getrecordcount>=2) {
                    			foreach($_SESSION['MSG2'] as $msgs) {
                    echo ' <b>Sorry!! Your new record was not saved.You are limited to 2 user admin.</b>';
                    			}
                    unset($_SESSION['MSG2']);
                    return FALSE;}
                    		else{
                    			return TRUE;}
                    	}
?>