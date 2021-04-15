 <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">User Session Activity Log</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Dashboard.php?page=Dashboard">Home</a>
                </li>
              
                <li class="breadcrumb-item active">Session Activity Log
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><section class="card">
	<div id="invoice-template" class="card-block">
	
		
		<div id="invoice-items-details" class="pt-2">
			<div class="row">
				<div class="table-responsive col-sm-12">
					<table class="table table-hover">
<thead class="table-inverse ">
                                <tr>
                                    
                                    <th class="text-bold-600" style=" height:5px; ">Date & Time</th>
                                    <th class="text-xs-right text-bold-600" style=" height:5px; ">Activity</th>
                                    <th class="text-bold-600" style="  height:5px; ">Username</th>
                                    <th class="text-bold-600" style=" height:5px;">Account Type</th>
                                </tr>
                            </thead>
					  <?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM session_activity_log ORDER BY id DESC ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){

			?>
					  <tbody>
					    <tr>
					      <th scope="row" ><?php echo $row['date']; ?></th>
                            <td class="text-xs-right" ><?php echo $row['status']; ?> <?php echo $row['info']; ?></td>
                            <td class="text-xs-right"  ><?php if($row['user_name']=='Admin'){

echo '<span class="tag tag-default  font-medium-1 ">'.$row['user_name'].'</span>'; 

}
else{
echo '<span class="tag tag-primary font-medium-1 ">'.$row['user_name'].'</span>';
}
?></td>
					      <td class="text-xs-right"  >
<?php if($row['account_type']=='Administrator'){

echo '<span class="tag tag-default  font-medium-1 "  >'.$row['account_type'].'</span>'; 

}
else{
echo '<span class="tag tag-warning font-medium-1 ">'.$row['account_type'].'</span>';
}
?></td>
					    </tr>
					   <?php
				}
unset($db);
			?>
					  </tbody>
					</table>
				</div>
			</div>
			
</section>


        </div>
      </div>
    </div>