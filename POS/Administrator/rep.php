<?php
 if(!isset($_SESSION['SESS_SHOP'])) {
    		header("location: ../index.php");
    		exit();
    	}
if ($_SESSION['SESS_BIOGRAPHY'] !='Administrator'){
			$_SESSION['message'] = 'You need Admin-Rights to view this page.';
if(isset($_SESSION['message'])){
				?>
				<div style="text-align:right;" class="alert alert-success alert-dismissible fade in mb-2" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}
                exit();
		}
?>


<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Reply Form</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Dashboard.php?page=Dashboard">Home</a>
                </li>
                
                <li class="breadcrumb-item active"><a href="#">Reply Form</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">
<?php 
			if(isset($_SESSION['message'])){
				?>
				
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
<?php
				include('../connect.php');


                $id=$_SESSION['messageid'];
                $re=$_SESSION['messageuser'];
                $date=$_SESSION['messagedate'];
				$result = $db->prepare("SELECT * FROM misc WHERE id=$id ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-colored-form-control">Reply</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							<li><a data-action="close"><i class="icon-cross2"></i></a></li>
						</ul>
					</div>
				</div>
<div class="card-body collapse in">
					<div class="card-block">

						

						<form class="form" action="msgrply.php" method="post">
							<div class="form-body">
                            <h4 class="form-section"><i class="icon-mail6"></i> Reply Info</h4>

								<div class="form-group">
									<label for="userinput5">Date</label>
									<input class="form-control border-primary" type="text" readonly placeholder="date" name="mdate" value="<?php echo $date;?>" id="userinput5">
								</div>

								<input class="form-control border-primary hidden" type="num" readonly placeholder="id" name="id" value="<?php echo $row['id']; ?>" id="userinput5">
<input class="form-control border-primary hidden" type="num" readonly placeholder="id" name="user" value="<?=$_SESSION['SESS_BIOGRAPHY']?>" id="userinput5">

																<div class="form-group">
									<label for="userinput8">Reply To</label>
									<input class="form-control border-primary" type="text" readonly value="<?php echo $row['name']; ?>" placeholder="<?php echo $row['name'];?>" id="userinput6" name="sname">
								</div>
<div class="form-group">
									<label for="userinput6">Re:</label>
									<input class="form-control border-primary" type="text" readonly value="<?php echo $row['details'];?>" placeholder="" id="userinput6" name="sname">
								</div>

								<div class="form-group">
									<label for="userinput8">Reply</label>
									<textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Comment"></textarea>
								</div>

							</div><?php
				}
unset($db);
			?>

							<div class="form-actions right">
								
								<button type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> Save
								</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
 </div>
          </div>
        </div>
