<?php 
//debug(count($arrOrders));
//debug($arrOrders);
?>
<div class="box">

	<!-- /.box-header -->
	<div class="box-body">
		
		<?php if (count($arrOrders)): ?>	
			<?php foreach ($arrOrders as $order): $intItemCount=0;?>

						<div class="row">
							<div class="col-md-12">
								<div class="tab-pane active" id="timeline">
								
									<!-- The timeline -->
									<ul class="timeline timeline-inverse">
                  						<!-- timeline time label -->
                  						<li class="time-label">
                        					<span class="bg-green ">
                        						<?php 
												$date = new \DateTime();
												$date->setTimestamp(strtotime($order-> created));
												$interval = $date->diff(new \DateTime( 'now'));
												$strFormat = "";
												if ($interval->y ) $strFormat .= ($interval->y > 1) ? '%d yrs, ' : '%y yr, ' ;
												if ($interval->m ) $strFormat .= ($interval->m > 1) ? '%d mths, ' : '%d mth, ' ;
												if ($interval->d ) $strFormat .= ($interval->d > 1) ? '%d days, ' : '%d day, ' ;
												if ($interval->h ) $strFormat .= ($interval->h > 1) ? '%h hrs, ' : '%h hr, ' ;
												if ($interval->h ) $strFormat .= ($interval->i > 1) ? '%h mins, ' : '%h min, ' ;
                        						?>
                        						<h4 class="pull-left">Date: <strong><?=date('d M Y h:iA', strtotime($order->created) ) . ' ('.$interval->format(trim($strFormat,', ' )).')' ?></strong>&nbsp;&nbsp;|&nbsp;&nbsp;</h4>
                        						<h4 class="pull-left">Order ID: <strong><?=$order->uuid?></strong>&nbsp;&nbsp;|&nbsp;&nbsp;</h4> 
                        						<h4 class="pull-left">Total Amount: <strong><?= $defaultCurrencySymbol . ' ' . number_format($order->total_amount,2)?></strong></h4> 
<!--                         						<button type="button" class="btn  btn-success btn-sm pull-right">Acknowledge</button> -->
                        					</span>
                  						</li>
                  						<?php foreach ($order->transaction_items as $item): ?>                  
                  						<li><i class="fa  bg-blue"><font size="2"><strong><?=++$intItemCount?></strong></font></i>
											<div class="timeline-item">
												<span class="time">Sub-Total: <strong><?= $defaultCurrencySymbol . ' ' . number_format($item->total_amount,2)?></strong> </span>
												<h3 class="timeline-header "><a><?=$item->menu_name?></a>&nbsp;&nbsp;|&nbsp;&nbsp;Qty: <strong><?=$item->qty?></strong></h3>
												<div class="timeline-body row">
	                        						<div class="col-md-4" style="border-right: 2px solid lightgray; margin-right: 2.5px;">
	                        							<img class="img-responsive center-block img-thumbnail" alt="Menu Image" src="<?=$item->photo?>">
	                        						</div>	                        						
	                        						<div class="col-md-6">
		                        						<?php if (!empty($item->add_ons)):?>
														<div class="callout callout-info">
		                        							<span><u>Add-ons:</u></span><br>		                        							
		                        							<ul>
		                        								<?php foreach ($item->add_ons as $addOns):?>	                        							
		                        								<li>
		                        									<div></div>
		                        									<?=$addOns['add_on_name']?> | Qty: <strong><?=$addOns['qty']?></strong></li>
		                        								<?php endforeach;?>
		                        							</ul>														
														</div>	                        						
	                        							<?php else:?>
														<div class="callout callout-warning">
															<p>No Add-ons</p>
														</div>	                        								
	                        							<?php endif;?>
	                        						</div>
	                      						</div>
	                    					</div>
                  						</li>
                  						<?php endforeach;?>
                  						<!-- 
										<li>
											<i class="fa fa-clock-o bg-gray"></i>
										</li>
										 -->
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