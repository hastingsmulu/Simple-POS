<?php
	

session_start();

include('../connect.php');
$e= $_POST ['total'];
$k= $_POST['id']; 
$p= $_POST['status'];
$v= $_POST['date'];




             $sql = "UPDATE totaldayearn 
                                        SET status=?
                                		WHERE id=?";
                                $q = $db->prepare($sql);
                                $q->execute(array($p,$k));
                                
$sql = "UPDATE totaldayearn 
                                        SET date=?
                                		WHERE id=?";
                                $q = $db->prepare($sql);
                                $q->execute(array($v,$k));

$sql = "UPDATE totaldayearn 
                                        SET total=?
                                		WHERE id=?";
                                $q = $db->prepare($sql);
                                $q->execute(array($e,$k));
                                
                            
                             $_SESSION['message'] = "Today Sales Closed ";
                            		
                            		header('location: Dashboard.php?page=Close Day');
                                			exit();
                                 


   


unset($db);

	
?>
