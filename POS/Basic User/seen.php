<?php

session_start();
include('../connect.php');
$id=$_POST['id'];
$g='Seen';
$sql = "UPDATE misc 
        SET sstat=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($g,$id));


 $_SESSION['message'] = "<div class='alert alert-info alert-dismissible fade in mb-2' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button><i class='icon-android-checkmark-circle'></i> Message Updated";
		
		header('location: Dashboard.php?page=My-Inbox');
?>