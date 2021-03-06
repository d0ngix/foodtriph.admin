<?php if(!empty($arrVendorAddresses)): $counter=0;?>
<?php foreach ($arrVendorAddresses as $vendorAddresses): $counter++; ?>
<?php if($vendorAddresses->deleted) continue;?>

<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
            	<h3 class="box-title pull-left">
            		<a data-toggle="collapse" data-parent="#accordion_<?=$counter?>" href="#collapse_<?=$counter?>" class="collapsed" aria-expanded="false">
						<?= h($vendorAddresses->address_name) ?>
                    </a>            	
            	</h3>
            </div>
            <!-- /.box-header -->
            		
			<div class="box-group" id="accordion_<?=$counter?>">			            		
			<div id="collapse_<?=$counter?>" class="box-body row panel-collapse collapse in" aria-expanded="false" style="">
				<div class="col-md-4">
					<strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
					<hr>
	       			<p class="text-muted">
	       				<?= empty($vendorAddresses->address1) ? "" : h($vendorAddresses->address1) ?>
	       				<?= empty($vendorAddresses->address2) ? "" : ", ".h($vendorAddresses->address2) ?>
	       				<?= empty($vendorAddresses->street) ? "" : " ".h($vendorAddresses->street) ?>
	       				<?= empty($vendorAddresses->city) ? "" : "<br>".h($vendorAddresses->city) ?>
	       				<?= empty($vendorAddresses->state) ? "" : "<br>".h($vendorAddresses->state) ?>
	       				<?= empty($vendorAddresses->country) ? "" : "<br>".h($vendorAddresses->country) ?>
	       				<?= empty($vendorAddresses->post_code) ? "" : "<br>".h($vendorAddresses->post_code) ?>
		                <?= empty($vendorAddresses->landmarks) ? "" : "<br>".h($vendorAddresses->landmarks) ?>
	       			</p>
	       			<p class="text-muted">
		                <?= h($vendorAddresses->latitude) ?>
		                <?= h($vendorAddresses->longitude) ?>	       			
	       			</p>
	       			<?php if (empty($vendorAddresses->latitude) && empty($vendorAddresses->longitude)):?>
					<div class="alert alert-danger" style="padding:5px !important;">
						<i class="icon fa fa-ban"></i> Address Unverifiable! Please update the address.	
					</div>	       			
					<?php endif;?>
				</div>
				<div class="col-md-4">
	            	<strong><i class="fa fa-clock-o margin-r-5"></i> Operating Hours</strong>
	            	<hr>
	              	<p class="text-muted">
	                	<?php 
	                		$arrOperatingHours = json_decode(($vendorAddresses->operating_hours), true );
	                		foreach ($arrOperatingHours as $v) {
								$strDay = key($v);
								$strOperate = ucfirst($strDay) . '&#09;' . $v[$strDay]['start'] . ' - ' . $v[$strDay]['end'];
								echo "<span>$strOperate</span><br>";             			
	                		}
	                	?>
	              	</p>
					
				</div>
				<div class="col-md-4">
					<strong><i class="fa fa-shopping-cart margin-r-5"></i>Orders</strong>
					<hr>
					<p>
						<a class="btn btn-app label-info">
	                		<span class="badge bg-yellow">2</span>
	                		<i class="fa fa-shopping-cart"></i> New Orders
	              		</a>              						
						<a class="btn btn-app label-danger">
	                		<span class="badge bg-yellow">3</span>
	                		<i class="fa fa-shopping-cart"></i> Pending Orders
	              		</a>
					</p>
	
				</div>
			</div>
			</div>
			<div class="box-footer">
				<div class="pull-left">				
                    <?= $this->Html->link(__('View'), ['controller'=>'vendor_addresses', 'action' => 'view', $vendorAddresses->id, $vendor->uuid],['class'=>'label label-info']) ?>
                    <?= $this->Html->link(__('Edit'), '#',['class'=>'label label-warning btnEditVendorAddress', 'data-toggle'=>"modal", 'data-target'=>"#modalEditBranch", 'id'=>"btnEditBranch",'vendor-uuid'=>$vendor->uuid,'branch-id'=>$vendorAddresses->id] ) ?> 
                    <?= $this->Form->postLink(__('Delete'), ['controller'=>'vendorAddresses', 'action' => 'delete', $vendorAddresses->id, $vendor->uuid], ['class'=>'label label-danger','confirm' => __("Are you sure you want to delete $vendorAddresses->address_name?")]) ?>
				</div>                   
            	<div class="pull-right">
            		<div class="btn-group">
                  		<button type="button" class="btn btn-success">Active</button>
                  		<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    		<span class="caret"></span>
                    		<span class="sr-only">Toggle Dropdown</span>
                  		</button>	
                  		<ul class="dropdown-menu" role="menu">
                    		<li><a href="#">Active</a></li>                  		
                    		<li><a href="#">Inactive</a></li>
                  		</ul>
                	</div>
            	</div>
			</div>			

			
            		<!-- /.box-body -->
		</div>
	</div>
</div>            
            
<?php endforeach; ?>
<?php endif;?>
<?= $this->element('modals',  ['id'=>'modalEditBranch','modalTitle'=>'Edit Branch Details','size'=>'modal-lg'])?>
