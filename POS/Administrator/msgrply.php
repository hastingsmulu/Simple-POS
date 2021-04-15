<?php
session_start();
include('../connect.php');
include('../con.php');

$id=$_POST['id'];
$a = $_POST['mdate'];
$e= $_POST ['sname'];
$k= $_POST['bio']; 
$h= 'Replied';
$j=$_POST['user'];
$g='Not Seen';

if($k==''){
 $_SESSION['message'] = "<div class='alert alert-warning alert-dismissible fade in mb-2' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button><i class='icon-android-alert'></i> Comment area empty! Just say something ";
		
		header('location: Dashboard.php?page=Reply');
}
else{
$result = $db->prepare("SELECT * FROM misc WHERE id=$id ");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){



$name = $row['id'];
   
$sql = "UPDATE misc 
        SET status=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($h,$name));

$sql = "UPDATE misc 
        SET reply=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($k,$name));

$sql = "UPDATE misc 
        SET replyname=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($j,$name));


$sql = "UPDATE misc 
        SET sstat=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($g,$name));


 $_SESSION['message'] = "<div class='alert alert-info alert-dismissible fade in mb-2' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button><i class='icon-android-checkmark-circle'></i> Message Replied";
		
		header('location: Dashboard.php?page=My-Inbox');
}}
	
?>