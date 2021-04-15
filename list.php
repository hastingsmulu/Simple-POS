

<div class=" text-xs-center">
               <div id="invoice-footer">
		
				
					<h2 style="color: #ffff;">Please Select Shop Account to Login</h2><br>
				</div>
				
			</div>
	
            <div class="card-block text-xs-left">
               <?php 


			if(isset($_SESSION['message1'])){
				?>
				<div class="alert alert-danger mb-2" role="alert"><h6>Warning Alert</h6>
					<?php echo $_SESSION['message1']; ?>
				</div>
				<?php
				unset($_SESSION['message1']);
			}


			?> 
<div class="table-responsive">
<table id="resultTable"  class="table table-hover table-bordered  mb-0 " >
	<thead class="thead-inverse">
		<tr>
         
			<th class=" font-medium-2 text-bold-800">Shop Account </th>
			<th class=" font-medium-2 text-bold-700"> Details</th>
		</tr>
	</thead>
	<tbody>
		
			<?php

    	
        
               
				include('POS/connect.php');

				$result = $db->prepare("SELECT * FROM shopdetails where status='Active' ORDER BY sid ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){

            
if(!empty($result)){
            $_SESSION['SESS_ID'] = $row['sid'];
            $_SESSION['SESS_SSHOP'] = $row['sname'];
            $_SESSION['SESS_SLOCATION'] = $row['location'];
    		$_SESSION['SESS_SCARTEGORY'] = $row['category'];
            $_SESSION['SESS_SEMAIL'] = $row['email'];
            $_SESSION['SESS_SEMAIL'] = $row['particulars'];
			?>
			<tr >
			<td href="POS/account.php?sid=<?php echo $row['sid']; ?>"><a style="color: #ffff;" rel="facebox" href="POS/account.php?sid=<?php echo $row['sid']; ?>" data-toggle="tooltip" data-placement="bottom" title="Click to Open" data-original-title="Tooltip on top"><?php echo $row['sname']; ?><kbd> <i class="icon-android-open"> </i></a></td>
			
			<td style="color: #ffff;">Location: <code><kbd> <?php echo $row['location']; ?></code> <br>P.O Box: <code> <kbd> <?php echo $row['address']; ?></code> <br> Phone No: <code><kbd> <?php echo $row['contacts']; ?></code> <br>Email Address: <code><kbd> <?php echo $row['email']; ?></code> <br>Category:<code><kbd> <?php echo $row['category']; ?></code></td>
			
			
			
</form>
<br>


			</tr>
<?php
								
							} 
                            else{
						
							?><tr>
								<td colspan='4' class='text-center'>
								</td>
							</tr>
			<?php

				}}

		

unset($db);
?>
		
	</tbody>
</table>

            </div>
          
            
        </div><hr>

    </div>


</section>


        </div>
      </div>
 
    </div>