<?php if ( !empty($vendorAddress) ): ?>
<div class="box box-primary">
	<div class="box-body box-profile">

		<h3 class="profile-username text-center"><?= $vendorAddress->address_name;?><br><small>( <?=$vendorAddress->uuid?> )</small></h3>
		

		<ul class="list-group list-group-unbordered">
			<li class="list-group-item">
				<strong><i class="fa fa fa-phone margin-r-5"></i> <b>Phone</b></strong> <a class="pull-right"><?= h($vendorAddress->phone) ?></a>
			</li>
			<li class="list-group-item">
				<strong><i class="fa fa fa-envelope margin-r-5"></i> <b>Email</b></strong> <a class="pull-right"><?= h($vendorAddress->email) ?></a>
			</li>			
        	<li class="list-group-item">
            	<strong><i class="fa fa fa-map-marker  margin-r-5"></i> <b>Address</b></strong> 
            	<span>
	       			<p class="text-muted">
	       				<?= empty($vendorAddress->address1) ? "" : h($vendorAddress->address1) ?>
	       				<?= empty($vendorAddress->address2) ? "" : ", ".h($vendorAddress->address2) ?>
	       				<?= empty($vendorAddress->street) ? "" : " ".h($vendorAddress->street) ?>
	       				<?= empty($vendorAddress->city) ? "" : "<br>".h($vendorAddress->city) ?>
	       				<?= empty($vendorAddress->state) ? "" : "<br>".h($vendorAddress->state) ?>
	       				<?= empty($vendorAddress->country) ? "" : "<br>".h($vendorAddress->country) ?>
	       				<?= empty($vendorAddress->post_code) ? "" : "<br>".h($vendorAddress->post_code) ?>
		                <?= empty($vendorAddress->landmarks) ? "" : "<br>".h($vendorAddress->landmarks) ?>
	       			</p>
	       			<p class="text-muted">
		                <?= h($vendorAddress->latitude) ?>
		                <?= h($vendorAddress->longitude) ?>	       			
	       			</p>            		
            	</span>
			</li>
			<li class="list-group-item">
				<strong><i class="fa fa fa-clock-o margin-r-5"></i> <b>Operating Hours</b></strong> 
              	<p class="text-muted">
                	<?php 
                		$arrOperatingHours = json_decode(($vendorAddress->operating_hours), true );
                		foreach ($arrOperatingHours as $v) {
							$strDay = key($v);
							$strOperate = ucfirst($strDay) . '&#09;' . $v[$strDay]['start'] . ' - ' . $v[$strDay]['end'];
							echo "<span>$strOperate</span><br>";             			
                		}
                	?>
              	</p>				
			</li>		

			<li class="list-group-item">
				<?= $this->Html->link(__('Edit'), '#',['class'=>'label label-warning btnEditVendorAddress', 'data-toggle'=>"modal", 'data-target'=>"#modalEditBranch", 'id'=>"btnEditBranch",'vendor-uuid'=>$vendorAddress->vendor->uuid,'branch-id'=>$vendorAddress->id] ) ?>
			</li>
		</ul>
	</div>
</div>
<?php endif;?>
<?= $this->element('modals',  ['id'=>'modalEditBranch','modalTitle'=>'Edit Branch Details','size'=>'modal-lg'])?>