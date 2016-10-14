<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
           
           
		    <?= $this->Form->create($vendorAddress,array('class'=>"form-horizontal")) ?>
		    <?php 
		    	//Hidden Fields
		    	echo $this->Form->hidden('vendor_id',['value'=>$vendor->id]);
		    	echo $this->Form->hidden('vendor_uuid',['value'=>$vendor->uuid]);
		    ?>
					<div class="box-body">
					
						<div class="form-group">                	
							<label for="inputAddressName" class="col-sm-3 control-label">Branch Name</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('address_name',array('label'=>false,'class'=>"form-control",'id'=>'inputAddressName','required'=>true));?>	                    		
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for="inputPhone" class="col-sm-3 control-label">Contact Number</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('phone',array('type'=>'tel','label'=>false,'class'=>"form-control",'id'=>'inputPhone','required'=>true));?>	                    		
	                  		</div>
                		</div>   
                		
						<div class="form-group">                	
							<label for="inputEmail" class="col-sm-3 control-label">Email</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('email',array('type'=>'email', 'label'=>false,'class'=>"form-control",'id'=>'inputEmail','required'=>true));?>	                    		
	                  		</div>
                		</div>                     		             		
                		
						<div class="form-group">                	
							<label for="inputAddress1" class="col-sm-3 control-label">Unit #</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('address1', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                    		<p class="help-block">E.g. 17-03 or leave blank if no unit number</p>
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for="inputAddress2" class="col-sm-3 control-label">House/Building #</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('address2', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>

						<div class="form-group">                	
							<label for="inputStreet" class="col-sm-3 control-label">Street / Avenue / Road Name, Barangay Name</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('street', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                    		<p class="help-block">E.g. Chino Roces Ave, Pasong Tamo</p>
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for="inputCity" class="col-sm-3 control-label">City / Municipality</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('city', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>                		

						<div class="form-group">                	
							<label for="inputState" class="col-sm-3 control-label">Province</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('state', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>                		

						<div class="form-group">                	
							<label for="inputPostCode" class="col-sm-3 control-label">Postal Code</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('post_code', ['label'=>false, 'type'=>'text', 'class'=>'form-control']);?>
	                  		</div>
                		</div>                		
                		
						<div class="form-group">                	
							<label for="inputCountry" class="col-sm-3 control-label">Country</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->select('country',['SINGAPORE' => 'SINGAPORE', 'PHILIPPINES' => 'PHILIPPINES'],['label'=>false, 'type'=>'text', 'class'=>'form-control', 'default'=>'PHILIPPINES']);?> 
	                  		</div>
                		</div>                		

						<div class="form-group">                	
							<label for="inputCountry" class="col-sm-3 control-label">Landmark</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('landmarks', ['label'=>false, 'type'=>'text', 'class'=>'form-control']);?>
	                  		</div>
                		</div>
                		
            		
						<hr>
						<div class="form-group">                	
							<label for="inputCountry" class="col-sm-3 control-label">Operating Hours</label>					
							<div class="col-sm-9">
								<?php $arrOperatingHours = json_decode($vendorAddress->operating_hours, true);?>
								<?=$this->element('vendor_operation', compact('arrOperatingHours'));?>
	
	                  		</div>
                		</div>                		                		
              		</div>
              		
	              <div class="box-footer">
	                <button type="reset" class="btn btn-default">Reset</button>
	                <?= $this->Form->button(__('Update'),['class'=>'btn btn-primary pull-right']) ?>
	                <?= $this->Form->end() ?>
	              </div>
				<!-- /.box-footer -->
          </div>	
	</div>
</div>

<!-- 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendorAddress->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendorAddress->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vendor Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendorAddresses form large-9 medium-8 columns content">
    <?= $this->Form->create($vendorAddress) ?>
    <fieldset>
        <legend><?= __('Edit Vendor Address') ?></legend>
        <?php
            echo $this->Form->input('vendor_id', ['options' => $vendors]);
            echo $this->Form->input('address_name');
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('street');
            echo $this->Form->input('city');
            echo $this->Form->input('state');
            echo $this->Form->input('country');
            echo $this->Form->input('post_code');
            echo $this->Form->input('landmarks');
            echo $this->Form->input('operating_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 -->