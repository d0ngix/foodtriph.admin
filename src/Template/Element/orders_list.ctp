<?php 
//debug(count($arrOrders));
debug($arrOrders);
?>
<div class="box">

	<!-- /.box-header -->
	<div class="box-body">
		
		<?php if (count($arrOrders)):?>	
			<?php foreach ($arrOrders as $order):?>

						<div class="row">
							<div class="col-md-12">
								<div class="tab-pane active" id="timeline">
								
									<!-- The timeline -->
									<ul class="timeline timeline-inverse">
                  						<!-- timeline time label -->
                  						<li class="time-label">
                        					<span class="bg-red">
                        						<small><u>Order ID:</u></small> <strong><?=$order->uuid?></strong> | 
                        						<small><u>Total Amount:</u></small> <strong><?= $defaultCurrencySymbol . ' ' . number_format($order->total_amount,2)?></strong>
                        					</span>
                  						</li>                  
                  						<li><i class="fa fa-envelope bg-blue"></i>
											<div class="timeline-item">
												<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
												<h3 class="timeline-header"><a href="">Nasi Lemak</a> - Qty: 2</h3>
												<div class="timeline-body">
	                        						Etsy doostang zoodles
	                      						</div>
	                      						<div class="timeline-footer">
	                        						<a class="btn btn-primary btn-xs">Read more</a>
	                        						<a class="btn btn-danger btn-xs">Delete</a>
	                      						</div>
	                    					</div>
                  						</li>
										<li class="time-label">
											<span class="bg-green">3 Jan. 2014</span>
										</li>
										<li>
											<i class="fa fa-camera bg-purple"></i>
											<div class="timeline-item">
												<span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                      							<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
												<div class="timeline-body">
													<img src="http://placehold.it/150x100" alt="..." class="margin">
													<img src="http://placehold.it/150x100" alt="..." class="margin">
													<img src="http://placehold.it/150x100" alt="..." class="margin">
													<img src="http://placehold.it/150x100" alt="..." class="margin">
												</div>
											</div>
										</li>
										<li>
											<i class="fa fa-clock-o bg-gray"></i>
										</li>
									</ul>								
								
								</div>
							</div>
						</div>
						
				

				
						<small><u>Order ID:</u> </small>&nbsp;<strong><?=$order->uuid;?></strong><br>
						<small><u>Total:</u> </small>&nbsp;<strong><font color="green"><?=$defaultCurrencySymbol. ' ' . number_format($order->total_amount,2);?></font></strong><br>
						
						<?php foreach ($order->transaction_items as $item):?>
							<div class="row">
								<div class="col-md-12">
									
								</div>
							</div>
							<?php 
								var_dump($item);
								$arrAddOns = (!empty($item->add_ons)) ? json_decode($item->add_ons, true) : null;
								if (!empty($arrAddOns)) {
									
								}
							?>
						<?php endforeach;?>
						
			<?php endforeach;?>
		
		<?php else:?>
		
		<div class="callout callout-danger">
        	<h4>No <?=$title?> Found!</h4>
		</div>		
		
		<?php endif;?>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
<script>
  $(function () {
    $('#<?=$tableId?>').DataTable();
  });
</script>          