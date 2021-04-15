<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Dashboard.php?page=Dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Manage Brands</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- gmaps basic maps section start -->


<section id="gmaps-basic-maps">
    <!-- Basic Map -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="ficon icon-model-s"></i> Manage Brands</h4>
                    
                </div>
                <div class="card-body collapse in">
                    
					<div id="accordionWrap1" role="tablist" aria-multiselectable="true">
						<div class="card panel mb-0 box-shadow-0 no-border">
							<div id="heading11" role="tab" class="card-header border-bottom-grey border-bottom-lighten-2">
								<a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion11" aria-expanded="false" aria-controls="accordion11" class="h6 indigo collapsed">Click here to view Listed Brands</a>
							</div>
							<div id="accordion11" role="tabpanel" aria-labelledby="heading11" class="card-collapse collapse" aria-expanded="false">
								<div class="card-block">
									<div class="row">
    
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                             
                                <th>Brand Name</th>
                                <th>Creation Date</th>
                                <th>Updation date</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              
                                <td>Toyota Mark II</td>
                                <td>1/5/2020</td>
                                <td>2/2/2020</td>
                                 <td>

<a class="ajax-action-links icon-bin" data-toggle="tooltip" data-placement="right" title="" data-original-title=" Click the bin icon to delete Brand." href='deletecar.php?ID=<?php echo $row['ID']; ?>'></a>
<a class="ajax-action-links icon-printer3" data-toggle="tooltip" data-placement="right" title="" data-original-title=" Click the print icon, right click on the page and sellect Print then enable Layout to Landscape for printing." href='printcar.php?ID=<?php echo $row['ID'];?>'></a><br>



</td>
                            </tr>
                            
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</section>


  </div></div></div>