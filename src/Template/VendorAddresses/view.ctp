<?php 
$this->assign('title', h($vendorAddress->vendor->name));
$this->assign('sub_title', h($vendorAddress->vendor->uuid));
$arrOrdersNew = !empty($arrTransactions[1]) ? $arrTransactions[1] : null;
$arrOrdersAccepted = !empty($arrTransactions[2]) ? $arrTransactions[2] : null;
$arrOrdersPaid = !empty($arrTransactions[3]) ? $arrTransactions[3] : null;
$arrOrdersPreparing = !empty($arrTransactions[4]) ? $arrTransactions[4] : null;
$arrOrdersCompleted = !empty($arrTransactions[5]) ? $arrTransactions[5] : null;
?>
<div class="row">
	<section class="content">
		<div class="row">
		
        	<div class="col-md-3">
				<?= $this->element('vendor_address_profile');?>
	        </div>
        
			<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-primary">
		        	    		<div class="box-body with-border">
									<?= $this->element('orders_widget', ['gridCol'=>6,'title' => "New Orders", 'count' => 123, 'bgColor' => 'aqua']) ?>
									<?= $this->element('orders_widget', ['gridCol'=>6,'title' => "Completed Orders as of " . date('d M Y D'), 'count' => 123, 'bgColor' => 'green']) ?>	            		
			            		</div>
			            	</div>									
						</div>	
					</div>

					<div class="row">
					
						<div class="col-md-12">
							<div class="nav-tabs-custom">
            					<ul class="nav nav-tabs">
              						<li class="active"><a href="#NewOrders" data-toggle="tab" aria-expanded="true">New Orders</a></li>
              						<li class=""><a href="#PendingOrders" data-toggle="tab" aria-expanded="false">Pending Orders</a></li>
              						<li class=""><a href="#CompletedOrders" data-toggle="tab" aria-expanded="false">Completed Orders</a></li>
            					</ul>
            					<div class="tab-content">
              						<div class="tab-pane active" id="NewOrders">              							
										<?= $this->element('orders_list', ['arrOrders'=>$arrOrdersNew, 'title'=>'New Orders', 'tableId'=>'tblOrdersNew' ]) ?>
                					</div>
              
              						<div class="tab-pane" id="PendingOrders">              							
										<?= $this->element('orders_list', ['arrOrders' => $arrOrdersAccepted, 'title'=>'Pending Orders', 'tableId'=>'tblOrdersPending']) ?>
									</div>
									
              						<div class="tab-pane" id="CompletedOrders">
										<?= $this->element('orders_list', ['arrOrders'=>$arrOrdersCompleted, 'title'=>'Completed Orders', 'tableId'=>'tblOrdersCompleted']) ?>
									</div>
				
            					</div>
          					</div>						
						
						</div>
					</div>
				       
	        	</div>	  
			
		</div>
	</section>
</div>