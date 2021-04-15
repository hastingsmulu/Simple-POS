<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Contact Form</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Dashboard.php?page=Dashboard">Home</a>
                </li>
                
                <li class="breadcrumb-item active"><a href="#">Contact Admin Form</a>
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
<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-colored-form-control">Contact Admin</h4>
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

						

						<form class="form" action="msg.php" method="post">
							<div class="form-body">
                            <h4 class="form-section"><i class="icon-mail6"></i> Contact Info</h4>

								<div class="form-group">
									<label for="userinput5">Date</label>
									<input class="form-control border-primary" type="text" readonly placeholder="date" name="mdate" value="<?php echo date('m/d/yy')?>" id="userinput5">
								</div>

								<div class="form-group">
									<label for="userinput6">Name</label>
									<input class="form-control border-primary" type="text" readonly value="<?=$_SESSION['SESS_FIRSTNAME']?> <?=$_SESSION['SESS_LASTNAME']?>"  id="userinput6" name="sname">
								</div>

								

								<div class="form-group">
									<label for="userinput8">Comment</label>
									<textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Comment"></textarea>
								</div>

							</div>

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
