<?php 
//debug(count($arrOrders));
//debug($arrOrders);
?>
<div class="box">

	<!-- /.box-header -->
	<div class="box-body">
		
		<?php if (count($arrOrders)): $intItemCount=0;?>	
			<?php foreach ($arrOrders as $order):?>

						<div class="row">
							<div class="col-md-12">
								<div class="tab-pane active" id="timeline">
								
									<!-- The timeline -->
									<ul class="timeline timeline-inverse">
                  						<!-- timeline time label -->
                  						<li class="time-label">
                        					<span class="bg-red">
                        						<h4 class="pull-left">Order ID: <strong><?=$order->uuid?></strong>&nbsp;&nbsp;|&nbsp;&nbsp;</h4> 
                        						<h4 class="pull-left">Total Amount: <strong><?= $defaultCurrencySymbol . ' ' . number_format($order->total_amount,2)?></strong></h4> 
<!--                         						<button type="button" class="btn  btn-success btn-sm pull-right">Acknowledge</button> -->
                        					</span>
                  						</li>
                  						<?php foreach ($order->transaction_items as $item): ?>                  
                  						<li><i class="fa  bg-blue"><font size="2"><strong><?=++$intItemCount?></strong></font></i>
											<div class="timeline-item">
												<span class="time">Sub-Total: <strong><?= $defaultCurrencySymbol . ' ' . number_format($item->total_amount,2)?></strong> </span>
												<h3 class="timeline-header"><a><?=$item->menu_name?></a>&nbsp;&nbsp;|&nbsp;&nbsp;Qty: <strong><?=$item->qty?></strong></h3>
												<div class="timeline-body row">
	                        						<div class="col-md-4" style="border-right: 2px solid lightgray; margin-right: 2.5px;">
	                        							<img class="img-responsive center-block img-thumbnail" alt="Menu Image" src="<?=$item->photo?>">
	                        						</div>	                        						
	                        						<div class="col-md-6">
	                        							<span><u>Add-ons:</u></span><br>
	                        							<?php if (!empty($item->add_ons)):?>
	                        							<ul>
	                        								<?php foreach ($item->add_ons as $addOns):?>	                        							
	                        								<li>
	                        									<div></div>
	                        									<?=$addOns['add_on_name']?> | Qty: <strong><?=$addOns['qty']?></strong></li>
	                        								<?php endforeach;?>
	                        							</ul>
	                        							<?php else:?>
														<div class="callout callout-warning">
															<p>No Add-ons</p>
														</div>	                        								
	                        							<?php endif;?>
	                        						</div>
	                      						</div>
	                      						<div class="timeline-footer">
	                        						<a class="btn btn-primary btn-xs">Confirm</a>
	                        						<a class="btn btn-danger btn-xs">Cancel</a>
	                      						</div>
	                    					</div>
                  						</li>
                  						<?php endforeach;?>
										<li>
											<i class="fa fa-clock-o bg-gray"></i>
										</li>
									</ul>								
								
								</div>
							</div>
						</div>
						
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